<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Enumerations\CategoryType;
use App\Http\Requests\MainCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;

class MainCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('_parent')->orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id', 'parent_id')->get();
        return view('admin.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(MainCategoryRequest $request)
    {

        //return $request;
        try {

            DB::beginTransaction();

            //validation

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $fileName = "";
            if ($request->has('photo')) {

                $fileName = uploadImage('categories', $request->photo);
            }
            //if user choose main category then we must remove paret id from the request

            if($request -> type == CategoryType::mainCategory) //main category
            {
                $request->request->add(['parent_id' => null]);
            }

            //if he choose child category we mus t add parent id

            $category = Category::create($request->except('_token', 'photo'));

            //save translations
            $category->name = $request->name;
            $category->photo = $fileName;
            $category->save();

            DB::commit();

            notify()->success(' لقد تم  الحفظ  بنجاح . ');
            //return redirect()->route('admin.maincategories')->with(['success' => 'تم ألاضافة بنجاح']);
            return redirect()->route('admin.maincategories');

        } catch (\Exception $ex) {
            return $ex;
            DB::rollback();
            notify()->error('لقد حصل خطاء ما  يرجي المحاولة فيما بعد .');
            //return redirect()->route('admin.maincategories')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
            return redirect()->route('admin.maincategories');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //get specific categories and its translations
        $category = Category::orderBy('id', 'DESC')->find($id);

        if (!$category)
            return redirect()->route('admin.maincategories')->with(['error' => 'هذا القسم غير موجود ']);

        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(MainCategoryRequest $request, $id)
    {
        try {
            //validation

            //update DB


            $category = Category::find($id);

            if (!$category)
                return redirect()->route('admin.maincategories')->with(['error' => 'هذا القسم غير موجود']);

            DB::beginTransaction();
            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);



            if ($request->has('photo') ) {
                $fileName = uploadImage('categories', $request->photo);
                Category::where('id', $id)
                    ->update([
                        'photo' => $fileName,
                    ]);
            }

            $category->update($request->except('_token', 'id', 'photo'));

            //save translations
            $category->name = $request->name;
            //$category->photo=$fileName;
            $category->save();
            DB::commit();
            notify()->success(' لقد تم  التعديل   بنجاح . ' );
            //return redirect()->route('admin.maincategories')->with(['success' => 'تم ألتحديث بنجاح']);
            return redirect()->route('admin.maincategories');
        } catch (\Exception $ex) {
            return $ex;
            notify()->error('لقد حصل خطاء ما  يرجي المحاولة فيما بعد .');
            return redirect()->route('admin.maincategories');
           // return redirect()->route('admin.maincategories')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            //get specific categories and its translations
            $category = Category::orderBy('id', 'DESC')->find($id);

            if (!$category)
                return redirect()->route('admin.maincategories')->with(['error' => 'هذا القسم غير موجود ']);
            $image = Str::after($category->photo, 'assets/');
            $image = base_path('assets/' . $image);
            unlink($image); //delete from folder*/
            // detete translation
            $category->delete();
            notify()->warning('تم حذف المنتج بنجاح!');
            //return redirect()->route('admin.maincategories')->with(['success' => 'تم  الحذف بنجاح']);
            return redirect()->route('admin.maincategories');

            } catch (\Exception $ex) {
                notify()->error('لقد حصل خطاء ما  يرجي المحاولة فيما بعد .');
               //return redirect()->route('admin.maincategories')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
                return redirect()->route('admin.maincategories');
            }
    }
    public function changeStatus($id)
    {
        try {
            $category = Category::find($id);
            if (!$category)
                return redirect()->route('admin.maincategories')->with(['error' => 'هذا القسم غير موجود ']);

            $status =  $category -> is_active  == 0 ? 1 : 0;

            $category -> update(['is_active' =>$status ]);
            notify()->success('تم حالة المنتج بنجاح!');
            return redirect()->route('admin.maincategories');

        } catch (\Exception $ex) {
            notify()->error('لقد حصل خطاء ما  يرجي المحاولة فيما بعد .');
            return redirect()->route('admin.maincategories');
        }
    }
}

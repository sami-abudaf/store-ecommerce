<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use Illuminate\Http\Request;

use App\Models\Tag;

use DB;
class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        try{
            DB::beginTransaction();

            //validation
            $tag = Tag::create(['slug' => $request -> slug]);

            //save translations
            $tag->name = $request->name;
            $tag->save();
            DB::commit();
            notify()->success(' لقد تم  الحفظ   بنجاح . ' );
            return redirect()->route('admin.tags');
            // return redirect()->route('admin.tags')->with(['success' => 'تم ألاضافة بنجاح']);
        }catch (\Exception $ex){
            DB::rollback();
            notify()->error('لقد حصل خطاء ما  يرجي المحاولة فيما بعد .');
            return redirect()->route('admin.brands');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //get specific categories and its translations
        $tag = Tag::find($id);

        if (!$tag)
            return redirect()->route('admin.tags')->with(['error' => 'هذا الماركة غير موجود ']);

        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, $id)
    {
        try {
            //validation

            //update DB


            $tag = Tag::find($id);

            if (!$tag)
                return redirect()->route('admin.tags')->with(['error' => 'هذا الماركة غير موجود']);


            DB::beginTransaction();


            $tag->update($request->except('_token', 'id'));  // update only for slug column

            //save translations
            $tag->name = $request->name;
            $tag->save();

            DB::commit();
            notify()->success(' لقد تم  التعديل    بنجاح . ' );
            return redirect()->route('admin.tags');
            //return redirect()->route('admin.tags')->with(['success' => 'تم ألتحديث بنجاح']);

        } catch (\Exception $ex) {

            DB::rollback();
            notify()->error('لقد حصل خطاء ما  يرجي المحاولة فيما بعد .');
            return redirect()->route('admin.tags');
            //return redirect()->route('admin.tags')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            //get specific categories and its translations
            $tags = Tag::find($id);

            if (!$tags)
                return redirect()->route('admin.tags')->with(['error' => 'هذا الماركة غير موجود ']);

            $tags->delete();
            notify()->warning('تم الحذف  المنتج بنجاح!');
            return redirect()->route('admin.tags');
            //return redirect()->route('admin.tags')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            notify()->error('لقد حصل خطاء ما  يرجي المحاولة فيما بعد .');
            return redirect()->route('admin.tags');
            //return redirect()->route('admin.tags')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}

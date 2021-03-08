<?php

namespace App\Http\Controllers\Site;



use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Spatie\Multitenancy\Models\Tenant;

class HomeController extends Controller
{

    public function home()
    {


        $data = [];

        $data['sliders'] = Slider::orderBy('id', 'DESC')->take(3)->select('photo')->get();


        $data['categories'] = Category::parent()->select('id', 'slug' ,'photo')->with(['childrens' => function ($q) {
            $q->select('id', 'parent_id', 'slug','photo');
            $q->with(['childrens' => function ($qq) {
                $qq->select('id', 'parent_id', 'slug','photo');
                $qq->with(['childrens' => function ($qqq) {
                    $qqq->select('id', 'parent_id', 'slug','photo');
                }]);
            }]);
        }])->get();

////new_arrivals


    $data['new_arrivals'] = Product::orderBy('id', 'DESC')->latest()->limit(6)->get();

     ////FLASH DEALS
        $data['flash_deals'] = Product::where('special_price_type' ,'percent')->latest()->limit(1)->take(3)->get();


///TRENDING NOW عرض حسب المشاهدات
   $data['trending_now'] = Product::where('viewed' ,'1')->latest()->take(6)->get();

        $data['brands'] = Brand::orderBy('id', 'DESC')->where('is_active', 1)->latest()->limit(5)->take(5)->get();


        /*$data['trending_now'] = Product::where('viewed',1)
            ->orderBy('id', 'DESC')->latest()->take(6)
            ->get();

*/
// عرض جميع الاقسام مع الافرع//
        $data['categories_center']= Category::whereNull('parent_id')
            ->with(['childrens' => function($category) {
                return $category->withCount(['childrens', 'products']);
            }])
            ->withCount(['childrens', 'products'])->take(4)
            ->get()->all();

       // $data['categories_center'] = Category::whereNull('parent_id')->with('childrens')->take(4)->get();

// عرض القسم الاول مع المنتجات///


     // return  Category::with(['products', 'childrens.products'])->where('is_active', '1')->first();
        // عرض جميع  الاقسام  مع المنتجات //
        //return  Category::with(['products', 'childrens.products'])->where('is_active', '1')->get();

        //return  $data['cat_id'] ;
//return  $data['SMART_PHONE'];


       // return  $data['trendings_now']=Product::with('brand')->get();

        ///
      //return $data['smart_phones'] = Category::with(['products', 'childrens', 'childrens.products'])->where('id', 49)->latest()->take(6)->get();

       // $data['smart_phones'] = Product::orderBy('id', 'DESC')->latest()->first()->get();

      // $data['categories_center'] = Category::with('products')->where('is_active', '1')->get();


        // return  $data['smart_phones'];

// عرض جميع المنتجات من قسم معين
        $data['Electrical_devices']=Category::with('products')->where('id', 40)->get();
        $data['smart_Phone']=Category::with('products')->where('id', 47)->get();
        $data['furniture']=Category::with('products')->where('id', 49)->get();



        return view('front.home', $data );

    }


}

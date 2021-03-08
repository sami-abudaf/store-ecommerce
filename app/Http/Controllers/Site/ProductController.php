<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{




    public function productByIdSlug($slug)
    {


        $data = [];
        $data['product'] = Product::where('slug', $slug)->first();

        if (! $data['product']) {

        }
        $product_id = $data['product']->id;
        $product_categories_ids = $data['product']->categories->pluck('id');

////////product_attributes
        $data['product_attributes'] = Attribute::whereHas('options', function ($q) use ($product_id) {
            $q->whereHas('product', function ($qq) use($product_id) {
                $qq->where('product_id', $product_id);
            });
        })->get();

/////////related_products
        $data['related_products'] = Product::whereHas('categories', function ($cat) use ($product_categories_ids) {
            $cat->whereIn('categories.id', $product_categories_ids);
        })->limit(20)->latest()->get();





/// categories   and subcategory page products-details
        $data['categories'] = Category::parent()->select('id', 'slug' ,'photo')->with(['childrens' => function ($q) {
            $q->select('id', 'parent_id', 'slug','photo');
            $q->with(['childrens' => function ($qq) {
                $qq->select('id', 'parent_id', 'slug','photo');
                $qq->with(['childrens' => function ($qqq) {
                    $qqq->select('id', 'parent_id', 'slug','photo');
                }]);
            }]);
        }])->get();

//



        $data['categories_center']= Category::whereNull('parent_id')
            ->with(['childrens' => function($category) {
                return $category->withCount(['childrens', 'products']);
            }])
            ->withCount(['childrens', 'products'])->take(4)
            ->get()->all();


          return view('front.products-details' ,$data);


    }





}

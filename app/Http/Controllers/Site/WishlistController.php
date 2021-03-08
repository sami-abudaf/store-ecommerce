<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $products = auth()->user()->wishlist()->latest()->get();



        /// categories   and subcategory page products-details
        $data=[];
        $data['categories'] = Category::parent()->select('id', 'slug','photo')->with(['childrens' => function ($q) {
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


        return view('front.wishlists' ,$data, compact('products'));


    }

    public function store(Request $request)
    {
       // return auth()->User::find(16)->wishlist()->all();

        if(! auth()->user()->wishlistHas(request('productId'))){
            auth()->user()->wishlist()->attach(request('productId'));

            return response()->json(['status'=> true,'wished'=>true]);
        }
       return response()->json(['status'=> true,'wished'=>false]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        auth()->user()->wishlist()->detach(request('productId'));
    }
}

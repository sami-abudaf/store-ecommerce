<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function () {

  /* Route::get('/',function () {
        return view('front.home');
    })->name('home')->middleware('verifiedUser');*/

    Route::group(['namespace'=>'Site'/*,'middleware'=> 'guest'*/],function (){
        // guest user

       Route::get('/','HomeController@home')->name('home')->middleware('verifiedUser');

       Route::get('category/{slug}','CategoryController@productsBySlug')->name('category');

        Route::get('product/{slug}','ProductController@productByIdSlug')->name('product.details');


        /**
         * cart routes
         */
        /**
         *  Cart routes
         */
        Route::group(['prefix' => 'cart'], function () {
            Route::get('/', 'CartController@getIndex')->name('site.cart.index');
            Route::post('/cart/add/{slug?}', 'CartController@postAdd')->name('site.cart.add');
            Route::post('/update/{slug}', 'CartController@postUpdate')->name('site.cart.update');
            Route::post('/update-all', 'CartController@postUpdateAll')->name('site.cart.update-all');

           /****/
           Route::get('/addToCart/{product}', 'CartController@addToCart')->name('cart.add');
            Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.remove');
            Route::put('/update/{product}', 'CartController@update')->name('cart.update');


          //  Route::get('/checkout/{amount}', 'CartController@checkout')->name('cart.checkout');


        });

    });


    Route::group(['namespace'=>'Site' , 'middleware'=> ['auth','verifiedUser']],function (){
    // must be authenticated user and verified

            Route::get('profile',function (){
                return 'You Are Authenticated';
            });
    });
    Route::group(['namespace'=>'Site' , 'middleware'=> 'auth'],function (){
        // must be authenticated user
        Route::post('verify-user', 'VerificationCodeController@verify')->name('verify-user');
        Route::get('verify', 'VerificationCodeController@getVerifyPage')->name('get.verifiction.from');

        Route::get('products/{productId}/reviews', 'ProductReviewController@index')->name('products.reviews.index');
        Route::post('products/{productId}/reviews', 'ProductReviewController@store')->name('products.reviews.store');



        Route::get('payment/{amount}', 'PaymentController@getPayments') -> name('payment');

        Route::post('payment', 'PaymentController@processPayment') -> name('payment.process');

    });


    Route::group(['namespace'=>'Site' , 'middleware'=> 'auth'],function (){


        Route::post('wishlist','WishlistController@store')->name('wishlist-store');

        Route::delete('wishlist', 'WishlistController@destroy')->name('wishlist.destroy');

        Route::get('wishlist/products', 'WishlistController@index')->name('wishlist.product.index');


    });

});

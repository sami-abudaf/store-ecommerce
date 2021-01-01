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

    Route::group(['namespace'=>'Site','middleware'=> 'guest'],function (){
        // guest user

       Route::get('/','HomeController@home')->name('home')->middleware('verifiedUser');
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


    });










});


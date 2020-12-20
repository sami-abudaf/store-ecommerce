<?php

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

/*
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

*/
    Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin','prefix' => 'admin'], function () {
        Route::get('/', 'DashboardController@index')->name('admin.dashboard');
        Route::get('logout', 'LoginController@logout')->name('admin.logout');

        Route::group(['prefix' => 'profile'], function () {
            Route::get('edit', 'ProfileController@editProfile')->name('edit.profile');
            Route::PUT('update', 'ProfileController@updateprofile')->name('update.profile');
        });

        Route::group(['prefix' => 'settings'], function () {
            Route::get('shipping-methods/{type}', 'SettingsController@editShippingMethods')->name('edit.shippings.methods');
            Route::put('shipping-methods/{id}', 'SettingsController@updateShippingMethods')->name('update.shippings.methods');
        });


        ################################## categories routes ######################################
        Route::group(['prefix' => 'main_categories'], function () {
            Route::get('/', 'MainCategoriesController@index')->name('admin.maincategories');
            Route::get('create', 'MainCategoriesController@create')->name('admin.maincategories.create');
            Route::post('store', 'MainCategoriesController@store')->name('admin.maincategories.store');
            Route::get('edit/{id}', 'MainCategoriesController@edit')->name('admin.maincategories.edit');
            Route::post('update/{id}', 'MainCategoriesController@update')->name('admin.maincategories.update');
            Route::get('delete/{id}', 'MainCategoriesController@destroy')->name('admin.maincategories.delete');
            Route::get('changeStatus/{id}','MainCategoriesController@changeStatus') -> name('admin.maincategories.status');
        });
        ################################## end categories    #######################################
        ################################## brands routes ######################################
        Route::group(['prefix' => 'brands'], function () {
            Route::get('/','BrandsController@index') -> name('admin.brands');
            Route::get('create','BrandsController@create') -> name('admin.brands.create');
            Route::post('store','BrandsController@store') -> name('admin.brands.store');
            Route::get('edit/{id}','BrandsController@edit') -> name('admin.brands.edit');
            Route::post('update/{id}','BrandsController@update') -> name('admin.brands.update');
            Route::get('delete/{id}','BrandsController@destroy') -> name('admin.brands.delete');
            Route::get('changeStatus/{id}','BrandsController@changeStatus') -> name('admin.brands.status');

        });
        ################################## end brands    #######################################

    });


    Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin','prefix' => 'admin'], function () {
        Route::get('login', 'LoginController@getLogin')->name('get.admin.login');
        Route::post('login', 'LoginController@login')->name('admin.login');
    });
/*
});
*/
//factory(App\Models\Category::class,100)->create();



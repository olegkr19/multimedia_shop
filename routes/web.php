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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('setlocale/{locale}',function($lang){
       \Session::put('locale',$lang);
       return redirect()->back();
});
Route::group(['middleware'=>'language'],function ()
{
    //my translation routes
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/products','ProductController@index');
    Route::get('about', function ()    {
      return view('about');
    });
    Route::post('/products','ProductController@search');
    Route::get('/laptops','ProductController@laptops');
    Route::post('/laptops','ProductController@search');
    Route::get('/cameras','ProductController@cameras');
    Route::post('/cameras','ProductController@search');
    Route::get('/flash-drivers','ProductController@flash_drivers');
    Route::post('/flash-drivers','ProductController@search');
    Route::get('/headphones','ProductController@headphones');
    Route::post('/headphones','ProductController@search');
    Route::get('/smartphones','ProductController@smartphones');
    Route::post('/smartphones','ProductController@search');
    Route::get('/tv-sets','ProductController@tv_sets');
    Route::post('/tv-sets','ProductController@search');
    Route::get('/products/products/{id}','ProductController@getProductId');
    Route::get('/products/laptops/{id}','ProductController@getProductId');
    Route::get('/laptops/products/{id}','ProductController@getProductId');
    Route::get('/products/cameras/{id}','ProductController@getProductId');
    Route::get('/cameras/products/{id}','ProductController@getProductId');
    Route::get('/products/flash-drivers/{id}','ProductController@getProductId');
    Route::get('/flash-drivers/products/{id}','ProductController@getProductId');
    Route::get('/products/headphones/{id}','ProductController@getProductId');
    Route::get('/headphones/products/{id}','ProductController@getProductId');
    Route::get('/products/smartphones/{id}','ProductController@getProductId');
    Route::get('/smartphones/products/{id}','ProductController@getProductId');
    Route::get('/products/tv/{id}','ProductController@getProductId');
    Route::get('/tv-sets/products/{id}','ProductController@getProductId');
    Route::get('cart','ProductController@cart');
    Route::get('add-to-cart/{id}','ProductController@addToCart');
    Route::get('products/nikon','BrandController@nikon');
    Route::get('products/samsung','BrandController@samsung');
    Route::get('products/apple','BrandController@apple');
    Route::get('products/beats','BrandController@beats');
    Route::get('products/canon','BrandController@canon');
    Route::get('products/dell','BrandController@dell');
    Route::get('products/sony','BrandController@sony');
    Route::get('products/transcend','BrandController@transcend');
    Route::get('products/xiaomi','BrandController@xiaomi');
    Route::get('products/asus','BrandController@asus');
    Route::get('products/acer','BrandController@acer');
    Route::get('products/hp','BrandController@hp');
    Route::get('products/lenovo','BrandController@lenovo');
    Route::get('products/prestigio','BrandController@prestigio');
    Route::get('products/dream-machines','BrandController@dream_machines');
    Route::get('products/msi','BrandController@msi');
    Route::get('laptops/asus','CategoryController@laptops_asus');
    Route::get('laptops/hp','CategoryController@laptops_hp');
    Route::get('laptops/dell','CategoryController@laptops_dell');
    Route::get('laptops/acer','CategoryController@laptops_acer');
    Route::get('laptops/lenovo','CategoryController@laptops_lenovo');
    Route::get('laptops/dream-machines','CategoryController@laptops_dream_machines');
    Route::get('laptops/apple','CategoryController@laptops_apple');
    Route::get('laptops/prestigio','CategoryController@laptops_prestigio');
    Route::get('laptops/msi','CategoryController@laptops_msi');
    Route::get('cameras/nikon','CategoryController@cameras_nikon');
    Route::get('cameras/canon','CategoryController@cameras_canon');
    Route::get('cameras/sony','CategoryController@cameras_sony');
    Route::get('flash-drivers/transcend','CategoryController@flashdrivers_transcend');
    Route::get('headphones/beats','CategoryController@headphones_beats');
    Route::get('headphones/apple','CategoryController@headphones_apple');
    Route::get('headphones/sony','CategoryController@headphones_sony');
    Route::get('smartphones/apple','CategoryController@smartphones_apple');
    Route::get('smartphones/xiaomi','CategoryController@smartphones_xiaomi');
    Route::get('smartphones/samsung','CategoryController@smartphones_samsung');
    Route::get('tv/samsung','CategoryController@tv_samsung');
    Route::get('tv/sony','CategoryController@tv_sony');
});
Route::patch('update-cart', 'ProductController@update');
Route::delete('remove-from-cart', 'ProductController@remove');
Route::get('admin','AdminController@index')->middleware('admin');
Route::get('admin/create','AdminController@createProductForm');
Route::post('admin/create','AdminController@create');
Route::delete('remove-product','AdminController@destroy');
Route::get('admin/edit-product/{id}','AdminController@edit');
Route::put('update-product','AdminController@update');
Route::post('send','mailController@sendMail');

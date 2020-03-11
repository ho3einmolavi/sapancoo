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



use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return redirect()->route('index' , 'fa');
});


Route::group(['prefix' => '{locale}' , 'middleware' => 'setLocale'] ,function () {

    Route::get('/contact-us', function () {
        return view('contact-us' , [
            'title' => 'درباره ما'
        ]);
    })->name('contact_us');

    Route::get('/', function () {
        return view('index' , [
            'title' => 'صفحه اصلی'
        ]);
    })->name('index');

    Route::get('/gallery', 'GalleryController@show')->name('gallery');

    //blogs
    Route::get('/blogs' , 'BlogController@show')->name('blogs');
    Route::get('/blog/{id}' , 'BlogController@single')->name('blog');

    //news
    Route::get('/news' , 'NewsController@show')->name('news');
    Route::get('/news/{id}' , 'NewsController@single')->name('new');

    //products
    Route::get('/products' , 'ProductController@index')->name('products');

});



//admin_panel
Route::prefix('/admin')->group(function () {

    //news
   Route::post('/create/news' , 'NewsController@store');
   Route::get('/create/news' , 'NewsController@create');
   Route::get('/news-list' , 'NewsController@index');
   Route::get('/edit/news/{id}' , 'NewsController@edit');
   Route::post('/edit/news/{id}' , 'NewsController@update');

     //blogs
    Route::get('/create/blog' , 'BlogController@create');
    Route::post('/create/blog' , 'BlogController@store');
    Route::get('/blogs-list' , 'BlogController@index');
    Route::get('/edit/blog/{id}' , 'BlogController@edit');
    Route::post('/edit/blog/{id}' , 'BlogController@update');

    //gallery
    Route::get('/create/gallery' , 'GalleryController@create');
    Route::post('/create/gallery' , 'GalleryController@store');
    Route::get('/gallery-list' , 'GalleryController@index');

    //setting
    Route::get('/setting' , 'SettingController@edit');
    Route::post('/edit/setting' , 'SettingController@update');

    //slide show
    Route::get('/create/slide-show' , 'SlideShowController@create');
    Route::post('/create/slide-show' , 'SlideShowController@store');

    //products
    Route::get('/create/product' , 'ProductController@create');
    Route::post('/create/product' , 'ProductController@store');
    Route::get('/products-list' , 'ProductController@show');
    Route::get('/edit/product/{id}' , 'ProductController@edit');
    Route::post('/edit/product/{id}' , 'ProductController@update');
});

//delete
Route::delete('/{table}/{id}', 'DeleteAndSearchController@delete')->name('delete');

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

Route::get('/', function () {
    return view('main');
});

Route::get('/','FrontendController@index');
Route::get('blogs','FrontendController@blogs');
Route::get('single','FrontendController@single');
Route::get('galleries','FrontendController@galleries');
Route::get('works','FrontendController@works');
Route::get('contact', 'FrontendController@contact');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
|Gallery
|--------------------------------------------------------------------------
*/
Route::group([ 'as' => 'gallery.', 'prefix' => 'gallery' ], function ()
{
    Route::get('', 'GalleryController@index')->name('index');
    Route::get('create', 'GalleryController@create')->name('create');
    Route::post('', 'GalleryController@store')->name('store');
    Route::get('{gallery}/edit', 'GalleryController@edit')->name('edit');
    Route::put('{gallery}', 'GalleryController@update')->name('update');
    Route::delete('{gallery}', 'GalleryController@destroy')->name('destroy');
    Route::get('{gallery}/show','GalleryController@show')->name('show');
});

/*
|--------------------------------------------------------------------------
|Blog
|--------------------------------------------------------------------------
*/
Route::group([ 'as' => 'blog.', 'prefix' => 'blog' ], function ()
{
    Route::get('', 'BlogController@index')->name('index');
    Route::get('create', 'BlogController@create')->name('create');
    Route::post('', 'BlogController@store')->name('store');
    Route::get('{blog}/edit', 'BlogController@edit')->name('edit');
    Route::put('{blog}', 'BlogController@update')->name('update');
    Route::delete('{blog}', 'BlogController@destroy')->name('destroy');
    Route::get('{blog}/show','BlogController@show')->name('show');
});
/*
|--------------------------------------------------------------------------
|Works
|--------------------------------------------------------------------------
*/
Route::group([ 'as' => 'work.', 'prefix' => 'work' ], function ()
{
    Route::get('', 'WorkController@index')->name('index');
    Route::get('create', 'WorkController@create')->name('create');
    Route::post('', 'WorkController@store')->name('store');
    Route::get('{work}/edit', 'WorkController@edit')->name('edit');
    Route::put('{work}', 'WorkController@update')->name('update');
    Route::delete('{work}', 'WorkController@destroy')->name('destroy');
    Route::get('{work}/show','WorkController@show')->name('show');
});
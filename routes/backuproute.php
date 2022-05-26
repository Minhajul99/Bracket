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

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');

Route::get('/blank', function () {
    return view('backend.blank');
});
// Route::get('/add', function () {
//     return view('backend.pages.product.addproduct');
// });


// For product
Route::group(['prefix'=>'/product'],function(){

    Route::post('/store','App\Http\Controllers\Backend\ProductController@store')->name('store');

    Route::get('/create','App\Http\Controllers\Backend\ProductController@create')->name('create');

    Route::get('/manage','App\Http\Controllers\Backend\ProductController@index')->name('manage');

    Route::get('/edit/{id}','App\Http\Controllers\Backend\ProductController@edit')->name('edit');

    Route::post('/update/{id}','App\Http\Controllers\Backend\ProductController@update')->name('update');

    Route::get('/delete/{id}','App\Http\Controllers\Backend\ProductController@destroy')->name('delete');
});

// For Category
Route::group(['prefix'=>'/category'],function(){

    Route::post('/catstore','App\Http\Controllers\Backend\CategoryController@store')->name('catstore');

    Route::get('/create','App\Http\Controllers\Backend\CategoryController@create')->name('catcreate');

    Route::get('/manage','App\Http\Controllers\Backend\CategoryController@index')->name('catmanage');

    Route::get('/catedit/{id}','App\Http\Controllers\Backend\CategoryController@edit')->name('catedit');

    Route::get('/catshow','App\Http\Controllers\Backend\CategoryController@catshow')->name('catshow');
    //Route::get('/update','App\Http\Controllers\Backend\CategoryController@cateupdate')->name('category.update');

     Route::post('/update/{id}','App\Http\Controllers\Backend\CategoryController@update')->name('category.update');

    Route::get('/catdelete/{id}','App\Http\Controllers\Backend\CategoryController@destroy')->name('catdelete');
});

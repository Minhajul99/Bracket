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

Route::get('/', function () {
    return view('frontend/index');
})->name('index');

// Api Check
Route::get('/check', function () {
    return view('backend/apicheck');
});

Route::get('/admin', function () {
    return view('backend.dashboard');
})->middleware(['auth'])->name('dashboard');

                // Admin Group

Route::group(['prefix'=>'/admin'],function(){

                // For product

    Route::group(['prefix'=>'/product'],function(){

        Route::post('/store','App\Http\Controllers\Backend\ProductController@store')->middleware(['auth'])->name('store');
        Route::get('/create','App\Http\Controllers\Backend\ProductController@create')->middleware(['auth'])->name('create');
        Route::get('/manage','App\Http\Controllers\Backend\ProductController@index')->middleware(['auth'])->name('manage');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\ProductController@edit')->middleware(['auth'])->name('edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\ProductController@update')->middleware(['auth'])->name('update');
        Route::get('/delete/{id}','App\Http\Controllers\Backend\ProductController@destroy')->middleware(['auth'])->name('delete');
    });

            // For Category

    Route::group(['prefix'=>'/category'],function(){

        Route::post('/catstore','App\Http\Controllers\Backend\CategoryController@store')->middleware(['auth'])->name('catstore');
        Route::get('/create','App\Http\Controllers\Backend\CategoryController@create')->middleware(['auth'])->name('catcreate');
        Route::get('/manage','App\Http\Controllers\Backend\CategoryController@index')->middleware(['auth'])->name('catmanage');
        Route::get('/catedit/{id}','App\Http\Controllers\Backend\CategoryController@edit')->middleware(['auth'])->name('catedit');
        Route::get('/catshow','App\Http\Controllers\Backend\CategoryController@catshow')->middleware(['auth'])->name('catshow');
        Route::post('/update/{id}','App\Http\Controllers\Backend\CategoryController@update')->middleware(['auth'])->name('category.update');
        Route::get('/catdelete/{id}','App\Http\Controllers\Backend\CategoryController@destroy')->middleware(['auth'])->name('catdelete');
    });

    // For Sub Category
    Route::group(['prefix'=>'/subcategory'],function(){

        Route::post('/store','App\Http\Controllers\Backend\SubcategoryController@store')->middleware(['auth'])->name('subcategory.store');
        Route::get('/create','App\Http\Controllers\Backend\SubcategoryController@create')->middleware(['auth'])->name('subcategory.create');
        Route::get('/manage','App\Http\Controllers\Backend\SubcategoryController@index')->middleware(['auth'])->name('subcategory.manage');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\SubcategoryController@edit')->middleware(['auth'])->name('subcategory.edit');
        Route::get('/show','App\Http\Controllers\Backend\SubcategoryController@catshow')->middleware(['auth'])->name('subcategory.show');
        Route::post('/update/{id}','App\Http\Controllers\Backend\SubcategoryController@update')->middleware(['auth'])->name('subcategory.update');
        Route::get('/delete/{id}','App\Http\Controllers\Backend\SubcategoryController@destroy')->middleware(['auth'])->name('subcategory.delete');
    });

    // For Items
    Route::group(['prefix'=>'/items'],function(){

        Route::post('/store','App\Http\Controllers\Backend\ItemsController@store')->middleware(['auth'])->name('items.store');
        Route::get('/create','App\Http\Controllers\Backend\ItemsController@create')->middleware(['auth'])->name('items.create');
        Route::get('/manage','App\Http\Controllers\Backend\ItemsController@index')->middleware(['auth'])->name('items.manage');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\ItemsController@edit')->middleware(['auth'])->name('items.edit');
        Route::get('/show','App\Http\Controllers\Backend\ItemsController@catshow')->middleware(['auth'])->name('items.show');
        Route::post('/update/{id}','App\Http\Controllers\Backend\ItemsController@update')->middleware(['auth'])->name('items.update');
        Route::get('/delete/{id}','App\Http\Controllers\Backend\ItemsController@destroy')->middleware(['auth'])->name('items.delete');
        Route::get('/gallerydelete/{id}','App\Http\Controllers\Backend\ItemsController@gallery_delete')->middleware(['auth'])->name('items.gallery_delete.delete');
    });
});

// For Frontend
// Route::get('/front', function () {
//     return view('frontend/index');
// });

require __DIR__.'/auth.php';

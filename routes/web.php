<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Allshow;
use App\Http\Controllers\sociallogin;
use App\Http\Controllers\Frontend\AddtoCartController;

    //////////////////////////////
    //    All Routes For       //
    //    FrontEnd            //
    ///////////////////////////

// Soical Media Login

Route::get('/gotogoogle',[sociallogin::class,'gotogoogle'])->name('gotogoogle');
Route::get('/google/login',[sociallogin::class,'googleinfostore']);

//Show product

Route::get('/',[Allshow::class,'showcategory'])->name('index');
Route::get('/product/{id}',[Allshow::class,'showproduct'])->name('showproduct');

//Add to Cart

// For Manual Cart System
// Route::group(['prefix' =>'/cart'],function(){
// Route::post('/add',[AddtoCartController::class,'store'])->middleware(['auth'])->name('addtocart');
// Route::get('/itemtocart/{id}',[AddtoCartController::class,'itemtocart'])->middleware(['auth'])->name('itemtocart');
// Route::get('/deleteitem/{id}',[AddtoCartController::class,'destroy'])->middleware(['auth'])->name('deleteitme');
// });

// For Package Cart System

Route::group(['prefix' =>'/cart'],function(){
    Route::post('/add',[AddtoCartController::class,'store'])->middleware(['auth'])->name('addtocart');
    Route::get('/itemtocart/{id}',[AddtoCartController::class,'itemtocart'])->middleware(['auth'])->name('itemtocart');
    Route::get('/deleteitem/{id}',[AddtoCartController::class,'destroy'])->middleware(['auth'])->name('deleteitem');
    Route::post('/cartupdate/{id}',[AddtoCartController::class,'cartupdate'])->middleware(['auth'])->name('cartupdate');
    Route::get('/viewcart',[AddtoCartController::class,'viewcart'])->middleware(['auth'])->name('viewcart');
    Route::get('/globalsearch',[AddtoCartController::class,'globalsearch'])->middleware(['auth'])->name('globalsearch');
    Route::get('/search/{id}',[AddtoCartController::class,'search'])->middleware(['auth'])->name('search');

    });


// Api Check
Route::get('/check', function () {
    return view('backend/apicheck');
});

// My Account
Route::get('/myaccount',function(){
    return view('frontend.pages.myaccount');
})->middleware(['auth'])->name('myaccount');

    //////////////////////////////
    //    All Routes For       //
    //    Backend             //
    ///////////////////////////

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
// Route::get('/home', function () {
//     return view('frontend/index')->name('index');
// });

require __DIR__.'/auth.php';

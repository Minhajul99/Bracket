<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Backend\Category;
use App\Models\Backend\Subcategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Allshow extends Controller
{
    public function showcategory(){
        $allcats=Category::all();
        return view('frontend.index',compact('allcats'));
    }

    public function showproduct($id){
        $subcats=Subcategory::where('catId',$id)->get();
        return view('frontend.products',compact('subcats'));
    }
}

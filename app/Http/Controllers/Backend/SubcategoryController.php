<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Backend\Category;
use App\Models\Backend\Subcategory;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\File;


class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcat = Subcategory::all();
        return view('backend.pages.Subcategory.managesubcategory', compact('subcat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.pages.Subcategory.addsubcategory', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'catId' => 'required',
            'subCatName' => 'required',
            'des' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);

        $subcategory = new Subcategory();
        $subcategory->catId = $request->catId;
        $subcategory->slug = Str::slug($request->subCatName);
        $subcategory->subCatName = $request->subCatName;
        $subcategory->des = $request->des;
        $subcategory->status = $request->status;

        $image = $request->file('image');
        $imageCustomname = rand() . '.' . $image->getClientOriginalExtension();
        $location = public_path('backend/subcategoryimages/' . $imageCustomname);
        Image::make($image)->save($location);
        $subcategory->image = $imageCustomname;

        $subcategory->save();
        return redirect()->route('subcategory.manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcat = Subcategory::find($id);
        if (File::exists('backend/subcategoryimages/' . $subcat->image)) {
            File::delete('backend/subcategoryimages/' . $subcat->image);
        }
        $subcat->delete();
        return redirect()->route('subcategory.manage');
    }
}

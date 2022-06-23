<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\File;
use App\Models\Backend\Items;
use App\Models\Backend\Gallery;
use App\Models\Backend\Subcategory;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Items::all();
        return view('backend.pages.Items.manageitems', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcats=Subcategory::all();
        return view('backend.pages.Items.additems',compact("subcats"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->image) {
            $image = $request->file('image');
            $imageCustomname = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/items/' . $imageCustomname);
            Image::make($image)->save($location);

            $item = new Items();
            $item->item_code = $request->item_code;
            $item->name = $request->name;
            $item->des = $request->des;
            $item->quantity = $request->quantity;
            $item->buyprice = $request->buyprice;
            $item->sellprice = $request->sellprice;
            $item->pic =  $imageCustomname;
            $item->save();
        }
        if ($request->gallery) {
            $galleryimage = $request->file('gallery');
            foreach ($galleryimage as $gimage) {
                $gimageCustomname = rand() . '.' . $gimage->getClientOriginalExtension();
                $location1 = public_path('backend/items/gallery/' . $gimageCustomname);
                Image::make($gimage)->save($location1);

                $gallery = new Gallery();
                $gallery->item_code = $request->item_code;
                $gallery->gallery_pic = $gimageCustomname;
                $gallery->save();
            }
        }
        return redirect()->route('items.manage');
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
        $items = Items::find($id);
        $items->item_code;
        $galleries = Gallery::where('item_code', $items->item_code)->get();
        return view('backend.pages.Items.edititems', compact('items', 'galleries'));
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

        $item = Items::find($id);
        $item->name = $request->name;
        $item->des = $request->des;
        $item->quantity = $request->quantity;
        $item->buyprice = $request->buyprice;
        $item->sellprice = $request->sellprice;

        if (!empty($request->image)) {

            if (File::exists('backend/items/' . $item->pic)) {
                (File::delete('backend/items/' . $item->pic));
            }
            $image = $request->file('image');
            $imageCustomname = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/items/' . $imageCustomname);
            Image::make($image)->save($location);
            $item->pic =  $imageCustomname;
        }
        $item->update();

        if (!empty($request->gallery)) {

            $galleryimage = $request->file('gallery');
            foreach ($galleryimage as $gimage) {
                $gimageCustomname = rand() . '.' . $gimage->getClientOriginalExtension();
                $location1 = public_path('backend/items/gallery/' . $gimageCustomname);
                Image::make($gimage)->save($location1);

                $gallery = new Gallery();
                $gallery->item_code = $request->item_code;
                $gallery->gallery_pic = $gimageCustomname;
                $gallery->save();
            }
        }
        return redirect()->route('items.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Items::find($id);
        if (File::exists('backend/items/' . $items->pic)) {
            (File::delete('backend/items/' . $items->pic));
        }
        $gallerypics = Gallery::where('item_code', $items->item_code)->get();
        foreach ($gallerypics as $gallerypic) {
            if (File::exists('backend/items/gallery/' . $gallerypic->gallery_pic)) {
                (File::delete('backend/items/gallery/' . $gallerypic->gallery_pic));
            }
            $datadelete = Gallery::find($gallerypic->id);
            $datadelete->delete();
        }
        $items->delete();
        return redirect()->route('items.manage');
    }

    public function gallery_delete($id)
    {
        $gallery = Gallery::find($id);
        if (File::exists('backend/items/gallery/' . $gallery->gallery_pic)) {
            (File::delete('backend/items/gallery/' . $gallery->gallery_pic));
        }
        $gallery->delete();
        // return redirect()->route('items.manage');
        return back();
    }
}

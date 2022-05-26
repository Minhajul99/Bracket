<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.Category.managecategory');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function catshow(){

        $alldata= Category::all();
        return response()->json([
            'data'=>$alldata
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'des'=>'required',
            'tag'=>'required'
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>'faild',
                'errors'=>$validator->getMessageBag()
            ]);
        }
        else{
            $category=new Category;
            $category->name = $request->name;
            $category->des = $request->des;
            $category->tag = $request->tag;
            $category->status = $request->status;
            $category->save();
            return response()->json([
                'message'=>'Category Added Successfull',
            ]);
        }
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
        $alldata=Category::find($id);
         if($alldata){
             return response()->json([
                'data'=>$alldata,

             ]);
         }

         else{
            return response()->json([
                'status'=>'400',
                'error'=>'Data Not Found'
             ]);

         }
        //  $alldata->update();
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
        $category=Category::find($id);
        $category->name = $request->name;
        $category->des = $request->des;
        $category->tag = $request->tag;
        $category->status = $request->status;

        $category->update();
        return response()->json([
            'status' => '200',
            'message'=>'Category Update Successfull',
        ]);

        // if($category){
        //     return response()->json([
        //        'data'=>$category,

        //     ]);
        // }

        // else{
        //    return response()->json([
        //        'status'=>'400',
        //        'error'=>'Data Not Found'
        //     ]);

        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();
        return response()->json([
            'message'=>'Category delete Successfully'
        ]);
    }

}

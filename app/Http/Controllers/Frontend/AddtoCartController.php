<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\AddCart;
use phpDocumentor\Reflection\Types\Null_;

class AddtoCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $Addcart= new AddCart();
       $Addcart->user_id=$request->uid;
       $Addcart->product_id	=$request->pid;
       $Addcart->title=$request->title;
       $Addcart->price=$request->price;
       $Addcart->qnt=$request->qnt;
       $Addcart->pic=$request->pic;
       $Addcart->save();
       if($Addcart){
        return response()->json([
            'msg'=>'Item Added Successfuly'
        ]);
       }
       else{
        return response()->json([
            'msg'=>'Something Went Wrong!!'
        ]);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function itemtocart($id)
    {
        $Addcart= AddCart::where('user_id',$id)->get();
        return response()->json([
            'status'=>'success',
            'data'=>$Addcart,
        ]);
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
        $Addcart= AddCart::find($id);
        $Addcart->delete();
        return response()->json([
           'status'=>'success'
        ]);

    }
}

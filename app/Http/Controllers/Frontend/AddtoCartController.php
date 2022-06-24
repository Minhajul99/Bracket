<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\AddCart;
use App\Models\Backend\Category;
use App\Models\Backend\Items;
use Darryldecode\Cart\Facades\CartFacade as Cart;

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
    //   For Package Cart System
        $pid=$request->pid;
        $items=Items::find($pid);
        Cart::add(array(
            'id' => $items->id,
            'name' =>$items->name,
            'price' => $items->buyprice,
            'quantity' => $request->qnt,
            'attributes' => array(
                'pic' =>$items->pic,
            )
        ));
        return back();




    //    For Manual Cart System
    //    $Addcart= new AddCart();
    //    $Addcart->user_id=$request->uid;
    //    $Addcart->product_id	=$request->pid;
    //    $Addcart->title=$request->title;
    //    $Addcart->price=$request->price;
    //    $Addcart->qnt=$request->qnt;
    //    $Addcart->pic=$request->pic;
    //    $Addcart->save();
    //    if($Addcart){
    //     return response()->json([
    //         'msg'=>'Item Added Successfuly'
    //     ]);
    //    }
    //    else{
    //     return response()->json([
    //         'msg'=>'Something Went Wrong!!'
    //     ]);
    //    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
// //    Manual Add cart
//      public function itemtocart($id)
//     {
//         $Addcart= AddCart::where('user_id',$id)->get();
//         return response()->json([
//             'status'=>'success',
//             'data'=>$Addcart,
//         ]);
//     }

        public function viewcart(){
            $allcats=Category::all();
            $items=Items::all();
            return view('frontend.pages.viewcart',compact('allcats','items'));
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
    public function cartupdate(Request $request, $id)
    {

        Cart::update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->qnt,
            ),
          ));
        return back();
    }

    // Global Search

    public function globalsearch(){
        return view('frontend.pages.globalsearch');
    }
    public function search($id){
        $items=Items::where('name','like','%'.$id.'%')->get();
        return response()->json([
            'status'=>'success',
            'data'=>$items,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back();
        // Manual Delete Cart
        // $Addcart= AddCart::find($id);
        // $Addcart->delete();
        // return response()->json([
        //    'status'=>'success'
        // ]);

    }
}

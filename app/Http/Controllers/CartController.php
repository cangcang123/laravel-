<?php

namespace App\Http\Controllers;

use App\Models\Cart_shopping;
use App\Models\product;
use App\Models\user;
use App\Models\customer;
use App\Models\cart_detail; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
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
    public function delete($id)
    {
        $data = cart_shopping::find($id);
        $data->delete();
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function showNew(Cart_shopping $cart)
    {
         //$cdc = DB::table('cart_detail')->
         $cdc = DB::table('cart_detail')->select('cart_detail.id AS id','user.name AS nameuser','product.name AS namepro','cart_detail.quantity','product.price AS price','user.adress AS adruser','user.phone AS phone','cart_detail.notes','cart_shopping.status','cart_shopping.id AS idc')->join('Cart_shopping','Cart_shopping.idcd','=','cart_detail.id')->join('user','user.id','=','cart_detail.iduser')->join('product','product.id','=','cart_detail.idsp')->where('cart_shopping.status',1)->get();

          $cus = DB::table('cart_detail')->select('cart_detail.id AS id','customer.name AS nameuser','product.name AS namepro','cart_detail.quantity','product.price AS price','customer.adress AS adruser','customer.phone AS phone','cart_detail.notes','cart_shopping.status','cart_shopping.id AS idc')->join('Cart_shopping','Cart_shopping.idcd','=','cart_detail.id')->join('customer','customer.id','=','cart_detail.idcus')->join('product','product.id','=','cart_detail.idsp')->where('cart_shopping.status',1)->get();
            return view('admin.cart.showNew',compact('cdc','cus'));     
    }
 


    public static function checkstatus($id){
        //$duet = 0;
        DB::table('Cart_shopping')->where('id',$id)->update(['status' => 0]);
       
       return redirect()->back();
       
    }






    public function showOld(Cart_shopping $cart)
    {
         //$cdc = DB::table('cart_detail')->
         $cdc = DB::table('cart_detail')->select('cart_detail.id AS id','user.name AS nameuser','product.name AS namepro','cart_detail.quantity','product.price AS price','user.adress AS adruser','user.phone AS phone','cart_detail.notes','cart_shopping.status','cart_shopping.id AS idc')->join('Cart_shopping','Cart_shopping.idcd','=','cart_detail.id')->join('user','user.id','=','cart_detail.iduser')->join('product','product.id','=','cart_detail.idsp')->where('cart_shopping.status',0)->get();

          $cus = DB::table('cart_detail')->select('cart_detail.id AS id','customer.name AS nameuser','product.name AS namepro','cart_detail.quantity','product.price AS price','customer.adress AS adruser','customer.phone AS phone','cart_detail.notes','cart_shopping.status','cart_shopping.id AS idc')->join('Cart_shopping','Cart_shopping.idcd','=','cart_detail.id')->join('customer','customer.id','=','cart_detail.idcus')->join('product','product.id','=','cart_detail.idsp')->where('cart_shopping.status',0)->get();
            return view('admin.cart.showOld',compact('cdc','cus'));     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}

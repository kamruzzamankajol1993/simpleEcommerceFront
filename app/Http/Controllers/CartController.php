<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CartController extends Controller
{
    public function cart()  {
        $cartCollection = \Cart::getContent();
        return view('cart')->with(['cartCollection' => $cartCollection]);
    }


    public function buyNow($id){

        $productInfo = DB::table('products')->where('id',$id)->first();


        \Cart::add(array(
            'id' => $productInfo->id,
            'name' => $productInfo->productName,
            'price' => $productInfo->productPrice,
            'quantity' => 1,
            'attributes' => array(
                'image' => $productInfo->productImageOne

            )
        ));

        return redirect()->route('checkOut')->with('success', 'Item is Added to Cart!');


    }

     public function add(Request $request){


        //dd($request->all());

        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image

            )
        ));

        return redirect()->route('cart.index')->with('success', 'Item is Added to Cart!');
    }


     public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('error', 'Item is removed!');
    }

    public function update(Request $request){
       // dd($request->all());

        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('info', 'Cart is Updated!');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('error', 'Cart is cleared!');
    }
}

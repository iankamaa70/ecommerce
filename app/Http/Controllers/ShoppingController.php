<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
use Session;


class ShoppingController extends Controller
{
    
    public function add_to_cart()
    {
    		

    	$pdt = Product::find(request()->pdt_id);	 


    	$cartitem = Cart::add([

    		'id' => $pdt->id,
    		'name' => $pdt->name,
            'quantity' => request()->qty,
    		'price'=> $pdt->price
    		

    	]);



        return redirect()->route('cart');

    	
    }




    public function cart()

    {
        
        return view('cart');
    }




    public function cart_delete($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }




    public function rapid_add()
    {
        $pdt = Product::find(request()->pdt_id);     


        $cartitem = Cart::add([

            'id' => $pdt->id,
            'name' => $pdt->name,
            'quantity' => 1,
            'price'=> $pdt->price
            

        ]);



        return redirect()->route('cart');
    }

    public function update_cart_item(Request $request,$id){
        $quantity=(int)$request->quantity;

        Cart::update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $quantity
            ),
          ));

          return redirect()->route('cart');
    }
}

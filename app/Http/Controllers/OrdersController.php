<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Orders;
use App\OrderItems;
use App\Product;

class OrdersController extends Controller
{
    public function index(){
        $userid=Auth::user()->id;
        $myorders=Orders::where('user_id','=',$userid)->latest()->paginate(8);
        return view('myorders',compact('myorders'));

    }
    public function vieworderitems($id){
        $products=Product::all();
        $currentOrder=Orders::find($id);
       
        if(Auth::user()->id!=$currentOrder->user_id){
            return redirect()->back();
        }
        $orderitems=OrderItems::where("order_id","=",$id)->get();
        return view('orderdetails',compact('currentOrder','orderitems','products'));
    }
    public function adminindex() {
        $myorders=Orders::where('transaction_id','!=',null)->latest()->paginate(8);
        return view('myorders_admin',compact('myorders'));

    }
    public function adminvieworderitems($id){

        $currentOrder=Orders::find($id);
        $orderitems=OrderItems::where("order_id","=",$id)->get();
        return view('orderdetailsadmin',compact('currentOrder','orderitems'));
    }
    public function updateorder($id){
            $order=Orders::find($id);
            $order->confirmed=1;
            $order->save();
            return redirect()->route('admin.orders');
    }
}

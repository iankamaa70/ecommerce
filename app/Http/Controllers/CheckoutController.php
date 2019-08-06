<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use Stripe\Stripe;
use Stripe\Charge;
use Cart;
use Mail;
use Session;
use Auth;
use App\Orders;
use App\OrderItems;

class CheckoutController extends Controller
{
    public function index()
    	{

    		if(Cart::getContent()->count() == 0)
    		   {
    		   	Session::flash('info','Your cart is empty.');

    		   	return redirect()->back();
    		   }
    		return view('checkout');
    	}

    public function pay($id)
    {
		$order=Orders::find($id);

            
    	Stripe::setApiKey("sk_test_nIFv9RaZy9EoFapZBzWiXwjR003JAvq597");


    	$charge = Charge::create([
    		'amount' => Cart::getTotal() * 100,
    		'currency' => 'usd',
    		'description' => 'Buy cart items',
    		'source' => request()->stripeToken
		]);

		$order->transaction_id=$charge->id;
		$order->receipt_url=$charge->receipt_url;
		$order->save();
       
    	Session::flash('success', 'Purchase successfull. wait for our email.');
        Cart::clear();

        Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful);
        return redirect('/shop');
    }

    public function paywithpaypal()
    {
    	$provider = new ExpressCheckout;
				$data = [];
				$data['items'] = [];


				foreach(Cart::getContent() as $key=>$cart){
					$itemDetail=[
						'name' => $cart->name,
				        'price' => $cart->price,
				        'qty' => $cart->quantity
					];

					$data['items'][]=$itemDetail;
				}




				$data['invoice_id'] = unique();
				$data['invoice_description'] = "test invoice";
				$data['return_url'] = url('/payment/success');
				$data['cancel_url'] = url('/cart');

				$total = Cart::getTotal();
				



				$response = $provider->setExpressCheckout($data);
				

				 // This will redirect user to PayPal
				return redirect($response['paypal_link']);
	}
	
	public function createOrder(Request $request){
		

		$validated=$request->validate([
			'billingfirstname'=>'required',
			'billingfirstname'=>'required',
			'billinglastname'=>'required',
			'billingaddress1'=>'required',
			'billingaddress2'=>'required',
			'country'=>'required',
			'billingtown'=>'required',
			'billingstate'=>'required',
			'billingpostcode'=>'required',
			'billingemail'=>'required',
			'billingmobile'=>'required',

			'shippingfirstname'=>'required',
			'shippinglastname'=>'required',
			'company'=>'required',
			'shippingaddress1'=>'required',
			'shippingaddress2'=>'required',
			'shippingtown'=>'required',
			'shippingstate'=>'required',
			'shippingpostcode'=>'required',
			'shippingemail'=>'required',
			'shippingmobile'=>'required',

		]);
		$order=Orders::create($validated);

		$total=Cart::getTotal();;

		foreach(Cart::getContent() as $key=>$cart){
			OrderItems::create([
				'name'=>$cart->name,
				'price'=>$cart->price,
				'quantity'=>$cart->quantity,
				'order_id'=>$order->id,
				'product_id'=>$cart->id
			]);
		
			
			
		}
		
		$userid=Auth::user()->id;
		$order->total=$total;
		$order->user_id=$userid;
		$order->save();

		return redirect()->route('cart.paymenoptions.checkout', $order->id);




	}




	public function showpaymentOptions($id){
		$order=Orders::find($id);

		return view('payment',compact('order'));
	}
}

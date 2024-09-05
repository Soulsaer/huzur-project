<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Razorpay\Api\Api;
use Redirect;
use App\Models\Product;
use App\Models\Order;
use App\Models\BillingDetail;
use App\Models\Category;
use App\Models\Chieldcategory;
use App\Models\Shop;
use App\Models\Cart;

use Illuminate\Support\Facades\Auth;



class CheckoutController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }

    public function stripePost(Request $request)
    {
        $data = $request->all();
    
        if (!empty($data)) {
            $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
            $payment = $api->payment->fetch($data['razorpay_payment_id']);
    
            if (count($data) && !empty($data['razorpay_payment_id'])) {
                try {
                    $response = $api->payment->fetch($data['razorpay_payment_id'])->capture(['amount' => $payment['amount']]);
    
                    // Update the order status to 1 (Success)
                    $latestOrder = Order::where('user_id', Auth::id())->latest()->first();
                    $latestOrder->update(['order_status' => 1]);
                } catch (\Exception $e) {
                    // Update the order status to 3 (Failed)
                    $latestOrder = Order::where('user_id', Auth::id())->latest()->first();
                    $latestOrder->update(['order_status' => 3]);
    
                    \Session::flash('error', $e->getMessage());
                    return redirect()->back();
                }
            }
        }
    
        \Session::flash('success', 'Payment successful, your order will be despatched in the next 48 hours.');
        return redirect()->route('home');
    }

    public function stripeCheckoutSuccess(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $response = $stripe->checkout->sessions->retrive($request->session_id);

        return redirect()->route('stripe.index')->with('success', 'Payment Successful.');


    }

   public function buyNow(Request $request)
    {

        if (Auth::check()) {
              // dd($request->all());
            // Generate a random order ID
            $randomNumber = mt_rand(1000000000000000, 9999999999999999);
            $currentMonth = date('m');
            $orderID = "ORDER-$randomNumber-$currentMonth";

            // Create a new order
            $order = new Order;
            $order->user_id = Auth::user()->id;
            $order->product_id = $request->product_id;
            $order->order_id = $orderID;
            $order->metal_type = $request->metal_type;
            $order->ring_size = $request->ringSize; 
            $order->order_status = 0;
            $order->delivery_status = 0;
            $order->save();

            $product = Product::find($request['product_id']);


            $title = 'Order Tracking';
            $description = 'Order Tracking';
            $others = 'Order Tracking';
            $keyword = 'Order Tracking';
            $formatTreeCategory = Category::tree();
            $subChieldcategory = Chieldcategory::all();
            $international_shop = Shop::all();

            return view('final_page', compact('product','title','description','others','keyword','formatTreeCategory','subChieldcategory','international_shop','order'));

            } else {
                return redirect()->route('userlogin'); // Replace 'login' with the actual login route name
            }
        
      
    }

    public function buyNowCod($id)
    {

        if (Auth::check()) {

            $order = Order::find($id);
            $order->order_status = 1;
            $order->save();
                \Session::flash('success', 'order Placed Successfully, your order will be despatched in the next 48 hours.');
                return redirect()->route('home');

            } else {
                return redirect()->route('userlogin'); // Replace 'login' with the actual login route name
            }
        
      
    }

    public function buyNowCart(Request $request)
    {
        if (Auth::check()) {
        // dd('hello');

            $cartItems = Cart::where('user_id', Auth::user()->id)->get();
            if (!empty($cartItems)) {
                $currentMonth = date('m');
                $randomNumber = mt_rand(1000000000000000, 9999999999999999);
    
                $totalOrderAmount = 0;
                foreach ($cartItems as $cartItem) {

                    $productTotalPrice = $cartItem['qty'] * $cartItem['price'];

                    // Add the product total price to the total order amount
                    $totalOrderAmount += $productTotalPrice;


                    $orderID = "ORDER-$randomNumber-$currentMonth";
    
                    // Create a new order
                    $order = new Order;
                    $order->user_id = Auth::user()->id;
                    $order->product_id = $cartItem['product_id'];
                    $order->order_id = $orderID;
                    // $order->metal_type = $cartItem['metal_type'];
                    // $order->ring_size = $cartItem['sring_size'];
                    $order->order_status = 0;
                    $order->delivery_status = 0;
                    $order->save();
                }
    
       // Delete cart records for the logged-in user
            Cart::where('user_id', Auth::user()->id)->delete();
                // session()->forget('cart'); // Clear the cart after creating orders
    
                $title = 'Order Tracking';
                $description = 'Order Tracking';
                $others = 'Order Tracking';
                $keyword = 'Order Tracking';
                $formatTreeCategory = Category::tree();
                $subChieldcategory = Chieldcategory::all();
                $international_shop = Shop::all();

                // dd('hii');

                return view('final_page', compact('totalOrderAmount','title','description','others','keyword','formatTreeCategory','subChieldcategory','international_shop','order'));

                // \Session::flash('success', 'Orders Placed Successfully, your orders will be dispatched in the next 48 hours.');
                // return redirect()->route('home');
            } else {
                \Session::flash('error', 'Your cart is empty. Add items to your cart before placing an order.');
                return redirect()->route('cart'); // Redirect to the cart page or another route as needed
            }
        } else {
        // dd('hii');

            return redirect()->route('userlogin'); // Replace 'login' with the actual login route name
        }
    }


    public function billingDetailStore(Request $request)
    {
        if($request->order_id)
        {
            $order = Order::find($request->order_id);
            $order->first_name = $request->firstname;
            $order->last_name  = $request->lastname;
            $order->email  = $request->email;
            $order->address  = $request->address;
            $order->city  = $request->city;
            $order->state  = $request->state;
            $order->pincode  = $request->pincode;
            $order->phone_no  = $request->phone;
            $order->save();
        }
        // dd($request->all());
        // $billingDetail = new BillingDetail([
        //     'first_name' => $request->input('first_name'),
        //     'last_name' => $request->input('last_name'),
        //     'address' => $request->input('address'),
        //     'city' => $request->input('city'),
        //     'state' => $request->input('state'),
        //     'zip_code' => $request->input('zip'),
        // ]);
    
        // Associate the billing detail with the current user
        // Auth::user()->billingDetail()->save($billingDetail);
    
        if ($request->ajax()) {
            // If it's an Ajax request, return a JSON response
            return response()->json(['message' => 'Billing details saved successfully!']);
        } else {
            // If it's a regular form submission, redirect back with a session flash
            return redirect()->back()->with('success', 'Billing details saved successfully!');
        }

    }
}
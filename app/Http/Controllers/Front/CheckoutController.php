<?php

namespace App\Http\Controllers\Front;

use App\Models\Order;
use App\Models\OrderAddress;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.checkout');
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
        // print_r($request->all());
        // exit();
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'zip' => 'required',
                'country' => 'required',
                'payment_option' => 'required',
            ]);

            // Create a new order
            $order = new Order();
            $order->payment_method = $request->payment_option;
            $order->payment_method = $request->payment_option;
            $order->product_id = $request->product_id;
            $order->save();

            $address = new OrderAddress();
            $address->order_id = $order->id;
            $address->name = $request->input('name');
            $address->email = $request->input('email');
            $address->address = $request->input('address');
            $address->city = $request->input('city');
            $address->state = $request->input('state');
            $address->zip = $request->input('zip');
            $address->country = $request->input('country');
            $address->save();

            $order::update([($order->amount = $order->product->price_new)]);
        } catch (\Throwable $th) {
            print_r($th->getMessage());
            exit();
            //throw $th;
        }

        // // Get the selected payment option
        // $paymentOption = $request->input('payment_option');

        // // Handle the payment based on the selected option
        // switch ($paymentOption) {
        //     case 'stripe':
        //         // Process the Stripe payment
        //         // ...

        //         // Create a new payment
        //         $payment = new Payment();
        //         $payment->order_id = $order->id;
        //         $payment->payment_method = 'Stripe';
        //         $payment->status = 'paid'; // or any payment status
        //         $payment->save();

        //         break;
        //     case 'paypal':
        //         // Process the PayPal payment
        //         // ...

        //         // Create a new payment
        //         $payment = new Payment();
        //         $payment->order_id = $order->id;
        //         $payment->payment_method = 'PayPal';
        //         $payment->status = 'paid'; // or any payment status
        //         $payment->save();

        //         break;
        //     case 'paymob':
        //         // Process the Paymob payment
        //         // ...

        //         // Create a new payment
        //         $payment = new Payment();
        //         $payment->order_id = $order->id;
        //         $payment->payment_method = 'Paymob';
        //         $payment->status = 'paid'; // or any payment status
        //         $payment->save();

        //         break;
        //     default:
        //         return redirect()
        //             ->back()
        //             ->withErrors(['Invalid payment option selected.']);
        // }

        // // Return a success message
        // return redirect()
        //     ->route('thankyou')
        //     ->with('success', 'Payment successful!');
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
        //
    }
}

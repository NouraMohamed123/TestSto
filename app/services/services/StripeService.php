<?php
namespace App\services\services;

use App\Models\Order;
use App\services\contracts\PaymentGetway;

class StripeService implements PaymentGetway
{
    public function create(Order $order)
    {
        $stripe = new \Stripe\StripeClient(
            config('services.stripe.secret_key')
        );
        $paymentIntent = $stripe->paymentIntents->create([
            'amount' => $order->amount,
            'currency' => config('services.currency'),
            'automatic_payment_methods' => [
                'enabled' => true,
            ],
        ]);
        $output = [
            'clientSecret' => $paymentIntent->client_secret,
        ];

        echo json_encode($output);
    }
}

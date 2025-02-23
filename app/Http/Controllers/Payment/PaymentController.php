<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Paystack;
use Unicodeveloper\Paystack\Facades\Paystack as FacadesPaystack;

class PaymentController extends Controller
{
    public function redirectToGateway()
    {
        try {
            $data = array(
                "amount" => 700 * 100,
                // "reference" => '4g4g5485g8545jg8gj',
                "email" => 'user@mail.com',
                "currency" => "NGN",
                "orderID" => 23456,
            );

            return FacadesPaystack::getAuthorizationUrl($data)->redirectNow();
        } catch (\Exception $e) {
            dd($e);
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = FacadesPaystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Mail\PaymentSuccessfulMail;
use App\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exceptions\PaymentWebHookException;
use Illuminate\Support\Facades\Mail;
use Log;

class PaymentController extends Controller
{
    /**
     * @param Request $request
     */
    public function payStackWebHook(Request $request){
        try{
            define('PAYSTACK_SECRET_KEY', config('paystack.secretKey'));
            // only a post with paystack signature header gets our attention
            if ((strtoupper($_SERVER['REQUEST_METHOD']) != 'POST' ) || !array_key_exists('HTTP_X_PAYSTACK_SIGNATURE', $_SERVER) )
                throw new PaymentWebHookException("Invalid request method or paystack signature does not exist in request");//exit();

            if($_SERVER['HTTP_X_PAYSTACK_SIGNATURE'] !== hash_hmac('sha512', $request->getContent(), PAYSTACK_SECRET_KEY))
                throw new PaymentWebHookException("Invalid Paystack Signature header"); //exit();

            $webHookContent = json_decode($request->getContent());
            $webHookData = $webHookContent->data;

            $gatewayPayment = Payment::where('transaction_ref', $webHookData->reference)->first();
//            dd($gatewayPayment->payable->order);

            if($webHookContent->event === "charge.success" && $webHookData->amount < $gatewayPayment->amount)
                throw new PaymentWebHookException("A valid charge did not or occur in transaction or amount paid is less than the expected amount");//exit();

            //return status ok response to paystack
            http_response_code(200);

            $gatewayPayment->status_code = 02;
            $gatewayPayment->status = $webHookData->status;
            $gatewayPayment->payment_ref = $webHookData->authorization->authorization_code;
            $gatewayPayment->transaction_date = $webHookData->paid_at;
            $gatewayPayment->payment_gateway = $webHookData->authorization->card_type . " | " . $webHookData->authorization->bank;
            $gatewayPayment->response_description = $webHookData->gateway_response;
            $gatewayPayment->gateway_response = $webHookData->amount < $gatewayPayment->amount;

            if(!$gatewayPayment->save()){
                throw new PaymentWebHookException("Payment table not Update");
            }
            try{
                Mail::to('info@rytegate.com')->send(new PaymentSuccessfulMail($gatewayPayment));
            }catch (\Exception $exception){
                Log::error($exception);
            }
        }catch (PaymentWebHookException $error){
            Log::error($error);
        }

        exit();
    }
}

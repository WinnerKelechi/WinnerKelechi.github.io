<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use App\LicenseType;
use App\Country;
use Illuminate\Support\Str;
use Paystack;

class PaymentController extends Controller
{
    public function show($licenseTypeId){
        $licenseType = LicenseType::find($licenseTypeId);
        $licenses = LicenseType::all();
        $countries = Country::all();
        

        return view('payment', compact('licenseType', 'countries', 'licenses'));
    }

    public function makePayment(Request $request){
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|max:100',
            'company' => 'required|max:150',
            'license_type_id' => 'required|exists:license_types,id',
            'address' => 'required',
            'phone' => 'required',
            'city_id' => 'required|exists:cities,id',
            'state_id' => 'required|exists:states,id'
        ]);
        $licenseType = LicenseType::find($request->license_type_id);

        $payment = new Payment();
        $payment->name = $request->name;
        $payment->email = $request->email;
        $payment->phone = $request->phone;
        $payment->company = $request->phone;
        $payment->license_type_id = $request->license_type_id;
        $payment->address = $request->address;
        $payment->transaction_ref = Paystack::genTranxRef();
        $payment->amount = $licenseType->amount;
        $payment->charges = 1.5/100 * $licenseType->amount;
        $payment->payment_method_id = 1;
        $payment->city_id = $request->city_id;
        $payment->state_id = $request->state_id;
        $payment->save();

        return view('payment.interest');

        // return view('online-payment', [
        //     'email' => $payment->email,
        //     'transactionRef' => $payment->transaction_ref,
        //     'amount' => $payment->amount
        // ]);
    }

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        
        $payment = Payment::where('transaction_ref', $paymentDetails['data']['reference'])->first();

        if ($paymentDetails['data']['status'] == 'success' && $paymentDetails['data']['amount'] >= $payment->amount){
            return redirect()->route('payment.success', ['transactionRef' => $payment->transaction_ref]);

        }


        return redirect()->route('payment.fail', $payment->transaction_ref);
    }

    public function success($transactionRef){
        $payment = Payment::where('transaction_ref', $transactionRef)->first();

        return view('payment.success', ['payment' => $payment]);
    }

    public function fail(){
        return view('payment.fail');
    }
}

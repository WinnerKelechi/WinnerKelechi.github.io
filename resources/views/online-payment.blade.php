<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Redirecting to payment gateway</title>
    {{--<link rel="stylesheet" href="{{ asset('css/halogene.css') }}">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /** {*/
            /*box-sizing: border-box;*/
            /*-moz-box-sizing: border-box;*/
            /*-ms-box-sizing: border-box;*/
            /*-o-box-sizing: border-box;*/
        /*}*/
        /*@keyframes spin {*/
            /*from {transform: rotate(0deg);}*/
            /*to {transform: rotate(359deg);}*/
        /*}*/
        /*button {*/
            /*opacity: 0;*/
        /*}*/
        /*.ajaxloader {*/
            /*font-family: arial;*/
        /*}*/
        /*.overlay {*/
            /*background: #fff !important;*/
        /*}*/
        /*.spinner {*/
            /*animation: spin 2s linear infinite;*/
            /*position: relative;*/
        /*}*/
        /*.ajaxloader .spinner:before {*/
            /*height: 98px !important;*/
            /*width: 98px !important;*/
        /*}*/
    </style>
        
</head>
<body>
    
    {{--@include('includes.ajaxLoader')--}}

        {{-- Paystack --}}
        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form" id="payment-form">
            <div class="row" style="margin-bottom:40px;">
                <div class="col-md-8 col-md-offset-2">
                    <input type="hidden" name="email" value="{{ $email }}">
                    <input type="hidden" name="amount" value="{{ $amount}}">
                    <input type="hidden" name="reference" value="{{ $transactionRef }}"> {{-- required --}}
                    <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                    {{ csrf_field() }}
                </div>
            </div>
        </form>
    <script>
        // displayLoader('Redirecting To Payment Gateway');
        document.getElementById('payment-form').submit();
    </script>
</body>
</html>
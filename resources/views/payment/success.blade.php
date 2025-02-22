@extends('layouts.master')

@section('title', 'Home Page')

@section('content')
    <section class="price_area">
        <div class="container">
            <div class="row justify-content-center p-3">
                <div class="col-lg-8 text-center">
                    <img src="{{ asset('images/success-icon-2.jpg') }}" alt="" class="img-fluid">
                    <div class="main_title">
                        <h2>Payment Successful</h2>
                        <p class="h3">Thank you for your payment of &#x20A6; {{ number_format($payment->amount/100, 2) }}, your request is being processed</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>

    </script>
@endpush

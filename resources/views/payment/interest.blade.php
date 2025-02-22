@extends('layouts.master')

@section('title', 'Home Page')

@section('content')
    <section class="price_area">
        <div class="container">
            <div class="row justify-content-center p-3">
                <div class="col-lg-8 text-center">
                    <img src="{{ asset('images/success-icon-2.jpg') }}" alt="" class="img-fluid">
                    <div class="main_title">
                        <h2>Payment Processed Initiated Successful</h2>
                        <p class="h3">Thank you for showing interest in STRIDE ERP, your request is being processed</p>
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

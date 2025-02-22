@extends('layouts.master')

@section('title', 'Home Page')

@section('content')
    <section class="price_area">
        <div class="container">
            <div class="row justify-content-center p-3">
                <div class="col-lg-8 text-center">
                    <img src="{{ asset('images/success-icon.png') }}" alt="">
                    <div class="main_title">
                        <h2>Error</h2>
                        <p class="h3">An error occur while processing your transaction, please try again later or contact our customer service if error persist</p>
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

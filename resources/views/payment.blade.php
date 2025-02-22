@extends('layouts.master')

@section('content')
    <!--================================
=            Page Title            =
=================================-->

    <section class="section page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <!-- Page Title -->
                    <h1>Payment</h1>
                    <!-- Page Description -->

                </div>
            </div>
        </div>
    </section>

    <!--====  End of Page Title  ====-->
    <section class="">
        <div class="container p-0">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="wizard-v5-content">
                        <div class="wizard-form">
                            <form class="form-register" id="form-register" action="{{ route('payment') }}" method="post">
                                {{ csrf_field() }}
                                {{--<div id="form-total">--}}
                                    <!-- SECTION 1 -->
                                    <h2>
                                        <span class="step-icon"><i class="zmdi zmdi-check"></i></span>
                                        <span class="step-text">Personal Information</span>
                                    </h2>
                                    <section>
                                        <div class="inner p-5">
                                            <div class="form-group">
                                                <label class="mb-2" for="name">Name <span class="required"></span></label>
                                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="mb-2">Email <span class="required"></span></label>
                                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone" class="mb-2">Phone <span class="required"></span></label>
                                                <input type="number" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="company" class="mb-2">Company <span class="required"></span></label>
                                                <input type="text" class="form-control" name="company" id="company" value="{{ old('compan') }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="address" class="mb-2">Address <span class="required"></span></label>
                                                <input type="text" class="form-control" name="address" id="address" value="{{ old('address') }}" required>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="country" class="mb-2">Country <span class="required"></span></label>
                                                        <select name="country_id" id="country" class="form-control" required>
                                                            <option value=""></option>
                                                            @foreach($countries as $country)
                                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="state" class="mb-2">State <span class="required"></span></label>
                                                        <select name="state_id" id="state" class="form-control" required>
                                                            <option value=""></option>                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="city" class="mb-2">City <span class="required"></span></label>
                                                        <select name="city_id" id="city" class="form-control" required>
                                                            <option value=""></option>                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- SECTION 2 -->
                                    <h2>
                                        <span class="step-icon"><i class="zmdi zmdi-check"></i></span>
                                        <span class="step-text">License Information</span>
                                    </h2>
                                    <section>
                                        <div class="inner p-5">
                                            <div class="form-group">
                                                <label for="license_type" class="mb-2">License Type <span class="required"></span></label>
                                                <select class="form-control" name="license_type_id" id="license_type" required>
                                                    <option value="">Select license type</option>
                                                    @foreach ($licenses as $license)
                                                        <option value="{{ $license->id }}" @if($licenseType->id == $license->id) selected @endif>{{ $license->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!--
                                            <div class="form-group">
                                                <label for="amount" class="mb-2">Amount <span class="required"></span></label>
                                                <input type="text" class="form-control" name="amount" id="amount" value="{{ number_format($licenseType->amount/100, 2) }}" readonly>
                                            </div>
                                        -->
                                            <div class="form-group">
                                                <label for="payment_method" class="mb-2">Payment Method <span class="required"></span></label>
                                                <select name="payment_method" id="payment_method" class="form-control" style="padding-top: 5px; padding-bottom: 5px" required>
                                                    <option value="" selected>Select payment method</option>
                                                    <option value="1">Online (Paystack)</option>
                                                    <option value="2">Bank Transfer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- SECTION 3 -->
                                    <h2>
                                        <span class="step-icon"><i class="zmdi zmdi-check"></i></span>
                                        <span class="step-text">Confirm Details</span>
                                    </h2>
                                    <section>
                                        <div class="inner p-5">
                                            <h3>Comfirm Details</h3>
                                            <div class="form-row table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                    <tr class="space-row">
                                                        <th>Full Name:</th>
                                                        <td id="name-val"></td>
                                                    </tr>
                                                    <tr class="space-row">
                                                        <th>Email Address:</th>
                                                        <td id="email-val"></td>
                                                    </tr>
                                                    <tr class="space-row">
                                                        <th>Phone Number:</th>
                                                        <td id="phone-val"></td>
                                                    </tr>
                                                    <tr class="space-row">
                                                        <th>Address Location:</th>
                                                        <td id="address-val"></td>
                                                    </tr>
                                                    {{-- <tr class="space-row">
                                                        <th>Amount:</th>
                                                        <td id="amount-val"></td>
                                                    </tr> --}}
                                                    <tr class="space-row">
                                                        <th>License Type:</th>
                                                        <td id="license-val"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                {{--</div>--}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </div>

@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/jquery.steps.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script async>

        $(document).ready(function(){
            $('.wizard-form').on('change', '#country', function(e){
                let countryId = $(this).val();
                $.ajax({
                    url: '/states/' + countryId
                }).done(function(response){
                    let statesOptions = '<option value=""></option>';
                    for(i in response){
                        statesOptions += `<option value="${ response[i].id}"> ${response[i].name} </option>`;
                    }
                    $('#state').html(statesOptions);
                });
            });

            $('.wizard-form').on('change', '#state', function(e){
                let stateId = $(this).val();
                $.ajax({
                    url: '/cities/' + stateId
                }).done(function(response){
                    let citiesesOptions = '<option value=""></option>';
                    for(i in response){
                        citiesesOptions += `<option value="${ response[i].id}"> ${response[i].name} </option>`;
                    }
                    $('#city').html(citiesesOptions);
                });
            });
        });

        $('#state').change(function(){
            let stateId = $(this).val();
            $.ajax({
                url: '/cities/' + stateId
            }).done(function(response){
                let citiesesOptions = `<option value="${stat.id}"> ${stat.name} </option>`;
                $('#states').html(statesOptions);
            });
        });

        $(function(){

            let form = $("#form-register");
            form.validate();

            form.steps({
                headerTag: "h2",
                bodyTag: "section",
                transitionEffect: "fade",
                enableAllSteps: true,
                autoFocus: true,
                transitionEffectSpeed: 500,
                titleTemplate : '<div class="title">#title#</div>',
                labels: {
                    previous : '<i class="zmdi zmdi-chevron-left"></i>',
                    next : '<i class="zmdi zmdi-chevron-right"></i>',
                    finish : '<i class="zmdi zmdi-chevron-right"></i>',
                    current : ''
                },
                onStepChanging: function (event, currentIndex, newIndex) {
                    let name = $('#name').val();
                    let email = $('#email').val();
                    let phone = $('#phone').val();
                    let company = $('#company').val();
                    let address = $('#address').val();
                    let amount = $('#amount').val();
                    let licenses = ['Basic License', 'Professionsal License', 'Comprehensive License', ]
                    let licenseType = $('#license_type').val();
                    console.log(licenseType)

                    $('#name-val').text(name);
                    $('#email-val').text(email);
                    $('#phone-val').text(phone);
                    $('#address-val').text(address);
                    $('#amount-val').text(amount);
                    $('#license-val').text(licenses[--licenseType]);

                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid();
                },
                onFinishing: function (event, currentIndex)
                {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    form.submit();
                },
            });
        });
    </script>
@endpush

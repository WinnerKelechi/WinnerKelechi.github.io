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
                <h1>Request Demo</h1>
                <!-- Page Description -->
            </div>
        </div>
    </div>
</section>

<!--====  End of Page Title  ====-->
<section class="mb-2 demo-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-2 border-right">
                <h3 class="text-center"><strong>Take a tour of STRIDE ERP</strong></h3>
                <div class="row">
                    <div class="offset-md-2 col-md-8 p-4">
                        <img class="img-fluid" src="{{ asset('images/stride-dashboard11.png') }}" alt="screenshot">
                    </div>
                </div>

                <p class="mb-2">
                    Schedule a demo and we we will show how easy it is to
                </p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fa fa-check"></i> Manage Employee, employee data, payroll, benefits, leave</li>
                    <li class="mb-2"><i class="fa fa-check"></i> Manage vendors, vendor payment and entire vendor life cycle </li>
                    <li class="mb-2"><i class="fa fa-check"></i> Create and monitor projects, projet phases and progress</li>
                    <li class="mb-2"><i class="fa fa-check"></i> And many more ....</li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                    <h3 class="text-center"><strong>Request A Demo</strong></h3>
                    <form class="contactform" method="post" action="{{ route('request-demo') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" placeholder="Name" name="name" id="name" class="validate form-control" value="{{ old('name') }}" required="">
                                    @error('name')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" placeholder="Email" name="email" class="validate form-control" value="{{ old('email') }}" required="">
                                    @error('email')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class=row>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="company">Company</label>
                                    <input type="text" placeholder="Company" name="company" id="company" class="validate form-control" value="{{ old('company') }}" required="">
                                    @error('company')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class=row>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phone">Phone No.</label>
                                    <input type="text" placeholder="Phone" name="phone" id="phone" class="validate form-control" value="{{ old('phone') }}" required="">
                                    @error('phone')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class=row>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="date">Preffered Demo Date</label>
                                    <input type="date" placeholder="Date" name="date" id="date" class="validate form-control" value="{{ old('date') }}" required="">
                                    @error('date')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class=row>
                            <div class="col-md-12">
                                <div class="send">
                                    <button class="btn btn-main-md" type="submit"> Schedule Demo</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            $('.contactform').validate();
        });
    </script>
@endpush

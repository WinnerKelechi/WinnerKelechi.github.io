@extends('layouts.master')


@section('content')

<!--============================
    =       Style Sheet         =
    =============================-->

    <style>

    form {
      border-top:20px;
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #3498db; 
    }

    .container-img{
      display: flex;
      justify-content: center;
      align-items: center;
    }

    </style>


 <!--============================
    =     End of Style Sheet       =
    =============================-->


<meta content="Africa Leading ERP Solution For Business Process Management Free Robust and Cost Effective. CRM, HRM, HR, Asset, Payroll, Accounting, Finance Management" name="keywords">
  
        
        <title>Contact Us - STRIDE ERP</title>

<main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section --

    <div class="container-img">
      <img src="{{ asset('images/img/Stride-ERP-banner.png') }}" class="center" alt="" style="width: 70%; height: 300px; left: 5000px">
    </div>

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Head Office</h3>
                  <p>116-10 Gillingham Dr. Suite 643 Brampton, ON. Canada</p>
                    <h3>Africa Head Office</h3>
                  <p>95 Ogudu Rd., Ogudu, Kosofe LGA, Lagos State, Nigeria</p> 
                    <h3>Other Branch Office</h3>
                  <p>Area H, Opposite Isopadec, New Owerri, Imo State, Nigeria.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>support@strideerp.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p style="color: blue"> 01 515 5084 <br> +234 810 750 5256 </p>
                </div>
              </div>
            </div>

          </div>    
            
            
            <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                      <div class="card card-user">
         <div class="card-header">
           <h5 class="card-title">Send us a message!</h5>
         </div>
        <div class="card-body">
           @if(Session::has('success'))
              <div class="alert alert-success">
        	    {{ Session::get('success') }}
               </div>
           @endif
           
          <form method="post" action="contact-us" >
             {{csrf_field()}}
             <div class="row">
               <div class="col-md-12">
                 <div class="form-group">
                   <label> Name </label>
                   <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name">
                   @error('name')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
             <div class="col-md-12">
               <div class="form-group">
                   <label> Email </label>
                   <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                   @error('email')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>   
             <div class="col-md-12">
                <div class="form-group">
                   <label> Phone Number </label>
                   <input type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone Number" name="phone_number">
                   @error('phone_number')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
              <div class="col-md-12">
                 <div class="form-group">
                   <label> Subject </label>
                   <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" name="subject">
                   @error('subject')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
              <div class="col-md-12">
                <div class="form-group">
                   <label> Message </label>
                   <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message"></textarea>
                   @error('message')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
             </div>
             <div class="row">
              <div class="update ml-auto mr-auto">
                  <br>
                 <button type="submit" class="btn btn-primary btn-round" style="width:100%">Send</button>
               </div>
             </div>
           </form>
         </div>
       </div>
              </div>
           
            </div>

          </div>

</div></div></section>
    
    
    <!--====  End of Page Title  ====-->

    
    


    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://maps.google.com/maps?q=116%20Gillingham%20Dr.%20Suite%20643&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </section><!-- End Map Section -->

  </main><!-- End #main -->


@endsection
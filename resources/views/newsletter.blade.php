@extends('layouts.master')


@section('content')
<main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Newsletter</h2>
          <ol>
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li></li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

   @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     @if (\Session::has('failure'))
      <div class="alert alert-danger">
        <p>{{ \Session::get('failure') }}</p>
      </div><br />
     @endif
    
    
      <section id="hero" class="d-flex align-items-center">
    <div class="portfolio-details-slider swiper-container">
        <div class="swiper-wrapper align-items-center">



            
              <div class="swiper-slide">
              
              
                  <div class="container">
<div class="row">
    
    
    
  <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
    <h1 data-aos="fade-up">WE THANK YOU!</h1>
    <h2 data-aos="fade-up" data-aos-delay="800">Thank you for subscribing, we will keep you updated on the latest news and features of Stride ERP. </h2>
    <div data-aos="fade-up" data-aos-delay="200">
      <a href="{{ route('welcome') }}"> GO BACK</a>
        
        
        
        
        
        
        
        
        
        
        
        
        
      
        
    </div>
  </div>
  <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
    <img src="{{ asset('images/img/thank-you-from-stride-erp.jpg') }}" class="img-fluid animated" alt="">
  </div>
</div>
</div>
            
              
          </div>

         
          

        </div>
      </div>






</section>
    

  </main><!-- End #main -->


@endsection
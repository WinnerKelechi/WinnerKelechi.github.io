<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>

        
            
<!-- Global site tag (gtag.js) - Google Analytics -->
        
        
        
        <!-- SITE TITTLE -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
 <meta cont ent="ERP Expert In Nigeria" name="description">

        <meta content="Africa Leading ERP Solution Provider, For Business Process Management.ERP, CRM, HRM, Asset, Payroll, Accounting, Finance Management " name="keywords">
  

        
        
        
        

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      
        <!-- PLUGINS CSS STYLE -->


        <link href="{{ asset('plugins/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- AOS -->
        <link  href="{{ asset('plugins/aos/aos.css') }}"  rel="stylesheet">

        <!-- CUSTOM CSS -->
 
        <link href="{{ asset('css/style1.css' ) }}" rel="stylesheet">

        @stack('css')

        <!-- FAVICON -->
        <link href="{{ asset('images/Winnerkelechi.png') }}" rel="shortcut icon">

        <link href="{{ asset('images/img/stride-Icon.png') }}" rel="apple-touch-icon">

        


        
     
    </head>

    <body>


<!-- ======= Header ======= --
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        
    <a href="{{ route('welcome') }}"><img src="{{ asset('images/img/stride-logo.png') }}" alt="" class="img-fluid"></a>
      </div>

            <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('welcome') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
         
          <li><a href="portfolio.php">Portfolio</a></li>
          
          <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

   
        
      <!--  <div class="header-social-links d-flex align-items-center">
        <!--<a href="https://twitter.com/StrideErp" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://web.facebook.com/Strideerp" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/strideerp" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/company/StrideErp" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
               <a class="bi linkedin"  href="https://strideerp.com/offer">TRY IT FREE</a>--
            <a  href="https://strideerp.com/offer" class="btn-get-started scrollto"><button class="button11 button2">TRY IT FREE</button></a>
      </div> -->

  <div class="header-social-links d-flex align-items-center">
                  
                  
  <div data-aos="fade-up" data-aos-delay="800">
  <!-- <a href="{{route('customer-form')}}" class="btn-get-started scrollto" style="color: #1e65f6;">FREE TRIAL</a> 
  <button style="background-color: #3498db; border-radius:10%; color:white;" onclick="newDoc()">FREE TRIAL</button> -->
      
       <!--* <b style="color: red">01 515 5084</b>*/ -->

      
  </div>
</div>  

    </div>
  </header><!-- End Header -->
        


    @yield('content')
    <!--============================
    =            Footer            =
    =============================-->
  <!-- ======= Footer 2 ======= --
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">



    <div class="footer-top">
      <div class="container">
        <div class="row">

            
            
            
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('welcome') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('portfolio') }}">Portfolio</a></li>
              
            </ul>
          </div>

  

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact</h4>
            <p>
              <!--<i class="ri-phone-line"></i><strong><br>Tel:</strong> 01 51 | +234 8<br><br>


--







              <i class="ri-mail-send-line"></i><br><strong>Email:</strong> winnerkelechi5@gmail.com<br>
            </p>

          </div>

    

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              
              <div class="social-links">
                <a href="https://twitter.com/StrideErp" target="_blank"  class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://facebook.com/officialStrideERP" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/strideerp" target="_blank"  class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/company/StrideErp" target="_blank"  class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
            
            
         <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              
              <div class="social-links">
              <img src="{{ asset('images/welcome.png') }}" alt="" style="width: 80px; heigth:60px">
              </div>
            </div>
          </div>          
            
 
            
            
            
        </div>
      </div>
    </div>
-->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-top">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Winner Kelechi N.</span></strong>. All Rights Reserved
      </div>
   
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- JAVASCRIPTS -->
    <script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
    <script src="{{ asset('plugins/popper/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('plugins/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('plugins/syotimer/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('plugins/aos/aos.js') }}"></script>    
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>



    <!-- JAVASCRIPTS -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('plugins/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('plugins/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('plugins/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('plugins/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/waypoints/noframework.waypoints.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    




    @if(config('app.env') == 'production')
        

        

    @endif

    @stack('scripts')
    </body>


</html>
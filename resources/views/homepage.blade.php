@extends('layouts.master')


@section('content')


        <meta content="Manage your business operations with ease. Single system for all business processes, One software that manages all business operations, Complete automation, Bring your business with you, professional services, What your business needs. What my business needs. Entrepreneurs in Nigeria, Business owners in Nigeria, Businesses in Africa. Business made easy. " name="keywords">
  
    <style>
    
        
        
        
/* Product listing */
        
        
   
        
/* Product listing */
      
        
        
        
        
        
        
   .hr {
  width: 100%;
  height: 1px;
  display: block;
  position: relative;
  margin-bottom: 0em;
  padding: 2em 0;
}
.hr:after, .hr:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 1px;
  bottom: 50%;
  left: 0;
}
.hr:before {
  background: linear-gradient(90deg, #1e65f6 0%, #ffdf2b 50%, transparent 50%, transparent 100%);
  background-size: 15px;
  background-position: center;
  z-index: 1;
}
.hr:after {
  transition: opacity 0.3s ease, -webkit-animation 0.3s ease;
  transition: opacity 0.3s ease, animation 0.3s ease;
  transition: opacity 0.3s ease, animation 0.3s ease, -webkit-animation 0.3s ease;
  background: linear-gradient(to right, #ffdf2b 5%, #1e65f6 15%, #1e65f6 25%, #ffdf2b 35%, #ffdf2b 45%, #5c1dff 55%, #5c1dff 65%, #82fff4 75%, #82fff4 85%, #ffdf2b 95%);
  background-size: 200%;
  background-position: 0%;
  -webkit-animation: bar 15s linear infinite;
          animation: bar 15s linear infinite;
}
@-webkit-keyframes bar {
  0% {
    background-position: 0%;
  }
  100% {
    background-position: 200%;
  }
}
@keyframes bar {
  0% {
    background-position: 0%;
  }
  100% {
    background-position: 200%;
  }
}

.hr.anim:before {
  background: linear-gradient(90deg, #1e65f6 0%, #1e65f6 5%, transparent 5%, transparent 10%, #1e65f6 10%, #1e65f6 15%, transparent 15%, transparent 20%, #1e65f6 20%, #1e65f6 25%, transparent 25%, transparent 30%, #1e65f6 30%, #1e65f6 35%, transparent 35%, transparent 40%, #ffdf2b 40%, #ffdf2b 45%, transparent 45%, transparent 50%, #10111F 50%, #10111F 55%, transparent 55%, transparent 60%, #1e65f6 60%, #1e65f6 65%, transparent 65%, transparent 70%, #1e65f6 70%, #ffdf2b 75%, transparent 75%, transparent 80%, #ffdf2b 80%, #ffdf2b 85%, transparent 85%, transparent 90%, #ffdf2b 90%, #ffdf2b 95%, transparent 95%, transparent 100%);
  background-size: 150px;
  background-position: center;
  z-index: 1;
  -webkit-animation: bar 120s linear infinite;
          animation: bar 120s linear infinite;
}
.hr.anim:hover:before {
  -webkit-animation-duration: 20s;
          animation-duration: 20s;
}
.hr.anim:hover:after {
  -webkit-animation-duration: 2s;
          animation-duration: 2s;
}



h1, h2 {
  line-height: 1;
  margin-bottom: -0.5em;
}

h2 {
  margin-top: 5em;
}
        
    
        
        
  
        
        
</style>
        <title>STRIDE ERP - The Future of Business Automation</title>
  <!-- ======= Hero Section ======= -->
  
  <section id="hero" class="d-flex align-items-center">
    <div class="portfolio-details-slider swiper-container">
        <div class="swiper-wrapper align-items-center">

          <div class="swiper-slide">
              
              
              
                  <div class="container">
<div class="row">
    
    
    
  <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
    <h1 data-aos="fade-up" style="color: #1F75FE;">Business  <span style="color:black">Made</span> Simple</h1><br>
      
      <p style="text-align:justify">Get complete access to a first-class business automation solution for processes like: 

      </p>
      <b data-aos="fade-up" data-aos-delay="100">Accounting &amp; Finance Management</b>
      <b data-aos="fade-up" data-aos-delay="200">HR &amp; Payroll Management</b>
      <b data-aos="fade-up" data-aos-delay="300">Sales &amp; Client Relationship Management</b>
      <b data-aos="fade-up" data-aos-delay="400">Project Management</b>
      <b data-aos="fade-up" data-aos-delay="400">Asset Management</b>    
      <b data-aos="fade-up" data-aos-delay="500">And so much more!</b><br>
    <div data-aos="fade-up" data-aos-delay="800">

      {{-- <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=usMBeWvlsEKFmI-gbOD7pX9-PFgDbrRHtwL3g1nWVDZUM01LSzdWMTU0WjIwQjVROUhMMDlPUkU0Si4u" class="btn-get-started scrollto">FREE TRIAL</a> --}}
      <a  href="https://strideerp.com/offer" class="btn-get-started scrollto"><button class="button11 button2">Try It Free Now!</button></a>


        
        
        
        
        
    </div>
  </div>
  <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
    <img src="{{ asset('images/img/stride erp slider1.png') }}" class="img-fluid animated" alt="">
  </div>
</div>
</div>
            
              
  </div>
<!-- 
              <div class="swiper-slide">
              
              
                  <div class="container">
<div class="row">
    
    
    
  <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
    <h1 data-aos="fade-up">ONE SOFTWARE  <span><br>COMPLETE AUTOMATION</span></h1>
    <h2 data-aos="fade-up" data-aos-delay="400">Subscribe for a complete solution that handles all your business processes.</h2>
    <div data-aos="fade-up" data-aos-delay="800">

        <a href="{{ route('customer-form') }}" class="btn-get-started scrollto">GET STARTED</a>

      
    </div>
  </div>
  <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
    <img src="{{ asset('images/img/Stride-erp-tablet.png') }}" class="img-fluid animated" alt="">
  </div>
</div>
</div>
            
              
          </div> -->
<!-- 
              <div class="swiper-slide">
              
              
                  <div class="container">
<div class="row">
    
    
    
  <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
    <h1 data-aos="fade-up">STRIDE ERP  <span><br> ON MOBILE</span></h1>
    <h2 data-aos="fade-up" data-aos-delay="400">Stride ERP is mobile responsive, hence you can bring your business with you and never miss a bit.</h2>
    <div data-aos="fade-up" data-aos-delay="800">

      <a href="{{route('customer-form')}}" class="btn-get-started scrollto">START HERE</a>

        
      
        
    </div>
  </div>
  <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
    <img src="{{ asset('images/img/Stride-erp-on-mobile.png') }}" class="img-fluid animated" alt="">
  </div>
</div>
</div>
            
              
          </div> 

          <div class="swiper-slide">
              
              
            <div class="container">
<div class="row">



<div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
<h1 data-aos="fade-up">PARTNER WITH US</h1>
<h2 data-aos="fade-up" data-aos-delay="400">Would you like to be a part of Nigeria's leading ERP provider?</h2>
<div data-aos="fade-up" data-aos-delay="800">
<a href="{{ route('partner-form') }}" class="btn-get-started scrollto">JOIN US</a>
</div>
</div>
<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
<img src="{{ asset('images/img/sectors/SAP with Stride ERP1.png') }}" class="img-fluid animated" alt="" >
</div>
</div>
</div>
      
        
    </div>
-->
         
          

        </div>
       <!-- <div class="swiper-pagination"></div>-->
      </div>


      





</section>




<main id="main">
    


    
    
    
    
    
   
     <!-- =======
  <section id= "upcoming">
    <div class="new-content-slider">
      <div class="swiper-slide new-content">
        <div class="whats-new" class="col-lg-12 col-md-12 portfolio-wrap filter-app" style="width: 100%; ">
          <h2 data-aos="fade-up" data-aos-delay="400">2021 WEBINAR FOR FINANCE PROFESSIONALS</h2>
          <div data-aos="fade-up" data-aos-delay="800"class="addition">
            <a href="https://bit.ly/3iZY8pH" target="_blank"><img id="webinar-flyer" src="{{ asset ('images/img/2021 webinar for finance professionals.png') }}"></a>

          </div>
        </div>
      </div>

      <div class="swiper-slide new-content">
        <div class="whats-new">
        <h2 data-aos="fade-up" data-aos-delay="400">STRIDE 4 WOMEN- EMPOWERING WOMEN-OWNED BUSINESSES</h2>
          <div data-aos="fade-up" data-aos-delay="800" class="addition">
            <a href="https://bit.ly/3fpilnP" target="_blank"><img src="{{ asset ('images/img/stride 4 women.png') }}"></a>

          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
     <b class="hr anim"></b>
    ======= -->

<!-- ======= What We Do Section ======= -->
    
    
    
    



<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
<style>
              
.section-padding {
	padding: 20px 0;
}
.brand-carousel {
     background-image: url("../images/img/stride 123.png") !important; 
    background-repeat: no-repeat;
    background-position: center;
	background: #3498db;
    background-blend-mode: overlay;
	margin-top: 0%;
}
.owl-dots {
	text-align: center;
	margin-top: 4%;
}
.owl-dot {
	display: inline-block;
	height: 15px !important;
	width: 15px !important;

    background-color: #878787 !important;
	opacity: 0.8;
	border-radius: 50%;
	margin: 0 5px;
}
.owl-dot.active {
	background-color: #000 !important;
}
    
    .backg {
     background-image: url("../images/img/bg3.png") !important; 
    background-repeat: no-repeat;
    background-blend-mode: overlay;
        background-size: cover;
        background-position: right;
	margin-top: 0%;
}

</style>
              
              <div class="brand-carousel section-padding owl-carousel">
                
                  <a href="{{route('features')}}#finance-administration-tab"><div class="single-logo"><img alt="" src="{{ asset('images/img/accountIcon.png') }}"></div></a>
                  <a href="{{route('features')}}#asset-management-tab"><div class="single-logo"><img alt="" src="{{ asset('images/img/assetIcon.png') }}"></div></a>
                  <a href="{{ route('features') }}#client-administration-tab"><div class="single-logo"><img alt="" src="{{ asset('images/img/crmIcon.png') }}"></div></a>
                  <a href="{{ route('features') }}" title="Module Details"><div class="single-logo"><img alt="" src="{{ asset('images/img/hrIcon.png') }}"></div></a>
                  <a href="{{ route('features') }}#project-administration-tab"><div class="single-logo"><img alt="" src="{{ asset('images/img/projectIcon.png') }}"></div></a>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
	</script> 
	<script>
	   $('.brand-carousel').owlCarousel({
	 loop:true,
	 margin:10,
	 autoplay:true,
	 responsive:{
	   0:{
	     items:1
	   },
	   600:{
	     items:3
	   },
	   1000:{
	     items:5
	   }
	 }
	}) 

	</script>
 
<div class="backg">
       
<div class="container" style="margin-top: 5%;">
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs=3">
      
        <div class="suscribe-text text-center" data-aos="fade-up" data-aos-delay="400">
        
                 <img src="{{ asset('images/img/Best ERP for Small and Medium Enterprises, SMEs in Nigeria.png') }}" class="img-fluid" alt="" style="width: 100%; padding: 0.5em 0; height: 100%">


      </div>
    </div>   
      
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs=2">
      
        <div class="suscribe-text pricing">
        
        
      </div>
    </div>      
      
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs=7">
      
        <div class="suscribe-text text-center">
        
                   <div class="section-title" >
                       
      <h2 data-aos="fade-up" data-aos-delay="400">What is Stride ERP?</h2>
      <p style="text-align:justify" data-aos="fade-up" data-aos-delay="400">Stride ERP is a powerful enterprise resource planning application designed to help businesses streamline business operations such as Human Resources Management, Payroll, Accounting, Asset Management, Sales &amp; Client Relationship, Project Management and many more!.
                       <br>There's no substitute for hands–on experience. Try it yourself — free for 30 days.<br>
      <a  href="https://strideerp.com/offer" class="btn-get-started scrollto"><button class="button11 button2">Start My Free Trial</button></a><b class="hr anim"></b>
                       </p>
  </div>


      </div>
    </div>
  </div>
</div>

    
    
    <div class="container" style="margin-top: 5%; margin-bottom: 5%;">
  <div class="row">
      
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs=7">
      
        <div class="suscribe-text text-center">
        
                   <div class="section-title" >
                       

                       
                       
      <h2 data-aos="fade-up" data-aos-delay="400">Become a Stride Partner</h2>
      <p style="text-align:justify" data-aos="fade-up" data-aos-delay="400">Would you like to be a part of Nigeria's leading ERP provider? Then Join our Partnership Network and benefit from market leading solutions combined with award-winning programs designed to enable, distinguish, and reward you.<br>
                      <a  href="{{ route('partner-form') }}"><button class="button11 button2">Join Our Partners</button></a><b class="hr anim"></b></p>

  </div>


      </div>
    </div>
      
  
      
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs=2">
      
        <div class="suscribe-text pricing">
        
        
      </div>
    </div>      
      
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs=3">
      
        <div class="suscribe-text text-center hero-img" data-aos="fade-up" data-aos-delay="400" data-aos-delay="200">

                 <img src="{{ asset('images/img/partner.png') }}" class="img-fluid" alt="" style="width: 100%; padding: 0.5em 0; height: 100%">


      </div>
    </div>   
      
  </div>
</div>

    </div>    

    
    <!--    <section class="portfolio">
          

<div class="container">
  <center>
  <div class="row portfolio-container " data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="col-lg-4 col-md-12 portfolio-wrap filter-app" style="width: 150px; height: 150px">
      <div class="portfolio-item">
          <a href="{{ route('features') }}#finance-administration-tab"><img src="{{ asset('images/Stride Accounting.png') }}" class="img-fluid" alt=""></a>
        <div class="portfolio-info">

          <div>
            <a href="{{ asset('images/Stride Accounting.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Stride Accounting"><i class="bx bx-plus"></i></a>
            <a href="{{ route('features') }}#finance-administration-tab" title="Module Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
          
          <div class="prod">
    <a href="{{ route('features') }}#finance-administration-tab"><span>STRIDE ACCOUNTING</span></a>

</div>
          
      </div>
    </div> 
      
      <div class="col-lg-4 col-md-12 portfolio-wrap filter-app" style="width: 150px; height: 150px">
      <div class="portfolio-item">
          <a href="{{route('features')}}#asset-management-tab"><img src="{{ asset('images/Stride Asset manager.png') }}" class="img-fluid" alt=""></a>
        <div class="portfolio-info">

          <div>
            <a href="{{ asset('images/Stride Asset manager.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Stride Asset Management"><i class="bx bx-plus"></i></a>
            <a href="{{route('features')}}#asset-management-tab" title="Module Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
          
                  <div class="prod">
    <a href="{{route('features')}}#asset-management-tab"><span>STRIDE ASSET</span></a>

</div>
          
      </div>
    </div>

    <div class="col-lg-4 col-md-12 portfolio-wrap filter-web" style="width: 150px; height: 150px">
      <div class="portfolio-item">
          <a href="{{ route('features') }}#client-administration-tab"><img src="{{ asset('images/Stride CRM.png') }}" class="img-fluid" alt=""></a>
        <div class="portfolio-info">
      
          <div>
            <a href="{{ asset('images/Stride CRM.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Client Relationship Management(CRM)"><i class="bx bx-plus"></i></a>
            <a href="{{ route('features') }}#client-administration-tab" title="Module Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
                  <div class="prod">
    <a href="{{ route('features') }}#client-administration-tab"><span>STRIDE CRM</span></a>

</div>
      </div>
    </div>



    <div class="col-lg-4 col-md-12 portfolio-wrap filter-card" style="width: 150px; height: 150px">
      <div class="portfolio-item">
          <a href="{{ route('features') }}"><img src="{{ asset('images/Stride HR and Payroll.png') }}" class="img-fluid" alt=""></a>
        <div class="portfolio-info">
          <div>
            <a href="{{ asset('images/Stride HR and Payroll.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Stride HR & Payroll"><i class="bx bx-plus"></i></a>
            <a href="{{ route('features') }}" title="Module Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
                  <div class="prod">
    <a href="{{ route('features') }}" title="Module Details"><span>STRIDE HR &amp; PAYROLL</span></a>

</div>
      </div>
    </div>

    <div class="col-lg-4 col-md-12 portfolio-wrap filter-web" style="width: 150px; height: 150px">
      <div class="portfolio-item">
          <a href="{{ route('features') }}#project-administration-tab"><img src="{{ asset('images/Stride Project manager.png') }}" class="img-fluid" alt=""></a>
        <div class="portfolio-info">
          <div>
            <a href="{{ asset('images/Stride Project manager.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Stride Project Management"><i class="bx bx-plus"></i></a>
            <a href="{{ route('features') }}#project-administration-tab" title="Module Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
                  <div class="prod">
    <a href="{{ route('features') }}#project-administration-tab"><span>STRIDE PROJECT</span></a>

</div>
      </div>
    </div> 
      

            
            </div> 
    </center>
            </div>
            
</section>
       -->



       
       
       
    
    
    
    
    
    
    
    
    
    <!-- =======  Section ======= --
    <section id="what-we-do" class="what-we-do">
   
<div class="container">
   
   <div class="row">
       
       
       
    <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
      <div class="icon-box">
        <img src="{{ asset('images/img/stride accounting.png') }}" alt="" style="height: 50%; width:50%">
        <h5><a href="{{ route('features') }}#finance-administration-tab" style="font-size: 15px">STRIDE ACCOUNTING</a></h5>
      </div>
    </div>

    <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
      <div class="icon-box">
        <img src="{{ asset('images/img/stride CRM.png') }}" alt="" style="height: 50%; width:50%">
        <h5><a href="{{ route('features') }}#client-administration-tab" style="font-size: 15px">STRIDE CRM</a></h5>
      </div>
    </div>
    
    <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
      <div class="icon-box">
        <img src="{{ asset('images/img/stride asset.png') }}" alt="" style="height: 50%; width:50%">
        <h5><a href="{{route('features')}}#asset-management-tab" style="font-size: 15px">ASSET MANAGER</a></h5>
      </div>
    </div>

    <div class="col-lg-2 col-md-4 d-flex align-items-stretch">
      <div class="icon-box">
        <img src="{{ asset('images/img/stride hr.png') }}" alt="" style="height: 50%; width:50%">
        <h5><a href="{{ route('features') }}" style="font-size: 15px">HR &amp; PAYROLL</a></h5>
      </div>
    </div>

    <div class="col-lg-2 col-md-4 d-flex align-items-stretch mt-4 mt-lg-0">
      <div class="icon-box">
        <img src="{{ asset('images/img/stride project.png') }}" alt="" style="height: 50%; width:50%">
        <h5><a href="{{ route('features') }}#project-administration-tab" style="font-size: 15px">PROJECT MANAGER</a></h5>
      </div>
    </div>

           <b class="hr anim"></b>

       
    <div class="section-title">
      <h2>What is Stride ERP?</h2>
      <p>Stride ERP is a powerful enterprise resource planning application designed to help businesses streamline business operations such as Human Resources Management, Payroll, Accounting, Asset Management, Sales &amp; Client Relationship, Project Management and many more!.</p>
  </div>
  
  </div>
 
</div>
    
    

</section><!-- End What We Do Section -->
        
   
    
    
    

<!-- ======= About Section ======= --
<section id="about" class="about">
 <div class="container">

  <div class="row">
    <div class="col-lg-6">
      <img src="{{ asset('images/img/Best ERP for Small and Medium Enterprises, SMEs in Nigeria.png') }}" class="img-fluid" alt="">
        
        
                      <section id="counts" class="counts">
<div class="container"> 

 <div class="row">

                  
<p style="text-align: justify">
       There are literally hundreds of enterprise resource planning (ERP) software options in the market, making it difficult to 
choose which system will work best for you. The key is to find a company that delivers a complete solution that contains 
in-depth reporting, ease of use, excellent pricing and customer service. This is where we come in.<br>
        Stride ERP is built with the flexibility to accommodate different business structures. With modules and sub-modules representing departments and units in an organization, and the operations they perform. 
     
          
      </p>

  </div> 
</div>
</section>  
        
    </div>
   <div class="col-lg-6 pt-4 pt-lg-0">
      <h3>Stride ERP <span style="color:#3498db">PRODUCTS</span></h3>
        <section class="portfolio">


  <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="col-lg-4 col-md-6 portfolio-wrap filter-app" style="width: 200px; height: 200px">
      <div class="portfolio-item">
          <a href="{{ route('features') }}#finance-administration-tab"><img src="{{ asset('images/Stride Accounting.png') }}" class="img-fluid" alt=""></a>
        <div class="portfolio-info">

          <div>
            <a href="{{ asset('images/Stride Accounting.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Stride Accounting"><i class="bx bx-plus"></i></a>
            <a href="{{ route('features') }}#finance-administration-tab" title="Module Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
          
          <div class="prod">
    <a href="{{ route('features') }}#finance-administration-tab"><span>STRIDE ACCOUNTING</span></a>

</div>
          
      </div>
    </div> <div class="col-lg-4 col-md-6 portfolio-wrap filter-app" style="width: 200px; height: 200px">
      <div class="portfolio-item">
          <a href="{{route('features')}}#asset-management-tab"><img src="{{ asset('images/Stride Asset manager.png') }}" class="img-fluid" alt=""></a>
        <div class="portfolio-info">

          <div>
            <a href="{{ asset('images/Stride Asset manager.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Stride Asset Management"><i class="bx bx-plus"></i></a>
            <a href="{{route('features')}}#asset-management-tab" title="Module Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
          
                  <div class="prod">
    <a href="{{route('features')}}#asset-management-tab"><span>STRIDE ASSET MANAGER</span></a>

</div>
          
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-wrap filter-web" style="width: 200px; height: 200px">
      <div class="portfolio-item">
          <a href="{{ route('features') }}#client-administration-tab"><img src="{{ asset('images/Stride CRM.png') }}" class="img-fluid" alt=""></a>
        <div class="portfolio-info">
      
          <div>
            <a href="{{ asset('images/Stride CRM.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Client Relationship Management(CRM)"><i class="bx bx-plus"></i></a>
            <a href="{{ route('features') }}#client-administration-tab" title="Module Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
                  <div class="prod">
    <a href="{{ route('features') }}#client-administration-tab"><span>STRIDE CRM</span></a>

</div>
      </div>
    </div>



    <div class="col-lg-4 col-md-6 portfolio-wrap filter-card" style="width: 200px; height: 200px">
      <div class="portfolio-item">
          <a href="{{ route('features') }}"><img src="{{ asset('images/Stride HR and Payroll.png') }}" class="img-fluid" alt=""></a>
        <div class="portfolio-info">
          <div>
            <a href="{{ asset('images/Stride HR and Payroll.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Stride HR & Payroll"><i class="bx bx-plus"></i></a>
            <a href="{{ route('features') }}" title="Module Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
                  <div class="prod">
    <a href="{{ route('features') }}" title="Module Details"><span>STRIDE HR &amp; PAYROLL MANAGER (HRM)</span></a>

</div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-wrap filter-web" style="width: 200px; height: 200px">
      <div class="portfolio-item">
          <a href="{{ route('features') }}#project-administration-tab"><img src="{{ asset('images/Stride Project manager.png') }}" class="img-fluid" alt=""></a>
        <div class="portfolio-info">
          <div>
            <a href="{{ asset('images/Stride Project manager.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Stride Project Management"><i class="bx bx-plus"></i></a>
            <a href="{{ route('features') }}#project-administration-tab" title="Module Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
                  <div class="prod">
    <a href="{{ route('features') }}#project-administration-tab"><span>STRIDE PROJECT MANAGER</span></a>

</div>
      </div>
    </div> 
      
      <!--
      <div class="col-lg-4 col-md-6 portfolio-wrap filter-app" style="width: 200px; height: 200px">
      <div class="portfolio-item">
          <a href="{{ route('features') }}#purchase-administration-tab"> <img src="{{ asset('images/img/portfolio/Purchasing-Hub.PNG') }}" class="img-fluid" alt=""></a>
        <div class="portfolio-info">
          <div>
            <a href="{{ asset('images/img/portfolio/Purchasing-Hub.PNG') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Purchase/Expenses"><i class="bx bx-plus"></i></a>
            <a href="{{ route('features') }}#purchase-administration-tab" title="Module Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-wrap filter-card" style="width: 200px; height: 200px">
      <div class="portfolio-item">
          <a href="{{ route('features') }}#reporting-tab"> <img src="{{ asset('images/img/portfolio/Sales-hub.PNG') }}" class="img-fluid" alt=""></a>
        <div class="portfolio-info">
          <div>
            <a href="{{ asset('images/img/portfolio/Sales-hub.PNG') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sales Hub"><i class="bx bx-plus"></i></a>
            <a href="{{ route('features') }}#reporting-tab" title="Module Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-wrap filter-card" style="width: 200px; height: 200px">
      <div class="portfolio-item">
          <a href="{{ route('features') }}#vendor-administration-tab"><img src="{{ asset('images/img/portfolio/Carpool.PNG') }}" class="img-fluid" alt=""></a>
        <div class="portfolio-info">
          <div>
            <a href="{{ asset('images/img/portfolio/Carpool.PNG') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="CarPool Manager"><i class="bx bx-plus"></i></a>
            <a href="{{ route('features') }}#vendor-administration-tab" title="Module Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>
    </div> --
            
            
            </div> 

</section>
      

    </div>
      
  </div>

    
    
    

    
    
    
    
    
    
</div>
</section><!-- End About Section -->

    
    
    
    
    
    
    
    
    
    

<!-- ======= Pricing Section ======= -->
<div id="skills pricing" class="skills pricing-area area-padding">
<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="section-headline text-center">
            <div class="section-title">
                 <h2>Stride ERP Licenses</h2>

  </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="pri_table_list">
        <h3>basic <br /> <h6 style="color: #0033CC;">As low as:</h6> <h5>NGN 50,000 / year</h5></h3>
        <div>
          <h6 style="padding: 10px;">Start with the basic functionality of Stride ERP. Explore robust features designed to help your SME business scale up</h6>
        </div>
        <ol>
          <li class="check"><i class="bi bi-check"></i><span>100 Employees</span></li>
          <li class="check"><i class="bi bi-check"></i><span>Unlimited Support</span></li>
          <li class="check"><i class="bi bi-check"></i><span>Flexible Payment</span></li>
        <li class="check"><i class="bi bi-check"></i><span>Integration Available</span></li>
        </ol>

          
<a  href="https://strideerp.com/offer"> <button>buy now</button></a><br>

        
          <a href="{{ route('services') }}#basic"> <button>Compare Licenses</button></a>
        
        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="pri_table_list active">
        <span class="saleon">top sale</span>
        <h3>Professional <br /> <h6 style="color: #0033CC;">As low as:</h6> <h5>NGN 100,000 / year</h5></h3>
        <div>
          <h6 style="padding: 10px;">Become productive and proactive. Get up to speed with your team mates using all the available features of Stride ERP Professional License</h6>
        </div>
        <ol>                  
          <li class="check"><i class="bi bi-check"></i><span>150 Employees</span></li>
          <li class="check"><i class="bi bi-check"></i><span>Unlimited Support</span></li>
          <li class="check"><i class="bi bi-check"></i><span>Flexible Payment</span></li>
        <li class="check"><i class="bi bi-check"></i><span>Integration Available</span></li>
        </ol>

          <a  href="https://strideerp.com/offer"> <button>buy now</button></a><br>

          
          <a href="{{ route('services') }}#professional"> <button>Compare Licenses</button></a>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="pri_table_list">
        <h3>Comprehensive <br /> <h6 style="color: #0033CC;">As low as:</h6> <h5>NGN 200,000 / year</h5></h3>
        <div>
          <h6 style="padding: 10px;">Get Productive and leverage the robust solution available here. Access the tools you need to improve your work environment</h6>
        </div>
        <ol>
          <li class="check"><i class="bi bi-check"></i><span>1000 Employees</span></li>
          <li class="check"><i class="bi bi-check"></i><span>Unlimited Support</span></li>
          <li class="check"><i class="bi bi-check"></i><span>Flexible Payment</span></li>
        <li class="check"><i class="bi bi-check"></i><span>Integration Available</span></li>
        </ol>

          <a  href="https://strideerp.com/offer"> <button>buy now</button></a><br>

        
          <a href="{{ route('services') }}#comprehensive"> <button>Compare Licenses</button></a>
          
          
 
      </div>
    </div>
  </div>
</div>
</div><!-- End Pricing Section -->


<!-- ======= Suscribe Section ======= -->
<div class="suscribe-area">
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
      <div class="suscribe-text text-center">
        <h3>Don't want all the modules?
      <br>No problems, Stride can be configured to suit your business needs.
          </h3>

          <a class="sus-btn" href="https://strideerp.com/offer">Get A quote</a>

        
      </div>
    </div>
  </div>
</div>
</div><!-- End Suscribe Section -->
<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
<div class="container">

  <div class="row">

    <div class="col-lg-3 col-6">
      <div class="count-box">
        <i class="bi bi-emoji-smile"></i>
        <span data-purecounter-start="0" data-purecounter-end="5000" data-purecounter-duration="1" class="purecounter"></span>
        <p>Happy Users</p>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <div class="count-box">
        <i class="bi bi-journal-richtext"></i>
        <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1" class="purecounter"></span>
        <p>Business Sectors</p>
      </div>
    </div>

    <div class="col-lg-3 col-6 mt-5 mt-lg-0">
      <div class="count-box">
        <i class="bi bi-headset"></i>
        <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
        <p>Client Support Hours</p>
      </div>
    </div>

    <div class="col-lg-3 col-6 mt-5 mt-lg-0">
      <div class="count-box">
        <i class="bi bi-people"></i>
        <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1" class="purecounter"></span>
        <p>Countries</p>
      </div>
    </div>

  </div>

</div>
</section><!-- End Counts Section -->




<!-- ======= Testimonials Section ======= -->


<!-- End Testimonials Section -->

<!-- ======= Team Section ======= -->

<!-- End Team Section -->

<!-- ======= Blog Section ======= --
<div id="blog" class="blog-area">
<div class="blog-inner area-padding">
  <div class="blog-overly"></div>
  <div class="container ">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        
             <div class="section-title">
    <h2>Latest News</h2>
  </div>
      </div>
    </div>
    <div class="row">
      <!-- Start Left Blog --
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-blog">
          <div class="single-blog-img">
            <a href="blog.php">
              <img src="assets/img/blog/blog-1.jpg" height="5%" width="100%" alt="">
            </a>
          </div>
          <div class="blog-meta">
            <span class="comments-type">
              <i class="fa fa-comment-o"></i>
              <a href="#">13 comments</a>
            </span>
            <span class="date-type">
              <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
            </span>
          </div>
          <div class="blog-text">
            <h4>
              <a href="blog.php">Assumenda repud eum veniam</a>
            </h4>
            <p>
              Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
            </p>
          </div>
          <span>
            <a href="blog.php" class="ready-btn">Read more</a>
          </span>
        </div>
        <!-- Start single blog --
      </div>
      <!-- End Left Blog-->
      <!-- Start Left Blog --
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-blog">
          <div class="single-blog-img">
            <a href="blog.php">
              <img src="assets/img/blog/blog-2.jpg" height="5%" width="100%" alt="">
            </a>
          </div>
          <div class="blog-meta">
            <span class="comments-type">
              <i class="fa fa-comment-o"></i>
              <a href="#">130 comments</a>
            </span>
            <span class="date-type">
              <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
            </span>
          </div>
          <div class="blog-text">
            <h4>
              <a href="blog.php">Explicabo magnam quibusdam.</a>
            </h4>
            <p>
              Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
            </p>
          </div>
          <span>
            <a href="blog.html" class="ready-btn">Read more</a>
          </span>
        </div>
        <!-- Start single blog --
      </div>
      <!-- End Left Blog--
      <!-- Start Right Blog--
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-blog">
          <div class="single-blog-img">
            <a href="blog.php">
              <img src="assets/img/blog/blog-3.jpg" height="5%" width="100%" alt="">
            </a>
          </div>
          <div class="blog-meta">
            <span class="comments-type">
              <i class="fa fa-comment-o"></i>
              <a href="#">10 comments</a>
            </span>
            <span class="date-type">
              <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
            </span>
          </div>
          <div class="blog-text">
            <h4>
              <a href="blog.php">Lorem ipsum dolor sit amet</a>
            </h4>
            <p>
              Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
            </p>
          </div>
          <span>
            <a href="blog.php" class="ready-btn">Read more</a>
          </span>
        </div>
      </div>
      <!-- End Right Blog--
    </div>
  </div>
</div>
</div><!-- End Blog Section -->

    <!--====  End of Video Promo  ====-->

    

    

    
 <!-- ======= Testimonials Section ======= -->
 <section class="testimonials" data-aos="fade-up" data-aos-delay="300" style="background-color: white">
    <div class="container" style="background-color: white">

      <div class="section-title">
        <h2>Testimonials</h2>

        
        
        </div>

      <div class="testimonials-carousel swiper-container">
        <div class="swiper-wrapper">
          <div class="testimonial-item swiper-slide">
            <img src="{{ asset('images/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
            <h3>Ekomobong Finbarr</h3>
            <h4> Software Developer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              This really performs far beyond my expectations. Kudos to the STRIDE ERP Team. I really recommend this for small, medium, and large-scale enterprise use.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item swiper-slide">
            <img src="{{ asset('images/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
            <h3>Chidinma Nwamara</h3>
            <h4>Human Resource Professional </h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Stride ERP helps me manage employee data, track employee attendance with the punch-in/out feature.
Also helps in storing employee files and also in employee performance appraisals.
It's also helpful in Payroll management as I don't worry about computing employee financial record monthly.<br>
Most importantly, I don't always have to be in the office to access this amazing application because it's a web-based application
I highly recommend this software for all businesses
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item swiper-slide">
            <img src="{{ asset('images/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
            <h3>Winner Kelechi</h3>
            <h4>Communtions Specialist</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Stride ERP is a robust and user-friendly Enterprise Resource Planning Software for business process management. It integrates the function of so many individual applications to offer a more dynamic solution as regards business automation.
<br><br>
I love that the software is cloud-based and mobile friendly.<br>
I am also in aww of the features available and the flexibility of the application.

I will recommend Stride ERP to any and all business-owner(s). The innovation rocks
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item swiper-slide">
            <img src="{{ asset('images/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
            <h3>Nekpen Ogbeifun</h3>
            <h4>Strategic Partner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Stride ERP automates your business process, giving you more time for your customers. It helps improve efficiency, provides visuals for data driven decisions, provides a 360 view of your business ranging from Human Resources, Sales, Client Administration, Vendor Management, Purchasing Management, Project Management, Finance Management. It truly is a one stop shop for all your business needs.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item swiper-slide">
            <img src="{{ asset('images/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
            <h3>Abimbola Babatunde</h3>
            <h4> Marketing Consultant &amp; Coach</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              A Fantastic business management software, so easy to use and helps to automate work processes.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Client Section -->


    
    
    
    <!-- CLIENTS SECTION --
    
    <section id="counts" class="counts">
<div class="container">

  <div class="row">

<div class="section-title">
        <h2>OUR CLIENTS</h2>

        
        
        </div>

      <div class="testimonials-carousel swiper-container">
        <div class="swiper-wrapper">
          <div class="testimonial-item swiper-slide">
              <center><img width="800px" height="130px" src="{{ asset('images/img/Stride Clientele.png') }}" class="img-fluid" alt=""></center>           
          </div>     
            <div class="testimonial-item swiper-slide">
  <center><img width="800px" height="130px" src="{{ asset('images/img/Stride Clientele.png') }}" class="img-fluid" alt=""></center>          </div>   
            <div class="testimonial-item swiper-slide">
  <center><img width="800px" height="130px" src="{{ asset('images/img/Stride Clientele.png') }}" class="img-fluid" alt=""></center>          </div>


            
            
            
        </div>
      </div>

  

  </div>

</div>
</section><!--End Clients Section -->
    
    
    
    
    
    
    
     
    
    
    
    
    
    
    <section id="what-we-do" class="what-we-do">
<div class="container">
    <center>  
    
     <div class="row portfolio">
         <!--<div class="col-lg-4 video-box">
                 <marquee direction="left"><h3 style="color: #1e65f6; text-transform:uppercase">2021 Webinar for Finance Professionals...</h3></marquee>
<center>

  <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="col-lg-12 col-md-12 portfolio-wrap filter-app" style="width: 99%; ">
      <div class="portfolio-item">
          <a href=" https://bit.ly/3iZY8pH" title="Click to Register for the Webinar - FREE" target="_blank"><img src="{{ asset ('images/img/2021 webinar for finance professionals.png') }}"  class="img-fluid" alt=""></a>
        <div class="portfolio-info">

          <div>
            <a href="{{ asset('images/img/2021 webinar for finance professionals.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="2021 Webinar for Finance Professionals" target="_blank"><i class="bx bx-plus"></i></a>
            <a href=" https://bit.ly/3iZY8pH" title="Register for the Webinar - Microsoft Form" target="_blank"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>
    </div>
            </div>
            </center>

          </div>--     
         
         
    <div class="col-lg-4 video-box">
                 <marquee direction="left"><h3 style="color: #1e65f6; text-transform:uppercase">2021 Webinar for Finance Professionals...</h3></marquee>
<center>

  <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="col-lg-1 col-md-1 portfolio-wrap filter-app" >
      <div class="portfolio-item">
          <iframe width="460" height="250" src="https://www.youtube.com/embed/EzFBmT3PllA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="portfolio-info">

         
        </div>
      </div>
    </div>
            </div>
            </center>

          </div>
-->
         
         <!-- <div class="col-lg-4 video-box">
                
              <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
                  
     
                  
                  <iframe width="460" height="250" src="https://www.youtube.com/embed/EzFBmT3PllA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             </div>

         </div>
    
         
         
         <div class="col-lg-4 video-box">
                 <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
             
                           <iframe width="460" height="250" src="https://www.youtube.com/embed/-8IYISRP9q0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             </div>

         </div> 
         
         <div class="col-lg-4 video-box">
                
              <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
                  
             <iframe width="460" height="250" src="https://www.youtube.com/embed/Nq-HR0Zdiqo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             </div>

         </div> -->
    
             
    
    </div>
    </center>  
    </div>
    </section>
    
    
    
    
	{{-- <div class="popup" id="popup">
		<div class="popup-inner">
			<img src="{{ asset('images/stride_new_feature.png') }}" alt="">
			<a class="closepopup" href="#">X</a>
		</div>
	</div> --}}
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            $('.compare-products').click(function(e){
                e.preventDefault();
                $('.price_body li a').removeClass('d-none');
                $('.price_inner .price_footer').removeClass('d-none');
            })
        });

		<!-- pop up -->

		// $(document).ready(function(){
		// 	setTimeout(function(){
		// 		// alert('i ams  shbyd');
		// 		window.location = '#popup';
		// 	}, 5000);
		// });
    var slideIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("new-content");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > x.length) {slideIndex = 1}
      x[slideIndex-1].style.display = "block";
      setTimeout(carousel, 10000); // Change image every 10 seconds
    }

  //   new Swiper('.new-content-slider', {
  //   speed: 400,
  //   autoplay: {
  //     delay: 5000,
  //     disableOnInteraction: false
  //   },
  //   pagination: {
  //     el: '.swiper-pagination',
  //     type: 'bullets',
  //     clickable: true
  //   }
  // });

  // $('.new-content-slider').owlCarousel({
  //           // loop: true,
  //           autoplay: true,
  //           items: 1
  //       });
    </script>
@endpush

@extends('layouts.master')

@section('content')

<meta content="Industry, industrial, Sector, Sector Overview, Sectors, Business units, Businesses in Nigeria, Engineering, Trading, Commercial, Professional, Transportation, Airlines" name="keywords">
  
        
        <title>Industrial Sector - STRIDE ERP (The Future of Business Automation) </title>

  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Industry</h2>
          <ol>
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li><a href="{{ route('sector-overview') }}">Sectors</a></li>
            <li>Industrials Overview</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                    <center>  <img src="{{ asset('images/img/sectors/Industrial.png') }}"  alt=""></center>
                </div>

               
                

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="portfolio-info">
              <h3>Industries in the Industrial Sector</h3>
              <ul>
                  <li><strong><a href="#engineering"> Construction and Engineering</a></strong></li>
                  <li><strong><a href="#trading">Trading Companies and Distributors</a></strong></li>
                  <li><strong><a href="#commercial">Commercial Services and Logistics</a></strong></li>
                  <li><strong><a href="#professional">Professional Services</a></strong></li>
                      <li><strong><a href="#transportation">Transportation Infrastructure</a></strong></li>
                      <li><strong><a href="#airlines">Airlines</a></strong></li>
                  
              </ul>
            </div>
              <div class="portfolio-info">
              <h3>Stride Modules for Industrial Sector</h3>
              <ul>
                 <li><strong>Sales Hub</strong>: The system has a simple program that helps you to manage marketing campaigns. It reminds you to take follow-ups of your targeted audience to generate leads or win more customers. You can now manage customized email marketing and SMS effortlessly. Your marketing team can shoulder their responsibilities in a stress-free manner.<br>
                  The system also maintains systematic records at all entry and exit points. This helps you to maintain electronic records of varied business activities within your large and/or small organization.
                  </li>
                  
                <li><strong>Client Administration</strong>: This is a distinct unit that saves all the customer information such as their purchases, personal information, and credit history.</li>
                  
                <li><strong>Purchasing Hub</strong>: This feature allows you to place an order, make deals, organize your schedule, update you about different stages of payment, commission to different partners, employees, etc.</li>
                  
                <li><strong>Finance Adminstration</strong>: The system is integrated with all departments within the firm and can produce accurate financial reports including balance sheets, chart of accounts, profits and loss reports, etc.</li>
                  
                <li><strong>Human Resource Administration</strong>: Stride ERP is a combination of several interconnected programs. The HR module help you save time and manual efforts. With Stride, you don’t have to hire additional manpower as the system manages several tasks and completes them. </li>
                  
                <li><strong>Asset Manager</strong>: This feature helps you to maintain updated records of all your company's assets. Stride ERP offers real-time asset management tools that can help perfect asset performance, and Stride also calculates your asset depreciation. </li>
                  
                <li><strong>Project Administration</strong>:  Stride ERP helps you track and operate sales activities and bookings of all your projects. Irrespective of the diverse category of your project.</li>
                  
                  
                  <li><strong>CarPool Manager</strong>:  This feature of Stride ERP takes care of vehicles owned by an organization. From driver assignment to fleet management, the carpool feature is a complete asset for companies that deal with or own vehicles.</li>
              </ul>
            </div>
            
          </div>
            <div class="portfolio-description">
              <h2>Manage all aspects of your Company</h2>
              <p>
                You are here! Feel free to explore our industry portfolio. We cataloged Stride ERP's solutions to aid you find the solutions you need to run your business smoothly and seemlessly. Let's help get to the next level in business.
              </p>
            </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
      
      
      
     
      
         
       <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
         <div class="col-lg-6 video-box">
              <a name="mining"></a>
            <img src="{{ asset('images/img/Stride-erp-tablet.png') }}" class="img-fluid" alt="">
            <a href="https://youtu.be/Nq-HR0Zdiqo" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true" target="_blank"></a>
          </div>
            <div class="col-lg-6 video-box">
                <p><b>Construction and Engineering / Trading Companies and Distributors / Commercial Services and Logistics / Professional Services / Transportation Infrastructure / Airlines</b><br>
                    Stride ERP comprises robust business management capabilities that can seamlessly integrate each department of an organization to foster smooth informational flow. 
                
    
Implementing Stride ERP software not only provides access to important data, Stride also enables a better process for collecting and analyzing data. Again, moving to one company-wide solution will help improve internal processes – one common platform fosters better internal communication.
<br>
As your company increase in size, it is easy to quickly outgrow existing processes and technology. Growing pains are a good problem to have, but like all other business challenges these issues need to be addressed in order to continue the path towards future progress. Luckily, Stride ERP has been termed "The Future of Business Automation", hence can help.<br><br>
                    
How satisfied are your customers?<br>
Disruptions internally – growing pains, problems between production and sales, or the inability to access important data – affect the customer experience. Stride ERP solutions help you save time and meet customer expectations.<br>
Do you need to reduce costs?<br>
Stride ERP enables you to be more cost effective through gained efficiencies in these areas (and more):
<li>Faster financial close</li>
<li>Improved inventory planning and accuracy</li>
<li>Accurate forecasting</li>
<li>Reduced days sales outstanding</li>
<li>Shop floor optimization</li>
<li>Reduced purchasing spend</li>
<li>Reduced freight spend</li>
                
                </p>
          </div>

          
            
        </div>

      </div>
    </section><!-- End Why Us Section -->
   

      
      
      
  </main><!-- End #main -->


@endsection

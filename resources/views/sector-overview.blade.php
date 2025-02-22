@extends('layouts.master')

@section('content')

<meta content="Sectors and industries, Sectors, Industries, the future of business, SMEs in Nigeria, ERP, Industry solution, Business solution, solutions to business challenges, industry portfolio, how to add value to SMEs" name="keywords">
  
        
        <title>Sector Overview - STRIDE ERP (The Future of Business Automation) </title>

    
  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Sectors/Industries Overview</h2>
          <ol>
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li>Sector Overview</li>
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
                    <center>  <img src="{{ asset('images/img/sectors/Sectors.png') }}" style="width:300px" alt=""></center>
                </div>

               
                

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-6">
  
              
            <div class="portfolio-description">
              <h2>The Future of Business Automation.</h2>
              <p>
                  Generally, Enterprise resource planning (ERP) systems are considered the price of entry in today’s
business environment, and the number of small and medium-sized enterprises (SME)
retiring legacy systems in favor of ERP systems is increasing exponentially.
However, there is a lack of knowledge and awareness of ERP systems and their potential
benefit and effect on performance, and overall value to SMEs. While ERP adoption costs
and potential benefits are high, it is not apparent whether the end result will translate into
higher productivity for SMEs. This is where Stride ERP come in!
                  <br>
                  
                Feel free to explore our industry portfolio. We cataloged Stride ERP's solutions to aid you in finding the solution(s) you need to run your business seamlessly. The future of business automation is in Stride, so let's help you get to the next level in business.
              </p>
            </div>   
              
              <div class="portfolio-description">
              <h2>Why industry solutions?</h2>
              <p>
              Every industry has unique challenges. Stride wants to help you manage the hard, the tedious, and the recurrent business processes, so you can focus on improving your ideas and providing excellent service.
              </p>
            </div>
           
              
              
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
      
      
      
      
      
      
      
      
      
      
          <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">

        
            
            
            <section class="service-details">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('images/img/sectors/Real-estate.png') }}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="{{ route('real-estate') }}">Real Estate Industry</a></h5>
                           
                <p class="card-text">Give your clients the best experience that only a Stride user can. <br>Explore our portfolio and learn how Stride ERP bridges the gap in the real estate industry.</p>
                  <a href="{{ route('real-estate') }}">Learn more...</a>
              </div>
            </div>
          </div>
              
                             <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('images/img/sectors/energy-industry.png') }}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="{{ route('energy-overview') }}">Energy and Utility Industry</a></h5>
                            <b>Industries:</b>
                    <br>
                    <ol>
                  
                        <li>Energy Equipment and Services</li>
                        <li>Oil, Gas and Consumable Fuels</li>
                               <li>Gas Utility Industry</li>
                        <li>Multi-Utility Industry</li>
                        <li>Independent Power and Renewable Electricity Producers</li>
                  
                  </ol>
                <p class="card-text">Whether it is energy products, equipment, or services, track all your internal processes and get real-time reports on all business process with Stride.</p>
                  <a href="{{ route('energy-overview') }}">Learn more...</a>
              </div>
            </div>
          </div>


          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('images/img/sectors/Materials.png') }}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="{{ route('materials-overview') }}">Materials Sector</a></h5>
                            <b>Industries:</b>
                    <br>
                    <ol>
                   
                        <li>Metals and Mining</li>
                        <li>Construction Materials</li>
                        <li>Chemical Industry</li>
                        <li>Containers and Packaging Industry</li>
                  
                  </ol>
                <p class="card-text">
                Accountability is essential in the materials industry. Learn how Stride can help you achieve accountability.
                  </p>
                  <a href="{{ route('materials-overview') }}">Learn more...</a>
              </div>
            </div>
          </div>
            
                      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('images/img/sectors/Industrial.png') }}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="{{ route('industrials-overview') }}">Industrial Sector</a></h5>
                            <b>Industries:</b>
                    <br>
                    <ol>
                        <li>Construction and Engineering</li>
                        <li>Trading Companies and Distributors</li>
                        <li>Commercial Services and Logistics</li>
                        <li>Professional Services</li>
                        <li>Transportation Infrastructure</li>
                        <li>Airlines</li>
                  
                  </ol>
                <p class="card-text">Build a better B2B customer experience with CRM solutions that can enable you to deliver digital, personalised, and consumer-like interactions.</p>
                  <a href="{{ route('industrials-overview') }}">Learn more...</a>
              </div>
            </div>
          </div>
            
                      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('images/img/sectors/consumer-discretionary.png') }}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="{{ route('consumer-discretionary-overview') }}">Consumer Discretionary</a></h5>
                            <b>Industries:</b>
                    <br>
                    <ol>
                        <li>Automobiles - Car dealership</li>
                        <li>Textiles, Apparel and Luxury Goods</li>
                        <li>Hotels, Restaurants and Leisure</li>
                        <li>Distributors and Retailers</li>
                  
                  </ol>
                <p class="card-text">Respond effectively to constituent needs – within tight budgets and under close scrutiny – with best practices on Stride ERP.</p>
                  <a href="{{ route('consumer-discretionary-overview') }}">Learn more...</a>
              </div>
            </div>
          </div>
            
                      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('images/img/sectors/consumer-staple.png') }}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="{{ route('consumer-staples-overview') }}">Consumer Staples</a></h5>
                            <b>Industries:</b>
                    <br>
                    <ol>
                    
                        <li>Food and Staples Retailing</li>
                        <li>Food, Beverage and Tobacco</li>
                        <li>Household and Personal Products</li>
              
                  
                  </ol>
                <p class="card-text">Stride ERP lets you build lasting customer loyalty with personalized commerce experiences and one-to-one engagement at scale by delivering data-driven customer experiences.</p>
                  <a href="{{ route('consumer-staples-overview') }}">Learn more...</a>
              </div>
            </div>
          </div>
            
            
                      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('images/img/sectors/Healthcare.png') }}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="{{ route('health-care-overview') }}">HealthCare Sector</a></h5>
                            <b>Industries:</b>
                    <br>
                    <ol>
                    
                        <li>HealthCare Equipment and Services</li>
                        <li>Pharmaceuticals, Biotechnology and Life Sciences</li>
                     
                  
                  </ol>
                <p class="card-text">Stride ERP provides an effective solution to hospitals that plan to reduce the costs of
administrative and clinical transactions, and at the same time, provide better service to their
consumers. It enables improved response to demands of patient care because it
automates the process of collecting; collating and retrieving patient information.</p>
                  <a href="{{ route('health-care-overview') }}">Learn more...</a>
              </div>
            </div>
          </div>
            
                      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('images/img/sectors/financial-industry.png') }}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="{{ route('finacials') }}">Financial Sector</a></h5>
                            <b>Industries:</b>
                    <br>
                    <ol>
          
                        <li>Banking</li>
                        <li>Insurance Industry</li>
                        <li>Diversified Financials </li>
                  
                  </ol>
                <p class="card-text">Stride ERP provides you with real-time data, so you can add value beyond quotes, claims, and renewals through new business models and a personalized customer-centric experience.</p>
                  <a href="{{ route('finacials') }}">Learn more...</a>
              </div>
            </div>
          </div>
            
                      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('images/img/sectors/IT.png') }}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="{{ route('information-technology') }}">Information Technology and Communication Service Sector</a></h5>
                            <b>Industries:</b>
                    <br>
                    <ol>
                       
                        <li>Software and Services</li>
                        <li>Technology Hardware and Equipment</li>
                        <li>Media Industry</li>
                        <li>Entertainment Industry</li>
                        <li>Diversified Telecommunication Service Industry</li>

                  
                  </ol>
                <p class="card-text">Transform your hardware and/or software business, organize and schedule I.T projects, monitor inventory, timesheet and human resource with our robust project management solution. Stride ERP helps you deliver a first-class omnichannel customer experience that is hyper-personalised and trusted with rich, seamless, and contextual experiences that will help your brand stay competitive.
                  </p>
                  <a href="{{ route('information-technology') }}">Learn more...</a>
              </div>
            </div>
          </div>
            <!--
                      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/sectors/Telecom.png" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="communication.php">Communication Service Sector</a></h5>
                            <b>Industries:</b>
                    <br>
                    <ol>
                        <li>Media Industry</li>
                        <li>Entertainment Industry</li>
                        <li>Diversified Telecommunication Service Industry</li>
               
                  
                  </ol>
                <p class="card-text">Stride ERP helpd you deliver a first-class omnichannel customer experience that is hyper-personalised and trusted with rich, seamless, and contextual experiences that will help your brand stay competitive.</p>
                  <a href="communication.php">Learn more...</a>
              </div>
            </div>
          </div>
            
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/sectors/Utility-industry.png" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="utilities.php">Utility Sector</a></h5>
                    <b>Industries:</b>
                    <br>
                    <ol>
                        <li>Gas Utility Industry</li>
                        <li>Multi-Utility Industry</li>
                        <li>Independent Power and Renewable Electricity Producers</li>
               
                  
                  </ol>
                  
                <p class="card-text">Build lasting relationships by helping customers become energy efficient and go green with a data-driven, personalised customer experience designed for utilities.
                
                   
                  
                  </p>
                  <a href="utilities.php">Learn more...</a>
              </div>
            </div>
          </div>
          
          -->
          
          
        </div>

      </div>
    </section>
            
            
            

        </div>

      </div>
    </section><!-- End Facts Section -->

  </main><!-- End #main -->


@endsection
    
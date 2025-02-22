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
    
        .item input:hover, .item select:hover, .item textarea:hover {
          border: 1px solid transparent;
          box-shadow: 0 0 3px 0  #3498db;
          color: #006622;
        }
    
        .item {
          position: relative;
          margin: 10px 0;
        }
    
        .item span {
          color: red;
        }
    
        input {
          width: calc(50% - 10px);
          padding: 5px;
        }
    
        input, select, textarea {
          margin-bottom: 10px;
          border: 1px solid #ccc;
          border-radius: 3px;
        }
    
        .item span {
          color: red;
        }
    
        .list{
          border: 1px solid transparent;
          box-shadow: 0 0 3px 0  #006622;
          color: #006622;
        }
    
        .btn{
          justify-content: center;
          border-top:20px;
          width: 50%;
          padding: 20px;
          border-radius: 6px;
          background: #fff;
          box-shadow: 0 0 8px #3498db;
          color:#006622;
        }
    
    </style>
    
     <!--============================
        =     End of Style Sheet       =
        =============================-->
    
    <body>
    <meta content="Finance, Financial, financial industry, banking sector, insurrance, diversified financials, company, manage finance, make money online, manage money" name="keywords">
      
            
            <title>Stride ERP Strategic Alliance Program</title>
        
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
      <main id="main">
    
        <!-- ======= Our Portfolio Section ======= -->
        <section class="breadcrumbs">
          <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
              <h1><b>Stride ERP Strategic Alliance Program</b></h1>
             
            </div>
    
            <div class="container">
              <div>
                @if(Session::has('success'))
                  <div class="alert alert-success">
                    {{ Session::get('success') }}
                   </div>
               @endif
              </div>
                
                
                
                  <!--============================
                 =   Partnership Form      =
                =============================-->
                
                
                
                                <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-4">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-chair"></i>
                  <h3>Join Our SAP Program</h3>
                  <p style="margin: 0 10px; text-align:justify">The Strategic Alliance Program, also sometimes referred to
as the Partner Program is the foundation of the
relationship between you and Stride ERP - The Brand. We view our
partners as an extension of our brand.  </p>

                    <p style="margin: 0 10px; text-align:justify; ">The Partner Network helps your company benefit from market leading solutions combined with
award-winning programs designed to enable, distinguish, and reward you. You gain exclusive
access to resources that will help you create new opportunities and increase profitability.</p> 
                    <br>
                    <p style="color:#3498db"><a href="#Stride-ERP-SAP">SIGN UP TODAY!</a></p> 
                    
                    
                 
                    
                    
                        <img src="{{ asset('images/SAP with Stride ERP1.png') }}" class="img-fluid" alt="">
                                        
                    
                    
                    
                    <h3>Watch demo videos</h3>
                  <p>Watch Stride ERP's demo videos on YouTube.</p>
               <center><iframe  width="330" height="250" src="https://www.youtube.com/embed/Y-WcMNGGuGs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </center>

                  </div>
              </div>
    
                
                
            </div>

          </div>    
            
            
            <div class="col-lg-8">

            <div class="row">
              <div class="col-md-12">
                      <div class="card card-user">
    
                          
                          
        <div class="card-body">
           @if(Session::has('success'))
              <div class="alert alert-success">
        	    {{ Session::get('success') }}
               </div>
           @endif
           
            
            
                <p><em>Stride ERP's SAP Documents: <hr>   <a href="{{ asset('document/Stride ERP - SAP Corporate Partnership.pdf') }}" style="text-decoration: underline;">Stride ERP - SAP Corporate Partnership</a>  &amp;  <a href="{{ asset('document/Stride ERP - SAP Technical Partnership.pdf') }}" style="text-decoration: underline;">Stride ERP - SAP Technical Partnership</a></em></p>

            <hr>
            
            
            
            
           <form method="post" action="/partner">
               
            @csrf
             <div class="row">
                 
                 <div class="col-sm-12">
                 <div class="row">    
                     
                       <a name="Stride-ERP-SAP"></a>
                     
<div class="col-md-6">
             <div class="item">
               <label for="first_name"><b>First Name</b><span>*</span></label>
                 <br>               
                 <input id="first_name" type="text" class="form-control" placeholder="e.g: John"  name="first_name" required>
             </div>
                     </div>
          
<div class="col-md-6">
             <div class="item">
                 <label for="last_name"><b>Last Name</b><span>*</span></label>
               <br>
               <input id="name" class="form-control" placeholder="Doe"  name="last_name" required>
             </div>
    
                     </div>
                     </div>
                        <div class="item">
               <div>
                 <label for="address"><b>Email</b><span>*</span></label>
                 <br>
                 <input type="email" class="form-control" placeholder="e.g: john123@example.com"  name="email" required>
               </div>
             </div>
            </div>
            
                 
                        <div class="col-sm-12">
      

              <div class="item">
                 <label for="phone"><b>Phone Number</b><span>*</span></label>
                <br>
                <input type="text" class="form-control" placeholder=" e.g: +234 814 990 6811" name="phone" required>
              </div>     
                            
                            
                            <!-- <div class="item">
                <label for="company_name"><b>Company Name</b></label>
                <br>
                <input type="text" class="form-control" placeholder="e.g: XYZ Limited" name="company_name">
              </div> -->

              
                            
                   <!-- <div class="row">     -->
<!--<div class="col-md-6">
              <div class="item">
               <label for="MOI"><b>What is your interest in Stride ERP</b></label>
                <br>
                <div>
                    <select class="list form-control" name="means_of_identification" >
                      <option selected> --- Select option --- </option>
                      <option>SAP - Corporate Partner</option>
                      <option >SAP - Technical Partner</option>
                      <option >SAP - Creator</option>
                      <option >Press/Analyst</option>
                      <option >Prospective Client</option>
                      <option >Intern</option>
                      <option >Employee</option>
                      <option >Consultant</option>
                      <option >User</option>
                    </select>
                </div>
              </div>
    </div>-->
                       
                       
             
<!-- <div class="col-md-6">
              <div class="item">
                <label for="industry_of_business"><b>Sector/Industry of Business</b><span>*</span></label>
                <br>
                <select class="list form-control" name="industry_of_business">
                 <option selected> --- Select option --- </option>
                  <option>Energy and Utilities</option>
                          <option>Information Technology and Communication Service</option>
                          <option>Manufacturing</option>
                          <option>Industrials</option>
                          <option>Transport</option>
                          <option>Finance</option>
                          <option>Consumer Staples</option>
                          <option>HealthCare</option>
                          <option>Real Estate</option>
                          <option>Materials</option>
                  <option type="text" >Consumer Discretionary</option>
                </select>  
              </div>
    </div>
                       
<div class="col-md-6">
              <div class="item">
                <label for="location"><b>Location</b><span>*</span></label>
                <br>
                <input type="text" class="form-control" placeholder="e.g: Lagos"  name="location" required>
  </div>
</div>  
                            
                            
</div>         
                            
                            
                            
                            
                            
                            
                            
                <div class="row">    
<div class="col-md-12">
              <div class="item">
                <label for="how_did_you_hear"><b>How did you hear about Stride ERP?</b><span>*</span></label>
                <br>
                <input type="text" class="form-control" placeholder=""  name="how_did_you_hear" required>
              </div>
                    </div> -->
                    
<!--<div class="col-md-6">
              <div class="item">
                 <label for="ID"><b>Promo Code</b></label>
                <br>
                <input type="text" class="form-control" placeholder="WFFP-2021-EG"  name="identification_number" >
              </div>
                    </div>-->
                            
</div>
             
                            

              <div>
                  
                  
                  
                  
                  
                  <style>
                  
                  .containe {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.containe input {
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
#check {
  position: absolute;
  left: 35px;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.containe:hover input ~ #check {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.containe input:checked ~ #check {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.check:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.containe input:checked ~ .check:after {
  display: block;
}

/* Style the checkmark/indicator */
.containe .check:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
                  
                  </style>
                  

                  
                  
                  
                 
                  
                  <hr style="color:fff">
                <label for="agreement"><b>Stride ERP Strategic Alliance Partnership Agreement</b></label>
                                   
<div class="checkbox">

    <hr style="color:#3498db">
   <p style="margin-left:25px"> <input id="check" name="checkbox" type="checkbox" > Check here to indicate that you have read and agreed to Our <a href="{{ asset('document/Stride ERP Partnership Contract Agreement.pdf') }}" style="text-decoration: underline;">Terms and Agreement</a> </p>
        <hr style="color:#3498db">

     
    <hr style="color:fff">
</div>
                                   

       
              </div>
               
                            
           </div>
                 
                 

                 

                 
             </div>
             <div class="row">
              <div class="update ml-auto mr-auto">
                  <br>

                  
                  <button type="submit" id="btncheck" class="btn btn-primary btn-round" style="width:100%; background-color: #3498db; color: white;" >Submit</button>
                  
                  
               
               </div>
             </div>
           </form>
            
     
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script>
            $(function() {
  var chk = $('#check');
  var btn = $('#btncheck');

  chk.on('change', function() {
    btn.prop("disabled", !this.checked);//true: disabled, false: enabled
  }).trigger('change'); //page load trigger event
});
            </script>
            
         </div>
       </div>
              </div>
           
            </div>

          </div>

</div></div></section>
                
                  <!--============================
                 =   Partnership Form      =
                =============================-->
                
                
                
                
    
               <!--============================
                 =   Partnership Form      =
                =============================--
    
              <form method="post" action="/partner">
                @csrf
              <div class="row">
                <div class="col-sm-6">
    
                 <div class="item">
                   <label for="name"><b>First Name</b><span>*</span></label>
                     <br>
                     <input id="name" type="text" placeholder=""  name="first_name" required>
                 </div>

                 <div class="item">
                    <label for="name"><b>Last Name</b><span>*</span></label>
                      <br>
                      <input id="name" type="text" placeholder=""  name="last_name" required>
                  </div>
    
                 <div class="item">
                   <div>
                     <label for="address"><b>Email</b><span>*</span></label>
                     <br>
                     <input type="email" placeholder=""  name="email" required>
                   </div>
                 </div>
    
                 <div class="item">
                   <label for="phone"><b>Phone Number</b><span>*</span></label>
                   <br>
                   <input type="tel" placeholder=""  name="phone" required>
                 </div>

                 <div class="">
                    <label for="MOI"><b>Means of Identification</b></label>
                    <br>
                    <div>
                        <select class="list" name="means_of_identification">
                          <option>National ID</option>
                          <option>Drivers License</option>
                          <option>International Passport</option>
                          <option>Voters Card</option>
                          <option>NIN</option>
                        </select>
                    </div>
                    <p><em>NOTE: Kindly send a scanned copy of your Passport photograph and valid ID to"hr@rytegate.com"</em></p>
                  </div>

                 <div class="item">
                    <label for="ID"><b>Identification Number</b><span>*</span></label>
                    <br>
                    <input type="text" placeholder=""  name="identification_number" required>
                 </div>
     
                </div>
                
                
    
               <div class="col-sm-6">
    
                  <div class="item">
                    <label for="bname"><b>Bank Name</b><span>*</span></label>
                    <br>
                    <input type="text" placeholder="" name="bank_name" required>
                  </div>

                  <div class="item">
                    <label for="acc_number"><b>Bank Account Number</b><span>*</span></label>
                    <br>
                    <input type="text" placeholder="" name="bank_account_number" required>
                  </div>

                  <div class="item">
                    <label for="cname"><b>Company Name</b><span>*</span></label>
                    <br>
                    <input type="text" placeholder="" name="company_name" required>
                  </div>
    
                  <div class="item">
                    <label for="IOB"><b>Sector/Industry of Business</b></label>
                    <br>
                    <div>
                        <select class="list" name="industry_of_business">
                          <option>Construction</option>
                          <option>ICT</option>
                          <option>Manufacturing</option>
                          <option>Health</option>
                          <option>Transport</option>
                          <option>Finance</option>
                          <option>Others</option>
                        </select>
                    </div>
                  </div>
                  
                  <br>

                  <div class="item">
                    <label for="agreement"><b>RyteGate Strategic Alliance Partnership Agreement</b></label>
                    <br>
                    <p><em>I have read and accept the terms of the Rytegate Strategic Alliance Partnership Agreement.     <a href="{{ asset('document/PartnershipContractAgreement-.pdf') }}" style="text-decoration: underline;">Terms and Agreement</a></em></p>
                    <div>
                        <select class="list" name="rytegate_partnership_agreement">
                          <option>Select</option>
                          <option>Yes</option>
                        </select>
                    </div>
                  </div>
    
                  <div class="item">
                    <label for="agreement_date"><b>Agreement Date</b><span>*</span></label>
                    <br>
                    <input type="date"  name="agreement_date" required>
                  </div>
    
                  <br>
                  <button type="submit" class="btn" style="background-color: #3498db; color: white;" >Submit</button>
               </div>
    
              </div>
            </form>
    
            <!--============================
                 =   End of Partnership Form      =
              =============================-->
    
            </div>
    
          </div>
        </section><!-- End Our Portfolio Section -->
      
    
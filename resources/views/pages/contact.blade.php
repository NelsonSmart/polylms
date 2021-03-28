<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PolyNekTech - Tutor Online Courses</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-nice-select/nice-select.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/OwlCarousel2/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/magnific-popup/css/magnific-popup.css')}}">

  <!-- Main Stylesheet -->
  <link href="{{ asset('assets/assets/css/style.css')}}" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="{{ asset('assets/assets/images/free-class.png')}}" type="image/png">

</head>

<body id="top">

  <!-- start of preloader -->
  <div class="preloader"></div>
  <!-- end of preloader -->

 
  <!-- signup-modal -->
  @include('pages.signupM')
  <!-- signup-modal -->

  <!-- signin-modal -->
   @include('pages.signinM')
  <!-- signin-modal -->
  
 @include('pages.header')

<!-- start of page-header -->
<section class="page-header bg-cover has-overlay" style="background-image: url('assets/assets/images/page-header-02.jpg')">
   <div class="container">
      <div class="row">
         <div class="col-12 text-center">
            <h2 class="section-title text-white font-weight-bold mb-20">Contact Us</h2>
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb bg-transparent justify-content-center p-0 font-weight-600 mb-0">
                  <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('index')}}">Home</a></li>
                  <li class="breadcrumb-item">Contact Us</li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</section>
<!-- end of page-header -->


<!-- start of contact section -->
<section class="section-padding bg-gray">
   <div class="container">
      <div class="row justify-content-between">
         <div class="col-lg-7 order-1 order-lg-0">
            <div class="mb-5">
               <h2 class="text-secondary font-weight-bold mb-2">Send a Message</h2>
               <p>Your email address will not be published. <br> Required fields are marked.</p>
            </div>
            <form action="#">
               <div class="row">
                  <div class="col-md-6">
                     <div class="mb-30">
                        <label for="name">Name*</label>
                        <input type="text" class="form-control rounded-sm" id="name" placeholder="Jason John">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-30">
                        <label for="email">Email*</label>
                        <input type="email" class="form-control rounded-sm" id="email" placeholder="jason@email.com">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="mb-30">
                        <label for="sub">Subject</label>
                        <input type="text" class="form-control rounded-sm" id="sub" placeholder="I want to know about course.">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="mb-30">
                        <label for="message">Message</label>
                        <textarea class="form-control rounded-sm" id="message" rows="5"></textarea>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <button type="submit" class="btn btn-primary rounded-sm">Send Message</button>
                  </div>
               </div>
            </form>
         </div>

         <div class="col-xl-4 col-lg-5 mb-5 mb-lg-0 order-0 order-lg-1">
            <div class="mb-5">
               <h2 class="text-secondary font-weight-bold mb-2">Contact Info</h2>
               <p>Welcome to our Website. <br> We are glad to have you around.</p>
            </div>
            <div class="shadow-sm p-20 mt-4 rounded-sm bg-white d-block d-sm-flex align-items-center">
               <i class="fas fa-phone fa-2x text-primary"></i>
               <div class="ml-sm-4 mt-3 mt-sm-0">
                  <h4 class="text-secondary font-weight-600 mb-1">Contact Details</h4>
                  <p>Phone: <a href="tel:+2349044287619" class="text-dark">+2349044287619</a></p>
                  <p>Mail: <a href="mailto:contact@polynektech.com" class="text-dark">contact@polynektech.com</a></p>
               </div>
            </div>
            <div class="shadow-sm p-20 mt-4 rounded-sm bg-white d-block d-sm-flex align-items-center">
               <i class="fas fa-map-marked-alt fa-2x text-primary"></i>
               <div class="ml-sm-4 mt-3 mt-sm-0">
                  <h4 class="text-secondary font-weight-600 mb-1">Location</h4>
                  <p>PO Box i987 Nekede Owerri, Nigeria.</p>
               </div>
            </div>
            <div class="shadow-sm p-20 mt-4 rounded-sm bg-white d-block d-sm-flex align-items-center">
               <i class="fas fa-user-clock fa-2x text-primary"></i>
               <div class="ml-sm-4 mt-3 mt-sm-0">
                  <h4 class="text-secondary font-weight-600 mb-1">Opening Hours</h4>
                  <p>Monday-Friday</p>
                  <p>10:30a.m-7:00p.m</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of contact section -->


<!-- start of our map section -->
<section class="section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <h2 class="section-title">You are Always <br> Welcome to <span class="has-line">Our Place</span></h2>
         </div>
      </div>
      <div class="row align-items-center">
         <div class="col-lg-12">
            <a href="https://www.google.com/maps/place/Federal+Polytechnic,+Nekede,+Owerri/@5.4795496,7.0294221,48m/data=!3m1!1e3!4m5!3m4!1s0x10425953526b4bcf:0x46c2c2b2e67f46df!8m2!3d5.4794628!4d7.0293604" class="map-image" target="_blank">
               <img src="{{ asset('assets/assets/images//map-img.jpg')}}" type="image/png" alt="">
               <span class="map-text h4"><i class="fas fa-external-link-alt mr-2"></i> View us on Map</span>
            </a>
         </div>
      </div>
   </div>
</section>
<!-- end of our map section -->


 @include('pages.footer')
<a href="#top" class="scroll-to-top">
   <span class="fas fa-chevron-up"></span>
</a>

<script src="{{ asset('assets/vendors/jQuery/jquery.min.js')}}"></script>
<script src="{{ asset('assets/vendors/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/vendors/jquery-nice-select/jquery.nice-select.min.js')}}"></script>
<script src="{{ asset('assets/vendors/OwlCarousel2/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/vendors/counterup/waypoints.min.js')}}"></script>
<script src="{{ asset('assets/vendors/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('assets/vendors/magnific-popup/js/magnific-popup.min.js')}}"></script>

<!-- Main Script -->
<script src="{{ asset('assets/assets/js/script.js')}}"></script>

</body>
</html>
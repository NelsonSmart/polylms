<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PolyNekTech- Tutor Online Courses </title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/jquery-nice-select/nice-select.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/OwlCarousel2/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/magnific-popup/css/magnific-popup.css')}}">

  <!-- Main Stylesheet -->
  <link href="{{asset('assets/assets/css/style.css')}}" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset('assets/assets/images/free-class.png')}}" type="image/png">

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
<section class="page-header bg-cover has-overlay" style="background-image: url('assets/assets/images/page-header-03.jpg')">
   <div class="container">
      <div class="row">
         <div class="col-12 text-center">
            <h2 class="section-title text-white font-weight-bold mb-20">About Us</h2>
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb bg-transparent justify-content-center p-0 font-weight-600 mb-0">
                  <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('index')}}">Home</a></li>
                  <li class="breadcrumb-item">About Us</li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</section>
<!-- end of page-header -->


<!-- start of section -->
<section class="section-padding">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-7 text-center">
            <img class="img-fluid rounded" src="{{ asset('assets/assets/images/about-img.jpg')}}" alt="">
         </div>
         <div class="col-lg-5 mt-5 mt-lg-0">
            <h2 class="section-title mb-30">Who <span class="has-line">We Are</span></h2>
            <p class="mb-3">Dispatched entreaties boisterous say why stimulated. Certain forbade pcture now prevent carried she sitting.</p>
            <p>Uneasy barton seeing remark happen hi has. Am possible offering contempt mr distance stronger an. Attachment excellence announcing or reasonable am on if indulgence. Exeter talked in agreed spirit no he unable do. Betrayed shutters in vicinity it unpacked in.</p>
         </div>
      </div>
   </div>
</section>
<!-- end of section -->


<!-- start of video-popup section -->
<section class="section-padding pt-0 bg-light has-white-half">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-9">
            <div class="text-center">
               <a href="https://www.youtube.com/watch?v=yD7b6R0-LQw" class="d-block has-overlay has-video-popup tansform-none">
                  <img class="img-fluid rounded" src="{{asset('assets/assets/images/video-thumb-3.jpg')}}" alt="">
                  <img class="play-btn" src="{{asset('assets/assets/images/video-btn.png')}}" alt="">
               </a>
               <h2 class="section-title mt-50 mb-25">What  Some Awesome Student Says <span class="has-line">About Us</span></h2>
               <p class="mb-40">Weddings and any opinions suitable smallest nay. My he houses or months settle remove <br> ladies appear. Engrossed suffering supposing he recommend.</p>
               <a href="{{ route('about-2')}}" class="btn btn-lg btn-secondary rounded-pill">About Us</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of video-popup section -->


<!-- start of our vision section -->
<section class="section-padding">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-5">
            <h2 class="section-title mb-30">Our <span class="has-line">Vision</span></h2>
            <p class="mb-3">Weddings and any opinions suitable smallest nay. My he houses or months settle remove ladies appear. Engrossed suffering supposing he recommend.</p>
            <p>Uneasy barton seeing remark happen hi has. Am possible offering contempt mr distance stronger an. Attachment excellence announcing or reasonable am on if indulgence. Exeter talked in agreed spirit no he unable do. Betrayed shutters in vicinity it unpacked in.</p>
         </div>
         <div class="col-lg-7 mt-5 mt-lg-0 text-center">
            <img width="49%" src="{{asset('assets/assets/images/our-vision-01.jpg')}}" alt="">
            <img width="49%" src="{{asset('assets/assets/images/our-vision-02.jpg')}}" alt="">
         </div>
      </div>
   </div>
</section>
<!-- end of our vision section -->


<!-- start of our map section -->
<section class="section-padding pt-0">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <h2 class="section-title">You are Always <br> Welcome to <span class="has-line">Our Place</span></h2>
         </div>
      </div>
      <div class="row align-items-center">
         <div class="col-lg-12">
            <a href="https://www.google.com/maps/place/Federal+Polytechnic,+Nekede,+Owerri/@5.4794628,7.0271717,13z/data=!4m5!3m4!1s0x10425953526b4bcf:0x46c2c2b2e67f46df!8m2!3d5.4794628!4d7.0293604" class="map-image" target="_blank">
               <img src="{{asset('assets/assets/images/map-img.jpg')}}" alt="">
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
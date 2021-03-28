<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PolyNekTech - Tutor Online Courses</title>
    

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
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
  
 @include('pages.header1')

<!-- start of page-header -->
<section class="py-80 bg-gray">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h2 class="section-title font-weight-bold mb-20">About Us</h2>
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb bg-transparent p-0 font-weight-600 mb-0">
                  <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="{{ route('index')}}">Home</a></li>
                  <li class="breadcrumb-item">About Us 2</li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</section>
<!-- end of page-header -->


<!-- start of Tutor Management system section -->
<section class="section-padding">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6 text-center">
            <img class="img-fluid rounded pr-lg-3" src="{{asset('assets/assets/images/tms.png')}}" alt="">
         </div>
         <div class="col-lg-6 mt-5 mt-lg-0">
            <h2 class="section-title mb-30">About Our <br>Tutor Management <br>System Online</h2>
            <p class="mb-4">Dispatched entreaties boisterous say why stimulated. Certain forbade pcture now prevent carried she get see sitting.</p>
            <ul class="list-unstyled">
               <li class="mb-2"><i class="fas fa-star mr-2 text-primary"></i>Uneasy barton seeing remark happen hi has.</li>
               <li class="mb-2"><i class="fas fa-star mr-2 text-primary"></i>Am possible offering contempt mr distance stronger an.</li>
               <li><i class="fas fa-star mr-2 text-primary"></i>Attachment excellence announcing or reasonable.</li>
            </ul>
            <div class="media has-outline-primary align-items-center mt-35">
               <img class="rounded-circle" src="assets/images/user-07.jpg" alt="">
               <div class="ml-3">
                  <h5 class="text-blue font-weight-600 mb-1">Pianoforall</h5>
                  <p>Released: 2/5/2020</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of Tutor Management system section -->


<!-- start of counter -->
<section class="overflow-hidden">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="pt-60 pb-30 counter-section text-white text-center">
               <div class="row">
                  <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                     <h2 class="h1 font-weight-600 mb-2 text-primary jsCounter">9456</h2>
                     <p class="h5 font-weight-600">Active People</p>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                     <h2 class="h1 font-weight-600 mb-2 text-primary jsCounter">154</h2>
                     <p class="h5 font-weight-600">Award Winning</p>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                     <h2 class="h1 font-weight-600 mb-2 text-primary jsCounter">2563</h2>
                     <p class="h5 font-weight-600">Active Coach</p>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                     <h2 class="h1 font-weight-600 mb-2 text-primary jsCounter">2817</h2>
                     <p class="h5 font-weight-600">Certify People</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of counter -->


<!-- start of certificate-section -->
<section class="section-padding">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6">
            <h2 class="section-title">Get Your Quality Skills Certificate Through Online Exam</h2>
            <p class="mt-3 mb-40">Dispatched entreaties boisterous say why stimulated. Certain forbade picture now prevent carried she get see sitting. Up twenty limits as months. Inhabit so perhaps of in to certain.</p>
            <a href="#!" class="btn btn-outline-primary">Get start now</a>
         </div>
         <div class="col-lg-6">
            <img class="img-fluid" src="{{asset('assets/assets/images/certificate.png')}}" alt="">
         </div>
      </div>
   </div>
</section>
<!-- end of certificate-section -->


<!-- start of tutor carousel -->
<section class="section-padding bg-light bg-cover" style="background-image:url('assets/assets/images/tutor-say-bg.jpg')">
   <div class="container">
      <div class="row justify-content-end">
         <div class="col-lg-10">
            <h2 class="section-title">Happy Tutors Say</h2>
            <div class="owl-carousel tutor-carousel">
               <div class="tutor-item bg-white p-30">
                  <p>Left till here away at to whom past. Feelings laughing at no wondered repeated provided finished. It acceptance thoroughly my advantages everything are projecting inquietude.</p>
                  <div class="media d-block d-sm-flex mt-25">
                     <img src="assets/images/user-01.jpg" alt="">
                     <div class="ml-0 ml-sm-3 mt-3 mt-sm-0">
                        <h4 class="font-weight-600 text-blue mb-1">James Benzion</h4>
                        <p>Pittsburgh, USA</p>
                     </div>
                  </div>
               </div>
               <div class="tutor-item bg-white p-30">
                  <p>Left till here away at to whom past. Feelings laughing at no wondered repeated provided finished. It acceptance thoroughly my advantages everything are projecting inquietude.</p>
                  <div class="media d-block d-sm-flex mt-25">
                     <img src="assets/images/user-05.png" alt="">
                     <div class="ml-0 ml-sm-3 mt-3 mt-sm-0">
                        <h4 class="font-weight-600 text-blue mb-1">Alex Benzion</h4>
                        <p>Khulnala, UAE</p>
                     </div>
                  </div>
               </div>
               <div class="tutor-item bg-white p-30">
                  <p>Left till here away at to whom past. Feelings laughing at no wondered repeated provided finished. It acceptance thoroughly my advantages everything are projecting inquietude.</p>
                  <div class="media d-block d-sm-flex mt-25">
                     <img src="assets/images/user-01.jpg" alt="">
                     <div class="ml-0 ml-sm-3 mt-3 mt-sm-0">
                        <h4 class="font-weight-600 text-blue mb-1">Jesmin Benzion</h4>
                        <p>Pittsburgh, USA</p>
                     </div>
                  </div>
               </div>
               <div class="tutor-item bg-white p-30">
                  <p>Left till here away at to whom past. Feelings laughing at no wondered repeated provided finished. It acceptance thoroughly my advantages everything are projecting inquietude.</p>
                  <div class="media d-block d-sm-flex mt-25">
                     <img src="assets/images/user-06.png" alt="">
                     <div class="ml-0 ml-sm-3 mt-3 mt-sm-0">
                        <h4 class="font-weight-600 text-blue mb-1">Jack Barker</h4>
                        <p>Pittsburgh, USA</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of tutor carousel -->


<!-- start of Management-team -->
<section class="section-padding">
   <div class="container">
      <div class="row align-items-center mb-50">
         <div class="col-lg-12 text-center">
            <h2 class="section-title mb-0">Our Management Team</h2>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-md-4 col-sm-6">
            <div class="card text-center border-0 mt-30">
               <div class="hover-grayscale">
                  <img src="{{asset('assets/assets/images/instructors/01.jpg')}}" alt="" class="card-img-top">
               </div>
               <div class="card-body px-0 pb-0">
                  <h4 class="font-weight-600 text-blue mb-1">Jack Benzion</h4>
                  <p>Pittsburgh, USA</p>
                  <ul class="social-icons list-unstyled mt-3">
                     <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                     <li><a href="#!"><i class="fab fa-skype"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6">
            <div class="card text-center border-0 mt-30">
               <div class="hover-grayscale">
                  <img src="{{asset('assets/assets/images/instructors/02.jpg')}}" alt="" class="card-img-top">
               </div>
               <div class="card-body px-0 pb-0">
                  <h4 class="font-weight-600 text-blue mb-1">Jesmin Walkaer</h4>
                  <p>Pittsburgh, USA</p>
                  <ul class="social-icons list-unstyled mt-3">
                     <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                     <li><a href="#!"><i class="fab fa-skype"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6">
            <div class="card text-center border-0 mt-30">
               <div class="hover-grayscale">
                  <img src="{{asset('assets/assets/images/instructors/03.jpg')}}" alt="" class="card-img-top">
               </div>
               <div class="card-body px-0 pb-0">
                  <h4 class="font-weight-600 text-blue mb-1">James Benzion</h4>
                  <p>Pittsburgh, USA</p>
                  <ul class="social-icons list-unstyled mt-3">
                     <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                     <li><a href="#!"><i class="fab fa-skype"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of Management-team -->


 @include('pages.footer')
<a href="#top" class="scroll-to-top">
   <span class="fas fa-chevron-up"></span>
</a>

<!-- jQuery -->
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
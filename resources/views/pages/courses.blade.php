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
            <h2 class="section-title font-weight-bold mb-20">Latest Courses</h2>
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb bg-transparent p-0 font-weight-600 mb-0">
                  <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="index-3.html">Home</a></li>
                  <li class="breadcrumb-item">Courses</li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</section>
<!-- end of page-header -->


<!-- start of courses section -->
<section class="section-padding">
   <div class="container">
      <div class="row">
         <div class="col-12 text-center mb-30">
            <h2 class="section-title">Join Our World Class Best Courses</h2>
         </div>
         <div class="col-lg-12">
            <div class="nav-scrollable">
               <nav class="nav d-flex justify-content-between">
                  <a href="#!" class="active">All</a>
                  <a href="#!">Graphic Design</a>
                  <a href="#!">Web Development</a>
                  <a href="#!">Networking</a>
                  <a href="#!">Software Engineering</a>
                  <a href="course-details.html">Artifical Intelligence</a>
                  <a href="#!">Software Development</a>
                
               </nav>
            </div>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="card course-card shadow mt-40">
               <img class="card-img-top" src="assets/images/courses/01.jpg" alt="">
               <div class="card-body p-30">
                  <h5 class="font-weight-600"><a href="course-details.html" class="text-blue">Machine Learning A-Z: hands-On Python In Data Science</a></h5>
                  <p class="mt-2">She exposed painted fifteen are noisier mistake led waiting surprise.</p>
               </div>
               <div class="px-30">
                  <div class="card-footer px-0 bg-transparent mb-10 d-flex justify-content-between align-items-center">
                     <div class="rating text-primary">
                        <span class="font-weight-600">4.3</span>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <p class="price h6">
                        $12.99 <s>$12.99</s>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="card course-card shadow mt-40">
               <img class="card-img-top" src="assets/images/courses/02.jpg" alt="">
               <div class="card-body p-30">
                  <h5 class="font-weight-600"><a href="course-details-2.html" class="text-blue">The Business Intelligence
                     Analyst Course 2020</a></h5>
                  <p class="mt-2">She exposed painted fifteen are noisier mistake led waiting surprise.</p>
               </div>
               <div class="px-30">
                  <div class="card-footer px-0 bg-transparent mb-10 d-flex justify-content-between align-items-center">
                     <div class="rating text-primary">
                        <span class="font-weight-600">4.3</span>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <p class="price h6">
                        $12.99 <s>$12.99</s>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="card course-card shadow mt-40">
               <img class="card-img-top" src="assets/images/courses/03.jpg" alt="">
               <div class="card-body p-30">
                  <h5 class="font-weight-600"><a href="course-details-2.html" class="text-blue">The Business Intelligence
                     Analyst Course 2020</a></h5>
                  <p class="mt-2">She exposed painted fifteen are noisier mistake led waiting surprise.</p>
               </div>
               <div class="px-30">
                  <div class="card-footer px-0 bg-transparent mb-10 d-flex justify-content-between align-items-center">
                     <div class="rating text-primary">
                        <span class="font-weight-600">4.3</span>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <p class="price h6">
                        $12.99 <s>$12.99</s>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="card course-card shadow mt-40">
               <img class="card-img-top" src="assets/images/courses/04.jpg" alt="">
               <div class="card-body p-30">
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">Pianoforall - Incredible New Way
                     To Learn Pano & Keyboard course</a></h5>
                  <p class="mt-2">She exposed painted fifteen are noisier mistake led waiting surprise.</p>
               </div>
               <div class="px-30">
                  <div class="card-footer px-0 bg-transparent mb-10 d-flex justify-content-between align-items-center">
                     <div class="rating text-primary">
                        <span class="font-weight-600">4.3</span>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <p class="price h6">
                        $12.99 <s>$12.99</s>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="card course-card shadow mt-40">
               <img class="card-img-top" src="assets/images/courses/05.jpg" alt="">
               <div class="card-body p-30">
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">MLP Practitioner Certificate Course (Beginner To Advanced)</a></h5>
                  <p class="mt-2">She exposed painted fifteen are noisier mistake led waiting surprise.</p>
               </div>
               <div class="px-30">
                  <div class="card-footer px-0 bg-transparent mb-10 d-flex justify-content-between align-items-center">
                     <div class="rating text-primary">
                        <span class="font-weight-600">4.3</span>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <p class="price h6">
                        $12.99 <s>$12.99</s>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="card course-card shadow mt-40">
               <img class="card-img-top" src="assets/images/courses/06.jpg" alt="">
               <div class="card-body p-30">
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">Java Programming Masterclass For Software Developers</a></h5>
                  <p class="mt-2">She exposed painted fifteen are noisier mistake led waiting surprise.</p>
               </div>
               <div class="px-30">
                  <div class="card-footer px-0 bg-transparent mb-10 d-flex justify-content-between align-items-center">
                     <div class="rating text-primary">
                        <span class="font-weight-600">4.3</span>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <p class="price h6">
                        $12.99 <s>$12.99</s>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="card course-card shadow mt-40">
               <img class="card-img-top" src="assets/images/courses/09.jpg" alt="">
               <div class="card-body p-30">
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">Pianoforall - Incredible New Way
                     To Learn Pano & Keyboard course</a></h5>
                  <p class="mt-2">She exposed painted fifteen are noisier mistake led waiting surprise.</p>
               </div>
               <div class="px-30">
                  <div class="card-footer px-0 bg-transparent mb-10 d-flex justify-content-between">
                     <div class="rating text-primary">
                        <span class="font-weight-600">4.3</span>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <p class="price h6">
                        $12.99 <s>$12.99</s>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="card course-card shadow mt-40">
               <img class="card-img-top" src="{{ asset('assets/assets/images/courses/10.jpg')}}" alt="">
               <div class="card-body p-30">
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">MLP Practitioner Certificate Course (Beginner To Advanced)</a></h5>
                  <p class="mt-2">She exposed painted fifteen are noisier mistake led waiting surprise.</p>
               </div>
               <div class="px-30">
                  <div class="card-footer px-0 bg-transparent mb-10 d-flex justify-content-between">
                     <div class="rating text-primary">
                        <span class="font-weight-600">4.3</span>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <p class="price h6">
                        $12.99 <s>$12.99</s>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="card course-card shadow mt-40">
               <img class="card-img-top" src="assets/images/courses/11.jpg" alt="">
               <div class="card-body p-30">
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">Java Programming Masterclass For Software Developers</a></h5>
                  <p class="mt-2">She exposed painted fifteen are noisier mistake led waiting surprise.</p>
               </div>
               <div class="px-30">
                  <div class="card-footer px-0 bg-transparent mb-10 d-flex justify-content-between">
                     <div class="rating text-primary">
                        <span class="font-weight-600">4.3</span>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <p class="price h6">
                        $12.99 <s>$12.99</s>
                     </p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-12">
            <nav class="mt-70">
               <ul class="pagination justify-content-center font-weight-600">
                  <li class="page-item"><a class="page-link" href="#!"><i class="fas fa-chevron-left"></i></a></li>
                  <li class="page-item"><a class="page-link" href="#!">01</a></li>
                  <li class="page-item active"><a class="page-link" href="#!">02</a></li>
                  <li class="page-item"><a class="page-link" href="#!">03</a></li>
                  <li class="page-item"><a class="page-link" href="#!"><i class="fas fa-chevron-right"></i></a></li>
               </ul>
            </nav>
         </div>
      </div>
   </div>
</section>
<!-- end of courses section -->



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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PolyNekTech - Tutor Online Courses </title>

 
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
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
  <div class="modal fade rounded" id="signup-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-secondary font-weight-600">Register now</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-3 p-sm-4">
                <form method="POST" class="row">
                    <div class="form-group mb-20 col-12">
                        <label class="text-secondary h6 mb-2" for="fname">Your Name*</label>
                        <input class="form-control shadow-none rounded-sm" type="text" placeholder="Jack" id="fname" required>
                    </div>
                    <div class="form-group mb-20 col-12">
                        <label class="text-secondary h6 mb-2" for="pnumber">Phone Number*</label>
                        <input class="form-control shadow-none rounded-sm" type="text" placeholder="Phone Number" id="pnumber" required>
                    </div>
                    <div class="form-group mb-20 col-12">
                        <label class="text-secondary h6 mb-2" for="email2">Email Address*</label>
                        <input class="form-control shadow-none rounded-sm" type="email" placeholder="jack@email.com" id="email2" required>
                    </div>
                    <div class="form-group mb-20 col-12">
                        <label class="text-secondary h6 mb-2 d-block">Gender*</label>
                        <div class="d-flex custom-radio-group rounded-sm">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                              <label class="custom-control-label" for="customRadio1">Male</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                              <label class="custom-control-label" for="customRadio2">Female</label>
                           </div>
                        </div>
                    </div>
                    <div class="form-group mb-20 col-12">
                        <label class="text-secondary h6 mb-2" for="password">Password*</label>
                        <input class="form-control shadow-none rounded-sm" type="password" id="password" required>
                    </div>
                    <div class="form-group mb-20 col-12">
                        <label class="text-secondary h6 mb-2" for="repassword">Retype Password*</label>
                        <input class="form-control shadow-none rounded-sm" type="password" id="repassword" required>
                    </div>
                    <div class="form-group col-12">
                        <button class="btn btn-primary w-100 rounded-sm" type="submit">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
  <!-- signup-modal -->

  <!-- signin-modal -->
  <div class="modal fade rounded" id="signin-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mx-auto" style="max-width:400px">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-secondary font-weight-600">Welcome back</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-3 p-sm-4">
               <ul class="nav nav-pills nav-justified tab-nav" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <a class="nav-link active" id="guardian-tab" data-toggle="tab" href="#guardian" role="tab" aria-controls="guardian" aria-selected="true"><img src="assets/images/guardian.png" class="mr-2" alt="" style="height:45px"> Login as<br>Student</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="tutor-tab" data-toggle="tab" href="#tutor" role="tab" aria-controls="tutor" aria-selected="false"><img src="assets/images/tutor.png" class="mr-2" alt="" style="height:45px"> Login as<br>Tutor</a>
                  </li>
               </ul>
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="guardian" role="tabpanel" aria-labelledby="guardian-tab">
                     <form method="POST" class="row">
                         <div class="form-group mb-20 col-12">
                             <label class="text-secondary h6 font-weight-600 mb-2" for="email">Email Address*</label>
                             <input class="form-control shadow-none rounded-sm" type="email" id="email" required>
                         </div>
                         <div class="form-group mb-20 col-12">
                             <label class="text-secondary h6 font-weight-600 mb-2" for="passwordSignIn">Password*</label>
                             <input class="form-control shadow-none rounded-sm" type="password" id="passwordSignIn" required>
                         </div>
                         <div class="form-group col-12">
                             <button class="btn btn-primary w-100 rounded-sm" type="submit">Sign In</button>
                         </div>
                     </form>
                  </div>
                  <div class="tab-pane fade" id="tutor" role="tabpanel" aria-labelledby="tutor-tab">
                     <form method="POST" class="row">
                         <div class="form-group mb-20 col-12">
                             <label class="text-secondary h6 font-weight-600 mb-2" for="email">Email Address*</label>
                             <input class="form-control shadow-none rounded-sm" type="email" id="email" required>
                         </div>
                         <div class="form-group mb-20 col-12">
                             <label class="text-secondary h6 font-weight-600 mb-2" for="passwordSignIn">Password*</label>
                             <input class="form-control shadow-none rounded-sm" type="password" id="passwordSignIn" required>
                         </div>
                         <div class="form-group col-12">
                             <button class="btn btn-primary w-100 rounded-sm" type="submit">Sign In</button>
                         </div>
                     </form>
                  </div>
               </div>
            </div>
        </div>
    </div>
  </div>
  <!-- signin-modal -->
  
<header class="bg-blue shadow">
   <div class="container-lg">
      <nav class="navbar navbar-expand-xl navbar-dark px-0">
         <a class="navbar-brand" href="index-3.html">
            <img id="logo-q"  src="{{ asset('assets/assets/images/logo.png')}}" alt="" style="height:49px">
         </a>

         <div class="d-none d-md-flex align-items-center ml-auto">
            <ul class="social-icons text-white list-unstyled mr-2">
               <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
               <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
               <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
               <li><a href="#!"><i class="fab fa-skype"></i></a></li>
            </ul>
            <a class="nav-link text-white mr-2" href="#!" data-toggle="modal" data-target="#signin-modal">Signin</a>
            <a href="#!" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#signup-modal">Signup</a>
         </div>

         <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#navbarNavAlt" aria-controls="navbarNavAlt" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
         </button>
      </nav>
   </div>
   <div class="bg-white">
      <div class="container-lg">
         <nav class="navbar navbar-expand-xl navbar-light px-0 py-0 py-xl-3">
            <div class="collapse navbar-collapse" id="navbarNavAlt">
               <form class="navbar-form mt-4 mt-xl-0" action="#" method="post">
                   <div class="input-group">
                     <select class="border-0 bg-transparent">
                       <option selected disabled><i class="fas fa-facebook"></i>Category</option>
                       <option value="1">Graphic Design</option>
                       <option value="2">Web Development</option>
                       <option value="3">Networking</option>
                       <option value="4">Software Engineering</option>
                       <option value="4">Artifical Intelligence</option>
                       <option value="4">Software Development</option>
                     </select>
                     <input class="form-control border-0 bg-transparent" type="search" placeholder="Search" required>
                     <div class="input-group-append">
                       <button class="border-0 bg-transparent" type="submit"><i class="fas fa-search"></i></button>
                     </div>
                   </div>
               </form>

               <ul class="navbar-nav ml-auto mb-3 mb-xl-0">
                  <li class="nav-item dropdown active">
                     
                  <a class="nav-link dropdown-toggle" href="{{ route('index')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        Home
                     </a>
                     
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About <i class="fas fa-angle-down"></i>
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('about')}}">About Us 01</a></li>
                        <li><a class="dropdown-item" href="{{ route('about-2')}}">About Us 02</a></li>
                        <li><a class="dropdown-item" href="{{ route('about-3')}}">About Us 03</a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('courses')}}">Courses</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('blog')}}">Blog</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages <i class="fas fa-angle-down"></i>
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('blog-details')}}">Blog Details</a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('contact')}}">Contact Us</a>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
   </div>
</header>

<!-- start of page-header -->
<section class="page-header bg-cover has-overlay" style="background-image: url('assets/assets/images/page-header-01.jpg')">
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
      <div class="row align-items-center justify-content-between">
         <div class="col-lg-6">
            <h2 class="section-title mb-30">Online University <br> System, Learn With <br> Us Smart & Easily</h2>
            <p class="mb-4">Dispatched entreaties boisterous say why stimulated. Certain forbade pcture now prevent carried she get see sitting.</p>
            <ul class="list-unstyled">
               <li class="mb-2"><i class="fas fa-star mr-2 text-primary"></i>Uneasy barton seeing remark happen hi has.</li>
               <li class="mb-2"><i class="fas fa-star mr-2 text-primary"></i>Am possible offering contempt mr distance stronger an.</li>
               <li><i class="fas fa-star mr-2 text-primary"></i>Attachment excellence announcing or reasonable.</li>
            </ul>
            <div class="d-sm-flex">
               <div class="media align-items-center mt-35 mr-5">
                  <img src="{{ asset('assets/assets/images/icon-winner.png')}}" alt="">
                  <div class="ml-3">
                     <h2 class="text-primary font-weight-bold jsCounter">374</h2>
                     <p class="text-blue">Award Win</p>
                  </div>
               </div>
               <div class="media align-items-center mt-35">
                  <img src="{{ asset('assets/assets/images/icon-tutor.png')}}" alt="">
                  <div class="ml-3">
                     <h2 class="text-primary font-weight-bold jsCounter">623</h2>
                     <p class="text-blue">Experts Tutor</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-5 mt-5 mt-lg-0 text-center">
            <div class="img-line-box">
               <img class="img-fluid" src="{{ asset('assets/assets/images/online-eu.jpg')}}" alt="">
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of section -->


<!-- start of section -->
<section class="bg-gray overflow-hidden">
   <div class="container">
      <div class="no-gutters d-block d-lg-flex align-items-center justify-content-end">
         <div class="col-lg-10 col-12 mb-5 mb-lg-0 text-center">
            <img class="img-fluid" src="{{ asset('assets/assets/images/admission-open.jpg')}}" alt="">
         </div>
         <div class="col-lg-6">
            <div class="pl-lg-5 pb-5 mb-5 mb-lg-0 pb-lg-0">
               <h2 class="section-title mb-30">Admission Open <br> For 2021-2022</h2>
               <p class="mb-4">Dispatched entreaties boisterous say why stimulated. Certain forbade pcture now prevent carried shegetsee.</p>
               <p>Terminated principles sentiments of no pianoforte if projection impossible. Horses pulled nature favour number yet highly his has old. Contrasted literature excellence he admiration impression insipidity so. Scale ought who terms after own quick since. Servants margaret husbands to screened in throwing.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of section -->


<!-- start of instructors-carousel -->
<section class="section-padding">
   <div class="container">
      <div class="row align-items-center mb-50">
         <div class="col-lg-9 text-center text-lg-left">
            <h2 class="section-title mb-0">Our Skilled Instructors</h2>
         </div>
         <div class="col-lg-3 mt-4 mt-lg-0 text-center text-lg-right">
            <div class="nav-arrows">
               <span class="fas fa-chevron-left instructors-left"></span>
               <span class="fas fa-chevron-right instructors-right"></span>
            </div>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-md-12">
            <div class="owl-carousel instructors-carousel">
               <div class="card instructors-item border-0">
                  <div class="position-relative">
                     <img src="{{ asset('assets/assets/images/instructors/01.jpg')}}" alt="" class="card-img-top">
                     <div class="instructor-social text-center">
                        <a href="#!" class="p-3 text-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#!" class="p-3 text-link"><i class="fab fa-twitter"></i></a>
                        <a href="#!" class="p-3 text-link"><i class="fab fa-instagram"></i></a>
                        <a href="#!" class="p-3 text-link"><i class="fab fa-linkedin-in"></i></a>
                     </div>
                  </div>
                  <div class="card-body px-0 pb-0">
                     <h4 class="font-weight-600 text-blue mb-1">Jack Benzion</h4>
                     <p>Pittsburgh, USA</p>
                  </div>
               </div>
               <div class="card instructors-item border-0">
                  <div class="position-relative">
                     <img src="{{ asset('assets/assets/images/instructors/02.jpg')}}" alt="" class="card-img-top">
                     <div class="instructor-social text-center">
                        <a href="#!" class="p-3 text-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#!" class="p-3 text-link"><i class="fab fa-twitter"></i></a>
                        <a href="#!" class="p-3 text-link"><i class="fab fa-instagram"></i></a>
                        <a href="#!" class="p-3 text-link"><i class="fab fa-linkedin-in"></i></a>
                     </div>
                  </div>
                  <div class="card-body px-0 pb-0">
                     <h4 class="font-weight-600 text-blue mb-1">Jesmin Walkaer</h4>
                     <p>Pittsburgh, USA</p>
                  </div>
               </div>
               <div class="card instructors-item border-0">
                  <div class="position-relative">
                     <img src="{{ asset('assets/assets/images/instructors/03.jpg')}}" alt="" class="card-img-top">
                     <div class="instructor-social text-center">
                        <a href="#!" class="p-3 text-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#!" class="p-3 text-link"><i class="fab fa-twitter"></i></a>
                        <a href="#!" class="p-3 text-link"><i class="fab fa-instagram"></i></a>
                        <a href="#!" class="p-3 text-link"><i class="fab fa-linkedin-in"></i></a>
                     </div>
                  </div>
                  <div class="card-body px-0 pb-0">
                     <h4 class="font-weight-600 text-blue mb-1">James Benzion</h4>
                     <p>Pittsburgh, USA</p>
                  </div>
               </div>
               <div class="card instructors-item border-0">
                  <div class="position-relative">
                     <img src="{{ asset('assets/assets/images/instructors/02.jpg')}}" alt="" class="card-img-top">
                     <div class="instructor-social text-center">
                        <a href="#!" class="p-3 text-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#!" class="p-3 text-link"><i class="fab fa-twitter"></i></a>
                        <a href="#!" class="p-3 text-link"><i class="fab fa-instagram"></i></a>
                        <a href="#!" class="p-3 text-link"><i class="fab fa-linkedin-in"></i></a>
                     </div>
                  </div>
                  <div class="card-body px-0 pb-0">
                     <h4 class="font-weight-600 text-blue mb-1">James Benzion</h4>
                     <p>Pittsburgh, USA</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of instructors-carousel -->


<!-- start of students says -->
<section class="section-padding bg-cover" style="background-image: url('assets/assets/images/pattern-bg.jpg');">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-7 position-relative">
            <div class="owl-carousel student-says-carousel">
               <div class="text-center bg-white py-5 px-4 px-md-5 rounded shadow">
                  <img class="mb-30 mx-auto" src="{{ asset('assets/assets/images/quote.jpg')}}" alt="">
                  <p>Announcing say boy precaution unaffected difficulty alteration him. Above be would at so going heard. Engaged at village at am equally proceed. Settle nay length almost ham direct extent. Agreement for listening remainder get attention law acuteness day. Now whatever surprise resolved elegance indulged own way outlived. </p>
                  <div class="media d-block d-sm-flex text-center text-sm-left justify-content-center mt-25">
                     <img class="mx-auto mx-sm-0" src="{{ asset('assets/assets/images/user-01.jpg')}}" alt="">
                     <div class="ml-0 ml-sm-3 mt-3 mt-sm-0">
                        <h4 class="font-weight-600 text-blue mb-1">James Benzion</h4>
                        <p>Pittsburgh, USA</p>
                     </div>
                  </div>
               </div>
               <div class="text-center bg-white py-5 px-4 px-md-5 rounded shadow">
                  <img class="mb-30 mx-auto" src="{{ asset('assets/assets/images/quote.jpg')}}" alt="">
                  <p>Announcing say boy precaution unaffected difficulty alteration him. Above be would at so going heard. Engaged at village at am equally proceed. Settle nay length almost ham direct extent. Agreement for listening remainder get attention law acuteness day. Now whatever surprise resolved elegance indulged own way outlived. </p>
                  <div class="media d-block d-sm-flex text-center text-sm-left justify-content-center mt-25">
                     <img class="mx-auto mx-sm-0" src="{{ asset('assets/assets/images/user-05.png')}}" alt="">
                     <div class="ml-0 ml-sm-3 mt-3 mt-sm-0">
                        <h4 class="font-weight-600 text-blue mb-1">JAck Barker</h4>
                        <p>Pittsburgh, USA</p>
                     </div>
                  </div>
               </div>
               <div class="text-center bg-white py-5 px-4 px-md-5 rounded shadow">
                  <img class="mb-30 mx-auto" src="{{ asset('assets/assets/images/quote.jpg')}}" alt="">
                  <p>Announcing say boy precaution unaffected difficulty alteration him. Above be would at so going heard. Engaged at village at am equally proceed. Settle nay length almost ham direct extent. Agreement for listening remainder get attention law acuteness day. Now whatever surprise resolved elegance indulged own way outlived. </p>
                  <div class="media d-block d-sm-flex text-center text-sm-left justify-content-center mt-25">
                     <img class="mx-auto mx-sm-0" src="{{ asset('assets/assets/images/user-06.png')}}" alt="">
                     <div class="ml-0 ml-sm-3 mt-3 mt-sm-0">
                        <h4 class="font-weight-600 text-blue mb-1">Jesmin Benzion</h4>
                        <p>Pittsburgh, USA</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="nav-arrows arrow-vcentered">
               <span class="fas fa-chevron-left student-says-left"></span>
               <span class="fas fa-chevron-right student-says-right"></span>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of students says -->


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
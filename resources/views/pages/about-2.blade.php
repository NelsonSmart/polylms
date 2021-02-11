<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PolyNekTech - Tutor Online Courses</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/jquery-nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/OwlCarousel2/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/magnific-popup/css/magnific-popup.css">

  <!-- Main Stylesheet -->
  <link href="assets/css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="assets/images/free-class.png" type="image/png">

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
         <a class="navbar-brand" href="index-2.html">
            <img id="logo-q"  src="assets/images/logo.png" alt="" style="height:49px">
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
                     <a class="nav-link dropdown-toggle" href="index-3.html" role="button" aria-haspopup="true" aria-expanded="false">
                        Home
                     </a>
                     
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About <i class="fas fa-angle-down"></i>
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="about.html">About Us 01</a></li>
                        <li><a class="dropdown-item" href="about-2.html">About Us 02</a></li>
                        <li><a class="dropdown-item" href="about-3.html">About Us 03</a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="courses.html">Courses</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="blog.html">Blog</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages <i class="fas fa-angle-down"></i>
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="blog-details.html">Blog Details</a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="contact.html">Contact Us</a>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
   </div>
</header>

<!-- start of page-header -->
<section class="py-80 bg-gray">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h2 class="section-title font-weight-bold mb-20">About Us</h2>
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb bg-transparent p-0 font-weight-600 mb-0">
                  <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="index-3.html">Home</a></li>
                  <li class="breadcrumb-item">About Us</li>
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
            <img class="img-fluid rounded pr-lg-3" src="assets/images/tms.png" alt="">
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
            <img class="img-fluid" src="assets/images/certificate.png" alt="">
         </div>
      </div>
   </div>
</section>
<!-- end of certificate-section -->


<!-- start of tutor carousel -->
<section class="section-padding bg-light bg-cover" style="background-image:url(assets/images/tutor-say-bg.jpg)">
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
                  <img src="assets/images/instructors/01.jpg" alt="" class="card-img-top">
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
                  <img src="assets/images/instructors/02.jpg" alt="" class="card-img-top">
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
                  <img src="assets/images/instructors/03.jpg" alt="" class="card-img-top">
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


<footer>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="py-5 px-3 px-sm-5 bg-light">
               <div class="row align-items-center">
                  <div class="col-lg-5">
                     <div class="p-0 pr-lg-4">
                        <h2 class="section-title mb-20">Newsletter</h2>
                        <p>My he houses or months settle remove ladies appear. Engrossed suffering he recommend.</p>
                     </div>
                  </div>
                  <div class="col-lg-7 mt-4 mt-lg-0">
                     <div class="input-group newsletter-input-group d-block d-sm-flex">
                        <input type="email" class="form-control px-4" placeholder="youmail@email.com" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                           <button class="btn btn-blue">Subscribe Us</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="py-3">
         <div class="row align-items-center">
            <div class="col-lg-9 text-center text-lg-left mb-4 mb-lg-0">
               <ul class="list-unstyled list-inline font-weight-500">
                  <li class="list-inline-item"><a href="#!" class="p-2 d-block text-link">HomeTutor</a></li>
                  <li class="list-inline-item"><a href="#!" class="p-2 d-block text-link">Online Class</a></li>
                  <li class="list-inline-item"><a href="#!" class="p-2 d-block text-link">About</a></li>
                  <li class="list-inline-item"><a href="#!" class="p-2 d-block text-link">Courses</a></li>
                  <li class="list-inline-item"><a href="#!" class="p-2 d-block text-link">Blog</a></li>
                  <li class="list-inline-item"><a href="#!" class="p-2 d-block text-link">Contact us</a></li>
               </ul>
            </div>
            <div class="col-lg-3 text-center text-lg-right">
               <ul class="social-icons list-unstyled mr-2">
                  <li><a href="#!" class="text-link"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#!" class="text-link"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#!" class="text-link"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#!" class="text-link pr-0"><i class="fab fa-skype"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="footer-bottom py-3 border-top">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-9 text-center text-lg-left mb-3 mb-lg-0">
               &copy; Copyright All Review <span class="text-primary">Edu</span>Skills
            </div>
            <div class="col-lg-3 text-center text-lg-right">
               <ul class="list-unstyled list-inline font-weight-500">
                  <li class="list-inline-item"><a href="#!" class="p-2 d-block text-link">Privacy</a></li>
                  <li class="list-inline-item"><a href="#!" class="p-2 d-block text-link">Contact us</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</footer>
<a href="#top" class="scroll-to-top">
   <span class="fas fa-chevron-up"></span>
</a>

<!-- jQuery -->
<script src="vendors/jQuery/jquery.min.js"></script>
<script src="vendors/bootstrap/bootstrap.min.js"></script>
<script src="vendors/jquery-nice-select/jquery.nice-select.min.js"></script>
<script src="vendors/OwlCarousel2/owl.carousel.min.js"></script>
<script src="vendors/counterup/waypoints.min.js"></script>
<script src="vendors/counterup/jquery.counterup.min.js"></script>
<script src="vendors/magnific-popup/js/magnific-popup.min.js"></script>

<!-- Main Script -->
<script src="assets/js/script.js"></script>

</body>
</html>
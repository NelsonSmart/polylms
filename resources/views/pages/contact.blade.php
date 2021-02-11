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
  
<header class="bg-white shadow">
   <div class="container-lg">
      <nav class="navbar navbar-expand-xl navbar-dark px-0">
         <a class="navbar-brand" href="index-3.html">
            <img id="logp"  src="assets/images/logo-2.png" alt="" style="height:49px">
         </a>

         <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#navbarNavAlt" aria-controls="navbarNavAlt" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
         </button>
         
         <div class="collapse navbar-collapse" id="navbarNavAlt">
            <ul class="navbar-nav mt-4 mt-xl-0 ml-auto">
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
               <li class="nav-item">
                  <a class="nav-link" href="#!" data-toggle="modal" data-target="#signin-modal">Signin</a>
               </li>
            </ul>

            <div class="ml-0 ml-xl-4 mt-3 mt-xl-0 mb-3 mb-xl-0 text-center text-xl-right">
               <a href="#!" class="btn btn-sm btn-blue rounded-pill" data-toggle="modal" data-target="#signup-modal">Become A Tutor</a>
            </div>
         </div>
      </nav>
   </div>
</header>

<!-- start of page-header -->
<section class="page-header bg-cover has-overlay" style="background-image: url(assets/images/page-header-02.jpg)">
   <div class="container">
      <div class="row">
         <div class="col-12 text-center">
            <h2 class="section-title text-white font-weight-bold mb-20">Contact Us</h2>
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb bg-transparent justify-content-center p-0 font-weight-600 mb-0">
                  <li class="breadcrumb-item active" aria-current="page"><a href="index-3.html">Home</a></li>
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
               <img src="assets/images/map-img.jpg" alt="">
               <span class="map-text h4"><i class="fas fa-external-link-alt mr-2"></i> View us on Map</span>
            </a>
         </div>
      </div>
   </div>
</section>
<!-- end of our map section -->


<footer>
   <div class="container">
 
      <div class="py-3">
         <div class="row align-items-center">
            <div class="col-lg-9 text-center text-lg-left mb-4 mb-lg-0">
               <ul class="list-unstyled list-inline font-weight-500">
                  <li class="list-inline-item"><a href="index.html" class="p-2 d-block text-link">HomeTutor</a></li>
                  <li class="list-inline-item"><a href="course-details.html" class="p-2 d-block text-link">Online Class</a></li>
                  <li class="list-inline-item"><a href="about.html" class="p-2 d-block text-link">About</a></li>
                  <li class="list-inline-item"><a href="courses.html" class="p-2 d-block text-link">Courses</a></li>
                  <li class="list-inline-item"><a href="blog.html" class="p-2 d-block text-link">Blog</a></li>
                  <li class="list-inline-item"><a href="contact.html" class="p-2 d-block text-link">Contact us</a></li>
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
               &copy; Copyright All Review <img src="assets/images/logo.png" height="30">
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
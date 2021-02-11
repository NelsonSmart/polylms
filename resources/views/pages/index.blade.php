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
            <img id="logp" src="assets/images/logo-2.png" alt="" style="height:49px">
         </a>

         <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#navbarNavAlt" aria-controls="navbarNavAlt" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
         </button>
         
         <div class="collapse navbar-collapse" id="navbarNavAlt">
            <ul class="navbar-nav mt-4 mt-xl-0 ml-auto">
               <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" href="index-3.html" role="button"aria-haspopup="true" aria-expanded="false">
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

<!-- start of banner -->
<section class="banner-1 has-overlay bg-cover" style="background-image: url(assets/images/banner-image-00.jpg);">
   <div class="container-lg">
      <div class="row justify-content-center align-items-center">
         <div class="col-md-6 col-sm-8 text-center text-md-left">
            <div class="text-white">
               <h2 class="text-lg mb-30">Find The <span class="has-line line-primary">Perfect Tutor</span> for Online & Offline</h2>
               <p class="h4">Education now more easy then before</p>
               
            </div>
         </div>
         <div class="col-md-6 col-sm-10 mt-5 mt-md-0">
            <form action="#!" id="top" class="search-form rounded">
               <div class="row">
                  <div class="col-lg-6">
                     <select name="" id="">
                        <option selected disabled>Select Conutry</option>
                        <option value="1">Nigeria</option>
                        <option value="2">Ghana</option>
                        <option value="3">Dubia</option>
                        <option value="4">South Afirca</option>
                        <option value="5">London</option>
                     </select>
                  </div>
                  <div class="col-lg-6">
                     <select name="" id="">
                        <option selected disabled>Select State</option>
                        <option value="1">Cross Rivers</option>
                        <option value="2">Port Harcourt</option>
                        <option value="3">Delta</option>
                        <option value="4">Owerri</option>
                        <option value="5">Lagos</option>
                     </select>
                  </div>
                  <div class="col-lg-6">
                     <select name="" id="">
                        <option selected disabled>Select Language</option>
                        <option value="1">English</option>
                        <option value="2">Hindi</option>
                        <option value="3">Bangla</option>
                        <option value="4">Spanish</option>
                        <option value="5">French</option>
                     </select>
                  </div>
                  <div class="col-lg-6">
                     <select name="" id="">
                        <option selected disabled>Select Class</option>
                        <option value="1">Design</option>
                        <option value="2">Web</option>
                        <option value="3">Networking</option>
                        <option value="4">Software Development</option>
                        <option value="5">Artificial intelligence</option>
                     </select>
                  </div>
                  <div class="col-lg-6">
                     <select name="" id="">
                        <option selected disabled>Select Subject</option>
                        <option value="1">HTML</option>
                        <option value="2">PHP</option>
                        <option value="3">JAVA</option>
                        <option value="4">JavaScript</option>
                        <option value="5">CSS</option>
                     </select>
                  </div>
                  <div class="col-lg-6">
                     <select name="" id="">
                        <option selected disabled>Select Gender</option>
                        <option value="1">Men</option>
                        <option value="2">Women</option>
                        <option value="3">Any</option>
                     </select>
                  </div>
                  <div class="col-lg-12">
                     <button type="submit" class="btn btn-primary rounded-pill w-100">Search Tutor</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
<!-- end of banner -->

<!-- start of we-offer-section -->
<section class="section-padding">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-12 text-center">
            <h2 class="section-title">What <span class="has-line">We Offer</span></h2>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/we-offer/01.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Home Tutoring</h3>
               <p class="mt-20">His exquisite sincerity education shameless ten earnestly breakfast. Scale began quiet up short wrong in Personal attention.</p>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/we-offer/02.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Online Tutoring</h3>
               <p class="mt-20">His exquisite sincerity education shameless ten earnestly breakfast. Scale began quiet up short wrong in Personal attention.</p>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/we-offer/03.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Group Tutoring</h3>
               <p class="mt-20">His exquisite sincerity education shameless ten earnestly breakfast. Scale began quiet up short wrong in Personal attention.</p>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/we-offer/04.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Package Tutoring</h3>
               <p class="mt-20">His exquisite sincerity education shameless ten earnestly breakfast. Scale began quiet up short wrong in Personal attention.</p>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/we-offer/05.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Home Tutoring</h3>
               <p class="mt-20">His exquisite sincerity education shameless ten earnestly breakfast. Scale began quiet up short wrong in Personal attention.</p>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/we-offer/06.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Offline Tutoring</h3>
               <p class="mt-20">His exquisite sincerity education shameless ten earnestly breakfast. Scale began quiet up short wrong in Personal attention.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of we-offer-section -->

<!-- start of video-popup section -->
<section class="section-padding pt-0 bg-light has-white-half">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-9">
            <div class="text-center">
               <a href="https://www.youtube.com/watch?v=yD7b6R0-LQw" class="d-block has-overlay has-video-popup tansform-none">
                  <img class="img-fluid rounded" src="assets/images/video-thumb-3.jpg" alt="">
                  <img class="play-btn" src="assets/images/video-btn.png" alt="">
               </a>
               <h2 class="section-title mt-50 mb-25">What  Some Awesome Student Says <span class="has-line">About Us</span></h2>
               <p class="mb-40">Weddings and any opinions suitable smallest nay. My he houses or months settle remove <br> ladies appear. Engrossed suffering supposing he recommend.</p>
               <a href="about-3.html" class="btn btn-lg btn-secondary rounded-pill">About Us</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of video-popup section -->

<!-- start of how-it-works section -->
<section class="section-padding">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8 text-center">
            <h2 class="section-title">How <span class="has-line">It Works</span> <br> For Students?</h2>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-lg-4 col-sm-6 mt-40">
            <div class="how-it-works-item text-center shadow">
               <img src="assets/images/how-it-works/01.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Tell Us Where You <br> Need Help</h3>
               <p class="mt-20">His exquisite sincerity education shameless ten earnestly breakfast. Scale began quiet up short wrong in Personal attention.</p>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6 mt-40">
            <div class="how-it-works-item text-center shadow">
               <img src="assets/images/how-it-works/02.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Choose The Tutor <br> You Want</h3>
               <p class="mt-20">His exquisite sincerity education shameless ten earnestly breakfast. Scale began quiet up short wrong in Personal attention.</p>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6 mt-40">
            <div class="how-it-works-item text-center shadow">
               <img src="assets/images/how-it-works/03.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Book A Tutor <br> Start Lesson</h3>
               <p class="mt-20">His exquisite sincerity education shameless ten earnestly breakfast. Scale began quiet up short wrong in Personal attention.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of how-it-works section -->

<!-- start of section -->
<section class="section-padding pt-0">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-7 text-center">
            <img class="img-fluid" src="assets/images/free-class.png" alt="">
         </div>
         <div class="col-lg-5 mt-5 mt-lg-0">
            <h2 class="section-title mb-30">Request A Class <span class="has-line">for FREE Trail</span></h2>
            <p class="mb-4">Weddings and any opinions suitable smallest nay. My he houses or months settle remove ladies appear. Engrossed suffering supposing he recommend. Commanded no of depending extremity recommend attention tolerably.</p>
            <a href="#top" class="btn btn-lg btn-secondary rounded-pill">Search Tutor</a>
         </div>
      </div>
   </div>
</section>
<!-- end of section -->

<!-- start of find-tutor-section -->
<section class="find-tutor-section section-padding bg-cover has-overlay text-white" style="background-image: url(assets/images/find-tutor.jpg);">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8 text-center">
            <h2 class="section-title text-white mb-30">Find <span class="has-line">Online Tutors</span> <br> In Any Subject</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-3 col-md-4 col-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/subject/01.png" alt="">
               <h3 class="mt-15 font-weight-600">HTML</h3>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/subject/02.png" alt="">
               <h3 class="mt-15 font-weight-600">PHP</h3>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/subject/03.png" alt="">
               <h3 class="mt-15 font-weight-600">Python</h3>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/subject/04.png" alt="">
               <h3 class="mt-15 font-weight-600">Rudy</h3>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/subject/hack.svg" height="100" alt="">
               <h3 class="mt-15 font-weight-600">Hack</h3>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/subject/06.png" alt="">
               <h3 class="mt-15 font-weight-600">C++</h3>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/subject/07.png" alt="">
               <h3 class="mt-15 font-weight-600">C</h3>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/subject/08.png" alt="">
               <h3 class="mt-15 font-weight-600">Coral Draw</h3>
            </div>
         </div>
         <div class="col-lg-12 text-center mt-80">
            <a href="courses.html" class="btn btn-lg btn-primary rounded-pill">See all Subjects</a>
         </div>
      </div>
   </div>
</section>
<!-- end of find-tutor-section -->

<!-- start of tutors join recently section -->
<section class="section-padding">
   <div class="container">
      <div class="row align-items-center mb-30">
         <div class="col-lg-9 text-center text-lg-left">
            <h2 class="section-title mb-0">Tutors <span class="has-line">Joined Recently</span></h2>
         </div>
         <div class="col-lg-3 mt-4 mt-lg-0 text-center text-lg-right">
            <a href="#!" class="text-primary font-weight-600">Show More</a>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm mt-40">
               <div class="card-body p-30">
                  <div class="d-flex justify-content-between align-items-end">
                     <div class="media d-block">
                        <img class="mx-auto mx-sm-0" src="assets/images/user-01.jpg" alt="">
                        <div class="mt-3">
                           <h4 class="font-weight-600 text-blue mb-1">James Benzion</h4>
                           <p>Pittsburgh, USA</p>
                        </div>
                     </div>
                     <div class="text-primary text-center">
                        <span class="h2 d-block font-weight-bold line-hight-1">&#8358;500</span>
                        <span class="h4">Hours</span>
                     </div>
                  </div>
                  <ul class="list-inline my-4 pt-3 pb-4 border-top border-bottom">
                     <li class="list-inline-item p-2 bg-gray rounded mt-2">English</li>
                     <li class="list-inline-item p-2 bg-gray rounded mt-2">American English</li>
                   </ul>
                  <a href="#!" class="btn btn-outline-primary rounded-pill">Send Message</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm mt-40">
               <div class="card-body p-30">
                  <div class="d-flex justify-content-between align-items-end">
                     <div class="media d-block">
                        <img class="mx-auto mx-sm-0" src="assets/images/user-05.png" alt="">
                        <div class="mt-3">
                           <h4 class="font-weight-600 text-blue mb-1">Jack Baker</h4>
                           <p>Pittsburgh, USA</p>
                        </div>
                     </div>
                     <div class="text-primary text-center">
                        <span class="h2 d-block font-weight-bold line-hight-1">&#8358;400</span>
                        <span class="h4">Hours</span>
                     </div>
                  </div>
                  <ul class="list-inline my-4 pt-3 pb-4 border-top border-bottom">
                     <li class="list-inline-item p-2 bg-gray rounded mt-2">English</li>
                     <li class="list-inline-item p-2 bg-gray rounded mt-2">American </li>
                   </ul>
                  <a href="#!" class="btn btn-outline-primary rounded-pill">Send Message</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm mt-40">
               <div class="card-body p-30">
                  <div class="d-flex justify-content-between align-items-end">
                     <div class="media d-block">
                        <img class="mx-auto mx-sm-0" src="assets/images/user-06.png" alt="">
                        <div class="mt-3">
                           <h4 class="font-weight-600 text-blue mb-1">Jesica Walker</h4>
                           <p>Pittsburgh, USA</p>
                        </div>
                     </div>
                     <div class="text-primary text-center">
                        <span class="h2 d-block font-weight-bold line-hight-1">&#8358;800</span>
                        <span class="h4">Hours</span>
                     </div>
                  </div>
                  <ul class="list-inline my-4 pt-3 pb-4 border-top border-bottom">
                     <li class="list-inline-item p-2 bg-gray rounded mt-2">English</li>
                     <li class="list-inline-item p-2 bg-gray rounded mt-2">UK English</li>
                  </ul>

                  <a href="#!" class="btn btn-outline-primary rounded-pill">Send Message</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of tutors join recently section -->

<!-- start of How It Works for tutors section -->
<section class="section-padding pt-0">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <h2 class="section-title mb-30">How It Works <span class="has-line">for Tutors?</span></h2>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-6">
            <div class="how-it-works-item works-item-alt shape-style-1 text-center shadow">
               <img class="position-static" src="assets/images/how-it-works-tutors/01.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Create A Free <br> Account Now</h3>
               <p class="mt-20">Advantage old hTad otherwise sincerity dependent additions. Six draw you him full not mean evil. Prepare garrets it expense.</p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="how-it-works-item works-item-alt shape-style-2 text-center shadow">
               <img class="position-static" src="assets/images/how-it-works-tutors/02.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Apply to Your <br> Tuition Job</h3>
               <p class="mt-20">Advantage old hTad otherwise sincerity dependent additions. Six draw you him full not mean evil. Prepare garrets it expense.</p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="how-it-works-item works-item-alt shape-style-1 text-center shadow">
               <img class="position-static" src="assets/images/how-it-works-tutors/03.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Start Tutoring <br>With Happiness</h3>
               <p class="mt-20">Advantage old hTad otherwise sincerity dependent additions. Six draw you him full not mean evil. Prepare garrets it expense.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of How It Works for tutors section -->

<!-- start of tutors-carousel-alt section -->
<section class="section-padding bg-cover" style="background-image: url(assets/images/pattern-bg.jpg);">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <h2 class="section-title mb-60">Happy <span class="has-line">Tutors Say</span></h2>
         </div>
      </div>
   </div>
   <div class="container-lg">
      <div class="row">
         <div class="col-12">
            <div class="owl-carousel tutors-carousel-alt has-dots-center">
               <div class="tutor-item-alt bg-white p-30">
                  <p>Left till here away at to whom past. Feelings laughing at no wondered repeated provided finished. It acceptance thoro advantages.</p>
                  <div class="media d-block d-sm-flex mt-25">
                     <img src="assets/images/user-01.jpg" alt="">
                     <div class="ml-0 ml-sm-3 mt-3 mt-sm-0">
                        <h4 class="font-weight-600 text-blue mb-1">James Benzion</h4>
                        <p>Pittsburgh, USA</p>
                     </div>
                  </div>
               </div>
               <div class="tutor-item-alt bg-white p-30">
                  <p>Left till here away at to whom past. Feelings laughing at no wondered repeated provided finished. It acceptance thoro advantages.</p>
                  <div class="media d-block d-sm-flex mt-25">
                     <img src="assets/images/user-05.png" alt="">
                     <div class="ml-0 ml-sm-3 mt-3 mt-sm-0">
                        <h4 class="font-weight-600 text-blue mb-1">Alex Benzion</h4>
                        <p>Khulnala, South Africa</p>
                     </div>
                  </div>
               </div>
               <div class="tutor-item-alt bg-white p-30">
                  <p>Left till here away at to whom past. Feelings laughing at no wondered repeated provided finished. It acceptance thoro advantages.</p>
                  <div class="media d-block d-sm-flex mt-25">
                     <img src="assets/images/user-06.png" alt="">
                     <div class="ml-0 ml-sm-3 mt-3 mt-sm-0">
                        <h4 class="font-weight-600 text-blue mb-1">Jesmin Walker</h4>
                        <p>Khulnala, UK</p>
                     </div>
                  </div>
               </div>
               <div class="tutor-item-alt bg-white p-30">
                  <p>Left till here away at to whom past. Feelings laughing at no wondered repeated provided finished. It acceptance thoro advantages.</p>
                  <div class="media d-block d-sm-flex mt-25">
                     <img src="assets/images/user-05.png" alt="">
                     <div class="ml-0 ml-sm-3 mt-3 mt-sm-0">
                        <h4 class="font-weight-600 text-blue mb-1">Alex Benzion</h4>
                        <p>Khulnala, Paris</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of tutors-carousel-alt section -->

<!-- start of mobile app section -->
<section class="section-padding">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-5">
            <h2 class="section-title mb-30">Our <span class="has-line">Mobile App</span></h2>
            <p class="mb-4">Weddings and any opinions suitable smallest nay. My he houses or months settle remove ladies appear. Engrossed suffering supposing he recommend. Commanded no of depending extremity recommend attention tolerably.</p>
            <a href="#top" class="btn btn-lg btn-secondary rounded-pill">Search Tutor</a>
         </div>
         <div class="col-lg-7 mt-5 mt-lg-0 text-center">
            <img class="img-fluid" src="assets/images/mobile-app.png" alt="">
         </div>
      </div>
   </div>
</section>
<!-- end of mobile app section -->

<footer>
    
      <div class="py-3">
         <div class="row align-items-center">
            <div class="col-lg-9 text-center text-lg-left mb-4 mb-lg-0">
               <ul class="list-unstyled list-inline font-weight-500">
                  <li class="list-inline-item"><a href="index.html" class="p-2 d-block text-link">HomeTutor</a></li>
                  <li class="list-inline-item"><a href="index-2.html" class="p-2 d-block text-link">Online Class</a></li>
                  <li class="list-inline-item"><a href="about-3.html" class="p-2 d-block text-link">About</a></li>
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
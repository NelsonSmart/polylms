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

<!-- start of banner -->
<section class="banner-2 mt-115">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-12">
            <div class="text-center">
               
               <h2 class="text-lg mt-20 mb-40 text-secondary">Learn At Your Own Pace!</h2>
               <a href="#!" class="btn btn-primary">Check it now</a>
            </div>
         </div>
      </div>
   </div>
   <img class="banner-illustration" src="assets/images/banner-image-01.png" alt="">
</section>
<!-- end of banner -->


<!-- start of counter -->
<section class="pt-60 pb-40 bg-gray">
   <div class="container text-center">
      <div class="row justify-content-center">
         <div class="col-xl-3 col-lg-4 mb-30">
            <h2 class="text-xl text-tertiary"><span class="jsCounter">650</span>K+</h2>
            <p class="h5 font-weight-600">Online Courses</p>
         </div>
         <div class="col-xl-4 col-lg-4 mb-30">
            <h2 class="text-xl text-primary"><span class="jsCounter">35</span>K+</h2>
            <p class="h5 font-weight-600">Certified People  </p>
         </div>
         <div class="col-xl-3 col-lg-4 mb-30">
            <h2 class="text-xl text-secondary"><span class="jsCounter">700</span>K+</h2>
            <p class="h5 font-weight-600">Lifetime Access</p>
         </div>
      </div>
   </div>
</section>
<!-- end of counter -->


<!-- start of courses section -->
<section class="section-padding">
   <div class="container">
      <div class="row">
         <div class="col-12 text-center mb-30">
            <h2 class="section-title">Largest Selection Of Courses</h2>
         </div>
         <div class="col-lg-12">
            <div class="nav-scrollable">
               <nav class="nav d-flex justify-content-between">
                  <a href="#!" class="active">All</a>
                  <a href="#!">Software Development</a>
                  <a href="#!">Grapic Design</a>
                  <a href="#!">Web Developer</a>
                  <a href="#!">Data scientist</a>
                  <a href="#!">Systems Analyst</a>
                  <a href="course-details.html">Artificial Intelligence</a>
                  <a href="#!">Game Developer</a>
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
                        &#8358;2000 <s> &#8358;4000</s>
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
                         &#8358;1500 <s> &#8358;3000</s>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="card course-card shadow mt-40">
               <img class="card-img-top" src="assets/images/courses/03.jpg" alt="">
               <div class="card-body p-30">
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">The Business Intelligence
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
                         &#8358;3500 <s>&#8358;6000</s>
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
                         &#8358;3000 <s> &#8358;6000</s>
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
                         &#8358;1000 <s> &#8358;2000</s>
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
                         &#8358;2000 <s>&#8358;4000</s>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of courses section -->


<!-- start of section -->
<section class="section-padding bg-light overflow-hidden">
   <div class="container">
      <div class="d-block d-lg-flex align-items-center">
         <div class="col-lg-7">
            <div class="pr-0 pr-lg-5">
               <h2 class="section-title mb-35">Why Create An Online Course With Us?</h2>
               <p>Dispatched entreaties boisterous say why stimulated. Certain forbade picture now prevent carried she get see sitting. Up twenty limits as months. Inhabit so perhaps of in to certain.</p>
               <ul class="list-unstyled mt-3">
                  <li class="mb-2"><i class="fas fa-check text-tertiary mr-2"></i> Certain forbade picture now prevent carried she get see</li>
                  <li class="mb-2"><i class="fas fa-check text-tertiary mr-2"></i> Inhabit so perhaps of in to certain.</li>
                  <li class="mb-2"><i class="fas fa-check text-tertiary mr-2"></i> Passed edward two talent effect seemed engage six.</li>
                  <li class="mb-2"><i class="fas fa-check text-tertiary mr-2"></i> Improved sensible servants children striking in surprise.</li>
               </ul>
               <h3 class="mt-4 font-weight-600 text-blue">Download The App & Start Leaning</h3>
               <p class="mt-3 mb-4">Dispatched entreaties boisterous say why stimulated. Certain forbade picture now prevent carried she get see sitting.</p>
               <a href="#!" class="mr-3"><img src="assets/images/google-play-btn.png" alt=""></a>
               <a href="#!"><img src="assets/images/app-store-btn.png" alt=""></a>
            </div>
         </div>
         <div class="col-lg-8 mt-5 mt-lg-0">
            <img class="img-fluid" src="assets/images/why-course.png" alt="">
         </div>
      </div>
   </div>
</section>
<!-- end of section -->


<!-- start of courses -->
<section class="section-padding">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12 text-center">
            <h2 class="section-title mb-20">Top Course Categories</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-3 col-md-4">
            <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
               <img class="img-fluid border mb-15" src="assets/images/course-categories/001.png" alt="">
               <span>Design</span>
            </a>
         </div>
         <div class="col-lg-3 col-md-4">
            <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
               <img class="img-fluid border mb-15" src="assets/images/course-categories/004.jpg" alt="">
               <span>Software Development</span>
            </a>
         </div>
         <div class="col-lg-3 col-md-4">
            <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
               <img class="card-img-top border mb-15" src="assets/images/course-categories/cloud_pc.jpeg" alt="">
               <span>Software Engineering</span>
            </a>
         </div>
         <div class="col-lg-3 col-md-4">
            <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
               <img class="img-fluid border mb-15" src="assets/images/course-categories/007.jpeg" alt="">
               <span>Cyber Security</span>
            </a>
         </div>
         <div class="col-lg-3 col-md-4">
            <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
               <img class="img-fluid border mb-15" src="assets/images/course-categories/9.jpg" alt="">
               <span>Networking</span>
            </a>
         </div>
         <div class="col-lg-3 col-md-4">
            <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
               <img class="img-fluid border mb-15" src="assets/images/course-categories/002.jpg" alt="">
               <span>Web Design</span>
            </a>
         </div>
         <div class="col-lg-3 col-md-4">
            <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
               <img class="img-fluid border mb-15" src="assets/images/course-categories/blue.jpg" alt="">
               <span>Application Developer</span>
            </a>
         </div>
         <div class="col-lg-3 col-md-4">
            <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
               <img class="img-fluid border mb-15" src="assets/images/course-categories/pc_layer.jpg" alt="">
               <span>Database administrator</span>
            </a>
         </div>
         <div class="col-12 text-center mt-50">
            <a href="#!" class="btn btn-primary">Get Start Now</a>
         </div>
      </div>
   </div>
</section>
<!-- end of courses -->


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


<!-- start of certificate-section -->
<section class="section-padding bg-gray">
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


<!-- start of blogs -->
<section class="section-padding pt-0 blog-half-bg-gray">
   <div class="container">
      <div class="row">
         <div class="col-12 text-center">
            <h2 class="section-title mb-20">Check Out Our Latest Blog</h2>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="card blog-card shadow border-0 mt-40 hover-grayscale">
               <a href="#!"><img class="card-img-top" src="assets/images/blogs/01.jpg" alt=""></a>
               <div class="card-body border-top p-30">
                  <div class="post-meta font-weight-500 small mb-20">
                     <span class="mr-4"><i class="far fa-calendar-alt text-primary mr-2"></i> 25/02/2020</span>
                     <span><i class="fas fa-user text-primary mr-2"></i> Dispatched</span>
                  </div>
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">Dispatched Entreaties Boister ous Say Why Stimulated</a></h5>
                  <p class="mt-3">She exposed painted fifteen are noisier mistake led waiting surprise.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="card blog-card shadow border-0 mt-40 hover-grayscale">
               <a href="#!"><img class="card-img-top" src="assets/images/blogs/02.jpg" alt=""></a>
               <div class="card-body border-top p-30">
                  <div class="post-meta font-weight-500 small mb-20">
                     <span class="mr-4"><i class="far fa-calendar-alt text-primary mr-2"></i> 25/02/2020</span>
                     <span><i class="fas fa-user text-primary mr-2"></i> Dispatched</span>
                  </div>
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">Dispatched Entreaties Boister ous Say Why Stimulated</a></h5>
                  <p class="mt-3">She exposed painted fifteen are noisier mistake led waiting surprise.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="card blog-card shadow border-0 mt-40 hover-grayscale">
               <a href="#!"><img class="card-img-top" src="assets/images/blogs/03.jpg" alt=""></a>
               <div class="card-body border-top p-30">
                  <div class="post-meta font-weight-500 small mb-20">
                     <span class="mr-4"><i class="far fa-calendar-alt text-primary mr-2"></i> 25/02/2020</span>
                     <span><i class="fas fa-user text-primary mr-2"></i> Dispatched</span>
                  </div>
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">Dispatched Entreaties Boister ous Say Why Stimulated</a></h5>
                  <p class="mt-3">She exposed painted fifteen are noisier mistake led waiting surprise.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of blogs -->

<footer>
   <div class="container">
     
      <div class="py-3">
         <div class="row align-items-center">
            <div class="col-lg-9 text-center text-lg-left mb-4 mb-lg-0">
               <ul class="list-unstyled list-inline font-weight-500">
                  <li class="list-inline-item"><a href="index.html" class="p-2 d-block text-link">HomeTutor</a></li>
                  <li class="list-inline-item"><a href="index-2.html" class="p-2 d-block text-link">Online Class</a></li>
                  <li class="list-inline-item"><a href="about-2.html" class="p-2 d-block text-link">About</a></li>
                  <li class="list-inline-item"><a href="course-details-2.html" class="p-2 d-block text-link">Courses</a></li>
                  <li class="list-inline-item"><a href="blog-details.html" class="p-2 d-block text-link">Blog</a></li>
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
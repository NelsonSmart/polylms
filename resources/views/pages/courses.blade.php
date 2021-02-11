<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>EduSkills - Tutor Onlne Courses </title>

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
                     <a class="nav-link active" id="guardian-tab" data-toggle="tab" href="#guardian" role="tab" aria-controls="guardian" aria-selected="true"><img src="assets/images/guardian.png" class="mr-2" alt="" style="height:45px"> Login as<br>Guardian</a>
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
            <img src="assets/images/logo.png" alt="" style="height:49px">
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
                     <a class="nav-link dropdown-toggle" href="index-3.html" role="button"  aria-haspopup="true" aria-expanded="false">
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
               <img class="card-img-top" src="assets/images/courses/10.jpg" alt="">
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



<footer>
   
      <div class="py-3">
         <div class="row align-items-center">
            <div class="col-lg-9 text-center text-lg-left mb-4 mb-lg-0">
               <ul class="list-unstyled list-inline font-weight-500">
                  <li class="list-inline-item"><a href="index.html" class="p-2 d-block text-link">HomeTutor</a></li>
                  <li class="list-inline-item"><a href="index-2.html" class="p-2 d-block text-link">Online Class</a></li>
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
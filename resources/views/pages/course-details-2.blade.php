<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PolyNekTech- Tutor Online Courses </title>

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
  <div  class="modal fade rounded" id="signup-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-secondary font-weight-600" >Register now</h4>
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
                        <button id="sign"  class="btn btn-primary w-100 rounded-sm" type="submit">Sign Up</button>
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
            <img id="logo-q" src="assets/images/logo.png" alt="" style="height:49px">
         </a>
         <form class="navbar-form search-only d-none d-md-flex" action="#" method="post">
            <div class="input-group">
              <input class="form-control border-0 bg-transparent" type="search" placeholder="Search" required>
              <div class="input-group-append">
                <button class="border-0 bg-transparent" type="submit"><i class="fas fa-search"></i></button>
              </div>
            </div>
        </form>

         <div class="d-none d-xl-flex align-items-center ml-auto">
            <ul class="social-icons text-white list-unstyled mr-4">
               <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
               <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
               <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
               <li><a href="#!"><i class="fab fa-skype"></i></a></li>
            </ul>
            <a href="#!" class="btn btn-sm btn-primary rounded-pill" data-toggle="modal" data-target="#signup-modal">Become A Tutor</a>
         </div>

         <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#navbarNavAlt" aria-controls="navbarNavAlt" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
         </button>
      </nav>
   </div>
   <div class="bg-white">
      <div class="container-lg">
         <nav class="navbar navbar-expand-xl has-nav-left navbar-light px-0 py-0 py-xl-3">
            <div class="collapse navbar-collapse navbar-collapse-two" id="navbarNavAlt">
               <ul class="navbar-nav mt-4 mt-xl-0 mx-auto ml-xl-0">
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

               <div class="ml-auto mt-3 mt-xl-0 mb-3 mb-xl-0 text-center text-xl-right">
                  <a href="#!" class="btn btn-sm btn-link text-dark px-3" data-toggle="modal" data-target="#signin-modal">Signin</a>
                  <a href="#!" class="btn btn-sm btn-link text-dark px-3" data-toggle="modal" data-target="#signup-modal">Signup</a>
               </div>
            </div>
         </nav>
      </div>
   </div>
</header>

<!-- start of page-header -->
<section class="page-header bg-cover has-overlay" style="background-image: url(assets/images/page-header-04.jpg)">
   <div class="container">
      <div class="row">
         <div class="col-12 text-center">
            <h2 class="section-title text-white font-weight-bold mb-20">Course Details</h2>
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb bg-transparent justify-content-center p-0 font-weight-600 mb-0">
                  <li class="breadcrumb-item active" aria-current="page"><a href="index-3.html">Home</a></li>
                  <li class="breadcrumb-item">Bussiness Analysis</li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</section>
<!-- end of page-header -->


<!-- start of courses-details -->
<section class="section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <h2 class="text-secondary font-weight-bold">Statistics of Data Science and Business Analysis 2020</h2>

            <div class="d-flex align-items-center mt-20">
               <h4 class="text-secondary font-weight-600">&#8358;2000 <s class="font-weight-normal text-muted">&#8358;4000</s></h4>
               <div class="rating text-primary ml-4">
                  <span class="font-weight-600">4.3</span>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>

            <div class="mt-4 mb-4">
               <img class="img-fluid rounded" src="assets/images/course-single.jpg" alt="">
            </div>

            <p class="mb-3">She exposed painted fifteen are noisier mistake led waiting. Surprise not quick six blind smart out burst. Perfectly on furniture dejection determine my depending an to. Add short water court fat. Her bachelor honoured perceive securing but desirous ham required. Questions deficient acuteness to engrossed as. Entirely led ten humoured greatest and yourself. Besides ye country on observe. She continue appetite endeavor she judgment interest the met. For she surrounded motionless fat resolution may.</p>
            <p class="mb-3">Supported neglected met she therefore unwilling discovery remainder. Way sentiments two indulgence uncommonly own. Diminution to frequently sentiments he connection continuing indulgence. An my exquisite conveying up defective. Shameless see the tolerably how continued. She enable men twenty elinor points appear. Whose merry ten yet was men seven ought balls.</p>
            <p class="mb-3">Betrayed cheerful declared end and. Questions we additions is extremely incommode. Next half add call them eat face. Age lived smile six defer bed their few. Had admitting concluded too behaviour him she. Of death to or to being other.</p>
            <p class="mb-3">Article nor prepare chicken you him now. Shy merits say advice ten before lovers innate add. She cordially behaviour can attempted estimable. Trees delay fancy noise manor do as an small. Felicity now law securing breeding likewise extended and. Roused either who favour why ham.</p>
            <p class="mb-3">She who arrival end how fertile enabled. Brother she add yet see minuter natural smiling article painted. Themselves at dispatched interested insensible am be prosperous reasonably it. In either so spring wished. Melancholy way she boisterous use friendship she dissimilar considered expression. Sex quick arose mrs lived. Mr things do plenty others an vanity myself waited to. Always parish tastes at as mr father dining at.</p>

            <a href="#!" class="btn btn-lg btn-secondary rounded-pill mt-30">Appy Online</a>
         </div>

         <div class="col-lg-4 mt-5 mt-lg-0">
            <div class="widget">
               <h4 class="widget-title">Related Courses</h4>
               <div class="card course-card shadow mt-10">
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
                           $12.99 <s>$12.99</s>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="card course-card shadow mt-30">
                  <img class="card-img-top" src="assets/images/courses/02.jpg" alt="">
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
                           $12.99 <s>$12.99</s>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="card course-card shadow mt-30">
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
         </div>

         <div class="col-12 mt-100">
            <div class="cta-section section-padding has-overlay bg-cover" style="background-image: url(assets/images/cta-bg.jpg);">
               <div class="row justify-content-center">
                  <div class="col-lg-6 text-white text-center">
                     <h2 class="h1 font-weight-bold mb-20">50% Offer For Very First 50 Students</h2>
                     <p class="mb-30">Dispatched entreaties boisterous say why stimulated. Certain forbade picture now prevent carried.</p>
                     <a href="#signup-modal"data-toggle="modal" data-target="#signup-modal"class="btn btn-light rounded-pill">Become A Student</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of courses-details -->


<!-- start of footer -->

   <footer class="footer-newsletter-overlap bg-blue">
   <div class="container">
   
      <div class="pb-80 text-white">
         <div class="row justify-content-between">
            <div class="col-xl-4 col-lg-5 col-sm-8">
               <h3 class="font-weight-bold mb-30">Latest Courses</h3>
               <div class="row">
                  <div class="col-xl-5 col-6">
                     <ul class="list-unstyled">
                        <li class="mb-2"><a href="#!" class="text-light">
                           <i class="fas fa-chevron-right small mr-2"></i> Rudy</a>
                        </li>
                        <li class="mb-2"><a href="#!" class="text-light">
                           <i class="fas fa-chevron-right small mr-2"></i> Photoshop</a>
                        </li>
                        <li class="mb-2"><a href="#!" class="text-light">
                           <i class="fas fa-chevron-right small mr-2"></i>Software Engineering</a>
                        </li>
                        <li class="mb-2"><a href="#!" class="text-light">
                           <i class="fas fa-chevron-right small mr-2"></i>  Cobol</a>
                        </li>
                        <li class="mb-2"><a href="#!" class="text-light">
                           <i class="fas fa-chevron-right small mr-2"></i> Hack</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-xl-5 col-6">
                     <ul class="list-unstyled">
                        <li class="mb-2"><a href="#!" class="text-light">
                           <i class="fas fa-chevron-right small mr-2"></i> Fotran</a>
                        </li>
                        <li class="mb-2"><a href="#!" class="text-light">
                           <i class="fas fa-chevron-right small mr-2"></i> Pascal</a>
                        </li>
                        <li class="mb-2"><a href="#!" class="text-light">
                           <i class="fas fa-chevron-right small mr-2"></i> Lisp</a>
                        </li>
                        <li class="mb-2"><a href="#!" class="text-light">
                           <i class="fas fa-chevron-right small mr-2"></i> My SQL</a>
                        </li>
                        <li class="mb-2"><a href="#!" class="text-light">
                           <i class="fas fa-chevron-right small mr-2"></i> PHP</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-xl col-lg-3 col-sm-4 col-6 mt-5 mt-sm-0">
               <h3 class="font-weight-bold mb-30">Our Pages</h3>
               <ul class="list-unstyled">
                  <li class="mb-2"><a href="about.html" class="text-light">
                     <i class="fas fa-chevron-right small mr-2"></i> About</a>
                  </li>
                  <li class="mb-2"><a href="courses.html" class="text-light">
                     <i class="fas fa-chevron-right small mr-2"></i> Courses</a>
                  </li>
                  <li class="mb-2"><a href="#!" class="text-light">
                     <i class="fas fa-chevron-right small mr-2"></i> Gallery</a>
                  </li>
                  <li class="mb-2"><a href="job-board.html" class="text-light">
                     <i class="fas fa-chevron-right small mr-2"></i> Career</a>
                  </li>
                  <li class="mb-2"><a href="contact.html" class="text-light">
                     <i class="fas fa-chevron-right small mr-2"></i> Contact</a>
                  </li>
                   <li class="mb-2"><a href="index.html" class="text-light">
                     <i class="fas fa-chevron-right small mr-2"></i>HomeTutor</a>
                  </li>
               </ul>
            </div>
            <div class="col-xl col-lg-3 col-sm-6 col-6 mt-5 mt-lg-0">
               <h3 class="font-weight-bold mb-30">Valuable Links</h3>
               <ul class="list-unstyled">
                  <li class="mb-2"><a href="#!" class="text-light">
                     <i class="fas fa-chevron-right small mr-2"></i> Pricing</a>
                  </li>
                  <li class="mb-2"><a href="#!" class="text-light">
                     <i class="fas fa-chevron-right small mr-2"></i> Privacy</a>
                  </li>
                  <li class="mb-2"><a href="#!" class="text-light">
                     <i class="fas fa-chevron-right small mr-2"></i> Conditions</a>
                  </li>
                  <li class="mb-2"><a href="#!" class="text-light">
                     <i class="fas fa-chevron-right small mr-2"></i> Refund Policy</a>
                  </li>
                  <li class="mb-2"><a href="#!" class="text-light">
                     <i class="fas fa-chevron-right small mr-2"></i> Our Product</a>
                  </li>
               </ul>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 mt-5 mt-xl-0">
               <img src="../../../www.s7template.com/tf/eduskills/images/logo.html" alt="">
               <p class="mt-15">Silent sir say desire fat him letter. Whatever settling goodness too and honoured she building.</p>
               <div class="mt-30">
                  <a href="#!" class="pr-3 text-light"><i class="fab fa-facebook-f"></i></a>
                  <a href="#!" class="p-3 text-light"><i class="fab fa-twitter"></i></a>
                  <a href="#!" class="p-3 text-light"><i class="fab fa-instagram"></i></a>
                  <a href="#!" class="p-3 text-light"><i class="fab fa-linkedin-in"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="footer-bottom text-light py-3 border-dark border-top">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-9 text-center text-lg-left mb-3 mb-lg-0">
               &copy; Copyright All Review <span class="text-primary"><img src="assets/images/logo.png" height="30"> </span>
            </div>
            <div class="col-lg-3 text-center text-lg-right">
               <ul class="list-unstyled list-inline">
                  <li class="list-inline-item"><a href="#!" class="p-2 d-block text-light">Privacy</a></li>
                  <li class="list-inline-item"><a href="contact.html" class="p-2 d-block text-light">Contact us</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</footer>

<!-- end of footer -->
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
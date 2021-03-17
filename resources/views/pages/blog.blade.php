<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="refresh" content="30">
  <title>PolyNekTech- Tutor Online Courses</title>
<meta http-equiv="refresh" content="10">
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-nice-select/nice-select.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/OwlCarousel2/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/magnific-popup/css/magnific-popup.css')}}">

  <!-- Main Stylesheet -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
  
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
                     <a class="nav-link active" id="guardian-tab" data-toggle="tab" href="#guardian" role="tab" aria-controls="guardian" aria-selected="true"><img src="{{ asset('assets/assets/images/guardian.png')}}" class="mr-2" alt="" style="height:45px"> Login as<br>Student</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="tutor-tab" data-toggle="tab" href="#tutor" role="tab" aria-controls="tutor" aria-selected="false"><img src="{{ asset('assets/assets/images/tutor.png')}}" class="mr-2" alt="" style="height:45px"> Login as<br>Tutor</a> 
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
         <a class="navbar-brand" href="index">
            <img id="logo-q" src="{{ asset('assets/assets/images/logo.png')}}" alt="" style="height:49px">
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
            <a href="#signin-modal" class="btn btn-sm btn-primary rounded-pill" data-toggle="modal" data-target="#signup-modal">Become A Tutor</a>
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
<section class="py-80 bg-gray">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h2 class="section-title font-weight-bold mb-20">Latest Blogs</h2>
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb bg-transparent p-0 font-weight-600 mb-0">
                  <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="{{ route('index')}}">Home</a></li>
                  <li class="breadcrumb-item">Blogs</li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</section>
<!-- end of page-header -->


<!-- start of blogs -->
<section class="section-padding pb-fix">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-6">
            <div class="card shadow border-0 mb-40 hover-grayscale">
               <a href="#!"><img class="card-img-top" src="{{ asset('assets/assets/images/blogs/01.jpg')}}" alt=""></a>
               <div class="card-body border-top p-30">
                  <div class="post-meta font-weight-500 small mb-20">
                     <span class="mr-3"><i class="far fa-calendar-alt text-primary mr-2"></i> 25/02/2020</span>
                     <span><i class="fas fa-user text-primary mr-2"></i> Dispatched</span>
                  </div>
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">Dispatched Entreaties Boister ous Say Why Stimulated</a></h5>
                  <p class="mt-3">She exposed painted fifteen are noisier mistake led waiting surprise.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="card shadow border-0 mb-40 hover-grayscale">
               <a href="#!"><img class="card-img-top" src="{{ asset('assets/assets/images/blogs/02.jpg')}}" alt=""></a>
               <div class="card-body border-top p-30">
                  <div class="post-meta font-weight-500 small mb-20">
                     <span class="mr-3"><i class="far fa-calendar-alt text-primary mr-2"></i> 30/05/2020</span>
                     <span><i class="fas fa-user text-primary mr-2"></i> Repelle</span>
                  </div>
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">Doloribus quis illum quam eos praesentium repelle!</a></h5>
                  <p class="mt-3">She exposed painted fifteen are noisier mistake led waiting surprise.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="card shadow border-0 mb-40 hover-grayscale">
               <a href="#!"><img class="card-img-top" src="{{ asset('assets/assets/images/blogs/03.jpg')}}" alt=""></a>
               <div class="card-body border-top p-30">
                  <div class="post-meta font-weight-500 small mb-20">
                     <span class="mr-3"><i class="far fa-calendar-alt text-primary mr-2"></i> 12/03/2020</span>
                     <span><i class="fas fa-user text-primary mr-2"></i> Incidunt</span>
                  </div>
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">Reiciendis incidunt obcaecati vitae quos enim volupt!</a></h5>
                  <p class="mt-3">She exposed painted fifteen are noisier mistake led waiting surprise.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="card shadow border-0 mb-40 hover-grayscale">
               <a href="#!"><img class="card-img-top" src="{{ asset('assets/assets/images/blogs/02.jpg')}}" alt=""></a>
               <div class="card-body border-top p-30">
                  <div class="post-meta font-weight-500 small mb-20">
                     <span class="mr-3"><i class="far fa-calendar-alt text-primary mr-2"></i> 25/02/2020</span>
                     <span><i class="fas fa-user text-primary mr-2"></i> Repelle</span>
                  </div>
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">Doloribus quis illum quam eos praesentium repelle!</a></h5>
                  <p class="mt-3">She exposed painted fifteen are noisier mistake led waiting surprise.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="card shadow border-0 mb-40 hover-grayscale">
               <a href="#!"><img class="card-img-top" src="{{ asset('assets/assets/images/blogs/03.jpg')}}" alt=""></a>
               <div class="card-body border-top p-30">
                  <div class="post-meta font-weight-500 small mb-20">
                     <span class="mr-3"><i class="far fa-calendar-alt text-primary mr-2"></i> 18/09/2020</span>
                     <span><i class="fas fa-user text-primary mr-2"></i> Incidunt</span>
                  </div>
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">Reiciendis incidunt obcaecati vitae quos enim volupt!</a></h5>
                  <p class="mt-3">She exposed painted fifteen are noisier mistake led waiting surprise.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="card shadow border-0 mb-40 hover-grayscale">
               <a href="#!"><img class="card-img-top" src="{{ asset('assets/assets/images/blogs/01.jpg')}}" alt=""></a>
               <div class="card-body border-top p-30">
                  <div class="post-meta font-weight-500 small mb-20">
                     <span class="mr-3"><i class="far fa-calendar-alt text-primary mr-2"></i> 12/03/2020</span>
                     <span><i class="fas fa-user text-primary mr-2"></i> Dispatched</span>
                  </div>
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">Dispatched Entreaties Boister ous Say Why Stimulated</a></h5>
                  <p class="mt-3">She exposed painted fifteen are noisier mistake led waiting surprise.</p>
               </div>
            </div>
         </div>

         <div class="col-12">
            <nav class="mt-20">
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
<!-- end of blogs -->


<!-- start of footer -->
<footer class="bg-blue">
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
               &copy; Copyright All Review <span class="text-primary"><img src="{{ asset('assets/assets/images/logo.png')}}" height="30"> </span>
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
</footer>
<!-- end of footer -->
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
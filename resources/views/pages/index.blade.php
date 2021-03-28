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
  
  @include('pages.header')
<!-- start of banner -->
<section class="banner-3 has-overlay bg-cover" style="background-image: url(assets/assets/images/banner-image-02.jpg);">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-9">
            <div class="text-center text-white">
                <h2 class="text-lg mb-20">Welcome </h2>
                <p class="h4">
                    <br>
               To PolyNekTech Community where IT
               online learning is possible
                    <br>
                    <q>Education now more easy then before</q>
    </p>
                
                  </div>
               </div>
            </div>
         </div>
    
</section>
<!-- end of banner -->
    

<!-- start of course-carousel -->
<section class="section-padding pb-fix">
   <div class="container">
      <div class="row align-items-center mb-30">
         <div class="col-lg-9 text-center text-lg-left">
            <h2 class="section-title mb-0">Top Course Categories</h2>
         </div>
         <div class="col-lg-3 mt-4 mt-lg-0 text-center text-lg-right">
            <div class="nav-arrows">
               <span class="fas fa-chevron-left course-left"></span>
               <span class="fas fa-chevron-right course-right"></span>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="owl-carousel course-carousel">
               <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
                  <img class="img-fluid border mb-15" src="{{ asset('assets/assets/images/course-categories/001.png')}}" alt="">
                  <span>Design</span>
               </a>
               
               <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
                  <img class="img-fluid border mb-15" src="{{ asset('assets/assets/images/course-categories/002.jpg')}}" alt="">
                  <span>Web Development</span>
               </a>
               
               <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
                  <img class="img-fluid border mb-15" src="{{ asset('assets/assets/images/course-categories/003.png')}}" alt="">
                  <span>Personal Development</span>
               </a>
               
               <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
                  <img class="img-fluid border mb-15" src="{{ asset('assets/assets/images/course-categories/004.jpg')}}" alt="">
                  <span>Software Development</span>
               </a>
               
               <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
                  <img class="img-fluid border mb-15" src="{{ asset('assets/assets/images/course-categories/005.png')}}" alt="">
                  <span>Computer Engineering</span>
               </a>
               
               <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
                  <img class="img-fluid border mb-15" src="{{ asset('assets/assets/images/course-categories/006.jpeg')}}" alt="">
                  <span>Artifical Intelligence</span>
               </a>
               
               <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
                  <img class="img-fluid border mb-15" src="{{ asset('assets/assets/images/course-categories/007.jpeg')}}" alt="">
                  <span>Cyber-Security</span>
               </a>
               
               <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
                  <img class="img-fluid border mb-15" src="{{ asset('assets/assets/images/course-categories/008.png')}}" alt="">
                  <span>Business</span>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of course-carousel -->


<!-- start of courses section -->
<section class="section-padding pt-0">
   <div class="container">
      <div class="row justify-content-center">
         @if(! session()->has('user'))
         <div class="col-lg-4 col-md-5 col-sm-6 mt-40">
            <h2 class="section-title mb-20">Join Our Online Class with Best Courses</h2>
            <p class="mb-40">Dispatched entreaties boisterous say why stimulated. Certain forbade picture now</p>
            <a href="#!"  data-toggle="modal" data-target="#signup-modal" class="btn btn-outline-primary rounded-pill">Get Started</a>
         </div>
         @endif
         <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="card course-card shadow mt-40">
               <img class="card-img-top" src="{{ asset('assets/assets/images/courses/07.jpg')}}" alt="">
               <div class="card-body p-30">
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">The Business Intelligence
                     Analyst Course 2020</a></h5>
                  <p class="mt-2">Business intelligence (BI) analysts transform data into insights that drive business value. Through use of data analytics, data visualization and data modeling techniques and technologies, BI analysts can identify trends that....</p>
               </div>
               <div class="px-30">
                  <div class="card-footer px-0 bg-transparent mb-10 d-flex justify-content-between">
                     <div class="rating text-primary">
                        <span class="font-weight-600">4.0</span>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <p class="price h6">
                        &#8358;3,000 <s>&#8358;5,000</s> 
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="card course-card shadow mt-40">
               <img class="card-img-top" src="{{ asset('assets/assets/images/courses/12.jpg')}}" alt="">
               <div class="card-body p-30">
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">The Game Programming Course 2020</a></h5>
                  <p class="mt-2">Game Development is the art of creating games,describing the design, development and release of a game.
                      It may involve concept generation, design, build, test and release. While you create a game, it is important to.......</p>
               </div>
               <div class="px-30">
                  <div class="card-footer px-0 bg-transparent mb-10 d-flex justify-content-between">
                     <div class="rating text-primary">
                        <span class="font-weight-600">4.5</span>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <p class="price h6">
                        &#8358;5,500 <s>&#8358;8,000</s>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="card course-card shadow mt-40">
               <img class="card-img-top" src="{{ asset('assets/assets/images/courses/09.jpg')}}" alt="">
               <div class="card-body p-30">
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">
                     3D Animation Course</a></h5>
                  <p class="mt-2">3D animation is the art of using motion to bring characters, vehicles, props, and more to life within TV shows, films, and games. 3D Artists are often involved in several early steps of the VFX pipeline in order to ensure they deliver an animation-ready model. For example, in....</p>
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
                         &#8358;5,000<s> &#8358;9,500</s>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="card course-card shadow mt-40">
               <img class="card-img-top" src="{{ asset('assets/assets/images/courses/10.jpg')}}" alt="">
               <div class="card-body p-30">
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">Cisco Certificate Course (Beginner To Advanced)</a></h5>
                  <p class="mt-2">Cisco Certifications are the list of the Certifications offered by Cisco Systems. There are four or five (path to network designers) levels of certification: Entry (CCENT), Associate (CCNA/CCDA), Professional (CCNP/CCDP), Expert (CCI.... </p>
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
                         &#8358;3,500 <s> &#8358;5,000</s>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="card course-card shadow mt-40">
               <img class="card-img-top" src="{{ asset('assets/assets/images/courses/11.jpg')}}" alt="">
               <div class="card-body p-30">
                  <h5 class="font-weight-600"><a href="#!" class="text-blue">Java Programming Masterclass For Software Developers</a></h5>
                  <p class="mt-2">Java is a class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is a general-purpose programming language intended...</p>
               </div>
               <div class="px-30">
                  <div class="card-footer px-0 bg-transparent mb-10 d-flex justify-content-between">
                     <div class="rating text-primary">
                        <span class="font-weight-600">4.0</span>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <p class="price h6">
                         &#8358;2,500 <s> &#8358;5,000</s>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of courses section -->


<!-- start of video-section -->
<section class="video-popup-section has-overlay bg-cover section-padding pb-0 mb-80" style="background-image: url(assets/assets/images/video-bg.jpg);">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-9">
            <div class="text-center text-white">
               <h2 class="h1 font-weight-bold">Intro Video</h2>
               <a href="https://www.youtube.com/watch?v=yD7b6R0-LQw" class="d-block has-overlay has-video-popup">
                  <img class="img-fluid rounded" src="{{ asset('assets/assets/images/video-thumb.jpg')}}" alt="">
                  <img class="play-btn" src="{{ asset('assets/assets/images/video-btn.png')}}" alt="">
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of video-section -->


<!-- start of section -->
<section class="section-padding">
   <div class="container">
      <div class="row justify-content-center align-items-center">
         <div class="col-lg-4">
            <h2 class="section-title mb-4">Visit Our Campus With Image Gallery</h2>
            <p>Dispatched entreaties boisterous say why stimulated. Certain forbade picture now prevent carried she get see sitting.</p>
            <div class="nav-arrows mt-4 mt-lg-5">
               <span class="fas fa-chevron-left gallery-left active"></span>
               <span class="fas fa-chevron-right gallery-right"></span>
            </div>
         </div>
         <div class="col-lg-7 mt-4 mt-lg-0">
            <div class="owl-carousel image-gallery">
               <img class="img-fluid rounded" src="{{ asset('assets/assets/images/gallery/01.jpg')}}" alt="">
               <img class="img-fluid rounded" src="{{ asset('assets/assets/images/gallery/02.jpg')}}" alt="">
               <img class="img-fluid rounded" src="{{ asset('assets/assets/images/gallery/03.jpg')}}" alt="">
            </div>
         </div>
      </div>
      @if(session()->has('user'))
            <section class="section-padding pb-fix">
               <div class="container">
               <div class="row align-items-center mb-30">
                  <div class="col-lg-9 text-center text-lg-left">
                     <h2 class="section-title mb-0">Enrolled Cousers</h2>
                  </div>
                  <div class="col-lg-3 mt-4 mt-lg-0 text-center text-lg-right">
                     <div class="nav-arrows">
                        <span class="fas fa-chevron-left course-left"></span>
                        <span class="fas fa-chevron-right course-right"></span>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="owl-carousel course-carousel">
                        <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
                           <img class="img-fluid border mb-15" src="{{ asset('assets/assets/images/course-categories/001.png')}}" alt="">
                           <span>Design</span>
                        </a>
                        
                        <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
                           <img class="img-fluid border mb-15" src="{{ asset('assets/assets/images/course-categories/002.jpg')}}" alt="">
                           <span>Web Development</span>
                        </a>
                        
                        <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
                           <img class="img-fluid border mb-15" src="{{ asset('assets/assets/images/course-categories/003.png')}}" alt="">
                           <span>Personal Development</span>
                        </a>
                        
                        <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
                           <img class="img-fluid border mb-15" src="{{ asset('assets/assets/images/course-categories/004.jpg')}}" alt="">
                           <span>Software Development</span>
                        </a>
                        
                        <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
                           <img class="img-fluid border mb-15" src="{{ asset('assets/assets/images/course-categories/005.png')}}" alt="">
                           <span>Computer Engineering</span>
                        </a>
                        
                        <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
                           <img class="img-fluid border mb-15" src="{{ asset('assets/assets/images/course-categories/006.jpeg')}}" alt="">
                           <span>Artifical Intelligence</span>
                        </a>
                        
                        <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
                           <img class="img-fluid border mb-15" src="{{ asset('assets/assets/images/course-categories/007.jpeg')}}" alt="">
                           <span>Cyber-Security</span>
                        </a>
                        
                        <a class="h5 font-weight-600 text-blue text-center d-block mt-30" href="#!">
                           <img class="img-fluid border mb-15" src="{{ asset('assets/assets/images/course-categories/008.png')}}" alt="">
                           <span>Business</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      @else
      <div class="row mt-115">
         <div class="col-md-12">
            <div class="cta-section section-padding has-overlay bg-cover" style="background-image: url(assets/assets/images/cta-bg.jpg);">
               <div class="row justify-content-center">
                  <div class="col-lg-6 text-white text-center">
                     <h2 class="h1 font-weight-bold mb-20">50% Offer For Very First 50 Students That Log's In </h2>
                     <p class="mb-30">Dispatched entreaties boisterous say why stimulated. Certain forbade picture now prevent carried.</p>
                     <a href="#!" data-toggle="modal" data-target="#signup-modal" class="btn btn-light rounded-pill">Become A Student</a>
                    
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endif
   </div>
</section>
<!-- end of section -->


<!-- start of students says -->
<section class="section-padding bg-cover" style="background-image: url(assets/assets/images/pattern-bg.jpg);">
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


<!-- start of blogs -->
<section class="section-padding pt-0">
   <div class="container">
      <div class="row">
         <div class="col-12 text-center">
            <h2 class="section-title mb-20">Check Out Our Latest Blog</h2>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="card shadow border-0 mt-40 hover-grayscale">
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
         <div class="col-lg-4 col-md-6">
            <div class="card shadow border-0 mt-40 hover-grayscale">
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
            <div class="card shadow border-0 mt-40 hover-grayscale">
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
      </div>
   </div>
</section>
<!-- end of blogs -->



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
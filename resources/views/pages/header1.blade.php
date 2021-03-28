<header class="bg-blue shadow">
   <div class="container-lg">
      <nav class="navbar navbar-expand-xl navbar-dark px-0">
         <a class="navbar-brand" href="{{ route('index')}}">
            <img id="logo-q"  src="{{ asset('assets/assets/images/logo.png')}}" alt="" style="height:49px">
         </a>

         <div class="d-none d-md-flex align-items-center ml-auto">
            <ul class="social-icons text-white list-unstyled mr-2">
               <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
               <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
               <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
               <li><a href="#!"><i class="fab fa-skype"></i></a></li>
            </ul>
            @if(session()->has('user'))
                 <!--session()->pull('user')-->
               <a class="btn btn-sm btn-link text-white px-3" href="{{ route('profile')}}"><i class="ti-user text-muted mr-2"></i> Profile</a>
               <a class="btn btn-sm btn-link text-white px-3" href="{{url('logout')}}"><i class="ti-lock text-muted mr-2"></i> Logout</a>
           
               @else

                  <a href="#!" class="btn btn-sm btn-link text-white px-3" data-toggle="modal" data-target="#signin-modal"><i class="ti-key text-muted mr-2"></i>Signin</a>
                  <a href="#!" class="btn btn-sm btn-link text-white px-3" data-toggle="modal" data-target="#signup-modal"><i class="ti-write text-muted mr-2"></i>Signup</a>


               @endif

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
                  <li class="nav-item">
                  <a class="nav-link" href="{{ route('about')}}">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('courses')}}">Courses</a>
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
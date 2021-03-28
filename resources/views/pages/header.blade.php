<header class="bg-blue shadow">
   <div class="container-lg">
      <nav class="navbar navbar-expand-xl navbar-dark px-0">
         <a  class="navbar-brand" href="{{ route('index')}}">
            <img id="logo-q" src="{{ asset('assets/assets/images/logo.png')}}" alt="logo" style="height:49px">
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
            @if(session()->has('user'))
            <form method = "post" action = "">
            @csrf
            <input type= "hidden" name= " role" value = "2">
            <button type= "submit" class="btn btn-sm btn-primary rounded-pill" > Become A Tutor</button>
            </form>


            @else
            <a href="#become-tutor" class="btn btn-sm btn-primary rounded-pill" data-toggle="modal" data-target="#signup-tutor">Become A Tutor</a>

            @endif
           
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
                  <li class="nav-item ">
                     <a class="nav-link" href="{{ route('about')}}">  About </i></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('courses')}}">Courses</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('contact')}}">Contact Us</a>
                  </li>


                  <!-- User Account-->
                  
               </ul>
               @if(session()->has('user'))
               
               <div class ="ml-auto mt-3 mt-xl-0 mb-3 mb-xl-0 text-center text-xl-right">
               @foreach(session('user') as $item)
               <i> welcome back {{$item->first_name}} </i>
               @endforeach
               <a class="btn btn-sm btn-link text-dark px-3" href="{{ route('profile')}}"><i class="ti-user text-muted mr-2"></i> Profile</a>
               <!--<a class="btn btn-sm btn-link text-dark px-3" href="{{url('logout')}}"><i class="ti-lock text-muted mr-2"></i> Logout</a> -->
               <form action="{{ route('logout')}}" method= "post" class="btn btn-sm btn-link text-dark px-3"> @csrf <button type = "submit" class="btn btn-sm btn-link text-dark px-3"><i class="ti-lock text-muted mr-2"></i> Logout </button></form>
               </div>
               @else

               <div class="ml-auto mt-3 mt-xl-0 mb-3 mb-xl-0 text-center text-xl-right">
                  <a href="#!" class="btn btn-sm btn-link text-dark px-3" data-toggle="modal" data-target="#signin-modal"><i class="ti-key text-muted mr-2"></i>Signin</a>
                  <a href="#!" class="btn btn-sm btn-link text-dark px-3" data-toggle="modal" data-target="#signup-modal"><i class="ti-write text-muted mr-2"></i>Signup</a>
               </div>


               @endif

               
            </div>
         </nav>
      </div>
   </div>
</header>
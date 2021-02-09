<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('assets/images/avatar/avatar-15.png')}}">

    <title>EduAdmin - Registration </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('assets/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/skin_color.css')}}">	

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url( assets/images/auth-bg/bg-2.jpg)">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded30 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Get started with Us</h2>
								<p class="mb-0">Register a new membership</p>							
							</div>
							<div class="p-40">
								@if(count($errors) > 0)
								<div class = "alert alert-danger">

									<ul>
									@foreach($errors->all() as $error)
										<li>{{$error}}</li>
									@endforeach
									</ul>
								</div>
								@endif
								@if(\Session::has('success'))
								<div class ="alert alert-success">
									<p>{{\Session::get('success')}}</p>
								</div>

								@endif
								<form action="{{ route('admin_register')}}" method="post">
									{{csrf_field()}}
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											</div>
											<input type="text" name = "name" class="form-control pl-15 bg-transparent" placeholder="Full Name">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
											</div>
											<input type="email" name = "email" class="form-control pl-15 bg-transparent" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" name = "password" class="form-control pl-15 bg-transparent" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" class="form-control pl-15 bg-transparent" name="password_confirmation" placeholder="Retype Password">
										</div>
									</div>
									  <div class="row">
										<div class="col-12">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">I agree to the <a href="#" class="text-warning"><b>Terms</b></a></label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-info margin-top-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>				
								<div class="text-center">
									<p class="mt-15 mb-0">Already have an account?<a href="auth_login.html" class="text-danger ml-5"> Sign In</a></p>
								</div>
							</div>
						</div>								

						<div class="text-center">
						  <p class="mt-20 text-white">- Register With -</p>
						  <p class="gap-items-2 mb-20">
							  <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
							  <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
							  <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
							</p>	
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{ asset('assets/js/vendors.min.js')}}"></script>
	<script src="{{ asset('assets/js/pages/chat-popup.js')}}"></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js')}}"></script>	
	
	
</body>
</html>

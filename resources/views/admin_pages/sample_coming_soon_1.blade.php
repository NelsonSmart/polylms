<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('assets/images/avatar/avatar-15.png')}}">

    <title>PolyNekCommunityAdmin - Coming soon 1 </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('assets/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/skin_color.css')}}">	

</head>
<body class="hold-transition bg-img" style="background-image: url(assets/images/bg-1.jpg)" data-overlay="5">
	
	<div class="container h-p100">
		<div class="row justify-content-md-center align-items-center h-p100">
			<div class="col-md-8">
				<div class="box bg-transparent no-border no-shadow">	
					<div class="box-body text-center">
						
						<h2 class="text-uppercase text-white font-size-60">
						  We are On the way
						</h2>
						<p class="text-white">Praesent Pretium Commodo Tellus, Id Maximus Massa Fermentum Ullamcorper.</p>
						
						<!--timer-->
						<div class="examples my-35">
							<div id="countdown" class="row justify-content-md-center text-white"></div>
						</div>
						<!--//timer-->
						
						<div class="w-p80 mx-auto">
							<h3 class="text-uppercase text-white">NOTIFY ME WHEN IT'S READY</h3>
							<div class="input-group">
								<input type="text" class="form-control p-10" placeholder="Your Email Address......">
								<div class="input-group-append">
									<button type="button" class="btn btn-success">Submit</button>
								</div>
							</div>
						</div>		
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<!-- Modal -->
	  <div class="modal center-modal fade" id="modal-center" tabindex="-1">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-body text-center">
				<h2>Subscribe Us</h2>
				 <p>Be the first to know when our site is ready</p>
				<form class="mx-auto flexbox w-p75 mb-30" method="post" action="#">
					<input type="text" class="form-control rounded" name="EMAIL" placeholder="Enter email address">
					<button class="btn btn-danger" type="submit">Notify me</button>
				</form>
			  </div>
			</div>
		  </div>
		</div>
	  <!-- /.modal -->

	<!-- Vendor JS -->
	<script src="{{ asset('assets/js/vendors.min.js')}}"></script>
	<script src="{{ asset('assets/js/pages/chat-popup.js')}}"></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js')}}"></script>	
	
	<!-- EduAdmin App -->
	<script src="{{ asset('assets/js/pages/coundown-timer.js')}}"></script>

</body>
</html>

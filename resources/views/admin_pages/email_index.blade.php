@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Emails</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Emails</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title text-center">We included several modern account management email templates to help you communicate with your users.</h4>          
				</div>
			  </div>
			
			<div class="row">
				<div class="col-md-12 col-lg-4">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title d-block text-center">Welcome Email</h4>          
					</div>
					<div class="box-body">
						<a class="d-block" href="email_welcome.html" target="_blank">
						  <img src="../images/preview/email-welcome.png" alt="welcome email page">
						</a>
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
				<div class="col-md-12 col-lg-4">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title d-block text-center">Verify Emial</h4>          
					</div>
					<div class="box-body">
						<a class="d-block" href="email_verify_email.html" target="_blank">
						  <img src="../images/preview/email-verify-email.png" alt="Verify Emial page">
						</a>
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
				<div class="col-md-12 col-lg-4">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title d-block text-center">Change Password</h4>          
					</div>
					<div class="box-body">
						<a class="d-block" href="email_change_pass.html" target="_blank">
						  <img src="../images/preview/email-change-pass.png" alt="Change Password page">
						</a>
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
				<div class="col-md-12 col-lg-4">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title d-block text-center">User Updates</h4>          
					</div>
					<div class="box-body">
						<a class="d-block" href="email_update.html" target="_blank">
						  <img src="../images/preview/email-update.png" alt="User Updates page">
						</a>
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
				<div class="col-md-12 col-lg-4">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title d-block text-center">Expired Card</h4>          
					</div>
					<div class="box-body">
						<a class="d-block" href="email_expired_card.html" target="_blank">
						  <img src="../images/preview/email-expired-card.png" alt="Expired Card page">
						</a>
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
				<div class="col-md-12 col-lg-4">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title d-block text-center">Closed Account</h4>          
					</div>
					<div class="box-body">
						<a class="d-block" href="email_closed_account.html" target="_blank">
						  <img src="../images/preview/email-closed-account.png" alt="Closed Account page">
						</a>
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
			</div>

		</section>
		<!-- /.content -->
	  </div>

@endsection
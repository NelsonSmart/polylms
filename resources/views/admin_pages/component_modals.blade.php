@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Modals</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Component</li>
								<li class="breadcrumb-item active" aria-current="page">Modals</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
		  <div class="callout callout-success">
			<h4>Reminder!</h4>
			Instructions for how to use modals are available on the
			<a href="https://getbootstrap.com/docs/4.1/components/modal/">Bootstrap documentation</a>
		  </div>

		  <div class="row">
			<div class="col-12">
			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title">Modal Examples</h4>
				  <div>
					  <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-default">
						Launch Default Modal
					  </button>              

					  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-info">
						Launch Info Modal
					  </button>

					  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-primary">
					   Launch Primary Modal
					  </button>

					  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-danger">
						Launch Danger Modal
					  </button>

					  <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-warning">
						Launch Warning Modal
					  </button>

					  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-success">
						Launch Success Modal
					  </button>					
				  </div>
				</div>
			  </div>
			</div>
		  </div>

		  <div class="row">
			<div class="col-12 col-lg-6">
			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title d-block">Left Modal</h4>
				  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-left">
					Launch demo modal
				  </button>

				</div>
			  </div>

			</div>		
			<div class="col-12 col-lg-6">			
			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title d-block">Center Modal</h4>
				  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-center">
					Launch demo modal
				  </button>

				</div>
			  </div>

			</div>		
			<div class="col-12 col-lg-6">			
			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title d-block">Fill Modal</h4>
				  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-fill">
					Launch demo modal
				  </button>

				</div>
			  </div>

			</div>		
			<div class="col-12 col-lg-6">			
			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title d-block">Right Modal</h4>
				  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-right">
					Launch demo modal
				  </button>

				</div>
			  </div>			
			</div>

			<div class="col-lg-4 col-12">
			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title d-block">Large modal</h4>			  
				  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
					Large modal
				  </button>
				</div>
			  </div>
			</div><!-- /.col -->

			<div class="col-lg-4 col-12">
			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title d-block">Medium model</h4>				  
				  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
					Medium model
				  </button>
				</div>
			  </div>
			</div><!-- /.col -->

			<div class="col-lg-4 col-12">
			  <div class="box">
				<div class="box-body">	
				  <h4 class="box-title d-block">Small model</h4>			  
				  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">
					Small model
				  </button>
				</div>
			  </div>
			</div><!-- /.col -->
		  </div><!-- /.row -->

		</section>
		<!-- /.content -->
	  </div>

@endsection
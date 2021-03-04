@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Mask Form Elements</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page">Mask Form Elements</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Formatter</h4>
				<h6 class="subtitle">Format user input to match a specified pattern.<br>
					<a class="fs-12" href="http://firstopinion.github.io/formatter.js/" target="_blank">Official documentation</a></h6>
			</div>
			<!-- /.box-header -->
		  </div>
		  <!-- /.box -->
			<div class="row">

				  <div class="col-lg-6 col-12">
					  <div class="box">
					  	  <div class="box-body">
						  	<div class="form-group">
							  <label>Date</label>
							  <small class="sidetitle">dd/mm/yyyy</small>
							  <input type="text" class="form-control" id="date">
							</div>
						  </div>
					  </div>
				  </div>


				  <div class="col-lg-6 col-12">
					  <div class="box">
					  	  <div class="box-body">
							<div class="form-group">
							  <label>Date 2</label>
							  <small class="sidetitle">yyyy-mm-dd</small>
							  <input type="text" class="form-control" id="date2">
							</div>						  
						  </div>
					  </div>
				  </div>


				  <div class="col-lg-6 col-12">
					  <div class="box">
					  	  <div class="box-body">
							<div class="form-group">
							  <label>Time</label>
							  <small class="sidetitle">hh:mm</small>
							  <input type="text" class="form-control" id="time">
							</div>						  
						  </div>
					  </div>
				  </div>


				  <div class="col-lg-6 col-12">
					  <div class="box">
					  	  <div class="box-body">
							<div class="form-group">
							  <label>Date time</label>
							  <small class="sidetitle">dd/mm/yyyy hh:mm</small>
							  <input type="text" class="form-control" id="date-time">
							</div>						  
						  </div>
					  </div>
				  </div>


				  <div class="col-lg-6 col-12">
					  <div class="box">
					  	  <div class="box-body">
							<div class="form-group">
							  <label>Phone</label>
							  <small class="sidetitle">E.g. (123) 456-7890</small>
							  <input type="text" class="form-control" id="phone">
							</div>						  
						  </div>
					  </div>
				  </div>


				  <div class="col-lg-6 col-12">
					  <div class="box">
					  	  <div class="box-body">
							<div class="form-group">
							  <label>Phone 2</label>
							  <small class="sidetitle">E.g. +1 123-456-7890</small>
							  <input type="text" class="form-control" id="phone2">
							</div>						  
						  </div>
					  </div>
				  </div>


				  <div class="col-lg-6 col-12">
					  <div class="box">
					  	  <div class="box-body">
							<div class="form-group">
							  <label>Percent</label>
							  <small class="sidetitle">E.g. %25.36</small>
							  <input type="text" class="form-control" id="percent">
							</div>						  
						  </div>
					  </div>
				  </div>


				  <div class="col-lg-6 col-12">
					  <div class="box">
					  	  <div class="box-body">
							<div class="form-group">
							  <label>Username</label>
							  <small class="sidetitle">8 character</small>
							  <input type="text" class="form-control" id="username">
							</div>						  
						  </div>
					  </div>
				  </div>


				  <div class="col-lg-6 col-12">
					  <div class="box">
					  	  <div class="box-body">
							<div class="form-group">
							  <label>Price</label>
							  <small class="sidetitle">E.g. $ 999.99</small>
							  <input type="text" class="form-control" id="price">
							</div>						  
						  </div>
					  </div>
				  </div>


				  <div class="col-lg-6 col-12">
					  <div class="box">
					  	  <div class="box-body">
							<div class="form-group">
							  <label>Credit card</label>
							  <input type="text" class="form-control" id="creditcard">
							</div>						  
						  </div>
					  </div>
				  </div>


				  <div class="col-lg-6 col-12">
					  <div class="box">
					  	  <div class="box-body">
							<div class="form-group">
							  <label>SSN</label>
							  <small class="sidetitle">E.g. 123-45-6789</small>
							  <input type="text" class="form-control" id="ssn">
							</div>						  
						  </div>
					  </div>
				  </div>


				  <div class="col-lg-6 col-12">
					  <div class="box">
					  	  <div class="box-body">
							<div class="form-group">
							  <label>Product key</label>
							  <small class="sidetitle">E.g. PN 123 4567</small>
							  <input type="text" class="form-control" id="productkey">
							</div>						  
						  </div>
					  </div>
				  </div>
				</div>

		</section>
		<!-- /.content -->
	  </div>

@endsection
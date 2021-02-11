@extends('admin_master')

@section('content')


<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Weather widgets</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Widgets</li>
								<li class="breadcrumb-item active" aria-current="page">Weather widgets</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content"> 
		  <div class="row">
			<div class="col-12">
			  <!-- Default box -->
			  <div class="box">
				<div class="box-body">
				  <img class="img-fluid" src="../images/placeholder.jpg" alt="..." >
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
				  <div class="row align-items-center">
					<div class="col-lg-4 col-md-5">
						  <div class="row">
							<div class="col-4">
							  <div>
								<h1><i class="wi-day-sunny"></i></h1>
							  </div>
							</div>
							<div class="col-8">
							  <span class="font-size-40">20°
								<span class="font-size-30">C</span>
							  </span>
							  <span class="font-size-18">/</span>
							  <span class="font-size-18">7°
								<span class="font-size-16">C</span>
							  </span>
							  <p class="font-size-14 mb-0">MONDAY 11.11.2017</p>
							</div>
						  </div>
					</div>
					<div class="col-lg-8 col-md-7">
					  <div class="row no-space text-center">
						<div class="col-2">
						  <div class="weather-day vertical-align">
							<div class="vertical-align-middle font-size-16">
							  <div class="mb-10">TUE</div>
							  <i class="wi-day-sunny font-size-24 mb-10"></i>
							  <div class="text-center">24°
								<span class="font-size-12">C</span>
							  </div>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div class="weather-day vertical-align">
							<div class="vertical-align-middle font-size-16">
							  <div class="mb-10">WED</div>
							  <i class="wi-day-cloudy font-size-24 mb-10"></i>
							  <div class="text-center">21°
								<span class="font-size-12">C</span>
							  </div>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div class="weather-day vertical-align">
							<div class="vertical-align-middle font-size-16">
							  <div class="mb-10">THU</div>
							  <i class="wi-day-sunny font-size-24 mb-10"></i>
							  <div class="text-center">25°
								<span class="font-size-12">C</span>
							  </div>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div class="weather-day vertical-align">
							<div class="vertical-align-middle font-size-16">
							  <div class="mb-10">FRI</div>
							  <i class="wi-day-cloudy-gusts font-size-24 mb-10"></i>
							  <div class="text-center">20°
								<span class="font-size-12">C</span>
							  </div>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div class="weather-day vertical-align">
							<div class="vertical-align-middle font-size-16">
							  <div class="mb-10">SAT</div>
							  <i class="wi-day-lightning font-size-24 mb-10"></i>
							  <div class="text-center">18°
								<span class="font-size-12">C</span>
							  </div>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div class="weather-day vertical-align">
							<div class="vertical-align-middle font-size-16">
							  <div class="mb-10">SUN</div>
							  <i class="wi-day-storm-showers font-size-24 mb-10"></i>
							  <div class="text-center">14°
								<span class="font-size-12">C</span>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
			   </div>
			 <!-- /.box-footer-->
			  </div>
			<!-- /.box --> 			                    
			</div>      
		  </div>
		  <!-- /.row -->  
			
		  <div class="row">     
		   <div class="col-lg-6 col-12">
			  <!-- Default box -->
			  <div class="box bg-img box-inverse" style="background-image: url(../images/gallery/thumb/4.jpg);" data-overlay="5">			
				<div class="box-body">
				  <div class="p-5">
					  <h3 class="white">
						<span class="font-size-30">City, </span>Country
					  </h3>
					  <p class="weather-day-date mb-30">
						<span class="mr-5">MONDAY</span> May 11, 2017
					  </p>
					  <div class="mb-30 weather-icon">
						<canvas class="mr-40 text-top" id="icon1" width="90" height="90"></canvas>
						<div class="inline-block">
						  <span class="font-size-50">29°
							<span class="font-size-40">C</span>
						  </span>
						  <p class="text-left">DAY RAIN</p>
						</div>
					  </div>
					  <div class="row no-space">
						<div class="col-2">
						  <div>
							<div class="mb-10">TUE</div>
							<i class="wi-day-sunny font-size-30 mb-10"></i>
							<div>24°
							  <span class="font-size-12">C</span>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div>
							<div class="mb-10">WED</div>
							<i class="wi-day-cloudy font-size-30 mb-10"></i>
							<div>21°
							  <span class="font-size-12">C</span>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div>
							<div class="mb-10">THU</div>
							<i class="wi-day-sunny font-size-30 mb-10"></i>
							<div>25°
							  <span class="font-size-12">C</span>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div>
							<div class="mb-10">FRI</div>
							<i class="wi-day-cloudy-gusts font-size-30 mb-10"></i>
							<div>20°
							  <span class="font-size-12">C</span>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div>
							<div class="mb-10">SAT</div>
							<i class="wi-day-lightning font-size-30 mb-10"></i>
							<div>18°
							  <span class="font-size-12">C</span>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div>
							<div class="mb-10">SUN</div>
							<i class="wi-day-storm-showers font-size-30 mb-10"></i>
							<div>14°
							  <span class="font-size-12">C</span>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box --> 
			</div>
		   <!-- /.col -->
			<div class="col-lg-6 col-12">
			  <!-- Default box -->
			  <div class="box text-center bg-img box-inverse" style="background-image: url(../images/gallery/thumb/4.jpg);" data-overlay="5">		
				<div class="box-body">
				  <div class="p-30">
					<div class="weather-icon">
					  <canvas id="icon2" width="128" height="128"></canvas>
					</div>
					<div>
					  <span class="font-size-40">-4°
						<span class="font-size-30">C</span>
					  </span>
					</div>
					<div>SNOWING</div>
				  </div>
				</div>
				<!-- /.box-body -->				
				<div class="box-footer bg-primary">
				  <div class="p-15">
					  <span class="font-size-20">City, </span>
					  <span class="font-size-18">Country</span>
					<div>
					  <span class="mr-5">Today,</span> 05:12 PM
					</div>
				  </div>
				</div>
			  </div>
			<!-- /.box -->         
			</div>
		   <!-- /.col -->		 
		   <div class="col-lg-6 col-12">                         
			 <!-- Default box -->
			  <div class="box text-center">		
				<div class="box-body bg-danger">
				  <div class="p-25">
					<div>
					  <canvas id="icon3" width="128" height="128"></canvas>
					</div>
				  </div>
				</div>
				<!-- /.box-body -->				
				<div class="box-footer">
				  <div class="p-30">
					<div class="row">
					  <div class="col-6">
						<div class="white">
						  <i class="md-chevron-down font-size-20 mr-5"></i>
						  <span class="font-size-30">8°</span>
						  <span class="font-size-24">C</span>
						</div>
						<div>LOW</div>
					  </div>
					  <div class="col-6">
						  <i class="md-chevron-up font-size-20 mr-5"></i>
						  <span class="font-size-30">19°</span>
						  <span class="font-size-24">C</span>
						<div>HIGH</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			<!-- /.box -->         
		   </div>
		   <!-- /.col -->
		   <div class="col-lg-6 col-12">      	
			<!-- Default box -->
			  <div class="box">	
				<div class="box-header with-border bg-primary">
				  <h3 class="box-title"><i class="ion-location"></i> City</h3>
				</div>		
				<div class="box-body">
				  <div class="row">
					<div class="col-6">
					  <div class="font-size-14">Fri 20/5</div>
					  <div class="font-size-40">
						27°
						<span class="font-size-30">C</span>
					  </div>
					</div>
					<div class="col-6 text-right">
					  <i class="wi-fog font-size-50"></i>
					</div>
				  </div>
				</div>
				<!-- /.box-body -->
			  </div>
			<!-- /.box --> 

			 <!-- Default box -->
			  <div class="box">		
				<div class="box-body">
				  <div class="row">
					<div class="col-6">
					  <i class="wi-day-sunny font-size-40"></i>
					</div>
					<div class="col-6 text-right">
					  <div class="font-size-40 grey-700">
						27°
						<span class="font-size-30">C</span>
					  </div>
					  <div class="font-size-14">Fri 20/5</div>
					</div>
				  </div>
				</div>
				<!-- /.box-body -->				
				<div class="box-footer bg-success">
				  <h4 class="m-0"><i class="ion-location"></i> City</h4>
				</div>
			  </div>
			<!-- /.box --> 
			</div>
		   <!-- /.col -->
		   <div class="col-lg-6 col-12">

			 <!-- Default box -->
			  <div class="box box-inverse" style="background-image: url(../images/gallery/thumb/9.jpg);" data-overlay="5">		
				<div class="box-body">
				  <div class="row py-30">
					<div class="col-6">
					  <div class="font-size-40 grey-700">
						27°
						<span class="font-size-30">C</span>
					  </div>
					  <div class="font-size-14">Fri 20/5</div>
					</div>
					<div class="col-6 text-right">
					  <i class="wi-day-sunny font-size-40"></i>
					</div>
				  </div>
				</div>
				<!-- /.box-body -->	
			  </div>

			<!-- /.box -->                          

			</div>
		   <!-- /.col -->        
		  </div>
		  <!-- /.row -->

		  <div class="row">
			<div class="col-lg-6 col-12">
			  <!-- Default box -->
			  <div class="box box-inverse bg-img" style="background-image: url(../images/gallery/thumb/9.jpg);" data-overlay="5">			
				<div class="box-body">
					<div class="row">
						<div class="col-6">
						  <div class="text-center p-45">
							<div class="vertical-align-middle">
							  <div class="font-size-40">
								27°
								<span class="font-size-24">C</span>
							  </div>
							  <div class="mt-3">City, Country</div>
							</div>
						  </div>
						</div>
						<!-- /.col -->
						<div class="col-6">
						  <div class="text-center p-45 bl-1">
							<div class="vertical-align-middle">
							  <div class="font-size-40">
								<i class="wi-cloudy"></i>
							  </div>
							  <div class="mt-3">20.5.2017</div>
							</div>
						  </div>
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.box-body -->
			  </div>
			<!-- /.box -->         
			</div>
		   <!-- /.col -->

		   <div class="col-lg-6 col-12">                         
			   <!-- Default box -->
			  <div class="box box-inverse bg-img" style="background-image: url(../images/gallery/thumb/7.jpg);" data-overlay="5">			
				<div class="box-body">
				  <div class="p-5">
					<div class="font-size-16 float-right"><i class="ion-location" aria-hidden="true"></i></div>
					<p class="font-size-20">City, Country</p>
					<p class="font-size-20">
					  <i class="wi-day-cloudy mr-15 font-size-40"></i>
					  <span class="font-size-40 blue-600">20°
						<span class="font-size-30">C</span>
					  </span>
					  <span>/</span>
					  <span>7°
						<span class="font-size-16">C</span>
					  </span>
					</p>
					<p class="mb-5">MONDAY</p>
					<p class="mb-0">11.11.2017</p>
				  </div>
				</div>
				<!-- /.box-body -->
			  </div>
			<!-- /.box -->        
		   </div>
		   <!-- /.col -->  
			<div class="col-lg-6 col-12">
				<!-- Default box -->
				  <div class="box box-inverse bg-img" style="background-image: url(../images/gallery/thumb/19.jpg);" data-overlay="5">		
					<div class="box-body py-50">
						<div class="text-center">
						  <div class="p-10">
							<i class="wi-day-sunny vertical-align-middle font-size-50"></i>
						  </div>
						  <div class="row mb-1">
							<div class="col-6">
							  <i class="wi-strong-wind mr-5"></i> 8 Kmph
							</div>

							<div class="col-6">
							  <i class="wi-sprinkles mr-5"></i> 40%
							</div>
						  </div>
						</div>
					</div>
					<!-- /.box-body -->		
				  </div>
				<!-- /.box -->
			</div>      
			<div class="col-lg-6 col-12">
			  <!-- Default box -->
			  <div class="box text-center">		
				<div class="box-body bg-danger">
				  <div class="p-30">
					<div class="font-size-40">
					  27°
					  <span class="font-size-30">C</span>
					  <i class="wi-day-cloudy-windy"></i>
					</div>
				  </div>
				</div>
				<!-- /.box-body -->				
				<div class="box-footer with-border">
					Saturday 12 May
				</div>
			  </div>
			<!-- /.box -->         
			</div>
		   <!-- /.col -->

		   <div class="col-lg-6 col-12">                         
			 <!-- Default box -->
			  <div class="box text-center bg-info">		
				<div class="box-body">
				  <div class="p-30">
					<div class="font-size-40">
					  <i class="wi-day-cloudy-windy"></i>
					  <span class="font-size-40">
						27°
						<span class="font-size-30">C</span>
					  </span>
					</div>
				  </div>
				</div>
				<!-- /.box-body -->				
				<div class="box-footer with-border bg-info">
					<div class="row no-space">
					  <div class="col-6">
						<i class="wi-strong-wind mr-10"></i>
						<span class="font-weight-bold">8</span>Kmph
					  </div>
					  <div class="col-6">
						<i class="wi-sprinkles mr-10"></i>
						<span class="font-weight-bold">40</span>%
					  </div>
					</div>
				</div>
			  </div>
			<!-- /.box -->         
		   </div>
		   <!-- /.col -->   
			<div class="col-lg-6 col-12">
				<!-- Default box -->
				  <div class="box bg-info">		
					<div class="box-body">
						<div class="p-15 text-center">
						  <div class="vertical-align-middle">
							<div class="font-size-40">
							  27°
							  <span class="font-size-30">C</span>
							</div>
							<div class="font-size-20">City, Country</div>
						  </div>
						</div>
					</div>
					<!-- /.box-body -->		
				  </div>
				<!-- /.box -->
			</div>   
		  </div>
		  <!-- /.row -->

		</section>
		<!-- /.content -->	  
	  </div>

@endsection
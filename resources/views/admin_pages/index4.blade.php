﻿@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box bg-gradient-primary overflow-hidden pull-up">
						<div class="box-body pr-0 pl-lg-50 pl-15 py-0">							
							<div class="row align-items-center">
								<div class="col-12 col-lg-8">
									<h1 class="font-size-40 text-white">Welcome Jhone!</h1>
									<p class="text-white mb-0 font-size-20">
										Education is the passport to the future, So learn more & more
									</p>
								</div>
								<div class="col-12 col-lg-4"><img src="https://www.multipurposethemes.com/admin/eduadmin-template/images/svg-icon/color-svg/custom-15.svg" alt=""></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">														
					<div class="box no-shadow mb-0 bg-transparent">
						<div class="box-header no-border px-0">
							<h4 class="box-title">Current Running Courses</h4>	
							<ul class="box-controls pull-right d-md-flex d-none">
							  <li>
								<button class="btn btn-primary-light px-10">View All</button>
							  </li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box pull-up">
						<div class="box-body">	
							<div class="bg-primary rounded">
								<h5 class="text-white text-center p-10">It & software</h5>
							</div>
							<p class="mb-0 font-size-18">Quisque a felis quis</p>
							<p class="mb-0 font-size-18">Course A-Z</p>
							<div class="d-flex justify-content-between mt-30">
								<div>
									<p class="mb-0 text-fade">Author</p>
									<p class="mb-0">Maical Doe</p>
								</div>
								<div>
									<p class="mb-5 font-weight-600">55%</p>
									<div class="progress progress-sm mb-0 w-100">
										<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
										</div>
									</div>
								</div>
							</div>								
						</div>					
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box pull-up">
						<div class="box-body">	
							<div class="bg-warning rounded">
								<h5 class="text-white text-center p-10">Programming</h5>
							</div>
							<p class="mb-0 font-size-18">Morbi finibus purus</p>
							<p class="mb-0 font-size-18">Course A-Z</p>
							<div class="d-flex justify-content-between mt-30">
								<div>
									<p class="mb-0 text-fade">Author</p>
									<p class="mb-0">Maical Doe</p>
								</div>
								<div>
									<p class="mb-5 font-weight-600">65%</p>
									<div class="progress progress-sm mb-0 w-100">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
										</div>
									</div>
								</div>
							</div>								
						</div>					
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box pull-up">
						<div class="box-body">	
							<div class="bg-danger rounded">
								<h5 class="text-white text-center p-10">Networking</h5>
							</div>
							<p class="mb-0 font-size-18">Duis at purus vel tortor</p>
							<p class="mb-0 font-size-18">Course A-Z</p>
							<div class="d-flex justify-content-between mt-30">
								<div>
									<p class="mb-0 text-fade">Author</p>
									<p class="mb-0">Maical Doe</p>
								</div>
								<div>
									<p class="mb-5 font-weight-600">75%</p>
									<div class="progress progress-sm mb-0 w-100">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
										</div>
									</div>
								</div>
							</div>								
						</div>					
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box pull-up">
						<div class="box-body">	
							<div class="bg-info rounded">
								<h5 class="text-white text-center p-10">Network Security</h5>
							</div>
							<p class="mb-0 font-size-18">Curabitur eget augue</p>
							<p class="mb-0 font-size-18">Course A-Z</p>
							<div class="d-flex justify-content-between mt-30">
								<div>
									<p class="mb-0 text-fade">Author</p>
									<p class="mb-0">Maical Doe</p>
								</div>
								<div>
									<p class="mb-5 font-weight-600">45%</p>
									<div class="progress progress-sm mb-0 w-100">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
										</div>
									</div>
								</div>
							</div>								
						</div>					
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-12">
					<div class="box no-shadow mb-0 bg-transparent">
						<div class="box-header no-border px-0">
							<h4 class="box-title">Upcoming Lessons</h4>							
							<div class="box-controls pull-right d-md-flex d-none">
							  <a href="#">View All</a>
							</div>
						</div>
					</div>
					<div>
						<div class="box bt-5 border-danger rounded pull-up">
							<div class="box-body">	
								<div class="flex-grow-1">	
									<div class="d-flex align-items-center pr-2 justify-content-between">							
										<h4 class="font-weight-500">
											Programming
										</h4>
										<div class="dropdown">
											<a data-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
											  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
											  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
											  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
											  <div class="dropdown-divider"></div>
											  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
											</div>
										</div>						
									</div>
									<p class="font-size-16">
										Every Day 10am to 11am
									</p>
								</div>							
								<div class="d-flex align-items-center justify-content-between mt-10">
									<div class="d-flex">
										<a href="#" class="mr-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
											<img src="../images/avatar/avatar-1.png" class="h-50 align-self-end" alt="">
										</a>
										<a href="#" class="mr-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
											<img src="../images/avatar/avatar-3.png" class="h-50 align-self-end" alt="">
										</a>
										<a href="#" class="mr-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
											<img src="../images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
										</a>
									</div>
									<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark"><i class="mdi mdi-plus"></i></button>
								</div>
							</div>					
						</div>
						<div class="box bt-5 border-primary rounded pull-up">
							<div class="box-body">	
								<div class="flex-grow-1">	
									<div class="d-flex align-items-center pr-2 justify-content-between">							
										<h4 class="font-weight-500">
											Core Language
										</h4>
										<div class="dropdown">
											<a data-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
											  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
											  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
											  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
											  <div class="dropdown-divider"></div>
											  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
											</div>
										</div>						
									</div>
									<p class="font-size-16">
										Every Day 12pm to 01pm
									</p>
								</div>							
								<div class="d-flex align-items-center justify-content-between mt-10">
									<div class="d-flex">
										<a href="#" class="mr-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
											<img src="../images/avatar/avatar-2.png" class="h-50 align-self-end" alt="">
										</a>
										<a href="#" class="mr-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
											<img src="../images/avatar/avatar-5.png" class="h-50 align-self-end" alt="">
										</a>
										<a href="#" class="mr-15 bg-lightest h-50 w-50 l-h-50 rounded-circle text-center overflow-hidden">
											<img src="../images/avatar/avatar-6.png" class="h-50 align-self-end" alt="">
										</a>
									</div>
									<button type="button" class="waves-effect waves-circle btn btn-circle btn-dark"><i class="mdi mdi-plus"></i></button>
								</div>
							</div>					
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box no-shadow mb-0 bg-transparent">
						<div class="box-header no-border px-0">
							<h4 class="box-title">Course</h4>		
						</div>
					</div>
					<div>
						<div class="box mb-15 pull-up">
							<div class="box-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<div class="mr-15 bg-warning h-50 w-50 l-h-60 rounded text-center">
											<span class="icon-Book-open font-size-24"><span class="path1"></span><span class="path2"></span></span>
										</div>
										<div class="d-flex flex-column font-weight-500">
											<a href="#" class="text-dark hover-primary mb-1 font-size-16">Informatic Course</a>
											<span class="text-fade">Johen Doe, 19 April</span>
										</div>
									</div>
									<a href="#">
										<span class="icon-Arrow-right font-size-24"><span class="path1"></span><span class="path2"></span></span>
									</a>
								</div>
							</div>
						</div>
						<div class="box mb-15 pull-up">
							<div class="box-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<div class="mr-15 bg-primary h-50 w-50 l-h-60 rounded text-center">
											<span class="icon-Mail font-size-24"></span>
										</div>
										<div class="d-flex flex-column font-weight-500">
											<a href="#" class="text-dark hover-primary mb-1 font-size-16">Live Drawing</a>
											<span class="text-fade">Micak Doe, 12 June</span>
										</div>
									</div>
									<a href="#">
										<span class="icon-Arrow-right font-size-24"><span class="path1"></span><span class="path2"></span></span>
									</a>
								</div>
							</div>
						</div>
						<div class="box mb-15 pull-up">
							<div class="box-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<div class="mr-15 bg-danger h-50 w-50 l-h-60 rounded text-center">
											<span class="icon-Book-open font-size-24"><span class="path1"></span><span class="path2"></span></span>
										</div>
										<div class="d-flex flex-column font-weight-500">
											<a href="#" class="text-dark hover-primary mb-1 font-size-16">Contemporary Art</a>
											<span class="text-fade">Potar doe, 27 July</span>
										</div>
									</div>
									<a href="#">
										<span class="icon-Arrow-right font-size-24"><span class="path1"></span><span class="path2"></span></span>
									</a>
								</div>
							</div>
						</div>
						<div class="text-center pull-up">
							<a href="#" class="btn btn-block btn-primary-light">View all</a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Resent Notifications</h4>
						</div>
						<div class="box-body px-0 pt-0 pb-10">
						  <div class="media-list media-list-hover">
							<a class="media media-single" href="#">
							  <h4 class="w-50 text-gray font-weight-500">10:10</h4>
							  <div class="media-body pl-15 bl-5 rounded border-primary">
								<p>Morbi quis ex eu arcu.</p>
								<span class="text-fade">by Johne</span>
							  </div>
							</a>

							<a class="media media-single" href="#">
							  <h4 class="w-50 text-gray font-weight-500">08:40</h4>
							  <div class="media-body pl-15 bl-5 rounded border-success">
								<p>Proin iacul eros no odi.</p>
								<span class="text-fade">by Amla</span>
							  </div>
							</a>

							<a class="media media-single" href="#">
							  <h4 class="w-50 text-gray font-weight-500">07:10</h4>
							  <div class="media-body pl-15 bl-5 rounded border-info">
								<p>In mattis mi posuere.</p>
								<span class="text-fade">by Josef</span>
							  </div>
							</a>

							<a class="media media-single" href="#">
							  <h4 class="w-50 text-gray font-weight-500">01:15</h4>
							  <div class="media-body pl-15 bl-5 rounded border-danger">
								<p>Morbi quis ex eu arcu.</p>
								<span class="text-fade">by Rima</span>
							  </div>
							</a>

							<a class="media media-single" href="#">
							  <h4 class="w-50 text-gray font-weight-500">23:12</h4>
							  <div class="media-body pl-15 bl-5 rounded border-warning">
								<p>Morbi quis ex eu arcu.</p>
								<span class="text-fade">by Alaxa</span>
							  </div>
							</a>

						  </div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Working Hours</h4>
							<ul class="box-controls pull-right d-md-flex d-none">
							  <li class="dropdown">
								<button class="dropdown-toggle btn btn-warning-light px-10" data-toggle="dropdown" href="#">Today</button>										  
								<div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>
							</ul>
						</div>
						<div class="box-body">
							<div id="revenue5"></div>
							<div class="d-flex justify-content-center">
								<p class="d-flex align-items-center font-weight-600 mx-20"><span class="badge badge-xl badge-dot badge-warning mr-20"></span> Progress</p>
								<p class="d-flex align-items-center font-weight-600 mx-20"><span class="badge badge-xl badge-dot badge-primary mr-20"></span> Done</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-12">
					<div class="box">
						<div class="box-body">
							<p class="text-fade">Total Courses</p>
							<h3 class="mt-0 mb-20">19 <small class="text-success"><i class="fa fa-arrow-up ml-15 mr-5"></i> 2 New</small></h3>
							<div style="min-height: 198px;">
								<div id="charts_widget_2_chart"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body">
							<p class="text-fade">Hours spent</p>
							<h3 class="mt-0 mb-20">21 h 30 min <small class="text-danger"><i class="fa fa-arrow-down ml-25 mr-5"></i> 15%</small></h3>
							<div id="charts_widget_1_chart"></div>
						</div>
					</div>
				</div>				
			</div>			
		</section>
		<!-- /.content -->
	  </div>

@endsection
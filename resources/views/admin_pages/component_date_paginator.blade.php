@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Date Paginator</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Component</li>
								<li class="breadcrumb-item active" aria-current="page">Date Paginator</li>
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
			  <div class="box">
				<div class="box-body res-tb-block">
				  <h4 class="box-title">Date Paginator</h4>
				  <p>A jQuery plugin which takes Twitter Bootstrap's already great pagination component and injects a bit of date based magic. In the process creating a hugely simplified and modularised way of paging date based results in your application.</p>
				</div>
				<!-- /.box -->
			  </div>
			</div>
			<!-- /.col -->
		  </div>
		  <!-- ./row -->
		  <!-- .row -->
		  <div class="row">
			 <div class="col-md-12">
			  <div class="box">
				<div class="box-body res-tb-block">
				  <h4 class="box-title">Default</h4>
				  <div id="paginator1"></div>
				</div>
				<!-- /.box -->
			  </div>
			  <div class="box">
				<div class="box-body res-tb-block">
				  <h4 class="box-title">Large</h4>
				  <div id="paginator2"></div>
				</div>
				<!-- /.box -->
			  </div>
			  <div class="box">
				<div class="box-body res-tb-block">
				  <h4 class="box-title">Small</h4>
				  <div id="paginator3"></div>
				</div>
				<!-- /.box -->
			  </div>
			  <div class="box">
				<div class="box-body res-tb-block">
				  <h4 class="box-title">Onselect</h4>
				  <div id="paginator4"></div>
				</div>
				<!-- /.box -->
			  </div>
			 </div>
		  </div>
		  <!-- /.row -->	

		</section>
		<!-- /.content -->
	  </div>

@endsection
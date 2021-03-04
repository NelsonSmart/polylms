@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Fullscreen</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Extension</li>
								<li class="breadcrumb-item active" aria-current="page">Fullscreen</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <!-- Default box -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Fullscreen</h4>
			  <ul class="box-controls pull-right">
				<li><a class="box-btn-close" href="#"></a></li>
				<li><a class="box-btn-slide" href="#"></a></li>	
				<li><a class="box-btn-fullscreen" href="#"></a></li>
			  </ul>

			</div>
			<div class="box-body">
				<p>Simple wrapper for cross-browser usage of the JavaScript Fullscreen API, which lets you bring the page into fullscreen.<a href="https://github.com/sindresorhus/screenfull.js/" target="_blank" class="pull-right">Official documentation</a></p>
				<h5>Examples</h5>
				  <div class="gap-items gap-y">
					<button class="btn btn-rounded btn-info ml-1" id="request">Request</button>
					<button class="btn btn-rounded btn-danger ml-1" id="exit">Exit</button>
					<button class="btn btn-rounded btn-success ml-1" id="toggle">Toggle</button>
					<button class="btn btn-rounded btn-warning ml-1" id="request2">Request document</button>
					<button type="button" class="btn btn-rounded btn-box-tool font-size-24" data-provide="fullscreen">
						<i class="ion ion-android-expand fullscreen-default"></i>
						<i class="ion ion-android-contract fullscreen-active"></i>
					</button>
				  </div>
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->	
		</section>
		<!-- /.content -->
	  </div>

@endsection
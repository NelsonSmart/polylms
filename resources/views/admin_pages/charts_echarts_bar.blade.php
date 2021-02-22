@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">eChart Bar</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Chart</li>
								<li class="breadcrumb-item active" aria-current="page">eChart Bar</li>
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
				  <div class="callout bg-info">
					<h4>Nots!</h4>
					<span class="badge badge-lg badge-danger">For more info please check the plugin's official <a class="m-link" href="https://ecomfe.github.io/echarts-examples/public/index.html" target="_blank">demos &amp; documentation</a></span>
				  </div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body analytics-info">
							<h4 class="box-title">Bar Basic Chart</h4>
							<div id="bar-basic" style="height:400px;"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body analytics-info">
							<h4 class="box-title">Bsic Bar Chart</h4>
							<div id="basic-bar" style="height:400px;"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body analytics-info">
							<h4 class="box-title">Stacked Bar Chart</h4>
							<div id="stacked-bar" style="height:400px;"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body analytics-info">
							<h4 class="box-title">Stacked column Chart</h4>
							<div id="stacked-column" style="height:400px;"></div>
						</div>
					</div>
				</div>
			</div>
			
		</section>
		<!-- /.content -->
  	  </div>

@endsection
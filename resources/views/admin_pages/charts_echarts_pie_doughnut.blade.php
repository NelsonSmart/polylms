@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">eChart Pie & Doughnut</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Chart</li>
								<li class="breadcrumb-item active" aria-current="page">eChart Pie & Doughnut</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">		    
			<div class="row">
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body analytics-info">
							<h4 class="box-title">Basic Pie chart</h4>
							<div id="basic-pie" style="height:400px;"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body analytics-info">
							<h4 class="box-title">Basic Doughnut Chart</h4>
							<div id="basic-doughnut" style="height:400px;"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body analytics-info">
							<h4 class="box-title">Customized Chart</h4>
							<div id="customized-chart" style="height:400px;"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body analytics-info">
							<h4 class="box-title">Nested Pie Chart</h4>
							<div id="nested-pie" style="height:400px;"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body analytics-info">
							<h4 class="box-title">Pole Chart</h4>
							<div id="pole-chart" style="height:400px;"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body analytics-info">
							<h4 class="box-title">Nightingale Rose Chart</h4>
							<div id="nightingale-chart" style="height:400px;"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body analytics-info">
							<h4 class="box-title">Bar Polar Stack Radial</h4>
							<div id="bar-polar-stack-radial" style="height:400px;"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
  	  </div>

@endsection
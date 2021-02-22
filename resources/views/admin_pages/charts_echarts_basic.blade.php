@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">eChart Basic</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Chart</li>
								<li class="breadcrumb-item active" aria-current="page">eChart Basic</li>
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
							<h4 class="box-title">Rainfall</h4>
							<div id="rainfall" style="height: 400px;"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body analytics-info">
							<h4 class="box-title">Basic Line Chart</h4>
							<div id="basic-line" style="height:400px;"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body analytics-info">
							<h4 class="box-title">Basic Area Chart</h4>
							<div id="basic-area" style="height:400px;"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body analytics-info">
							<h4 class="box-title">Stacked Line Chart</h4>
							<div id="stacked-line" style="height:400px;"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body analytics-info">
							<h4 class="box-title">Stacked Area Chart</h4>
							<div id="stacked-area" style="height:400px;"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body analytics-info">
							<h4 class="box-title">Gradiant Line Chart</h4>
							<div id="g-line" style="height:700px;"></div>
						</div>
					</div>
				</div>
			</div>
			
		</section>
		<!-- /.content -->
  	  </div>

@endsection
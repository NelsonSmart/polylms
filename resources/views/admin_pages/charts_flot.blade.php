@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Flot chart</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Chart</li>
								<li class="breadcrumb-item active" aria-current="page">Flot chart</li>
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
				<div class="box-header with-border">
				  <h4 class="box-title">Interactive Area Chart</h4>

				  <div class="box-tools pull-right">
					Real time
					<div class="btn-group" id="realtime" data-toggle="btn-toggle">
					  <button type="button" class="btn btn-default bg-success btn-sm active" data-toggle="on">On</button>
					  <button type="button" class="btn btn-default bg-danger btn-sm" data-toggle="off">Off</button>
					</div>
				  </div>
				</div>
				<div class="box-body">
				  <div id="interactive" style="height: 300px;"></div>
				</div>
				<!-- /.box-body-->
			  </div>
			</div>
			<div class="col-xl-6 col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Line Chart</h4>
				</div>
				<div class="box-body">
				  <div id="line-chart" style="height: 300px;"></div>
				</div>
				<!-- /.box-body-->
			  </div>
			</div>
			<div class="col-xl-6 col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Full Width Area Chart</h4>
				</div>
				<div class="box-body">
				  <div id="area-chart" style="height: 338px;" class="full-width-chart"></div>
				</div>
			  </div>
			</div>
			<div class="col-xl-6 col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Bar Chart</h4>
				</div>
				<div class="box-body">
				  <div id="bar-chart" style="height: 300px;"></div>
				</div>
			  </div>
			</div>
			<div class="col-xl-6 col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Donut Chart</h4>
				</div>
				<div class="box-body">
				  <div id="donut-chart" style="height: 300px;"></div>
				</div>
			  </div>
			</div>
		  </div>
		</section>
	  </div>


@endsection
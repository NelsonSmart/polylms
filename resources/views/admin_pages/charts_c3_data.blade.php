@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">C3 Data Chart</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Chart</li>
								<li class="breadcrumb-item active" aria-current="page">C3 Data Chart</li>
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
						<span class="badge badge-lg badge-danger">For more info please check the plugin's official <a class="m-link" href="https://c3js.org/" target="_blank">demos &amp; documentation</a></span>
				    </div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Columns Oriented Data Chart</h4>
						</div>
						<div class="box-body">
							<div id="column-oriented"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Category Data Chart</h4>
						</div>
						<div class="box-body">
							<div id="category-data"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Data Color Chart</h4>
						</div>
						<div class="box-body">
							<div id="data-color"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Data Order Chart</h4>
						</div>
						<div class="box-body">
							<div id="data-order"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Row Oriented Data Chart</h4>
						</div>
						<div class="box-body">
							<div id="row-oriented"></div>
						</div>
					</div>
				</div>
			</div>
			
		</section>
		<!-- /.content -->
  	  </div>


@endsection
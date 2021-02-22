@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Bootstrap Switch</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Component</li>
								<li class="breadcrumb-item active" aria-current="page">Bootstrap Switch</li>
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
				<div class="box-header with-border">
				  <h3 class="box-title">Color</h3>
				</div>
				<div class="box-body res-tb-block">
					<div class="row">
						<div class="col-12 mb-20">
						  <h4>Primary</h4>
						</div>
						<div class="col-xl-3 col-6 text-center mb-20">
						  <button type="button" class="btn btn-lg btn-toggle btn-primary active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>	
						<div class="col-xl-2 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-toggle btn-primary active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
						<div class="col-xl-2 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-sm btn-toggle btn-primary active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
						<div class="col-xl-2 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-xs btn-toggle btn-primary active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
						<div class="col-xl-3 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-lg btn-toggle btn-primary" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
					</div>
					<div class="row mt-30">
						<div class="col-12 mb-20">
						  <h4>Secondary</h4>
						</div>
						<div class="col-xl-3 col-6 text-center mb-20">
						  <button type="button" class="btn btn-lg btn-toggle btn-secondary active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>	
						<div class="col-xl-2 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-toggle btn-secondary active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
						<div class="col-xl-2 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-sm btn-toggle btn-secondary active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
						<div class="col-xl-2 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-xs btn-toggle btn-secondary active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
						<div class="col-xl-3 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-lg btn-toggle btn-secondary" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
					</div>
					<div class="row mt-30">
						<div class="col-12 mb-20">
						  <h4>Info</h4>
						</div>
						<div class="col-xl-3 col-6 text-center mb-20">
						  <button type="button" class="btn btn-lg btn-toggle btn-info active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>	
						<div class="col-xl-2 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-toggle btn-info active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
						<div class="col-xl-2 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-sm btn-toggle btn-info active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
						<div class="col-xl-2 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-xs btn-toggle btn-info active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
						<div class="col-xl-3 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-lg btn-toggle btn-info" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
					</div>
					<div class="row mt-30">
						<div class="col-12 mb-20">
						  <h4>Danger</h4>
						</div>
						<div class="col-xl-3 col-6 text-center mb-20">
						  <button type="button" class="btn btn-lg btn-toggle btn-danger active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>	
						<div class="col-xl-2 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-toggle btn-danger active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
						<div class="col-xl-2 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-sm btn-toggle btn-danger active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
						<div class="col-xl-2 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-xs btn-toggle btn-danger active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
						<div class="col-xl-3 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-lg btn-toggle btn-danger" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
					</div>
					<div class="row mt-30">
						<div class="col-12 mb-20">
						  <h4>Success</h4>
						</div>
						<div class="col-xl-3 col-6 text-center mb-20">
						  <button type="button" class="btn btn-lg btn-toggle btn-success active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>	
						<div class="col-xl-2 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-toggle btn-success active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
						<div class="col-xl-2 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-sm btn-toggle btn-success active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
						<div class="col-xl-2 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-xs btn-toggle btn-success active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
						<div class="col-xl-3 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-lg btn-toggle btn-success" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
					</div>
					<div class="row mt-30">
						<div class="col-12 mb-20">
						  <h4>Warning</h4>
						</div>
						<div class="col-xl-3 col-6 text-center mb-20">
						  <button type="button" class="btn btn-lg btn-toggle btn-warning active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>	
						<div class="col-xl-2 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-toggle btn-warning active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
						<div class="col-xl-2 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-sm btn-toggle btn-warning active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
						<div class="col-xl-2 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-xs btn-toggle btn-warning active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
						<div class="col-xl-3 col-6 text-center align-self-center mb-20">
						  <button type="button" class="btn btn-lg btn-toggle btn-warning" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>
					</div>
				</div>
			  </div>
			  <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Sizes</h3>
				</div>
				<div class="box-body res-tb-block">
					<div class="row">
						<div class="col-12 mb-20">
						  <h4>Large</h4>
						</div>

						<div class="col-sm-6 col-12 text-center mb-20">
						  <button type="button" class="btn btn-lg btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>

						<div class="col-sm-6 col-12 text-center mb-20">
						  <button type="button" class="btn btn-lg btn-toggle active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>				
					</div>
					<div class="row mt-30">
						<div class="col-12 mb-20">
						  <h4>Default</h4>
						</div>

						<div class="col-sm-6 col-12 text-center mb-20">
						  <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>

						<div class="col-sm-6 col-12 text-center mb-20">
						   <button type="button" class="btn btn-toggle active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						   </button>
						</div>				
					</div>
					<div class="row mt-30">
						<div class="col-12 mb-20">
						  <h4>Small</h4>
						</div>

						<div class="col-sm-6 col-12 text-center mb-20">
						  <button type="button" class="btn btn-sm btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>

						<div class="col-sm-6 col-12 text-center mb-20">
						   <button type="button" class="btn btn-sm btn-toggle active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						   </button>
						</div>				
					</div>
					<div class="row mt-30">
						<div class="col-12 mb-20">
						  <h4>Mini</h4>
						</div>

						<div class="col-sm-6 col-12 text-center mb-20">
						  <button type="button" class="btn btn-xs btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
							<div class="handle"></div>
						  </button>
						</div>

						<div class="col-sm-6 col-12 text-center mb-20">
						   <button type="button" class="btn btn-xs btn-toggle active" data-toggle="button" aria-pressed="true" autocomplete="off">
							<div class="handle"></div>
						   </button>
						</div>				
					</div>				
				</div>
			  </div>
			</div>
			<!-- /.col -->
		  </div>
		  <!-- ./row -->
		</section>
		<!-- /.content -->
	  </div>

@endsection
@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Pace</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Extension</li>
								<li class="breadcrumb-item active" aria-current="page">Pace</li>
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
			  <h3 class="box-title">Title</h3>

			  <ul class="box-controls pull-right">
				<li><a class="box-btn-close" href="#"></a></li>
				<li><a class="box-btn-slide" href="#"></a></li>	
				<li><a class="box-btn-fullscreen" href="#"></a></li>
			  </ul>
			</div>
			<div class="box-body">
			  Pace loading works automatically on page. You can still implement it with ajax requests by adding this js:
			  <br/><code>$(document).ajaxStart(function() { Pace.restart(); });</code>
			  <br/>
			  <div class="row">
				<div class="col-12 text-center">
				  <button type="button" class="btn btn-info btn-rounded ajax" title="Ajax Request">
					<i class="fa fa-spin fa-refresh"></i>&nbsp; Get External Content
				  </button>
				</div>
			  </div>
			  <div class="ajax-content">
			  </div>
			</div>
			<!-- /.box-body -->
			<div class="box-footer">
			  Footer
			</div>
			<!-- /.box-footer-->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>

@endsection
@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Draggable Portlets</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Component</li>
								<li class="breadcrumb-item active" aria-current="page">Draggable Portlets</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <!-- tabs -->

		  <div class="row">
			<div class="col-12">
			  <div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<h4 class="box-title my-0">Draggable Panel Portlets</h4> Thus is a widget layout jquery plugin.
					<a href="http://troolee.github.io/gridstack.js/" target="_blank" class="text-purple">gridstack.js</a> is used to design this layout. This is drag-and-drop multi-column grid. It allows you to build draggable responsive layouts.
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->

			<div class="col-12">
				<div class="box">
					<div class="box-body">

						<div class="grid-stack" data-gs-width="12" data-gs-animate="yes">
							<div class="grid-stack-item" data-gs-x="0" data-gs-y="0" data-gs-width="4" data-gs-height="2">
								<div class="grid-stack-item-content">1</div>
							</div>
							<div class="grid-stack-item" data-gs-x="4" data-gs-y="0" data-gs-width="4" data-gs-height="4">
								<div class="grid-stack-item-content">2</div>
							</div>
							<div class="grid-stack-item" data-gs-x="8" data-gs-y="0" data-gs-width="2" data-gs-height="2" data-gs-min-width="2" data-gs-no-resize="yes">
								<div class="grid-stack-item-content"> <span class="fa fa-hand-o-up"></span> Drag me! </div>
							</div>
							<div class="grid-stack-item" data-gs-x="10" data-gs-y="0" data-gs-width="2" data-gs-height="2">
								<div class="grid-stack-item-content">4</div>
							</div>
							<div class="grid-stack-item" data-gs-x="0" data-gs-y="2" data-gs-width="2" data-gs-height="2">
								<div class="grid-stack-item-content">5</div>
							</div>
							<div class="grid-stack-item" data-gs-x="2" data-gs-y="2" data-gs-width="2" data-gs-height="4">
								<div class="grid-stack-item-content">6</div>
							</div>
							<div class="grid-stack-item" data-gs-x="8" data-gs-y="2" data-gs-width="4" data-gs-height="2">
								<div class="grid-stack-item-content">7</div>
							</div>
							<div class="grid-stack-item" data-gs-x="0" data-gs-y="4" data-gs-width="2" data-gs-height="2">
								<div class="grid-stack-item-content">8</div>
							</div>
							<div class="grid-stack-item" data-gs-x="4" data-gs-y="4" data-gs-width="4" data-gs-height="2">
								<div class="grid-stack-item-content">9</div>
							</div>
							<div class="grid-stack-item" data-gs-x="8" data-gs-y="4" data-gs-width="2" data-gs-height="2">
								<div class="grid-stack-item-content">10</div>
							</div>
							<div class="grid-stack-item" data-gs-x="10" data-gs-y="4" data-gs-width="2" data-gs-height="2">
								<div class="grid-stack-item-content">11</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- /.col -->

		  </div>
		  <!-- /.row -->
		  <!-- END tabs -->

		</section>
		<!-- /.content -->
	  </div>

@endsection
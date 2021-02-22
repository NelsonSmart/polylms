@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Range Slider</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Component</li>
								<li class="breadcrumb-item active" aria-current="page">Range Slider</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			
				    
		  <div class="callout bg-warning">
			<h4>Nots!</h4>
			<span class="badge badge-lg badge-danger">For more info please check the plugin's official <a class="m-link" href="http://ionden.com/a/plugins/ion.rangeSlider/en.html" target="_blank">demos &amp; documentation</a></span>
		  </div>
		  
		  <div class="box">
			<div class="box-body">
				<form class="form-horizontal">
					<div class="form-group row">
						<label for="range_01" class="col-sm-2 control-label">
							<span>Default</span>
							<span class="font-size-12 d-block text-muted clearfix">Start without params</span>
						</label>
						<div class="col-sm-10">
							<input type="text" id="range_01">
						</div>
					</div>
					<div class="form-group row">
						<label for="range_02" class="col-sm-2 control-label">
							<span>Min-Max</span>
							<span class="font-size-12 d-block text-muted clearfix">Set min value, max value and start point</span>
						</label>
						<div class="col-sm-10">
							<input type="text" id="range_02">
						</div>
					</div>
					<div class="form-group row">
						<label for="range_03" class="col-sm-2 control-label">
							<span>Prefix</span>
							<span class="font-size-12 d-block text-muted clearfix">showing grid and adding prefix "$"</span>
						</label>
						<div class="col-sm-10">
							<input type="text" id="range_03">
						</div>
					</div>
					<div class="form-group row">
						<label for="range_04" class="col-sm-2 control-label">
							<span>Range</span>
							<span class="d-block font-weight-normal font-13 text-muted clearfix">Set up range with negative values</span>
						</label>
						<div class="col-sm-10">
							<input type="text" id="range_04">
						</div>
					</div>
					<div class="form-group row">
						<label for="range_05" class="col-sm-2 control-label">
							<span>Step</span>
							<span class="d-block font-size-12 text-muted clearfix">Using step 250</span>
						</label>
						<div class="col-sm-10">
							<input type="text" id="range_05">
						</div>
					</div>
					<div class="form-group row">
						<label for="range_06" class="col-sm-2 control-label">
							<span>Custom Values</span>
							<span class="d-block font-weight-normal font-13 text-muted clearfix">Using any strings as values</span>
						</label>
						<div class="col-sm-10">
							<input type="text" id="range_06">
						</div>
					</div>
					<div class="form-group row">
						<label for="range_07" class="col-sm-2 control-label">
							<span>Prettify Numbers</span>
							<span class="d-block font-weight-normal font-13 text-muted clearfix">Prettify enabled. Much better!</span>
						</label>
						<div class="col-sm-10">
							<input type="text" id="range_07">
						</div>
					</div>
					<div class="form-group row">
						<label for="range_08" class="col-sm-2 control-label">
							<span>Disabled</span>
							<span class="d-block font-size-12 text-muted clearfix">Lock slider by using disable option</span>
						</label>
						<div class="col-sm-10">
							<input type="text" id="range_08">
						</div>
					</div>
					<div class="form-group row">
						<label for="range_09" class="col-sm-2 control-label">
							<span>Extra Example</span>
							<span class="d-block font-size-12 text-muted clearfix">Whant to show that max number is not the biggest one?</span>
						</label>
						<div class="col-sm-10">
							<input type="text" id="range_09">
						</div>
					</div>
					<div class="form-group row">
						<label for="range_10" class="col-sm-2 control-label">
							<span>Use decorate_both option</span>
							<span class="d-block font-size-12 text-muted clearfix">Use decorate_both option</span>
						</label>
						<div class="col-sm-10">
							<input type="text" id="range_10">
						</div>
					</div>
					<div class="form-group row">
						<label for="range_11" class="col-sm-2 control-label">
							<span>Postfixes</span>
							<span class="d-block font-weight-normal font-13 text-muted clearfix">Using postfixes</span>
						</label>
						<div class="col-sm-10">
							<input type="text" id="range_11">
						</div>
					</div>
					<div class="form-group row">
						<label for="range_12" class="col-sm-2 control-label">
							<span>Hide</span>
							<span class="d-block font-size-12 text-muted clearfix">Or hide any part you wish</span>
						</label>
						<div class="col-sm-10">
							<input type="text" id="range_12">
						</div>
					</div>
				</form>
			</div>
			<!-- /.box -->
		  </div>	

		</section>
		<!-- /.content -->	  
	  </div>

@endsection 
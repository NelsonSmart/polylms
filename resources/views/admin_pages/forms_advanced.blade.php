@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Advanced Form Elements</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page">Advanced Form Elements</li>
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
				  
				<div class="box-header">
					<h4 class="box-title">Type options</h4>  
				</div>
				<div class="box-body">
					<div class="form-group row">
						<label class="col-form-label col-md-2">Datetime</label>
						<div class="col-md-10">
							<input class="form-control" type="datetime-local" name="datetime">
							<span class="form-text text-muted">Using <code>input type="datetime-local"</code> <code> type="datetime-local" is not supported in Firefox, Safari or Internet Explorer 12 (or earlier).</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Date</label>
						<div class="col-md-10">
							<input class="form-control" type="date" name="date">
							<span class="form-text text-muted">Using <code>input type="date"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Month</label>
						<div class="col-md-10">
							<input class="form-control" type="month" name="month">
							<span class="form-text text-muted">Using <code>input type="month"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Time</label>
						<div class="col-md-10">
							<input class="form-control" type="time" name="time">
							<span class="form-text text-muted">Using <code>input type="time"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Week</label>
						<div class="col-md-10">
							<input class="form-control" type="week" name="week">
							<span class="form-text text-muted">Using <code>input type="week"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Number</label>
						<div class="col-md-10">
							<input class="form-control" type="number" name="number">
							<span class="form-text text-muted">Using <code>input type="number"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Email</label>
						<div class="col-md-10">
							<input class="form-control" type="email" name="email">
							<span class="form-text text-muted">Using <code>input type="email"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">URL</label>
						<div class="col-md-10">
							<input class="form-control" type="url" name="url">
							<span class="form-text text-muted">Using <code>input type="url"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Search</label>
						<div class="col-md-10">
							<input class="form-control" type="search" name="search">
							<span class="form-text text-muted">Using <code>input type="search"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Tel</label>
						<div class="col-md-10">
							<input class="form-control" type="tel" name="tel">
							<span class="form-text text-muted">Using <code>input type="tel"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Color</label>
						<div class="col-md-10">
							<input class="form-control" type="color" name="color">
							<span class="form-text text-muted">Using <code>input type="color"</code></span>
						</div>
					</div>				
				</div>
				<!-- /.box-body -->
				  
				<div class="box-header">
					<h4 class="box-title">Basic file inputs</h4>  
				</div>
				<div class="box-body">
					<div class="form-group row">
						<label class="col-form-label col-lg-2">Default file input</label>
						<div class="col-lg-10">
							<input type="file" class="form-control">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-lg-2">Custom BS file input</label>
						<div class="col-lg-10">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="customFile">
								<label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						</div>
					</div>  
				</div>
				<!-- /.box-body -->
				<div class="box-header with-border">
				  <h4 class="box-title">Input masks</h4>
				</div>
				<div class="box-body">
				  <!-- Date dd/mm/yyyy -->
				  <div class="form-group">
					<label>Date masks:</label>
					<div class="row">
						<div class="col-6">
							<div class="input-group">
							  <div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							  </div>
							  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
							</div>
							<!-- /.input group -->
						</div>
						<div class="col-6">
						  <!-- Date mm/dd/yyyy -->
							<div class="input-group">
							  <div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							  </div>
							  <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
							</div>
							<!-- /.input group -->
						</div>
					</div>
				  </div>
				  <!-- /.form group -->

				  <!-- phone mask -->
				  <div class="form-group">
					<label>US phone mask:</label>

					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-phone"></i>
					  </div>
					  <input type="text" class="form-control" data-inputmask="'mask':[ '(999) 999-9999']" data-mask>
					</div>
					<!-- /.input group -->
				  </div>
				  <!-- /.form group -->

				  <!-- phone mask -->
				  <div class="form-group">
					<label>Intl US phone mask:</label>

					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-phone"></i>
					  </div>
					  <input type="text" class="form-control"
							 data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
					</div>
					<!-- /.input group -->
				  </div>
				  <!-- /.form group -->

				  <!-- IP mask -->
				  <div class="form-group">
					<label>IP mask:</label>

					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-laptop"></i>
					  </div>
					  <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
					</div>
					<!-- /.input group -->
				  </div>
				  <!-- /.form group -->

				</div>
				<!-- /.box-body -->					  
				<div class="box-header with-border">
				  <h4 class="box-title">Color & Time Picker</h4>
				</div>				  
				<div class="box-body">
				  <!-- Color Picker -->
				  <div class="form-group">
					<label>Color picker:</label>
					<input type="text" class="form-control my-colorpicker1">
				  </div>
				  <!-- /.form group -->

				  <!-- Color Picker -->
				  <div class="form-group">
					<label>Color picker with addon:</label>

					<div class="input-group my-colorpicker2">
					  <input type="text" class="form-control">

					  <div class="input-group-addon">
						<i class="ion ion-paintbucket"></i>
					  </div>
					</div>
					<!-- /.input group -->
				  </div>
				  <!-- /.form group -->

				  <!-- time Picker -->
				  <div class="bootstrap-timepicker">
					<div class="form-group">
					  <label>Time picker:</label>

					  <div class="input-group">
						<input type="text" class="form-control timepicker">

						<div class="input-group-addon">
						  <i class="fa fa-clock-o"></i>
						</div>
					  </div>
					  <!-- /.input group -->
					</div>
					<!-- /.form group -->
					<div class="form-group">
					  <div class="input-group">
						<div class="input-group-addon">
						  <i class="fa fa-clock-o"></i>
						</div>
						<input type="text" class="form-control timepicker">
					  </div>
					  <!-- /.input group -->
					</div>
					<!-- /.form group -->
				  </div>
				</div>
				<!-- /.box-body -->
				<div class="box-header with-border">
				  <h4 class="box-title">Date picker</h4>
				</div>
				<div class="box-body">
				  <!-- Date -->
				  <div class="form-group">
					<label>Date:</label>

					<div class="input-group date">
					  <div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					  </div>
					  <input type="text" class="form-control pull-right" id="datepicker">
					</div>
					<!-- /.input group -->
				  </div>
				  <!-- /.form group -->

				  <!-- Date range -->
				  <div class="form-group">
					<label>Date range:</label>

					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					  </div>
					  <input type="text" class="form-control pull-right" id="reservation">
					</div>
					<!-- /.input group -->
				  </div>
				  <!-- /.form group -->

				  <!-- Date and time range -->
				  <div class="form-group">
					<label>Date and time range:</label>

					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-clock-o"></i>
					  </div>
					  <input type="text" class="form-control pull-right" id="reservationtime">
					</div>
					<!-- /.input group -->
				  </div>
				  <!-- /.form group -->

				  <!-- Date and time range -->
				  <div class="form-group">
					<label>Date range button:</label>

					<div class="input-group">
					  <button type="button" class="btn btn-default pull-right btn-rounded" id="daterange-btn">
						<span>
						  <i class="fa fa-calendar"></i> Date range picker
						</span>
						<i class="fa fa-caret-down"></i>
					  </button>
					</div>
				  </div>
				  <!-- /.form group -->

				</div>
				<!-- /.box-body -->
				<div class="box-header with-border">
				  <h4 class="box-title">Select Elements</h4>
					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>	
					</ul>
				</div>
				<div class="box-body pb-0">
				  <div class="row">
					<div class="col-md-3 col-12">
					  <div class="form-group">
						<label>Minimal</label>
						<select class="form-control select2" style="width: 100%;">
						  <option selected="selected">Alabama</option>
						  <option>Alaska</option>
						  <option>California</option>
						  <option>Delaware</option>
						  <option>Tennessee</option>
						  <option>Texas</option>
						  <option>Washington</option>
						</select>
					  </div>
					  <!-- /.form-group -->
					</div>
					<!-- /.col -->
					<div class="col-md-3 col-12">
					  <div class="form-group">
						<label>Disabled</label>
						<select class="form-control select2" disabled="disabled" style="width: 100%;">
						  <option selected="selected">Alabama</option>
						  <option>Alaska</option>
						  <option>California</option>
						  <option>Delaware</option>
						  <option>Tennessee</option>
						  <option>Texas</option>
						  <option>Washington</option>
						</select>
					  </div>
					  <!-- /.form-group -->
					</div>
					<!-- /.col -->
					<div class="col-md-3 col-12">
					  <div class="form-group">
						<label>Multiple</label>
						<select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
								style="width: 100%;">
						  <option>Alabama</option>
						  <option>Alaska</option>
						  <option>California</option>
						  <option>Delaware</option>
						  <option>Tennessee</option>
						  <option>Texas</option>
						  <option>Washington</option>
						</select>
					  </div>
					  <!-- /.form-group -->
					</div>
					<!-- /.col -->
					<div class="col-md-3 col-12">
					  <div class="form-group">
						<label>Disabled Result</label>
						<select class="form-control select2" style="width: 100%;">
						  <option selected="selected">Alabama</option>
						  <option>Alaska</option>
						  <option disabled="disabled">California (disabled)</option>
						  <option>Delaware</option>
						  <option>Tennessee</option>
						  <option>Texas</option>
						  <option>Washington</option>
						</select>
					  </div>
					  <!-- /.form-group -->
					</div>
					<!-- /.col -->
				  </div>
				  <!-- /.row -->
				</div>
				<!-- /.box-body -->
				  <div class="box-header with-border">
					<h4 class="box-title">Bootstrap Select boxes</h4>
				  </div>
				  <div class="box-body">
					  <div class="row">
						<div class="col-md-4">
							<h5 class="my-10">Select box</h5>
							<select class="selectpicker">
								<option>Lorem</option>
								<option>Ipsum</option>
								<option>Dummy</option>
							</select>
						</div>
						<div class="col-md-4">
							<h5 class="my-10">Select boxes with Option groups</h5>
							<select class="selectpicker">
								<optgroup label="">
									<option>Lorem</option>
									<option>Ipsum</option>
									<option>Dummy</option>
								</optgroup>
								<optgroup label="">
									<option>Lorem</option>
									<option>Ipsum</option>
									<option>Dummy</option>
								</optgroup>
							</select>
						</div>
						<div class="col-md-4">
							<h5 class="my-10">Multiple select boxes</h5>
							<select class="selectpicker" multiple>
								<option>Lorem</option>
								<option>Ipsum</option>
								<option>Dummy</option>
							</select>
						</div>
					</div>
					<h5 class="my-10">With colored Button Classes</h5>
						<div class="row">
							<div class="col-sm-4">
								<select class="selectpicker mb-20 mr-10" data-style="btn-primary">
									<option data-tokens="Lorem">Sed posuere metus vel maximus fringilla.</option>
									<option data-tokens="ipsum">Nam in nisl a ligula semper euismod.</option>
									<option data-tokens="dolor">Ut rhoncus diam et elit tristique venenatis.</option>
								</select>
							</div>
							<div class="col-sm-4">
								<select class="selectpicker mb-20 mr-10" data-style="btn-info btn-outline-info">
									<option data-tokens="Lorem">Sed posuere metus vel maximus fringilla.</option>
									<option data-tokens="ipsum">Nam in nisl a ligula semper euismod.</option>
									<option data-tokens="dolor">Ut rhoncus diam et elit tristique venenatis.</option>
								</select>
							</div>
							<div class="col-sm-4">
								<select class="selectpicker mb-20 mr-10" data-style="btn-warning ">
									<option data-tokens="Lorem">Sed posuere metus vel maximus fringilla.</option>
									<option data-tokens="ipsum">Nam in nisl a ligula semper euismod.</option>
									<option data-tokens="dolor">Ut rhoncus diam et elit tristique venenatis.</option>
								</select>
							</div>
							<div class="col-sm-4">
								<select class="selectpicker mb-20 mr-10" data-style="btn-danger">
									<option data-tokens="Lorem">Sed posuere metus vel maximus fringilla.</option>
									<option data-tokens="ipsum">Nam in nisl a ligula semper euismod.</option>
									<option data-tokens="dolor">Ut rhoncus diam et elit tristique venenatis.</option>
								</select>
							</div>
							<div class="col-sm-4">
								<select class="selectpicker mb-20 mr-10" data-style="btn-success">
									<option data-tokens="Lorem">Sed posuere metus vel maximus fringilla.</option>
									<option data-tokens="ipsum">Nam in nisl a ligula semper euismod.</option>
									<option data-tokens="dolor">Ut rhoncus diam et elit tristique venenatis.</option>
								</select>
							</div>
							<div class="col-sm-4">
								<select class="selectpicker mb-20" data-style="btn-default">
									<option data-tokens="Lorem">Sed posuere metus vel maximus fringilla.</option>
									<option data-tokens="ipsum">Nam in nisl a ligula semper euismod.</option>
									<option data-tokens="dolor">Ut rhoncus diam et elit tristique venenatis.</option>
								</select>
							</div>
						</div>
				  </div>
				<!-- /.box-body -->
				  <div class="box-header with-border">
					<h4 class="box-title">Bootstrap TouchSpin</h4>
				  </div>
				  <div class="box-body">
					  <div class="row">
						<div class="col-lg-6">
							<form class="pr-20">
								<div class="form-group">
									<label class="control-label">Vertical Touchspin</label>
									<input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-secondary" data-bts-button-up-class="btn btn-secondary" value="" name="vertical-spin"> </div>
								<div class="form-group">
									<label class="control-label">Postfix</label>
									<input id="demo1" type="text" value="55" name="demo1" data-bts-button-down-class="btn btn-secondary" data-bts-button-up-class="btn btn-secondary"> </div>
								<div class="form-group mb-0">
									<label class="control-label">Prefix</label>
									<input id="demo2" type="text" value="0" name="demo2" class=" form-control" data-bts-button-down-class="btn btn-secondary" data-bts-button-up-class="btn btn-secondary"> </div>

							</form>
						</div>
						<div class="col-lg-6">
							<form>
								<div class="form-group">
									<label class="control-label">Init </label>
									<input id="demo3" type="text" value="" name="demo3" data-bts-button-down-class="btn btn-secondary" data-bts-button-up-class="btn btn-secondary"> </div>
								<div class="form-group">
									<label class="control-label">Value set 30 </label>
									<input id="demo3_1" type="text" value="30" name="demo3_1" data-bts-button-down-class="btn btn-secondary" data-bts-button-up-class="btn btn-secondary"> </div>
								<div class="form-group mb-0">
									<label class="control-label">Button group</label>
									<div class="input-group">
										<input id="demo4" type="text" class="form-control" name="demo4" value="50" data-bts-button-down-class="btn btn-secondary" data-bts-button-up-class="btn btn-secondary">
									</div>
								</div>
							</form>
						</div>
					</div>					
				  </div>
				<!-- /.box-body -->				  
				<div class="box-header with-border">
				  <h4 class="box-title">Input Tags</h4>
				</div>
				<div class="box-body">
					<h6 class="box-subtitle d-block mb-10">Add <code>data-role="tagsinput"</code> to your input field & its automatically change it to a tags input.</h6>
					<div class="tags-default">
						<input type="text" value="Lorem,Ipsum,Amet" data-role="tagsinput" placeholder="add tags" /> </div>
					<h5 class="box-title mt-20">Select Tags</h5>
					<h6 class="box-subtitle d-block mb-10">You can also use <code>select multiple</code> to your input field.</h6>
					<select multiple data-role="tagsinput">
						<option value="Lorem">Lorem</option>
						<option value="Ipsum">Ipsum</option>
						<option value="Amet">Amet</option>
					</select>
					<h5 class="box-title  mt-20 d-block mb-10">Input Group Tags</h5>
					<h6 class="box-subtitle d-block mb-10">You can also use group tag <code>data-role="tagsinput"</code> to your input field.</h6>
					<div class="input-group">
						<input type="text" value="Lorem,Ipsum,Amet" data-role="tagsinput" placeholder="add tags"> <span class="input-group-addon">Tags</span>
					</div>
				</div>
				<!-- /.box-body -->
				<div class="box-header with-border">
				  <h4 class="box-title">iCheck - Checkbox &amp; Radio Inputs</h4>
				</div>
				<div class="box-body">
				  <!-- Minimal style -->
					<div class="row">
						<div class="col-12">

						  <!-- checkbox -->
						  <div class="form-group ichack-input">
							<label>
							  <input type="checkbox" class="minimal" checked>
							</label>
							<label>
							  <input type="checkbox" class="minimal">
							</label>
							<label>
							  <input type="checkbox" class="minimal" disabled>
							  Minimal skin checkbox
							</label>
						  </div>

						  <!-- Minimal red style -->

						  <!-- checkbox -->
						  <div class="form-group ichack-input">
							<label>
							  <input type="checkbox" class="minimal-red" checked>
							</label>
							<label>
							  <input type="checkbox" class="minimal-red">
							</label>
							<label>
							  <input type="checkbox" class="minimal-red" disabled>
							  Minimal red skin checkbox
							</label>
						  </div>

						  <!-- Minimal red style -->

						  <!-- checkbox -->
						  <div class="form-group ichack-input">
							<label>
							  <input type="checkbox" class="flat-red" checked>
							</label>
							<label>
							  <input type="checkbox" class="flat-red">
							</label>
							<label>
							  <input type="checkbox" class="flat-red" disabled>
							  Flat green skin checkbox
							</label>
						  </div>	

						  <!-- radio -->
						  <div class="form-group ichack-input">
							<label>
							  <input type="radio" name="r1" class="minimal" checked>
							</label>
							<label>
							  <input type="radio" name="r1" class="minimal">
							</label>
							<label>
							  <input type="radio" name="r1" class="minimal" disabled>
							  Minimal skin radio
							</label>
						  </div>

						  <!-- radio -->
						  <div class="form-group ichack-input">
							<label>
							  <input type="radio" name="r2" class="minimal-red" checked>
							</label>
							<label>
							  <input type="radio" name="r2" class="minimal-red">
							</label>
							<label>
							  <input type="radio" name="r2" class="minimal-red" disabled>
							  Minimal red skin radio
							</label>
						  </div>

						  <!-- radio -->
						  <div class="form-group ichack-input">
							<label>
							  <input type="radio" name="r3" class="flat-red" checked>
							</label>
							<label>
							  <input type="radio" name="r3" class="flat-red">
							</label>
							<label>
							  <input type="radio" name="r3" class="flat-red" disabled>
							  Flat green skin radio
							</label>
						  </div>

						</div>
					</div>
				</div>
				<!-- /.box-body -->
				<div class="box-header with-border">
				  <i class="fa fa-check-square-o text-black"></i>

				  <h4 class="box-title">Basic Checkbox</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">

					<div class="demo-checkbox">
						<input type="checkbox" id="basic_checkbox_1" checked />
						<label for="basic_checkbox_1">Default</label>
						<input type="checkbox" id="basic_checkbox_2" class="filled-in" checked />
						<label for="basic_checkbox_2">Filled In</label>
						<input type="checkbox" id="basic_checkbox_3" checked disabled />
						<label for="basic_checkbox_3">Default - Disabled</label>
						<input type="checkbox" id="basic_checkbox_4" class="filled-in" checked disabled />
						<label for="basic_checkbox_4">Filled In - Disabled</label>
					</div>

				</div>
				<!-- /.box-body -->
				<div class="box-header with-border">
				  <i class="fa fa-check-square-o text-black"></i>

				  <h4 class="box-title">Basic Checkbox Design Colors</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">

					<div class="demo-checkbox">
						<input type="checkbox" id="md_checkbox_1" class="chk-col-primary" checked />
						<label for="md_checkbox_1">Primary</label>
						<input type="checkbox" id="md_checkbox_3" class="chk-col-success" checked />
						<label for="md_checkbox_3">Success</label>
						<input type="checkbox" id="md_checkbox_4" class="chk-col-info" checked />
						<label for="md_checkbox_4">Info</label>
						<input type="checkbox" id="md_checkbox_6" class="chk-col-warning" checked />
						<label for="md_checkbox_6">Warning</label>
						<input type="checkbox" id="md_checkbox_7" class="chk-col-danger" checked />
						<label for="md_checkbox_7">Danger</label>					
					</div>

				</div>
				<!-- /.box-body -->
				<div class="box-header with-border">
				  <i class="fa fa-check-square-o text-black"></i>

				  <h4 class="box-title">Basic Checkbox Design Colors with Filled In</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">

					<div class="demo-checkbox">
						<input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-primary" checked />
						<label for="md_checkbox_21">Primary</label>					
						<input type="checkbox" id="md_checkbox_23" class="filled-in chk-col-success" checked />
						<label for="md_checkbox_23">Success</label>
						<input type="checkbox" id="md_checkbox_24" class="filled-in chk-col-info" checked />
						<label for="md_checkbox_24">Info</label>	
						<input type="checkbox" id="md_checkbox_27" class="filled-in chk-col-warning" checked />
						<label for="md_checkbox_27">Warning</label>					
						<input type="checkbox" id="md_checkbox_29" class="filled-in chk-col-danger" checked />
						<label for="md_checkbox_29">Danger</label>						
					</div>

				</div>
				<!-- /.box-body -->
				<div class="box-header with-border">
				  <i class="fa fa-check-circle text-black"></i>

				  <h4 class="box-title">Basic Radio Button</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">

					<div class="demo-radio-button">
						<input name="group1" type="radio" id="radio_1" checked />
						<label for="radio_1">Radio - 1</label>
						<input name="group1" type="radio" id="radio_2" />
						<label for="radio_2">Radio - 2</label>
						<input name="group1" type="radio" class="with-gap" id="radio_3" />
						<label for="radio_3">Radio - With Gap</label>
						<input name="group1" type="radio" id="radio_4" class="with-gap" />
						<label for="radio_4">Radio - With Gap</label>
						<input name="group2" type="radio" id="radio_5" checked disabled />
						<label for="radio_5">Radio - Disabled</label>
						<input name="group3" type="radio" id="radio_6" class="with-gap" checked disabled />
						<label for="radio_6">Radio - Disabled</label>
					</div>

				</div>
				<!-- /.box-body -->
				<div class="box-header with-border">
				  <i class="fa fa-check-circle text-black"></i>

				  <h4 class="box-title">Basic Radio Button Design Colors</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">

					<div class="demo-radio-button">
						<input name="group4" type="radio" id="radio_7" class="radio-col-primary" checked />
						<label for="radio_7">Primary</label>
						<input name="group4" type="radio" id="radio_9" class="radio-col-success" />
						<label for="radio_9">Success</label>
						<input name="group4" type="radio" id="radio_10" class="radio-col-info" />
						<label for="radio_10">Info</label>
						<input name="group4" type="radio" id="radio_12" class="radio-col-warning" />
						<label for="radio_12">Warning</label>
						<input name="group4" type="radio" id="radio_13" class="radio-col-danger" />
						<label for="radio_13">Danger</label>
					</div>

				</div>
				<!-- /.box-body -->
				<div class="box-header with-border">
				  <i class="fa fa-check-circle-o text-black"></i>

				  <h4 class="box-title">Basic Radio Button Design Colors with Outline</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">

					<div class="demo-radio-button">
						<input name="group5" type="radio" id="radio_30" class="with-gap radio-col-primary" checked />
						<label for="radio_30">Primary</label>					
						<input name="group5" type="radio" id="radio_32" class="with-gap radio-col-success" />
						<label for="radio_32">Success</label>
						<input name="group5" type="radio" id="radio_33" class="with-gap radio-col-info" />
						<label for="radio_33">Info</label>
						<input name="group5" type="radio" id="radio_35" class="with-gap radio-col-warning" />
						<label for="radio_35">Warning</label>
						<input name="group5" type="radio" id="radio_36" class="with-gap radio-col-danger" />
						<label for="radio_36">Danger</label>
					</div>

				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- ./col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  </div>

@endsection
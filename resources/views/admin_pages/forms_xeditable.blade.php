@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">X-Editable</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page">X-Editable</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col">
					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">X -Editable</h4>
						  <h6 class="box-subtitle">Inline editor</h6>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<table style="clear: both" class="table table-bordered table-striped" id="user">
								<tbody>
									<tr>
										<td width="35%">Simple text field</td>
										<td width="65%"><a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">superuser</a></td>
									</tr>
									<tr>
										<td>Empty text field, required</td>
										<td>
											<a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
										</td>
									</tr>
									<tr>
										<td>Select, local array, custom display</td>
										<td>
											<a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
										</td>
									</tr>
									<tr>
										<td>Select, error while loading</td>
										<td><a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a></td>
									</tr>
									<tr>
										<td>Combodate</td>
										<td>
											<a href="#" id="inline-dob" data-type="combodate" data-value="2015-09-24" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth"></a>
										</td>
									</tr>
									<tr>
										<td>Textarea, buttons below</td>
										<td><a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a></td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /.box-body -->			
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col --> 
			</div>
			<!-- /.row -->

				<!-- /.col --> 

		</section>
		<!-- /.content -->
	  </div>

@endsection
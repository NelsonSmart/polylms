@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Edit</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">e-Commerce</li>
								<li class="breadcrumb-item active" aria-current="page">Edit</li>
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
					  <h4 class="box-title">About Product</h4>
					</div>
				  <div class="box-body">
					<form action="#">
						<div class="form-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label class="font-weight-700 font-size-16">Product Name</label>
									  <input type="text" class="form-control" placeholder="Product Name">
									</div>
								</div>
								<!--/span-->
								<div class="col-md-6">
									<div class="form-group">
									   <label class="font-weight-700 font-size-16">Sub text</label>
									   <input type="text" class="form-control" placeholder="Lorem Ipsum Text...">
									</div>
								</div>
								<!--/span-->
							</div>
							<!--/row-->
							<!--/row-->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="font-weight-700 font-size-16">Category</label>
										<select class="form-control" data-placeholder="Choose a Category" tabindex="1">
											<option value="Category 1">Category 1</option>
											<option value="Category 2">Category 2</option>
											<option value="Category 3">Category 5</option>
											<option value="Category 4">Category 4</option>
										</select>
									</div>
								</div>
								<!--/span-->
								<div class="col-md-6">
									<div class="form-group">
										<label class="font-weight-700 font-size-16">Status</label>
										<div class="radio-list">
											<label class="radio-inline p-0 mr-10">
												<div class="radio radio-info">
													<input type="radio" name="radio" id="radio1" value="option1">
													<label for="radio1">Published</label>
												</div>
											</label>
											<label class="radio-inline">
												<div class="radio radio-info">
													<input type="radio" name="radio" id="radio2" value="option2">
													<label for="radio2">Draft</label>
												</div>
											</label>
										</div>
									</div>
								</div>
								<!--/span-->
							</div>
							<!--/row-->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="font-weight-700 font-size-16">Price</label>
										<div class="input-group">
											<div class="input-group-addon"><i class="ti-money"></i></div>
											<input type="text" class="form-control" placeholder="270"> </div>
									</div>
								</div>
								<!--/span-->
								<div class="col-md-6">
									<div class="form-group">
										<label class="font-weight-700 font-size-16">Discount</label>
										<div class="input-group">
											<div class="input-group-addon"><i class="ti-cut"></i></div>
											<input type="text" class="form-control" placeholder="50%"> </div>
									</div>
								</div>
								<!--/span-->
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="font-weight-700 font-size-16">Product Description</label>
										<textarea class="form-control p-20" rows="4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</textarea>
									</div>
								</div>
							</div>
							<!--/row-->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="font-weight-700 font-size-16">Meta Title</label>
										<input type="text" class="form-control"> </div>
								</div>
								<!--/span-->
								<div class="col-md-6">
									<div class="form-group">
										<label class="font-weight-700 font-size-16">Meta Keyword</label>
										<input type="text" class="form-control"> </div>
								</div>
								<!--/span-->
								<div class="col-md-3">
									<h4 class="box-title mt-20">Upload Image</h4>
									<div class="product-img text-left">
										<img src="../images/product/product-9.png" alt="">
										<div class="btn btn-info mb-20">
											<span>Upload Anonther Image</span>
                                            <input type="file" class="upload"> 
										</div>
										<button class="btn btn-success">Edit</button>
										<button class="btn btn-danger">Delete</button>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<h4 class="box-title mt-40">General Info</h4>
									<div class="table-responsive">
										<table class="table no-border td-padding">
											<tbody>
												<tr>
													<td>
														<input type="text" class="form-control" placeholder="Brand">
													</td>
													<td>
														<input type="text" class="form-control" placeholder="Sellar">
													</td>
												</tr>
												<tr>
													<td>
														<input type="text" class="form-control" placeholder="Delivery Condition">
													</td>
													<td>
														<input type="text" class="form-control" placeholder="Knock Down">
													</td>
												</tr>
												<tr>
													<td>
														<input type="text" class="form-control" placeholder="Color">
													</td>
													<td>
														<input type="text" class="form-control" placeholder="Gift Pack">
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="form-actions mt-10">
							<button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Save</button>
							<button type="button" class="btn btn-danger">Cancel</button>
						</div>
					</form>
				  </div>
				</div>
			  </div>		  
		  </div>

		</section>
		<!-- /.content -->
	  </div>

@endsection
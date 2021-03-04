@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Orders</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">e-Commerce</li>
								<li class="breadcrumb-item active" aria-current="page">Orders</li>
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
				  <div class="box-body">
					<div class="table-responsive">
						<table id="productorder" class="table table-hover no-wrap product-order" data-page-size="10">
							<thead>
								<tr>
									 <th>Customer</th>
									 <th>Order ID</th>
									 <th>Photo</th>
									 <th>Product</th>
									 <th>Quantity</th>
									 <th>Date</th>
									 <th>Status</th>
									 <th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-1.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>17</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-success">Paid</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-2.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>12</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-warning">Pending</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-3.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>15</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-success">Paid</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-4.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>19</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-danger">Failed</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-5.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>24</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-success">Pending</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-6.png" alt="product" width="80"></td>
									<td>Product Title</td>

									<td>04</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-danger">Failed</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-7.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>10</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-success">Paid</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-8.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>11</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-warning">Pending</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-9.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>13</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-success">Paid</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-10.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>34</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-warning">Pending</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-11.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>22</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-danger">Failed</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-12.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>12</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-warning">Pending</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr>

							</tbody>						
						</table>
					</div>
				  </div>
				</div>
			  </div>		  
		  </div>

		</section>
		<!-- /.content -->
	  </div>

@endsection
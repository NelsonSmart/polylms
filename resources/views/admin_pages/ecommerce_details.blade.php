@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Details</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">e-Commerce</li>
								<li class="breadcrumb-item active" aria-current="page">Details</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <div class="row">
			<div class="col-lg-12">
				<div class="box">
					<div class="box-body">
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="box box-body b-1 text-center no-shadow">
									<img src="../images/product/product-6.png" id="product-image" class="img-fluid" alt="" />
								</div>
								<div class="pro-photos">
									<div class="photos-item item-active">
										<img src="../images/product/product-6.png" alt="" >
									</div>
									<div class="photos-item">
										<img src="../images/product/product-7.png" alt="" >
									</div>
									<div class="photos-item">
										<img src="../images/product/product-8.png" alt="" >
									</div>
									<div class="photos-item">
										<img src="../images/product/product-9.png" alt="" >
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="col-md-8 col-sm-6">
								<h2 class="box-title mt-0">Product Title</h2>
								<div class="list-inline">
									<a class="text-warning"><i class="mdi mdi-star"></i></a>
									<a class="text-warning"><i class="mdi mdi-star"></i></a>
									<a class="text-warning"><i class="mdi mdi-star"></i></a>
									<a class="text-warning"><i class="mdi mdi-star"></i></a>
									<a class="text-warning"><i class="mdi mdi-star"></i></a>
								</div>
								<h1 class="pro-price mb-0 mt-20">&#36;270
										<span class="old-price">&#36;540</span>
										<span class="text-danger">50% off</span>
									</h1>
								<hr>
								<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</p>
								<div class="row">
									<div class="col-sm-12">
										<h6>Color</h6>
										<div class="input-group">
											<ul class="icolors">
												<li class="bg-danger rounded-circle"></li>
												<li class="bg-info rounded-circle"></li>
												<li class="bg-primary rounded-circle active"></li>
											</ul>
										</div>
										<h6 class="mt-20">Available Size</h6>
										<p class="mb-0">
											<span class="badge badge-pill badge-lg badge-default">S</span>
											<span class="badge badge-pill badge-lg badge-default">M</span>
											<span class="badge badge-pill badge-lg badge-default">L</span>
										</p>
									</div>
								</div>
								<hr>
								<div class="gap-items">
									<button class="btn btn-success"><i class="mdi mdi-shopping"></i> Buy Now!</button>
									<button class="btn btn-primary"><i class="mdi mdi-cart-plus"></i> Add To Cart</button>
									<button class="btn btn-infomr"><i class="mdi mdi-compare"></i> Compare</button>
									<button class="btn btn-danger"><i class="mdi mdi-heart"></i> Wishlist</button>
								</div>
								<h4 class="box-title mt-20">Key Highlights</h4>
								<ul class="list-icons">
									<li><i class="fa fa-check text-danger float-none"></i> Party Wear</li>
									<li><i class="fa fa-check text-danger float-none"></i> Nam libero tempore, cum soluta nobis est</li>
									<li><i class="fa fa-check text-danger float-none"></i> Omnis voluptas as placeat facere possimus omnis voluptas.</li>
								</ul>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<h4 class="box-title mt-40">General Info</h4>
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr>
												<td width="390">Brand</td>
												<td> Brand Name </td>
											</tr>
											<tr>
												<td>Delivery Condition</td>
												<td> Lorem Ipsum </td>
											</tr>
											<tr>
												<td>Type</td>
												<td> Party Wear </td>
											</tr>
											<tr>
												<td>Style</td>
												<td> Modern </td>
											</tr>
											<tr>
												<td>Product Number</td>
												<td> FG1548952 </td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>

		</section>
		<!-- /.content -->
	  </div>

@endsection
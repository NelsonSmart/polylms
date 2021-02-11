@extends('admin_master')

@section('content')


<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">User Box</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Box Cards</li>
								<li class="breadcrumb-item active" aria-current="page">User Box</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <!-- START Card With Image -->			
			<div class="card">
			  <div class="card-header">
				<h4 class="card-title">Card Style</h4>
			  </div>
			</div>

		  <div class="row">
			<div class="col-md-12 col-lg-4">
				<div class="card">
				  <img class="card-img-top" src="../images/gallery/landscape12.jpg" alt="Card image cap">
				  <div class="card-body">
					<h4 class="card-title">Card title</h4>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  </div>
				  <div class="card-footer justify-content-between d-flex">
					<span class="text-muted">Last updated 3 mins ago</span>
					<span>
						<i class="fa fa-star text-warning"></i>
						<i class="fa fa-star text-warning"></i>
						<i class="fa fa-star text-warning"></i>
						<i class="fa fa-star text-warning"></i>
						<i class="fa fa-star-half text-warning"></i>
						<span class="text-muted ml-2">(12)</span>
					</span>
				  </div>
				</div>
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
				<div class="card">
				  <div class="card-body">
					<h4 class="card-title">Card title</h4>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  </div>
				  <img class="card-img-top" src="../images/gallery/landscape12.jpg" alt="Card image cap">
				  <div class="card-footer d-flex justify-content-between">
					<span class="font-size-14 text-muted">Nov 12, 11:25 am</span>
					<span class="font-size-14  text-muted">Due in 12 days</span>
				  </div>
				</div>
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
				<div class="card">
				  <div class="card-body">
					<h4 class="card-title">Card title</h4>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  </div>
				  <div class="card-footer d-flex justify-content-between align-items-center">
					<div class="text-muted"><i class="fa fa-spinner mr-2"></i> Processing...</div>

					<div class="progress w-100" style="height: 0.375rem;">
						<div class="progress-bar bg-info progress-bar-striped progress-bar-animated" style="width: 60%;">
							<span class="sr-only">60% Complete</span>
						</div>
					</div>
				  </div>
				  <img class="card-img-bottom" src="../images/gallery/landscape12.jpg" alt="Card image cap">
				</div>
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
				<div class="card">
				  <div class="card-header">
					<h4 class="card-title">Below card header</h4>
					<div class="header-elements">
						<span class="badge bg-danger badge-pill">Paid</span>
					</div>
				  </div>
				  <img class="card-img-top" src="../images/gallery/landscape12.jpg" alt="Card image cap">
					
				  <div class="card-body">
					  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  </div>
					
				  <div class="card-footer">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Add comment...">

						<span class="input-group-append">
							<button class="btn bg-info btn-rounded btn-sm" type="button"><i class="fa fa-send-o"></i></button>
						</span>
					</div>
				  </div>
				</div>
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
				<div class="card">
					<div class="card-header d-flex justify-content-between">
						<span><i class="fa fa-user mr-2"></i> <a href="#">Johone doe</a></span>
						<span class="text-muted">Added 4 hours ago</span>
					</div>
				  <img class="card-img-top" src="../images/gallery/landscape12.jpg" alt="Card image cap">
				  <div class="card-body">
					<h4 class="card-title">Multiple titles</h4>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  </div>
				  <div class="card-footer justify-content-between d-flex">
					<ul class="list-inline mb-0 mr-2">
						<li class="list-inline-item">
							<a href="#"><i class="fa fa-heart-o"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="#"><i class="fa fa-comment-o"></i></a>
						</li>
					</ul>

					<ul class="list-inline mb-0">
						<li><a href="#">Edit</a></li>
						<li><a href="#">Delete</a></li>
					</ul>
				  </div>
				</div>
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
				<div class="card">
				  <img class="card-img-top" src="../images/gallery/landscape12.jpg" alt="Card image cap">			  

					<div class="card-footer d-flex justify-content-between bt-0 pb-0">
						<span class="text-muted">412548 followers</span>

						<ul class="list-inline mb-0">
							<li class="list-inline-item">
								<a href="#" class="text-info"><i class="fa fa-thumbs-o-up"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="text-danger"><i class="fa fa-thumbs-o-down"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="text-muted"><i class="fa fa-flag-o"></i></a>
							</li>
						</ul>
					</div>
					
				  <div class="card-body">
					<h4 class="card-title">Multiple footers</h4>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  </div>
					<div class="card-footer d-flex justify-content-between">
						<a href="#" class="text-default"><i class="fa fa-commenting-o"></i> Comment</a>
						<span class="text-muted"><i class="fa fa-eye"></i> 673</span>
					</div>
				</div>
			</div>
			<!-- /.col -->
			  
			<div class="col-md-8 col-12">
				<div class="card bg-dark text-white">
				  <img class="card-img" src="../images/gallery/thumb/10.jpg" alt="Card image">
				  <div class="card-img-overlay">
					<h4 class="card-title">Card title</h4>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text">Last updated 3 mins ago</p>
				  </div>
				</div>
			</div>
			<!-- /.col -->
			  
			<div class="col-md-4 col-12">
				<div class="card">
				  <div class="card-header">
					Quote
				  </div>
				  <div class="card-body">
					<blockquote class="blockquote mb-0">
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
					</blockquote>
				  </div>
				</div>
			  <!-- /.card -->
			</div>
			<!-- /.col -->
			  
			  
			<div class="col-md-12 col-lg-4">
			  <div class="card">
				  <img class="card-img-top img-responsive" src="../images/card/img1.jpg" alt="Card image cap">
				<div class="card-body">            	
					<h4 class="card-title">Card title</h4>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-rounded btn-primary">Go somewhere</a>
				</div>
				<!-- /.card-body -->
			  </div>
			  <!-- /.card -->
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
			  <div class="card">
				<ul class="list-group list-group-flush">
					<li class="list-group-item">Cras justo odio</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Vestibulum at eros</li>
					<li class="list-group-item">Cras justo odio</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Vestibulum at eros</li>
					<li class="list-group-item">Cras justo odio</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Vestibulum at eros</li>
					<li class="list-group-item">Cras justo odio</li>
				</ul>
			  </div>
			  <!-- /.card -->
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
				<div class="card">
				  <img class="card-img-top" src="../images/gallery/thumb-sm/1.jpg" alt="Card image cap">
				  <div class="card-body">
					<h4 class="card-title">Card title</h4>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				  <ul class="list-group list-group-flush">
					<li class="list-group-item">Cras justo odio</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Vestibulum at eros</li>
				  </ul>
				  <div class="card-body">
					<a href="#" class="card-link">Card link</a>
					<a href="#" class="card-link">Another link</a>
				  </div>
				</div>
			  <!-- /.card -->
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">		
				<div class="card">
				  <div class="card-body">
					<h4 class="card-title">Special title treatment</h4>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<a href="#" class="btn btn-rounded btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
				<div class="card text-center">
				  <div class="card-body">
					<h4 class="card-title">Special title treatment</h4>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<a href="#" class="btn btn-rounded btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
				<div class="card text-right">
				  <div class="card-body">
					<h4 class="card-title">Special title treatment</h4>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>
			<!-- /.col -->

		  </div>
		  <!-- /.row -->
		  <!-- END Card with image -->

		  <!-- START Card With Image -->
		  <div class="row fx-element-overlay">
		   <div class="col-12"> 
			<div class="card">
			  <div class="card-header">
				<h4 class="card-title">Fade-in effect</h4>
				<h6 class="card-subtitle">You can use by default <code>fx-overlay</code></h6>
			  </div>
			</div>
		   </div>
			<div class="col-md-12 col-lg-4">
			  <div class="box box-default">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="../images/card/1.jpg" alt="user">
						<div class="fx-overlay">
							<ul class="fx-info">
								<li><a class="btn default btn-outline image-popup-vertical-fit" href="../images/card/1.jpg"><i class="ion-search"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="ion-link"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">Maical Luka</h3> <small>Managing Director</small>
						<br> </div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
			  <div class="box box-default">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="../images/card/2.jpg" alt="user">
						<div class="fx-overlay">
							<ul class="fx-info">
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">Maical Luka</h3> <small>Managing Director</small>
						<br> </div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
			  <div class="box box-default">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="../images/card/3.jpg" alt="user">
						<div class="fx-overlay">
							<ul class="fx-info">
								<li><a class="btn default btn-outline btn-rounded image-popup-vertical-fit" href="../images/card/1.jpg"><i class="ion-search"></i></a></li>
								<li><a class="btn default btn-outline btn-rounded" href="javascript:void(0);"><i class="ion-link"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">Maical Luka</h3> <small>Managing Director</small>
						<br> </div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		  <!-- END Card with image -->

		  <!-- START Card With Image -->
		  <div class="row fx-element-overlay">
		   <div class="col-12">
			<div class="card">
			  <div class="card-header">
				<h4 class="card-title">Scroll down effect</h4>
				<h6 class="card-subtitle">You can use by default <code>fx-overlay scrl-dwn</code></h6>
			  </div>
			</div>
		   </div>
			<div class="col-md-12 col-lg-4">
			  <div class="box box-default">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="../images/card/1.jpg" alt="user">
						<div class="fx-overlay scrl-dwn">
							<ul class="fx-info">
								<li><a class="btn default btn-outline image-popup-vertical-fit" href="../images/card/1.jpg"><i class="ion-search"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="ion-link"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">Maical Luka</h3> <small>Managing Director</small>
						<br> </div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
			  <div class="box box-default">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="../images/card/2.jpg" alt="user">
						<div class="fx-overlay scrl-dwn">						
							<ul class="fx-info">
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">Maical Luka</h3> <small>Managing Director</small>
						<br> </div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
			  <div class="box box-default">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="../images/card/3.jpg" alt="user">
						<div class="fx-overlay scrl-dwn">
							<ul class="fx-info">
								<li><a class="btn default btn-outline btn-rounded image-popup-vertical-fit" href="../images/card/1.jpg"><i class="ion-search"></i></a></li>
								<li><a class="btn default btn-outline btn-rounded" href="javascript:void(0);"><i class="ion-link"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">Maical Luka</h3> <small>Managing Director</small>
						<br> </div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		  <!-- END Card with image -->

		  <!-- START Card With Image -->
		  <div class="row fx-element-overlay">
		   <div class="col-12"> 
			<div class="card">
			  <div class="card-header">
				<h4 class="card-title">Scroll up effect</h4>
				<h6 class="card-subtitle">You can use by default <code>fx-overlay scrl-up</code></h6>
			  </div>
			</div>
		   </div>
			<div class="col-md-12 col-lg-4">
			  <div class="box box-default">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="../images/card/1.jpg" alt="user">
						<div class="fx-overlay scrl-up">
							<ul class="fx-info">
								<li><a class="btn default btn-outline image-popup-vertical-fit" href="../images/card/1.jpg"><i class="ion-search"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="ion-link"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">Maical Luka</h3> <small>Managing Director</small>
						<br> </div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
			  <div class="box box-default">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="../images/card/2.jpg" alt="user">
						<div class="fx-overlay scrl-up">						
							<ul class="fx-info">
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">Maical Luka</h3> <small>Managing Director</small>
						<br> </div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
			  <div class="box box-default">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="../images/card/3.jpg" alt="user">
						<div class="fx-overlay scrl-up">
							<ul class="fx-info">
								<li><a class="btn default btn-outline btn-rounded image-popup-vertical-fit" href="../images/card/1.jpg"><i class="ion-search"></i></a></li>
								<li><a class="btn default btn-outline btn-rounded" href="javascript:void(0);"><i class="ion-link"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">Maical Luka</h3> <small>Managing Director</small>
						<br> </div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		  <!-- END Card with image -->

		</section>
		<!-- /.content -->
	  </div>

@endsection
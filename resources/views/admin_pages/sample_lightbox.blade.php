@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Lightbox Popup</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Sample Page</li>
								<li class="breadcrumb-item active" aria-current="page">Lightbox Popup</li>
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
			  <h3 class="box-title">Single image lightbox</h3>
				<h6 class="subtitle"><code>&lt;a class="image-popup-no-margins" href="..." title="title will be apear here"&gt;&lt;img src="..."/&gt;&lt;/a&gt;</code></h6>
			</div>
			<div class="box-body">
			  <div class="row">
					<div class="col-sm-4">
						<a class="image-popup-vertical-fit" href="../images/gallery/thumb/1.jpg" title="Caption. Can be aligned to any side and contain any HTML.">
							<img src="../images/gallery/thumb/1.jpg" class="img-fluid" alt="" />
						</a>
						<small>Fits horizontally and vertically</small>
					</div>
					<div class="col-sm-4">
						<a class="image-popup-fit-width" href="../images/gallery/thumb/2.jpg" title="This image fits only horizontally.">
							<img src="../images/gallery/thumb/2.jpg" class="img-fluid" alt="" />
						</a>
						<small>Only horizontally</small>
					</div>
					<div class="col-sm-4">
						<a class="image-popup-no-margins" href="../images/gallery/thumb/3.jpg">
							<img src="../images/gallery/thumb/3.jpg" class="img-fluid" alt="" />
						</a>
						<small>Zoom animation, close on top-right.</small>
					</div>
				</div>
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		  <!-- Default box -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Lightbox gallery</h4>
				<h6 class="subtitle"><code>&lt;a href="..." title="title will be apear here"&gt;&lt;img src="..."/&gt;&lt;/a&gt;</code></h6>
			</div>
			<div class="box-body">
			  <div class="popup-gallery">
					<a href="../images/gallery/thumb/4.jpg" title="Caption. Can be aligned to any side and contain any HTML.">
						<img src="../images/gallery/thumb/4.jpg" width="32.5%" alt="" />
					</a>
					<a href="../images/gallery/thumb/5.jpg" title="This image fits only horizontally.">
						<img src="../images/gallery/thumb/5.jpg" width="32.5%" alt="" />
					</a>
					<a href="../images/gallery/thumb/6.jpg">
						<img src="../images/gallery/thumb/6.jpg" width="32.5%" alt="" />
					</a>
				</div> <small>just add code under class="popup-gallery".</small>
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		  <!-- Default box -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Zoom-gallery</h4>
			</div>
			<div class="box-body">
				<div class="zoom-gallery m-t-30">
					<a href="../images/gallery/thumb/7.jpg" title="Caption. Can be aligned to any side and contain any HTML.">
						<img src="../images/gallery/thumb/7.jpg" width="32.5%" alt="" />
					</a>
					<a href="../images/gallery/thumb/8.jpg" title="This image fits only horizontally.">
						<img src="../images/gallery/thumb/8.jpg" width="32.5%" alt="" />
					</a>
					<a href="../images/gallery/thumb/9.jpg">
						<img src="../images/gallery/thumb/9.jpg" width="32.5%" alt="" />
					</a>
				</div>
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		  <!-- Default box -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Css Animation</h4>
			</div>
			<div class="box-body">
				<div id="image-popups" class="row">
					<div class="col-sm-2">
						<a href="../images/gallery/thumb/10.jpg" data-effect="mfp-zoom-in"><img src="../images/gallery/thumb/10.jpg" class="img-fluid" alt="" />
							<br/>Zoom</a>
					</div>
					<div class="col-sm-2">
						<a href="../images/gallery/thumb/11.jpg" data-effect="mfp-newspaper"><img src="../images/gallery/thumb/11.jpg" class="img-fluid" alt="" />
							<br/>Newspaper</a>
					</div>
					<div class="col-sm-2">
						<a href="../images/gallery/thumb/12.jpg" data-effect="mfp-move-horizontal"><img src="../images/gallery/thumb/12.jpg" class="img-fluid" alt="" />
							<br/>Horizontal move</a>
					</div>
					<div class="col-sm-2">
						<a href="../images/gallery/thumb/13.jpg" data-effect="mfp-move-from-top"><img src="../images/gallery/thumb/13.jpg" class="img-fluid" alt="" />
							<br/>Move from top</a>
					</div>
					<div class="col-sm-2">
						<a href="../images/gallery/thumb/14.jpg" data-effect="mfp-3d-unfold"><img src="../images/gallery/thumb/14.jpg" class="img-fluid" alt="" />
							<br/>3d unfold</a>
					</div>
					<div class="col-sm-2">
						<a href="../images/gallery/thumb/15.jpg" data-effect="mfp-zoom-out"><img src="../images/gallery/thumb/15.jpg" class="img-fluid" alt="" />
							<br/>Zoom-out</a>
					</div>
				</div>
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		  <div class="row">
			 <div class="col-lg-6 col-12"> 
			  <!-- Default box -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Popup with Youtube Video</h4>
					<h6 class="subtitle">You can use youtube video with popup just add class <code>popup-youtube</code></h6>
				</div>
				<div class="box-body">
					<a class="popup-youtube btn btn-danger" href="https://multipurposethemes.com/admin/eduadmin-template/main/www.youtube.com/watch?v=sK7riqg2mr4">Open YouTube video</a>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			 </div>
			 <div class="col-lg-6 col-12">
				  <!-- Default box -->
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Google map</h4>
						<h6 class="subtitle">You can use Googlemap with popup just add class with <code>popup-gmaps</code></h6>
					</div>
					<div class="box-body">
						<a class="popup-gmaps btn btn-info" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">Open Google Map</a>
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box --> 
			  </div>
		  </div>

		  <!-- Default box -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Form Popup</h4>
			</div>
			<div class="box-body">
				<a class="popup-with-form btn btn-success" href="#test-form">Open form</a>

				<!-- form itself -->
				<form id="test-form" class="mfp-hide white-popup-block">
					<h1>Form</h1>
					<fieldset style="border:0;">
						<p>Lightbox has an option to automatically focus on the first input. It's strongly recommended to use <code>inline</code> popup type for lightboxes with form instead of <code>ajax</code> (to keep entered data if the user accidentally refreshed the page).</p>
						<div class="form-group">
							<label class="control-label" for="inputName">Name</label>
							<input type="text" class="form-control" id="inputName" name="name" placeholder="Name" required="">
						</div>
						<div class="form-group">
							<label class="control-label" for="inputEmail">Email</label>
							<input type="email" class="form-control" id="inputEmail" name="email" placeholder="example@domain.com" required="">
						</div>
						<div class="form-group">
							<label class="control-label" for="inputPhone">Phone</label>
							<input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="Eg. +447500000000" required="">
						</div>
						<div class="form-group">
							<label class="control-label" for="textarea">Textarea</label>
							<br>
							<textarea class="form-control" id="textarea">Try to resize me to see how popup CSS-based resizing works.</textarea>
						</div>
					</fieldset>
				</form>
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->	  
	  </div>

@endsection
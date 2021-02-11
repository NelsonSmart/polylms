@extends('admin_master')

@section('content')


<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Advanced Box</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Box Cards</li>
								<li class="breadcrumb-item active" aria-current="page">Advanced Box</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Box progress</h4>
					<div class="box-controls pull-right">
					  <div class="progress progress-xs w-100 mb-0 mt-10">
						  <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div> 
				  </div>

				  <div class="box-body">
					<p>Fusce commodo eros a vulputate accumsan. Nulla et mollis nibh. Donec sodales convallis urna luctus pulvinar. Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header">
					<h4 class="box-title">Box switch</h4>
					<div class="box-controls pull-right">
						<label class="switch switch-border switch-danger">
						  <input type="checkbox" checked>
						  <span class="switch-indicator"></span>
						  <span class="switch-description"></span>
						</label>
					</div>
				  </div>

				  <div class="box-body">
					<p>Fusce commodo eros a vulputate accumsan. Nulla et mollis nibh. Donec sodales convallis urna luctus pulvinar. Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Box search</h4>
					  <div class="box-controls pull-right">
						<div class="lookup lookup-circle lookup-right">
						  <input type="text" name="s">
						</div>
					  </div>
				  </div>

				  <div class="box-body">
					<p>Fusce commodo eros a vulputate accumsan. Nulla et mollis nibh. Donec sodales convallis urna luctus pulvinar. Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box box-slided-up">
				  <div class="box-header with-border">
					<h4 class="box-title">Box <strong>slided up</strong></h4>
					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					</ul>
				  </div>

				  <div class="box-body">
					<div class="callout callout-warning mb-0" role="alert">
					  Toggle button requires the box body to be wrapped inside a <code>.box-body</code>.
					</div>
					<div class="box-body">
					  <p>Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit. Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra mi, non consequat velit dui sed lorem.</p>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box box-solid box-inverse box-info">
				  <div class="box-header with-border">
					<h4 class="box-title">Box <strong>options</strong></h4>
					<ul class="box-controls pull-right">
					  <li class="dropdown">
						<a data-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90"></i></a>
						<div class="dropdown-menu dropdown-menu-right">
						  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
						  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
						  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
						  <div class="dropdown-divider"></div>
						  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
						</div>
					  </li>
					</ul>
				  </div>

				  <div class="box-body">
					<label>Other icon suggestions</label>
					<p>
					  <span class="pr-1"><i class="ti-settings"></i></span>
					  <span><i class="ti-menu"></i></span>
					</p>
					<p>Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit. Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra mi, non consequat velit dui sed lorem.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header">
					<h4 class="box-title">Box button</h4>
					<div class="box-controls pull-right">
					  <button class="btn btn-xs btn-info" href="#">Click here</button>
					</div>                
				  </div>

				  <div class="box-body">
					<p>Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit. Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra mi, non consequat velit dui sed lorem.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Box pagination</h4>
					  <div class="box-controls pull-right">
						<nav>
						  <ul class="pagination pagination-sm mb-0">
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
						  </ul>
						</nav>
					  </div>
				  </div>

				  <div class="box-body">
					<p>Donec sodales convallis urna luctus pulvinar. Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit. Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Multi elements</h4>
					  <div class="box-controls pull-right">
						<div class="box-header-actions">
						  <label class="switch switch-border switch-danger">
							<input type="checkbox" checked>
							<span class="switch-indicator"></span>
							<span class="switch-description"></span>
						  </label>
						  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
							<input type="text" name="s" placeholder="Search">
						  </div>
						  <button class="btn btn-xs btn-primary">Button</button>
						</div>
					  </div>
				  </div>

				  <div class="box-body">
					<p>Nulla et mollis nibh. Donec sodales convallis urna luctus pulvinar. Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit. Pellentesque scelerisque, massa ut fringilla mollis.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Scrollable</h4>
				  </div>

				  <div class="box-body">
					<div class="inner-content-div">
					  <p>Wrao the content inside a <code>.box-body .inner-content-div</code> Defoult height 200px.</p>

					  <p>Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra mi, non consequat velit dui sed lorem. Fusce commodo eros a vulputate accumsan. Nulla et mollis nibh. Donec sodales convallis urna luctus pulvinar. Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit. Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra mi, non consequat velit dui sed lorem.</p>

					  <p>Nulla et mollis nibh. Donec sodales convallis urna luctus pulvinar. Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit. Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra mi, non consequat velit dui sed lorem. Fusce commodo eros a vulputate accumsan. Nulla et mollis nibh. Donec sodales convallis urna luctus pulvinar. Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit. Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra mi, non consequat velit dui sed lorem.</p>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header">
					<h4 class="box-title">With <strong>alert</strong></h4>
				  </div>

				  <div class="box-body">
					  <div class="alert alert-success alert-dismissible fade show" role="alert">
						<button type="button" class="close" data-dismiss="alert"><span>×</span></button>
						<strong>Congratulations!</strong><br> You successfully submitted your request. We'll process it soon.
					  </div>

					<p>Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi. Fusce commodo eros a vulputate accumsan. Nulla et mollis nibh. Donec sodales convallis urna luctus pulvinar. Ut vestibulum enim vitae elit luctus, id tincidunt metus suscipit. Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra mi, non consequat velit dui sed lorem.</p>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">With <strong>table</strong></h4>
				  </div>

				  <table class="table">
					<thead>
					  <tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<th scope="row">1</th>
						<td>Easton</td>
						<td>Don</td>
						<td>@easton</td>
					  </tr>
					  <tr>
						<th scope="row">2</th>
						<td>Eric</td>
						<td>Clark</td>
						<td>@eric</td>
					  </tr>
					</tbody>
				  </table>
				</div>
			  </div>
			  <div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Box <strong>controls</strong></h4>
					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide"  href="#"></a></li>	
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					</ul>
				  </div>

				  <div class="box-body">
					<div class="callout callout-warning mb-0" role="alert">
					  Toggle button requires the box content to be wrapped inside a <code>.box-body</code>.
					</div>
					<div class="box-body">
					  <p>Pellentesque scelerisque, massa ut fringilla mollis, sem tortor pharetra mi, non consequat velit dui sed lorem.</p>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		</section>
		<!-- /.content -->
	  </div>

@endsection
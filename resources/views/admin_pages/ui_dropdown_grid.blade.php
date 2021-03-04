@extends('admin_master')

@section('content')


<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Dropdown Grid</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">UI</li>
								<li class="breadcrumb-item active" aria-current="page">Dropdown Grid</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

			<div class="row">
			  <!--Icons!-->
			  <div class="col-xl-4 col-12">

				  <div class="box h-400">
					<div class="box-header">
						<h4 class="box-title">Icons</h4> 
					</div>
					<div class="box-body">
					  <div class="dropdown">
						  <button class="btn btn-rounded btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
						  <div class="dropdown-menu dropdown-grid">
							<a class="dropdown-item" href="#">
							  <span class="icon fa fa-camera"></span>
							</a>
							<a class="dropdown-item" href="#">
							  <span class="icon fa fa-image"></span>
							</a>
							<a class="dropdown-item" href="#">
							  <span class="icon fa fa-folder"></span>
							</a>
							<a class="dropdown-item" href="#">
							  <span class="icon fa fa-play"></span>
							</a>
							<a class="dropdown-item" href="#">
							  <span class="icon fa fa-music"></span>
							</a>
							<a class="dropdown-item" href="#">
							  <span class="icon fa fa-newspaper-o"></span>
							</a>
							<a class="dropdown-item" href="#">
							  <span class="icon fa fa-book"></span>
							</a>
							<a class="dropdown-item" href="#">
							  <span class="icon fa fa-download"></span>
							</a>
							<a class="dropdown-item" href="#">
							  <span class="icon fa fa-gear"></span>
							</a>
						  </div>
						</div>
					</div>
				  </div>						
			  </div>

			  <!--Icons and title!-->
			  <div class="col-xl-4 col-12">
				  <div class="box h-400">
					<div class="box-header">
						<h4 class="box-title">Icons and title</h4> 
					</div>
					<div class="box-body">
					  <div class="dropdown">
						  <button class="btn btn-rounded btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
						  <div class="dropdown-menu dropdown-grid">
							<a class="dropdown-item" href="#">
							  <span class="icon fa fa-camera"></span>
							  <span class="title">Camera</span>
							</a>
							<a class="dropdown-item" href="#">
							  <span class="icon fa fa-image"></span>
							  <span class="title">Gallery</span>
							</a>
							<a class="dropdown-item" href="#">
							  <span class="icon fa fa-folder"></span>
							  <span class="title">Files</span>
							</a>
							<a class="dropdown-item" href="#">
							  <span class="icon fa fa-play"></span>
							  <span class="title">Video</span>
							</a>
							<a class="dropdown-item" href="#">
							  <span class="icon fa fa-music"></span>
							  <span class="title">Music</span>
							</a>
							<a class="dropdown-item" href="#">
							  <span class="icon fa fa-newspaper-o"></span>
							  <span class="title">News</span>
							</a>
							<a class="dropdown-item" href="#">
							  <span class="icon fa fa-book"></span>
							  <span class="title">Contacts</span>
							</a>
							<a class="dropdown-item" href="#">
							  <span class="icon fa fa-download"></span>
							  <span class="title">Download</span>
							</a>
							<a class="dropdown-item" href="#">
							  <span class="icon fa fa-gear"></span>
							  <span class="title">Settings</span>
							</a>
						  </div>
						</div>
					</div>
				  </div>
			  </div>

			  <!--Color icons!-->
			  <div class="col-xl-4 col-12">
				  <div class="box h-400">
					<div class="box-header">
						<h4 class="box-title">Color icons</h4> 
					</div>
					<div class="box-body">
					  <div class="dropdown">
						  <button class="btn btn-rounded btn-success dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
						  <div class="dropdown-menu dropdown-grid">
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/compact_camera.svg" alt="compact_camera.svg"/>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/stack_of_photos.svg" alt="stack_of_photos.svg"/>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/folder.svg" alt="folder.svg"/>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/start.svg" alt="start.svg"/>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/music.svg" alt="music.svg"/>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/news.svg" alt="news.svg"/>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/contacts.svg" alt="contacts.svg"/>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/download.svg" alt="download.svg"/>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/settings.svg" alt="settings.svg"/>
							</a>
						  </div>
						</div>
					</div>
				  </div>						
			  </div>

			  <!--Color icons and title!-->
			  <div class="col-xl-4 col-12">
				  <div class="box h-400">
					<div class="box-header">
						<h4 class="box-title">Color icons and title</h4> 
					</div>
					<div class="box-body">
					  <div class="dropdown">
						  <button class="btn btn-rounded btn-info dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
						  <div class="dropdown-menu dropdown-grid">
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/compact_camera.svg" alt="compact_camera.svg"/>
							  <span class="title">Camera</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/stack_of_photos.svg" alt="stack_of_photos.svg"/>
							  <span class="title">Gallery</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/folder.svg" alt="folder.svg"/>
							  <span class="title">Files</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/start.svg" alt="start.svg"/>
							  <span class="title">Video</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/music.svg" alt="music.svg"/>
							  <span class="title">Music</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/news.svg" alt="news.svg"/>
							  <span class="title">News</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/contacts.svg" alt="contacts.svg"/>
							  <span class="title">Contacts</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/download.svg" alt="download.svg"/>
							  <span class="title">Download</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/settings.svg" alt="settings.svg"/>
							  <span class="title">Settings</span>
							</a>
						  </div>
						</div>
					</div>
				  </div>
			  </div>


			  <!-- 2 columns!-->
			  <div class="col-xl-4 col-12">
				  <div class="box h-400">
					<div class="box-header">
						<h4 class="box-title">2 cols</h4>
						<p class="subtitle"><code>.cols-2</code> applies to <em>.dropdown-grid</em></p>
					</div>
					<div class="box-body">
					  <div class="dropdown">
						  <button class="btn btn-rounded btn-warning dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
						  <div class="dropdown-menu dropdown-grid cols-2">
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/compact_camera.svg" alt="compact_camera.svg"/>
							  <span class="title">Camera</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/stack_of_photos.svg" alt="stack_of_photos.svg"/>
							  <span class="title">Gallery</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/folder.svg" alt="folder.svg"/>
							  <span class="title">Files</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/start.svg" alt="start.svg"/>
							  <span class="title">Video</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/music.svg" alt="music.svg"/>
							  <span class="title">Music</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/news.svg" alt="news.svg"/>
							  <span class="title">News</span>
							</a>
						  </div>
						</div>
					</div>
				  </div>
			  </div>

			  <!--4 columns!-->
			  <div class="col-xl-4 col-12">
				  <div class="box h-400">
					<div class="box-header">
						<h4 class="box-title">4 cols</h4>
						<p class="subtitle"><code>.cols-4</code> applies to <em>.dropdown-grid</em></p>
					</div>
					<div class="box-body">
					  <div class="dropdown">
						  <button class="btn btn-rounded btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
						  <div class="dropdown-menu dropdown-grid cols-4">
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/compact_camera.svg" alt="compact_camera.svg"/>
							  <span class="title">Camera</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/stack_of_photos.svg" alt="stack_of_photos.svg"/>
							  <span class="title">Gallery</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/folder.svg" alt="folder.svg"/>
							  <span class="title">Files</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/phone.svg" alt="phone.svg"/>
							  <span class="title">Calls</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/start.svg" alt="start.svg"/>
							  <span class="title">Video</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/music.svg" alt="music.svg"/>
							  <span class="title">Music</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/news.svg" alt="news.svg"/>
							  <span class="title">News</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/contacts.svg" alt="contacts.svg"/>								
							  <span class="title">Contacts</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/calculator.svg" alt="calculator.svg"/>	
							  <span class="title">Calculator</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/alarm_clock.svg" alt="alarm_clock.svg"/>	
							  <span class="title">Clock</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/download.svg" alt="download.svg"/>	
							  <span class="title">Download</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/settings.svg" alt="settings.svg"/>	
							  <span class="title">Settings</span>
							</a>
						  </div>
						</div>
					</div>
				  </div>
			  </div>

			  <!--Disabled item!-->
			  <div class="col-xl-4 col-12">
				  <div class="box h-400">
					<div class="box-header">
						<h4 class="box-title">Disabled item</h4>
						<p class="subtitle"><code>.disabled</code> applies to <em>.dropdown-item</em></p>
					</div>
					<div class="box-body">
					  <div class="dropdown">
						  <button class="btn btn-rounded btn-outline btn-info dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
						  <div class="dropdown-menu dropdown-grid">
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/compact_camera.svg" alt="compact_camera.svg"/>	
							  <span class="title">Camera</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/stack_of_photos.svg" alt="stack_of_photos.svg"/>	
							  <span class="title">Gallery</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/folder.svg" alt="folder.svg"/>	
							  <span class="title">Files</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/start.svg" alt="start.svg"/>	
							  <span class="title">Video</span>
							</a>
							<a class="dropdown-item disabled" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/music.svg" alt="music.svg"/>	
							  <span class="title">Music</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/news.svg" alt="news.svg"/>	
							  <span class="title">News</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/contacts.svg" alt="contacts.svg"/>	
							  <span class="title">Contacts</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/download.svg" alt="download.svg"/>	
							  <span class="title">Download</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/settings.svg" alt="settings.svg"/>	
							  <span class="title">Settings</span>
							</a>
						  </div>
						</div>
					</div>
				  </div>
			  </div>

			  <!--Active item!-->
			  <div class="col-xl-4 col-12">
				  <div class="box h-400">
					<div class="box-header">
						<h4 class="box-title">Active item</h4>
						<p class="subtitle"><code>.active</code> applies to <em>.dropdown-item</em></p>
					</div>
					<div class="box-body">
					  <div class="dropdown">
						  <button class="btn btn-rounded btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
						  <div class="dropdown-menu dropdown-grid">
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/compact_camera.svg" alt="compact_camera.svg"/>	
							  <span class="title">Camera</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/stack_of_photos.svg" alt="stack_of_photos.svg"/>	
							  <span class="title">Gallery</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/folder.svg" alt="folder.svg"/>	
							  <span class="title">Files</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/start.svg" alt="start.svg"/>	
							  <span class="title">Video</span>
							</a>
							<a class="dropdown-item active" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/music.svg" alt="music.svg"/>	
							  <span class="title">Music</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/news.svg" alt="news.svg"/>	
							  <span class="title">News</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/contacts.svg" alt="contacts.svg"/>	
							  <span class="title">Contacts</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/download.svg" alt="download.svg"/>	
							  <span class="title">Download</span>
							</a>
							<a class="dropdown-item" href="#">
							  <img class="icon" src="https://www.multipurposethemes.com/admin/eduadmin-template/assets/vendor_components/flat-color-icons/SVG/settings.svg" alt="settings.svg"/>	
							  <span class="title">Settings</span>
							</a>
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
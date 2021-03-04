@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Project DashBoard</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Extra</li>
								<li class="breadcrumb-item active" aria-current="page">Project DashBoard</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>  

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			<div class="col-xl-4 connectedSortable">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Style 1</h4>

				  <ul class="box-controls pull-right">
					<li><a class="box-btn-close" href="#"></a></li>
					<li><a class="box-btn-slide" href="#"></a></li>	
					<li><a class="box-btn-fullscreen" href="#"></a></li>
				  </ul>
				</div>
				<div class="box-body p-0">
				  <ul class="todo-list">
					<li>
					  <!-- drag handle -->
					  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <!-- checkbox -->
					  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
					  <label for="basic_checkbox_1" class="mb-0 h-15 ml-15"></label>
					  <!-- todo text -->
					  <span class="text-line">Nulla vitae purus</span>
					  <!-- Emphasis label -->
					  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
					  <!-- General tools such as edit or delete-->
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					  </div>
					</li>
					<li>
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <!-- checkbox -->
					  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
					  <label for="basic_checkbox_2" class="mb-0 h-15 ml-15"></label>
					  <span class="text-line">Phasellus interdum</span>
					  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					  </div>
					</li>
					<li>
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <!-- checkbox -->
					  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
					  <label for="basic_checkbox_3" class="mb-0 h-15 ml-15"></label>
					  <span class="text-line">Quisque sodales</span>
					  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					  </div>
					</li>
					<li>
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <!-- checkbox -->
					  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
					  <label for="basic_checkbox_4" class="mb-0 h-15 ml-15"></label>
					  <span class="text-line">Proin nec mi porta</span>
					  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					  </div>
					</li>
					<li>
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <!-- checkbox -->
					  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
					  <label for="basic_checkbox_5" class="mb-0 h-15 ml-15"></label>
					  <span class="text-line">Maecenas scelerisque</span>
					  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					  </div>
					</li>
					<li>
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <!-- checkbox -->
					  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
					  <label for="basic_checkbox_6" class="mb-0 h-15 ml-15"></label>
					  <span class="text-line">Vivamus nec orci</span>
					  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					  </div>
					</li>
				  </ul>
				</div>
				<!-- /.box-body -->
			  </div>
			</div>
			<div class="col-xl-4 connectedSortable">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Style 2</h4>

				  <ul class="box-controls pull-right">
					<li><a class="box-btn-close" href="#"></a></li>
					<li><a class="box-btn-slide" href="#"></a></li>	
					<li><a class="box-btn-fullscreen" href="#"></a></li>
				  </ul>
				</div>
				<div class="box-body p-0">
				  <ul class="todo-list">
					<li class="p-15">
					  <div class="box p-15 mb-0 d-block bb-2 border-danger">
						 <!-- drag handle -->
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
						  <label for="basic_checkbox_7" class="mb-0 h-15 ml-15"></label>
						  <span class="pull-right badge badge-danger">Urgent</span>
						  <span class="font-size-18 text-line"><a href="#">Nulla vitae purus</a> </span>
						  <ul class="list-inline mb-0 mt-15 ml-30">
							<li>
								<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="Username">
									<img src="../images/avatar/1.jpg" alt="img" class="avatar avatar-sm">
								</a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="5 Tasks">
									<i class="mdi mdi-format-align-left"></i>
								</a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="3 Comments">
									<i class="mdi mdi-comment"></i>
								</a>
							</li>
						  </ul>
					  </div>
					</li>
					<li class="p-15">
					  <div class="box p-15 mb-0 d-block bb-2 border-warning">
						 <!-- drag handle -->
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
						  <label for="basic_checkbox_8" class="mb-0 h-15 ml-15"></label>
						  <span class="pull-right badge badge-warning">High</span>
						  <span class="font-size-18 text-line"><a href="#">Maecenas scelerisque</a> </span>
						  <ul class="list-inline mb-0 mt-15 ml-30">
							<li>
								<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="Username">
									<img src="../images/avatar/2.jpg" alt="img" class="avatar avatar-sm">
								</a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="5 Tasks">
									<i class="mdi mdi-format-align-left"></i>
								</a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="3 Comments">
									<i class="mdi mdi-comment"></i>
								</a>
							</li>
						  </ul>
					  </div>
					</li>
					<li class="p-15">
					  <div class="box p-15 mb-0 d-block bb-2 border-secondary">
						 <!-- drag handle -->
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
						  <label for="basic_checkbox_9" class="mb-0 h-15 ml-15"></label>
						  <span class="font-size-18 text-line"><a href="#">Vivamus nec orci</a> </span>
						  <ul class="list-inline mb-0 mt-15 ml-30">
							<li>
								<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="Username">
									<img src="../images/avatar/3.jpg" alt="img" class="avatar avatar-sm">
								</a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="5 Tasks">
									<i class="mdi mdi-format-align-left"></i>
								</a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="3 Comments">
									<i class="mdi mdi-comment"></i>
								</a>
							</li>
						  </ul>
					  </div>
					</li>

				  </ul>
				</div>
				<!-- /.box-body -->
			  </div>
			</div>
			<div class="col-xl-4 connectedSortable">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Style 3</h4>

				  <ul class="box-controls pull-right">
					<li><a class="box-btn-close" href="#"></a></li>
					<li><a class="box-btn-slide" href="#"></a></li>	
					<li><a class="box-btn-fullscreen" href="#"></a></li>
				  </ul>
				</div>
				<div class="box-body p-10">
				  <ul class="todo-list">
					<li class="bg-light p-0 mb-15">
					  <div class="position-relative p-20">
						  <!-- drag handle -->
						  <div class="handle handle2"></div>
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
						  <label for="basic_checkbox_10" class="mb-0 h-15 ml-15"></label>
						  <!-- todo text -->
						  <span class="text-line font-size-18">Phasellus interdum</span>
						  <!-- General tools such as edit or delete-->
						  <div class="pull-right d-block text-dark flexbox">
							<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
							<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="Remove"><i class="fa fa-trash-o"></i></a>
						  </div>
						  <div class="mt-5 ml-50 pl-5">Sed ut perspiciatis unde omnis iste natus error sit.</div>
						  <div class="mt-5 ml-50 pl-5"><em>21/06/2018</em></div>
						</div>
					</li>
					<li class="bg-light p-0 mb-15">
					  <div class="position-relative p-20">
						  <!-- drag handle -->
						  <div class="handle handle2"></div>
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_11" class="filled-in">
						  <label for="basic_checkbox_11" class="mb-0 h-15 ml-15"></label>
						  <!-- todo text -->
						  <span class="text-line font-size-18">Floor cool cinders</span>
						  <!-- General tools such as edit or delete-->
						  <div class="pull-right d-block text-dark flexbox">
							<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
							<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="Remove"><i class="fa fa-trash-o"></i></a>
						  </div>
						  <div class="mt-5 ml-50 pl-5">Sed ut perspiciatis unde omnis iste natus error sit.</div>
						  <div class="mt-5 ml-50 pl-5"><em>21/06/2018</em></div>
						</div>
					</li>
					<li class="bg-light p-0 mb-15">
					  <div class="position-relative p-20">
						  <!-- drag handle -->
						  <div class="handle handle2"></div>
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_12" class="filled-in">
						  <label for="basic_checkbox_12" class="mb-0 h-15 ml-15"></label>
						  <!-- todo text -->
						  <span class="text-line font-size-18">Floor cool cinders</span>
						  <!-- General tools such as edit or delete-->
						  <div class="pull-right d-block text-dark flexbox">
							<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
							<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="Remove"><i class="fa fa-trash-o"></i></a>
						  </div>
						  <div class="mt-5 ml-50 pl-5">Sed ut perspiciatis unde omnis iste natus error sit.</div>
						  <div class="mt-5 ml-50 pl-5"><em>21/06/2018</em></div>
						</div>
					</li>

				  </ul>
				</div>
				<!-- /.box-body -->
			  </div>
			</div>
			<div class="col-xl-4 connectedSortable">
			  <div class="box box-solid box-primary">
				<div class="box-header with-border">
				  <h4 class="box-title">Upcoming</h4>

				  <ul class="box-controls pull-right">
					<li><a class="box-btn-close" href="#"></a></li>
					<li><a class="box-btn-slide" href="#"></a></li>	
					<li><a class="box-btn-fullscreen" href="#"></a></li>
				  </ul>
				</div>
				<div class="box-body p-0">
				  <ul class="todo-list">
					<li>
					  <!-- drag handle -->
					  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <!-- checkbox -->
					  <input type="checkbox" id="basic_checkbox_13" class="filled-in">
					  <label for="basic_checkbox_13" class="mb-0 h-15 ml-15"></label>
					  <!-- todo text -->
					  <span class="text-line">Nulla vitae purus</span>
					  <!-- Emphasis label -->
					  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
					  <!-- General tools such as edit or delete-->
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					  </div>
					</li>
					<li>
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <!-- checkbox -->
					  <input type="checkbox" id="basic_checkbox_14" class="filled-in">
					  <label for="basic_checkbox_14" class="mb-0 h-15 ml-15"></label>
					  <span class="text-line">Phasellus interdum</span>
					  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					  </div>
					</li>
					<li>
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <!-- checkbox -->
					  <input type="checkbox" id="basic_checkbox_15" class="filled-in">
					  <label for="basic_checkbox_15" class="mb-0 h-15 ml-15"></label>
					  <span class="text-line">Quisque sodales</span>
					  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					  </div>
					</li>
					<li>
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <!-- checkbox -->
					  <input type="checkbox" id="basic_checkbox_16" class="filled-in">
					  <label for="basic_checkbox_16" class="mb-0 h-15 ml-15"></label>
					  <span class="text-line">Proin nec mi porta</span>
					  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					  </div>
					</li>
					<li>
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <!-- checkbox -->
					  <input type="checkbox" id="basic_checkbox_17" class="filled-in">
					  <label for="basic_checkbox_17" class="mb-0 h-15 ml-15"></label>
					  <span class="text-line">Maecenas scelerisque</span>
					  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					  </div>
					</li>
					<li>
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
					  <!-- checkbox -->
					  <input type="checkbox" id="basic_checkbox_18" class="filled-in">
					  <label for="basic_checkbox_18" class="mb-0 h-15 ml-15"></label>
					  <span class="text-line">Vivamus nec orci</span>
					  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
					  <div class="tools">
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					  </div>
					</li>
				  </ul>
				</div>
				<!-- /.box-body -->
			  </div>
			</div>
			<div class="col-xl-4 connectedSortable">
			  <div class="box box-solid box-warning">
				<div class="box-header with-border">
				  <h4 class="box-title">In Progress</h4>
				  <ul class="box-controls pull-right">
					<li><a class="box-btn-close" href="#"></a></li>
					<li><a class="box-btn-slide" href="#"></a></li>	
					<li><a class="box-btn-fullscreen" href="#"></a></li>
				  </ul>
				</div>
				<div class="box-body p-10">
				  <ul class="todo-list">
					<li class="b-1 p-0 mb-15">
					  <div class="position-relative p-20">
						  <!-- drag handle -->
						  <div class="handle handle2"></div>
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_19" class="filled-in">
						  <label for="basic_checkbox_19" class="mb-0 h-15 ml-15"></label>
						  <!-- todo text -->
						  <span class="text-line font-size-18">Phasellus interdum</span>
						  <!-- General tools such as edit or delete-->
						  <div class="pull-right d-block text-dark flexbox">
							<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
							<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="Remove"><i class="fa fa-trash-o"></i></a>
						  </div>
						  <div class="mt-5 ml-50 pl-5">Sed ut perspiciatis unde omnis iste natus error sit.</div>
						  <div class="mt-5 ml-50 pl-5"><em>21/06/2018</em></div>
						</div>
					</li>
					<li class="b-1 p-0 mb-15">
					  <div class="position-relative p-20">
						  <!-- drag handle -->
						  <div class="handle handle2"></div>
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_20" class="filled-in">
						  <label for="basic_checkbox_20" class="mb-0 h-15 ml-15"></label>
						  <!-- todo text -->
						  <span class="text-line font-size-18">Floor cool cinders</span>
						  <!-- General tools such as edit or delete-->
						  <div class="pull-right d-block text-dark flexbox">
							<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
							<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="Remove"><i class="fa fa-trash-o"></i></a>
						  </div>
						  <div class="mt-5 ml-50 pl-5">Sed ut perspiciatis unde omnis iste natus error sit.</div>
						  <div class="mt-5 ml-50 pl-5"><em>21/06/2018</em></div>
						</div>
					</li>
					<li class="b-1 p-0 mb-15">
					  <div class="position-relative p-20">
						  <!-- drag handle -->
						  <div class="handle handle2"></div>
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_21" class="filled-in">
						  <label for="basic_checkbox_21" class="mb-0 h-15 ml-15"></label>
						  <!-- todo text -->
						  <span class="text-line font-size-18">Floor cool cinders</span>
						  <!-- General tools such as edit or delete-->
						  <div class="pull-right d-block text-dark flexbox">
							<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
							<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="Remove"><i class="fa fa-trash-o"></i></a>
						  </div>
						  <div class="mt-5 ml-50 pl-5">Sed ut perspiciatis unde omnis iste natus error sit.</div>
						  <div class="mt-5 ml-50 pl-5"><em>21/06/2018</em></div>
						</div>
					</li>

				  </ul>
				</div>
				<!-- /.box-body -->
			  </div>
			</div>
			<div class="col-xl-4 connectedSortable">
			  <div class="box box-solid box-success">
				<div class="box-header with-border">
				  <h4 class="box-title">Complete</h4>
				  <ul class="box-controls pull-right">
					<li><a class="box-btn-close" href="#"></a></li>
					<li><a class="box-btn-slide" href="#"></a></li>	
					<li><a class="box-btn-fullscreen" href="#"></a></li>
				  </ul>
				</div>
				<div class="box-body p-0">
				  <ul class="todo-list">
					<li class="p-15">
					  <div class="box p-15 mb-0 d-block bb-2 border-danger">
						 <!-- drag handle -->
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_22" class="filled-in">
						  <label for="basic_checkbox_22" class="mb-0 h-15 ml-15"></label>
						  <span class="pull-right badge badge-danger">Urgent</span>
						  <span class="font-size-18 text-line"><a href="#">Nulla vitae purus</a> </span>
						  <ul class="list-inline mb-0 mt-15 ml-30">
							<li>
								<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="Username">
									<img src="../images/avatar/1.jpg" alt="img" class="avatar avatar-sm">
								</a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="5 Tasks">
									<i class="mdi mdi-format-align-left"></i>
								</a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="3 Comments">
									<i class="mdi mdi-comment"></i>
								</a>
							</li>
						  </ul>
					  </div>
					</li>
					<li class="p-15">
					  <div class="box p-15 mb-0 d-block bb-2 border-warning">
						 <!-- drag handle -->
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_23" class="filled-in">
						  <label for="basic_checkbox_23" class="mb-0 h-15 ml-15"></label>
						  <span class="pull-right badge badge-warning">High</span>
						  <span class="font-size-18 text-line"><a href="#">Maecenas scelerisque</a> </span>
						  <ul class="list-inline mb-0 mt-15 ml-30">
							<li>
								<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="Username">
									<img src="../images/avatar/2.jpg" alt="img" class="avatar avatar-sm">
								</a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="5 Tasks">
									<i class="mdi mdi-format-align-left"></i>
								</a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="3 Comments">
									<i class="mdi mdi-comment"></i>
								</a>
							</li>
						  </ul>
					  </div>
					</li>
					<li class="p-15">
					  <div class="box p-15 mb-0 d-block bb-2 border-secondary">
						 <!-- drag handle -->
						  <span class="handle">
							<i class="fa fa-ellipsis-v"></i>
							<i class="fa fa-ellipsis-v"></i>
						  </span>
						  <!-- checkbox -->
						  <input type="checkbox" id="basic_checkbox_24" class="filled-in">
						  <label for="basic_checkbox_24" class="mb-0 h-15 ml-15"></label>
						  <span class="font-size-18 text-line"><a href="#">Vivamus nec orci</a> </span>
						  <ul class="list-inline mb-0 mt-15 ml-30">
							<li>
								<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="Username">
									<img src="../images/avatar/3.jpg" alt="img" class="avatar avatar-sm">
								</a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="5 Tasks">
									<i class="mdi mdi-format-align-left"></i>
								</a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" data-container="body" title="" data-original-title="3 Comments">
									<i class="mdi mdi-comment"></i>
								</a>
							</li>
						  </ul>
					  </div>
					</li>

				  </ul>
				</div>
				<!-- /.box-body -->
			  </div>
			</div>
		  </div>
		</section>
		<!-- /.content -->
	  </div>

@endsection
@extends('admin_master')

@section('content')

<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Chart widgets</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Widgets</li>
								<li class="breadcrumb-item active" aria-current="page">Chart widgets</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">

			<div class="row">
				
				<div class="col-xl-6">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Orders Overview</h4>
							<div class="box-controls pull-right">
								<ul class="nav nav-pills nav-pills-sm" role="tablist">
									<li class="nav-item">
										<a class="nav-link py-2 px-4 b-0" data-toggle="tab" href="#">
											<span class="nav-text base-font">Month</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link py-2 px-4 b-0" data-toggle="tab" href="#">
											<span class="nav-text base-font">Week</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link py-2 px-4 b-0 active" data-toggle="tab" href="#">
											<span class="nav-text base-font">Day</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-8">
									<div id="charts_widget_1_chart"></div>
								</div>
								<div class="col-4 d-flex flex-column">
									<div class="flex-grow-1 bg-danger p-30 flex-grow-1 bg-img"
										style="background-position: calc(100% + 0.5rem) bottom; background-size: auto 70%; background-image: url(https://www.multipurposethemes.com/admin/eduadmin-template/images/svg-icon/color-svg/custom-3.svg)">
										<h4 class="ont-weight-500">User Confidence</h4>
										<p class="my-10">
											Boost marketing & sales<br/>through product confidence.
										</p>
										<a href="#" class="btn btn-warning-light py-2 px-6">Learn</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xl-6">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Profit
							</h4>
							<div class="box-controls pull-right">
								<ul class="nav nav-pills nav-pills-sm" role="tablist">
									<li class="nav-item">
										<a class="nav-link py-2 px-4 b-0" data-toggle="tab" href="#">
											<span class="nav-text base-font">Month</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link py-2 px-4 b-0" data-toggle="tab" href="#">
											<span class="nav-text base-font">Week</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link py-2 px-4 b-0 active" data-toggle="tab" href="#">
											<span class="nav-text base-font">Day</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-4 d-flex flex-column">
									<div class="bg-warning-light p-30">
										<div class="d-flex align-items-center mb-30">
											<div class="mr-15 bg-white h-40 w-40 l-h-50 rounded text-center">
												  <span class="icon-Library font-size-18 text-success"><span class="path1"></span><span class="path2"></span></span>
											</div>
											<div class="d-flex flex-column font-weight-500">
												<a href="#" class="text-dark hover-primary font-size-16">$800</a>
												<span class="text-muted">Duis faucibus lorem</span>
											</div>
										</div>
										<div class="d-flex align-items-center mb-30">
											<div class="mr-15 bg-white h-40 w-40 l-h-50 rounded text-center">
												<span class="icon-Write font-size-18 text-warning"><span class="path1"></span><span class="path2"></span></span>
											</div>
											<div class="d-flex flex-column font-weight-500">
												<a href="#" class="text-dark hover-danger font-size-16">$400</a>
												<span class="text-muted">Sed quis augue </span>
											</div>
										</div>
										<div class="d-flex align-items-center mb-30">
											<div class="mr-15 bg-white h-40 w-40 l-h-50 rounded text-center">
												<span class="icon-Group-chat font-size-18 text-primary"><span class="path1"></span><span class="path2"></span></span>
											</div>
											<div class="d-flex flex-column font-weight-500">
												<a href="#" class="text-dark hover-success font-size-16">$900</a>
												<span class="text-muted">Phasellus vitae</span>
											</div>
										</div>
										<div class="d-flex align-items-center">
											<div class="mr-15 bg-white h-40 w-40 l-h-50 rounded text-center">
												<span class="icon-Attachment1 font-size-18 text-info"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
											</div>
											<div class="d-flex flex-column font-weight-500">
												<a href="#" class="text-dark hover-info font-size-16">$80</a>
												<span class="text-muted">Aliquam in magna</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-8">
									<div id="charts_widget_2_chart"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-xl-4">
					<div class="box">
						<div class="box-body">
							<div class="d-flex">
								<h3 class="font-weight-600 mb-0">1,125</h3>
								<span class="badge badge-info badge-pill align-self-center ml-auto">+55,6%</span>
							</div>
							<div>
								User online
								<div class="text-muted font-size-16">845 avg</div>
							</div>
						</div>
						<div class="container-fluid">
							<div id="chart_bar_basic"></div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-xl-4">

					<!-- Basic line chart -->
					<div class="box">
						<div class="box-body">
							<div class="d-flex">
								<h3 class="font-weight-600 mb-0">3,952</h3>
							</div>

							<div>
								Orders Monthly
								<div class="text-muted font-size-16">9,758 avg</div>
							</div>
						</div>

						<div id="line_chart_simple"></div>
					</div>
					<!-- /basic line chart -->

				</div>

				<div class="col-md-6 col-xl-4">

					<!-- Basic sparklines -->
					<div class="box">
						<div class="box-body">
							<div class="d-flex">
								<h3 class="font-weight-600 mb-0">85.4%</h3>
								<div class="list-icons ml-auto">
									<div class="list-icons-item dropdown">
										<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item">Update data</a>
											<a href="#" class="dropdown-item">Detailed log</a>
											<a href="#" class="dropdown-item">Statistics</a>
											<a href="#" class="dropdown-item">Clear list</a>
										</div>
									</div>
								</div>
							</div>

							<div>
								Current server loading
								<div class="text-muted font-size-16">24.6% avg</div>
							</div>
						</div>

						<div id="sparklines_basic"></div>
					</div>
					<!-- /basic sparklines -->

				</div>
			</div>

			<div class="row">

				<div class="col-md-6 col-xl-4">

					<!-- Bar chart in colored card -->
					<div class="box bg-info">
						<div class="box-body">
							<div class="d-flex">
								<h3 class="font-weight-600 mb-0">8,958</h3>
								<span class="badge badge-danger badge-pill align-self-center ml-auto">+22,6%</span>
							</div>

							<div>
								User online
								<div class="font-size-16">854 avg</div>
							</div>
						</div>

						<div class="container-fluid">
							<div id="chart_bar_color"></div>
						</div>
					</div>
					<!-- /bar chart in colored card -->

				</div>

				<div class="col-md-6 col-xl-4">

					<!-- Line chart in colored card -->
					<div class="box bg-warning">
						<div class="box-body">
							<div class="d-flex">
								<h3 class="font-weight-600 mb-0">9,854</h3>
							</div>

							<div>
								Orders Monthly
								<div class="font-size-16">6,854 avg</div>
							</div>
						</div>

						<div id="line_chart_color"></div>
					</div>
					<!-- /line chart in colored card -->

				</div>

				<div class="col-md-6 col-xl-4">

					<!-- Sparklines in colored card -->
					<div class="box bg-primary">
						<div class="box-body">
							<div class="d-flex">
								<h3 class="font-weight-600 mb-0">85.4%</h3>
								<div class="list-icons ml-auto">
									<div class="list-icons-item dropdown">
										<a href="#" class="list-icons-item dropdown-toggle text-white" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item">Update data</a>
											<a href="#" class="dropdown-item">Detailed log</a>
											<a href="#" class="dropdown-item">Statistics</a>
											<a href="#" class="dropdown-item">Clear list</a>
										</div>
									</div>
								</div>
							</div>

							<div>
								Current server loading
								<div class="font-size-16">85.6% avg</div>
							</div>
						</div>

						<div id="sparklines_color"></div>
					</div>
					<!-- /sparklines in colored card -->

				</div>
			</div>
			<!-- /widgets with charts -->

		  <div class="row">  

			  <div class="col-md-6">
					<div class="box bg-success-light">
					  <div class="box-body">
						  <div class="media align-items-center p-0">
							  <h3 class="mx-0 mb-5 font-weight-500">Issue Reports</h3>
						  </div>
						  <div class="flexbox align-items-center mt-5">
							<div>
							  <h4 class="no-margin"><span>-27,497</span></h4>
							</div>
							<div class="text-right">
							  <h4 class="no-margin"><span>-1.35%</span></h4>
							</div>
						  </div>
					</div>
					<div class="box-footer p-0 no-border bg-transparent">
						<div class="chart"><canvas id="chartjs3" class="h-80"></canvas></div>
					</div>
				 </div>
			  </div>

			  <div class="col-md-6">
					<div class="box bg-primary-light">
					  <div class="box-body">
						  <div class="media align-items-center p-0">
							  <h3 class="mx-0 mb-5 font-weight-500">Orders</h3>
						  </div>
						  <div class="flexbox align-items-center mt-5">
							<div>
							  <h4 class="no-margin"><span>17,800</span></h4>
							</div>
							<div class="text-right">
							  <h4 class="no-margin"><span>+1.35%</span></h4>
							</div>
						  </div>
					</div>
					<div class="box-footer p-0 no-border bg-transparent">
						<div class="chart"><canvas id="chartjs4" class="h-80"></canvas></div>
					</div>
				 </div>
			  </div>

			  <div class="col-md-6">
				<div class="box">
				  <div class="box-body">
					  <div class="media align-items-center p-0">
						  <h3 class="mx-0 mb-5 font-weight-500">Daily Sales</h3>
					  </div>
					  <div class="flexbox align-items-center mt-5">
						<div>
						  <h4 class="no-margin"><span class="text-primary">+$17,800</span></h4>
						</div>
						<div class="text-right">
						  <h4 class="no-margin"><span class="text-success">+1.35%</span></h4>
						</div>
					  </div>
				</div>
				<div class="box-footer p-0 no-border">
					<div class="chart"><canvas id="chartjs1" class="h-80"></canvas></div>
				</div>
			   </div>
			</div>

			  <div class="col-md-6">
					<div class="box">
					  <div class="box-body">
						  <div class="media align-items-center p-0">
							  <h3 class="mx-0 mb-5 font-weight-500">Member Profit</h3>
						  </div>
						  <div class="flexbox align-items-center mt-5">
							<div>
							  <h4 class="no-margin"><span class="text-success">+$17,800</span></h4>
							</div>
							<div class="text-right">
							  <h4 class="no-margin"><span class="text-danger">-1.35%</span></h4>
							</div>
						  </div>
					</div>
					<div class="box-footer p-0 no-border">
						<div class="chart"><canvas id="chartjs2" class="h-80"></canvas></div>
					</div>
				 </div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box box-body">
				  <div class="flexbox">
					<h6 class="text-uppercase">Analysis</h6>
					<h6><i class="ion-android-arrow-dropup text-success font-size-18 mr-1"></i> %20</h6>
				  </div>

				  <ul class="list-inline my-10">
					<li class="px-10">
					  <h6 class="mb-0 text-bold">8952</h6>
					  <small>Abu Dhabi</small>
					</li>

					<li class="br-1 bl-1 px-10">
					  <h6 class="mb-0 text-bold">7458</h6>
					  <small>Miami</small>
					</li>

					<li class="px-10">
					  <h6 class="mb-0 text-bold">3254</h6>
					  <small>London</small>
					</li>
				  </ul>

				  <div id="linearea">1,3,5,4,6,8,7,9,7,8,10,16,14,10</div>
				</div>
			  </div>		  

			  <div class="col-md-6 col-lg-4">
				<div class="box box-body">
				  <div class="flexbox">
					<h6 class="text-uppercase">Analysis</h6>
					<h6><i class="ion-android-arrow-dropup text-success font-size-18 mr-1"></i> %20</h6>
				  </div>

				  <ul class="list-inline my-10">
					<li class="px-10">
					  <h6 class="mb-0 text-bold">76.58%</h6>
					  <small>All Time</small>
					</li>

					<li class="br-1 bl-1 px-10">
					  <h6 class="mb-0 text-bold">35.12%</h6>
					  <small>Last Month</small>
					</li>

					<li class="px-10">
					  <h6 class="mb-0 text-bold">6.66%</h6>
					  <small>Today</small>
					</li>
				  </ul>

				  <div id="baralc" class="text-center"></div>
				</div>
			  </div>		  

			  <div class="col-md-6 col-lg-4">
				<div class="box bg-img" style="background-image: url(../images/gallery/thumb/9.jpg);" data-overlay="5">
				  <div class="box-body text-white">
					<div class="font-size-50 font-weight-200">6,374</div>
					<p>Increase in page views</p>
				  </div>

				  <div id="lineIncrease"></div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box">
				  <div class="box-body bg-img" style="background-image: url(../images/gallery/thumb/5.jpg);" data-overlay="5">
					<div class="flexbox mb-20">
					  <h6 class="text-uppercase text-white">Today</h6>
					  <h6 class="text-white"><i class="ion-android-arrow-dropup"></i> %20</h6>
					</div>
					<div id="lineToday"></div>
				  </div>

				  <div class="box-body">
					<ul class="flexbox flex-justified align-items-center">
					  <li class="text-right">
						<div class="font-size-20 text-success">%60</div>
						<small class="text-uppercase">Direct sale</small>
					  </li>

					  <li class="text-center px-2">
						<div class="easypie" data-percent="53">
						  <span class="percent">53%</span>
						</div>

					  </li>

					  <li class="text-left">
						<div class="font-size-20 text-warning">%40</div>
						<small class="text-uppercase">Whole sale</small>
					  </li>
					</ul>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box">
				  <div class="box-body bg-primary">
					<div class="flexbox mb-20">
					  <h6 class="text-uppercase text-white">Analysis</h6>
					  <h6 class="text-white"><i class="ion-android-arrow-dropup"></i> %20</h6>
					</div>
					<div class="text-center" id="baranl">1,4,3,7,6,4,8,9,6,8,12,6,7,9,4,8,5,7,9,13,10,9,9,8</div>
				  </div>

				  <div class="box-body">
					<div class="flexbox align-items-center">
					  <div>
						<small class="text-uppercase">Maximum bounce</small>
						<div class="font-size-26 mt-16">2500</div>
					  </div>
					  <div class="easypie" data-percent="75" data-bar-color="#0bb2d4" data-scale-color="transparent">
						  <span class="percent">75%</span>
						</div>

					</div>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box">
				  <div class="box-body bg-info">
					<div class="flexbox mb-20">
					  <div class="dropdown">
						<h6 class="text-uppercase text-white dropdown-toggle" data-toggle="dropdown">Today</h6>
						<div class="dropdown-menu">
						  <a class="dropdown-item active" href="#">Today</a>
						  <a class="dropdown-item" href="#">Yesterday</a>
						  <a class="dropdown-item" href="#">Last week</a>
						  <a class="dropdown-item" href="#">Last month</a>
						</div>
					  </div>

					  <h6 class="text-white"><i class="ion-android-arrow-dropup"></i> %20</h6>
					</div>

					<div id="lineTo">1,4,3,7,6,4,8,9,6,8,12</div>
				  </div>

				  <div class="box-body">
					<h6 class="text-uppercase text-center mb-30">Top locations</h6>

					<ul class="flexbox flex-justified text-cente mb-15">
					  <li class="text-center">
						<div class="font-size-18">8952</div>
						<small>Abu Dhabi</small>
					  </li>

					  <li class="br-1 bl-1 botder-light text-center">
						<div class="font-size-18">7458</div>
						<small>Miami</small>
					  </li>

					  <li class="text-center">
						<div class="font-size-18">3254</div>
						<small>London</small>
					  </li>
					</ul>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box">
				  <div class="box-header with-border">
					<h5 class="box-title">Top Advertisers</h5>
					<div class="box-tools pull-right">
						<ul class="card-controls">
						  <li class="dropdown">
							<a data-toggle="dropdown" href="#"><i class="ion-android-more-vertical"></i></a>
							<div class="dropdown-menu dropdown-menu-right">
							  <a class="dropdown-item active" href="#">Today</a>
							  <a class="dropdown-item" href="#">Yesterday</a>
							  <a class="dropdown-item" href="#">Last week</a>
							  <a class="dropdown-item" href="#">Last month</a>
							</div>
						  </li>
						  <li><a href="#" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
					<div class="text-center py-20">                  
					  <div class="donut" data-peity='{ "fill": ["#ff4c52", "#faa700", "#3e8ef7"], "radius": 78, "innerRadius": 58  }' >9,6,5</div>
					</div>

					<ul class="list-inline">
					  <li class="flexbox mb-5">
						<div>
						  <span class="badge badge-dot badge-lg mr-1" style="background-color: #ff4c52"></span>
						  <span>Abu Dhabi</span>
						</div>
						<div>8952</div>
					  </li>

					  <li class="flexbox mb-5">
						<div>
						  <span class="badge badge-dot badge-lg mr-1" style="background-color: #faa700"></span>
						  <span>Miami</span>
						</div>
						<div>7458</div>
					  </li>

					  <li class="flexbox">
						<div>
						  <span class="badge badge-dot badge-lg mr-1" style="background-color: #3e8ef7"></span>
						  <span>London</span>
						</div>
						<div>3254</div>
					  </li>
					</ul>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box">
				  <div class="box-header with-border">
					<h5 class="box-title">Top Locations</h5>
					<div class="box-tools pull-right">
						<ul class="card-controls">
						  <li class="dropdown">
							<a data-toggle="dropdown" href="#"><i class="ion-android-more-vertical"></i></a>
							<div class="dropdown-menu dropdown-menu-right">
							  <a class="dropdown-item active" href="#">Today</a>
							  <a class="dropdown-item" href="#">Yesterday</a>
							  <a class="dropdown-item" href="#">Last week</a>
							  <a class="dropdown-item" href="#">Last month</a>
							</div>
						  </li>
						  <li><a href="#" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
					<div class="text-center py-20">
						<div class="donut" data-peity='{ "fill": ["#faa700", "#3e8ef7", "#06d79c"], "radius": 80, "innerRadius": 60  }' >9,6,5</div>
					</div>

					<ul class="flexbox flex-justified text-center mt-30">
					  <li>
						<div class="font-size-20 text-primary">8952</div>
						<small>Abu Dhabi</small>
					  </li>

					  <li class="br-1 bl-1">
						<div class="font-size-20 text-info">7458</div>
						<small>Miami</small>
					  </li>

					  <li>
						<div class="font-size-20 text-yellow">3254</div>
						<small>London</small>
					  </li>
					</ul>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box">
				  <div class="box-header with-border">
					<h5 class="box-title">Top Locations</h5>

					<div class="box-tools pull-right">
						<ul class="card-controls">
						  <li class="dropdown">
							<a data-toggle="dropdown" href="#"><i class="ion-android-more-vertical"></i></a>
							<div class="dropdown-menu dropdown-menu-right">
							  <a class="dropdown-item active" href="#">Today</a>
							  <a class="dropdown-item" href="#">Yesterday</a>
							  <a class="dropdown-item" href="#">Last week</a>
							  <a class="dropdown-item" href="#">Last month</a>
							</div>
						  </li>
						  <li><a href="#" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
					<div class="flexbox mt-20">
						<div class="bar" data-peity='{ "fill": ["#666EE8", "#28D094", "#FF9149"], "height": 130, "width": 90, "padding":0.2 }'>8952,7458,3254</div>
					  <ul class="list-inline align-self-end text-muted text-right mb-0">
						<li>Abu Dhabi <span class="badge badge-ring badge-primary ml-2"></span></li>
						<li>Miami <span class="badge badge-ring badge-success ml-2"></span></li>
						<li>London <span class="badge badge-ring badge-warning ml-2"></span></li>
					  </ul>
					</div>
					<p class="mt-20">Distinctively Masterricate interdependent sources rather than timely leadership skills. Synergistically repurpose market positioning functionalities via top-line.</p>
				  </div>
				</div>
			  </div>	

			  <div class="col-md-6 col-lg-4">
				<div class="box box-body b-1 border-success">
				  <div class="flexbox">
					<div id="linechart" ></div>
					<div class="text-right">
					  <span>New Users</span><br>
					  <span>
						<i class="ion-ios-arrow-up text-success"></i>
						<span class="font-size-18 ml-1">589</span>
					  </span>
					</div>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box box-body b-1 border-warning">
				  <div class="flexbox">
					<div id="barchart"></div>
					<div class="text-right">
					  <span>Yearly Sale</span><br>
					  <span>
						<i class="ion-ios-arrow-up text-success"></i>
						<span class="font-size-18 ml-1">%90</span>
					  </span>
					</div>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box box-body b-1 border-primary">
				  <div class="flexbox">
					<div id="discretechart"></div>
					<div class="text-right">
					  <span>Impressions</span><br>
					  <span>
						<i class="ion-ios-arrow-up text-success"></i>
						<span class="font-size-18 ml-1">%90</span>
					  </span>
					</div>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box box-body">
				  <div class="flexbox">
					<div class="text-left">
					  <span>New Users</span><br>
					  <span>
						<i class="ion-ios-arrow-up text-success"></i>
						<span class="font-size-18 ml-1">589</span>
					  </span>
					</div>
					<div id="linechart2" ></div>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box box-body bg-danger">
				  <div class="flexbox">
					<div class="text-left">
					  <span>Yearly Sale</span><br>
					  <span>
						<i class="ion-ios-arrow-up text-success"></i>
						<span class="font-size-18 ml-1">%90</span>
					  </span>
					</div>
					<div id="barchart2"></div>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box box-body bg-warning">
				  <div class="flexbox">
					<div class="text-left">
					  <span>Impressions</span><br>
					  <span>
						<i class="ion-ios-arrow-up text-success"></i>
						<span class="font-size-18 ml-1">%90</span>
					  </span>
					</div>
					<div id="discretechart2"></div>
				  </div>
				</div>
			  </div>	

			</div>  

		  <div class="row">
			  <div class="col-md-6 col-lg-3">
				  <div class="box">				  
					  <div class="box-header no-border">
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<a data-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>
							  <li><a href="#" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="text-center">
							  <div class="easypie" data-percent="75" data-bar-color="#ff4c52" data-scale-color="transparent">
								<span class="icon-box"><i class="fa fa-clock-o text-danger"></i></span>
							  </div>
							  <h3 class="countnm per mb-5">75%</h3>
							  <p class="mb-0">Time available</p>
							  <p class="text-fade"><small>51% average</small></p>
							  <div id="barchart3" class="mt-15"></div>
						  </div>
					  </div>
				  </div>
			  </div>
			  <div class="col-md-6 col-lg-3">
				  <div class="box">				  
					  <div class="box-header no-border">
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<a data-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>
							  <li><a href="#" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="text-center">
							  <div class="easypie" data-percent="82" data-bar-color="#0bb2d4" data-scale-color="transparent">
								<span class="icon-box"><i class="fa fa-trophy text-primary"></i></span>
							  </div>
							  <h3 class="countnm per mb-5">82%</h3>
							  <p class="mb-0">Target goal</p>
							  <p class="text-fade"><small>43% average</small></p>
							  <div id="linearea2" class="mt-15"></div>
						  </div>
					  </div>
				  </div>
			  </div>
			  <div class="col-md-6 col-lg-3">
				  <div class="box">				  
					  <div class="box-header no-border">
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<a data-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>
							  <li><a href="#" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="text-center">
							  <div class="easypie" data-percent="45" data-bar-color="#17b3a3" data-scale-color="transparent">
								<span class="icon-box"><i class="fa fa-thumbs-up text-success"></i></span>
							  </div>
							  <h3 class="countnm per mb-5">45%</h3>
							  <p class="mb-0">Campaign</p>
							  <p class="text-fade"><small>32% average</small></p>
							  <div id="linechart3" class="mt-15"></div>
						  </div>
					  </div>
				  </div>
			  </div>
			  <div class="col-md-6 col-lg-3">
				  <div class="box">				  
					  <div class="box-header no-border">
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<a data-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>
							  <li><a href="#" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="text-center">
							  <div class="easypie" data-percent="55" data-bar-color="#faa700" data-scale-color="transparent">
								<span class="icon-box"><i class="fa fa-shopping-bag text-warning"></i></span>
							  </div>
							  <h3 class="countnm per mb-5">55%</h3>
							  <p class="mb-0">Sales Overview</p>
							  <p class="text-fade"><small>47% average</small></p>
							  <div id="discretechart3" class="mt-15"></div>
						  </div>
					  </div>
				  </div>
			  </div>		
		  </div>	

		  <div class="row">
			  <div class="col-md-6 col-lg-3">
				  <div class="box">				  
					  <div class="box-header no-border">
						  <h6>Miami, Florida</h6>
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<a data-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>
							  <li><a href="#" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="flexbox">
							  <div id="barchart4"></div>
							  <div>
								  <h3 class="countnm mb-5">41458245</h3>
								  <p class="mb-0">USD</p>
								  <p class="text-fade"><small>Today's sales</small></p>		  
							  </div>				
						  </div>
					  </div>
				  </div>
			  </div>
			  <div class="col-md-6 col-lg-3">
				  <div class="box">				  
					  <div class="box-header no-border">
						  <h6>Miami, Florida</h6>
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<a data-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>
							  <li><a href="#" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="flexbox">
							  <div id="linearea3"></div>
							  <div>
								  <h3 class="countnm mb-5">458185</h3>
								  <p class="mb-0">USD</p>
								  <p class="text-fade"><small>Today's sales</small></p>		  
							  </div>				
						  </div>
					  </div>
				  </div>
			  </div>
			  <div class="col-md-6 col-lg-3">
				  <div class="box">				  
					  <div class="box-header no-border">
						  <h6>Miami, Florida</h6>
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<a data-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>
							  <li><a href="#" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="flexbox">
							  <div id="linechart4"></div>	
							  <div>
								  <h3 class="countnm mb-5">458185</h3>
								  <p class="mb-0">USD</p>
								  <p class="text-fade"><small>Today's sales</small></p>		  
							  </div>			
						  </div>
					  </div>
				  </div>
			  </div>
			  <div class="col-md-6 col-lg-3">
				  <div class="box">				  
					  <div class="box-header no-border">
						  <h6>Miami, Florida</h6>
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<a data-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>
							  <li><a href="#" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="flexbox">
							  <div id="discretechart4"></div>
							  <div>
								  <h3 class="countnm mb-5">458185</h3>
								  <p class="mb-0">USD</p>
								  <p class="text-fade"><small>Today's sales</small></p>		  
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
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.multipurposethemes.com/admin/eduadmin-template/main/widgets_weather.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jan 2021 11:14:45 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/avatar/avatar-15.png">

    <title>PolyNekCommunityAdmin - Dashboard</title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">

</head>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">
	<div id="loader"></div>

  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">
		<a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
			<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
		</a>	
		<!-- Logo -->
		<a href="index.html" class="logo">
		  <!-- logo-->
		  <div class="logo-lg">
			  <span class="light-logo"><img src="../images/nek-logo.png" class="lo-img" alt="logo"></span>
			  <span class="dark-logo"><img src="../images/nek-logo.png" class="lo-img" alt="logo"></span>
		  </div>
		</a>	
	</div>  
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item d-md-none">
				<a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
					<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="contact_app_chat.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Chat">
					<i class="icon-Chat"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="mailbox.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Mailbox">
					<i class="icon-Mailbox"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="extra_taskboard.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Taskboard">
					<i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
			    </a>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">	
			<li class="btn-group nav-item d-lg-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
					<i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>	  
			<li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">
						<form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i class="ti-search"></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li>
		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
			<a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="Notifications">
			  <i class="icon-Notifications"><span class="path1"></span><span class="path2"></span></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>

			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">View all</a>
			  </li>
			</ul>
		  </li>	
		  
	      <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="User">
				<i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
            </a>
            <ul class="dropdown-menu animated flipInX">
              <li class="user-body">
				 <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
				 <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> My Wallet</a>
				 <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a>
				 <div class="dropdown-divider"></div>
				 <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Logout</a>
              </li>
            </ul>
          </li>	
		  
          <!-- Control Sidebar Toggle Button -->
          <li>
              <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light">
			  	<i class="icon-Settings"><span class="path1"></span><span class="path2"></span></i>
			  </a>
          </li>
			
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">	
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">	
				<li class="header">Dashboard & Apps</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
					<span>Dashboard</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 1</a></li>
					<li><a href="index2.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 2</a></li>
					<li><a href="index3.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 3</a></li>
					<li><a href="index4.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 4</a></li>
					<li><a href="index5.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 5</a></li>
					<li><a href="index6.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 6</a></li>
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>
					<span>Apps</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="extra_calendar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Calendar</a></li>
					<li><a href="contact_app.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Contact List</a></li>
					<li><a href="contact_app_chat.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chat</a></li>
					<li><a href="extra_taskboard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Todo</a></li>
					<li><a href="mailbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Mailbox</a></li>
				  </ul>
				</li>
				<li class="header">Components & UI </li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Write"><span class="path1"></span><span class="path2"></span></i>
					<span>UI Elements</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">			
					<li><a href="ui_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Grid System</a></li>								
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="box_cards.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Card</a></li>
							<li><a href="box_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Card</a></li>
							<li><a href="box_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Card</a></li>
							<li><a href="box_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Color</a></li>
							<li><a href="box_group.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Group</a></li>
						</ul>
					</li>
					<li><a href="ui_badges.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Badges</a></li>
					<li><a href="ui_border_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Border</a></li>
					<li><a href="ui_buttons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Buttons</a></li>	
					<li><a href="ui_color_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Color</a></li>
					<li><a href="ui_dropdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown</a></li>
					<li><a href="ui_dropdown_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown Grid</a></li>
					<li><a href="ui_progress_bars.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Progress Bars</a></li>					
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Icons
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="icons_fontawesome.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Font Awesome</a></li>
							<li><a href="icons_glyphicons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Glyphicons</a></li>
							<li><a href="icons_material.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Material Icons</a></li>	
							<li><a href="icons_themify.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Themify Icons</a></li>
							<li><a href="icons_simpleline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple Line Icons</a></li>
							<li><a href="icons_cryptocoins.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cryptocoins Icons</a></li>
							<li><a href="icons_flag.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flag Icons</a></li>
							<li><a href="icons_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather Icons</a></li>
						</ul>
					</li>
					<li><a href="ui_ribbons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ribbons</a></li>
					<li><a href="ui_sliders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sliders</a></li>
					<li><a href="ui_typography.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Typography</a></li>
					<li><a href="ui_tab.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tabs</a></li>
					<li><a href="ui_timeline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Timeline</a></li>
					<li><a href="ui_timeline_horizontal.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Horizontal Timeline</a></li>
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Components
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="component_bootstrap_switch.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bootstrap Switch</a></li>
							<li><a href="component_date_paginator.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Date Paginator</a></li>
							<li><a href="component_media_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Medias</a></li>
							<li><a href="component_rangeslider.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Range Slider</a></li>
							<li><a href="component_rating.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ratings</a></li>
							<li><a href="component_animations.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Animations</a></li>
							<li><a href="extension_fullscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fullscreen</a></li>
							<li><a href="extension_pace.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pace</a></li>
							<li><a href="component_nestable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Nestable</a></li>
							<li><a href="component_portlet_draggable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Draggable Portlets</a></li>	
						</ul>
					</li>  
				  </ul>
				</li>			
				<li class="treeview">
				  <a href="#">
					<i class="icon-File"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
					<span>Forms & Tables</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>					
				  <ul class="treeview-menu">					
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Forms
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="forms_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Elements</a></li>
							<li><a href="forms_general.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Layout</a></li>
							<li><a href="forms_wizard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Wizard</a></li>	
							<li><a href="forms_validation.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Validation</a></li>
							<li><a href="forms_mask.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Formatter</a></li>
							<li><a href="forms_xeditable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Xeditable Editor</a></li>
							<li><a href="forms_dropzone.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropzone</a></li>
							<li><a href="forms_code_editor.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Code Editor</a></li>
							<li><a href="forms_editors.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editor</a></li>
							<li><a href="forms_editor_markdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Markdown</a></li>
						</ul>
					</li> 		
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tables
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="tables_simple.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple tables</a></li>
							<li><a href="tables_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data tables</a></li>
							<li><a href="tables_editable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editable Tables</a></li>
							<li><a href="tables_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Table Color</a></li>
						</ul>
					</li> 					
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Chart-pie"><span class="path1"></span><span class="path2"></span></i>
					<span>Charts</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="charts_chartjs.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ChartJS</a></li>
					<li><a href="charts_flot.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flot</a></li>
					<li><a href="charts_inline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Inline charts</a></li>
					<li><a href="charts_morris.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Morris</a></li>
					<li><a href="charts_peity.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Peity</a></li>
					<li><a href="charts_chartist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chartist</a></li>
					<li><a href="charts_c3_axis.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Axis Chart</a></li>
					<li><a href="charts_c3_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
					<li><a href="charts_c3_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data Chart</a></li>
					<li><a href="charts_c3_line.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Line Chart</a></li>
					<li><a href="charts_echarts_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Charts</a></li>
					<li><a href="charts_echarts_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
					<li><a href="charts_echarts_pie_doughnut.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pie & Doughnut Chart</a></li>
				  </ul>
				</li> 
				<li class="header">COLLECTIONS</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Library"><span class="path1"></span><span class="path2"></span></i>
					<span>Widgets</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="widgets_blog.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blog</a></li>
					<li><a href="widgets_chart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chart</a></li>
					<li><a href="widgets_list.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
					<li><a href="widgets_social.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Social</a></li>
					<li><a href="widgets_statistic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Statistic</a></li>
					<li><a href="widgets_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather</a></li>
					<li><a href="widgets.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets</a></li>
					<li><a href="email_index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Emails</a></li>					  	
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maps
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="map_google.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Google Map</a></li>
							<li><a href="map_vector.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Vector Map</a></li>
						</ul>
					</li>					  	
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="component_modals.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals</a></li>
							<li><a href="component_sweatalert.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sweet Alert</a></li>
							<li><a href="component_notification.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Toastr</a></li>
						</ul>
					</li>
				  </ul>
				</li> 				 
				<li class="treeview">
				  <a href="#">
					<i class="icon-Cart"><span class="path1"></span><span class="path2"></span></i>
					<span>Ecommerce</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="ecommerce_products.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products</a></li>
					<li><a href="ecommerce_cart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Cart</a></li>
					<li><a href="ecommerce_products_edit.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Edit</a></li>
					<li><a href="ecommerce_details.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Details</a></li>
					<li><a href="ecommerce_orders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Orders</a></li>
					<li><a href="ecommerce_checkout.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Checkout</a></li>
				  </ul>
				</li>  		
				<li class="treeview">
				  <a href="#">
					<i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
					<span>Pages</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="invoice.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice</a></li>
					<li><a href="invoicelist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice List</a></li>	
					<li><a href="extra_app_ticket.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Support Ticket</a></li>
					<li><a href="extra_profile.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Profile</a></li>
					<li><a href="contact_userlist_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist Grid</a></li>
					<li><a href="contact_userlist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist</a></li>	
					<li><a href="sample_faq.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>FAQs</a></li>
					<li><a href="sample_blank.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blank</a></li>
					<li><a href="sample_coming_soon.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Coming Soon</a></li>
					<li><a href="sample_custom_scroll.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom Scrolls</a></li>
					<li><a href="sample_gallery.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Gallery</a></li>
					<li><a href="sample_lightbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lightbox Popup</a></li>
					<li><a href="sample_pricing.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pricing</a></li>
				  </ul>
				</li>
				<li class="header">LOGIN & ERROR </li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Chat-locked"><span class="path1"></span><span class="path2"></span></i>
					<span>Authentication</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="auth_login.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Login</a></li>
					<li><a href="auth_register.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Register</a></li>
					<li><a href="auth_lockscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lockscreen</a></li>
					<li><a href="auth_user_pass.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Recover password</a></li>	
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Chat-check"><span class="path1"></span><span class="path2"></span></i>
					<span>Miscellaneous</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="error_404.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 404</a></li>
					<li><a href="error_500.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 500</a></li>
					<li><a href="error_maintenance.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maintenance</a></li>	
				  </ul>
				</li>	 	     
			  </ul>
		  </div>
		</div>
    </section>
	<div class="sidebar-footer">
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><span class="icon-Settings-2"></span></a>
		<a href="mailbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><span class="icon-Mail"></span></a>
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
	</div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Weather widgets</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Widgets</li>
								<li class="breadcrumb-item active" aria-current="page">Weather widgets</li>
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
			  <!-- Default box -->
			  <div class="box">
				<div class="box-body">
				  <img class="img-fluid" src="../images/placeholder.jpg" alt="..." >
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
				  <div class="row align-items-center">
					<div class="col-lg-4 col-md-5">
						  <div class="row">
							<div class="col-4">
							  <div>
								<h1><i class="wi-day-sunny"></i></h1>
							  </div>
							</div>
							<div class="col-8">
							  <span class="font-size-40">20°
								<span class="font-size-30">C</span>
							  </span>
							  <span class="font-size-18">/</span>
							  <span class="font-size-18">7°
								<span class="font-size-16">C</span>
							  </span>
							  <p class="font-size-14 mb-0">MONDAY 11.11.2017</p>
							</div>
						  </div>
					</div>
					<div class="col-lg-8 col-md-7">
					  <div class="row no-space text-center">
						<div class="col-2">
						  <div class="weather-day vertical-align">
							<div class="vertical-align-middle font-size-16">
							  <div class="mb-10">TUE</div>
							  <i class="wi-day-sunny font-size-24 mb-10"></i>
							  <div class="text-center">24°
								<span class="font-size-12">C</span>
							  </div>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div class="weather-day vertical-align">
							<div class="vertical-align-middle font-size-16">
							  <div class="mb-10">WED</div>
							  <i class="wi-day-cloudy font-size-24 mb-10"></i>
							  <div class="text-center">21°
								<span class="font-size-12">C</span>
							  </div>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div class="weather-day vertical-align">
							<div class="vertical-align-middle font-size-16">
							  <div class="mb-10">THU</div>
							  <i class="wi-day-sunny font-size-24 mb-10"></i>
							  <div class="text-center">25°
								<span class="font-size-12">C</span>
							  </div>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div class="weather-day vertical-align">
							<div class="vertical-align-middle font-size-16">
							  <div class="mb-10">FRI</div>
							  <i class="wi-day-cloudy-gusts font-size-24 mb-10"></i>
							  <div class="text-center">20°
								<span class="font-size-12">C</span>
							  </div>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div class="weather-day vertical-align">
							<div class="vertical-align-middle font-size-16">
							  <div class="mb-10">SAT</div>
							  <i class="wi-day-lightning font-size-24 mb-10"></i>
							  <div class="text-center">18°
								<span class="font-size-12">C</span>
							  </div>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div class="weather-day vertical-align">
							<div class="vertical-align-middle font-size-16">
							  <div class="mb-10">SUN</div>
							  <i class="wi-day-storm-showers font-size-24 mb-10"></i>
							  <div class="text-center">14°
								<span class="font-size-12">C</span>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
			   </div>
			 <!-- /.box-footer-->
			  </div>
			<!-- /.box --> 			                    
			</div>      
		  </div>
		  <!-- /.row -->  
			
		  <div class="row">     
		   <div class="col-lg-6 col-12">
			  <!-- Default box -->
			  <div class="box bg-img box-inverse" style="background-image: url(../images/gallery/thumb/4.jpg);" data-overlay="5">			
				<div class="box-body">
				  <div class="p-5">
					  <h3 class="white">
						<span class="font-size-30">City, </span>Country
					  </h3>
					  <p class="weather-day-date mb-30">
						<span class="mr-5">MONDAY</span> May 11, 2017
					  </p>
					  <div class="mb-30 weather-icon">
						<canvas class="mr-40 text-top" id="icon1" width="90" height="90"></canvas>
						<div class="inline-block">
						  <span class="font-size-50">29°
							<span class="font-size-40">C</span>
						  </span>
						  <p class="text-left">DAY RAIN</p>
						</div>
					  </div>
					  <div class="row no-space">
						<div class="col-2">
						  <div>
							<div class="mb-10">TUE</div>
							<i class="wi-day-sunny font-size-30 mb-10"></i>
							<div>24°
							  <span class="font-size-12">C</span>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div>
							<div class="mb-10">WED</div>
							<i class="wi-day-cloudy font-size-30 mb-10"></i>
							<div>21°
							  <span class="font-size-12">C</span>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div>
							<div class="mb-10">THU</div>
							<i class="wi-day-sunny font-size-30 mb-10"></i>
							<div>25°
							  <span class="font-size-12">C</span>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div>
							<div class="mb-10">FRI</div>
							<i class="wi-day-cloudy-gusts font-size-30 mb-10"></i>
							<div>20°
							  <span class="font-size-12">C</span>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div>
							<div class="mb-10">SAT</div>
							<i class="wi-day-lightning font-size-30 mb-10"></i>
							<div>18°
							  <span class="font-size-12">C</span>
							</div>
						  </div>
						</div>
						<div class="col-2">
						  <div>
							<div class="mb-10">SUN</div>
							<i class="wi-day-storm-showers font-size-30 mb-10"></i>
							<div>14°
							  <span class="font-size-12">C</span>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box --> 
			</div>
		   <!-- /.col -->
			<div class="col-lg-6 col-12">
			  <!-- Default box -->
			  <div class="box text-center bg-img box-inverse" style="background-image: url(../images/gallery/thumb/4.jpg);" data-overlay="5">		
				<div class="box-body">
				  <div class="p-30">
					<div class="weather-icon">
					  <canvas id="icon2" width="128" height="128"></canvas>
					</div>
					<div>
					  <span class="font-size-40">-4°
						<span class="font-size-30">C</span>
					  </span>
					</div>
					<div>SNOWING</div>
				  </div>
				</div>
				<!-- /.box-body -->				
				<div class="box-footer bg-primary">
				  <div class="p-15">
					  <span class="font-size-20">City, </span>
					  <span class="font-size-18">Country</span>
					<div>
					  <span class="mr-5">Today,</span> 05:12 PM
					</div>
				  </div>
				</div>
			  </div>
			<!-- /.box -->         
			</div>
		   <!-- /.col -->		 
		   <div class="col-lg-6 col-12">                         
			 <!-- Default box -->
			  <div class="box text-center">		
				<div class="box-body bg-danger">
				  <div class="p-25">
					<div>
					  <canvas id="icon3" width="128" height="128"></canvas>
					</div>
				  </div>
				</div>
				<!-- /.box-body -->				
				<div class="box-footer">
				  <div class="p-30">
					<div class="row">
					  <div class="col-6">
						<div class="white">
						  <i class="md-chevron-down font-size-20 mr-5"></i>
						  <span class="font-size-30">8°</span>
						  <span class="font-size-24">C</span>
						</div>
						<div>LOW</div>
					  </div>
					  <div class="col-6">
						  <i class="md-chevron-up font-size-20 mr-5"></i>
						  <span class="font-size-30">19°</span>
						  <span class="font-size-24">C</span>
						<div>HIGH</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			<!-- /.box -->         
		   </div>
		   <!-- /.col -->
		   <div class="col-lg-6 col-12">      	
			<!-- Default box -->
			  <div class="box">	
				<div class="box-header with-border bg-primary">
				  <h3 class="box-title"><i class="ion-location"></i> City</h3>
				</div>		
				<div class="box-body">
				  <div class="row">
					<div class="col-6">
					  <div class="font-size-14">Fri 20/5</div>
					  <div class="font-size-40">
						27°
						<span class="font-size-30">C</span>
					  </div>
					</div>
					<div class="col-6 text-right">
					  <i class="wi-fog font-size-50"></i>
					</div>
				  </div>
				</div>
				<!-- /.box-body -->
			  </div>
			<!-- /.box --> 

			 <!-- Default box -->
			  <div class="box">		
				<div class="box-body">
				  <div class="row">
					<div class="col-6">
					  <i class="wi-day-sunny font-size-40"></i>
					</div>
					<div class="col-6 text-right">
					  <div class="font-size-40 grey-700">
						27°
						<span class="font-size-30">C</span>
					  </div>
					  <div class="font-size-14">Fri 20/5</div>
					</div>
				  </div>
				</div>
				<!-- /.box-body -->				
				<div class="box-footer bg-success">
				  <h4 class="m-0"><i class="ion-location"></i> City</h4>
				</div>
			  </div>
			<!-- /.box --> 
			</div>
		   <!-- /.col -->
		   <div class="col-lg-6 col-12">

			 <!-- Default box -->
			  <div class="box box-inverse" style="background-image: url(../images/gallery/thumb/9.jpg);" data-overlay="5">		
				<div class="box-body">
				  <div class="row py-30">
					<div class="col-6">
					  <div class="font-size-40 grey-700">
						27°
						<span class="font-size-30">C</span>
					  </div>
					  <div class="font-size-14">Fri 20/5</div>
					</div>
					<div class="col-6 text-right">
					  <i class="wi-day-sunny font-size-40"></i>
					</div>
				  </div>
				</div>
				<!-- /.box-body -->	
			  </div>

			<!-- /.box -->                          

			</div>
		   <!-- /.col -->        
		  </div>
		  <!-- /.row -->

		  <div class="row">
			<div class="col-lg-6 col-12">
			  <!-- Default box -->
			  <div class="box box-inverse bg-img" style="background-image: url(../images/gallery/thumb/9.jpg);" data-overlay="5">			
				<div class="box-body">
					<div class="row">
						<div class="col-6">
						  <div class="text-center p-45">
							<div class="vertical-align-middle">
							  <div class="font-size-40">
								27°
								<span class="font-size-24">C</span>
							  </div>
							  <div class="mt-3">City, Country</div>
							</div>
						  </div>
						</div>
						<!-- /.col -->
						<div class="col-6">
						  <div class="text-center p-45 bl-1">
							<div class="vertical-align-middle">
							  <div class="font-size-40">
								<i class="wi-cloudy"></i>
							  </div>
							  <div class="mt-3">20.5.2017</div>
							</div>
						  </div>
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.box-body -->
			  </div>
			<!-- /.box -->         
			</div>
		   <!-- /.col -->

		   <div class="col-lg-6 col-12">                         
			   <!-- Default box -->
			  <div class="box box-inverse bg-img" style="background-image: url(../images/gallery/thumb/7.jpg);" data-overlay="5">			
				<div class="box-body">
				  <div class="p-5">
					<div class="font-size-16 float-right"><i class="ion-location" aria-hidden="true"></i></div>
					<p class="font-size-20">City, Country</p>
					<p class="font-size-20">
					  <i class="wi-day-cloudy mr-15 font-size-40"></i>
					  <span class="font-size-40 blue-600">20°
						<span class="font-size-30">C</span>
					  </span>
					  <span>/</span>
					  <span>7°
						<span class="font-size-16">C</span>
					  </span>
					</p>
					<p class="mb-5">MONDAY</p>
					<p class="mb-0">11.11.2017</p>
				  </div>
				</div>
				<!-- /.box-body -->
			  </div>
			<!-- /.box -->        
		   </div>
		   <!-- /.col -->  
			<div class="col-lg-6 col-12">
				<!-- Default box -->
				  <div class="box box-inverse bg-img" style="background-image: url(../images/gallery/thumb/19.jpg);" data-overlay="5">		
					<div class="box-body py-50">
						<div class="text-center">
						  <div class="p-10">
							<i class="wi-day-sunny vertical-align-middle font-size-50"></i>
						  </div>
						  <div class="row mb-1">
							<div class="col-6">
							  <i class="wi-strong-wind mr-5"></i> 8 Kmph
							</div>

							<div class="col-6">
							  <i class="wi-sprinkles mr-5"></i> 40%
							</div>
						  </div>
						</div>
					</div>
					<!-- /.box-body -->		
				  </div>
				<!-- /.box -->
			</div>      
			<div class="col-lg-6 col-12">
			  <!-- Default box -->
			  <div class="box text-center">		
				<div class="box-body bg-danger">
				  <div class="p-30">
					<div class="font-size-40">
					  27°
					  <span class="font-size-30">C</span>
					  <i class="wi-day-cloudy-windy"></i>
					</div>
				  </div>
				</div>
				<!-- /.box-body -->				
				<div class="box-footer with-border">
					Saturday 12 May
				</div>
			  </div>
			<!-- /.box -->         
			</div>
		   <!-- /.col -->

		   <div class="col-lg-6 col-12">                         
			 <!-- Default box -->
			  <div class="box text-center bg-info">		
				<div class="box-body">
				  <div class="p-30">
					<div class="font-size-40">
					  <i class="wi-day-cloudy-windy"></i>
					  <span class="font-size-40">
						27°
						<span class="font-size-30">C</span>
					  </span>
					</div>
				  </div>
				</div>
				<!-- /.box-body -->				
				<div class="box-footer with-border bg-info">
					<div class="row no-space">
					  <div class="col-6">
						<i class="wi-strong-wind mr-10"></i>
						<span class="font-weight-bold">8</span>Kmph
					  </div>
					  <div class="col-6">
						<i class="wi-sprinkles mr-10"></i>
						<span class="font-weight-bold">40</span>%
					  </div>
					</div>
				</div>
			  </div>
			<!-- /.box -->         
		   </div>
		   <!-- /.col -->   
			<div class="col-lg-6 col-12">
				<!-- Default box -->
				  <div class="box bg-info">		
					<div class="box-body">
						<div class="p-15 text-center">
						  <div class="vertical-align-middle">
							<div class="font-size-40">
							  27°
							  <span class="font-size-30">C</span>
							</div>
							<div class="font-size-20">City, Country</div>
						  </div>
						</div>
					</div>
					<!-- /.box-body -->		
				  </div>
				<!-- /.box -->
			</div>   
		  </div>
		  <!-- /.row -->

		</section>
		<!-- /.content -->	  
	  </div>
  </div>
  <!-- /.content-wrapper -->
 
   <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2020 <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab" class="active"><i class="mdi mdi-message-text"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Users</p>
			<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
		  </div>
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>			
			
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>
			  
		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
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
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
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
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
	
	<!-- ./side demo panel -->
	<div class="sticky-toolbar">	    
	    <a href="#" data-toggle="tooltip" data-placement="left" title="Buy Now" class="waves-effect waves-light btn btn-success btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Money"><span class="path1"></span><span class="path2"></span></span>
		</a>
	    <a href="https://themeforest.net/user/multipurposethemes/portfolio" data-toggle="tooltip" data-placement="left" title="Portfolio" class="waves-effect waves-light btn btn-danger btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Image"></span>
		</a>
	    <a id="chat-popup" href="#" data-toggle="tooltip" data-placement="left" title="Live Chat" class="waves-effect waves-light btn btn-warning btn-flat btn-sm">
			<span class="icon-Group-chat"><span class="path1"></span><span class="path2"></span></span>
		</a>
	</div>
	<!-- Sidebar -->
	
	<div id="chat-box-body">
		<div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-lg btn-warning l-h-70">
            <div id="chat-overlay"></div>
            <span class="icon-Group-chat font-size-30"><span class="path1"></span><span class="path2"></span></span>
		</div>

		<div class="chat-box">
            <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-45" type="button" data-toggle="dropdown">
                      <span class="icon-Add-user font-size-22"><span class="path1"></span><span class="path2"></span></span>
                  </button>
                  <div class="dropdown-menu min-w-200">
                    <a class="dropdown-item font-size-16" href="#">
                        <span class="icon-Color mr-15"></span>
                        New Group</a>
                    <a class="dropdown-item font-size-16" href="#">
                        <span class="icon-Clipboard mr-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                        Contacts</a>
                    <a class="dropdown-item font-size-16" href="#">
                        <span class="icon-Group mr-15"><span class="path1"></span><span class="path2"></span></span>
                        Groups</a>
                    <a class="dropdown-item font-size-16" href="#">
                        <span class="icon-Active-call mr-15"><span class="path1"></span><span class="path2"></span></span>
                        Calls</a>
                    <a class="dropdown-item font-size-16" href="#">
                        <span class="icon-Settings1 mr-15"><span class="path1"></span><span class="path2"></span></span>
                        Settings</a>
                    <div class="dropdown-divider"></div>
					<a class="dropdown-item font-size-16" href="#">
                        <span class="icon-Question-circle mr-15"><span class="path1"></span><span class="path2"></span></span>
                        Help</a>
					<a class="dropdown-item font-size-16" href="#">
                        <span class="icon-Notifications mr-15"><span class="path1"></span><span class="path2"></span></span> 
                        Privacy</a>
                  </div>
                </div>
                <div class="text-center flex-grow-1">
                    <div class="text-dark font-size-18">Mayra Sibley</div>
                    <div>
                        <span class="badge badge-sm badge-dot badge-primary"></span>
                        <span class="text-muted font-size-12">Active</span>
                    </div>
                </div>
                <div class="chat-box-toggle">
                    <button id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-45" type="button">
                      <span class="icon-Close font-size-22"><span class="path1"></span><span class="path2"></span></span>
                    </button>                    
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">   
                </div>
                <div class="chat-logs">
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../images/avatar/2.jpg" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary font-weight-bold">Mayra Sibley</a>
                                <p class="text-muted font-size-12 mb-0">2 Hours</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Hi there, I'm Jesse and you?
                        </div>
                    </div>
                    <div class="chat-msg self">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary font-weight-bold">You</a>
                                <p class="text-muted font-size-12 mb-0">3 minutes</p>
                            </div>
                            <span class="msg-avatar">
                                <img src="../images/avatar/3.jpg" class="avatar avatar-lg">
                            </span>
                        </div>
                        <div class="cm-msg-text">
                           My name is Anne Clarc.         
                        </div>        
                    </div>
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../images/avatar/2.jpg" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary font-weight-bold">Mayra Sibley</a>
                                <p class="text-muted font-size-12 mb-0">40 seconds</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Nice to meet you Anne.<br>How can i help you?
                        </div>
                    </div>
                </div><!--chat-log -->
            </div>
            <div class="chat-input">      
                <form>
                    <input type="text" id="chat-input" placeholder="Send a message..."/>
                    <button type="submit" class="chat-submit" id="chat-submit">
                        <span class="icon-Send font-size-22"></span>
                    </button>
                </form>      
            </div>
		</div>
	</div>
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>	<script src="../assets/vendor_plugins/weather-icons/WeatherIcon.js"></script>
	
	<!-- EduAdmin App -->
	<script src="js/template.js"></script>
	
	<script src="js/pages/weather.js"></script>
	

</body>

<!-- Mirrored from www.multipurposethemes.com/admin/eduadmin-template/main/widgets_weather.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jan 2021 11:14:51 GMT -->
</html>

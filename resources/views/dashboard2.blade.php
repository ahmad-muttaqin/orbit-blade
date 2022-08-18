<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>OrbitHRM | Dashboard 1</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
    <link rel="shortcut icon" href="../assets/img/logo/orbit-sm.png" >
	<!-- ================== BEGIN core-css ================== -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">	<link href="../assets/css/vendor.min.css" rel="stylesheet" />	<link href="../assets/css/vendor.min.css" rel="stylesheet" />
	<link href="../assets/css/default/app.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
	
	<!-- ================== BEGIN page-css ================== -->
	<link href="../assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
	<link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<link href="../assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
	<link href="../assets/plugins/simple-calendar/dist/simple-calendar.css" rel="stylesheet" />
	<!-- ================== END page-css ================== -->
</head>
<body>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed">
		<!-- BEGIN #header -->
		<div id="header" class="app-header">
			<!-- BEGIN navbar-header -->
			<div class="navbar-header">
				<img src="../assets/img/logo/orbit-logo-5.png" class="navbar-logo navbar-brand"  alt="...">
				
			</div>
			<!-- END navbar-header -->
			<!-- BEGIN header-nav -->
			<div class="navbar-nav">
				<div class="navbar-item navbar-form">
					<form action="" method="POST" name="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter keyword" />
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</div>
				<div class="navbar-item dropdown">
					<a href="#" data-bs-toggle="dropdown" class="navbar-link dropdown-toggle icon">
						<i class="fa fa-bell"></i>
						<span class="badge">5</span>
					</a>
					<div class="dropdown-menu media-list dropdown-menu-end">
						<div class="dropdown-header">NOTIFICATIONS (5)</div>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-bug media-object bg-gray-500"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
								<div class="text-muted fs-10px">3 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<img src="../assets/img/user/user-1.jpg" class="media-object" alt="" />
								<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">John Smith</h6>
								<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
								<div class="text-muted fs-10px">25 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<img src="../assets/img/user/user-2.jpg" class="media-object" alt="" />
								<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">Olivia</h6>
								<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
								<div class="text-muted fs-10px">35 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-plus media-object bg-gray-500"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading"> New User Registered</h6>
								<div class="text-muted fs-10px">1 hour ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-envelope media-object bg-gray-500"></i>
								<i class="fab fa-google text-warning media-object-icon fs-14px"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading"> New Email From John</h6>
								<div class="text-muted fs-10px">2 hour ago</div>
							</div>
						</a>
						<div class="dropdown-footer text-center">
							<a href="javascript:;" class="text-decoration-none">View more</a>
						</div>
					</div>
				</div>
				
				<div class="navbar-item navbar-user dropdown">
					<a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
						<img src="../assets/img/user/user-13.jpg" alt="" /> 
						<span>
							<span class="d-none d-md-inline">Adam Schwartz</span>
							<b class="caret"></b>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-end me-1">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item d-flex align-items-center">
							Inbox
							<span class="badge bg-danger rounded-pill ms-auto pb-4px">2</span> 
						</a>
						<a href="javascript:;" class="dropdown-item">Calendar</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:;" class="dropdown-item">Log Out</a>
					</div>
				</div>
			</div>
			<!-- END header-nav -->
		</div>
		<!-- END #header -->
	
		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar bg-gradient-gray">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content bg-white" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub mt-3">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-clipboard-list text-gray"></i>
							</div>
							<div class="menu-text text-gray">Dashboard</div> 
							
					</div>

					<!-- End Sidenav Content Orbit -->

					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-commenting text-gray"></i>
							</div>
							<div class="menu-text text-gray">HRIS</div> 
							<div class="menu-caret text-gray"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="ui_general.html" class="menu-link">
									<div class="menu-text text-gray">General <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_typography.html" class="menu-link">
									<div class="menu-text text-gray">Typography</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tabs_accordions.html" class="menu-link">
									<div class="menu-text text-gray">Tabs & Accordions</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_unlimited_tabs.html" class="menu-link">
									<div class="menu-text text-gray">Unlimited Nav Tabs</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_modal_notification.html" class="menu-link">
									<div class="menu-text text-gray">Modal & Notification <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_widget_boxes.html" class="menu-link">
									<div class="menu-text text-gray">Widget Boxes</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_media_object.html" class="menu-link">
									<div class="menu-text text-gray">Media Object</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_buttons.html" class="menu-link">
									<div class="menu-text text-gray">Buttons <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_icons.html" class="menu-link">
									<div class="menu-text text-gray">Icons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_simple_line_icons.html" class="menu-link">
									<div class="menu-text text-gray">Simple Line Icons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_ionicons.html" class="menu-link">
									<div class="menu-text text-gray">Ionicons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tree.html" class="menu-link">
									<div class="menu-text text-gray">Tree View</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_language_bar_icon.html" class="menu-link">
									<div class="menu-text text-gray">Language Bar & Icon</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_social_buttons.html" class="menu-link">
									<div class="menu-text text-gray">Social Buttons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tour.html" class="menu-link">
									<div class="menu-text text-gray">Intro JS</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_offcanvas_toasts.html" class="menu-link">
									<div class="menu-text text-gray">Offcanvas & Toasts <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
						</div>
					</div>

					<!-- End Sidenav Content Orbit -->
					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-business-time text-gray"></i>
							</div>
							<div class="menu-text text-gray">Timesheets</div> 
							<div class="menu-caret text-gray"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="ui_general.html" class="menu-link">
									<div class="menu-text text-gray">General <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_typography.html" class="menu-link">
									<div class="menu-text text-gray">Typography</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tabs_accordions.html" class="menu-link">
									<div class="menu-text text-gray">Tabs & Accordions</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_unlimited_tabs.html" class="menu-link">
									<div class="menu-text text-gray">Unlimited Nav Tabs</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_modal_notification.html" class="menu-link">
									<div class="menu-text text-gray">Modal & Notification <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_widget_boxes.html" class="menu-link">
									<div class="menu-text text-gray">Widget Boxes</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_media_object.html" class="menu-link">
									<div class="menu-text text-gray">Media Object</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_buttons.html" class="menu-link">
									<div class="menu-text  text-gray">Buttons <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_icons.html" class="menu-link">
									<div class="menu-text text-gray">Icons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_simple_line_icons.html" class="menu-link">
									<div class="menu-text text-gray">Simple Line Icons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_ionicons.html" class="menu-link">
									<div class="menu-text text-gray">Ionicons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tree.html" class="menu-link">
									<div class="menu-text text-gray">Tree View</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_language_bar_icon.html" class="menu-link">
									<div class="menu-text text-gray">Language Bar & Icon</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_social_buttons.html" class="menu-link">
									<div class="menu-text text-gray">Social Buttons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tour.html" class="menu-link">
									<div class="menu-text text-gray">Intro JS</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_offcanvas_toasts.html" class="menu-link">
									<div class="menu-text text-gray">Offcanvas & Toasts <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
						</div>
					</div>

					<!-- End Sidenav Content Orbit -->
					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-user-edit text-gray"></i>
							</div>
							<div class="menu-text text-gray">E-Attendance</div> 
							<div class="menu-caret text-gray"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="ui_general.html" class="menu-link">
									<div class="menu-text text-gray">General <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_typography.html" class="menu-link">
									<div class="menu-text text-gray">Typography</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tabs_accordions.html" class="menu-link">
									<div class="menu-text text-gray">Tabs & Accordions</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_unlimited_tabs.html" class="menu-link">
									<div class="menu-text text-gray">Unlimited Nav Tabs</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_modal_notification.html" class="menu-link">
									<div class="menu-text text-gray">Modal & Notification <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_widget_boxes.html" class="menu-link">
									<div class="menu-text text-gray">Widget Boxes</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_media_object.html" class="menu-link">
									<div class="menu-text text-gray">Media Object</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_buttons.html" class="menu-link">
									<div class="menu-text  text-gray">Buttons <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_icons.html" class="menu-link">
									<div class="menu-text text-gray">Icons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_simple_line_icons.html" class="menu-link">
									<div class="menu-text text-gray">Simple Line Icons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_ionicons.html" class="menu-link">
									<div class="menu-text text-gray">Ionicons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tree.html" class="menu-link">
									<div class="menu-text text-gray">Tree View</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_language_bar_icon.html" class="menu-link">
									<div class="menu-text text-gray">Language Bar & Icon</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_social_buttons.html" class="menu-link">
									<div class="menu-text text-gray">Social Buttons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tour.html" class="menu-link">
									<div class="menu-text text-gray">Intro JS</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_offcanvas_toasts.html" class="menu-link">
									<div class="menu-text text-gray">Offcanvas & Toasts <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
						</div>
					</div>

					<!-- End Sidenav Content Orbit -->
					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-user-cog text-gray"></i>
							</div>
							<div class="menu-text text-gray">E-Leave</div> 
							<div class="menu-caret text-gray"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="ui_general.html" class="menu-link">
									<div class="menu-text text-gray">General <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_typography.html" class="menu-link">
									<div class="menu-text text-gray">Typography</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tabs_accordions.html" class="menu-link">
									<div class="menu-text text-gray">Tabs & Accordions</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_unlimited_tabs.html" class="menu-link">
									<div class="menu-text text-gray">Unlimited Nav Tabs</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_modal_notification.html" class="menu-link">
									<div class="menu-text text-gray">Modal & Notification <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_widget_boxes.html" class="menu-link">
									<div class="menu-text text-gray">Widget Boxes</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_media_object.html" class="menu-link">
									<div class="menu-text text-gray">Media Object</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_buttons.html" class="menu-link">
									<div class="menu-text  text-gray">Buttons <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_icons.html" class="menu-link">
									<div class="menu-text text-gray">Icons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_simple_line_icons.html" class="menu-link">
									<div class="menu-text text-gray">Simple Line Icons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_ionicons.html" class="menu-link">
									<div class="menu-text text-gray">Ionicons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tree.html" class="menu-link">
									<div class="menu-text text-gray">Tree View</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_language_bar_icon.html" class="menu-link">
									<div class="menu-text text-gray">Language Bar & Icon</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_social_buttons.html" class="menu-link">
									<div class="menu-text text-gray">Social Buttons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tour.html" class="menu-link">
									<div class="menu-text text-gray">Intro JS</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_offcanvas_toasts.html" class="menu-link">
									<div class="menu-text text-gray">Offcanvas & Toasts <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
						</div>
					</div>

					<!-- End Sidenav Content Orbit -->
					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-diagram-project text-gray"></i>
							</div>
							<div class="menu-text text-gray">Project Registration</div> 
							<div class="menu-caret text-gray"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="ui_general.html" class="menu-link">
									<div class="menu-text text-gray">General <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_typography.html" class="menu-link">
									<div class="menu-text text-gray">Typography</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tabs_accordions.html" class="menu-link">
									<div class="menu-text text-gray">Tabs & Accordions</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_unlimited_tabs.html" class="menu-link">
									<div class="menu-text text-gray">Unlimited Nav Tabs</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_modal_notification.html" class="menu-link">
									<div class="menu-text text-gray">Modal & Notification <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_widget_boxes.html" class="menu-link">
									<div class="menu-text text-gray">Widget Boxes</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_media_object.html" class="menu-link">
									<div class="menu-text text-gray">Media Object</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_buttons.html" class="menu-link">
									<div class="menu-text  text-gray">Buttons <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_icons.html" class="menu-link">
									<div class="menu-text text-gray">Icons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_simple_line_icons.html" class="menu-link">
									<div class="menu-text text-gray">Simple Line Icons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_ionicons.html" class="menu-link">
									<div class="menu-text text-gray">Ionicons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tree.html" class="menu-link">
									<div class="menu-text text-gray">Tree View</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_language_bar_icon.html" class="menu-link">
									<div class="menu-text text-gray">Language Bar & Icon</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_social_buttons.html" class="menu-link">
									<div class="menu-text text-gray">Social Buttons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tour.html" class="menu-link">
									<div class="menu-text text-gray">Intro JS</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_offcanvas_toasts.html" class="menu-link">
									<div class="menu-text text-gray">Offcanvas & Toasts <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
						</div>
					</div>

					<!-- End Sidenav Content Orbit -->
					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-user-group text-gray"></i>
							</div>
							<div class="menu-text text-gray">Organization</div> 
							<div class="menu-caret text-gray"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="ui_general.html" class="menu-link">
									<div class="menu-text text-gray">General <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_typography.html" class="menu-link">
									<div class="menu-text text-gray">Typography</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tabs_accordions.html" class="menu-link">
									<div class="menu-text text-gray">Tabs & Accordions</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_unlimited_tabs.html" class="menu-link">
									<div class="menu-text text-gray">Unlimited Nav Tabs</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_modal_notification.html" class="menu-link">
									<div class="menu-text text-gray">Modal & Notification <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_widget_boxes.html" class="menu-link">
									<div class="menu-text text-gray">Widget Boxes</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_media_object.html" class="menu-link">
									<div class="menu-text text-gray">Media Object</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_buttons.html" class="menu-link">
									<div class="menu-text  text-gray">Buttons <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_icons.html" class="menu-link">
									<div class="menu-text text-gray">Icons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_simple_line_icons.html" class="menu-link">
									<div class="menu-text text-gray">Simple Line Icons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_ionicons.html" class="menu-link">
									<div class="menu-text text-gray">Ionicons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tree.html" class="menu-link">
									<div class="menu-text text-gray">Tree View</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_language_bar_icon.html" class="menu-link">
									<div class="menu-text text-gray">Language Bar & Icon</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_social_buttons.html" class="menu-link">
									<div class="menu-text text-gray">Social Buttons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tour.html" class="menu-link">
									<div class="menu-text text-gray">Intro JS</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_offcanvas_toasts.html" class="menu-link">
									<div class="menu-text text-gray">Offcanvas & Toasts <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
						</div>
					</div>

					<!-- End Sidenav Content Orbit -->
					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-pen-fancy text-gray"></i>
							</div>
							<div class="menu-text text-gray">Reporting</div> 
							<div class="menu-caret text-gray"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="ui_general.html" class="menu-link">
									<div class="menu-text text-gray">General <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_typography.html" class="menu-link">
									<div class="menu-text text-gray">Typography</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tabs_accordions.html" class="menu-link">
									<div class="menu-text text-gray">Tabs & Accordions</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_unlimited_tabs.html" class="menu-link">
									<div class="menu-text text-gray">Unlimited Nav Tabs</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_modal_notification.html" class="menu-link">
									<div class="menu-text text-gray">Modal & Notification <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_widget_boxes.html" class="menu-link">
									<div class="menu-text text-gray">Widget Boxes</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_media_object.html" class="menu-link">
									<div class="menu-text text-gray">Media Object</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_buttons.html" class="menu-link">
									<div class="menu-text  text-gray">Buttons <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_icons.html" class="menu-link">
									<div class="menu-text text-gray">Icons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_simple_line_icons.html" class="menu-link">
									<div class="menu-text text-gray">Simple Line Icons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_ionicons.html" class="menu-link">
									<div class="menu-text text-gray">Ionicons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tree.html" class="menu-link">
									<div class="menu-text text-gray">Tree View</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_language_bar_icon.html" class="menu-link">
									<div class="menu-text text-gray">Language Bar & Icon</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_social_buttons.html" class="menu-link">
									<div class="menu-text text-gray">Social Buttons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tour.html" class="menu-link">
									<div class="menu-text text-gray">Intro JS</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_offcanvas_toasts.html" class="menu-link">
									<div class="menu-text text-gray">Offcanvas & Toasts <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
						</div>
					</div>

					<!-- End Sidenav Content Orbit -->
					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-gear text-gray"></i>
							</div>
							<div class="menu-text text-gray">Settings</div> 
							<div class="menu-caret text-gray"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="ui_general.html" class="menu-link">
									<div class="menu-text text-gray">General <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_typography.html" class="menu-link">
									<div class="menu-text text-gray">Typography</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tabs_accordions.html" class="menu-link">
									<div class="menu-text text-gray">Tabs & Accordions</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_unlimited_tabs.html" class="menu-link">
									<div class="menu-text text-gray">Unlimited Nav Tabs</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_modal_notification.html" class="menu-link">
									<div class="menu-text text-gray">Modal & Notification <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_widget_boxes.html" class="menu-link">
									<div class="menu-text text-gray">Widget Boxes</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_media_object.html" class="menu-link">
									<div class="menu-text text-gray">Media Object</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_buttons.html" class="menu-link">
									<div class="menu-text  text-gray">Buttons <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_icons.html" class="menu-link">
									<div class="menu-text text-gray">Icons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_simple_line_icons.html" class="menu-link">
									<div class="menu-text text-gray">Simple Line Icons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_ionicons.html" class="menu-link">
									<div class="menu-text text-gray">Ionicons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tree.html" class="menu-link">
									<div class="menu-text text-gray">Tree View</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_language_bar_icon.html" class="menu-link">
									<div class="menu-text text-gray">Language Bar & Icon</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_social_buttons.html" class="menu-link">
									<div class="menu-text text-gray">Social Buttons</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_tour.html" class="menu-link">
									<div class="menu-text text-gray">Intro JS</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="ui_offcanvas_toasts.html" class="menu-link">
									<div class="menu-text text-gray">Offcanvas & Toasts <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
						</div>
					</div>

					<!-- End Sidenav Content Orbit -->

					
					<!-- BEGIN minify-button -->
					<!-- <div class="menu-item d-flex text-gray">
						<a href="javascript:;" class="app-sidebar-minify-btn ms-auto text-gray" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
					</div> -->
					<!-- END minify-button -->
				</div>
				<!-- END menu -->
			</div>
			<!-- END scrollbar -->
		</div>
		<div class="app-sidebar-bg"></div>
		<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
		<!-- END #sidebar -->
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<!-- BEGIN breadcrumb -->
			<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
		<li class="breadcrumb-item active">Dashboard</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">Dashboard</h1>
	<!-- END page-header -->
	<!-- BEGIN row -->
	<div class="row">
		<!-- BEGIN col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-teal">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-users	 fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">EMPLOYEES</div>
					<div class="stats-number">15</div>
				</div>
			</div>
		</div>
		<!-- END col-3 -->
		<!-- BEGIN col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-blue">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-check-to-slot fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">PRESENT</div>
					<div class="stats-number">9</div>
				</div>
			</div>
		</div>
		<!-- END col-3 -->
		<!-- BEGIN col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-indigo">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-circle-xmark fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">ABSENT</div>
					<div class="stats-number">3</div>
				</div>
			</div>
		</div>
		<!-- END col-3 -->
		<!-- BEGIN col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-dark">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-user-large-slash fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">LEAVE</div>
					<div class="stats-number">3</div>
				</div>
			</div>
		</div>
		<!-- END col-3 -->
	</div>
	<!-- END row -->
	<!-- BEGIN row -->
	
		<!-- BEGIN col-8 -->
		<div class="panel panel-inverse" data-sortable-id="index-1">

				<div class="panel-heading">
					<h4 class="panel-title">Latest Announcement</h4>
					<div class="panel-heading-btn">
					</div>
				</div>

				<table class="table table-hover table-bordered table-responsive padding-auto">
  					<thead>
							<tr>
							<th scope="col">Date</th>
							<th scope="col">Time</th>
							<th scope="col">Title</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<th scope="row">13 October 2020</th>
							<td>4 PM</td>
							<td>Memorandum : Conditional Movement Control Order</td>
							</tr>
							<tr>
							<th scope="row">11 September 2020</th>
							<td>9 AM</td>
							<td>Memorandum: from the Group Chief Executive Officer</td>
							</tr>
							<tr>
							<th scope="row">11 September 2020</th>
							<td>9 AM</td>
							<td>Memorandum: from the Group Chief Executive Officer</td>
							</tr>
							<tr>
							<th scope="row">11 September 2020</th>
							<td>9 AM</td>
							<td>Memorandum: from the Group Chief Executive Officer</td>
							</tr>
							<tr>
							<th scope="row">11 September 2020</th>
							<td>9 AM</td>
							<td>Memorandum: from the Group Chief Executive Officer</td>
							</tr>
							<tr>
							<th scope="row">11 September 2020</th>
							<td>9 AM</td>
							<td>Memorandum: from the Group Chief Executive Officer</td>
							</tr>
						</tbody>
				</table>
	</div>

	<div class="panel panel-inverse w-50 " data-sortable-id="index-1">

				<div class="panel-heading">
					<h4 class="panel-title">Events</h4>
				</div>

							<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
									<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
									<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
								</div>
							<div class="carousel-inner">
								<div class="carousel-item active">
								<img src="../assets/img/gallery/Majlis Edaran 1.jpg" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
									<h5>Majlis Pelancaran MyVeteran Mall</h5>
									<p>Some representative placeholder content for the first slide.</p>
								</div>
								</div>
								<div class="carousel-item">
								<img src="../assets/img/gallery/Majlis Edaran 2.jpg" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
									<h5>Majlis Pelancaran MyVeteran Mall</h5>
									<p>Some representative placeholder content for the second slide.</p>
								</div>
								</div>
								<div class="carousel-item">
								<img src="../assets/img/gallery/Majlis Edaran 3.jpg" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
									<h5>Edaran Eyes TurnAround</h5>
									<p>Some representative placeholder content for the third slide.</p>
								</div>
								</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>

				<!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
					<img src="/images/cover-sidebar-user.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					<img src="/images/cover-sidebar-user.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					<img src="/images/cover-sidebar-user.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
				</div> -->

				
	</div>
	

	
		
		<!-- END col-8 -->
		<!-- BEGIN col-4 -->

		<!-- END col-4 -->

	<!-- END row -->
	<!-- BEGIN row -->
	<div class="row">
		<!-- BEGIN col-4 -->
		<div class="col-xl-4 col-lg-6">
			<!-- BEGIN panel -->
			
			<!-- END panel -->
		</div>
		<!-- END col-4 -->
		<!-- BEGIN col-4 -->
		<div class="col-xl-4 col-lg-6">
			<!-- BEGIN panel -->

			<!-- END panel -->
		</div>
		<!-- END col-4 -->
		<!-- BEGIN col-4 -->
		<div class="col-xl-4 col-lg-6">
			<!-- BEGIN panel -->

			<!-- END panel -->
		</div>
		<!-- END col-4 -->
	</div>
	<!-- END row -->
		</div>
		<!-- END #content -->
		
		<!-- BEGIN theme-panel -->
		<div class="theme-panel">
			<a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
			<div class="theme-panel-content" data-scrollbar="true" data-height="100%">
				<h5>App Settings</h5>
				
				<!-- BEGIN theme-list -->
				<div class="theme-list">
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-orange" data-theme-class="theme-orange" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
					<div class="theme-list-item active"><a href="javascript:;" class="theme-list-link bg-teal" data-theme-class="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-cyan" data-theme-class="theme-cyan" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-blue" data-theme-class="theme-blue" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-black" data-theme-class="theme-gray-600" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Black">&nbsp;</a></div>
				</div>
				<!-- END theme-list -->
				
				<div class="theme-panel-divider"></div>
				
				<div class="row mt-10px">
					<div class="col-8 control-label text-dark fw-bold">
						<div>Dark Mode <span class="badge bg-primary ms-1 py-2px position-relative" style="top: -1px;">NEW</span></div>
						<div class="lh-14">
							<small class="text-dark opacity-50">
								Adjust the appearance to reduce glare and give your eyes a break.
							</small>
						</div>
					</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-theme-dark-mode" id="appThemeDarkMode" value="1" />
							<label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
						</div>
					</div>
				</div>
				
				<div class="theme-panel-divider"></div>
				
				<!-- BEGIN theme-switch -->
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-dark fw-bold">Header Fixed</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-header-fixed" id="appHeaderFixed" value="1" checked />
							<label class="form-check-label" for="appHeaderFixed">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-dark fw-bold">Header Inverse</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-header-inverse" id="appHeaderInverse" value="1" />
							<label class="form-check-label" for="appHeaderInverse">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-dark fw-bold">Sidebar Fixed</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-sidebar-fixed" id="appSidebarFixed" value="1" checked />
							<label class="form-check-label" for="appSidebarFixed">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-dark fw-bold">Sidebar Grid</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-sidebar-grid" id="appSidebarGrid" value="1" />
							<label class="form-check-label" for="appSidebarGrid">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-md-8 control-label text-dark fw-bold">Gradient Enabled</div>
					<div class="col-md-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-gradient-enabled" id="appGradientEnabled" value="1" />
							<label class="form-check-label" for="appGradientEnabled">&nbsp;</label>
						</div>
					</div>
				</div>
				<!-- END theme-switch -->
				
				<div class="theme-panel-divider"></div>
				
				<h5>Admin Design (5)</h5>
				<!-- BEGIN theme-version -->
				<div class="theme-version">
					<div class="theme-version-item">
						<a href="../template_html/index_v2.html" class="theme-version-link active">
							<span style="background-image: url(../assets/img/theme/default.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_transparent/index_v2.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/transparent.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_apple/index_v2.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/apple.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_material/index_v2.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/material.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_facebook/index_v2.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/facebook.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_google/index_v2.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/google.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
				</div>
				<!-- END theme-version -->
				
				<div class="theme-panel-divider"></div>
				
				<h5>Language Version (7)</h5>
				<!-- BEGIN theme-version -->
				<div class="theme-version">
					<div class="theme-version-item">
						<a href="../template_html/index.html" class="theme-version-link active">
							<span style="background-image: url(../assets/img/version/html.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_ajax/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/ajax.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_angularjs/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/angular1x.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_angularjs13/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/angular10x.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="javascript:alert('Laravel Version only available in downloaded version.');" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/laravel.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_vuejs/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/vuejs.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_reactjs/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/reactjs.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="javascript:alert('.NET Core 3.1 MVC Version only available in downloaded version.');" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/dotnet.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
				</div>
				<!-- END theme-version -->
				
				<div class="theme-panel-divider"></div>
				
				<h5>Frontend Design (5)</h5>
				<!-- BEGIN theme-version -->
				<div class="theme-version">
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_one_page_parallax/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/one-page-parallax.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_e_commerce/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/e-commerce.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_blog/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/blog.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_forum/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/forum.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_corporate/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/corporate.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
				</div>
				<!-- END theme-version -->
				
				<div class="theme-panel-divider"></div>
				
				<a href="https://seantheme.com/color-admin/documentation/" class="btn btn-dark d-block w-100 rounded-pill mb-10px" target="_blank"><b>Documentation</b></a>
				<a href="javascript:;" class="btn btn-default d-block w-100 rounded-pill" data-toggle="reset-local-storage"><b>Reset Local Storage</b></a>
			</div>
		</div>
		<!-- END theme-panel -->
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="../assets/js/vendor.min.js"></script>
	<script src="../assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
	
	<!-- ================== BEGIN page-js ================== -->
	<script src="../assets/plugins/d3/d3.min.js"></script>
	<script src="../assets/plugins/nvd3/build/nv.d3.min.js"></script>
	<script src="../assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
	<script src="../assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js"></script>
	<script src="../assets/plugins/simple-calendar/dist/jquery.simple-calendar.min.js"></script>
	<script src="../assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="../assets/js/demo/dashboard-v2.js"></script>
	<!-- ================== END page-js ================== -->
</body>
</html>
<script>

</script>
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
				<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- END navbar-header -->
			<!-- BEGIN header-nav -->
			<div class="navbar-nav">
				
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
						
							<div class="menu-icon">
								<i class="fa fa-commenting text-gray"></i>
							</div>
							<div class="menu-text text-gray">HRIS</div> 
							<div class="menu-caret text-gray"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">My Profile </div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">Employee Information</div>
								</a>
							</div>
							
						</div>
					</div>

					<!-- End Sidenav Content Orbit -->
					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-business-time text-gray"></i>
							</div>
							<div class="menu-text text-gray">Timesheets</div> 
							<div class="menu-caret text-gray"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="ui_general.html" class="menu-link">
									<div class="menu-text text-gray">My Timesheets</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">Timesheets Report</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">Realtime Activities</div>
								</a>
							</div>
							
						</div>
					</div>

					<!-- End Sidenav Content Orbit -->
					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-user-edit text-gray"></i>
							</div>
							<div class="menu-text text-gray">E-Attendance</div> 
							<div class="menu-caret text-gray"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">My Attendance</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">Attendance Information</div>
								</a>
							</div>
							
						</div>
					</div>

					<!-- End Sidenav Content Orbit -->
					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-user-cog text-gray"></i>
							</div>
							<div class="menu-text text-gray">E-Leave</div> 
							<div class="menu-caret text-gray"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">My Leave</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">Leave Approval</div>
								</a>
							</div>
							
						</div>
					</div>

					<!-- End Sidenav Content Orbit -->
					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-diagram-project text-gray"></i>
							</div>
							<div class="menu-text text-gray">Project Registration</div> 
							<div class="menu-caret text-gray"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">Customer</i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">Project Information</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">My Project</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">Project Request</div>
								</a>
							</div>
							
						</div>
					</div>

					<!-- End Sidenav Content Orbit -->
					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-user-group text-gray"></i>
							</div>
							<div class="menu-text text-gray">Organization</div> 
							
						</a>
						
					</div>

					<!-- End Sidenav Content Orbit -->
					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-pen-fancy text-gray"></i>
							</div>
							<div class="menu-text text-gray">Reporting</div> 
							<div class="menu-caret text-gray"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">Timesheet</i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">E-Attendance</div>
								</a>
							</div>
							
						</div>
					</div>

					<!-- End Sidenav Content Orbit -->
					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-gear text-gray"></i>
							</div>
							<div class="menu-text text-gray">Settings</div> 
							
						</a>
						
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
	
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	
	<!-- END page-header -->
	<!-- BEGIN row -->
	
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">HRIS | Employee Information</h1>
	
	<!-- END page-header -->
	<!-- BEGIN panel -->
	<div class="panel panel">
		<!-- BEGIN panel-heading -->
		
		<div class="panel-heading">
		<a href="#" class="btn btn-primary">+ Register New Employee</a>
			<h4 class="panel-title"></h4>
			
			<div class="panel-heading-btn">
			
				
			</div>
		</div>
		<!-- END panel-heading -->
		<!-- BEGIN panel-body -->
		<div class="panel-body">
			<table id="data-table-default" class="table table-striped table-bordered align-middle">
				<thead>
					<tr>
						<th width="1%"></th>
						<th width="1%" data-orderable="false"></th>
						<th class="text-nowrap">Employee ID</th>
						<th class="text-nowrap">First Name</th>
						<th class="text-nowrap">Last name</th>
						<th class="text-nowrap">Email</th>
						<th class="text-nowrap">Phone Number</th>
						<th class="text-nowrap">department</th>
						<th class="text-nowrap">Report to</th>
						<th class="text-nowrap">employee status</th>


					</tr>
				</thead>
				<tbody>
					<tr class="odd gradeX">
						<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							
							 
							<a href="javascript:;" class="dropdown-item">Edit Employee </a>
							<div class="dropdown-divider"></div>
							<a href="register_v3.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="dropdown-item"> Terminate Employee</a>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-green">Active</span></td>
					</tr>
					<tr class="even gradeC">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-danger">Inactive</span></td>
					</tr>
					<tr class="odd gradeA">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-green">Active</span></td>
					</tr>
					<tr class="even gradeA">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-green">Active</span></td>
					</tr>
					<tr class="odd gradeA">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>abu</td>
						<td>abu@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-danger">Inactive</span></td>
					</tr>
					<tr class="even gradeA">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-danger">Inactive</span></td>
					</tr>
					<tr class="gradeA">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-green">Active</span></td>
					</tr>
					<tr class="gradeA">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-green">Active</span></td>
					</tr>
					<tr class="gradeA">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-green">Active</span></td>
					</tr>
					<tr class="gradeA">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-green">Active</span></td>
					</tr>
					<tr class="gradeA">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-green">Active</span></td>
					</tr>
					<tr class="gradeA">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-green">Active</span></td>
					</tr>
					<tr class="gradeA">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-green">Active</span></td>
					</tr>
					<tr class="gradeA">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-green">Active</span></td>
					</tr>
					<tr class="gradeA">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-green">Active</span></td>
					</tr>
					<tr class="gradeA">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-green">Active</span></td>
					</tr>
					<tr class="gradeA">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-green">Active</span></td>
					</tr>
					<tr class="gradeA">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-green">Active</span></td>
					</tr>
					<tr class="gradeA">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-green">Active</span></td>
					</tr>
					<tr class="gradeA">
					<td width="1%" class="fw-bold text-dark">1</td>
						<td><a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item">Action 1</a>
							<a href="javascript:;" class="dropdown-item">Action 2</a>
							<a href="javascript:;" class="dropdown-item">Action 3</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:;" class="dropdown-item">Action 4</a></td>
						<td>TNG001</td>
						<td>ahmad</td>
						<td>ali</td>
						<td>ali@gmail.com</td>
						<td>60123456789</td>
						<td>IT</td>
						<td>Safuan</td>
						<td><span class="badge bg-green">Active</span></td>
					</tr>
					
					
				</tbody>
			</table>
		</div>

	<!-- END row -->
	<!-- BEGIN row -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">Terminate Employment</h5>
					  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					  <form>
						
						<div class="mb-5">
						  <label for="recipient-name" class="col-form-label">Employee ID</label>
						  <input type="text" class="form-control" id="recipient-name">
						  <label for="recipient-name" class="col-form-label">Employee Name</label>
						  <input type="text" class="form-control" id="recipient-name">
						  <label for="recipient-name" class="col-form-label">Employee Email</label>
						  <input type="text" class="form-control" id="recipient-name">
						  <label for="recipient-name" class="col-form-label">Report To</label>
						  <input type="text" class="form-control" id="recipient-name">
						  
						</div>
						<div class="mb-5">
						<label for="recipient-name" class="col-form-label">Terminate Date*</label>
						<input type="text" class="form-control" id="datepicker-terminatedate" placeholder="dd/mm/yyyy" />
						  <label for="recipient-name" class="col-form-label">Terminate Type*</label>
						  <select class="form-select">
								<option value="0" label="Please Choose" selected="selected">Please Choose </option>
								<option value="1" label="Deceased">Deceased</option>
								<option value="2" label="Dismissed">Dismissed</option>
								<option value="3" label="Laid-Off">Laid-Off</option>
								<option value="4" label="Contract not renewed">Contract not renewed</option>
								<option value="2" label="Resign-company requested">Resign-company requested</option>
								<option value="2" label="resign">resign</option>
								<option value="2" label="Retirement">Retirement</option>
								<option value="2" label="Others">Others</option>


								
								
								</select>
						  <label for="recipient-name" class="col-form-label">Remarks</label>
						  <textarea class="form-control" rows="3"></textarea>

						  <label for="recipient-name" class="col-form-label">Attachments</label><br>
						  <form id="fileupload" action="/assets/global/plugins/jquery-file-upload/server/php/" method="POST" enctype="multipart/form-data">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse">
			<!-- BEGIN panel-heading -->
			
			<!-- END panel-heading -->
			
			<!-- BEGIN panel-body -->
			<div class="panel-body">			
				<div class="row fileupload-buttonbar">
					<div class="col-xl-15">
						<span class="btn btn-primary fileinput-button me-1">
							<i class="fa fa-fw fa-plus"></i>
							<span>Add files</span>
							<input type="file" name="files[]" multiple>
						</span>
						<button type="submit" class="btn btn-primary">
							<i class="fa fa-fw fa-upload"></i>
							<span>upload</span>
						</button>
						<button type="reset" class="btn btn-default">
							<i class="fa fa-fw fa-ban"></i>
							<span>Cancel upload</span>
						</button>
						<button type="button" class="btn btn-default">
							<i class="fa fa-fw fa-trash"></i>
							<span>Delete</span>
						</button>
						<!-- The global file processing state -->
						<span class="fileupload-process"></span>
					</div>
					<!-- The global progress state -->
					<div class="col-xl-5 fileupload-progress fade d-none d-xl-block">
						<!-- The global progress bar -->
						<div class="progress progress-striped active">
							<div class="progress-bar progress-bar-success" style="width:0%;"></div>
						</div>
						<!-- The extended global progress state -->
						<div class="progress-extended">&nbsp;</div>
					</div>
				</div>
			</div>
			<!-- END panel-body -->
			<!-- BEGIN table -->
			<div class="table-responsive">
				<table class="table table-panel text-nowrap mb-0">
					<thead>
						<tr>
							<th width="10%">PREVIEW</th>
							<th>FILE INFO</th>
							<th>UPLOAD PROGRESS</th>
							<th width="1%"></th>
						</tr>
					</thead>
					<tbody class="files">
						<tr data-id="empty">
							<td colspan="4" class="text-center text-gray-500 py-30px">
								<div class="mb-10px"><i class="fa fa-file fa-3x"></i></div>
								<div class="fw-bold">No file selected</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- END table -->
			<!-- BEGIN hljs-wrapper -->
			
		<!-- END panel -->
	</form>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					  <button type="button" class="btn btn-primary">Submit</button>
					</div>
				  </div>
				</div>
			  </div>
			  
			  
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
<script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="/assets/plugins/pdfmake/build/pdfmake.min.js"></script>
	<script src="/assets/plugins/pdfmake/build/vfs_fonts.js"></script>
	<script src="/assets/plugins/jszip/dist/jszip.min.js"></script>
	<script src="/assets/js/demo/table-manage-buttons.demo.js"></script>
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/render.highlight.js"></script>
	<link href="/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
	<script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
	<link href="/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
	<script src="/assets/plugins/moment/min/moment.min.js"></script>
	<script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
	<link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
	<script src="/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	<!-- required files -->
<link href="/assets/plugins/blueimp-gallery/css/blueimp-gallery.min.css" rel="stylesheet" />
<link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload.css" rel="stylesheet" />
<link href="/assets/plugins/blueimp-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" />

<script src="/assets/plugins/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>
<script src="/assets/plugins/blueimp-tmpl/js/tmpl.js"></script>
<script src="/assets/plugins/blueimp-load-image/js/load-image.all.min.js"></script>
<script src="/assets/plugins/blueimp-canvas-to-blob/js/canvas-to-blob.js"></script>
<script src="/assets/plugins/blueimp-gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="/assets/plugins/blueimp-file-upload/js/jquery.iframe-transport.js"></script>
<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload.js"></script>
<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-process.js"></script>
<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-image.js"></script>
<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-audio.js"></script>
<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-video.js"></script>
<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-validate.js"></script>
<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-ui.js"></script>
<script src="/assets/js/demo/form-multiple-upload.demo.js"></script>
	
	<script>
$('#data-table-default').DataTable({
    responsive: true
  });
</script>
<script>
  $("#datepicker-terminatedate").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
		{% for (var i=0, file; file=o.files[i]; i++) { %}
		<tr class="template-upload fade show">
			<td>
				<span class="preview"></span>
			</td>
			<td>
				<div class="bg-light rounded p-3 mb-2">
					<dl class="mb-0">
						<dt class="text-dark">File Name:</dt>
						<dd class="name">{%=file.name%}</dd>
						<hr />
						<dt class="text-dark mt-10px">File Size:</dt>
						<dd class="size mb-0">Processing...</dd>
					</dl>
				</div>
				<strong class="error text-danger h-auto d-block text-left"></strong>
			</td>
			<td>
				<dl>
					<dt class="text-dark mt-3px">Progress:</dt>
					<dd class="mt-5px">
						<div class="progress progress-sm progress-striped active rounded-pill"><div class="progress-bar progress-bar-primary" style="width:0%; min-width: 40px;">0%</div></div>
					</dd>
				</dl>
			</td>
			<td nowrap>
				{% if (!i && !o.options.autoUpload) { %}
					<button class="btn btn-primary start w-100px pe-20px mb-2 d-block" disabled>
						<i class="fa fa-upload fa-fw text-dark"></i>
						<span>Start</span>
					</button>
				{% } %}
				{% if (!i) { %}
					<button class="btn btn-default cancel w-100px pe-20px d-block">
						<i class="fa fa-trash fa-fw text-muted"></i>
						<span>Cancel</span>
					</button>
				{% } %}
			</td>
		</tr>
		{% } %}
	</script>
	
	<!-- The template to display files available for download -->
	<script id="template-download" type="text/x-tmpl">
		{% for (var i=0, file; file=o.files[i]; i++) { %}
			<tr class="template-download fade show">
				<td width="1%">
					<span class="preview">
						{% if (file.thumbnailUrl) { %}
							<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}" class="rounded"></a>
						{% } else { %}
							<div class="bg-light text-center fs-20px" style="width: 80px; height: 80px; line-height: 80px; border-radius: 6px;">
								<i class="fa fa-file-image fa-lg text-gray-500"></i>
							</div>
						{% } %}
					</span>
				</td>
				<td>
					<div class="bg-light p-3 mb-2">
						<dl class="mb-0">
							<dt class="text-dark">File Name:</dt>
							<dd class="name">
								{% if (file.url) { %}
									<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
								{% } else { %}
									<span>{%=file.name%}</span>
								{% } %}
							</dd>
							<hr />
							<dt class="text-dark mt-10px">File Size:</dt>
							<dd class="size mb-0">{%=o.formatFileSize(file.size)%}</dd>
						</dl>
						{% if (file.error) { %}
							<hr />
							<div><span class="badge bg-danger me-1">ERROR</span> {%=file.error%}</div>
						{% } %}
					</div>
				</td>
				<td></td>
				<td>
					{% if (file.deleteUrl) { %}
						<button class="btn btn-danger delete w-100px mb-2 pe-20px" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
							<i class="fa fa-trash float-start fa-fw text-dark mt-2px"></i>
							<span>Delete</span>
						</button>
						<input type="checkbox" name="delete" value="1" class="toggle">
					{% } else { %}
						<button class="btn btn-default cancel w-100px me-3px pe-20px">
							<i class="fa fa-trash float-start fa-fw text-muted mt-2px"></i>
							<span>Cancel</span>
						</button>
					{% } %}
				</td>
			</tr>
		{% } %}
	</script>
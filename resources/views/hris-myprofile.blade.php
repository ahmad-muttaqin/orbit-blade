<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>OrbitHRM | My Profile</title>
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
	<h1 class="page-header">HRIS | My Profile</h1>
	<div class="row">
		<!-- BEGIN col-6 -->
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="profile-pic m-3">
                        <img src="../assets/img/user/user-13.jpg" width="100px" class="rounded d-block" alt="Profile Picture">
                        <h4 class="mt-3 mb-0 fw-bold">Aqil Anwar</h4>
                        <p>0108</p>
                        <span class="badge bg-success d-block p-2">Active</span>
                        <div class="input-group mb-2 mt-2">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-briefcase fa-fw me-2"></i></span>
                            <input type="text" class="form-control bg-white" placeholder="Admin" aria-label="Username" aria-describedby="basic-addon1" readonly>
                        </div>
                        <div class="input-group mb-2 mt-2">
                            <span class="input-group-text fw-light" id="basic-addon1"><i class="fas fa-address-card fa-fw me-2"></i></span>
                            <input type="text" class="form-control bg-white" placeholder="admin@gmail.com" aria-label="Username" aria-describedby="basic-addon1" readonly>
                        </div>
                        <div class="input-group mb-2 mt-2">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-square fa-fw me-2"></i></span>
                            <input type="text" class="form-control bg-white" placeholder="0136519887" aria-label="Username" aria-describedby="basic-addon1" readonly>
                        </div>

						<!-- Tabs navs -->
						<ul class="nav nav-tabs mb-3 flex d-block" id="ex-with-icons" role="tablist">
						<li class="nav-item border mb-2 mt-2 rounded-2" role="presentation">
							<a class="nav-link" id="ex-with-icons-tab-3" data-mdb-toggle="tab" href="#ex-with-icons-tabs-3" role="tab"
							aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i class="fas fa-user fa-fw me-2"></i>My Profile</a>
						</li>
						<li class="nav-item border mb-2 mt-2 rounded-2" role="presentation">
							<a class="nav-link" id="ex-with-icons-tab-3" data-mdb-toggle="tab" href="#ex-with-icons-tabs-3" role="tab"
							aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i class="fas fa-file-lines fa-fw me-2"></i>Employment Details</a>
						</li>
						<li class="nav-item border mb-2 mt-2 rounded-2" role="presentation">
							<a class="nav-link" id="ex-with-icons-tab-3" data-mdb-toggle="tab" href="#ex-with-icons-tabs-3" role="tab"
							aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i class="fas fa-cogs fa-fw me-2"></i>Change Password</a>
						</li>
						<li class="nav-item border mb-2 mt-2 rounded-2" role="presentation">
							<a class="nav-link" id="ex-with-icons-tab-3" data-mdb-toggle="tab" href="#ex-with-icons-tabs-3" role="tab"
							aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i class="fas fa-car fa-fw me-2"></i>Vehicle Details</a>
						</li>
						<li class="nav-item border mb-2 mt-2 rounded-2" role="presentation">
							<a class="nav-link" id="ex-with-icons-tab-3" data-mdb-toggle="tab" href="#ex-with-icons-tabs-3" role="tab"
							aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i class="fas fa-calendar fa-fw me-2"></i>eLeave</a>
						</li>
						</ul>
						<!-- Tabs navs -->
                    </div>
                </div>
            </div>
		
        </div>
		<div class="col-xl-8">
			<!-- BEGIN nav-tabs -->
            <div class="card">
               <div class="card-header bg-white bg-gray-100">
                    <h4 class="fw-bold">
                        Personal Information
                    </h4> 
                    <p class="fw-light">
                        Update your personal information
                    </p>
               </div> 
               <div class="card-body">
               <ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="#default-tab-1" data-bs-toggle="tab" class="nav-link active">
						<span class="d-sm-none">Tab 1</span>
						<span class="d-sm-block d-none">My Profile</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="#default-tab-2" data-bs-toggle="tab" class="nav-link">
						<span class="d-sm-none">Tab 2</span>
						<span class="d-sm-block d-none">Address Details</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="#default-tab-3" data-bs-toggle="tab" class="nav-link">
						<span class="d-sm-none">Tab 3</span>
						<span class="d-sm-block d-none">Employment Details</span>
					</a>
				</li>
			</ul>
			<!-- END nav-tabs -->
			<!-- BEGIN tab-content -->
			<div class="tab-content panel m-0 rounded-0 p-3">
				<!-- BEGIN tab-pane -->
				<div class="tab-pane fade active show" id="default-tab-1">
					<h4 class="mt-10px"></i>Personal Details</h4>
					<br>
					<form>
						<div class="row">
							<div class="col-sm-6">
								<label for="inputPassword5" class="form-label">Username*</label>
								<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
								<div id="passwordHelpBlock" class="form-text">
									Cannot change the username of the admin.
								</div>
							</div>
							<div class="col">
								<label for="inputPassword5" class="form-label">Personal Email</label>
								<input type="email" id="email" class="form-control" aria-describedby="email">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<label for="inputPassword5" class="form-label">Username*</label>
								<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
								<div id="passwordHelpBlock" class="form-text">
									Cannot change the username of the admin.
								</div>
								<label for="inputPassword5" class="form-label">First name*</label>
								<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
								<div id="passwordHelpBlock" class="form-text">
									Cannot change the username of the admin.
								</div>
								<label for="inputPassword5" class="form-label">Username*</label>
								<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
								<div id="passwordHelpBlock" class="form-text">
									Cannot change the username of the admin.
								</div>
							</div>
							<div class="col">
								<label for="inputPassword5" class="form-label">Password</label>
								<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
								<div id="passwordHelpBlock" class="form-text">
									Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<label for="inputPassword5" class="form-label">Username*</label>
								<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
								<div id="passwordHelpBlock" class="form-text">
									Cannot change the username of the admin.
								</div>
								<label for="inputPassword5" class="form-label">First name*</label>
								<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
								<div id="passwordHelpBlock" class="form-text">
									Cannot change the username of the admin.
								</div>
								<label for="inputPassword5" class="form-label">Username*</label>
								<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
								<div id="passwordHelpBlock" class="form-text">
									Cannot change the username of the admin.
								</div>
							</div>
							<div class="col">
								<label for="inputPassword5" class="form-label">Password</label>
								<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
								<div id="passwordHelpBlock" class="form-text">
									Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
								</div>
							</div>
						</div>

					</form>
					<p class="text-end mb-0">
						<a href="javascript:;" class="btn btn-white me-5px">Cancel</a>
						<a href="javascript:;" class="btn btn-primary">Next</a>
					</p>
				</div>
				<!-- END tab-pane -->
				<!-- BEGIN tab-pane -->
				<div class="tab-pane fade" id="default-tab-2">
					<h3 class="mt-10px"></i> Permanent Address</h3>
					<br>
					<form>
						<div class="row mb-15px">
							<label class="form-label col-form-label col-md-1">Adress 1*</label>
							<div class="col-md-5">
								<input type="email" class="form-control mb-10px" placeholder="Adress 1" />
								
							</div><label class="form-label col-form-label col-md-1">Adress 2</label>
							<div class="col-md-5">
								<input type="email" class="form-control mb-5px" placeholder="Adress" />
								
							</div>
						</div>

						<div class="row mb-15px">
							<label class="form-label col-form-label col-md-1">Postcode*</label>
							<div class="col-md-5">
								<input type="email" class="form-control mb-10px" placeholder="Postcode" />
								
							</div><label class="form-label col-form-label col-md-1">City*</label>
							<div class="col-md-5">
								<input type="email" class="form-control mb-5px" placeholder="City" />
								
							</div>
						</div>

						<div class="row mb-15px">
							<label class="form-label col-form-label col-md-1">State*</label>
							<div class="col-md-5">
							<select class="form-select">
								<option value="0" label="Select State " selected="selected">Select State </option>
								<option value="Johor" label="Johor">Johor</option>
								<option value="Kedah" label="Kedah">Kedah</option>
								<option value="Kelantan" label="Kelantan">Kelantan</option>
								<option value="Negeri Sembilan" label="Negeri Sembilan">Negeri Sembilan</option>
								<option value="Pahang" label="Pahang">Pahang</option>	
								<option value="Penang" label="Penang">Penang</option>
								<option value="Perak" label="Perak">Perak</option>
								<option value="Perlis" label="Perlis">Perlis</option>
								<option value="Sabah" label="Sabah">Sabah</option>
								<option value="Sarawak" label="Sarawak">Sarawak</option>
								<option value="Selangor" label="Selangor">Selangor</option>
								<option value="Terengganu" label="Terengganu">Terengganu</option>
								<option value="Kuala Lumpur" label="Kuala Lumpur">Kuala Lumpur</option>
								<option value="Labuan" label="Labuan">Labuan</option>
								<option value="Putrajaya" label="Putrajaya">Putrajaya</option>
							</select>
							</div>
							<label class="form-label col-form-label col-md-1">Country*</label>
							<div class="col-md-5">
							<select class="form-select">
								<option value="0" label="Malaysia" selected="selected">Malaysia </option>
							</select>
							</div>
						</div>
						<br>
						<h3 class="mt-10px"></i> Correspondence Address</h3><br>
						<div class="row mb-15px">
							<label class="form-label col-form-label col-md-1">Adress 1*</label>
							<div class="col-md-5">
								<input type="email" class="form-control mb-10px" placeholder="Adress 1" />
								
							</div><label class="form-label col-form-label col-md-1">Adress 2</label>
							<div class="col-md-5">
								<input type="email" class="form-control mb-5px" placeholder="Adress" />
								
							</div>
						</div>

						<div class="row mb-15px">
							<label class="form-label col-form-label col-md-1">Postcode*</label>
							<div class="col-md-5">
								<input type="email" class="form-control mb-10px" placeholder="Postcode" />
								
							</div><label class="form-label col-form-label col-md-1">City*</label>
							<div class="col-md-5">
								<input type="email" class="form-control mb-5px" placeholder="City" />
								
							</div>
						</div>
						<div class="row mb-15px">
							<label class="form-label col-form-label col-md-1">State*</label>
							<div class="col-md-5">
							<select class="form-select">
								<option value="0" label="Select State " selected="selected">Select State </option>
								<option value="Johor" label="Johor">Johor</option>
								<option value="Kedah" label="Kedah">Kedah</option>
								<option value="Kelantan" label="Kelantan">Kelantan</option>
								<option value="Negeri Sembilan" label="Negeri Sembilan">Negeri Sembilan</option>
								<option value="Pahang" label="Pahang">Pahang</option>	
								<option value="Penang" label="Penang">Penang</option>
								<option value="Perak" label="Perak">Perak</option>
								<option value="Perlis" label="Perlis">Perlis</option>
								<option value="Sabah" label="Sabah">Sabah</option>
								<option value="Sarawak" label="Sarawak">Sarawak</option>
								<option value="Selangor" label="Selangor">Selangor</option>
								<option value="Terengganu" label="Terengganu">Terengganu</option>
								<option value="Kuala Lumpur" label="Kuala Lumpur">Kuala Lumpur</option>
								<option value="Labuan" label="Labuan">Labuan</option>
								<option value="Putrajaya" label="Putrajaya">Putrajaya</option>
							</select>
							</div>
							<label class="form-label col-form-label col-md-1">Country*</label>
							<div class="col-md-5">
							<select class="form-select">
								<option value="0" label="Malaysia" selected="selected">Malaysia </option>
							</select>
							</div>
						</div>
					</form>
					<p class="text-end mb-0">
						<a href="javascript:;" class="btn btn-white me-5px">Previous</a>
						<a href="javascript:;" class="btn btn-primary">Next</a>
					</p>
				</div>
				<!-- END tab-pane -->
				<!-- BEGIN tab-pane -->
				<div class="tab-pane fade" id="default-tab-3">
				<h3 class="mt-10px"></i> Employment Details</h3>	<br>
				<form>
						<div class="row mb-15px">
							<label class="form-label col-form-label col-md-1">Company*</label>
							<div class="col-md-5">
							<select class="form-select">
								<option value="0" label="Please Choose" selected="selected">Please Choose </option>
								<option value="1" label="MIDC Technology Sdn Bhd">MIDC Technology Sdn Bhd</option>
								<option value="2" label="Edaran Trade Network Sdn Bhd">Edaran Trade Network Sdn Bhd</option>
								<option value="3" label="Edaran Communications Sdn Bhd">Edaran Communications Sdn Bhd</option>
								<option value="4" label="Edaran IT Services Sdn Bhd">Edaran IT Services Sdn Bhd</option>
								<option value="5" label="Sidic Technology Sdn Bhd">Sidic Technology Sdn Bhd</option>	
								<option value="6" label="Edaran Lifestyle Trading Services Sdn Bhd">Edaran Lifestyle Trading Services Sdn Bhd</option>
								<option value="7" label="Elitemac Resources Sdn Bhd">Elitemac Resources Sdn Bhd</option>
								<option value="8" label="Edaran Lifestyle Sdn Bhd">Edaran Lifestyle Sdn Bhd</option>
								<option value="9" label="Edaran Lifestyle Maintenance Sdn Bhd">Edaran Lifestyle Maintenance Sdn Bhd</option>
								<option value="10" label="Shinba-Edaran Sdn Bhd">Shinba-Edaran Sdn Bhd</option>
								
							</select>
								
							</div>
							
							<label class="form-label col-form-label col-md-1">Department*</label>
							<div class="col-md-5">
							<select class="form-select">
							<option value="0" label="Please Choose" selected="selected">Please Choose </option>
								<option value="1" label="MIDC Technology Sdn Bhd">Business Development</option>
								<option value="2" label="System Integration">System Integration</option>
								<option value="3" label="Group Corporate Planning">Group Corporate Planning </option>
								<option value="4" label="Group Human Resources Developement">Group Human Resources Developement </option>
								<option value="5" label="Major Accounts">Major Accounts </option>
								<option value="6" label="Recurring Revenue">Recurring Revenue </option>
								<option value="7" label="Group Procurement & Credit Control & Group Administration">Group Procurement & Credit Control & Group Administration</option>
								<option value="8" label="Group Financial Accounting">Group Financial Accounting</option>
								<option value="9" label="Group Legal & Secretarial">Group Legal & Secretarial</option>
								<option value="10" label="Group Internal Audit">Group Internal Audit</option>
							</select> 	
							</div>
						</div>
						<br>
						<div class="row mb-15px">
							<label class="form-label col-form-label col-md-1">Unit*</label>
							<div class="col-md-5">
							<select class="form-select">
								<option value="0" label="Please Choose" selected="selected">Please Choose </option>
								<option value="1" label="Application Unit">Application Unit</option>
								<option value="2" label="Group Internal Audit">Group Internal Audit</option>
								<option value="2" label="Infrastructure Unit">Infrastructure Unit</option>
								
							</select>
								
							</div>
							<label class="form-label col-form-label col-md-1">Branch*</label>
							<div class="col-md-5">
							<select class="form-select">
								<option value="0" label="Please Choose" selected="selected">Please Choose </option>
								<option value="1" label="Office">Office</option>
								<option value="2" label="Putrajaya">Putrajaya</option>
								<option value="2" label="Kuala Lumpur">Kuala Lumpur</option>
								
							</select>
								
							</div>
						</div>
						<br>
						<div class="row mb-15px">
							<label class="form-label col-form-label col-md-1">Job Grade*</label>
							<div class="col-md-5">
							<select class="form-select">
								<option value="0" label="Please Choose" selected="selected">Please Choose </option>
								<option value="1" label="Director">Director</option>
								<option value="2" label="Senior">Senior</option>
								<option value="2" label="Manager Unit">Manager</option>
								
							</select>
								
							</div>
							<label class="form-label col-form-label col-md-1">Designation*</label>
							<div class="col-md-5">
							<select class="form-select">
								<option value="0" label="Please Choose" selected="selected">Please Choose </option>
								<option value="1" label="Customer Care">Customer Care</option>
								<option value="2" label="PutraAdministratorjaya">Administrator</option>
								<option value="2" label="Account manager">Account manager</option>
								
							</select>
								
							</div>
						</div>
						<br>
						<div class="row mb-15px">
							<label class="form-label col-form-label col-md-1">Employment Type*</label>
							<div class="col-md-5">
							<select class="form-select">
								<option value="0" label="Please Choose" selected="selected">Please Choose </option>
								<option value="1" label="Director">Director</option>
								<option value="2" label="Senior">Senior</option>
								<option value="2" label="Manager Unit">Manager</option>
								
							</select>
								
							</div>
							<label class="form-label col-form-label col-md-1">Report To*</label>
							<div class="col-md-5">
							<select class="form-select">
								<option value="0" label="Please Choose" selected="selected">Please Choose </option>
								<option value="1" label="Customer Care">Customer Care</option>
								<option value="2" label="Administrator">Administrator</option>
								<option value="2" label="Account manager">Account manager</option>
								
							</select>
								
							</div>
						</div>

						<br>
						<div class="row mb-15px">
							<label class="form-label col-form-label col-md-1">Working Email*</label>
							<div class="col-md-5">
							<input type="email" class="form-control mb-10px" placeholder="Email" />
								
							</div>
							
							<label class="form-label col-form-label col-md-1">Joined Date*</label>
							<div class="col-md-5">
							<input type="text" class="form-control" id="datepicker-joindate" placeholder="dd/mm/yyyy" />
							</div>
								
							</div></form>
							<p class="text-end mb-0">
						<a href="javascript:;" class="btn btn-white me-5px">Previous</a>
						<a href="javascript:;" class="btn btn-primary">Save</a>
						</p>
						</div>




				
				
				</div>
               </div>
            </div>
			
				<!-- END tab-pane -->
		</div>
			
		
		<!-- END col-4 -->
	</div>
	<!-- END row -->
		</div>
		<!-- END #content -->
		
		
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
	<link href="/assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
	<script src="/assets/plugins/switchery/dist/switchery.min.js"></script>
	<link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
	<script src="/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	<!-- ================== END page-js ================== -->
</body>
</html>


<!DOCTYPE html>
<html lang="en" >
	
<head>
	<meta charset="utf-8" />
	<title>OrbitHRM  </title>
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
                        <a href="/dashboard/2" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-clipboard-list text-gray"></i>
                            </div>
                            <div class="menu-text text-gray">Dashboard</div>
                        </a>
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
                                <a href="/hris/myprofile" class="menu-link">
                                    <div class="menu-icon">
										<i class="fa fa-address-card text-gray"></i>
									</div>
                                    <div class="menu-text text-gray"> My Profile </div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="/hris" class="menu-link">
                                    <div class="menu-icon">
										<i class="fa fa-indent text-gray"></i>
									</div>
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
                                <a href="/timesheet/mytimesheet" class="menu-link">
                                    <div class="menu-icon">
										<i class="fa fa-calendar-check text-gray"></i>
									</div>
                                    <div class="menu-text text-gray">My Timesheets</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="/timesheet/timesheetapproval" class="menu-link">
                                    <div class="menu-icon">
										<i class="fa fa-receipt text-gray"></i>
									</div>
                                    <div class="menu-text text-gray">Timesheets Approval</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="/timesheet/timesheetrealtime" class="menu-link">
                                    <div class="menu-icon">
										<i class="fa fa-receipt text-gray"></i>
									</div>
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
                                    <div class="menu-icon">
										<i class="fa fa-bell text-gray"></i>
									</div>
                                    <div class="menu-text text-gray">My Attendance</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="#" class="menu-link">
                                    <div class="menu-icon">
										<i class="fa fa-list-check text-gray"></i>
									</div>
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
                                    <div class="menu-icon">
										<i class="fa fa-clipboard text-gray"></i>
									</div>
                                    <div class="menu-text text-gray">My Leave</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="#" class="menu-link">
                                    <div class="menu-icon">
										<i class="fa fa-list-check text-gray"></i>
									</div>
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
                                <a href="/project" class="menu-link">
                                <div class="menu-icon">
								    <i class="fa fa-share-nodes text-gray"></i>
							    </div>
                                    <div class="menu-text text-gray">Customer</i></div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="/project/projectinformation" class="menu-link">
                                <div class="menu-icon">
								    <i class="fa fa-book text-gray"></i>
							    </div>
                                    <div class="menu-text text-gray">Project Information</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="/project/projectregmyproject" class="menu-link">
                                <div class="menu-icon">
								    <i class="fa fa-clipboard-list text-gray"></i>
							    </div>
                                    <div class="menu-text text-gray">My Project</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="/project/projectrequest" class="menu-link">
                                <div class="menu-icon">
								    <i class="fa fa-code-pull-request text-gray"></i>
							    </div>
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
								<i class="fa fa-file-lines text-gray"></i>
							</div>
							<div class="menu-text text-gray">E-Claim</div> 
							<div class="menu-caret text-gray"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="/eclaim/myclaim" class="menu-link">
								<div class="menu-icon">
										<i class="fa fa-envelope-open-text text-gray"></i>
									</div>
									<div class="menu-text text-gray">My Claim</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
								<div class="menu-icon">
										<i class="fa fa-list-check text-gray"></i>
									</div>
									<div class="menu-text text-gray">Claim Approval</div>
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
							<div class="menu-caret text-gray"></div>
                        </a>

                            <div class="menu-submenu">
                                <div class="menu-item">
                                    <a href="/phoneDirectory" class="menu-link">
                                    <div class="menu-icon">
								        <i class="fa fa-rectangle-list text-gray"></i>
							        </div>
                                        <div class="menu-text text-gray">Phone Directory</i></div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="/organizationChart" class="menu-link">
                                    <div class="menu-icon">
								        <i class="fa fa-rectangle-list text-gray"></i>
							        </div>
                                        <div class="menu-text text-gray">Organization Chart</div>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="/departmentTree" class="menu-link">
                                    <div class="menu-icon">
								        <i class="fa fa-folder-tree text-gray"></i>
							        </div>
                                        <div class="menu-text text-gray">Department Tree</div>
                                    </a>
                                </div>
                            </div>

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
                            <div class="menu-item has-sub">
                                <a href="#" class="menu-link">
                                    <div class="menu-icon">
							    	    <i class="fa fa-file-signature text-gray"></i>
							        </div>
                                        <div class="menu-text text-gray">Timesheet</i></div>
                                        <div class="menu-caret text-gray"></div>
                                </a>
                            <div class="menu-submenu">
                                <div class="menu-item">
                                    <a href="/timesheet/reportingstatusreport" class="menu-link">
                                        <div class="menu-icon">
								             <i class="fa fa-address-card text-gray"></i>
							            </div>
                                        <div class="menu-text text-gray">Status Report</div>
                                    </a>
                                    </div>
                                    <div class="menu-item">
                                <a href="/timesheet/reportingtimesheetemployee" class="menu-link">
                                <div class="menu-icon">
								    <i class="fa fa-user-clock text-gray"></i>
							    </div>
                                    <div class="menu-text text-gray">Employee Report</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="/timesheet/timesheetovertimereport" class="menu-link">
                                <div class="menu-icon">
								    <i class="fa fa-user-gear text-gray"></i>
							    </div>
                                    <div class="menu-text text-gray">Overtime Report</div>
                                </a>
                            </div>
                                </div>
                                
                            </div>
                            <div class="menu-item has-sub">
                                <a href="#" class="menu-link">
                                <div class="menu-icon">
								    <i class="fa fa-user-check text-gray"></i>
							    </div>
                                    <div class="menu-text text-gray">E-Attendance</div>
                                    <div class="menu-caret text-gray"></div>
                                </a><div class="menu-submenu">
                                <div class="menu-item">
                                    <a href="#" class="menu-link">
                                        <div class="menu-icon">
								             <i class="fa fa-user-pen text-gray"></i>
							            </div>
                                        <div class="menu-text text-gray">Daily Report</div>
                                    </a>
                                    </div>
                                    <div class="menu-item">
                                <a href="#" class="menu-link">
                                <div class="menu-icon">
								    <i class="fa fa-users-gear text-gray"></i>
							    </div>
                                    <div class="menu-text text-gray">Status Report</div>
                                </a>
                            </div>
                            
                        </div>
                                
                                
                            </div>
                            <div class="menu-item">
								<a href="#" class="menu-link">
								<div class="menu-icon">
								<i class="fa fa-user-minus text-gray"></i>
							</div>
									<div class="menu-text text-gray">E-Leave</div>
								</a>
							</div>

                            <div class="menu-item has-sub">
								<a href="#" class="menu-link">
								<div class="menu-icon">
								<i class="fa fa-keyboard text-gray"></i>
							</div>
									<div class="menu-text text-gray">Project</div>
                                    <div class="menu-caret text-gray"></div>
								</a><div class="menu-submenu">
                                <div class="menu-item">
                                    <a href="/report/projectlisting" class="menu-link">
                                        <div class="menu-icon">
								             <i class="fa fa-book text-gray"></i>
							            </div>
                                        <div class="menu-text text-gray">Project Listing</div>
                                    </a>
                                    </div>
                                    <div class="menu-item">
                                <a href="/reporting/projectstatus" class="menu-link">
                                <div class="menu-icon">
								    <i class="fa fa-book-open text-gray"></i>
							    </div>
                                    <div class="menu-text text-gray">Project Status</div>
                                </a>
                            </div>
                            
                                </div>
                                
							</div>
                            <div class="menu-item has-sub">
								<a href="#" class="menu-link">
								<div class="menu-icon">
								<i class="fa fa-money-check text-gray"></i>
							</div>
									<div class="menu-text text-gray">Claim</div>
                                    <div class="menu-caret text-gray"></div>
								</a>
                                <div class="menu-submenu">
                                <div class="menu-item">
                                    <a href="#" class="menu-link">
                                        <div class="menu-icon">
								             <i class="fa fa-money-bill-wave text-gray"></i>
							            </div>
                                        <div class="menu-text text-gray">Claim</div>
                                    </a>
                                    </div>
                                    <div class="menu-item">
                                <a href="#" class="menu-link">
                                <div class="menu-icon">
								    <i class="fa fa-money-bill-1-wave text-gray"></i>
							    </div>
                                    <div class="menu-text text-gray">Cash Advance</div>
                                </a>
                            </div>
                            
                                </div>
							</div>
                        </div>
                    </div>

                    <!-- End Sidenav Content Orbit -->
                    <!-- Sidenav Content Orbit -->

                    <div class="menu-item has-sub">
                        <a href="/setting" class="menu-link">
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
	<h1 class="page-header">eClaim <small>| Finance Checker | View Cash Advance | Project ( Outstation )</small></h1>
	
	<!-- END page-header -->
	<!-- BEGIN panel -->
	<div class="panel panel">
		<div class="panel-body">
		
		<!-- BEGIN panel-heading -->
			<div class="row p-2">
				<div class="col-md-7">	
					<div class="form-control">
						<div class="row p-2">
							<h4>Cash Advance Information</h4>
						</div>
						
						<div class="row p-2">
							<div class="col-md-3">	
								<label class="form-label col-form-label">Type of Cash Advance :</label>
							</div>
							<div class="col-md-9">	
								<input readonly type="text" class="form-control">
							</div>
						</div>
						<div class="row p-2">
							<div class="col-md-3">	
							<label class="form-label col-form-label">Cash Advance ID:</label>
								
							</div>
							<div class="col-md-9">	
								<input readonly type="text" class="form-control">
							</div>
						</div>
						<div class="row p-2">
							<div class="col-md-3">	
								<label class="form-label col-form-label">Claim Type :</label>
							</div>
							<div class="col-md-9">	
								<input readonly type="text" class="form-control">
							</div>
						</div>
						<div class="row p-2">
							<div class="col-md-3">	
							<label class="form-label col-form-label">Mode of Transport :</label>
								
							</div>
							<div class="col-md-9">	
								<input readonly type="text" class="form-control">
							</div>
						</div>
						<div class="row p-2">
							<div class="col-md-3">	
							<label class="form-label col-form-label">Travel Date :</label>
								
							</div>
							<div class="col-md-9">	
								<input readonly type="text" class="form-control">
							</div>
						</div>
						<div class="row p-2">
							<div class="col-md-3">	
								<label class="form-label col-form-label">Project :</label>
							</div>
							<div class="col-md-9">	
								<input readonly type="text" class="form-control">
							</div>
						</div>
						<div class="row p-2">
							<div class="col-md-3">	
							<label class="form-label col-form-label">Destination :</label>
								
							</div>
							<div class="col-md-9">	
								<input readonly type="text" class="form-control">
							</div>
						</div>
						<div class="row p-2">
							<div class="col-md-3">	
								<label class="form-label col-form-label">Purpose :</label>
							</div>
							<div class="col-md-9">	
								<textarea type="text" readonly class="form-control" rows="3" maxlength="255"></textarea>
							</div>
						</div>
						<div class="row p-2">
						<table id="claimtable" class="table table-striped table-bordered align-middle">
							<thead>
								<tr>
									<th class="text-nowrap">Travel Date</th>
									<th class="text-nowrap">Project</th>
									<th class="text-nowrap">Destination</th>
									<th class="text-nowrap">Purpose</th>
								</tr>
							</thead>
								<tbody>
									<tr>
										<td>1/1/2022</td>
										<td>Orbit</td>
										<td>Kuala Lumpur</td>
										<td>Meeting</td>
									</tr>
									<tr>
										<td>1/1/2022</td>
										<td>Payje</td>
										<td>Putrajaya</td>
										<td>Project Discussion</td>
									</tr>
									<tr>
										<td>1/1/2022</td>
										<td>Orbit</td>
										<td>Kuala Lumpur</td>
										<td>Meeting</td>
									</tr>
									<tr>
										<td>1/1/2022</td>
										<td>MyVM</td>
										<td>Selangor</td>
										<td>Meeting</td>
									</tr>
									<tr>
										<td>1/1/2022</td>
										<td>Payje</td>
										<td>Kuala Lumpur</td>
										<td>Meeting</td>
									</tr>
									<tr>
										<td>1/1/2022</td>
										<td>Orbit</td>
										<td>Kajang</td>
										<td>Meeting</td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
					<br>
					<div class="form-control">
						<div class="row p-2">
							<h4> Travel Expenses</h4>
						</div>
						<div class="row p-2">
							<div class="col-md-3">	
								<label class="form-label col-form-label">Subsistence Allowance :</label>
							</div>
							<div class="col-md-3">	
								<input readonly type="text" class="form-control">
							</div>
							<div class="col-md-3">	
								<label class="form-label col-form-label">Accommodation :</label>
							</div>
							<div class="col-md-3">	
								<input readonly type="text" class="form-control">
							</div>
						</div>
						<div class="row p-2">
							<div class="col-md-3">	
								<label class="form-label col-form-label">Travel Expenses :</label>
							</div>
							<div class="col-md-3">	
								
							</div>
							<div class="col-md-3">	
								<label class="form-label col-form-label">Fuel Parking :</label>
							</div>
							<div class="col-md-3">	
								<input readonly type="text" class="form-control">
							</div>
						</div>
						<div class="row p-2">
							<div class="col-md-3">	
								
							</div>
							<div class="col-md-3">	
								
							</div>
							<div class="col-md-3">	
								<label class="form-label col-form-label">Toll/Parking :</label>
							</div>
							<div class="col-md-3">	
								<input readonly type="text" class="form-control">
							</div>
						</div>
						<div class="row p-2">
							<div class="col-md-3">	
								
							</div>
							<div class="col-md-3">	
								
							</div>
							<div class="col-md-3">	
								<label class="form-label col-form-label">Entertainment :</label>
							</div>
							<div class="col-md-3">	
								<input readonly type="text" class="form-control">
							</div>
						</div>
						<div class="row p-2">

						</div>
						<div class="row p-2">
							<div class="col-md-3">	
								
							</div>
							<div class="col-md-3">	
								
							</div>
							<div class="col-md-3">	
								<label class="form-label col-form-label">Total :</label>
							</div>
							<div class="col-md-3">	
								<input readonly type="text" class="form-control">
							</div>
						</div>
						<div class="row p-2">
							<div class="col-md-3">	
								
							</div>
							<div class="col-md-3">	
								
							</div>
							<div class="col-md-3">	
								<label class="form-label col-form-label">Maximum Paid Out (75%) :</label>
							</div>
							<div class="col-md-3">	
								<input readonly type="text" class="form-control">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5">	
				
					<div class="form-control">
						<div class="row p-2">
							<h4>Cash Advance History</h4>
							<div class="card-body">
					<div class="container">
						<ul class="timeline-with-icons">
							<li class="timeline-item mb-5 ">
								<div class="card bg-white">	
								<div class="row p-2">
									<div class="col-md-2">
										<i class="fas fa-circle-plus text-primary fa-xl fa-fw"></i>	
									</div>		
									<div class="col-md-10">	
										<p class="fw-bold">Siti Sarah Submitted claim</p>
										<div class="row">
											<div class="col-md-6">	
												<p class="text-muted mb-2 fw-bold">01/03/2022</p>
											</div>
											<div class="col-md-6">	
												<p class="text-muted">10:24 AM</p>
											</div>
										</div>
									</div>
								</div>
								</div>
							</li>
							<li class="timeline-item mb-5 ">
								<div class="card bg-white">	
								<div class="row p-2">
									<div class="col-md-2">
										<i class="fas fa-circle-check text-lime fa-xl fa-fw"></i>	
									</div>		
									<div class="col-md-10">	
										<p class="fw-bold"> Mukhsin recommended Claim</p>
										<div class="row">
											<div class="col-md-6">	
												<p class="text-muted mb-2 fw-bold">01/03/2022</p>
											</div>
											<div class="col-md-6">	
												<p class="text-muted">10:24 AM</p>
											</div>
										</div>
									</div>
								</div>
								</div>
							</li>
							<li class="timeline-item mb-5 ">
								<div class="card bg-white">	
								<div class="row p-2">
									<div class="col-md-2">
										<i class="fas fa-arrow-rotate-right text-warning fa-xl fa-fw"></i>	
									</div>		
									<div class="col-md-10">	
										<p class="fw-bold">Hassan amended Claim</p>
										<div class="row">
											<div class="col-md-6">	
												<p class="text-muted mb-2 fw-bold">01/03/2022</p>
											</div>
											<div class="col-md-6">	
												<p class="text-muted">10:24 AM</p>
											</div>
										</div>
									</div>
								</div>
								</div>
							</li>
							<li class="timeline-item mb-5 ">
								<div class="card bg-white">	
								<div class="row p-2">
									<div class="col-md-2">
										<i class="fas fa-circle-check text-lime fa-xl fa-fw"></i>	
									</div>		
									<div class="col-md-10">	
										<p class="fw-bold"> Hafizi approved Claim</p>
										<div class="row">
											<div class="col-md-6">	
												<p class="text-muted mb-2 fw-bold">01/03/2022</p>
											</div>
											<div class="col-md-6">	
												<p class="text-muted">10:24 AM</p>
											</div>
										</div>
									</div>
								</div>
								</div>
							</li>
							<li class="timeline-item mb-5 ">
								<div class="card bg-white">	
								<div class="row p-2">
									<div class="col-md-2">
										<i class="fas fa-circle-xmark text-danger fa-xl fa-fw"></i>	
									</div>		
									<div class="col-md-10">	
										<p class="fw-bold"> Nadia rejected Claim</p>
										<div class="row">
											<div class="col-md-6">	
												<p class="text-muted mb-2 fw-bold">01/03/2022</p>
											</div>
											<div class="col-md-6">	
												<p class="text-muted">10:24 AM</p>
											</div>
										</div>
									</div>
								</div>
								</div>
							</li>
							<li class="timeline-item mb-5 ">
								<div class="card bg-white">	
								<div class="row p-2">
									<div class="col-md-2">
										<i class="fas fa-circle-check text-yellow fa-xl fa-fw"></i>	
									</div>		
									<div class="col-md-10">	
										<p class="fw-bold"> Shida checked Claim</p>
										<div class="row">
											<div class="col-md-6">	
												<p class="text-muted mb-2 fw-bold">01/03/2022</p>
											</div>
											<div class="col-md-6">	
												<p class="text-muted">10:24 AM</p>
											</div>
										</div>
									</div>
								</div>
								</div>
							</li>
							<li class="timeline-item mb-5 ">
								<div class="card bg-white">	
								<div class="row p-2">
									<div class="col-md-2">
										<i class="fas fa-circle-minus text-indigo fa-xl fa-fw"></i>	
									</div>		
									<div class="col-md-10">	
										<p class="fw-bold"> Amira Closed Claim</p>
										<div class="row">
											<div class="col-md-6">	
												<p class="text-muted mb-2 fw-bold">01/03/2022</p>
											</div>
											<div class="col-md-6">	
												<p class="text-muted">10:24 AM</p>
											</div>
										</div>
								</div>
						</div>
					</div>
					</li>
				</ul>
					</div>
				</div>
			</div>
		</div>

				</div>
				
			</div>
		</div>
		<div class="row p-2">
			<div class="col align-self-start">
				<a href="/claimapproval/supervisor" class="btn btn-light" style="color: black;" type="submit"><i class="fa fa-arrow-left"></i> Back</a>
			</div>	
			<div class="col d-flex justify-content-end">
				<a class="btn btn-secondary" style="color: black" type="submit"> Cancel</a> &nbsp;
			</div>
		</div>
	</div>
	
	
	  <!-- Modal view -->
	<div class="modal fade" id="modal-view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Claim Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
				<div class="row p-2">
                    <div class="col-md-6">
                        <label class="form-label col-form-label">Applied Date</label>
                    </div>
					<div class="col-md-6">
                        <input type="text" readonly class="form-control" name="customer_name" placeholder="">
                    </div>
				</div>
				<div class="row p-2">
                    <div class="col-md-6">
                        <label class="form-label col-form-label">Claim Category</label>
                    </div>
					<div class="col-md-6">
                        <input type="text" readonly class="form-control" name="customer_name" placeholder="">
                    </div>
				</div>
				<div class="row p-2">
                    <div class="col-md-6">
                        <label class="form-label col-form-label">Amount</label>
                    </div>
					<div class="col-md-6">
                        <input type="text" readonly class="form-control" name="customer_name" placeholder="">
                    </div>
					</div>
				<div class="row p-2">
                    <div class="col-md-6">
                        <label class="form-label col-form-label">Description</label>
                    </div>
					<div class="col-md-6">
                        <textarea type="text" readonly class="form-control" name="customer_name" placeholder="" rows="3" maxlength="255"></textarea>
                    </div>
				</div>
				<div class="row p-2">
                    <div class="col-md-6">
                        <label class="form-label col-form-label">Supporting Document</label>
                    </div>
					<div class="col-md-6">
                        <input type="text" readonly class="form-control" name="customer_name" placeholder="">
                    </div>
				
                   
				</div>
				
				</div>
				<div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
            </div>
			</div>
		</div>
	</div>		
	<!-- END row -->
	
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
	<!-- required files -->
<link href="../assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<link href="../assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
<link href="../assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
<script src="../assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../assets/plugins/pdfmake/build/pdfmake.min.js"></script>
<script src="../assets/plugins/pdfmake/build/vfs_fonts.js"></script>
<script src="../assets/plugins/jszip/dist/jszip.min.js"></script>


<script>
   $("#claimtable").DataTable({
        responsive: false,
        lengthMenu: [
            [5,10, 15, 20, -1],
            [5,10, 15, 20, 'All'],
        ],
    });
	
</script>


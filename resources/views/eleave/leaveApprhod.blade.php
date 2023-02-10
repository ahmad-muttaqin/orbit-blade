
<!DOCTYPE html>
<html lang="en" >
	
<head>
	<meta charset="utf-8" />
	<title>OrbitHRM | Timesheet </title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
    <!-- ================== END page-css ================== -->
	<link href="../assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
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
                            <div class="menu-item has-sub">
                                <a href="#" class="menu-link">
                                    <div class="menu-icon">
							    	    <i class="fa fa-clipboard text-gray"></i>
							        </div>
                                    <div class="menu-text text-gray">My Leave</i></div>
                                    <!-- <div class="menu-caret text-gray"></div> -->
                                </a>   
                            </div>
                            <div class="menu-item has-sub">
                                <a href="#" class="menu-link">
                                <div class="menu-icon">
								    <i class="fa fa-list-check text-gray"></i>
							    </div>
                                    <div class="menu-text text-gray">Leave Approval</div>
                                    <div class="menu-caret text-gray"></div>
                                </a><div class="menu-submenu">
                                <div class="menu-item">
                                    <a href="/eLeave/LeaveApproval" class="menu-link">
                                        <div class="menu-icon">
								             <i class="fa fa-user-pen text-gray"></i>
							            </div>
                                        <div class="menu-text text-gray">Supervisor</div>
                                    </a>
                                    </div>
                                    <div class="menu-item">
                                <a href="/eLeave/LeaveApproval2" class="menu-link">
                                <div class="menu-icon">
								    <i class="fa fa-users-gear text-gray"></i>
							    </div>
                                    <div class="menu-text text-gray">HOD</div>
                                </a>
                            </div>
                            
                        </div>
                                
                                
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
								<a href="#" class="menu-link">
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
    <br>
	<h1 class="page-header">E-Leave <small>| Leave Approval | Head Of Department</small></h1>
	<!-- END page-header -->

	<!-- BEGIN panel -->
	<div class="panel panel">

		<!-- BEGIN panel-heading -->
		<div class="panel-body">
		    <div class="form-control">
                <div class="row">
                    <div class="col">
                        <h3>Leave Approval</h3>
                    </div>
                    <div class="col">
                        <div class="panel-heading">
                            <div class="col-md-12" style="display: flex; justify-content: flex-end" >
                                <button class="btn btn-default btn-icon btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" >
                                    <i class="fa fa-filter"></i>
                                </button>  
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div id="collapseOne" class="form-control collapse hidden">
                    <h5>Filter</h5><br>
                    <table>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="row p-1">
                                    <label for="date">Date</label>
                                    <input type="text" id="calendar" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row p-1">
                                    <label for="text">Employee Name</label>
                                    <select class="form-select" id="" >
                                        <option class="form-label" value="" selected>All</option>
                                    </select>
                                </div>
                                <!-- <div class="row">
                                    <input type="text" class="form-control" placeholder="Employee Name">
                                </div> -->
                            </div>
                            <div class="col-md-3">
                                <div class="row p-1">
                                    <label for="text">Type of Leave</label>
                                    <select class="form-select" id="" >
                                        <option class="form-label" value="" selected>All</option>
                                    </select>
                                </div>
                                <!-- <div class="row">
                                    <input type="text" class="form-control" placeholder="Type of Leave">
                                </div> -->
                            </div>
                            <div class="col-md-3">
                            <br>
                                <!-- <div class="row"> -->
                                    <button type="search" class="btn btn-info">Search</button> &ensp;
                                    <button type="reset" class="btn btn-info">Reset</button>
                                <!-- </div> -->
                            </div>
                        </div>
                    </table>
                </div>
                <br>

                <table class="table table-striped table-bordered align-middle">
                    <tr>
                        <th>Action</th>
                        <th>Applied Date</th>
                        <th>Employee Name</th>
                        <th>Type of Leave</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Total Days Applied</th>
                        <th>Status</th>
                    </tr>
                    <tr> 
                        <td >
                            <div class="btn-group">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="/timesheet/mytimesheet">View Calendar</a>
                                    <div class="dropdown-divider" style=""></div>
                                    <!-- <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#viewModal" class="btn">View Calendar</a> -->
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#approveModal-tab-1" class="btn">Approve Leave</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#rejectModal-tab-1" class="btn">Reject Leave</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Cancel Leave</a>
                                </ul>
                            </div>
                        </td>
                        <td>14/08/2022</td>
                        <td>Noraliya Azman</td>
                        <td>Annual Leave</td>
                        <td>01/09/2022</td>
                        <td>02/09/2022</td>
                        <td>2</td>
                        <td>Pending</td>
                    </tr>
                    <tr> 
                        <td >
                            <div class="btn-group">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="/timesheet/mytimesheet">View Calendar</a>
                                    <div class="dropdown-divider" style=""></div>
                                    <!-- <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#viewModal" class="btn">View Calendar</a> -->
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#approveModal-tab-1" class="btn">Approve Leave</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#rejectModal-tab-1" class="btn">Reject Leave</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Cancel Leave</a>
                                </ul>
                            </div>
                        </td>
                        <td>14/08/2022</td>
                        <td>Noraliya Azman</td>
                        <td>Annual Leave</td>
                        <td>01/09/2022</td>
                        <td>02/09/2022</td>
                        <td>2</td>
                        <td>Approved</td>
                    </tr>
                    <tr> 
                        <td >
                            <div class="btn-group">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="/timesheet/mytimesheet">View Calendar</a>
                                    <div class="dropdown-divider" style=""></div>
                                    <!-- <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#viewModal" class="btn">View Calendar</a> -->
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#approveModal-tab-1" class="btn">Approve Leave</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#rejectModal-tab-1" class="btn">Reject Leave</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Cancel Leave</a>
                                </ul>
                            </div>
                        </td>
                        <td>14/08/2022</td>
                        <td>Noraliya Azman</td>
                        <td>Annual Leave</td>
                        <td>01/09/2022</td>
                        <td>02/09/2022</td>
                        <td>2</td>
                        <td>Rejected</td>
                    </tr>         
                </table>

                <!-- TRIAL OF APPROVEMODAL -->
                <div class="modal fade" id="approveModal-tab-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Apply Leave</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form data-parsley-validate="true">
                                    <div class="row row-cols-lg-auto g-3 mb-3">
                                        <div class="col-12" style="width:50%">
                                            <label>Applied Date</label><br>
                                            <input type="text" readonly class="form-control-plaintext" value="22/09/2022">
                                        </div>
                                        <div class="col-12" style="width:50%">
                                            <label>Type of Leave*</label><br>
                                            <input type="text" readonly class="form-control-plaintext" value="Annual Leave">
                                        </div> 
                                        <div class="col-12" style="width:50%">
                                            <label>Number of Day(s) Applied</label><br>
                                            <input type="text" readonly class="form-control-plaintext" value="Half Day">
                                        </div>
                                        <div class="col-12" style="width:50%">
                                            <label>Total Days Applied*</label><br>
                                            <input type="text" readonly class="form-control-plaintext" value="0.5">
                                        </div>
                                        <div class="col-12" style="width:50%">
                                            <label>Leave Date</label><br>
                                            <input type="text" readonly class="form-control-plaintext" value="23/09/2022">
                                        </div>
                                        <div class="col-12" style="width:50%">
                                            <label>Reason*</label><br>
                                            <input type="text" readonly class="form-control-plaintext" value="Annual leave for personal matter">
                                        </div>
                                        <div class="col-12" style="width:50%">
                                            <label>Leave Session</label><br>
                                            <div></div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="radioyes">
                                                <label class="form-check-label" for="radioyes">
                                                    Morning
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="radiono" checked>
                                                <label class="form-check-label" for="radiono">
                                                    Evening
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12" style="width:50%">
                                            <label>Supporting Document*</label><br>
                                            <a href="#" class="link-primary">example.pdf</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-control">
                                            <div class="row p-2">
                                                <label for="text" style="color:blue">Recommended By:</label><br>
                                            </div>
                                            <div class="row p-2">
                                                <label for="text">Najmi Abdullah</label><br>
                                                <label for="text">Head of SAU</label><br>
                                            </div>
                                            <div class="row p-2">
                                                <label for="text">Status:</label><br>
                                                <label for="text">Approved</label><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" >Approve</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
                                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF APPROVEMODAL -->
                <!-- TRIAL REJECTMODAL -tab-1-->
                <div class="modal fade" id="rejectModal-tab-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Reason for Rejection</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form data-parsley-validate="true">
                                    <!-- EXAMPLE
                                        <div class="row">
                                            <div class="col-md-4">
                                            <label class="form-label col-md-6">Project Code:</label>
                                            </div>
                                            <div class="col-md-8">
                                            <input type="text" readonly class="form-control" />			
                                            </div>                      
                                        </div> 
                                    -->
                                    <div class="row">
                                        <div class="col-md-4">
                                        <label class="form-label row-md-6">Employee Name:</label>		
                                        </div>

                                        <div class="col-md-8">
                                        <label class="form-label row-md-6">Noraliya Azman</label>			
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                        <label class="form-label row-md-6">Submitted Date:</label>
                                        </div>

                                        <div class="col-md-8">
                                        <label class="form-label row-md-6">22/09/2022</label>			
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                        <label class="form-label row-md-6">Type of Leave:</label>
                                        </div>

                                        <div class="col-md-8">
                                        <label class="form-label row-md-6">Sick Leave</label>	
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                        <label class="form-label row-md-6">No of Day(s) Applied:</label>
                                        </div>

                                        <div class="col-md-8">
                                        <label class="form-label row-md-6">One Day</label>			
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                        <label class="form-label row-md-6">Duration:</label>
                                        </div>

                                        <div class="col-md-8">
                                        <label class="form-label row-md-6"> </label>			
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                        <label class="form-label row-md-6">Start Date:</label>
                                        </div>

                                        <div class="col-md-8">
                                        <label class="form-label row-md-6">22/09/2022</label>			
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                        <label class="form-label row-md-6">End Date:</label>
                                        </div>

                                        <div class="col-md-8">
                                        <label class="form-label row-md-6">22/09/2022</label>		
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                        <label class="form-label row-md-6">Total Days Applied:</label>
                                        </div>

                                        <div class="col-md-8">
                                        <label class="form-label row-md-6">1</label>			
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                        <label class="form-label row-md-6">Reason:</label>
                                        </div>

                                        <div class="col-md-8">
                                            <input type="text" class="form-control row p-5">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" >Reject</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
                                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF REJECTMODAL -->
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

    <link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
	<script src="/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	<!-- ================== END page-js ================== -->
</body>
</html>

<script>
    $("#calendar").datepicker({
    todayHighlight: true,
    autoclose: true,
    orientation: 'bottom',
    format: 'yyyy-mm-dd'
  });
  </script>

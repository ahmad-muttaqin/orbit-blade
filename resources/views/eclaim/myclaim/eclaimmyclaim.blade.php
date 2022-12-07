
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
	<h1 class="page-header">eClaim <small>| My Claim </small></h1>
	
	<!-- END page-header -->
	<!-- BEGIN panel -->
	<div class="panel panel">
		
		<!-- BEGIN panel-heading -->
		
		
		<div class="panel-body">
		
		<div class="form-control">	
		
		<h3>Claim Overview</h3>
		<br>
		<div class="row p-2">	
			
			
			<div class="col-sm-2">
			
				<h3 class="text-center">Total Pending Claim Approval:</h3>
				<h3 class="text-center text-primary ">2</h3>
			</div>
			
			<div class="col-sm-2">
			
			<h3 class="text-center">Total Amount Pending Claims:</h3>
			<h3 class="text-center text-primary">MYR 100.00</h3>
			</div>

			<div class="col-sm-2">
				
			<h3 class="text-center">Total Amount Paid Claims:</h3>
			<h3 class="text-center text-primary">MYR 600.00</h3>
			</div>
			
			<div class="col-sm-2">
				
			<h3 class="text-center">Total Amount Rejected Claims:</h3>
			<h3 class="text-center text-primary">MYR 0.00</h3>
			</div>

			<div class="col-sm-2">
			
			<h3 class="text-center"> Total Pending Cash Advance:</h3>
			<h3 class="text-center text-primary">2</h3>
			</div>
			
			<div class="col-sm-2">
			
			<h3 class="text-center">Total Amount Cash Advance:</h3>
			<h3 class="text-center text-primary">MYR 0.00</h3>
			</div>
			</div>
		
		</div>
		<!-- END panel-heading -->
		<!-- BEGIN panel-body --><br>
		<div class="form-control">	
			<div class="panel-body">
				<div class="row p-2">	
					<div class="col-sm-4">	
						<!-- BEGIN card -->
					<div class="card text-center border-0">
						<div class="card-header">
							<ul class="nav nav-pills card-header-pills">
								<li class="nav-item" style="margin-left: 5px;"><a href="/eclaim/applygeneralclaim" class="btn btn-primary">+ General Claim</a></li>
								<li class="nav-item" style="margin-left: 5px;"><a href="/eclaim/cashadvance" class="btn btn-primary">+ Cash Advance</a></li>
							</ul>
						</div>
						<div class="card-body">
							<div class="tab-content p-0 m-0">
								<div class="tab-pane fade active show" >
									<table id="generalclaim" class="table table-striped table-bordered align-middle">
				<thead>
					<tr>
						
						<th class="text-nowrap">Year</th>
						<th class="text-nowrap">Month</th>
						<th class="text-nowrap">Status</th>
						<th class="text-nowrap">Action</th>


					</tr>
				</thead>
				<tbody>
					<tr class="odd gradeX">
						<td>2022</td>
						<td>SEPTEMBER</td>
						<td><span class="badge bg-lime">Open</span></td>
						<td><a href="/eclaim/applyclaim" type="button" class="btn btn-primary btn-sm">+ Apply</a></td>
						
					</tr>
					<tr class="even gradeC">
						<td>2022</td>
						<td>AUGUST</td>
						<td><span class="badge bg-lime">Open</span></td>
						<td><a href="/eclaim/applyclaim" type="button" class="btn btn-primary btn-sm">Update</a></td>
						
					</tr>
					<tr class="even gradeC">
						<td>2022</td>
						<td>JULY</td>
						<td><span class="badge bg-danger">Expired</span></td>
						<td><a type="button" class="btn btn-warning btn-sm">+ Appeal</a></td>
					</tr>
					
					
				</tbody>
			</table>
								</div>
								
							</div>
						</div>
					</div>
					<!-- END card -->
				
		
			
		</div>
		
		
		<div class=" col-sm-8">	
			<!-- BEGIN card -->
			<div class="card text-center border-0">
						<div class="card-header"> 
							<ul class="nav nav-pills card-header-pills">
								<li class="nav-item"><a class="nav-link active " data-bs-toggle="tab" href="#card-pill-1">Claim</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#card-pill-2">Cash Advance</a></li>
							</ul>
						</div>
						<div class="card-body">
							<div class="tab-content p-0 m-0">
								<div class="tab-pane fade active show" id="card-pill-1">
								<div class="category-filter">
									<select id="Statusclaim" class="form-control" style=" width: 200px; margin-left: auto; margin-right: 0;">
										<option value="">Show All</option>
										<option value="Active">Active</option>
										<option value="Pending">Pending</option>
										<option value="Rejected">Amended</option>
										<option value="Jazz">Paid</option>
									</select>
									
								</div>
								
						<table id="claimtable" class="table table-striped table-bordered align-middle">
				<thead>
					<tr>
						<th class="text-nowrap">Action</th>
						<th class="text-nowrap">Year</th>
						<th class="text-nowrap">Month</th>
						<th class="text-nowrap">Claim ID</th>
						<th class="text-nowrap">Type</th>
						<th class="text-nowrap">Total Amount</th>
						<th class="text-nowrap">Status</th>
						<th class="text-nowrap">Status Date</th>

					</tr>
				</thead>
				<tbody>
					<tr class="odd gradeX">
						<td>
							<div class="btn-group me-1 mb-1">
								<a href="javascript:;" class="btn btn-primary btn-sm">Action</a>
								<a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm"><i class="fa fa-caret-down"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="/eclaim/viewmyclaim" class="dropdown-item">View Claim</a>
									<a href="javascript:;" class="dropdown-item">Update Claim</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Cancel Claim</a>
								</div>
							</div>
						</td>
						<td>2022</td>
						<td>AUGUST</td>
						<td>102</td>
						<td>MTC</td>
						<td>MYR 100.00</td>
						<td><span class="badge bg-lime">Active</span></td>
						<td>20/09/2022</td>
					</tr>
					<tr class="even gradeC">
						<td>
							<div class="btn-group me-1 mb-1">
								<a href="javascript:;" class="btn btn-primary btn-sm">Action</a>
								<a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm"><i class="fa fa-caret-down"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="/eclaim/viewgeneralclaim" class="dropdown-item">View General Claim</a>
									<a href="javascript:;" class="dropdown-item">Update Claim</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Cancel Claim</a>
								</div>
							</div>
						</td>
						<td>2022</td>
						<td>AUGUST</td>
						<td>103</td>
						<td>GNC</td>
						<td>MYR 100.00</td>
						<td><span class="badge bg-warning">Pending</span></td>
						<td>20/09/2022</td>
						
					</tr>
					<tr class="even gradeC">
						<td>
							<div class="btn-group me-1 mb-1">
								<a href="javascript:;" class="btn btn-primary btn-sm">Action</a>
								<a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm"><i class="fa fa-caret-down"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="/eclaim/viewmyclaim" class="dropdown-item">View Claim</a>
									<a href="javascript:;" class="dropdown-item">Update Claim</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Cancel Claim</a>
								</div>
							</div>
						</td>
						<td>2022</td>
						<td>AUGUST</td>
						<td>104</td>
						<td>MTC</td>
						<td>MYR 100.00</td>
						<td><span class="badge bg-success">Amended</span></td>
						<td>20/09/2022</td>
						
					</tr>
					<tr class="even gradeC">
						<td>
							<div class="btn-group me-1 mb-1">
								<a href="javascript:;" class="btn btn-primary btn-sm">Action</a>
								<a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm"><i class="fa fa-caret-down"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="/eclaim/viewgeneralclaim" class="dropdown-item">View General Claim</a>
									<a href="javascript:;" class="dropdown-item">Update Claim</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Cancel CLaim</a>
								</div>
							</div>
						</td>
						<td>2022</td>
						<td>AUGUST</td>
						<td>105</td>
						<td>GNC</td>
						<td>MYR 100.00</td>
						<td><span class="badge bg-success">Amended</span></td>
						<td>20/09/2022</td>
						
					</tr>
					<tr class="even gradeC">
						<td>
							<div class="btn-group me-1 mb-1">
								<a href="javascript:;" class="btn btn-primary btn-sm">Action</a>
								<a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm"><i class="fa fa-caret-down"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="/eclaim/viewgeneralclaim" class="dropdown-item">View General Claim</a>
									<a href="javascript:;" class="dropdown-item">Update Claim</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Cancel CLaim</a>
								</div>
							</div>
						</td>
						<td>2022</td>
						<td>AUGUST</td>
						<td>110</td>
						<td>GNC</td>
						<td>MYR 100.00</td>
						<td><span class="badge bg-danger">Rejected</span></td>
						<td>20/09/2022</td>
						
					</tr>
					<tr class="even gradeC">
						<td>
							<div class="btn-group me-1 mb-1">
								<a href="javascript:;" class="btn btn-primary btn-sm">Action</a>
								<a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm"><i class="fa fa-caret-down"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="/eclaim/viewmyclaim" class="dropdown-item">View Claim</a>
									<a href="javascript:;" class="dropdown-item">Update Claim</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Cancel CLaim</a>
								</div>
							</div>
						</td>
						<td>2022</td>
						<td>AUGUST</td>
						<td>101</td>
						<td>MTC</td>
						<td>MYR 100.00</td>
						<td><span class="badge bg-danger">Rejected</span></td>
						<td>20/09/2022</td>
						
					</tr>
					
					
					
					</tbody>
				</table> 
								</div>
								<div class="tab-pane fade" id="card-pill-2">
								<div class="category-filter">
									<select id="Statuscash" class="form-control" style=" width: 200px; margin-left: auto; margin-right: 0;">
										<option value="">Show All</option>
										<option value="Active">Active</option>
										<option value="Pending">Pending</option>
										<option value="Rejected">Amended</option>
										<option value="Jazz">Paid</option>
									</select>
								</div>
								<table id="cashadvancetable" class="table table-striped table-bordered align-middle">
				<thead>
					<tr>
						
						<th class="text-nowrap">Action</th>
						<th class="text-nowrap">Cash Advance ID</th>
						<th class="text-nowrap">Type of Cash Advance</th>
						<th class="text-nowrap">Request Date</th>
						<th class="text-nowrap">Travel Date</th>
						<th class="text-nowrap">Amount</th>
						<th class="text-nowrap">Status</th>
						<th class="text-nowrap">Status Date</th>

					</tr>
				</thead>
				<tbody>
					<tr class="odd gradeX">
						<td>
							<div class="btn-group me-1 mb-1">
								<a href="javascript:;" class="btn btn-primary btn-sm">Action</a>
								<a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm"><i class="fa fa-caret-down"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="/eclaim/viewcashprojectoutstation" class="dropdown-item">View Claim</a>
									<a href="javascript:;" class="dropdown-item">Update Claim</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Cancel Claim</a>
								</div>
							</div>
						</td>
						<td>101</td>
						<td>Project ( Outstation )</td>
						<td>102</td>
						<td>MTC</td>
						<td>MYR 100.00</td>
						<td><span class="badge bg-lime">Active</span></td>
						<td>20/09/2022</td>
					</tr>
					<tr class="even gradeC">
						<td>
							<div class="btn-group me-1 mb-1">
								<a href="javascript:;" class="btn btn-primary btn-sm">Action</a>
								<a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm"><i class="fa fa-caret-down"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="/eclaim/viewcashprojectnoneoutstation" class="dropdown-item">View Claim</a>
									<a href="javascript:;" class="dropdown-item">Update Claim</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Cancel Claim</a>
								</div>
							</div>
						</td>
						<td>102</td>
						<td>Project ( Non-Outstation )</td>
						<td>103</td>
						<td>GNC</td>
						<td>MYR 100.00</td>
						<td><span class="badge bg-warning">Pending</span></td>
						<td>20/09/2022</td>
						
					</tr>
					<tr class="even gradeC">
						<td>
							<div class="btn-group me-1 mb-1">
								<a href="javascript:;" class="btn btn-primary btn-sm">Action</a>
								<a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm"><i class="fa fa-caret-down"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="/eclaim/viewcashothersoutstation" class="dropdown-item">View Claim</a>
									<a href="javascript:;" class="dropdown-item">Update Claim</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Cancel Claim</a>
								</div>
							</div>
						</td>
						<td>103</td>
						<td>Others ( Outstation )</td>
						<td>104</td>
						<td>MTC</td>
						<td>MYR 100.00</td>
						<td><span class="badge bg-success">Amended</span></td>
						<td>20/09/2022</td>
						
					</tr>
					<tr class="even gradeC">
						<td>
							<div class="btn-group me-1 mb-1">
								<a href="javascript:;" class="btn btn-primary btn-sm">Action</a>
								<a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm"><i class="fa fa-caret-down"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="/eclaim/viewcashothersnoneoutstation" class="dropdown-item">View Claim</a>
									<a href="javascript:;" class="dropdown-item">Update Claim</a>
									<div class="dropdown-divider"></div>
									<a href="javascript:;" class="dropdown-item">Cancel CLaim</a>
								</div>
							</div>
						</td>
						<td>104</td>
						<td>Others ( Non-Oustation )</td>
						<td>105</td>
						<td>GNC</td>
						<td>MYR 100.00</td>
						<td><span class="badge bg-danger">Rejected</span></td>
						<td>20/09/2022</td>
						
					</tr>
					
					
					
					
					
					</tbody>
				</table> 
								</div>
							</div>
						</div>
					</div>
					<!-- END card -->
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
  

  $("document").ready(function () {
	$('#generalclaim').DataTable({
	"searching": false,
	"lengthChange": false,
	lengthMenu: [5, 10],
    responsive: false,
	info: false

	
  });

      $("#claimtable").dataTable({
        "searching": true,
		"lengthChange": false,
		lengthMenu: [5, 10],
		responsive: false,
		info: false,
		dom: '<"top">rt<"bottom"p><"clear">',
      });
      //Get a reference to the new datatable
      var table = $('#claimtable').DataTable();
      //Take the category filter drop down and append it to the datatables_filter div. 
      //You can use this same idea to move the filter anywhere withing the datatable that you want.
      $("#claimtable_filter.dataTables_filter").append($("#Statusclaim"));
      
      //Get the column index for the Category column to be used in the method below ($.fn.dataTable.ext.search.push)
      //This tells datatables what column to filter on when a user selects a value from the dropdown.
      //It's important that the text used here (Category) is the same for used in the header of the column to filter
      var categoryIndex = 0;
      $("#claimtable th").each(function (i) {
        if ($($(this)).html() == "Status") {
          categoryIndex = i; return false;
        }
      });
      //Use the built in datatables API to filter the existing rows by the Category column
      $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
          var selectedItem = $('#Statusclaim').val()
          var category = data[categoryIndex];
          if (selectedItem === "" || category.includes(selectedItem)) {
            return true;
          }
          return false;
        }
      );
      //Set the change event for the Category Filter dropdown to redraw the datatable each time
      //a user selects a new filter.
      $("#Statusclaim").change(function (e) {
        table.draw();
      });
      table.draw();
	  
	  $("#cashadvancetable").dataTable({
        "searching": true,
		"lengthChange": false,
		lengthMenu: [5, 10],
		responsive: false,
		info: false,
		dom: '<"top">rt<"bottom"p><"clear">',
      });

	  var table2 = $('#cashadvancetable').DataTable();
      //Take the category filter drop down and append it to the datatables_filter div. 
      //You can use this same idea to move the filter anywhere withing the datatable that you want.
      $("#cashadvancetable_filter.dataTables_filter").append($("#Statuscash"));

	  var categoryIndex2 = 0;
      $("#cashadvancetable th").each(function (i) {
        if ($($(this)).html() == "Status") {
          categoryIndex2 = i; return false;
        }
      });
      //Use the built in datatables API to filter the existing rows by the Category column
      $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
          var selectedItem2 = $('#Statuscash').val()
          var category2 = data[categoryIndex2];
          if (selectedItem2 === "" || category2.includes(selectedItem2)) {
            return true;
          }
          return false;
        }
      );
	  $("#Statuscash").change(function (e) {
        table2.draw();
      });
      table2.draw();
    });

  
	  
	
</script>


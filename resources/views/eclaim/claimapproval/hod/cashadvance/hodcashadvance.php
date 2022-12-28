<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>eclaim | eclaim approval</title>
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

	<link href="../assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />

	<!-- ================== END page-css ================== -->
	<style>
	
		</style>
		</head>
		<body>
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
                                <a href="#" class="menu-link">
                                    <div class="menu-icon">
										<i class="fa fa-receipt text-gray"></i>
									</div>
                                    <div class="menu-text text-gray">Timesheets Approval</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="#" class="menu-link">
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
                                    <a href="#" class="menu-link">
                                        <div class="menu-icon">
								             <i class="fa fa-address-card text-gray"></i>
							            </div>
                                        <div class="menu-text text-gray">Status Report</div>
                                    </a>
                                    </div>
                                    <div class="menu-item">
                                <a href="#" class="menu-link">
                                <div class="menu-icon">
								    <i class="fa fa-user-clock text-gray"></i>
							    </div>
                                    <div class="menu-text text-gray">Employee Report</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="#" class="menu-link">
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
	    <h1 class="page-header">eClaim | Cash Advance Approval | Head Of Department</h1>
        <div class="panel panel">
            <div class="panel-body">
                <div class="form-control">
                    
                 <div class="form-control">
                    <div class="row p-2">
                        <h3>Cash Advance Overview</h3>
                        <div class="row p-2">	
                            <div class="col-sm-3">
                                <h3 class="text-center">Total <br> Cash Advance:</h3>
                                <h3 class="text-center text-primary ">2</h3>
                            </div>
                            
                            <div class="col-sm-3">
                            
                            <h3 class="text-center">Total  Pending Cash <br> Advance: </h3>
                            <h3 class="text-center text-primary">3</h3>
                            </div>
                
                            <div class="col-sm-3">
                                
                                <h3 class="text-center">Total Rejected <br> Cash Advance:</h3>
                                <h3 class="text-center text-primary">6</h3>
                            </div>
                            
                            <div class="col-sm-3">
                                <h3 class="text-center">Total Closed <br> Cash Advance:</h3>
                                <h3 class="text-center text-primary">5</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-control">
                    <div class="row p-2">
                        <div class="card-header">
                            <div class="row">
                                <div class="col d-flex justify-content-start">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a href="#default-tab-1" data-bs-toggle="tab" class="nav-link active">Active</a>   
                                        </li>
                                        <li class="nav-item">
                                            <a href="#default-tab-2" data-bs-toggle="tab" class="nav-link ">Approved</a>   
                                        </li>
                                        <li class="nav-item">
                                            <a href="#default-tab-3" data-bs-toggle="tab" class="nav-link ">Rejected</a>   
                                        </li>
                                        <li class="nav-item">
                                            <a href="#default-tab-4" data-bs-toggle="tab" class="nav-link ">Closed</a>   
                                        </li>
                                    
                                    </ul>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <button class="btn btn-primary"  type="button" id="filter"> <i class="fa fa-filter" aria-hidden="true"></i></button>&nbsp;
                                    <button class="btn btn-primary"  type="button"> <i class='far fa-file-pdf'></i></button>&nbsp;
                                </div>  
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id="filteronoff" style="display: none">
                        <div class="form-control">						
                            <div class="row p-2">
                                <div class="col-md-2">	
                                        <label for="employee name" class="form-label">Employee Name</label>
                                        <select class="form-select form-select-lg mb-2" aria-label=".form-select-lg example">
                                        <option  selected value="all_employee">All Employee</option>
                                        </select>			
                                </div>
                                <div class="col-md-2">
                                            <label for="employee name" class="form-label">Month</label>
                                            <select class="form-select form-select-lg mb-2" aria-label=".form-select-lg example">
                                                <option  selected value="all_employee">Select Month</option>
                                                <option   value="all_employee">January</option>
                                                <option   value="all_employee">February</option>
                                                <option   value="all_employee">Mac</option>
                                                <option   value="all_employee">April</option>
                                                <option   value="all_employee">Mei</option>
                                                <option   value="all_employee">June</option>
                                                <option   value="all_employee">July </option>
                                                <option   value="all_employee">August</option>
                                                <option   value="all_employee">September</option>
                                                <option   value="all_employee">October</option>
                                                <option   value="all_employee">November</option>
                                                <option   value="all_employee">Disember</option>
                                            </select>
                                </div>
                                <div class="col-md-2">
                                            <label for="employee name" class="form-label">Claim Type</label>
                                            <select class="form-select form-select-lg mb-2" aria-label=".form-select-lg example">
                                                <option  selected value="all_employee">Select Claim Type</option>
                                                <option   value="all_employee">MTC  </option>
                                                <option   value="all_employee">GNC  </option>
                                            </select>						
                                </div>
                                <div class="col-md-2">
                                            <label for="employee name" class="form-label">Status</label>
                                            <select class="form-select form-select-lg mb-2" aria-label=".form-select-lg example">
                                                <option  selected value="">Select Status</option>
                                                <option   value="">Pending</option>
                                                <option value="">Approved</option>
                                                <option value="">Rejected</option>
                                                <option value="">Amended</option>
                                                <option value="">Cancelled</option>
                                            </select>
                                </div>

                                <div class="col-md-2"></div>

                                <div class="col">
                                    <div class="row-p-2">
                                        <label for="test"></label>
                                    </div>
                                    
                                    <div class="row">
                                        <button class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
                                    </div>
                                </div>&nbsp;

                                <div class="col">
                                    <div class="row-p-2">
                                        <label for="test"></label>
                                    </div>
                                    
                                    <div class="row">
                                        <button class="btn btn-primary">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="tab-content panel p-3 rounded">
                            <div class="tab-pane fade active show" id="default-tab-1">
                                <!-- {{-- claim approval --}} -->
                                <table  id="active"  class="table table-striped table-bordered align-middle">
                                    <thead>
                                        <tr>
                                            <th  data-orderable="false"></th>	
                                            <th  data-orderable="false">Action</th>
                                            <th class="text-nowrap">Form ID</th>
                                            <th class="text-nowrap">Requested By</th>
                                            <th class="text-nowrap">Type of Cash Advance</th>
                                            <th class="text-nowrap">Request Date</th>
                                            <th class="text-nowrap">Travel Date</th>
                                            <th class="text-nowrap"> Amount (RM)</th>
                                            <th class="text-nowrap">Status Date</th>
                                            <th class="text-nowrap">Status</th>
                                            <th class="text-nowrap">Category (HIDE)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value=""></td>
                                            <td>
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                                <div class="dropdown-menu">
                                                    <a href="/claimapproval/viewprojectoutstation" id="" data-id="" class="dropdown-item"><i class="fa fa-eye" aria-hidden="true"></i> View PO</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-ban" aria-hidden="true"></i> Reject</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                                                </div>
                                            <td>201</td>
                                            <td>Marimar</td>
                                            <td>Project  (Outstation)</td>
                                            <td>20/7/2022</td>
                                            <td>24/7/2022</td>
                                            <td>MYR130</td>
                                            <td>Pending</td>
                                            <td>21/7/2022</td>
                                            <td>PO</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value=""></td>
                                            <td>
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                                <div class="dropdown-menu">
                                                    <a href="/claimapproval/viewprojectnoneoutstation" id="" data-id="" class="dropdown-item"><i class="fa fa-eye" aria-hidden="true"></i> View PNO</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-ban" aria-hidden="true"></i> Reject</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                                                </div>
                                            </td>
                                            <td>202</td>
                                            <td>Syqfiq</td>
                                            <td>Project (Non-Outstation)</td>
                                            <td>14/7/2022</td>
                                            <td>23/7/2022</td>
                                            <td>MYR250.00</td>
                                            <td>Pending</td>
                                            <td>21/07/2022</td>
                                            <td>PNO</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value=""></td>
                                            <td>
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                                <div class="dropdown-menu">
                                                    <a href="/claimapproval/viewothersoutstation" id="" data-id="" class="dropdown-item"><i class="fa fa-eye" aria-hidden="true"></i> View OO</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-ban" aria-hidden="true"></i> Reject</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                                                </div>
                                            </td>
                                            <td>202</td>
                                            <td>Syqfiq</td>
                                            <td>Others (Outstation)</td>
                                            <td>14/7/2022</td>
                                            <td>23/7/2022</td>
                                            <td>MYR250.00</td>
                                            <td>Pending</td>
                                            <td>21/07/2022</td>
                                            <td>OO</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value=""></td>
                                            <td>
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                                <div class="dropdown-menu">
                                                    <a href="/claimapproval/viewothersnoneoutstation" id="" data-id="" class="dropdown-item"><i class="fa fa-eye" aria-hidden="true"></i> View ONO</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-ban" aria-hidden="true"></i> Reject</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                                                </div>
                                            </td>
                                            <td>202</td>
                                            <td>Syqfiq</td>
                                            <td>Others (Non-Outstation)</td>
                                            <td>14/7/2022</td>
                                            <td>23/7/2022</td>
                                            <td>MYR250.00</td>
                                            <td>Pending</td>
                                            <td>21/07/2022</td>
                                            <td>ONO</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade show" id="default-tab-2">
                                <table  id="approved"  class="table table-striped table-bordered align-middle">
                                    <thead>
                                        <tr>
                                            <th  data-orderable="false"></th>	
                                            <th  data-orderable="false">Action</th>
                                            <th class="text-nowrap">Form ID</th>
                                            <th class="text-nowrap">Requested By</th>
                                            <th class="text-nowrap">Type of Cash Advance</th>
                                            <th class="text-nowrap">Request Date</th>
                                            <th class="text-nowrap">Travel Date</th>
                                            <th class="text-nowrap"> Amount (RM)</th>
                                            <th class="text-nowrap">Status Date</th>
                                            <th class="text-nowrap">Status</th>
                                            <th class="text-nowrap">Category (HIDE)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value=""></td>
                                            <td>
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                                <div class="dropdown-menu">
                                                    <a href="/claimapproval/viewprojectoutstation" id="" data-id="" class="dropdown-item"><i class="fa fa-eye" aria-hidden="true"></i> View PO</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-ban" aria-hidden="true"></i> Reject</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                                                </div>
                                            <td>201</td>
                                            <td>Marimar</td>
                                            <td>Project  (Outstation)</td>
                                            <td>20/7/2022</td>
                                            <td>24/7/2022</td>
                                            <td>MYR130</td>
                                            <td>Pending</td>
                                            <td>21/7/2022</td>
                                            <td>PO</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value=""></td>
                                            <td>
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                                <div class="dropdown-menu">
                                                    <a href="/claimapproval/viewprojectnoneoutstation" id="" data-id="" class="dropdown-item"><i class="fa fa-eye" aria-hidden="true"></i> View PNO</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-ban" aria-hidden="true"></i> Reject</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                                                </div>
                                            </td>
                                            <td>202</td>
                                            <td>Syqfiq</td>
                                            <td>Project (Non-Outstation)</td>
                                            <td>14/7/2022</td>
                                            <td>23/7/2022</td>
                                            <td>MYR250.00</td>
                                            <td>Pending</td>
                                            <td>21/07/2022</td>
                                            <td>PNO</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value=""></td>
                                            <td>
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                                <div class="dropdown-menu">
                                                    <a href="/claimapproval/viewothersoutstation" id="" data-id="" class="dropdown-item"><i class="fa fa-eye" aria-hidden="true"></i> View OO</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-ban" aria-hidden="true"></i> Reject</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                                                </div>
                                            </td>
                                            <td>202</td>
                                            <td>Syqfiq</td>
                                            <td>Others (Outstation)</td>
                                            <td>14/7/2022</td>
                                            <td>23/7/2022</td>
                                            <td>MYR250.00</td>
                                            <td>Pending</td>
                                            <td>21/07/2022</td>
                                            <td>OO</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value=""></td>
                                            <td>
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                                <div class="dropdown-menu">
                                                    <a href="/claimapproval/viewothersnoneoutstation" id="" data-id="" class="dropdown-item"><i class="fa fa-eye" aria-hidden="true"></i> View ONO</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-ban" aria-hidden="true"></i> Reject</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                                                </div>
                                            </td>
                                            <td>202</td>
                                            <td>Syqfiq</td>
                                            <td>Others (Non-Outstation)</td>
                                            <td>14/7/2022</td>
                                            <td>23/7/2022</td>
                                            <td>MYR250.00</td>
                                            <td>Pending</td>
                                            <td>21/07/2022</td>
                                            <td>ONO</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade show" id="default-tab-3">
                                <table  id="rejected"  class="table table-striped table-bordered align-middle">
                                    <thead>
                                        <tr>
                                            <th  data-orderable="false"></th>	
                                            <th  data-orderable="false">Action</th>
                                            <th class="text-nowrap">Form ID</th>
                                            <th class="text-nowrap">Requested By</th>
                                            <th class="text-nowrap">Type of Cash Advance</th>
                                            <th class="text-nowrap">Request Date</th>
                                            <th class="text-nowrap">Travel Date</th>
                                            <th class="text-nowrap"> Amount (RM)</th>
                                            <th class="text-nowrap">Status Date</th>
                                            <th class="text-nowrap">Status</th>
                                            <th class="text-nowrap">Remarks</th>
                                            <th class="text-nowrap">Category (HIDE)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value=""></td>
                                            <td>
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                                <div class="dropdown-menu">
                                                    <a href="/claimapproval/viewprojectoutstation" id="" data-id="" class="dropdown-item"><i class="fa fa-eye" aria-hidden="true"></i> View PO</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-ban" aria-hidden="true"></i> Reject</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                                                </div>
                                            <td>201</td>
                                            <td>Marimar</td>
                                            <td>Project  (Outstation)</td>
                                            <td>20/7/2022</td>
                                            <td>24/7/2022</td>
                                            <td>MYR130</td>
                                            <td>Rejected</td>
                                            <td>21/7/2022</td>
                                            <td>Not Enough</td>
                                            <td>PO</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value=""></td>
                                            <td>
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                                <div class="dropdown-menu">
                                                    <a href="/claimapproval/viewprojectnoneoutstation" id="" data-id="" class="dropdown-item"><i class="fa fa-eye" aria-hidden="true"></i> View PNO</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-ban" aria-hidden="true"></i> Reject</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                                                </div>
                                            </td>
                                            <td>202</td>
                                            <td>Syqfiq</td>
                                            <td>Project (Non-Outstation)</td>
                                            <td>14/7/2022</td>
                                            <td>23/7/2022</td>
                                            <td>MYR250.00</td>
                                            <td>Rejected</td>
                                            <td>21/07/2022</td>
                                            <td>Not Enough</td>
                                            <td>PNO</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value=""></td>
                                            <td>
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                                <div class="dropdown-menu">
                                                    <a href="/claimapproval/viewothersoutstation" id="" data-id="" class="dropdown-item"><i class="fa fa-eye" aria-hidden="true"></i> View OO</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-ban" aria-hidden="true"></i> Reject</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                                                </div>
                                            </td>
                                            <td>202</td>
                                            <td>Syqfiq</td>
                                            <td>Others (Outstation)</td>
                                            <td>14/7/2022</td>
                                            <td>23/7/2022</td>
                                            <td>MYR250.00</td>
                                            <td>Rejected</td>
                                            <td>21/07/2022</td>
                                            <td>Not Enough</td>
                                            <td>OO</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value=""></td>
                                            <td>
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                                <div class="dropdown-menu">
                                                    <a href="/claimapproval/viewothersnoneoutstation" id="" data-id="" class="dropdown-item"><i class="fa fa-eye" aria-hidden="true"></i> View ONO</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-ban" aria-hidden="true"></i> Reject</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                                                </div>
                                            </td>
                                            <td>202</td>
                                            <td>Syqfiq</td>
                                            <td>Others (Non-Outstation)</td>
                                            <td>14/7/2022</td>
                                            <td>23/7/2022</td>
                                            <td>MYR250.00</td>
                                            <td>Rejected</td>
                                            <td>21/07/2022</td>
                                            <td>Not Enough</td>
                                            <td>ONO</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade show" id="default-tab-4">
                                <table  id="closed"  class="table table-striped table-bordered align-middle">
                                    <thead>
                                        <tr>
                                            <th  data-orderable="false"></th>	
                                            <th  data-orderable="false">Action</th>
                                            <th class="text-nowrap">Form ID</th>
                                            <th class="text-nowrap">Requested By</th>
                                            <th class="text-nowrap">Type of Cash Advance</th>
                                            <th class="text-nowrap">Request Date</th>
                                            <th class="text-nowrap">Travel Date</th>
                                            <th class="text-nowrap"> Amount (RM)</th>
                                            <th class="text-nowrap">Cleared Date</th>
                                            <th class="text-nowrap">Status</th>
                                            <th class="text-nowrap">Category (HIDE)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value=""></td>
                                            <td>
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                                <div class="dropdown-menu">
                                                    <a href="/claimapproval/viewprojectoutstation" id="" data-id="" class="dropdown-item"><i class="fa fa-eye" aria-hidden="true"></i> View PO</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-ban" aria-hidden="true"></i> Reject</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                                                </div>
                                            <td>201</td>
                                            <td>Marimar</td>
                                            <td>Project  (Outstation)</td>
                                            <td>20/7/2022</td>
                                            <td>24/7/2022</td>
                                            <td>MYR130</td>
                                            <td>PAID</td>
                                            <td>21/7/2022</td>
                                            <td>PO</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value=""></td>
                                            <td>
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                                <div class="dropdown-menu">
                                                    <a href="/claimapproval/viewprojectnoneoutstation" id="" data-id="" class="dropdown-item"><i class="fa fa-eye" aria-hidden="true"></i> View PNO</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-ban" aria-hidden="true"></i> Reject</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                                                </div>
                                            </td>
                                            <td>202</td>
                                            <td>Syqfiq</td>
                                            <td>Project (Non-Outstation)</td>
                                            <td>14/7/2022</td>
                                            <td>23/7/2022</td>
                                            <td>MYR250.00</td>
                                            <td>PAID</td>
                                            <td>21/07/2022</td>
                                            <td>PNO</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value=""></td>
                                            <td>
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                                <div class="dropdown-menu">
                                                    <a href="/claimapproval/viewothersoutstation" id="" data-id="" class="dropdown-item"><i class="fa fa-eye" aria-hidden="true"></i> View OO</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-ban" aria-hidden="true"></i> Reject</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                                                </div>
                                            </td>
                                            <td>202</td>
                                            <td>Syqfiq</td>
                                            <td>Others (Outstation)</td>
                                            <td>14/7/2022</td>
                                            <td>23/7/2022</td>
                                            <td>MYR250.00</td>
                                            <td>PAID</td>
                                            <td>21/07/2022</td>
                                            <td>OO</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value=""></td>
                                            <td>
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Action <i class="fa fa-caret-down"></i></a>
                                                <div class="dropdown-menu">
                                                    <a href="/claimapproval/viewothersnoneoutstation" id="" data-id="" class="dropdown-item"><i class="fa fa-eye" aria-hidden="true"></i> View ONO</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-ban" aria-hidden="true"></i> Reject</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" id="" data-id="" class="dropdown-item"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
                                                </div>
                                            </td>
                                            <td>202</td>
                                            <td>Syqfiq</td>
                                            <td>Others (Non-Outstation)</td>
                                            <td>14/7/2022</td>
                                            <td>23/7/2022</td>
                                            <td>MYR250.00</td>
                                            <td>PAID</td>
                                            <td>21/07/2022</td>
                                            <td>ONO</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>  
                    </div>
                    </div>
                </div>
            </div> 
        </div> 

      <!-- Modal reject -->
      <div class="modal fade" id="modalreject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Reason for Rejection</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">State Reason</label><br>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="input reason"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
      </div>


      <!-- Modal amend -->
      <div class="modal fade" id="modalamend" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Reason for Amendment</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">State reason</label><br>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="input reason"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
      </div>
         
      </div>


		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="../assets/js/vendor.min.js"></script>
	<script src="../assets/js/app.min.js"></script>


	<!-- ================== END core-js ================== -->


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
	<link href="/assets/plugins/jstree/dist/themes/default/style.min.css" rel="stylesheet" />
	<script src="/assets/plugins/jstree/dist/jstree.min.js"></script>


	<script>
		$(document).ready(function () {

            $('#active')
				.dataTable({
					// "responsive": true,
					"bLengthChange": false,
					"bFilter": false,
				});

			$('#approved')
			.dataTable({
				// "responsive": true,
				"bLengthChange": false,
				"bFilter": false,
				});
            
            $('#rejected')
			.dataTable({
				// "responsive": true,
				"bLengthChange": false,
				"bFilter": false,
				});
            
            $('#closed')
			.dataTable({
				// "responsive": true,
				"bLengthChange": false,
				"bFilter": false,
				});
            $("#filter").click(function(){
			$("#filteronoff").toggle();
            });

			// tablecashadvance

            // hide remarks
            // $('#tableclaimapproval th:nth-child(11),td:nth-child(11)').hide();
    });
	</script>

	


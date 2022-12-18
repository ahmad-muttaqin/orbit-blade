
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


	{{-- timepicker --}}
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
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
	<h1 class="page-header">eClaim <small>| My Claim | Apply Monthly Claim</small></h1>
	
	<!-- END page-header -->
	<!-- BEGIN panel -->
	<div class="panel panel">
		
		<!-- BEGIN panel-heading -->
		
		
		<div class="panel-body">
			
			{{-- <div class="row p-2">
				<div class="col-md-3">	
					<div class="form-check">
						<a href="/eclaim/cashadvance" class="btn btn-primary">Cash Advance?</a>
                    </div>
				</div>
				
			</div> --}}
			<div class="row p-2">
				<div class="col-md-6">	
					
					<div class="form-control">	
						<div class="row p-2">
							<div class="col-md-3">
								<label class="form-label">Claim ID</label>
							</div>
							<div class="col-md-3">
								<input readonly type="text" class="form-control">
							</div>
							<div class="col-md-3">
								<label class="form-label">Claim Type</label>
							</div>
							<div class="col-md-3">
								<select class="form-select" >
									<option class="form-label" value="" selected>Please Select</option>
									
								</select>
							</div>
						</div>

						<div class="row p-2">
							<div class="col-md-3">
								<label class="form-label">Status</label>
							</div>
							<div class="col-md-3">
								<input readonly type="text" value="Draft"class="form-control">
							</div>
							<div class="col-md-3">
								<label class="form-label">Total Amount</label>
							</div>
							<div class="col-md-3">
								<input readonly type="text" class="form-control">
							</div>
						</div>
						<div class="row p-2">
							<br>
						</div>
							<div class="">	
								
									<div class="accordion" id="accordionExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingOne">
											<button class="accordion-button bg-white-500 text-black px-3 py-10px pointer-cursor " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<label class="form-label">Personal Claims</label>
											</button>
											</h2>
											<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
											<div class="accordion-body bg-gray-100 text-black">
												<div class="row p-2">
													<div class="col-md-4">
														<label class="form-label">Applied Date</label>
													</div>
													<div class="col-md-8">
														<input type="text" class="form-control" id="datepickerpc">
													</div>
												</div>
												<div class="row p-2">
													<div class="col-md-4">
														<label class="form-label">Claim Category</label>
													</div>
													<div class="col-md-8">
														<select class="form-select" id="" readonly>
															<option class="form-label" value="" selected>Please Select</option>
														</select>
													</div>
												</div>
												<div class="row p-2">
													<div class="col-md-4">
														<label class="form-label">Amount</label>
													</div>
													<div class="col-md-8">
														<input  type="number" class="form-control">
													</div>
												</div>
												<div class="row p-2">
													<div class="col-md-4">
														<label class="form-label">Description</label>
													</div>
													<div class="col-md-8">
														<textarea class="form-control" id="" rows="3"></textarea>
													</div>
												</div>
												<div class="row p-2">
													<div class="col-md-4">
														<label class="form-label">Content Description</label>
													</div>
													<div class="col-md-8">
														<input  type="text" class="form-control">
													</div>
												</div>
												<div class="row p-2">
													<div class="col-md-4">
														<label class="form-label">Supporting Document</label>
													</div>
													<div class="col-md-8">
														
														<input type="file" class="form-control-file" id="">
													</div>
												</div>
												<div class="row p-2">
													<div class="modal-footer">

														<button type="button" class="btn btn-secondary" >Reset</button>
														<button type="button" class="btn btn-primary" >Save</button>
														
													</div>
												</div>
											</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingTwo">
												<button class="accordion-button bg-white-500 text-black px-3 py-10px pointer-cursor collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													<label class="form-label">Travelling</label>
												</button>
											</h2>
											<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
												<div class="accordion-body bg-gray-100 text-black">
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Travel Date</label>
														</div>
														<div class="col-md-8">
															<input  type="text " class="form-control" id="datepickertc">
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label" >Start Time</label>
														</div>
														<div class="col-md-3">
															<input  type="text" id="timestart" class="timepicker form-control form-control" value="">
														</div>
														<div class="col-md-2">
															<label class="form-label">End Time</label>
														</div>
														<div class="col-md-3">
															<input  type="text" id="timeend" class=" timepicker form-control form-control">
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Total Hours</label>
														</div>
														<div class="col-md-8">
															<input readonly type="text" id="totalduration" class="form-control">
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Description</label>
														</div>
														<div class="col-md-8">
															{{-- <input readonly type="text" class="form-control"> --}}
															<textarea class="form-control" id="" rows="3"></textarea>
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Reason using Web</label>
														</div>
														<div class="col-md-8">
															<input  type="text" class="form-control">
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Type of Transport</label>
														</div>
														<div class="col-md-8">
															{{-- <input readonly type="text" class="form-control"> --}}
															<select class="form-select" id="">
																<option class="form-label" value="" selected>Please Select</option>
																<option class="form-label" value="" > Personal Car</option>
																<option class="form-label" value="" >Personal Motocycle</option>
																<option class="form-label" value="" > Public Transport</option>
																<option class="form-label" value="" >Company Car</option>
																<option class="form-label" value="" > Carpool</option>
															</select>
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Location Start</label>
														</div>
														<div class="col-md-8">
															{{-- <input readonly type="text" class="form-control"> --}}
															<select class="form-select" id="ls">
																<option class="form-label" value="" selected>Please Select</option>
																<option class="form-label" value="" >Home</option>
																<option class="form-label" value="" >Office</option>
																<option class="form-label" value="3" > My Project</option>
																<option class="form-label" value="" >Others</option>
															</select>
														</div>
													</div>
													<div class="row p-2" id="project" style="display: none">
														<div class="col-md-4">
															<label class="form-label">Project</label>
														</div>
														<div class="col-md-8">
															{{-- <input readonly type="text" class="form-control"> --}}
															<select class="form-select" id="">
																<option class="form-label" value="" selected>Please Select</option>
															</select>
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Address Start</label>
														</div>
														<div class="col-md-8">
															<input  type="text" class="form-control">
															
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Destination</label>
														</div>
														<div class="col-md-8">
															{{-- <input readonly type="text" class="form-control"> --}}
															<select class="form-select" id="dest">
																<option class="form-label" value="" selected>Please Select</option>
																<option class="form-label" value="" >Home</option>
																<option class="form-label" value="" >Office</option>
																<option class="form-label" value="3" >My Project</option>
																<option class="form-label" value="4" >Others</option>
															</select>
														</div>
													</div>
													<div class="row p-2" id="projectdest" style="display: none">
														<div class="col-md-4">
															<label class="form-label">Project</label>
														</div>
														<div class="col-md-8">
															{{-- <input readonly type="text" class="form-control"> --}}
															<select class="form-select" id="dest">
																<option class="form-label" value="" selected>Please Select</option>
															</select>
														</div>
													</div>
													<div class="row p-2" id="logname" style="display: none">
														<div class="col-md-4">
															<label class="form-label">Log Name</label>
														</div>
														<div class="col-md-8">
															{{-- <input readonly type="text" class="form-control"> --}}
															<select class="form-select" id="">
																<option class="form-label" value="" selected>Please Select</option>
															</select>
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Destination Address</label>
														</div>
														<div class="col-md-8">
															<input  type="text" class="form-control">
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Mileage</label>
														</div>
														<div class="col-md-3">
															<input readonly type="text" class="form-control">
														</div>
													
														<div class="col-md-2">
															<label class="form-label">Petrol/Fares</label>
														</div>
														<div class="col-md-3">
															<input  type="number" class="form-control">
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Toll</label>
														</div>
														<div class="col-md-3">
															<input  type="number" class="form-control">
														</div>
													
														<div class="col-md-2">
															<label class="form-label">Parking</label>
														</div>
														<div class="col-md-3">
															<input  type="number" class="form-control">
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Supporting Document</label>
														</div>
														<div class="col-md-8">
															<input type="file" class="form-control-file" id="">
														</div>
													</div>
													<div class="row p-2">
													<div class="modal-footer">

														<button type="button" class="btn btn-secondary" >Reset</button>
														<button type="button" class="btn btn-primary" >Save</button>
														
													</div>
												</div>
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingThree">
												<button class="accordion-button bg-white-500 text-black px-3 py-10px pointer-cursor collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													<label class="form-label">Subsistence Allowance & Accommodation</label>
												</button>
											</h2>
											<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
											<div class="accordion-body bg-gray-100 text-black">
												<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Claim For</label>
														</div>
														<div class="col-md-8">
															<select class="form-select" id="ca">
																<option class="form-label" value="" selected>Please Select</option>
																<option class="form-label" value="1" >With Cash Advance</option>
																<option class="form-label" value="2" >Without Cash Advance</option>
															</select>
														</div>
												</div>

												<div class="row p-2">
															<div class="col-md-4">
																<label class="form-label">Supporting Document</label>
															</div>
															<div class="col-md-8">
																<input type="file" class="form-control-file" id="">
															</div>
													</div>
												
												<div class="WC" style="display:none">
													
													<div class="row p-2">
														<table id="claimtable" class="table table-striped table-bordered align-middle">
															<thead>
																<tr>
																	<th>-</th>
																	<th class="text-nowrap">No</th>
																	<th class="text-nowrap">Form ID</th>
																	<th class="text-nowrap">Type of Cash Advance</th>
																	<th class="text-nowrap">Travel Date</th>
																	<th class="text-nowrap">Amount</th>
																	
																</tr>
															</thead>
															<tbody>
																
																<tr>
																	<td><input class="form-check-input" type="checkbox"/></td>
																	<td>1</td>
																	<td>Form ID 1</td>
																	<td>Type of Cash Advance 1</td>
																	<td>1/1/2022</td>
																	<td>MYR200</td>
																</tr>
																<tr>
																	<td><input class="form-check-input" type="checkbox"/></td>
																	<td>2</td>
																	<td>Form ID 2</td>
																	<td>Type of Cash Advance 2</td>
																	<td>1/2/2022</td>
																	<td>MYR201</td>
																</tr>
																<tr>
																	<td><input class="form-check-input" type="checkbox"/></td>
																	<td>3</td>
																	<td>Form ID 3</td>
																	<td>Type of Cash Advance 3</td>
																	<td>2/3/2022</td>
																	<td>MYR22</td>
																</tr>
																<tr>
																	<td><input class="form-check-input" type="checkbox"/></td>
																	<td>4</td>
																	<td>Form ID 4</td>
																	<td>Type of Cash Advance 4</td>
																	<td>3/5/2022</td>
																	<td>MYR220</td>
																</tr>
																<tr>
																	<td><input class="form-check-input" type="checkbox"/></td>
																	<td>5</td>
																	<td>Form ID 5</td>
																	<td>Type of Cash Advance 5</td>
																	<td>3/6/2022</td>
																	<td>MYR230</td>
																</tr>
																<tr>
																	<td><input class="form-check-input" type="checkbox"/></td>
																	<td>6</td>
																	<td>Form ID 6</td>
																	<td>Type of Cash Advance 6</td>
																	<td>1/8/2022</td>
																	<td>MYR250</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="modal-footer">

														
														<button type="button" class="btn btn-primary" >Save</button>
														
													</div>
												</div>
												<div class="WOC" style="display:none">
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Travel Date</label>
														</div>
														<div class="col-md-8">
															<input  type="text" class="form-control">
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Start Time</label>
														</div>
														<div class="col-md-3">
															<input  type="text" class="form-control">
														</div>
														<div class="col-md-2">
															<label class="form-label">End Time</label>
														</div>
														<div class="col-md-3">
															<input  type="text" class="form-control">
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Project</label>
														</div>
														<div class="col-md-8">
															<input  type="text" class="form-control">
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Description</label>
														</div>
														<div class="col-md-8">
															{{-- <input  type="text" class="form-control"> --}}
															<textarea class="form-control" id="" rows="3"></textarea>
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Subsistence Allowance:</label>
														</div>
														<div class="col-md-2">
															<label class="form-label">Breakfast</label>
														</div>
														<div class="col-md-2">
															<input readonly type="text" class="form-control">
														</div>
														<div class="col-md-2">
															<label class="form-label">X day =</label>
														</div>
														<div class="col-md-2">
															<input  type="text" class="form-control">
														</div>
														
													</div>
													<div class="row p-2">
														<div class="col-md-4">

														</div>
														<div class="col-md-2">
															<label class="form-label">Lunch</label>
														</div>
														<div class="col-md-2">
															<input readonly type="text" class="form-control">
														</div>
														<div class="col-md-2">
															<label class="form-label">X day =</label>
														</div>
														<div class="col-md-2">
															<input  type="text" class="form-control">
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
														</div>
														<div class="col-md-2">
															<label class="form-label">Dinner</label>
														</div>
														<div class="col-md-2">
															<input readonly type="text" class="form-control">
														</div>
														<div class="col-md-2">
															<label class="form-label">X day =</label>
														</div>
														<div class="col-md-2">
															<input  type="text" class="form-control">
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
														</div>
														<div class="col-md-2">
															
														</div>
														<div class="col-md-2">
															
														</div>
														<div class="col-md-2">
															Total Subsistence
														</div>
														<div class="col-md-2">
															<input readonly  type="text" class="form-control">
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label">Accommodation:</label>
														</div>
														<div class="col-md-2">
															<input class="form-check-input" type="checkbox"/>
															<label class="form-label">Hotel</label>
														</div>
														<div class="col-md-2">
															<input readonly type="text" class="form-control">
														</div>
														<div class="col-md-2">
															<label class="form-label">X Night =</label>
														</div>
														<div class="col-md-2">
															<input  type="text" class="form-control">
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label"></label>
														</div>
														<div class="col-md-2">
															<input class="form-check-input" type="checkbox"/>
															<label class="form-label">Lodging</label>
														</div>
														<div class="col-md-2">
															<input readonly type="text" class="form-control">
														</div>
														<div class="col-md-2">
															<label class="form-label">X Night =</label>
														</div>
														<div class="col-md-2">
															<input  type="text" class="form-control">
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label"></label>
														</div>
														<div class="col-md-2">
															
															<label class="form-label"></label>
														</div>
														<div class="col-md-2">
															
														</div>
														<div class="col-md-2">
															<label class="form-label">Total Accomodation</label>
														</div>
														<div class="col-md-2">
															<input readonly type="text" class="form-control">
														</div>
													</div>
													<div class="row p-2">
														<div class="col-md-4">
															<label class="form-label"></label>
														</div>
														<div class="col-md-2">
															
															<label class="form-label"></label>
														</div>
														<div class="col-md-2">
															
														</div>
														<div class="col-md-2">
															<label class="form-label">TOTAL</label>
														</div>
														<div class="col-md-2">
															<input readonly type="text" class="form-control">
														</div>
													</div>
													<div class="modal-footer">

														<button type="button" class="btn btn-secondary" >Reset</button>
														<button type="button" class="btn btn-primary" >Save</button>
														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						
						</div>
					</div>
				
				<div class="col-md-6">	
				<div class="form-control">	
					<div class="row">
						<div class="">	
							<table id="claimtable1" class="table table-striped table-bordered align-middle">
								<thead>
									<tr>
										<th>Action</th>
										<th class="text-nowrap">Applied Date</th>
										<th class="text-nowrap">Claim Category</th>
										<th class="text-nowrap">Amount</th>
										<th class="text-nowrap">Description</th>
										<th class="text-nowrap">Attachment</th>
										
									</tr>
								</thead>
								<tbody>
									
									<tr>
										<td><a data-bs-toggle="modal" id="btn-view" class="btn btn-primary btn-sm">Delete</a></td>
										<td>21/07/2022</td>
										<td>Telephone</td>
										<td>RM40</td>
										<td>Maxis Data</td>
										<td>Receipt.pdf</td>
									</tr>
									<tr>
										<td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
										<td>21/07/2022</td>
										<td>Entertainment</td>
										<td>RM30</td>
										<td>Cinema</td>
										<td>Receipt.pdf</td>
									</tr>
									<tr>
										<td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
										<td>21/07/2022</td>
										<td>Telephone</td>
										<td>RM40</td>
										<td>Celcom Data</td>
										<td>Receipt.pdf</td>
									</tr>
									<tr>
										<td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
										<td>21/07/2022</td>
										<td>Entertainment</td>
										<td>RM50</td>
										<td>Paintball</td>
										<td>Receipt.pdf</td>
									</tr>
									<tr>
										<td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
										<td>21/07/2022</td>
										<td>Telephone</td>
										<td>RM40</td>
										<td>Maxis Data</td>
										<td>Receipt.pdf</td>
									</tr>
									<tr>
										<td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
										<td>21/07/2022</td>
										<td>Entertainment</td>
										<td>RM140</td>
										<td>Maxis Data</td>
										<td>Receipt.pdf</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="">	
							<table id="traveltable" class="table table-striped table-bordered align-middle">
								<thead>
									<tr>
										<th>Action</th>
										<th class="text-nowrap">Travel Date</th>
										<th class="text-nowrap">Project Name</th>
										<th class="text-nowrap">Claim Category</th>
										<th class="text-nowrap">Amount</th>
										<th class="text-nowrap">Description</th>
										<th class="text-nowrap">Attachment</th>
										
									</tr>
								</thead>
								<tbody>
									
									<tr>
										<td><a data-bs-toggle="modal" id="btn-view" class="btn btn-primary btn-sm">Delete</a></td>
										<td>21/07/2022</td>
										<td>Telephone</td>
										<td>RM40</td>
										<td>Maxis Data</td>
										<td>Receipt.pdf</td>
										<td>Maxis Data</td>
										
									</tr>
									<tr>
										<td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
										<td>21/07/2022</td>
										<td>Entertainment</td>
										<td>RM30</td>
										<td>Cinema</td>
										<td>Receipt.pdf</td>
										<td>Maxis Data</td>
									</tr>
									<tr>
										<td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
										<td>21/07/2022</td>
										<td>Telephone</td>
										<td>RM40</td>
										<td>Celcom Data</td>
										<td>Receipt.pdf</td>
										<td>Maxis Data</td>
									</tr>
									<tr>
										<td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
										<td>21/07/2022</td>
										<td>Entertainment</td>
										<td>RM50</td>
										<td>Paintball</td>
										<td>Receipt.pdf</td>
										<td>Maxis Data</td>
									</tr>
									<tr>
										<td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
										<td>21/07/2022</td>
										<td>Telephone</td>
										<td>RM40</td>
										<td>Maxis Data</td>
										<td>Receipt.pdf</td>
										<td>Maxis Data</td>
									</tr>
									<tr>
										<td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
										<td>21/07/2022</td>
										<td>Entertainment</td>
										<td>RM140</td>
										<td>Maxis Data</td>
										<td>Receipt.pdf</td>
										<td>Maxis Data</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				</div>
			</div>	
		</div>
		<div class="row p-2">
			<div class="col align-self-start">
				<a href="/eclaim/myclaim" class="btn btn-light" style="color: black;" type="submit"><i class="fa fa-arrow-left"></i> Back</a>
			</div>	
			<div class="col d-flex justify-content-end">
				<a class="btn btn-light" style="color: black" type="submit"><i class="fa fa-save"></i> Submit</a>
			</div>
		</div>
	</div>
		
		
		<!-- END panel-heading -->
		
	</div>
	<!-- END #app -->
	</div>
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
<link href="../assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
<script src="../assets/plugins/switchery/dist/switchery.min.js"></script>
<link href="../assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
<script src="../assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>


{{-- timpicker --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

<script>

  $('#claimtable1').DataTable({
	"searching": false,
	"lengthChange": true,
	lengthMenu: [5, 10],
    responsive: false,
	info: false,
	scrollX : true
  });

  $('#claimtable').DataTable({
	"searching": false,
	"lengthChange": true,
	lengthMenu: [5, 10],
    responsive: false,
	info: false,
	scrollX : true
  });


  $('#traveltable').DataTable({
	"searching": false,
	"lengthChange": true,
	lengthMenu: [5, 10],
    responsive: false,
	info: false,
	scrollX : true
  });
	
  $("#datepicker-autoClose").datepicker({
    todayHighlight: true,
    autoclose: true,
	format: 'dd/mm/yyyy',
  });
  

	$(document).on('change', "#ca", function() {
       
		if ($(this).val() == "1") {
            $(".WC").show();
			$(".WOC").hide();
            
        } else if ($(this).val() == "2"){
			$(".WC").hide();
			$(".WOC").show();
		}
		else {
            $(".WC").hide();
            $(".WOC").hide();
        }
    });

	//
	$(document).on('change', "#ls", function() {
       
	   if ($(this).val() == "3") {
		   $("#project").show();
		
	   } else {
            $("#project").hide();
        }
	   
	  
   });

   //
   $(document).on('change', "#dest", function() {
       
	   if ($(this).val() == "3") {
		   $("#projectdest").show();
		   $("#logname").hide();
		
	   } else if ($(this).val() == "4"){
			$("#projectdest").hide();
			$("#logname").show();

		}    else {
            $("#projectdest").hide();
			$("#logname").hide();
        }  
	  
   });
</script>

{{-- calculate total hours --}}
<script>
	$(function () {

	TimePicker();

	});

var TimePicker = function () {

if ($(".timepicker").length === 0) { return; }

$(".timepicker").timepicker({
	timeFormat: 'HH:mm',
    interval: 30,
    // minTime: '10',
    // maxTime: '',
    defaultTime: '09:00',
    // startTime: '',
    dynamic: false,
    dropdown: true,
    scrollbar: true,
	change: tmTotalHrsOnSite
});

};

function tmTotalHrsOnSite () {

if ($("#timestart") && $("#timeend")) {

	valueStart = $("#timestart").val();
	valueStop = $("#timeend").val();

	var str0="01/01/1970 " + valueStart;
	var str1="01/01/1970 " + valueStop;

	var diff=(Date.parse(str1)-Date.parse(str0))/1000/60;
	var hours=String(100+Math.floor(diff/60)).substr(1);
	var mins=String(100+diff%60).substr(1);
	$("#totalduration").val(hours+ " hours " + ': '  + mins + " mins");

	}

};

$("#datepickerpc").datepicker({
    todayHighlight: true,
    autoclose: true,
	format: 'dd-mm-yyyy'
  });


  $("#datepickertc").datepicker({
    todayHighlight: true,
    autoclose: true,
	format: 'dd-mm-yyyy'
  });
	</script>


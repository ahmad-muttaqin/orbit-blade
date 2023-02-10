<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>OrbitHRM | My Profile</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<link rel="shortcut icon" href="../assets/img/logo/orbit-sm.png">
	<!-- ================== BEGIN core-css ================== -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
	<link href="../assets/css/vendor.min.css" rel="stylesheet" />
	<link href="../assets/css/vendor.min.css" rel="stylesheet" />
	<link href="../assets/css/default/app.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->

	<!-- ================== BEGIN page-css ================== -->
	<link href="../assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
	<link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<link href="../assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
	<link href="../assets/plugins/simple-calendar/dist/simple-calendar.css" rel="stylesheet" />
	<link href="../assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
	<!-- ================== END page-css ================== -->

	<!-- ================== DATATABLE ================== -->
	<link href="../assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-colreorder-bs5/css/colReorder.bootstrap5.min.css" rel="stylesheet" />

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
				<img src="../assets/img/logo/orbit-logo-5.png" class="navbar-logo navbar-brand" alt="...">
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
			<h1 class="page-header">HRIS | My Profile</h1>
			<div class="row">
				<!-- BEGIN col-6 -->
				<div class="col-xl-3">
					<div class="card">
						<div class="card-body">
							<div class="profile-pic m-3">
								<img src="../assets/img/user/user-13.jpg" width="100px" class="rounded d-block" alt="Profile Picture" data-bs-toggle="modal" data-bs-target="#modal-dialog">
								<h4 class="mt-3 mb-0 fw-bold">Aqil Anwar</h4>
								<p>0108</p>
								<span class="badge bg-success d-block p-2">Active</span>
								<div class="input-group mb-2 mt-2">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-briefcase fa-fw me-2"></i></span>
									<input type="text" class="form-control bg-white" value="Admin" aria-label="Username" aria-describedby="basic-addon1" readonly>
								</div>
								<div class="input-group mb-2 mt-2">
									<span class="input-group-text fw-light" id="basic-addon1"><i class="fas fa-address-card fa-fw me-2"></i></span>
									<input type="text" class="form-control bg-white" value="admin@gmail.com" aria-label="Username" aria-describedby="basic-addon1" readonly>
								</div>
								<div class="input-group mb-2 mt-2">
									<span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-square fa-fw me-2"></i></span>
									<input type="text" class="form-control bg-white" value="0136519887" aria-label="Username" aria-describedby="basic-addon1" readonly>
								</div>
								<div class="modal fade" id="modal-dialog">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title">Update Profile Picture</h4>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
										</div>
										<div class="modal-body">
										<div class="col-sm-6">
												
												<input class="form-check-input" type="checkbox" id="Gravatar" />
  												<label class="form-check-label" for="Gravatar">Use Gravatar profile picture</label><br><br>
												<label for="marriage-cert" class="form-label">Profile Picture</label>
												<input type="file" id="marriage-cert" class="form-control" aria-describedby="dob">
												</div>
										</div>
										<div class="modal-footer">
											<a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Close</a>
											<a href="javascript:;" class="btn btn-primary">Save</a>
										</div>
										</div>
									</div>
									</div>
								<!-- Tabs navs -->
								<div class="align-items-start mt-3">
									<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									  <button class="nav-link active text-start border border-1 mt-1 mb-1" id="v-pills-myprofile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-myprofile" type="button" role="tab" aria-controls="v-pills-myprofile" aria-selected="true">
										<i class="fas fa-circle-user fa-fw"></i>
										My Profile
									</button>
									  <button class="nav-link text-start border border-1 mt-1 mb-1" id="v-pills-employment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-employment" type="button" role="tab" aria-controls="v-pills-employment" aria-selected="false">Employment Details</button>
									  <button class="nav-link text-start border border-1 mt-1 mb-1" id="v-pills-changepassword-tab" data-bs-toggle="pill" data-bs-target="#v-pills-changepassword" type="button" role="tab" aria-controls="v-pills-changepassword" aria-selected="false">Change Password</button>
									  <button class="nav-link text-start border border-1 mt-1 mb-1" id="v-pills-vehicledetails-tab" data-bs-toggle="pill" data-bs-target="#v-pills-vehicledetails" type="button" role="tab" aria-controls="v-pills-vehicledetails" aria-selected="false">Vehicle Details</button>
									  <button class="nav-link text-start border border-1 mt-1 mb-1" id="v-pills-eleave-tab" data-bs-toggle="pill" data-bs-target="#v-pills-eleave" type="button" role="tab" aria-controls="v-pills-eleave" aria-selected="false">eLeave</button>
									</div>
								  </div>
								<!-- Tabs navs -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-9">
					<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-myprofile" role="tabpanel" aria-labelledby="v-pills-myprofile-tab">
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
												<span class="d-sm-none">My Profile</span>
												<span class="d-sm-block d-none">My Profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#default-tab-2" data-bs-toggle="tab" class="nav-link">
												<span class="d-sm-none">Address Details</span>
												<span class="d-sm-block d-none">Address Details</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#default-tab-3" data-bs-toggle="tab" class="nav-link">
												<span class="d-sm-none">Emergency Contact</span>
												<span class="d-sm-block d-none">Emergency Contact</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#default-tab-4" data-bs-toggle="tab" class="nav-link">
												<span class="d-sm-none">Companion</span>
												<span class="d-sm-block d-none">Companion</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#default-tab-5" data-bs-toggle="tab" class="nav-link">
												<span class="d-sm-none">Children</span>
												<span class="d-sm-block d-none">Children</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#default-tab-6" data-bs-toggle="tab" class="nav-link">
												<span class="d-sm-none">Family Particular</span>
												<span class="d-sm-block d-none">Family Particular</span>
											</a>
										</li>
									</ul>
									<!-- END nav-tabs -->
									<!-- BEGIN tab-content -->
									
									<div class="tab-content panel m-0 rounded-0 p-3">
										<!-- BEGIN tab-pane -->
										<div class="tab-pane fade active show" id="default-tab-1">
											<h4 class="mt-10px">Personal Details</h4>
											<br>
											<form>
												<div class="row p-2">		
													<div class="col-sm-6">
														<label for="username" class="form-label">Username*</label>
														<input type="text" id="username" class="form-control" aria-describedby="username">
														<div class="form-text">
															Cannot change the username of the admin.
														</div>
													</div>
													<div class="col-sm-6">
														<label for="email" class="form-label">Personal Email</label>
														<input type="email" id="email" class="form-control" aria-describedby="email">
													</div>
		
												</div>
												<div class="row p-2">
													<div class="col-sm-6">
														<label for="firstname" class="form-label">First Name*</label>
														<input type="text" id="firstname" class="form-control" aria-describedby="firstname">
													</div>
													<div class="col-sm-6">
														<label for="lastname" class="form-label">Last Name*</label>
														<input type="text" id="lastname" class="form-control" aria-describedby="lastname">
													</div>
												</div>
												<div class="row p-2">
													<div class="col-sm-6">
														<label for="firstname" class="form-label">Full Name</label>
														<input type="text" id="firstname" class="form-control" aria-describedby="firstname">
													</div>
													<div class="col-sm-6">
														<div class="row">
															<div class="col-sm-6 ">
																<div class="form-check form-switch align-right">
																	<input class="form-check-input" type="checkbox" id="citizen">
																	<label class="form-check-label" for="citizen">
																		  Non-Citizen
																	</label>
																</div>
															</div>
															<div class="col-sm-6">
																<label for="lastname" class="form-label">Identification Number*</label>
																<input type="text" value="0108393019299" id="lastname" class="form-control" aria-describedby="lastname">
															</div>
														</div>
													</div>
												</div>
												<div class="row p-2">
													<div class="col-sm-6">
														<div class="row">
															<div class="col-sm-6">
																<label for="passport" class="form-label">Passport Number</label>
																<input type="text" id="passport" class="form-control" aria-describedby="passport">
															</div>
															<div class="col-sm-6">
																<label for="expirydate" class="form-label">Expiry Date</label>
																<input type="text" id="expirydate" class="form-control" aria-describedby="expirydate">
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<label for="issuing-country" class="form-label">Issuing Country</label>
														<select class="form-select">
														<option value="0" label="Select a country ... " >Select a country ... </option>
															<optgroup id="country-optgroup-Africa" label="Africa">
															<option value="DZ" label="Algeria">Algeria</option>
															<option value="AO" label="Angola">Angola</option>
															<option value="BJ" label="Benin">Benin</option>
															<option value="BW" label="Botswana">Botswana</option>
															<option value="BF" label="Burkina Faso">Burkina Faso</option>
															<option value="BI" label="Burundi">Burundi</option>
															<option value="CM" label="Cameroon">Cameroon</option>
															<option value="CV" label="Cape Verde">Cape Verde</option>
															<option value="CF" label="Central African Republic">Central African Republic</option>
															<option value="TD" label="Chad">Chad</option>
															<option value="KM" label="Comoros">Comoros</option>
															<option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
															<option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
															<option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
															<option value="DJ" label="Djibouti">Djibouti</option>
															<option value="EG" label="Egypt">Egypt</option>
															<option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
															<option value="ER" label="Eritrea">Eritrea</option>
															<option value="ET" label="Ethiopia">Ethiopia</option>
															<option value="GA" label="Gabon">Gabon</option>
															<option value="GM" label="Gambia">Gambia</option>
															<option value="GH" label="Ghana">Ghana</option>
															<option value="GN" label="Guinea">Guinea</option>
															<option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
															<option value="KE" label="Kenya">Kenya</option>
															<option value="LS" label="Lesotho">Lesotho</option>
															<option value="LR" label="Liberia">Liberia</option>
															<option value="LY" label="Libya">Libya</option>
															<option value="MG" label="Madagascar">Madagascar</option>
															<option value="MW" label="Malawi">Malawi</option>
															<option value="ML" label="Mali">Mali</option>
															<option value="MR" label="Mauritania">Mauritania</option>
															<option value="MU" label="Mauritius">Mauritius</option>
															<option value="YT" label="Mayotte">Mayotte</option>
															<option value="MA" label="Morocco">Morocco</option>
															<option value="MZ" label="Mozambique">Mozambique</option>
															<option value="NA" label="Namibia">Namibia</option>
															<option value="NE" label="Niger">Niger</option>
															<option value="NG" label="Nigeria">Nigeria</option>
															<option value="RW" label="Rwanda">Rwanda</option>
															<option value="RE" label="Réunion">Réunion</option>
															<option value="SH" label="Saint Helena">Saint Helena</option>
															<option value="SN" label="Senegal">Senegal</option>
															<option value="SC" label="Seychelles">Seychelles</option>
															<option value="SL" label="Sierra Leone">Sierra Leone</option>
															<option value="SO" label="Somalia">Somalia</option>
															<option value="ZA" label="South Africa">South Africa</option>
															<option value="SD" label="Sudan">Sudan</option>
															<option value="SZ" label="Swaziland">Swaziland</option>
															<option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
															<option value="TZ" label="Tanzania">Tanzania</option>
															<option value="TG" label="Togo">Togo</option>
															<option value="TN" label="Tunisia">Tunisia</option>
															<option value="UG" label="Uganda">Uganda</option>
															<option value="EH" label="Western Sahara">Western Sahara</option>
															<option value="ZM" label="Zambia">Zambia</option>
															<option value="ZW" label="Zimbabwe">Zimbabwe</option>
														</optgroup>
														<optgroup id="country-optgroup-Americas" label="Americas">
															<option value="AI" label="Anguilla">Anguilla</option>
															<option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
															<option value="AR" label="Argentina">Argentina</option>
															<option value="AW" label="Aruba">Aruba</option>
															<option value="BS" label="Bahamas">Bahamas</option>
															<option value="BB" label="Barbados">Barbados</option>
															<option value="BZ" label="Belize">Belize</option>
															<option value="BM" label="Bermuda">Bermuda</option>
															<option value="BO" label="Bolivia">Bolivia</option>
															<option value="BR" label="Brazil">Brazil</option>
															<option value="VG" label="British Virgin Islands">British Virgin Islands</option>
															<option value="CA" label="Canada">Canada</option>
															<option value="KY" label="Cayman Islands">Cayman Islands</option>
															<option value="CL" label="Chile">Chile</option>
															<option value="CO" label="Colombia">Colombia</option>
															<option value="CR" label="Costa Rica">Costa Rica</option>
															<option value="CU" label="Cuba">Cuba</option>
															<option value="DM" label="Dominica">Dominica</option>
															<option value="DO" label="Dominican Republic">Dominican Republic</option>
															<option value="EC" label="Ecuador">Ecuador</option>
															<option value="SV" label="El Salvador">El Salvador</option>
															<option value="FK" label="Falkland Islands">Falkland Islands</option>
															<option value="GF" label="French Guiana">French Guiana</option>
															<option value="GL" label="Greenland">Greenland</option>
															<option value="GD" label="Grenada">Grenada</option>
															<option value="GP" label="Guadeloupe">Guadeloupe</option>
															<option value="GT" label="Guatemala">Guatemala</option>
															<option value="GY" label="Guyana">Guyana</option>
															<option value="HT" label="Haiti">Haiti</option>
															<option value="HN" label="Honduras">Honduras</option>
															<option value="JM" label="Jamaica">Jamaica</option>
															<option value="MQ" label="Martinique">Martinique</option>
															<option value="MX" label="Mexico">Mexico</option>
															<option value="MS" label="Montserrat">Montserrat</option>
															<option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
															<option value="NI" label="Nicaragua">Nicaragua</option>
															<option value="PA" label="Panama">Panama</option>
															<option value="PY" label="Paraguay">Paraguay</option>
															<option value="PE" label="Peru">Peru</option>
															<option value="PR" label="Puerto Rico">Puerto Rico</option>
															<option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
															<option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
															<option value="LC" label="Saint Lucia">Saint Lucia</option>
															<option value="MF" label="Saint Martin">Saint Martin</option>
															<option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
															<option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
															<option value="SR" label="Suriname">Suriname</option>
															<option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
															<option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
															<option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
															<option value="US" label="United States">United States</option>
															<option value="UY" label="Uruguay">Uruguay</option>
															<option value="VE" label="Venezuela">Venezuela</option>
														</optgroup>
														<optgroup id="country-optgroup-Asia" label="Asia">
															<option value="AF" label="Afghanistan">Afghanistan</option>
															<option value="AM" label="Armenia">Armenia</option>
															<option value="AZ" label="Azerbaijan">Azerbaijan</option>
															<option value="BH" label="Bahrain">Bahrain</option>
															<option value="BD" label="Bangladesh">Bangladesh</option>
															<option value="BT" label="Bhutan">Bhutan</option>
															<option value="BN" label="Brunei">Brunei</option>
															<option value="KH" label="Cambodia">Cambodia</option>
															<option value="CN" label="China">China</option>
															<option value="GE" label="Georgia">Georgia</option>
															<option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
															<option value="IN" label="India">India</option>
															<option value="ID" label="Indonesia">Indonesia</option>
															<option value="IR" label="Iran">Iran</option>
															<option value="IQ" label="Iraq">Iraq</option>
															<option value="IL" label="Israel">Israel</option>
															<option value="JP" label="Japan">Japan</option>
															<option value="JO" label="Jordan">Jordan</option>
															<option value="KZ" label="Kazakhstan">Kazakhstan</option>
															<option value="KW" label="Kuwait">Kuwait</option>
															<option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
															<option value="LA" label="Laos">Laos</option>
															<option value="LB" label="Lebanon">Lebanon</option>
															<option value="MO" label="Macau SAR China">Macau SAR China</option>
															<option value="MY" label="Malaysia" selected="selected">Malaysia</option>
															<option value="MV" label="Maldives">Maldives</option>
															<option value="MN" label="Mongolia">Mongolia</option>
															<option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
															<option value="NP" label="Nepal">Nepal</option>
															<option value="NT" label="Neutral Zone">Neutral Zone</option>
															<option value="KP" label="North Korea">North Korea</option>
															<option value="OM" label="Oman">Oman</option>
															<option value="PK" label="Pakistan">Pakistan</option>
															<option value="PS" label="Palestinian Territories">Palestinian Territories</option>
															<option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
															<option value="PH" label="Philippines">Philippines</option>
															<option value="QA" label="Qatar">Qatar</option>
															<option value="SA" label="Saudi Arabia">Saudi Arabia</option>
															<option value="SG" label="Singapore">Singapore</option>
															<option value="KR" label="South Korea">South Korea</option>
															<option value="LK" label="Sri Lanka">Sri Lanka</option>
															<option value="SY" label="Syria">Syria</option>
															<option value="TW" label="Taiwan">Taiwan</option>
															<option value="TJ" label="Tajikistan">Tajikistan</option>
															<option value="TH" label="Thailand">Thailand</option>
															<option value="TL" label="Timor-Leste">Timor-Leste</option>
															<option value="TR" label="Turkey">Turkey</option>
															<option value="TM" label="Turkmenistan">Turkmenistan</option>
															<option value="AE" label="United Arab Emirates">United Arab Emirates</option>
															<option value="UZ" label="Uzbekistan">Uzbekistan</option>
															<option value="VN" label="Vietnam">Vietnam</option>
															<option value="YE" label="Yemen">Yemen</option>
																</select>													
														</select>											
													</div>
												</div>
												<div class="row p-2">
													<div class="col-sm-6">
														<div class="row">
															<div class="col-sm-6">
																<label for="dob" class="form-label">Date of Birth</label>
																<input type="text" id="dob" class="form-control" aria-describedby="dob">
															</div>
															<div class="col-sm-6">
																<label for="gender" class="form-label">Gender</label>
																<select class="form-select">
																<option value="0" label="Please Choose " selected="selected"></option>
																	<option value="Male" label="Male">Male</option>
																	<option value="Female" label="Female">Female</option>
																	<option value="Prefer" label="Prefer not to say">Prefer not to say</option>													
																</select>													</div>
														</div>
													</div>
													<div class="col-sm-6">
														<label for="issuing-country" class="form-label">Marital Status</label>
														<select class="form-select">
														<option value="0" label="Select Marital Status " selected="selected">Select Marital Status </option>
															<option value="single" label="Single">Single</option>
															<option value="married" label="married">married</option>
															<option value="windowed" label="windowed">windowed</option>
															<option value="divorced" label="divorced">divorced</option>
															<option value="seperated" label="seperated">seperated</option>													
														</select>											
													</div>
												</div>
												<div class="row p-2">
													<div class="col-sm-6">
														<label for="religion" class="form-label">Religion</label>
														<select class="form-select">
														<option value="0" label="Select Religion " selected="selected">Select Religion </option>
															<option value="Islam" label="Islam">Islam</option>
															<option value="Buddhist" label="Buddhist">Buddhist</option>
															<option value="Christian" label="Christian">Christian</option>
															<option value="Hindu" label="Hindu">Hindu</option>
															<option value="Others" label="Others">Others</option>												
														</select>	
													</div>
													<div class="col-sm-6">
														<label for="race" class="form-label">Race</label>
														<select class="form-select">
														<option value="0" label="Select Race " selected="selected">Select Race </option>
															<option value="Malay" label="Malay">Malay</option>
															<option value="Chinese" label="Chinese">Chinese</option>
															<option value="Indian" label="Indian">Indian</option>
															<option value="Others" label="Others">Others</option>												
														</select>											
													</div>
												</div>
												<hr class="mt-5">
												<h4 class="row p-2">Contact Details</h4>
												<div class="col p-2">
													<label for="phone-number" class="form-label">Phone Number*</label>
													<input type="text" id="phone-number" class="form-control" aria-describedby="phone-number">
												</div>
												<div class="col p-2">
													<label for="home-number" class="form-label">Home Number</label>
													<input type="text" id="home-number" class="form-control" aria-describedby="home-number">
												</div>
												<div class="col p-2">
													<label for="extension-number" class="form-label">Extension Number</label>
													<input type="text" id="extension-number" class="form-control" aria-describedby="extension-number">
												</div>
											</form>
											<p class="text-end mb-0 mt-3">
												<a href="javascript:;" class="btn btn-white me-5px">Previous</a>
												<a href="javascript:;" class="btn btn-primary">Save</a>
											</p>
										</div>
		
										<div class="tab-pane fade" id="default-tab-2">
											<h4 class="mt-10px">Permanent Address</h4>
											<br>
											<form>
												<div class="row p-2">		
													<div class="col-sm-6">
														<label for="address-1" class="form-label">Address 1*</label>
														<input type="text" id="address-1" class="form-control" aria-describedby="address-1">
													</div>
													<div class="col-sm-6">
														<label for="address-2" class="form-label">Address 2</label>
														<input type="text" id="address-2" class="form-control" aria-describedby="address-2">
													</div>
												</div>
												<div class="row p-2">
													<div class="col-sm-6">
														<label for="postcode" class="form-label">Postcode*</label>
														<input type="text" id="postcode" class="form-control" aria-describedby="postcode">
													</div>
													<div class="col-sm-6">
														<label for="city" class="form-label">City*</label>
														<input type="text" id="city" class="form-control" aria-describedby="city">													
													</div>
												</div>
												<div class="row p-2">
													<div class="col-sm-6">
														<label for="state" class="form-label">State*</label>
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
													<div class="col-sm-6">
														<label for="country" class="form-label">Country</label>
														<select class="form-select">
														<option value="0" label="Select a country ... " >Select a country ... </option>
															<optgroup id="country-optgroup-Africa" label="Africa">
															<option value="DZ" label="Algeria">Algeria</option>
															<option value="AO" label="Angola">Angola</option>
															<option value="BJ" label="Benin">Benin</option>
															<option value="BW" label="Botswana">Botswana</option>
															<option value="BF" label="Burkina Faso">Burkina Faso</option>
															<option value="BI" label="Burundi">Burundi</option>
															<option value="CM" label="Cameroon">Cameroon</option>
															<option value="CV" label="Cape Verde">Cape Verde</option>
															<option value="CF" label="Central African Republic">Central African Republic</option>
															<option value="TD" label="Chad">Chad</option>
															<option value="KM" label="Comoros">Comoros</option>
															<option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
															<option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
															<option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
															<option value="DJ" label="Djibouti">Djibouti</option>
															<option value="EG" label="Egypt">Egypt</option>
															<option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
															<option value="ER" label="Eritrea">Eritrea</option>
															<option value="ET" label="Ethiopia">Ethiopia</option>
															<option value="GA" label="Gabon">Gabon</option>
															<option value="GM" label="Gambia">Gambia</option>
															<option value="GH" label="Ghana">Ghana</option>
															<option value="GN" label="Guinea">Guinea</option>
															<option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
															<option value="KE" label="Kenya">Kenya</option>
															<option value="LS" label="Lesotho">Lesotho</option>
															<option value="LR" label="Liberia">Liberia</option>
															<option value="LY" label="Libya">Libya</option>
															<option value="MG" label="Madagascar">Madagascar</option>
															<option value="MW" label="Malawi">Malawi</option>
															<option value="ML" label="Mali">Mali</option>
															<option value="MR" label="Mauritania">Mauritania</option>
															<option value="MU" label="Mauritius">Mauritius</option>
															<option value="YT" label="Mayotte">Mayotte</option>
															<option value="MA" label="Morocco">Morocco</option>
															<option value="MZ" label="Mozambique">Mozambique</option>
															<option value="NA" label="Namibia">Namibia</option>
															<option value="NE" label="Niger">Niger</option>
															<option value="NG" label="Nigeria">Nigeria</option>
															<option value="RW" label="Rwanda">Rwanda</option>
															<option value="RE" label="Réunion">Réunion</option>
															<option value="SH" label="Saint Helena">Saint Helena</option>
															<option value="SN" label="Senegal">Senegal</option>
															<option value="SC" label="Seychelles">Seychelles</option>
															<option value="SL" label="Sierra Leone">Sierra Leone</option>
															<option value="SO" label="Somalia">Somalia</option>
															<option value="ZA" label="South Africa">South Africa</option>
															<option value="SD" label="Sudan">Sudan</option>
															<option value="SZ" label="Swaziland">Swaziland</option>
															<option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
															<option value="TZ" label="Tanzania">Tanzania</option>
															<option value="TG" label="Togo">Togo</option>
															<option value="TN" label="Tunisia">Tunisia</option>
															<option value="UG" label="Uganda">Uganda</option>
															<option value="EH" label="Western Sahara">Western Sahara</option>
															<option value="ZM" label="Zambia">Zambia</option>
															<option value="ZW" label="Zimbabwe">Zimbabwe</option>
														</optgroup>
														<optgroup id="country-optgroup-Americas" label="Americas">
															<option value="AI" label="Anguilla">Anguilla</option>
															<option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
															<option value="AR" label="Argentina">Argentina</option>
															<option value="AW" label="Aruba">Aruba</option>
															<option value="BS" label="Bahamas">Bahamas</option>
															<option value="BB" label="Barbados">Barbados</option>
															<option value="BZ" label="Belize">Belize</option>
															<option value="BM" label="Bermuda">Bermuda</option>
															<option value="BO" label="Bolivia">Bolivia</option>
															<option value="BR" label="Brazil">Brazil</option>
															<option value="VG" label="British Virgin Islands">British Virgin Islands</option>
															<option value="CA" label="Canada">Canada</option>
															<option value="KY" label="Cayman Islands">Cayman Islands</option>
															<option value="CL" label="Chile">Chile</option>
															<option value="CO" label="Colombia">Colombia</option>
															<option value="CR" label="Costa Rica">Costa Rica</option>
															<option value="CU" label="Cuba">Cuba</option>
															<option value="DM" label="Dominica">Dominica</option>
															<option value="DO" label="Dominican Republic">Dominican Republic</option>
															<option value="EC" label="Ecuador">Ecuador</option>
															<option value="SV" label="El Salvador">El Salvador</option>
															<option value="FK" label="Falkland Islands">Falkland Islands</option>
															<option value="GF" label="French Guiana">French Guiana</option>
															<option value="GL" label="Greenland">Greenland</option>
															<option value="GD" label="Grenada">Grenada</option>
															<option value="GP" label="Guadeloupe">Guadeloupe</option>
															<option value="GT" label="Guatemala">Guatemala</option>
															<option value="GY" label="Guyana">Guyana</option>
															<option value="HT" label="Haiti">Haiti</option>
															<option value="HN" label="Honduras">Honduras</option>
															<option value="JM" label="Jamaica">Jamaica</option>
															<option value="MQ" label="Martinique">Martinique</option>
															<option value="MX" label="Mexico">Mexico</option>
															<option value="MS" label="Montserrat">Montserrat</option>
															<option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
															<option value="NI" label="Nicaragua">Nicaragua</option>
															<option value="PA" label="Panama">Panama</option>
															<option value="PY" label="Paraguay">Paraguay</option>
															<option value="PE" label="Peru">Peru</option>
															<option value="PR" label="Puerto Rico">Puerto Rico</option>
															<option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
															<option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
															<option value="LC" label="Saint Lucia">Saint Lucia</option>
															<option value="MF" label="Saint Martin">Saint Martin</option>
															<option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
															<option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
															<option value="SR" label="Suriname">Suriname</option>
															<option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
															<option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
															<option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
															<option value="US" label="United States">United States</option>
															<option value="UY" label="Uruguay">Uruguay</option>
															<option value="VE" label="Venezuela">Venezuela</option>
														</optgroup>
														<optgroup id="country-optgroup-Asia" label="Asia">
															<option value="AF" label="Afghanistan">Afghanistan</option>
															<option value="AM" label="Armenia">Armenia</option>
															<option value="AZ" label="Azerbaijan">Azerbaijan</option>
															<option value="BH" label="Bahrain">Bahrain</option>
															<option value="BD" label="Bangladesh">Bangladesh</option>
															<option value="BT" label="Bhutan">Bhutan</option>
															<option value="BN" label="Brunei">Brunei</option>
															<option value="KH" label="Cambodia">Cambodia</option>
															<option value="CN" label="China">China</option>
															<option value="GE" label="Georgia">Georgia</option>
															<option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
															<option value="IN" label="India">India</option>
															<option value="ID" label="Indonesia">Indonesia</option>
															<option value="IR" label="Iran">Iran</option>
															<option value="IQ" label="Iraq">Iraq</option>
															<option value="IL" label="Israel">Israel</option>
															<option value="JP" label="Japan">Japan</option>
															<option value="JO" label="Jordan">Jordan</option>
															<option value="KZ" label="Kazakhstan">Kazakhstan</option>
															<option value="KW" label="Kuwait">Kuwait</option>
															<option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
															<option value="LA" label="Laos">Laos</option>
															<option value="LB" label="Lebanon">Lebanon</option>
															<option value="MO" label="Macau SAR China">Macau SAR China</option>
															<option value="MY" label="Malaysia" selected="selected">Malaysia</option>
															<option value="MV" label="Maldives">Maldives</option>
															<option value="MN" label="Mongolia">Mongolia</option>
															<option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
															<option value="NP" label="Nepal">Nepal</option>
															<option value="NT" label="Neutral Zone">Neutral Zone</option>
															<option value="KP" label="North Korea">North Korea</option>
															<option value="OM" label="Oman">Oman</option>
															<option value="PK" label="Pakistan">Pakistan</option>
															<option value="PS" label="Palestinian Territories">Palestinian Territories</option>
															<option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
															<option value="PH" label="Philippines">Philippines</option>
															<option value="QA" label="Qatar">Qatar</option>
															<option value="SA" label="Saudi Arabia">Saudi Arabia</option>
															<option value="SG" label="Singapore">Singapore</option>
															<option value="KR" label="South Korea">South Korea</option>
															<option value="LK" label="Sri Lanka">Sri Lanka</option>
															<option value="SY" label="Syria">Syria</option>
															<option value="TW" label="Taiwan">Taiwan</option>
															<option value="TJ" label="Tajikistan">Tajikistan</option>
															<option value="TH" label="Thailand">Thailand</option>
															<option value="TL" label="Timor-Leste">Timor-Leste</option>
															<option value="TR" label="Turkey">Turkey</option>
															<option value="TM" label="Turkmenistan">Turkmenistan</option>
															<option value="AE" label="United Arab Emirates">United Arab Emirates</option>
															<option value="UZ" label="Uzbekistan">Uzbekistan</option>
															<option value="VN" label="Vietnam">Vietnam</option>
															<option value="YE" label="Yemen">Yemen</option>													
														</select>											
													</div>
												</div>
												<hr class="mt-5">
												<div class="row">
													<h4 class="col-sm-6 p-2">Correspondence Address</h4>
													<div class="col-sm-6">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" id="same-address">
															<label class="form-check-label" for="same-address">
															  Same as Permenant Address
															</label>
														  </div>
													</div>
												</div>
												<div class="row p-2">		
													<div class="col-sm-6">
														<label for="address-1" class="form-label">Address 1*</label>
														<input type="text" id="address-1" class="form-control" aria-describedby="address-1">
													</div>
													<div class="col-sm-6">
														<label for="address-2" class="form-label">Address 2</label>
														<input type="text" id="address-2" class="form-control" aria-describedby="address-2">
													</div>
												</div>
												<div class="row p-2">
													<div class="col-sm-6">
														<label for="postcode" class="form-label">Postcode*</label>
														<input type="text" id="postcode" class="form-control" aria-describedby="postcode">
													</div>
													<div class="col-sm-6">
														<label for="city" class="form-label">City*</label>
														<input type="text" id="City" class="form-control" aria-describedby="City">												</div>
												</div>
												<div class="row p-2">
													<div class="col-sm-6">
														<label for="state" class="form-label">State*</label>
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
													<div class="col-sm-6">
														<label for="country" class="form-label">Country</label>
														<select class="form-select">
														<option value="0" label="Select a country ... " >Select a country ... </option>
															<optgroup id="country-optgroup-Africa" label="Africa">
															<option value="DZ" label="Algeria">Algeria</option>
															<option value="AO" label="Angola">Angola</option>
															<option value="BJ" label="Benin">Benin</option>
															<option value="BW" label="Botswana">Botswana</option>
															<option value="BF" label="Burkina Faso">Burkina Faso</option>
															<option value="BI" label="Burundi">Burundi</option>
															<option value="CM" label="Cameroon">Cameroon</option>
															<option value="CV" label="Cape Verde">Cape Verde</option>
															<option value="CF" label="Central African Republic">Central African Republic</option>
															<option value="TD" label="Chad">Chad</option>
															<option value="KM" label="Comoros">Comoros</option>
															<option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
															<option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
															<option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
															<option value="DJ" label="Djibouti">Djibouti</option>
															<option value="EG" label="Egypt">Egypt</option>
															<option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
															<option value="ER" label="Eritrea">Eritrea</option>
															<option value="ET" label="Ethiopia">Ethiopia</option>
															<option value="GA" label="Gabon">Gabon</option>
															<option value="GM" label="Gambia">Gambia</option>
															<option value="GH" label="Ghana">Ghana</option>
															<option value="GN" label="Guinea">Guinea</option>
															<option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
															<option value="KE" label="Kenya">Kenya</option>
															<option value="LS" label="Lesotho">Lesotho</option>
															<option value="LR" label="Liberia">Liberia</option>
															<option value="LY" label="Libya">Libya</option>
															<option value="MG" label="Madagascar">Madagascar</option>
															<option value="MW" label="Malawi">Malawi</option>
															<option value="ML" label="Mali">Mali</option>
															<option value="MR" label="Mauritania">Mauritania</option>
															<option value="MU" label="Mauritius">Mauritius</option>
															<option value="YT" label="Mayotte">Mayotte</option>
															<option value="MA" label="Morocco">Morocco</option>
															<option value="MZ" label="Mozambique">Mozambique</option>
															<option value="NA" label="Namibia">Namibia</option>
															<option value="NE" label="Niger">Niger</option>
															<option value="NG" label="Nigeria">Nigeria</option>
															<option value="RW" label="Rwanda">Rwanda</option>
															<option value="RE" label="Réunion">Réunion</option>
															<option value="SH" label="Saint Helena">Saint Helena</option>
															<option value="SN" label="Senegal">Senegal</option>
															<option value="SC" label="Seychelles">Seychelles</option>
															<option value="SL" label="Sierra Leone">Sierra Leone</option>
															<option value="SO" label="Somalia">Somalia</option>
															<option value="ZA" label="South Africa">South Africa</option>
															<option value="SD" label="Sudan">Sudan</option>
															<option value="SZ" label="Swaziland">Swaziland</option>
															<option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
															<option value="TZ" label="Tanzania">Tanzania</option>
															<option value="TG" label="Togo">Togo</option>
															<option value="TN" label="Tunisia">Tunisia</option>
															<option value="UG" label="Uganda">Uganda</option>
															<option value="EH" label="Western Sahara">Western Sahara</option>
															<option value="ZM" label="Zambia">Zambia</option>
															<option value="ZW" label="Zimbabwe">Zimbabwe</option>
														</optgroup>
														<optgroup id="country-optgroup-Americas" label="Americas">
															<option value="AI" label="Anguilla">Anguilla</option>
															<option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
															<option value="AR" label="Argentina">Argentina</option>
															<option value="AW" label="Aruba">Aruba</option>
															<option value="BS" label="Bahamas">Bahamas</option>
															<option value="BB" label="Barbados">Barbados</option>
															<option value="BZ" label="Belize">Belize</option>
															<option value="BM" label="Bermuda">Bermuda</option>
															<option value="BO" label="Bolivia">Bolivia</option>
															<option value="BR" label="Brazil">Brazil</option>
															<option value="VG" label="British Virgin Islands">British Virgin Islands</option>
															<option value="CA" label="Canada">Canada</option>
															<option value="KY" label="Cayman Islands">Cayman Islands</option>
															<option value="CL" label="Chile">Chile</option>
															<option value="CO" label="Colombia">Colombia</option>
															<option value="CR" label="Costa Rica">Costa Rica</option>
															<option value="CU" label="Cuba">Cuba</option>
															<option value="DM" label="Dominica">Dominica</option>
															<option value="DO" label="Dominican Republic">Dominican Republic</option>
															<option value="EC" label="Ecuador">Ecuador</option>
															<option value="SV" label="El Salvador">El Salvador</option>
															<option value="FK" label="Falkland Islands">Falkland Islands</option>
															<option value="GF" label="French Guiana">French Guiana</option>
															<option value="GL" label="Greenland">Greenland</option>
															<option value="GD" label="Grenada">Grenada</option>
															<option value="GP" label="Guadeloupe">Guadeloupe</option>
															<option value="GT" label="Guatemala">Guatemala</option>
															<option value="GY" label="Guyana">Guyana</option>
															<option value="HT" label="Haiti">Haiti</option>
															<option value="HN" label="Honduras">Honduras</option>
															<option value="JM" label="Jamaica">Jamaica</option>
															<option value="MQ" label="Martinique">Martinique</option>
															<option value="MX" label="Mexico">Mexico</option>
															<option value="MS" label="Montserrat">Montserrat</option>
															<option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
															<option value="NI" label="Nicaragua">Nicaragua</option>
															<option value="PA" label="Panama">Panama</option>
															<option value="PY" label="Paraguay">Paraguay</option>
															<option value="PE" label="Peru">Peru</option>
															<option value="PR" label="Puerto Rico">Puerto Rico</option>
															<option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
															<option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
															<option value="LC" label="Saint Lucia">Saint Lucia</option>
															<option value="MF" label="Saint Martin">Saint Martin</option>
															<option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
															<option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
															<option value="SR" label="Suriname">Suriname</option>
															<option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
															<option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
															<option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
															<option value="US" label="United States">United States</option>
															<option value="UY" label="Uruguay">Uruguay</option>
															<option value="VE" label="Venezuela">Venezuela</option>
														</optgroup>
														<optgroup id="country-optgroup-Asia" label="Asia">
															<option value="AF" label="Afghanistan">Afghanistan</option>
															<option value="AM" label="Armenia">Armenia</option>
															<option value="AZ" label="Azerbaijan">Azerbaijan</option>
															<option value="BH" label="Bahrain">Bahrain</option>
															<option value="BD" label="Bangladesh">Bangladesh</option>
															<option value="BT" label="Bhutan">Bhutan</option>
															<option value="BN" label="Brunei">Brunei</option>
															<option value="KH" label="Cambodia">Cambodia</option>
															<option value="CN" label="China">China</option>
															<option value="GE" label="Georgia">Georgia</option>
															<option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
															<option value="IN" label="India">India</option>
															<option value="ID" label="Indonesia">Indonesia</option>
															<option value="IR" label="Iran">Iran</option>
															<option value="IQ" label="Iraq">Iraq</option>
															<option value="IL" label="Israel">Israel</option>
															<option value="JP" label="Japan">Japan</option>
															<option value="JO" label="Jordan">Jordan</option>
															<option value="KZ" label="Kazakhstan">Kazakhstan</option>
															<option value="KW" label="Kuwait">Kuwait</option>
															<option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
															<option value="LA" label="Laos">Laos</option>
															<option value="LB" label="Lebanon">Lebanon</option>
															<option value="MO" label="Macau SAR China">Macau SAR China</option>
															<option value="MY" label="Malaysia" selected="selected">Malaysia</option>
															<option value="MV" label="Maldives">Maldives</option>
															<option value="MN" label="Mongolia">Mongolia</option>
															<option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
															<option value="NP" label="Nepal">Nepal</option>
															<option value="NT" label="Neutral Zone">Neutral Zone</option>
															<option value="KP" label="North Korea">North Korea</option>
															<option value="OM" label="Oman">Oman</option>
															<option value="PK" label="Pakistan">Pakistan</option>
															<option value="PS" label="Palestinian Territories">Palestinian Territories</option>
															<option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
															<option value="PH" label="Philippines">Philippines</option>
															<option value="QA" label="Qatar">Qatar</option>
															<option value="SA" label="Saudi Arabia">Saudi Arabia</option>
															<option value="SG" label="Singapore">Singapore</option>
															<option value="KR" label="South Korea">South Korea</option>
															<option value="LK" label="Sri Lanka">Sri Lanka</option>
															<option value="SY" label="Syria">Syria</option>
															<option value="TW" label="Taiwan">Taiwan</option>
															<option value="TJ" label="Tajikistan">Tajikistan</option>
															<option value="TH" label="Thailand">Thailand</option>
															<option value="TL" label="Timor-Leste">Timor-Leste</option>
															<option value="TR" label="Turkey">Turkey</option>
															<option value="TM" label="Turkmenistan">Turkmenistan</option>
															<option value="AE" label="United Arab Emirates">United Arab Emirates</option>
															<option value="UZ" label="Uzbekistan">Uzbekistan</option>
															<option value="VN" label="Vietnam">Vietnam</option>
															<option value="YE" label="Yemen">Yemen</option>													
														</select>											
													</div>
												</div>
											</form>
											<p class="text-end mb-0 mt-3">
												<a href="javascript:;" class="btn btn-white me-5px">Previous</a>
												<a href="javascript:;" class="btn btn-primary">Save</a>
											</p>
										</div>
		
										<div class="tab-pane fade" id="default-tab-3">
											<h4 class="mt-10px">Emergency Contact</h4>
											<br>
											<form>
												<div class="row p-2">		
													<div class="col-sm-6">
														<label for="emergency-firstname" class="form-label">First Name*</label>
														<input type="text" id="emergency-firstname" class="form-control" aria-describedby="emergency-firstname">
													</div>
													<div class="col-sm-6">
														<label for="emergency-lastname" class="form-label">Last Name*</label>
														<input type="text" id="emergency-lastname" class="form-control" aria-describedby="emergency-lastname">
													</div>
												</div>
												<div class="row p-2">		
													<div class="col-sm-6">
														<label for="emergency-contactnumber" class="form-label">Contact Number*</label>
														<input type="text" id="emergency-contactnumber" class="form-control" aria-describedby="emergency-contactnumber">
													</div>
													<div class="col-sm-6">
														<label for="emergency-relationship" class="form-label">Relationship*</label>
														<input type="text" id="emergency-relationship" class="form-control" aria-describedby="emergency-relationship">
													</div>
												</div>
												<div class="row p-2">		
													<div class="col-sm-6">
														<label for="emergency-address1" class="form-label">Address 1*</label>
														<input type="text" id="emergency-address1" class="form-control" aria-describedby="emergency-address1">
													</div>
													<div class="col-sm-6">
														<label for="emergency-address1" class="form-label">Address 2</label>
														<input type="text" id="emergency-address2" class="form-control" aria-describedby="emergency-address2">
													</div>
		
												</div>
												<div class="row p-2">
													<div class="col-sm-6">
														<label for="emergency-postcode" class="form-label">Postcode*</label>
														<input type="text" id="emergency-postcode" class="form-control" aria-describedby="emergency-postcode">
													</div>
													<div class="col-sm-6">
														<label for="emergency-city" class="form-label">City*</label>
														<input type="text" id="City" class="form-control" aria-describedby="City">						
													</div>
												</div>
												<div class="row p-2">
													<div class="col-sm-6">
														<label for="emergency-state" class="form-label">State*</label>
														<select class="form-select">
															<option value="Select a State" label="Select a State">Select a State</option>
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
													<div class="col-sm-6">
														<label for="emergency-country" class="form-label">Country</label>
														<select class="form-select">
														<option value="0" label="Select a country ... " >Select a country ... </option>
															<optgroup id="country-optgroup-Africa" label="Africa">
															<option value="DZ" label="Algeria">Algeria</option>
															<option value="AO" label="Angola">Angola</option>
															<option value="BJ" label="Benin">Benin</option>
															<option value="BW" label="Botswana">Botswana</option>
															<option value="BF" label="Burkina Faso">Burkina Faso</option>
															<option value="BI" label="Burundi">Burundi</option>
															<option value="CM" label="Cameroon">Cameroon</option>
															<option value="CV" label="Cape Verde">Cape Verde</option>
															<option value="CF" label="Central African Republic">Central African Republic</option>
															<option value="TD" label="Chad">Chad</option>
															<option value="KM" label="Comoros">Comoros</option>
															<option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
															<option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
															<option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
															<option value="DJ" label="Djibouti">Djibouti</option>
															<option value="EG" label="Egypt">Egypt</option>
															<option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
															<option value="ER" label="Eritrea">Eritrea</option>
															<option value="ET" label="Ethiopia">Ethiopia</option>
															<option value="GA" label="Gabon">Gabon</option>
															<option value="GM" label="Gambia">Gambia</option>
															<option value="GH" label="Ghana">Ghana</option>
															<option value="GN" label="Guinea">Guinea</option>
															<option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
															<option value="KE" label="Kenya">Kenya</option>
															<option value="LS" label="Lesotho">Lesotho</option>
															<option value="LR" label="Liberia">Liberia</option>
															<option value="LY" label="Libya">Libya</option>
															<option value="MG" label="Madagascar">Madagascar</option>
															<option value="MW" label="Malawi">Malawi</option>
															<option value="ML" label="Mali">Mali</option>
															<option value="MR" label="Mauritania">Mauritania</option>
															<option value="MU" label="Mauritius">Mauritius</option>
															<option value="YT" label="Mayotte">Mayotte</option>
															<option value="MA" label="Morocco">Morocco</option>
															<option value="MZ" label="Mozambique">Mozambique</option>
															<option value="NA" label="Namibia">Namibia</option>
															<option value="NE" label="Niger">Niger</option>
															<option value="NG" label="Nigeria">Nigeria</option>
															<option value="RW" label="Rwanda">Rwanda</option>
															<option value="RE" label="Réunion">Réunion</option>
															<option value="SH" label="Saint Helena">Saint Helena</option>
															<option value="SN" label="Senegal">Senegal</option>
															<option value="SC" label="Seychelles">Seychelles</option>
															<option value="SL" label="Sierra Leone">Sierra Leone</option>
															<option value="SO" label="Somalia">Somalia</option>
															<option value="ZA" label="South Africa">South Africa</option>
															<option value="SD" label="Sudan">Sudan</option>
															<option value="SZ" label="Swaziland">Swaziland</option>
															<option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
															<option value="TZ" label="Tanzania">Tanzania</option>
															<option value="TG" label="Togo">Togo</option>
															<option value="TN" label="Tunisia">Tunisia</option>
															<option value="UG" label="Uganda">Uganda</option>
															<option value="EH" label="Western Sahara">Western Sahara</option>
															<option value="ZM" label="Zambia">Zambia</option>
															<option value="ZW" label="Zimbabwe">Zimbabwe</option>
														</optgroup>
														<optgroup id="country-optgroup-Americas" label="Americas">
															<option value="AI" label="Anguilla">Anguilla</option>
															<option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
															<option value="AR" label="Argentina">Argentina</option>
															<option value="AW" label="Aruba">Aruba</option>
															<option value="BS" label="Bahamas">Bahamas</option>
															<option value="BB" label="Barbados">Barbados</option>
															<option value="BZ" label="Belize">Belize</option>
															<option value="BM" label="Bermuda">Bermuda</option>
															<option value="BO" label="Bolivia">Bolivia</option>
															<option value="BR" label="Brazil">Brazil</option>
															<option value="VG" label="British Virgin Islands">British Virgin Islands</option>
															<option value="CA" label="Canada">Canada</option>
															<option value="KY" label="Cayman Islands">Cayman Islands</option>
															<option value="CL" label="Chile">Chile</option>
															<option value="CO" label="Colombia">Colombia</option>
															<option value="CR" label="Costa Rica">Costa Rica</option>
															<option value="CU" label="Cuba">Cuba</option>
															<option value="DM" label="Dominica">Dominica</option>
															<option value="DO" label="Dominican Republic">Dominican Republic</option>
															<option value="EC" label="Ecuador">Ecuador</option>
															<option value="SV" label="El Salvador">El Salvador</option>
															<option value="FK" label="Falkland Islands">Falkland Islands</option>
															<option value="GF" label="French Guiana">French Guiana</option>
															<option value="GL" label="Greenland">Greenland</option>
															<option value="GD" label="Grenada">Grenada</option>
															<option value="GP" label="Guadeloupe">Guadeloupe</option>
															<option value="GT" label="Guatemala">Guatemala</option>
															<option value="GY" label="Guyana">Guyana</option>
															<option value="HT" label="Haiti">Haiti</option>
															<option value="HN" label="Honduras">Honduras</option>
															<option value="JM" label="Jamaica">Jamaica</option>
															<option value="MQ" label="Martinique">Martinique</option>
															<option value="MX" label="Mexico">Mexico</option>
															<option value="MS" label="Montserrat">Montserrat</option>
															<option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
															<option value="NI" label="Nicaragua">Nicaragua</option>
															<option value="PA" label="Panama">Panama</option>
															<option value="PY" label="Paraguay">Paraguay</option>
															<option value="PE" label="Peru">Peru</option>
															<option value="PR" label="Puerto Rico">Puerto Rico</option>
															<option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
															<option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
															<option value="LC" label="Saint Lucia">Saint Lucia</option>
															<option value="MF" label="Saint Martin">Saint Martin</option>
															<option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
															<option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
															<option value="SR" label="Suriname">Suriname</option>
															<option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
															<option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
															<option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
															<option value="US" label="United States">United States</option>
															<option value="UY" label="Uruguay">Uruguay</option>
															<option value="VE" label="Venezuela">Venezuela</option>
														</optgroup>
														<optgroup id="country-optgroup-Asia" label="Asia">
															<option value="AF" label="Afghanistan">Afghanistan</option>
															<option value="AM" label="Armenia">Armenia</option>
															<option value="AZ" label="Azerbaijan">Azerbaijan</option>
															<option value="BH" label="Bahrain">Bahrain</option>
															<option value="BD" label="Bangladesh">Bangladesh</option>
															<option value="BT" label="Bhutan">Bhutan</option>
															<option value="BN" label="Brunei">Brunei</option>
															<option value="KH" label="Cambodia">Cambodia</option>
															<option value="CN" label="China">China</option>
															<option value="GE" label="Georgia">Georgia</option>
															<option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
															<option value="IN" label="India">India</option>
															<option value="ID" label="Indonesia">Indonesia</option>
															<option value="IR" label="Iran">Iran</option>
															<option value="IQ" label="Iraq">Iraq</option>
															<option value="IL" label="Israel">Israel</option>
															<option value="JP" label="Japan">Japan</option>
															<option value="JO" label="Jordan">Jordan</option>
															<option value="KZ" label="Kazakhstan">Kazakhstan</option>
															<option value="KW" label="Kuwait">Kuwait</option>
															<option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
															<option value="LA" label="Laos">Laos</option>
															<option value="LB" label="Lebanon">Lebanon</option>
															<option value="MO" label="Macau SAR China">Macau SAR China</option>
															<option value="MY" label="Malaysia" selected="selected">Malaysia</option>
															<option value="MV" label="Maldives">Maldives</option>
															<option value="MN" label="Mongolia">Mongolia</option>
															<option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
															<option value="NP" label="Nepal">Nepal</option>
															<option value="NT" label="Neutral Zone">Neutral Zone</option>
															<option value="KP" label="North Korea">North Korea</option>
															<option value="OM" label="Oman">Oman</option>
															<option value="PK" label="Pakistan">Pakistan</option>
															<option value="PS" label="Palestinian Territories">Palestinian Territories</option>
															<option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
															<option value="PH" label="Philippines">Philippines</option>
															<option value="QA" label="Qatar">Qatar</option>
															<option value="SA" label="Saudi Arabia">Saudi Arabia</option>
															<option value="SG" label="Singapore">Singapore</option>
															<option value="KR" label="South Korea">South Korea</option>
															<option value="LK" label="Sri Lanka">Sri Lanka</option>
															<option value="SY" label="Syria">Syria</option>
															<option value="TW" label="Taiwan">Taiwan</option>
															<option value="TJ" label="Tajikistan">Tajikistan</option>
															<option value="TH" label="Thailand">Thailand</option>
															<option value="TL" label="Timor-Leste">Timor-Leste</option>
															<option value="TR" label="Turkey">Turkey</option>
															<option value="TM" label="Turkmenistan">Turkmenistan</option>
															<option value="AE" label="United Arab Emirates">United Arab Emirates</option>
															<option value="UZ" label="Uzbekistan">Uzbekistan</option>
															<option value="VN" label="Vietnam">Vietnam</option>
															<option value="YE" label="Yemen">Yemen</option>													
														</select>											
													</div>
												</div>
											</form>
											<p class="text-end mb-0 mt-3">
												<a href="javascript:;" class="btn btn-white me-5px">Previous</a>
												<a href="javascript:;" class="btn btn-primary">Save</a>
											</p>
										</div>
		
										<div class="tab-pane fade" id="default-tab-4">
											<form>
												<div class="accordion" id="accordionExample">
													<div class="accordion-item">
													  <h2 class="accordion-header" id="headingOne">
														<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
															Add New Companion
														</button>
													  </h2>
													  <div id="collapseOne" class="accordion-collapse collapse show bg-white" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
														<div class="accordion-body">
															<form>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<h4>Companion Information</h4>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-check form-switch">
																			<input class="form-check-input" type="checkbox" role="switch" id="set-main" checked>
																			<label class="form-check-label" for="set-main">Set as Main Companion</label>
																		  </div>
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="firstname" class="form-label">First Name*</label>
																		<input type="text" id="firstname" class="form-control" aria-describedby="firstname">
																	</div>
																	<div class="col-sm-6">
																		<label for="lastname" class="form-label">Last Name*</label>
																		<input type="text" id="lastname" class="form-control" aria-describedby="lastname">
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="fullname" class="form-label">Full Name</label>
																		<input type="text" id="fullname" class="form-control" aria-describedby="fullname">
																	</div>
																	<div class="col-sm-6">
																		<div class="row">
																			<div class="col-sm-6">
																				<div class="form-check form-switch">
																					<label for="citizen" class="form-label">Non-Citizen ?</label>
																					<input class="form-check-input" type="checkbox" role="switch" id="citizen" checked>
																				  </div>
																			</div>
																			<div class="col-sm-6">
																				<label for="passport-number" class="form-label">Identification Number*</label>
																				<input type="text" value="0108393019299" id="passport-number" class="form-control" aria-describedby="passport-number">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<div class="row">
																			<div class="col-sm-6">
																				<label for="passport" class="form-label">Passport Number</label>
																				<input type="text" id="passport" class="form-control" aria-describedby="passport">
																			</div>
																			<div class="col-sm-6">
																				<label for="expirydate" class="form-label">Expiry Date</label>
																				<input type="date" id="expirydate1" class="form-control" aria-describedby="expirydate">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<label for="issuing-country" class="form-label">Issuing Country</label>
																		<select class="form-select">
																		<option value="0" label="Select a country ... " >Select a country ... </option>
																				<optgroup id="country-optgroup-Africa" label="Africa">
																				<option value="DZ" label="Algeria">Algeria</option>
																				<option value="AO" label="Angola">Angola</option>
																				<option value="BJ" label="Benin">Benin</option>
																				<option value="BW" label="Botswana">Botswana</option>
																				<option value="BF" label="Burkina Faso">Burkina Faso</option>
																				<option value="BI" label="Burundi">Burundi</option>
																				<option value="CM" label="Cameroon">Cameroon</option>
																				<option value="CV" label="Cape Verde">Cape Verde</option>
																				<option value="CF" label="Central African Republic">Central African Republic</option>
																				<option value="TD" label="Chad">Chad</option>
																				<option value="KM" label="Comoros">Comoros</option>
																				<option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
																				<option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
																				<option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
																				<option value="DJ" label="Djibouti">Djibouti</option>
																				<option value="EG" label="Egypt">Egypt</option>
																				<option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
																				<option value="ER" label="Eritrea">Eritrea</option>
																				<option value="ET" label="Ethiopia">Ethiopia</option>
																				<option value="GA" label="Gabon">Gabon</option>
																				<option value="GM" label="Gambia">Gambia</option>
																				<option value="GH" label="Ghana">Ghana</option>
																				<option value="GN" label="Guinea">Guinea</option>
																				<option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
																				<option value="KE" label="Kenya">Kenya</option>
																				<option value="LS" label="Lesotho">Lesotho</option>
																				<option value="LR" label="Liberia">Liberia</option>
																				<option value="LY" label="Libya">Libya</option>
																				<option value="MG" label="Madagascar">Madagascar</option>
																				<option value="MW" label="Malawi">Malawi</option>
																				<option value="ML" label="Mali">Mali</option>
																				<option value="MR" label="Mauritania">Mauritania</option>
																				<option value="MU" label="Mauritius">Mauritius</option>
																				<option value="YT" label="Mayotte">Mayotte</option>
																				<option value="MA" label="Morocco">Morocco</option>
																				<option value="MZ" label="Mozambique">Mozambique</option>
																				<option value="NA" label="Namibia">Namibia</option>
																				<option value="NE" label="Niger">Niger</option>
																				<option value="NG" label="Nigeria">Nigeria</option>
																				<option value="RW" label="Rwanda">Rwanda</option>
																				<option value="RE" label="Réunion">Réunion</option>
																				<option value="SH" label="Saint Helena">Saint Helena</option>
																				<option value="SN" label="Senegal">Senegal</option>
																				<option value="SC" label="Seychelles">Seychelles</option>
																				<option value="SL" label="Sierra Leone">Sierra Leone</option>
																				<option value="SO" label="Somalia">Somalia</option>
																				<option value="ZA" label="South Africa">South Africa</option>
																				<option value="SD" label="Sudan">Sudan</option>
																				<option value="SZ" label="Swaziland">Swaziland</option>
																				<option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
																				<option value="TZ" label="Tanzania">Tanzania</option>
																				<option value="TG" label="Togo">Togo</option>
																				<option value="TN" label="Tunisia">Tunisia</option>
																				<option value="UG" label="Uganda">Uganda</option>
																				<option value="EH" label="Western Sahara">Western Sahara</option>
																				<option value="ZM" label="Zambia">Zambia</option>
																				<option value="ZW" label="Zimbabwe">Zimbabwe</option>
																			</optgroup>
																			<optgroup id="country-optgroup-Americas" label="Americas">
																				<option value="AI" label="Anguilla">Anguilla</option>
																				<option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
																				<option value="AR" label="Argentina">Argentina</option>
																				<option value="AW" label="Aruba">Aruba</option>
																				<option value="BS" label="Bahamas">Bahamas</option>
																				<option value="BB" label="Barbados">Barbados</option>
																				<option value="BZ" label="Belize">Belize</option>
																				<option value="BM" label="Bermuda">Bermuda</option>
																				<option value="BO" label="Bolivia">Bolivia</option>
																				<option value="BR" label="Brazil">Brazil</option>
																				<option value="VG" label="British Virgin Islands">British Virgin Islands</option>
																				<option value="CA" label="Canada">Canada</option>
																				<option value="KY" label="Cayman Islands">Cayman Islands</option>
																				<option value="CL" label="Chile">Chile</option>
																				<option value="CO" label="Colombia">Colombia</option>
																				<option value="CR" label="Costa Rica">Costa Rica</option>
																				<option value="CU" label="Cuba">Cuba</option>
																				<option value="DM" label="Dominica">Dominica</option>
																				<option value="DO" label="Dominican Republic">Dominican Republic</option>
																				<option value="EC" label="Ecuador">Ecuador</option>
																				<option value="SV" label="El Salvador">El Salvador</option>
																				<option value="FK" label="Falkland Islands">Falkland Islands</option>
																				<option value="GF" label="French Guiana">French Guiana</option>
																				<option value="GL" label="Greenland">Greenland</option>
																				<option value="GD" label="Grenada">Grenada</option>
																				<option value="GP" label="Guadeloupe">Guadeloupe</option>
																				<option value="GT" label="Guatemala">Guatemala</option>
																				<option value="GY" label="Guyana">Guyana</option>
																				<option value="HT" label="Haiti">Haiti</option>
																				<option value="HN" label="Honduras">Honduras</option>
																				<option value="JM" label="Jamaica">Jamaica</option>
																				<option value="MQ" label="Martinique">Martinique</option>
																				<option value="MX" label="Mexico">Mexico</option>
																				<option value="MS" label="Montserrat">Montserrat</option>
																				<option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
																				<option value="NI" label="Nicaragua">Nicaragua</option>
																				<option value="PA" label="Panama">Panama</option>
																				<option value="PY" label="Paraguay">Paraguay</option>
																				<option value="PE" label="Peru">Peru</option>
																				<option value="PR" label="Puerto Rico">Puerto Rico</option>
																				<option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
																				<option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																				<option value="LC" label="Saint Lucia">Saint Lucia</option>
																				<option value="MF" label="Saint Martin">Saint Martin</option>
																				<option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
																				<option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
																				<option value="SR" label="Suriname">Suriname</option>
																				<option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
																				<option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
																				<option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
																				<option value="US" label="United States">United States</option>
																				<option value="UY" label="Uruguay">Uruguay</option>
																				<option value="VE" label="Venezuela">Venezuela</option>
																			</optgroup>
																			<optgroup id="country-optgroup-Asia" label="Asia">
																				<option value="AF" label="Afghanistan">Afghanistan</option>
																				<option value="AM" label="Armenia">Armenia</option>
																				<option value="AZ" label="Azerbaijan">Azerbaijan</option>
																				<option value="BH" label="Bahrain">Bahrain</option>
																				<option value="BD" label="Bangladesh">Bangladesh</option>
																				<option value="BT" label="Bhutan">Bhutan</option>
																				<option value="BN" label="Brunei">Brunei</option>
																				<option value="KH" label="Cambodia">Cambodia</option>
																				<option value="CN" label="China">China</option>
																				<option value="GE" label="Georgia">Georgia</option>
																				<option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
																				<option value="IN" label="India">India</option>
																				<option value="ID" label="Indonesia">Indonesia</option>
																				<option value="IR" label="Iran">Iran</option>
																				<option value="IQ" label="Iraq">Iraq</option>
																				<option value="IL" label="Israel">Israel</option>
																				<option value="JP" label="Japan">Japan</option>
																				<option value="JO" label="Jordan">Jordan</option>
																				<option value="KZ" label="Kazakhstan">Kazakhstan</option>
																				<option value="KW" label="Kuwait">Kuwait</option>
																				<option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
																				<option value="LA" label="Laos">Laos</option>
																				<option value="LB" label="Lebanon">Lebanon</option>
																				<option value="MO" label="Macau SAR China">Macau SAR China</option>
																				<option value="MY" label="Malaysia" selected="selected">Malaysia</option>
																				<option value="MV" label="Maldives">Maldives</option>
																				<option value="MN" label="Mongolia">Mongolia</option>
																				<option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
																				<option value="NP" label="Nepal">Nepal</option>
																				<option value="NT" label="Neutral Zone">Neutral Zone</option>
																				<option value="KP" label="North Korea">North Korea</option>
																				<option value="OM" label="Oman">Oman</option>
																				<option value="PK" label="Pakistan">Pakistan</option>
																				<option value="PS" label="Palestinian Territories">Palestinian Territories</option>
																				<option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
																				<option value="PH" label="Philippines">Philippines</option>
																				<option value="QA" label="Qatar">Qatar</option>
																				<option value="SA" label="Saudi Arabia">Saudi Arabia</option>
																				<option value="SG" label="Singapore">Singapore</option>
																				<option value="KR" label="South Korea">South Korea</option>
																				<option value="LK" label="Sri Lanka">Sri Lanka</option>
																				<option value="SY" label="Syria">Syria</option>
																				<option value="TW" label="Taiwan">Taiwan</option>
																				<option value="TJ" label="Tajikistan">Tajikistan</option>
																				<option value="TH" label="Thailand">Thailand</option>
																				<option value="TL" label="Timor-Leste">Timor-Leste</option>
																				<option value="TR" label="Turkey">Turkey</option>
																				<option value="TM" label="Turkmenistan">Turkmenistan</option>
																				<option value="AE" label="United Arab Emirates">United Arab Emirates</option>
																				<option value="UZ" label="Uzbekistan">Uzbekistan</option>
																				<option value="VN" label="Vietnam">Vietnam</option>
																				<option value="YE" label="Yemen">Yemen</option>													
																		</select>											
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="contact-number" class="form-label">Contact Number</label>
																		<input type="text" id="contact-number" class="form-control" aria-describedby="contact-number">
																	</div>
																	<div class="col-sm-6">
																		<div class="row">
																			<div class="col-sm-6">
																				<label for="dob" class="form-label">Date of Birth</label>
																				<input type="date" id="dob1" class="form-control" aria-describedby="dob">
																			</div>
																			<div class="col-sm-6">
																				<label for="age" class="form-label">Age</label>
																				<input type="text" id="age" class="form-control" aria-describedby="age">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="dom" class="form-label">Date of Marriage</label>
																		<input type="date" id="dom1" class="form-control" aria-describedby="dom">
																	</div>
																	<div class="col-sm-6">
																		<div class="row">
																			<div class="col-sm-6">
																				<label for="marriage-cert" class="form-label">Marriage Certificate</label>
																				<input type="file" id="marriage-cert" class="form-control" aria-describedby="dob">
																			</div>
																			<div class="col-sm-6">
																				<label for="marriage-status" class="form-label">Marriage Status</label>
																				<select class="form-select">
																					<option value="0" label="Please Choose " selected="selected"></option>
																					<option value="single" label="Single">Single</option>
																					<option value="married" label="married">married</option>
																					<option value="windowed" label="windowed">windowed</option>
																					<option value="divorced" label="divorced">divorced</option>
																					<option value="seperated" label="seperated">seperated</option>													
																				</select>											
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="address1" class="form-label">Address 1*</label>
																		<input type="text" id="address1" class="form-control" aria-describedby="address1">
																	</div>
																	<div class="col-sm-6">
																		<label for="address2" class="form-label">Address 2</label>
																		<input type="text" id="address2" class="form-control" aria-describedby="address2">
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="firstname" class="form-label">City*</label>
																		<input type="text" id="firstname" class="form-control" aria-describedby="firstname">
																	</div>
																	<div class="col-sm-6">
																		<label for="lastname" class="form-label">Postcode*</label>
																		<input type="text" id="lastname" class="form-control" aria-describedby="lastname">
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="state" class="form-label">State*</label>
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
																	<div class="col-sm-6">
																		<label for="country" class="form-label">Country</label>
																		<select class="form-select">
																		<option value="0" label="Select a country ... " >Select a country ... </option>
																			<optgroup id="country-optgroup-Africa" label="Africa">
																			<option value="DZ" label="Algeria">Algeria</option>
																			<option value="AO" label="Angola">Angola</option>
																			<option value="BJ" label="Benin">Benin</option>
																			<option value="BW" label="Botswana">Botswana</option>
																			<option value="BF" label="Burkina Faso">Burkina Faso</option>
																			<option value="BI" label="Burundi">Burundi</option>
																			<option value="CM" label="Cameroon">Cameroon</option>
																			<option value="CV" label="Cape Verde">Cape Verde</option>
																			<option value="CF" label="Central African Republic">Central African Republic</option>
																			<option value="TD" label="Chad">Chad</option>
																			<option value="KM" label="Comoros">Comoros</option>
																			<option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
																			<option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
																			<option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
																			<option value="DJ" label="Djibouti">Djibouti</option>
																			<option value="EG" label="Egypt">Egypt</option>
																			<option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
																			<option value="ER" label="Eritrea">Eritrea</option>
																			<option value="ET" label="Ethiopia">Ethiopia</option>
																			<option value="GA" label="Gabon">Gabon</option>
																			<option value="GM" label="Gambia">Gambia</option>
																			<option value="GH" label="Ghana">Ghana</option>
																			<option value="GN" label="Guinea">Guinea</option>
																			<option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
																			<option value="KE" label="Kenya">Kenya</option>
																			<option value="LS" label="Lesotho">Lesotho</option>
																			<option value="LR" label="Liberia">Liberia</option>
																			<option value="LY" label="Libya">Libya</option>
																			<option value="MG" label="Madagascar">Madagascar</option>
																			<option value="MW" label="Malawi">Malawi</option>
																			<option value="ML" label="Mali">Mali</option>
																			<option value="MR" label="Mauritania">Mauritania</option>
																			<option value="MU" label="Mauritius">Mauritius</option>
																			<option value="YT" label="Mayotte">Mayotte</option>
																			<option value="MA" label="Morocco">Morocco</option>
																			<option value="MZ" label="Mozambique">Mozambique</option>
																			<option value="NA" label="Namibia">Namibia</option>
																			<option value="NE" label="Niger">Niger</option>
																			<option value="NG" label="Nigeria">Nigeria</option>
																			<option value="RW" label="Rwanda">Rwanda</option>
																			<option value="RE" label="Réunion">Réunion</option>
																			<option value="SH" label="Saint Helena">Saint Helena</option>
																			<option value="SN" label="Senegal">Senegal</option>
																			<option value="SC" label="Seychelles">Seychelles</option>
																			<option value="SL" label="Sierra Leone">Sierra Leone</option>
																			<option value="SO" label="Somalia">Somalia</option>
																			<option value="ZA" label="South Africa">South Africa</option>
																			<option value="SD" label="Sudan">Sudan</option>
																			<option value="SZ" label="Swaziland">Swaziland</option>
																			<option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
																			<option value="TZ" label="Tanzania">Tanzania</option>
																			<option value="TG" label="Togo">Togo</option>
																			<option value="TN" label="Tunisia">Tunisia</option>
																			<option value="UG" label="Uganda">Uganda</option>
																			<option value="EH" label="Western Sahara">Western Sahara</option>
																			<option value="ZM" label="Zambia">Zambia</option>
																			<option value="ZW" label="Zimbabwe">Zimbabwe</option>
																		</optgroup>
																		<optgroup id="country-optgroup-Americas" label="Americas">
																			<option value="AI" label="Anguilla">Anguilla</option>
																			<option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
																			<option value="AR" label="Argentina">Argentina</option>
																			<option value="AW" label="Aruba">Aruba</option>
																			<option value="BS" label="Bahamas">Bahamas</option>
																			<option value="BB" label="Barbados">Barbados</option>
																			<option value="BZ" label="Belize">Belize</option>
																			<option value="BM" label="Bermuda">Bermuda</option>
																			<option value="BO" label="Bolivia">Bolivia</option>
																			<option value="BR" label="Brazil">Brazil</option>
																			<option value="VG" label="British Virgin Islands">British Virgin Islands</option>
																			<option value="CA" label="Canada">Canada</option>
																			<option value="KY" label="Cayman Islands">Cayman Islands</option>
																			<option value="CL" label="Chile">Chile</option>
																			<option value="CO" label="Colombia">Colombia</option>
																			<option value="CR" label="Costa Rica">Costa Rica</option>
																			<option value="CU" label="Cuba">Cuba</option>
																			<option value="DM" label="Dominica">Dominica</option>
																			<option value="DO" label="Dominican Republic">Dominican Republic</option>
																			<option value="EC" label="Ecuador">Ecuador</option>
																			<option value="SV" label="El Salvador">El Salvador</option>
																			<option value="FK" label="Falkland Islands">Falkland Islands</option>
																			<option value="GF" label="French Guiana">French Guiana</option>
																			<option value="GL" label="Greenland">Greenland</option>
																			<option value="GD" label="Grenada">Grenada</option>
																			<option value="GP" label="Guadeloupe">Guadeloupe</option>
																			<option value="GT" label="Guatemala">Guatemala</option>
																			<option value="GY" label="Guyana">Guyana</option>
																			<option value="HT" label="Haiti">Haiti</option>
																			<option value="HN" label="Honduras">Honduras</option>
																			<option value="JM" label="Jamaica">Jamaica</option>
																			<option value="MQ" label="Martinique">Martinique</option>
																			<option value="MX" label="Mexico">Mexico</option>
																			<option value="MS" label="Montserrat">Montserrat</option>
																			<option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
																			<option value="NI" label="Nicaragua">Nicaragua</option>
																			<option value="PA" label="Panama">Panama</option>
																			<option value="PY" label="Paraguay">Paraguay</option>
																			<option value="PE" label="Peru">Peru</option>
																			<option value="PR" label="Puerto Rico">Puerto Rico</option>
																			<option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
																			<option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																			<option value="LC" label="Saint Lucia">Saint Lucia</option>
																			<option value="MF" label="Saint Martin">Saint Martin</option>
																			<option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
																			<option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
																			<option value="SR" label="Suriname">Suriname</option>
																			<option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
																			<option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
																			<option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
																			<option value="US" label="United States">United States</option>
																			<option value="UY" label="Uruguay">Uruguay</option>
																			<option value="VE" label="Venezuela">Venezuela</option>
																		</optgroup>
																		<optgroup id="country-optgroup-Asia" label="Asia">
																			<option value="AF" label="Afghanistan">Afghanistan</option>
																			<option value="AM" label="Armenia">Armenia</option>
																			<option value="AZ" label="Azerbaijan">Azerbaijan</option>
																			<option value="BH" label="Bahrain">Bahrain</option>
																			<option value="BD" label="Bangladesh">Bangladesh</option>
																			<option value="BT" label="Bhutan">Bhutan</option>
																			<option value="BN" label="Brunei">Brunei</option>
																			<option value="KH" label="Cambodia">Cambodia</option>
																			<option value="CN" label="China">China</option>
																			<option value="GE" label="Georgia">Georgia</option>
																			<option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
																			<option value="IN" label="India">India</option>
																			<option value="ID" label="Indonesia">Indonesia</option>
																			<option value="IR" label="Iran">Iran</option>
																			<option value="IQ" label="Iraq">Iraq</option>
																			<option value="IL" label="Israel">Israel</option>
																			<option value="JP" label="Japan">Japan</option>
																			<option value="JO" label="Jordan">Jordan</option>
																			<option value="KZ" label="Kazakhstan">Kazakhstan</option>
																			<option value="KW" label="Kuwait">Kuwait</option>
																			<option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
																			<option value="LA" label="Laos">Laos</option>
																			<option value="LB" label="Lebanon">Lebanon</option>
																			<option value="MO" label="Macau SAR China">Macau SAR China</option>
																			<option value="MY" label="Malaysia" selected="selected">Malaysia </option>
																			<option value="MV" label="Maldives">Maldives</option>
																			<option value="MN" label="Mongolia">Mongolia</option>
																			<option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
																			<option value="NP" label="Nepal">Nepal</option>
																			<option value="NT" label="Neutral Zone">Neutral Zone</option>
																			<option value="KP" label="North Korea">North Korea</option>
																			<option value="OM" label="Oman">Oman</option>
																			<option value="PK" label="Pakistan">Pakistan</option>
																			<option value="PS" label="Palestinian Territories">Palestinian Territories</option>
																			<option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
																			<option value="PH" label="Philippines">Philippines</option>
																			<option value="QA" label="Qatar">Qatar</option>
																			<option value="SA" label="Saudi Arabia">Saudi Arabia</option>
																			<option value="SG" label="Singapore">Singapore</option>
																			<option value="KR" label="South Korea">South Korea</option>
																			<option value="LK" label="Sri Lanka">Sri Lanka</option>
																			<option value="SY" label="Syria">Syria</option>
																			<option value="TW" label="Taiwan">Taiwan</option>
																			<option value="TJ" label="Tajikistan">Tajikistan</option>
																			<option value="TH" label="Thailand">Thailand</option>
																			<option value="TL" label="Timor-Leste">Timor-Leste</option>
																			<option value="TR" label="Turkey">Turkey</option>
																			<option value="TM" label="Turkmenistan">Turkmenistan</option>
																			<option value="AE" label="United Arab Emirates">United Arab Emirates</option>
																			<option value="UZ" label="Uzbekistan">Uzbekistan</option>
																			<option value="VN" label="Vietnam">Vietnam</option>
																			<option value="YE" label="Yemen">Yemen</option>													
																		</select>											
																	</div>
																</div>
																<hr class="mt-5">
																<div class="row p-2">
																	<div class="col-sm-6">
																		<h4>Companion Employment Details</h4>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-check form-switch align-right">
																			<input class="form-check-input" type="checkbox" role="switch" id="set-main" checked>
																			<label class="form-check-label" for="set-main">Working ?</label>
																		  </div>
																	</div>	
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="company-name" class="form-label">Company Name</label>
																		<input type="text" id="phone-number" class="form-control" aria-describedby="company-name">
																	</div>
																	<div class="col-sm-6">
																		<label for="date-joined-company" class="form-label">Date Joined Company</label>
																		<input type="date" id="djc" class="form-control" aria-describedby="date-joined-company">
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="income-tax-number" class="form-label">Income Tax Number*</label>
																		<input type="text" id="income-tax-number" class="form-control" aria-describedby="income-tax-number">
																	</div>
																	<div class="col-sm-6">
																		<label for="extension-number" class="form-label">Payslip</label>
																		<input type="file" id="extension-number" class="form-control" aria-describedby="extension-number">
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="income-tax-number" class="form-label">Office Number</label>
																		<input type="text" id="income-tax-number" class="form-control" aria-describedby="income-tax-number">
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="address1" class="form-label">Address 1*</label>
																		<input type="text" id="address1" class="form-control" aria-describedby="address1">
																	</div>
																	<div class="col-sm-6">
																		<label for="address2" class="form-label">Address 2</label>
																		<input type="text" id="address2" class="form-control" aria-describedby="address2">
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="firstname" class="form-label">City*</label>
																		<input type="text" id="firstname" class="form-control" aria-describedby="firstname">
																	</div>
																	<div class="col-sm-6">
																		<label for="lastname" class="form-label">Postcode*</label>
																		<input type="text" id="lastname" class="form-control" aria-describedby="lastname">
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="state" class="form-label">State*</label>
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
																	<div class="col-sm-6">
																		<label for="country" class="form-label">Country</label>
																		<select class="form-select">
																		<option value="0" label="Select a country ... " >Select a country ... </option>
																			<optgroup id="country-optgroup-Africa" label="Africa">
																			<option value="DZ" label="Algeria">Algeria</option>
																			<option value="AO" label="Angola">Angola</option>
																			<option value="BJ" label="Benin">Benin</option>
																			<option value="BW" label="Botswana">Botswana</option>
																			<option value="BF" label="Burkina Faso">Burkina Faso</option>
																			<option value="BI" label="Burundi">Burundi</option>
																			<option value="CM" label="Cameroon">Cameroon</option>
																			<option value="CV" label="Cape Verde">Cape Verde</option>
																			<option value="CF" label="Central African Republic">Central African Republic</option>
																			<option value="TD" label="Chad">Chad</option>
																			<option value="KM" label="Comoros">Comoros</option>
																			<option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
																			<option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
																			<option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
																			<option value="DJ" label="Djibouti">Djibouti</option>
																			<option value="EG" label="Egypt">Egypt</option>
																			<option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
																			<option value="ER" label="Eritrea">Eritrea</option>
																			<option value="ET" label="Ethiopia">Ethiopia</option>
																			<option value="GA" label="Gabon">Gabon</option>
																			<option value="GM" label="Gambia">Gambia</option>
																			<option value="GH" label="Ghana">Ghana</option>
																			<option value="GN" label="Guinea">Guinea</option>
																			<option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
																			<option value="KE" label="Kenya">Kenya</option>
																			<option value="LS" label="Lesotho">Lesotho</option>
																			<option value="LR" label="Liberia">Liberia</option>
																			<option value="LY" label="Libya">Libya</option>
																			<option value="MG" label="Madagascar">Madagascar</option>
																			<option value="MW" label="Malawi">Malawi</option>
																			<option value="ML" label="Mali">Mali</option>
																			<option value="MR" label="Mauritania">Mauritania</option>
																			<option value="MU" label="Mauritius">Mauritius</option>
																			<option value="YT" label="Mayotte">Mayotte</option>
																			<option value="MA" label="Morocco">Morocco</option>
																			<option value="MZ" label="Mozambique">Mozambique</option>
																			<option value="NA" label="Namibia">Namibia</option>
																			<option value="NE" label="Niger">Niger</option>
																			<option value="NG" label="Nigeria">Nigeria</option>
																			<option value="RW" label="Rwanda">Rwanda</option>
																			<option value="RE" label="Réunion">Réunion</option>
																			<option value="SH" label="Saint Helena">Saint Helena</option>
																			<option value="SN" label="Senegal">Senegal</option>
																			<option value="SC" label="Seychelles">Seychelles</option>
																			<option value="SL" label="Sierra Leone">Sierra Leone</option>
																			<option value="SO" label="Somalia">Somalia</option>
																			<option value="ZA" label="South Africa">South Africa</option>
																			<option value="SD" label="Sudan">Sudan</option>
																			<option value="SZ" label="Swaziland">Swaziland</option>
																			<option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
																			<option value="TZ" label="Tanzania">Tanzania</option>
																			<option value="TG" label="Togo">Togo</option>
																			<option value="TN" label="Tunisia">Tunisia</option>
																			<option value="UG" label="Uganda">Uganda</option>
																			<option value="EH" label="Western Sahara">Western Sahara</option>
																			<option value="ZM" label="Zambia">Zambia</option>
																			<option value="ZW" label="Zimbabwe">Zimbabwe</option>
																		</optgroup>
																		<optgroup id="country-optgroup-Americas" label="Americas">
																			<option value="AI" label="Anguilla">Anguilla</option>
																			<option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
																			<option value="AR" label="Argentina">Argentina</option>
																			<option value="AW" label="Aruba">Aruba</option>
																			<option value="BS" label="Bahamas">Bahamas</option>
																			<option value="BB" label="Barbados">Barbados</option>
																			<option value="BZ" label="Belize">Belize</option>
																			<option value="BM" label="Bermuda">Bermuda</option>
																			<option value="BO" label="Bolivia">Bolivia</option>
																			<option value="BR" label="Brazil">Brazil</option>
																			<option value="VG" label="British Virgin Islands">British Virgin Islands</option>
																			<option value="CA" label="Canada">Canada</option>
																			<option value="KY" label="Cayman Islands">Cayman Islands</option>
																			<option value="CL" label="Chile">Chile</option>
																			<option value="CO" label="Colombia">Colombia</option>
																			<option value="CR" label="Costa Rica">Costa Rica</option>
																			<option value="CU" label="Cuba">Cuba</option>
																			<option value="DM" label="Dominica">Dominica</option>
																			<option value="DO" label="Dominican Republic">Dominican Republic</option>
																			<option value="EC" label="Ecuador">Ecuador</option>
																			<option value="SV" label="El Salvador">El Salvador</option>
																			<option value="FK" label="Falkland Islands">Falkland Islands</option>
																			<option value="GF" label="French Guiana">French Guiana</option>
																			<option value="GL" label="Greenland">Greenland</option>
																			<option value="GD" label="Grenada">Grenada</option>
																			<option value="GP" label="Guadeloupe">Guadeloupe</option>
																			<option value="GT" label="Guatemala">Guatemala</option>
																			<option value="GY" label="Guyana">Guyana</option>
																			<option value="HT" label="Haiti">Haiti</option>
																			<option value="HN" label="Honduras">Honduras</option>
																			<option value="JM" label="Jamaica">Jamaica</option>
																			<option value="MQ" label="Martinique">Martinique</option>
																			<option value="MX" label="Mexico">Mexico</option>
																			<option value="MS" label="Montserrat">Montserrat</option>
																			<option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
																			<option value="NI" label="Nicaragua">Nicaragua</option>
																			<option value="PA" label="Panama">Panama</option>
																			<option value="PY" label="Paraguay">Paraguay</option>
																			<option value="PE" label="Peru">Peru</option>
																			<option value="PR" label="Puerto Rico">Puerto Rico</option>
																			<option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
																			<option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																			<option value="LC" label="Saint Lucia">Saint Lucia</option>
																			<option value="MF" label="Saint Martin">Saint Martin</option>
																			<option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
																			<option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
																			<option value="SR" label="Suriname">Suriname</option>
																			<option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
																			<option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
																			<option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
																			<option value="US" label="United States">United States</option>
																			<option value="UY" label="Uruguay">Uruguay</option>
																			<option value="VE" label="Venezuela">Venezuela</option>
																		</optgroup>
																		<optgroup id="country-optgroup-Asia" label="Asia">
																			<option value="AF" label="Afghanistan">Afghanistan</option>
																			<option value="AM" label="Armenia">Armenia</option>
																			<option value="AZ" label="Azerbaijan">Azerbaijan</option>
																			<option value="BH" label="Bahrain">Bahrain</option>
																			<option value="BD" label="Bangladesh">Bangladesh</option>
																			<option value="BT" label="Bhutan">Bhutan</option>
																			<option value="BN" label="Brunei">Brunei</option>
																			<option value="KH" label="Cambodia">Cambodia</option>
																			<option value="CN" label="China">China</option>
																			<option value="GE" label="Georgia">Georgia</option>
																			<option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
																			<option value="IN" label="India">India</option>
																			<option value="ID" label="Indonesia">Indonesia</option>
																			<option value="IR" label="Iran">Iran</option>
																			<option value="IQ" label="Iraq">Iraq</option>
																			<option value="IL" label="Israel">Israel</option>
																			<option value="JP" label="Japan">Japan</option>
																			<option value="JO" label="Jordan">Jordan</option>
																			<option value="KZ" label="Kazakhstan">Kazakhstan</option>
																			<option value="KW" label="Kuwait">Kuwait</option>
																			<option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
																			<option value="LA" label="Laos">Laos</option>
																			<option value="LB" label="Lebanon">Lebanon</option>
																			<option value="MO" label="Macau SAR China">Macau SAR China</option>
																			<option value="MY" label="Malaysia" selected="selected">Malaysia </option>
																			<option value="MV" label="Maldives">Maldives</option>
																			<option value="MN" label="Mongolia">Mongolia</option>
																			<option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
																			<option value="NP" label="Nepal">Nepal</option>
																			<option value="NT" label="Neutral Zone">Neutral Zone</option>
																			<option value="KP" label="North Korea">North Korea</option>
																			<option value="OM" label="Oman">Oman</option>
																			<option value="PK" label="Pakistan">Pakistan</option>
																			<option value="PS" label="Palestinian Territories">Palestinian Territories</option>
																			<option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
																			<option value="PH" label="Philippines">Philippines</option>
																			<option value="QA" label="Qatar">Qatar</option>
																			<option value="SA" label="Saudi Arabia">Saudi Arabia</option>
																			<option value="SG" label="Singapore">Singapore</option>
																			<option value="KR" label="South Korea">South Korea</option>
																			<option value="LK" label="Sri Lanka">Sri Lanka</option>
																			<option value="SY" label="Syria">Syria</option>
																			<option value="TW" label="Taiwan">Taiwan</option>
																			<option value="TJ" label="Tajikistan">Tajikistan</option>
																			<option value="TH" label="Thailand">Thailand</option>
																			<option value="TL" label="Timor-Leste">Timor-Leste</option>
																			<option value="TR" label="Turkey">Turkey</option>
																			<option value="TM" label="Turkmenistan">Turkmenistan</option>
																			<option value="AE" label="United Arab Emirates">United Arab Emirates</option>
																			<option value="UZ" label="Uzbekistan">Uzbekistan</option>
																			<option value="VN" label="Vietnam">Vietnam</option>
																			<option value="YE" label="Yemen">Yemen</option>														
																		</select>											
																	</div>
																</div>
															</form>
														</div>
													  </div>
													</div>
													<div class="accordion-item">
													  <h2 class="accordion-header" id="headingTwo">
														<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
														  Aqil Anwar
														</button>
													  </h2>
													  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
														<div class="accordion-body bg-white">
															<form>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<h4>Companion Information</h4>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-check form-switch">
																			<input class="form-check-input" type="checkbox" role="switch" id="set-main" checked>
																			<label class="form-check-label" for="set-main">Set as Main Companion</label>
																		  </div>
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="firstname" class="form-label">First Name*</label>
																		<input type="text" id="firstname" class="form-control" aria-describedby="firstname">
																	</div>
																	<div class="col-sm-6">
																		<label for="lastname" class="form-label">Last Name*</label>
																		<input type="text" id="lastname" class="form-control" aria-describedby="lastname">
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="fullname" class="form-label">Full Name</label>
																		<input type="text" id="fullname" class="form-control" aria-describedby="fullname">
																	</div>
																	<div class="col-sm-6">
																		<div class="row">
																			<div class="col-sm-6">
																				<div class="form-check form-switch">
																					<label for="citizen" class="form-label">Non-Citizen ?</label>
																					<input class="form-check-input" type="checkbox" role="switch" id="citizen" checked>
																				  </div>
																			</div>
																			<div class="col-sm-6">
																				<label for="passport-number" class="form-label">Identification Number*</label>
																				<input type="text" value="0108393019299" id="passport-number" class="form-control" aria-describedby="passport-number">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<div class="row">
																			<div class="col-sm-6">
																				<label for="passport" class="form-label">Passport Number</label>
																				<input type="text" id="passport" class="form-control" aria-describedby="passport">
																			</div>
																			<div class="col-sm-6">
																				<label for="expirydate" class="form-label">Expiry Date</label>
																				<input type="date" id="expirydate" class="form-control" aria-describedby="expirydate">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<label for="issuing-country" class="form-label">Issuing Country</label>
																		<select class="form-select">
																		<option value="0" label="Select a country ... " >Select a country ... </option>
																			<optgroup id="country-optgroup-Africa" label="Africa">
																			<option value="DZ" label="Algeria">Algeria</option>
																			<option value="AO" label="Angola">Angola</option>
																			<option value="BJ" label="Benin">Benin</option>
																			<option value="BW" label="Botswana">Botswana</option>
																			<option value="BF" label="Burkina Faso">Burkina Faso</option>
																			<option value="BI" label="Burundi">Burundi</option>
																			<option value="CM" label="Cameroon">Cameroon</option>
																			<option value="CV" label="Cape Verde">Cape Verde</option>
																			<option value="CF" label="Central African Republic">Central African Republic</option>
																			<option value="TD" label="Chad">Chad</option>
																			<option value="KM" label="Comoros">Comoros</option>
																			<option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
																			<option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
																			<option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
																			<option value="DJ" label="Djibouti">Djibouti</option>
																			<option value="EG" label="Egypt">Egypt</option>
																			<option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
																			<option value="ER" label="Eritrea">Eritrea</option>
																			<option value="ET" label="Ethiopia">Ethiopia</option>
																			<option value="GA" label="Gabon">Gabon</option>
																			<option value="GM" label="Gambia">Gambia</option>
																			<option value="GH" label="Ghana">Ghana</option>
																			<option value="GN" label="Guinea">Guinea</option>
																			<option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
																			<option value="KE" label="Kenya">Kenya</option>
																			<option value="LS" label="Lesotho">Lesotho</option>
																			<option value="LR" label="Liberia">Liberia</option>
																			<option value="LY" label="Libya">Libya</option>
																			<option value="MG" label="Madagascar">Madagascar</option>
																			<option value="MW" label="Malawi">Malawi</option>
																			<option value="ML" label="Mali">Mali</option>
																			<option value="MR" label="Mauritania">Mauritania</option>
																			<option value="MU" label="Mauritius">Mauritius</option>
																			<option value="YT" label="Mayotte">Mayotte</option>
																			<option value="MA" label="Morocco">Morocco</option>
																			<option value="MZ" label="Mozambique">Mozambique</option>
																			<option value="NA" label="Namibia">Namibia</option>
																			<option value="NE" label="Niger">Niger</option>
																			<option value="NG" label="Nigeria">Nigeria</option>
																			<option value="RW" label="Rwanda">Rwanda</option>
																			<option value="RE" label="Réunion">Réunion</option>
																			<option value="SH" label="Saint Helena">Saint Helena</option>
																			<option value="SN" label="Senegal">Senegal</option>
																			<option value="SC" label="Seychelles">Seychelles</option>
																			<option value="SL" label="Sierra Leone">Sierra Leone</option>
																			<option value="SO" label="Somalia">Somalia</option>
																			<option value="ZA" label="South Africa">South Africa</option>
																			<option value="SD" label="Sudan">Sudan</option>
																			<option value="SZ" label="Swaziland">Swaziland</option>
																			<option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
																			<option value="TZ" label="Tanzania">Tanzania</option>
																			<option value="TG" label="Togo">Togo</option>
																			<option value="TN" label="Tunisia">Tunisia</option>
																			<option value="UG" label="Uganda">Uganda</option>
																			<option value="EH" label="Western Sahara">Western Sahara</option>
																			<option value="ZM" label="Zambia">Zambia</option>
																			<option value="ZW" label="Zimbabwe">Zimbabwe</option>
																		</optgroup>
																		<optgroup id="country-optgroup-Americas" label="Americas">
																			<option value="AI" label="Anguilla">Anguilla</option>
																			<option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
																			<option value="AR" label="Argentina">Argentina</option>
																			<option value="AW" label="Aruba">Aruba</option>
																			<option value="BS" label="Bahamas">Bahamas</option>
																			<option value="BB" label="Barbados">Barbados</option>
																			<option value="BZ" label="Belize">Belize</option>
																			<option value="BM" label="Bermuda">Bermuda</option>
																			<option value="BO" label="Bolivia">Bolivia</option>
																			<option value="BR" label="Brazil">Brazil</option>
																			<option value="VG" label="British Virgin Islands">British Virgin Islands</option>
																			<option value="CA" label="Canada">Canada</option>
																			<option value="KY" label="Cayman Islands">Cayman Islands</option>
																			<option value="CL" label="Chile">Chile</option>
																			<option value="CO" label="Colombia">Colombia</option>
																			<option value="CR" label="Costa Rica">Costa Rica</option>
																			<option value="CU" label="Cuba">Cuba</option>
																			<option value="DM" label="Dominica">Dominica</option>
																			<option value="DO" label="Dominican Republic">Dominican Republic</option>
																			<option value="EC" label="Ecuador">Ecuador</option>
																			<option value="SV" label="El Salvador">El Salvador</option>
																			<option value="FK" label="Falkland Islands">Falkland Islands</option>
																			<option value="GF" label="French Guiana">French Guiana</option>
																			<option value="GL" label="Greenland">Greenland</option>
																			<option value="GD" label="Grenada">Grenada</option>
																			<option value="GP" label="Guadeloupe">Guadeloupe</option>
																			<option value="GT" label="Guatemala">Guatemala</option>
																			<option value="GY" label="Guyana">Guyana</option>
																			<option value="HT" label="Haiti">Haiti</option>
																			<option value="HN" label="Honduras">Honduras</option>
																			<option value="JM" label="Jamaica">Jamaica</option>
																			<option value="MQ" label="Martinique">Martinique</option>
																			<option value="MX" label="Mexico">Mexico</option>
																			<option value="MS" label="Montserrat">Montserrat</option>
																			<option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
																			<option value="NI" label="Nicaragua">Nicaragua</option>
																			<option value="PA" label="Panama">Panama</option>
																			<option value="PY" label="Paraguay">Paraguay</option>
																			<option value="PE" label="Peru">Peru</option>
																			<option value="PR" label="Puerto Rico">Puerto Rico</option>
																			<option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
																			<option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																			<option value="LC" label="Saint Lucia">Saint Lucia</option>
																			<option value="MF" label="Saint Martin">Saint Martin</option>
																			<option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
																			<option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
																			<option value="SR" label="Suriname">Suriname</option>
																			<option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
																			<option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
																			<option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
																			<option value="US" label="United States">United States</option>
																			<option value="UY" label="Uruguay">Uruguay</option>
																			<option value="VE" label="Venezuela">Venezuela</option>
																		</optgroup>
																		<optgroup id="country-optgroup-Asia" label="Asia">
																			<option value="AF" label="Afghanistan">Afghanistan</option>
																			<option value="AM" label="Armenia">Armenia</option>
																			<option value="AZ" label="Azerbaijan">Azerbaijan</option>
																			<option value="BH" label="Bahrain">Bahrain</option>
																			<option value="BD" label="Bangladesh">Bangladesh</option>
																			<option value="BT" label="Bhutan">Bhutan</option>
																			<option value="BN" label="Brunei">Brunei</option>
																			<option value="KH" label="Cambodia">Cambodia</option>
																			<option value="CN" label="China">China</option>
																			<option value="GE" label="Georgia">Georgia</option>
																			<option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
																			<option value="IN" label="India">India</option>
																			<option value="ID" label="Indonesia">Indonesia</option>
																			<option value="IR" label="Iran">Iran</option>
																			<option value="IQ" label="Iraq">Iraq</option>
																			<option value="IL" label="Israel">Israel</option>
																			<option value="JP" label="Japan">Japan</option>
																			<option value="JO" label="Jordan">Jordan</option>
																			<option value="KZ" label="Kazakhstan">Kazakhstan</option>
																			<option value="KW" label="Kuwait">Kuwait</option>
																			<option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
																			<option value="LA" label="Laos">Laos</option>
																			<option value="LB" label="Lebanon">Lebanon</option>
																			<option value="MO" label="Macau SAR China">Macau SAR China</option>
																			<option value="MY" label="Malaysia" selected="selected">Malaysia </option>
																			<option value="MV" label="Maldives">Maldives</option>
																			<option value="MN" label="Mongolia">Mongolia</option>
																			<option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
																			<option value="NP" label="Nepal">Nepal</option>
																			<option value="NT" label="Neutral Zone">Neutral Zone</option>
																			<option value="KP" label="North Korea">North Korea</option>
																			<option value="OM" label="Oman">Oman</option>
																			<option value="PK" label="Pakistan">Pakistan</option>
																			<option value="PS" label="Palestinian Territories">Palestinian Territories</option>
																			<option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
																			<option value="PH" label="Philippines">Philippines</option>
																			<option value="QA" label="Qatar">Qatar</option>
																			<option value="SA" label="Saudi Arabia">Saudi Arabia</option>
																			<option value="SG" label="Singapore">Singapore</option>
																			<option value="KR" label="South Korea">South Korea</option>
																			<option value="LK" label="Sri Lanka">Sri Lanka</option>
																			<option value="SY" label="Syria">Syria</option>
																			<option value="TW" label="Taiwan">Taiwan</option>
																			<option value="TJ" label="Tajikistan">Tajikistan</option>
																			<option value="TH" label="Thailand">Thailand</option>
																			<option value="TL" label="Timor-Leste">Timor-Leste</option>
																			<option value="TR" label="Turkey">Turkey</option>
																			<option value="TM" label="Turkmenistan">Turkmenistan</option>
																			<option value="AE" label="United Arab Emirates">United Arab Emirates</option>
																			<option value="UZ" label="Uzbekistan">Uzbekistan</option>
																			<option value="VN" label="Vietnam">Vietnam</option>
																			<option value="YE" label="Yemen">Yemen</option>													
																		</select>											
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="contact-number" class="form-label">Contact Number</label>
																		<input type="text" id="contact-number" class="form-control" aria-describedby="contact-number">
																	</div>
																	<div class="col-sm-6">
																		<div class="row">
																			<div class="col-sm-6">
																				<label for="dob" class="form-label">Date of Birth</label>
																				<input type="date" id="dob" class="form-control" aria-describedby="dob">
																			</div>
																			<div class="col-sm-6">
																				<label for="age" class="form-label">Age</label>
																				<input type="text" id="age" class="form-control" aria-describedby="age">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="dom" class="form-label">Date of Marriage</label>
																		<input type="date" id="dom" class="form-control" aria-describedby="dom">
																	</div>
																	<div class="col-sm-6">
																		<div class="row">
																			<div class="col-sm-6">
																				<label for="marriage-cert" class="form-label">Marriage Certificate</label>
																				<input type="file" id="marriage-cert" class="form-control" aria-describedby="dob">
																			</div>
																			<div class="col-sm-6">
																				<label for="marriage-status" class="form-label">Marriage Status</label>
																				<select class="form-select">
																					<option value="0" label="Please Choose " selected="selected"></option>
																					<option value="single" label="Single">Single</option>
																					<option value="married" label="married">married</option>
																					<option value="windowed" label="windowed">windowed</option>
																					<option value="divorced" label="divorced">divorced</option>
																					<option value="seperated" label="seperated">seperated</option>														
																				</select>											
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="address1" class="form-label">Address 1*</label>
																		<input type="text" id="address1" class="form-control" aria-describedby="address1">
																	</div>
																	<div class="col-sm-6">
																		<label for="address2" class="form-label">Address 2</label>
																		<input type="text" id="address2" class="form-control" aria-describedby="address2">
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="firstname" class="form-label">City*</label>
																		<input type="text" id="firstname" class="form-control" aria-describedby="firstname">
																	</div>
																	<div class="col-sm-6">
																		<label for="lastname" class="form-label">Postcode*</label>
																		<input type="text" id="lastname" class="form-control" aria-describedby="lastname">
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="state" class="form-label">State*</label>
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
																	<div class="col-sm-6">
																		<label for="country" class="form-label">Country</label>
																		<select class="form-select">
																		<option value="0" label="Select a country ... " >Select a country ... </option>
																			<optgroup id="country-optgroup-Africa" label="Africa">
																			<option value="DZ" label="Algeria">Algeria</option>
																			<option value="AO" label="Angola">Angola</option>
																			<option value="BJ" label="Benin">Benin</option>
																			<option value="BW" label="Botswana">Botswana</option>
																			<option value="BF" label="Burkina Faso">Burkina Faso</option>
																			<option value="BI" label="Burundi">Burundi</option>
																			<option value="CM" label="Cameroon">Cameroon</option>
																			<option value="CV" label="Cape Verde">Cape Verde</option>
																			<option value="CF" label="Central African Republic">Central African Republic</option>
																			<option value="TD" label="Chad">Chad</option>
																			<option value="KM" label="Comoros">Comoros</option>
																			<option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
																			<option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
																			<option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
																			<option value="DJ" label="Djibouti">Djibouti</option>
																			<option value="EG" label="Egypt">Egypt</option>
																			<option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
																			<option value="ER" label="Eritrea">Eritrea</option>
																			<option value="ET" label="Ethiopia">Ethiopia</option>
																			<option value="GA" label="Gabon">Gabon</option>
																			<option value="GM" label="Gambia">Gambia</option>
																			<option value="GH" label="Ghana">Ghana</option>
																			<option value="GN" label="Guinea">Guinea</option>
																			<option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
																			<option value="KE" label="Kenya">Kenya</option>
																			<option value="LS" label="Lesotho">Lesotho</option>
																			<option value="LR" label="Liberia">Liberia</option>
																			<option value="LY" label="Libya">Libya</option>
																			<option value="MG" label="Madagascar">Madagascar</option>
																			<option value="MW" label="Malawi">Malawi</option>
																			<option value="ML" label="Mali">Mali</option>
																			<option value="MR" label="Mauritania">Mauritania</option>
																			<option value="MU" label="Mauritius">Mauritius</option>
																			<option value="YT" label="Mayotte">Mayotte</option>
																			<option value="MA" label="Morocco">Morocco</option>
																			<option value="MZ" label="Mozambique">Mozambique</option>
																			<option value="NA" label="Namibia">Namibia</option>
																			<option value="NE" label="Niger">Niger</option>
																			<option value="NG" label="Nigeria">Nigeria</option>
																			<option value="RW" label="Rwanda">Rwanda</option>
																			<option value="RE" label="Réunion">Réunion</option>
																			<option value="SH" label="Saint Helena">Saint Helena</option>
																			<option value="SN" label="Senegal">Senegal</option>
																			<option value="SC" label="Seychelles">Seychelles</option>
																			<option value="SL" label="Sierra Leone">Sierra Leone</option>
																			<option value="SO" label="Somalia">Somalia</option>
																			<option value="ZA" label="South Africa">South Africa</option>
																			<option value="SD" label="Sudan">Sudan</option>
																			<option value="SZ" label="Swaziland">Swaziland</option>
																			<option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
																			<option value="TZ" label="Tanzania">Tanzania</option>
																			<option value="TG" label="Togo">Togo</option>
																			<option value="TN" label="Tunisia">Tunisia</option>
																			<option value="UG" label="Uganda">Uganda</option>
																			<option value="EH" label="Western Sahara">Western Sahara</option>
																			<option value="ZM" label="Zambia">Zambia</option>
																			<option value="ZW" label="Zimbabwe">Zimbabwe</option>
																		</optgroup>
																		<optgroup id="country-optgroup-Americas" label="Americas">
																			<option value="AI" label="Anguilla">Anguilla</option>
																			<option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
																			<option value="AR" label="Argentina">Argentina</option>
																			<option value="AW" label="Aruba">Aruba</option>
																			<option value="BS" label="Bahamas">Bahamas</option>
																			<option value="BB" label="Barbados">Barbados</option>
																			<option value="BZ" label="Belize">Belize</option>
																			<option value="BM" label="Bermuda">Bermuda</option>
																			<option value="BO" label="Bolivia">Bolivia</option>
																			<option value="BR" label="Brazil">Brazil</option>
																			<option value="VG" label="British Virgin Islands">British Virgin Islands</option>
																			<option value="CA" label="Canada">Canada</option>
																			<option value="KY" label="Cayman Islands">Cayman Islands</option>
																			<option value="CL" label="Chile">Chile</option>
																			<option value="CO" label="Colombia">Colombia</option>
																			<option value="CR" label="Costa Rica">Costa Rica</option>
																			<option value="CU" label="Cuba">Cuba</option>
																			<option value="DM" label="Dominica">Dominica</option>
																			<option value="DO" label="Dominican Republic">Dominican Republic</option>
																			<option value="EC" label="Ecuador">Ecuador</option>
																			<option value="SV" label="El Salvador">El Salvador</option>
																			<option value="FK" label="Falkland Islands">Falkland Islands</option>
																			<option value="GF" label="French Guiana">French Guiana</option>
																			<option value="GL" label="Greenland">Greenland</option>
																			<option value="GD" label="Grenada">Grenada</option>
																			<option value="GP" label="Guadeloupe">Guadeloupe</option>
																			<option value="GT" label="Guatemala">Guatemala</option>
																			<option value="GY" label="Guyana">Guyana</option>
																			<option value="HT" label="Haiti">Haiti</option>
																			<option value="HN" label="Honduras">Honduras</option>
																			<option value="JM" label="Jamaica">Jamaica</option>
																			<option value="MQ" label="Martinique">Martinique</option>
																			<option value="MX" label="Mexico">Mexico</option>
																			<option value="MS" label="Montserrat">Montserrat</option>
																			<option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
																			<option value="NI" label="Nicaragua">Nicaragua</option>
																			<option value="PA" label="Panama">Panama</option>
																			<option value="PY" label="Paraguay">Paraguay</option>
																			<option value="PE" label="Peru">Peru</option>
																			<option value="PR" label="Puerto Rico">Puerto Rico</option>
																			<option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
																			<option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																			<option value="LC" label="Saint Lucia">Saint Lucia</option>
																			<option value="MF" label="Saint Martin">Saint Martin</option>
																			<option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
																			<option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
																			<option value="SR" label="Suriname">Suriname</option>
																			<option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
																			<option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
																			<option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
																			<option value="US" label="United States">United States</option>
																			<option value="UY" label="Uruguay">Uruguay</option>
																			<option value="VE" label="Venezuela">Venezuela</option>
																		</optgroup>
																		<optgroup id="country-optgroup-Asia" label="Asia">
																			<option value="AF" label="Afghanistan">Afghanistan</option>
																			<option value="AM" label="Armenia">Armenia</option>
																			<option value="AZ" label="Azerbaijan">Azerbaijan</option>
																			<option value="BH" label="Bahrain">Bahrain</option>
																			<option value="BD" label="Bangladesh">Bangladesh</option>
																			<option value="BT" label="Bhutan">Bhutan</option>
																			<option value="BN" label="Brunei">Brunei</option>
																			<option value="KH" label="Cambodia">Cambodia</option>
																			<option value="CN" label="China">China</option>
																			<option value="GE" label="Georgia">Georgia</option>
																			<option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
																			<option value="IN" label="India">India</option>
																			<option value="ID" label="Indonesia">Indonesia</option>
																			<option value="IR" label="Iran">Iran</option>
																			<option value="IQ" label="Iraq">Iraq</option>
																			<option value="IL" label="Israel">Israel</option>
																			<option value="JP" label="Japan">Japan</option>
																			<option value="JO" label="Jordan">Jordan</option>
																			<option value="KZ" label="Kazakhstan">Kazakhstan</option>
																			<option value="KW" label="Kuwait">Kuwait</option>
																			<option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
																			<option value="LA" label="Laos">Laos</option>
																			<option value="LB" label="Lebanon">Lebanon</option>
																			<option value="MO" label="Macau SAR China">Macau SAR China</option>
																			<option value="MY" label="Malaysia" selected="selected">Malaysia </option>
																			<option value="MV" label="Maldives">Maldives</option>
																			<option value="MN" label="Mongolia">Mongolia</option>
																			<option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
																			<option value="NP" label="Nepal">Nepal</option>
																			<option value="NT" label="Neutral Zone">Neutral Zone</option>
																			<option value="KP" label="North Korea">North Korea</option>
																			<option value="OM" label="Oman">Oman</option>
																			<option value="PK" label="Pakistan">Pakistan</option>
																			<option value="PS" label="Palestinian Territories">Palestinian Territories</option>
																			<option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
																			<option value="PH" label="Philippines">Philippines</option>
																			<option value="QA" label="Qatar">Qatar</option>
																			<option value="SA" label="Saudi Arabia">Saudi Arabia</option>
																			<option value="SG" label="Singapore">Singapore</option>
																			<option value="KR" label="South Korea">South Korea</option>
																			<option value="LK" label="Sri Lanka">Sri Lanka</option>
																			<option value="SY" label="Syria">Syria</option>
																			<option value="TW" label="Taiwan">Taiwan</option>
																			<option value="TJ" label="Tajikistan">Tajikistan</option>
																			<option value="TH" label="Thailand">Thailand</option>
																			<option value="TL" label="Timor-Leste">Timor-Leste</option>
																			<option value="TR" label="Turkey">Turkey</option>
																			<option value="TM" label="Turkmenistan">Turkmenistan</option>
																			<option value="AE" label="United Arab Emirates">United Arab Emirates</option>
																			<option value="UZ" label="Uzbekistan">Uzbekistan</option>
																			<option value="VN" label="Vietnam">Vietnam</option>
																			<option value="YE" label="Yemen">Yemen</option>													
																		</select>											
																	</div>
																</div>
																<hr class="mt-5">
																<div class="row p-2">
																	<div class="col-sm-6">
																		<h4>Companion Employment Details</h4>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-check form-switch align-right">
																			<input class="form-check-input" type="checkbox" role="switch" id="set-main" checked>
																			<label class="form-check-label" for="set-main">Working ?</label>
																		  </div>
																	</div>	
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="company-name" class="form-label">Company Name</label>
																		<input type="text" id="phone-number" class="form-control" aria-describedby="company-name">
																	</div>
																	<div class="col-sm-6">
																		<label for="date-joined-company" class="form-label">Date Joined Company</label>
																		<input type="date" id="date-joined-company" class="form-control" aria-describedby="date-joined-company">
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="income-tax-number" class="form-label">Income Tax Number*</label>
																		<input type="text" id="income-tax-number" class="form-control" aria-describedby="income-tax-number">
																	</div>
																	<div class="col-sm-6">
																		<label for="extension-number" class="form-label">Payslip</label>
																		<input type="file" id="extension-number" class="form-control" aria-describedby="extension-number">
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="income-tax-number" class="form-label">Office Number</label>
																		<input type="text" id="income-tax-number" class="form-control" aria-describedby="income-tax-number">
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="address1" class="form-label">Address 1*</label>
																		<input type="text" id="address1" class="form-control" aria-describedby="address1">
																	</div>
																	<div class="col-sm-6">
																		<label for="address2" class="form-label">Address 2</label>
																		<input type="text" id="address2" class="form-control" aria-describedby="address2">
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="firstname" class="form-label">City*</label>
																		<input type="text" id="firstname" class="form-control" aria-describedby="firstname">
																	</div>
																	<div class="col-sm-6">
																		<label for="lastname" class="form-label">Postcode*</label>
																		<input type="text" id="lastname" class="form-control" aria-describedby="lastname">
																	</div>
																</div>
																<div class="row p-2">
																	<div class="col-sm-6">
																		<label for="state" class="form-label">State*</label>
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
																	<div class="col-sm-6">
																		<label for="country" class="form-label">Country</label>
																		<select class="form-select">
																		<option value="0" label="Select a country ... " >Select a country ... </option>
																			<optgroup id="country-optgroup-Africa" label="Africa">
																			<option value="DZ" label="Algeria">Algeria</option>
																			<option value="AO" label="Angola">Angola</option>
																			<option value="BJ" label="Benin">Benin</option>
																			<option value="BW" label="Botswana">Botswana</option>
																			<option value="BF" label="Burkina Faso">Burkina Faso</option>
																			<option value="BI" label="Burundi">Burundi</option>
																			<option value="CM" label="Cameroon">Cameroon</option>
																			<option value="CV" label="Cape Verde">Cape Verde</option>
																			<option value="CF" label="Central African Republic">Central African Republic</option>
																			<option value="TD" label="Chad">Chad</option>
																			<option value="KM" label="Comoros">Comoros</option>
																			<option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
																			<option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
																			<option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
																			<option value="DJ" label="Djibouti">Djibouti</option>
																			<option value="EG" label="Egypt">Egypt</option>
																			<option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
																			<option value="ER" label="Eritrea">Eritrea</option>
																			<option value="ET" label="Ethiopia">Ethiopia</option>
																			<option value="GA" label="Gabon">Gabon</option>
																			<option value="GM" label="Gambia">Gambia</option>
																			<option value="GH" label="Ghana">Ghana</option>
																			<option value="GN" label="Guinea">Guinea</option>
																			<option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
																			<option value="KE" label="Kenya">Kenya</option>
																			<option value="LS" label="Lesotho">Lesotho</option>
																			<option value="LR" label="Liberia">Liberia</option>
																			<option value="LY" label="Libya">Libya</option>
																			<option value="MG" label="Madagascar">Madagascar</option>
																			<option value="MW" label="Malawi">Malawi</option>
																			<option value="ML" label="Mali">Mali</option>
																			<option value="MR" label="Mauritania">Mauritania</option>
																			<option value="MU" label="Mauritius">Mauritius</option>
																			<option value="YT" label="Mayotte">Mayotte</option>
																			<option value="MA" label="Morocco">Morocco</option>
																			<option value="MZ" label="Mozambique">Mozambique</option>
																			<option value="NA" label="Namibia">Namibia</option>
																			<option value="NE" label="Niger">Niger</option>
																			<option value="NG" label="Nigeria">Nigeria</option>
																			<option value="RW" label="Rwanda">Rwanda</option>
																			<option value="RE" label="Réunion">Réunion</option>
																			<option value="SH" label="Saint Helena">Saint Helena</option>
																			<option value="SN" label="Senegal">Senegal</option>
																			<option value="SC" label="Seychelles">Seychelles</option>
																			<option value="SL" label="Sierra Leone">Sierra Leone</option>
																			<option value="SO" label="Somalia">Somalia</option>
																			<option value="ZA" label="South Africa">South Africa</option>
																			<option value="SD" label="Sudan">Sudan</option>
																			<option value="SZ" label="Swaziland">Swaziland</option>
																			<option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
																			<option value="TZ" label="Tanzania">Tanzania</option>
																			<option value="TG" label="Togo">Togo</option>
																			<option value="TN" label="Tunisia">Tunisia</option>
																			<option value="UG" label="Uganda">Uganda</option>
																			<option value="EH" label="Western Sahara">Western Sahara</option>
																			<option value="ZM" label="Zambia">Zambia</option>
																			<option value="ZW" label="Zimbabwe">Zimbabwe</option>
																		</optgroup>
																		<optgroup id="country-optgroup-Americas" label="Americas">
																			<option value="AI" label="Anguilla">Anguilla</option>
																			<option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
																			<option value="AR" label="Argentina">Argentina</option>
																			<option value="AW" label="Aruba">Aruba</option>
																			<option value="BS" label="Bahamas">Bahamas</option>
																			<option value="BB" label="Barbados">Barbados</option>
																			<option value="BZ" label="Belize">Belize</option>
																			<option value="BM" label="Bermuda">Bermuda</option>
																			<option value="BO" label="Bolivia">Bolivia</option>
																			<option value="BR" label="Brazil">Brazil</option>
																			<option value="VG" label="British Virgin Islands">British Virgin Islands</option>
																			<option value="CA" label="Canada">Canada</option>
																			<option value="KY" label="Cayman Islands">Cayman Islands</option>
																			<option value="CL" label="Chile">Chile</option>
																			<option value="CO" label="Colombia">Colombia</option>
																			<option value="CR" label="Costa Rica">Costa Rica</option>
																			<option value="CU" label="Cuba">Cuba</option>
																			<option value="DM" label="Dominica">Dominica</option>
																			<option value="DO" label="Dominican Republic">Dominican Republic</option>
																			<option value="EC" label="Ecuador">Ecuador</option>
																			<option value="SV" label="El Salvador">El Salvador</option>
																			<option value="FK" label="Falkland Islands">Falkland Islands</option>
																			<option value="GF" label="French Guiana">French Guiana</option>
																			<option value="GL" label="Greenland">Greenland</option>
																			<option value="GD" label="Grenada">Grenada</option>
																			<option value="GP" label="Guadeloupe">Guadeloupe</option>
																			<option value="GT" label="Guatemala">Guatemala</option>
																			<option value="GY" label="Guyana">Guyana</option>
																			<option value="HT" label="Haiti">Haiti</option>
																			<option value="HN" label="Honduras">Honduras</option>
																			<option value="JM" label="Jamaica">Jamaica</option>
																			<option value="MQ" label="Martinique">Martinique</option>
																			<option value="MX" label="Mexico">Mexico</option>
																			<option value="MS" label="Montserrat">Montserrat</option>
																			<option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
																			<option value="NI" label="Nicaragua">Nicaragua</option>
																			<option value="PA" label="Panama">Panama</option>
																			<option value="PY" label="Paraguay">Paraguay</option>
																			<option value="PE" label="Peru">Peru</option>
																			<option value="PR" label="Puerto Rico">Puerto Rico</option>
																			<option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
																			<option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																			<option value="LC" label="Saint Lucia">Saint Lucia</option>
																			<option value="MF" label="Saint Martin">Saint Martin</option>
																			<option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
																			<option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
																			<option value="SR" label="Suriname">Suriname</option>
																			<option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
																			<option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
																			<option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
																			<option value="US" label="United States">United States</option>
																			<option value="UY" label="Uruguay">Uruguay</option>
																			<option value="VE" label="Venezuela">Venezuela</option>
																		</optgroup>
																		<optgroup id="country-optgroup-Asia" label="Asia">
																			<option value="AF" label="Afghanistan">Afghanistan</option>
																			<option value="AM" label="Armenia">Armenia</option>
																			<option value="AZ" label="Azerbaijan">Azerbaijan</option>
																			<option value="BH" label="Bahrain">Bahrain</option>
																			<option value="BD" label="Bangladesh">Bangladesh</option>
																			<option value="BT" label="Bhutan">Bhutan</option>
																			<option value="BN" label="Brunei">Brunei</option>
																			<option value="KH" label="Cambodia">Cambodia</option>
																			<option value="CN" label="China">China</option>
																			<option value="GE" label="Georgia">Georgia</option>
																			<option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
																			<option value="IN" label="India">India</option>
																			<option value="ID" label="Indonesia">Indonesia</option>
																			<option value="IR" label="Iran">Iran</option>
																			<option value="IQ" label="Iraq">Iraq</option>
																			<option value="IL" label="Israel">Israel</option>
																			<option value="JP" label="Japan">Japan</option>
																			<option value="JO" label="Jordan">Jordan</option>
																			<option value="KZ" label="Kazakhstan">Kazakhstan</option>
																			<option value="KW" label="Kuwait">Kuwait</option>
																			<option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
																			<option value="LA" label="Laos">Laos</option>
																			<option value="LB" label="Lebanon">Lebanon</option>
																			<option value="MO" label="Macau SAR China">Macau SAR China</option>
																			<option value="MY" label="Malaysia" selected="selected">Malaysia </option>
																			<option value="MV" label="Maldives">Maldives</option>
																			<option value="MN" label="Mongolia">Mongolia</option>
																			<option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
																			<option value="NP" label="Nepal">Nepal</option>
																			<option value="NT" label="Neutral Zone">Neutral Zone</option>
																			<option value="KP" label="North Korea">North Korea</option>
																			<option value="OM" label="Oman">Oman</option>
																			<option value="PK" label="Pakistan">Pakistan</option>
																			<option value="PS" label="Palestinian Territories">Palestinian Territories</option>
																			<option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
																			<option value="PH" label="Philippines">Philippines</option>
																			<option value="QA" label="Qatar">Qatar</option>
																			<option value="SA" label="Saudi Arabia">Saudi Arabia</option>
																			<option value="SG" label="Singapore">Singapore</option>
																			<option value="KR" label="South Korea">South Korea</option>
																			<option value="LK" label="Sri Lanka">Sri Lanka</option>
																			<option value="SY" label="Syria">Syria</option>
																			<option value="TW" label="Taiwan">Taiwan</option>
																			<option value="TJ" label="Tajikistan">Tajikistan</option>
																			<option value="TH" label="Thailand">Thailand</option>
																			<option value="TL" label="Timor-Leste">Timor-Leste</option>
																			<option value="TR" label="Turkey">Turkey</option>
																			<option value="TM" label="Turkmenistan">Turkmenistan</option>
																			<option value="AE" label="United Arab Emirates">United Arab Emirates</option>
																			<option value="UZ" label="Uzbekistan">Uzbekistan</option>
																			<option value="VN" label="Vietnam">Vietnam</option>
																			<option value="YE" label="Yemen">Yemen</option>													
																		</select>											
																	</div>
																</div>
															</form>
														</div>
													  </div>
													</div>
												</div>
												<p class="text-end mb-0 mt-3">
													<a href="javascript:;" class="btn btn-primary">Save</a>
												</p>
											</form>
										</div>
						
										
										<div class="tab-pane fade" id="default-tab-5">
											<button type="button"  data-bs-toggle="modal" data-bs-target="#add-children"  class="btn btn-white mt-3 mb-3"><i class="fa fa-plus"></i> New children</button>
											<table id="data-table-child" style="width: 100%" class="table table-striped align-middle">
												<thead>
														<th width="1%"></th>
														<th width="1%" data-orderable="false">Action</th>
														<th class="text-nowrap">Name</th>
														<th class="text-nowrap">ID/Passport Number</th>
														<th class="text-nowrap">Age</th>
														<th class="text-nowrap">Education</th>
														<th class="text-nowrap">Institution</th>
														<th class="text-nowrap">Marital Status</th>						
												</thead>
												<tbody>
													<tr>
														<td width="1%" class="fw-bold text-dark">1</td>
														<td>
															<a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
															<div class="dropdown-menu">
																<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#update-children" class="dropdown-item">Edit</a>
																<div class="dropdown-divider"></div>
																<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#view-children" class="dropdown-item">View</a>
																<div class="dropdown-divider"></div>
																<a href="javascript:;" class="dropdown-item">Delete</a>
															</div>
														</td>
														
														<td>Aqil</td>
														<td>9298201203</td>
														<td>12</td>
														<td>UPSR</td>
														<td>60123456789</td>
														<td>Married</td>
													</tr>											
												</tbody>
											</table>	
										</div>
										
										<div class="tab-pane fade" id="default-tab-6">
												<div class="container">
													<h4 class="mt-3 mb-3">Parents information</h4>
													<button type="button"  data-bs-toggle="modal" data-bs-target="#add-parent"  class="btn btn-white mt-3 mb-3"><i class="fa fa-plus"></i> New Parent</button>
													<table id="data-table-parent" style="width: 100%" class="table table-striped align-middle">
														<thead>
																<th width="1%"></th>
																<th width="1%" data-orderable="false">Action</th>
																<th class="text-nowrap">First Name</th>
																<th class="text-nowrap">Last Name</th>
																<th class="text-nowrap">Address</th>
																<th class="text-nowrap">Relationship</th>
																<th class="text-nowrap">Date of Birth</th>
																<th class="text-nowrap">Contact Number</th>						
														</thead>
														<tbody>
															<tr>
																<td width="1%" class="fw-bold text-dark">1</td>
																<td>
																	<a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
																		<div class="dropdown-menu">
																			<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#update-parent" class="dropdown-item">Edit</a>
																			<div class="dropdown-divider"></div>
																			<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#view-parent" class="dropdown-item">View</a>
																			<div class="dropdown-divider"></div>
																			<a href="javascript:;" class="dropdown-item">Delete</a>
																		</div>
																</td>
																
																<td>Aqil</td>
																<td>Anwar</td>
																<td>Shah Alam</td>
																<td>Father</td>
																<td>12 September 1991</td>
																<td>0193929392</td>
															</tr>											
														</tbody>
													</table>	
												</div>
												<div class="container">
													<h4 class="mt-3 mb-3">Siblings Information</h4>
													<button type="button"  data-bs-toggle="modal" data-bs-target="#add-sibling"  class="btn btn-white mt-3 mb-3"><i class="fa fa-plus"></i> New Sibling</button>
													<table id="data-table-sibling" style="width: 100%" class="table table-striped align-middle">
														<thead>
																<th width="1%"></th>
																<th width="1%" data-orderable="false">Action</th>
																<th class="text-nowrap">First Name</th>
																<th class="text-nowrap">Last Name</th>
																<th class="text-nowrap">Address</th>
																<th class="text-nowrap">Relationship</th>
																<th class="text-nowrap">Date of Birth</th>
																<th class="text-nowrap">Contact Number</th>						
														</thead>
														<tbody>
															<tr>
																<td width="1%" class="fw-bold text-dark">1</td>
																<td>
																	<a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
																	<div class="dropdown-menu">
																		<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#update-sibling" class="dropdown-item">Edit</a>
																		<div class="dropdown-divider"></div>
																		<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#view-sibling" class="dropdown-item">View</a>
																		<div class="dropdown-divider"></div>
																		<a href="javascript:;" class="dropdown-item">Delete</a>
																	</div>
																</td>
																
																<td>Aqil</td>
																<td>Anwar</td>
																<td>Shah Alam</td>
																<td>Father</td>
																<td>12 September 1991</td>
																<td>0193929392</td>
															</tr>											
														</tbody>
													</table>					
												</div>
										</div>
										<!-- END tab-pane -->
									
										<!-- Modal Add Children -->
										<div class="modal fade" id="add-children" tabindex="-1" aria-labelledby="add-children" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
													<h5 class="modal-title" id="add-children">Add Children Details</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<form>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="firstname" class="form-label">First Name*</label>
																	<input type="text" id="firstname" class="form-control" aria-describedby="firstname">
																</div>
																<div class="col-sm-6">
																	<label for="lastname" class="form-label">Last Name*</label>
																	<input type="text" id="lastname" class="form-control" aria-describedby="lastname">
																</div>
															</div>
															<div class="row p-2">
																<div class="col">
																	<label for="fullname" class="form-label">Full Name</label>
																	<input type="text" id="fullname" class="form-control" aria-describedby="fullname">
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<div class="row">
																		<div class="col-sm-6 ">
																			<div class="form-check form-switch align-right">
																				<input class="form-check-input" type="checkbox" id="citizen">
																				<label class="form-check-label" for="citizen">
																					  Non-Citizen
																				</label>
																			</div>
																		</div>
																		<div class="col-sm-6">
																			<label for="lastname" class="form-label">Identification Number*</label>
																			<input type="text" value="0108393019299" id="lastname" class="form-control" aria-describedby="lastname">
																		</div>
																	</div>
																</div>
																<div class="col-sm-6">
																	<div class="row">
																		<div class="col-sm-6">
																			<label for="dob" class="form-label">Date of Birth</label>
																			<input type="date" id="dob3" class="form-control" aria-describedby="dob">
																		</div>
																		<div class="col-sm-6">
																			<label for="age" class="form-label">Age</label>
																			<input type="text" id="age" class="form-control" aria-describedby="age">
																		</div>
																	</div>										
																</div>													
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<div class="row">
																		<div class="col-sm-6">
																			<label for="passport" class="form-label">Passport Number</label>
																			<input type="text" id="passport" class="form-control" aria-describedby="passport">
																		</div>
																		<div class="col-sm-6">
																			<label for="expirydate" class="form-label">Expiry Date</label>
																			<input type="date" id="ed3" class="form-control" aria-describedby="expirydate">
																		</div>
																	</div>
																</div>
																<div class="col-sm-6">
																	<label for="issuing-country" class="form-label">Issuing Country</label>
																	<select class="form-select">
																	<option value="0" label="Select a country ... " >Select a country ... </option>
																			<optgroup id="country-optgroup-Africa" label="Africa">
																			<option value="DZ" label="Algeria">Algeria</option>
																			<option value="AO" label="Angola">Angola</option>
																			<option value="BJ" label="Benin">Benin</option>
																			<option value="BW" label="Botswana">Botswana</option>
																			<option value="BF" label="Burkina Faso">Burkina Faso</option>
																			<option value="BI" label="Burundi">Burundi</option>
																			<option value="CM" label="Cameroon">Cameroon</option>
																			<option value="CV" label="Cape Verde">Cape Verde</option>
																			<option value="CF" label="Central African Republic">Central African Republic</option>
																			<option value="TD" label="Chad">Chad</option>
																			<option value="KM" label="Comoros">Comoros</option>
																			<option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
																			<option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
																			<option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
																			<option value="DJ" label="Djibouti">Djibouti</option>
																			<option value="EG" label="Egypt">Egypt</option>
																			<option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
																			<option value="ER" label="Eritrea">Eritrea</option>
																			<option value="ET" label="Ethiopia">Ethiopia</option>
																			<option value="GA" label="Gabon">Gabon</option>
																			<option value="GM" label="Gambia">Gambia</option>
																			<option value="GH" label="Ghana">Ghana</option>
																			<option value="GN" label="Guinea">Guinea</option>
																			<option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
																			<option value="KE" label="Kenya">Kenya</option>
																			<option value="LS" label="Lesotho">Lesotho</option>
																			<option value="LR" label="Liberia">Liberia</option>
																			<option value="LY" label="Libya">Libya</option>
																			<option value="MG" label="Madagascar">Madagascar</option>
																			<option value="MW" label="Malawi">Malawi</option>
																			<option value="ML" label="Mali">Mali</option>
																			<option value="MR" label="Mauritania">Mauritania</option>
																			<option value="MU" label="Mauritius">Mauritius</option>
																			<option value="YT" label="Mayotte">Mayotte</option>
																			<option value="MA" label="Morocco">Morocco</option>
																			<option value="MZ" label="Mozambique">Mozambique</option>
																			<option value="NA" label="Namibia">Namibia</option>
																			<option value="NE" label="Niger">Niger</option>
																			<option value="NG" label="Nigeria">Nigeria</option>
																			<option value="RW" label="Rwanda">Rwanda</option>
																			<option value="RE" label="Réunion">Réunion</option>
																			<option value="SH" label="Saint Helena">Saint Helena</option>
																			<option value="SN" label="Senegal">Senegal</option>
																			<option value="SC" label="Seychelles">Seychelles</option>
																			<option value="SL" label="Sierra Leone">Sierra Leone</option>
																			<option value="SO" label="Somalia">Somalia</option>
																			<option value="ZA" label="South Africa">South Africa</option>
																			<option value="SD" label="Sudan">Sudan</option>
																			<option value="SZ" label="Swaziland">Swaziland</option>
																			<option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
																			<option value="TZ" label="Tanzania">Tanzania</option>
																			<option value="TG" label="Togo">Togo</option>
																			<option value="TN" label="Tunisia">Tunisia</option>
																			<option value="UG" label="Uganda">Uganda</option>
																			<option value="EH" label="Western Sahara">Western Sahara</option>
																			<option value="ZM" label="Zambia">Zambia</option>
																			<option value="ZW" label="Zimbabwe">Zimbabwe</option>
																		</optgroup>
																		<optgroup id="country-optgroup-Americas" label="Americas">
																			<option value="AI" label="Anguilla">Anguilla</option>
																			<option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
																			<option value="AR" label="Argentina">Argentina</option>
																			<option value="AW" label="Aruba">Aruba</option>
																			<option value="BS" label="Bahamas">Bahamas</option>
																			<option value="BB" label="Barbados">Barbados</option>
																			<option value="BZ" label="Belize">Belize</option>
																			<option value="BM" label="Bermuda">Bermuda</option>
																			<option value="BO" label="Bolivia">Bolivia</option>
																			<option value="BR" label="Brazil">Brazil</option>
																			<option value="VG" label="British Virgin Islands">British Virgin Islands</option>
																			<option value="CA" label="Canada">Canada</option>
																			<option value="KY" label="Cayman Islands">Cayman Islands</option>
																			<option value="CL" label="Chile">Chile</option>
																			<option value="CO" label="Colombia">Colombia</option>
																			<option value="CR" label="Costa Rica">Costa Rica</option>
																			<option value="CU" label="Cuba">Cuba</option>
																			<option value="DM" label="Dominica">Dominica</option>
																			<option value="DO" label="Dominican Republic">Dominican Republic</option>
																			<option value="EC" label="Ecuador">Ecuador</option>
																			<option value="SV" label="El Salvador">El Salvador</option>
																			<option value="FK" label="Falkland Islands">Falkland Islands</option>
																			<option value="GF" label="French Guiana">French Guiana</option>
																			<option value="GL" label="Greenland">Greenland</option>
																			<option value="GD" label="Grenada">Grenada</option>
																			<option value="GP" label="Guadeloupe">Guadeloupe</option>
																			<option value="GT" label="Guatemala">Guatemala</option>
																			<option value="GY" label="Guyana">Guyana</option>
																			<option value="HT" label="Haiti">Haiti</option>
																			<option value="HN" label="Honduras">Honduras</option>
																			<option value="JM" label="Jamaica">Jamaica</option>
																			<option value="MQ" label="Martinique">Martinique</option>
																			<option value="MX" label="Mexico">Mexico</option>
																			<option value="MS" label="Montserrat">Montserrat</option>
																			<option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
																			<option value="NI" label="Nicaragua">Nicaragua</option>
																			<option value="PA" label="Panama">Panama</option>
																			<option value="PY" label="Paraguay">Paraguay</option>
																			<option value="PE" label="Peru">Peru</option>
																			<option value="PR" label="Puerto Rico">Puerto Rico</option>
																			<option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
																			<option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																			<option value="LC" label="Saint Lucia">Saint Lucia</option>
																			<option value="MF" label="Saint Martin">Saint Martin</option>
																			<option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
																			<option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
																			<option value="SR" label="Suriname">Suriname</option>
																			<option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
																			<option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
																			<option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
																			<option value="US" label="United States">United States</option>
																			<option value="UY" label="Uruguay">Uruguay</option>
																			<option value="VE" label="Venezuela">Venezuela</option>
																		</optgroup>
																		<optgroup id="country-optgroup-Asia" label="Asia">
																			<option value="AF" label="Afghanistan">Afghanistan</option>
																			<option value="AM" label="Armenia">Armenia</option>
																			<option value="AZ" label="Azerbaijan">Azerbaijan</option>
																			<option value="BH" label="Bahrain">Bahrain</option>
																			<option value="BD" label="Bangladesh">Bangladesh</option>
																			<option value="BT" label="Bhutan">Bhutan</option>
																			<option value="BN" label="Brunei">Brunei</option>
																			<option value="KH" label="Cambodia">Cambodia</option>
																			<option value="CN" label="China">China</option>
																			<option value="GE" label="Georgia">Georgia</option>
																			<option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
																			<option value="IN" label="India">India</option>
																			<option value="ID" label="Indonesia">Indonesia</option>
																			<option value="IR" label="Iran">Iran</option>
																			<option value="IQ" label="Iraq">Iraq</option>
																			<option value="IL" label="Israel">Israel</option>
																			<option value="JP" label="Japan">Japan</option>
																			<option value="JO" label="Jordan">Jordan</option>
																			<option value="KZ" label="Kazakhstan">Kazakhstan</option>
																			<option value="KW" label="Kuwait">Kuwait</option>
																			<option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
																			<option value="LA" label="Laos">Laos</option>
																			<option value="LB" label="Lebanon">Lebanon</option>
																			<option value="MO" label="Macau SAR China">Macau SAR China</option>
																			<option value="MY" label="Malaysia" selected="selected">Malaysia </option>
																			<option value="MV" label="Maldives">Maldives</option>
																			<option value="MN" label="Mongolia">Mongolia</option>
																			<option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
																			<option value="NP" label="Nepal">Nepal</option>
																			<option value="NT" label="Neutral Zone">Neutral Zone</option>
																			<option value="KP" label="North Korea">North Korea</option>
																			<option value="OM" label="Oman">Oman</option>
																			<option value="PK" label="Pakistan">Pakistan</option>
																			<option value="PS" label="Palestinian Territories">Palestinian Territories</option>
																			<option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
																			<option value="PH" label="Philippines">Philippines</option>
																			<option value="QA" label="Qatar">Qatar</option>
																			<option value="SA" label="Saudi Arabia">Saudi Arabia</option>
																			<option value="SG" label="Singapore">Singapore</option>
																			<option value="KR" label="South Korea">South Korea</option>
																			<option value="LK" label="Sri Lanka">Sri Lanka</option>
																			<option value="SY" label="Syria">Syria</option>
																			<option value="TW" label="Taiwan">Taiwan</option>
																			<option value="TJ" label="Tajikistan">Tajikistan</option>
																			<option value="TH" label="Thailand">Thailand</option>
																			<option value="TL" label="Timor-Leste">Timor-Leste</option>
																			<option value="TR" label="Turkey">Turkey</option>
																			<option value="TM" label="Turkmenistan">Turkmenistan</option>
																			<option value="AE" label="United Arab Emirates">United Arab Emirates</option>
																			<option value="UZ" label="Uzbekistan">Uzbekistan</option>
																			<option value="VN" label="Vietnam">Vietnam</option>
																			<option value="YE" label="Yemen">Yemen</option>													
																	</select>											
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="gender" class="form-label">Gender</label>
																	<select class="form-select">
																	<option value="0" label="Please Choose " selected="selected"></option>
																			<option value="Male" label="Male">Male</option>
																			<option value="Female" label="Female">Female</option>
																			<option value="Prefer" label="Prefer not to say">Prefer not to say</option>												
																	</select>				
																</div>
																<div class="col-sm-6">
																	<label for="issuing-country" class="form-label">Marital Status</label>
																	<select class="form-select">
																	<option value="0" label="Select Marital Status " selected="selected">Select Marital Status </option>
																		<option value="single" label="Single">Single</option>
																		<option value="married" label="married">married</option>
																		<option value="windowed" label="windowed">windowed</option>
																		<option value="divorced" label="divorced">divorced</option>
																		<option value="seperated" label="seperated">seperated</option>													
																	</select>											
																</div>
															</div>
															<h4 class="mt-3 p-2">Education Information</h4>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="education-type" class="form-label">Education Type*</label>
																	<select class="form-select">
																		<option value="0" label="Please Choose " selected="selected"></option>
																		<option value="1" label="Primary School">Primary School</option>
																		<option value="2" label="Lower Secondary School">Lower Secondary School</option>
																		<option value="3" label="Upper Secondary School">Upper Secondary School</option>
																		<option value="4" label="Pre-University">Pre-University</option>
																		<option value="5" label="Matriculation / Foundation">Matriculation / Foundation</option>	
																		<option value="6" label="Higher Education">Higher Education</option>												
																	</select>													
																</div>
																<div class="col-sm-6">
																	<label for="education-level" class="form-label">Education Level*</label>
																	<select class="form-select">
																		<option value="0" label="Please Choose " selected="selected"></option>	
																		<option value="1" label="Primary School (Year 1 - 6)">Primary School (Year 1 - 6)</option>
																		<option value="2" label="Lower Secondary School (Form 1-3)">Lower Secondary School (Form 1-3)</option>
																		<option value="3" label="Upper Secondary School (Form 4 & 5)">Upper Secondary School (Form 4 & 5)</option>
																		<option value="4" label=" Pre-University (STPM / STAM)"> Pre-University (STPM / STAM)</option>
																		<option value="5" label="Matriculation / Foundation">Matriculation / Foundation</option>	
																		<option value="6" label="Diploma/ Bachelor Degree /Master Degree/ Doctorate Degree">Diploma/ Bachelor Degree /Master Degree/ Doctorate Degree</option>												
																	</select>
																</div>
															</div>
															<div class="row p-2">
																<div class="col">
																	<label for="institution-name" class="form-label">Institution Name</label>
																	<input type="text" id="institution-name" class="form-control" aria-describedby="institution-name">
																</div>
															</div>
															<h4 class="mt-3 p-2">File upload</h4>
															<div class="row p-2">
																<div class="col">
																	<input type="file" class="form-control">
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
										<!-- Modal Add Children -->
										<div class="modal fade" id="update-children" tabindex="-1" aria-labelledby="update-children" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
													<h5 class="modal-title" id="update-children">Update Children Details</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<form>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="firstname" class="form-label">First Name*</label>
																	<input type="text" id="firstname" class="form-control" aria-describedby="firstname">
																</div>
																<div class="col-sm-6">
																	<label for="lastname" class="form-label">Last Name*</label>
																	<input type="text" id="lastname" class="form-control" aria-describedby="lastname">
																</div>
															</div>
															<div class="row p-2">
																<div class="col">
																	<label for="fullname" class="form-label">Full Name</label>
																	<input type="text" id="fullname" class="form-control" aria-describedby="fullname">
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<div class="row">
																		<div class="col-sm-6 ">
																			<div class="form-check form-switch align-right">
																				<input class="form-check-input" type="checkbox" id="citizen">
																				<label class="form-check-label" for="citizen">
																					  Non-Citizen
																				</label>
																			</div>
																		</div>
																		<div class="col-sm-6">
																			<label for="lastname" class="form-label">Identification Number*</label>
																			<input type="text" value="0108393019299" id="lastname" class="form-control" aria-describedby="lastname">
																		</div>
																	</div>
																</div>
																<div class="col-sm-6">
																	<div class="row">
																		<div class="col-sm-6">
																			<label for="dob" class="form-label">Date of Birth</label>
																			<input type="date" id="dob4" class="form-control" aria-describedby="dob">
																		</div>
																		<div class="col-sm-6">
																			<label for="age" class="form-label">Age</label>
																			<input type="text" id="age" class="form-control" aria-describedby="age">
																		</div>
																	</div>										
																</div>													
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<div class="row">
																		<div class="col-sm-6">
																			<label for="passport" class="form-label">Passport Number</label>
																			<input type="text" id="passport" class="form-control" aria-describedby="passport">
																		</div>
																		<div class="col-sm-6">
																			<label for="expirydate" class="form-label">Expiry Date</label>
																			<input type="date" id="ed4" class="form-control" aria-describedby="expirydate">
																		</div>
																	</div>
																</div>
																<div class="col-sm-6">
																	<label for="issuing-country" class="form-label">Issuing Country</label>
																	<select class="form-select">
																	<option value="0" label="Select a country ... " >Select a country ... </option>
																		<optgroup id="country-optgroup-Africa" label="Africa">
																		<option value="DZ" label="Algeria">Algeria</option>
																		<option value="AO" label="Angola">Angola</option>
																		<option value="BJ" label="Benin">Benin</option>
																		<option value="BW" label="Botswana">Botswana</option>
																		<option value="BF" label="Burkina Faso">Burkina Faso</option>
																		<option value="BI" label="Burundi">Burundi</option>
																		<option value="CM" label="Cameroon">Cameroon</option>
																		<option value="CV" label="Cape Verde">Cape Verde</option>
																		<option value="CF" label="Central African Republic">Central African Republic</option>
																		<option value="TD" label="Chad">Chad</option>
																		<option value="KM" label="Comoros">Comoros</option>
																		<option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
																		<option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
																		<option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
																		<option value="DJ" label="Djibouti">Djibouti</option>
																		<option value="EG" label="Egypt">Egypt</option>
																		<option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
																		<option value="ER" label="Eritrea">Eritrea</option>
																		<option value="ET" label="Ethiopia">Ethiopia</option>
																		<option value="GA" label="Gabon">Gabon</option>
																		<option value="GM" label="Gambia">Gambia</option>
																		<option value="GH" label="Ghana">Ghana</option>
																		<option value="GN" label="Guinea">Guinea</option>
																		<option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
																		<option value="KE" label="Kenya">Kenya</option>
																		<option value="LS" label="Lesotho">Lesotho</option>
																		<option value="LR" label="Liberia">Liberia</option>
																		<option value="LY" label="Libya">Libya</option>
																		<option value="MG" label="Madagascar">Madagascar</option>
																		<option value="MW" label="Malawi">Malawi</option>
																		<option value="ML" label="Mali">Mali</option>
																		<option value="MR" label="Mauritania">Mauritania</option>
																		<option value="MU" label="Mauritius">Mauritius</option>
																		<option value="YT" label="Mayotte">Mayotte</option>
																		<option value="MA" label="Morocco">Morocco</option>
																		<option value="MZ" label="Mozambique">Mozambique</option>
																		<option value="NA" label="Namibia">Namibia</option>
																		<option value="NE" label="Niger">Niger</option>
																		<option value="NG" label="Nigeria">Nigeria</option>
																		<option value="RW" label="Rwanda">Rwanda</option>
																		<option value="RE" label="Réunion">Réunion</option>
																		<option value="SH" label="Saint Helena">Saint Helena</option>
																		<option value="SN" label="Senegal">Senegal</option>
																		<option value="SC" label="Seychelles">Seychelles</option>
																		<option value="SL" label="Sierra Leone">Sierra Leone</option>
																		<option value="SO" label="Somalia">Somalia</option>
																		<option value="ZA" label="South Africa">South Africa</option>
																		<option value="SD" label="Sudan">Sudan</option>
																		<option value="SZ" label="Swaziland">Swaziland</option>
																		<option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
																		<option value="TZ" label="Tanzania">Tanzania</option>
																		<option value="TG" label="Togo">Togo</option>
																		<option value="TN" label="Tunisia">Tunisia</option>
																		<option value="UG" label="Uganda">Uganda</option>
																		<option value="EH" label="Western Sahara">Western Sahara</option>
																		<option value="ZM" label="Zambia">Zambia</option>
																		<option value="ZW" label="Zimbabwe">Zimbabwe</option>
																	</optgroup>
																	<optgroup id="country-optgroup-Americas" label="Americas">
																		<option value="AI" label="Anguilla">Anguilla</option>
																		<option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
																		<option value="AR" label="Argentina">Argentina</option>
																		<option value="AW" label="Aruba">Aruba</option>
																		<option value="BS" label="Bahamas">Bahamas</option>
																		<option value="BB" label="Barbados">Barbados</option>
																		<option value="BZ" label="Belize">Belize</option>
																		<option value="BM" label="Bermuda">Bermuda</option>
																		<option value="BO" label="Bolivia">Bolivia</option>
																		<option value="BR" label="Brazil">Brazil</option>
																		<option value="VG" label="British Virgin Islands">British Virgin Islands</option>
																		<option value="CA" label="Canada">Canada</option>
																		<option value="KY" label="Cayman Islands">Cayman Islands</option>
																		<option value="CL" label="Chile">Chile</option>
																		<option value="CO" label="Colombia">Colombia</option>
																		<option value="CR" label="Costa Rica">Costa Rica</option>
																		<option value="CU" label="Cuba">Cuba</option>
																		<option value="DM" label="Dominica">Dominica</option>
																		<option value="DO" label="Dominican Republic">Dominican Republic</option>
																		<option value="EC" label="Ecuador">Ecuador</option>
																		<option value="SV" label="El Salvador">El Salvador</option>
																		<option value="FK" label="Falkland Islands">Falkland Islands</option>
																		<option value="GF" label="French Guiana">French Guiana</option>
																		<option value="GL" label="Greenland">Greenland</option>
																		<option value="GD" label="Grenada">Grenada</option>
																		<option value="GP" label="Guadeloupe">Guadeloupe</option>
																		<option value="GT" label="Guatemala">Guatemala</option>
																		<option value="GY" label="Guyana">Guyana</option>
																		<option value="HT" label="Haiti">Haiti</option>
																		<option value="HN" label="Honduras">Honduras</option>
																		<option value="JM" label="Jamaica">Jamaica</option>
																		<option value="MQ" label="Martinique">Martinique</option>
																		<option value="MX" label="Mexico">Mexico</option>
																		<option value="MS" label="Montserrat">Montserrat</option>
																		<option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
																		<option value="NI" label="Nicaragua">Nicaragua</option>
																		<option value="PA" label="Panama">Panama</option>
																		<option value="PY" label="Paraguay">Paraguay</option>
																		<option value="PE" label="Peru">Peru</option>
																		<option value="PR" label="Puerto Rico">Puerto Rico</option>
																		<option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
																		<option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																		<option value="LC" label="Saint Lucia">Saint Lucia</option>
																		<option value="MF" label="Saint Martin">Saint Martin</option>
																		<option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
																		<option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
																		<option value="SR" label="Suriname">Suriname</option>
																		<option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
																		<option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
																		<option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
																		<option value="US" label="United States">United States</option>
																		<option value="UY" label="Uruguay">Uruguay</option>
																		<option value="VE" label="Venezuela">Venezuela</option>
																	</optgroup>
																	<optgroup id="country-optgroup-Asia" label="Asia">
																		<option value="AF" label="Afghanistan">Afghanistan</option>
																		<option value="AM" label="Armenia">Armenia</option>
																		<option value="AZ" label="Azerbaijan">Azerbaijan</option>
																		<option value="BH" label="Bahrain">Bahrain</option>
																		<option value="BD" label="Bangladesh">Bangladesh</option>
																		<option value="BT" label="Bhutan">Bhutan</option>
																		<option value="BN" label="Brunei">Brunei</option>
																		<option value="KH" label="Cambodia">Cambodia</option>
																		<option value="CN" label="China">China</option>
																		<option value="GE" label="Georgia">Georgia</option>
																		<option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
																		<option value="IN" label="India">India</option>
																		<option value="ID" label="Indonesia">Indonesia</option>
																		<option value="IR" label="Iran">Iran</option>
																		<option value="IQ" label="Iraq">Iraq</option>
																		<option value="IL" label="Israel">Israel</option>
																		<option value="JP" label="Japan">Japan</option>
																		<option value="JO" label="Jordan">Jordan</option>
																		<option value="KZ" label="Kazakhstan">Kazakhstan</option>
																		<option value="KW" label="Kuwait">Kuwait</option>
																		<option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
																		<option value="LA" label="Laos">Laos</option>
																		<option value="LB" label="Lebanon">Lebanon</option>
																		<option value="MO" label="Macau SAR China">Macau SAR China</option>
																		<option value="MY" label="Malaysia" selected="selected">Malaysia</option>
																		<option value="MV" label="Maldives">Maldives</option>
																		<option value="MN" label="Mongolia">Mongolia</option>
																		<option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
																		<option value="NP" label="Nepal">Nepal</option>
																		<option value="NT" label="Neutral Zone">Neutral Zone</option>
																		<option value="KP" label="North Korea">North Korea</option>
																		<option value="OM" label="Oman">Oman</option>
																		<option value="PK" label="Pakistan">Pakistan</option>
																		<option value="PS" label="Palestinian Territories">Palestinian Territories</option>
																		<option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
																		<option value="PH" label="Philippines">Philippines</option>
																		<option value="QA" label="Qatar">Qatar</option>
																		<option value="SA" label="Saudi Arabia">Saudi Arabia</option>
																		<option value="SG" label="Singapore">Singapore</option>
																		<option value="KR" label="South Korea">South Korea</option>
																		<option value="LK" label="Sri Lanka">Sri Lanka</option>
																		<option value="SY" label="Syria">Syria</option>
																		<option value="TW" label="Taiwan">Taiwan</option>
																		<option value="TJ" label="Tajikistan">Tajikistan</option>
																		<option value="TH" label="Thailand">Thailand</option>
																		<option value="TL" label="Timor-Leste">Timor-Leste</option>
																		<option value="TR" label="Turkey">Turkey</option>
																		<option value="TM" label="Turkmenistan">Turkmenistan</option>
																		<option value="AE" label="United Arab Emirates">United Arab Emirates</option>
																		<option value="UZ" label="Uzbekistan">Uzbekistan</option>
																		<option value="VN" label="Vietnam">Vietnam</option>
																		<option value="YE" label="Yemen">Yemen</option>													
																	</select>											
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="gender" class="form-label">Gender</label>
																	<select class="form-select">
																	<option value="0" label="Please Choose " selected="selected"></option>
																	<option value="Male" label="Male">Male</option>
																	<option value="Female" label="Female">Female</option>
																	<option value="Prefer" label="Prefer not to say">Prefer not to say</option>													
																	</select>				
																</div>
																<div class="col-sm-6">
																	<label for="issuing-country" class="form-label">Marital Status</label>
																	<select class="form-select">
																	<option value="0" label="Select Marital Status " selected="selected">Select Marital Status </option>
																	<option value="single" label="Single">Single</option>
																	<option value="married" label="married">married</option>
																	<option value="windowed" label="windowed">windowed</option>
																	<option value="divorced" label="divorced">divorced</option>
																	<option value="seperated" label="seperated">seperated</option>													
																	</select>											
																</div>
															</div>
															<h4 class="mt-3 p-2">Education Information</h4>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="education-type" class="form-label">Education Type*</label>
																	<select class="form-select">
																		<option value="0" label="Please Choose " selected="selected"></option>
																		<option value="1" label="Primary School">Primary School</option>
																		<option value="2" label="Lower Secondary School">Lower Secondary School</option>
																		<option value="3" label="Upper Secondary School">Upper Secondary School</option>
																		<option value="4" label="Pre-University">Pre-University</option>
																		<option value="5" label="Matriculation / Foundation">Matriculation / Foundation</option>	
																		<option value="6" label="Higher Education">Higher Education</option>													
																	</select>													</div>
																<div class="col-sm-6">
																	<label for="education-level" class="form-label">Education Level*</label>
																	<select class="form-select">
																		<option value="0" label="Please Choose " selected="selected"></option>	
																		<option value="1" label="Primary School (Year 1 - 6)">Primary School (Year 1 - 6)</option>
																		<option value="2" label="Lower Secondary School (Form 1-3)">Lower Secondary School (Form 1-3)</option>
																		<option value="3" label="Upper Secondary School (Form 4 & 5)">Upper Secondary School (Form 4 & 5)</option>
																		<option value="4" label=" Pre-University (STPM / STAM)"> Pre-University (STPM / STAM)</option>
																		<option value="5" label="Matriculation / Foundation">Matriculation / Foundation</option>	
																		<option value="6" label="Diploma/ Bachelor Degree /Master Degree/ Doctorate Degree">Diploma/ Bachelor Degree /Master Degree/ Doctorate Degree</option>												
																														
																	</select>
																</div>
															</div>
															<div class="row p-2">
																<div class="col">
																	<label for="institution-name" class="form-label">Institution Name</label>
																	<input type="text" id="institution-name" class="form-control" aria-describedby="institution-name">
																</div>
															</div>
															<h4 class="mt-3 p-2">File upload</h4>
															<div class="row p-2">
																<div class="col">
																	<input type="file" class="form-control">
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
										<!-- view -->
										<div class="modal fade" id="view-children" tabindex="-1" aria-labelledby="view-children" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
													<h5 class="modal-title" id="view-children">View Children Details</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<form>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="firstname" class="form-label">First Name*</label>
																	<input type="text" id="firstname" readonly class="form-control" aria-describedby="firstname">
																</div>
																<div class="col-sm-6">
																	<label for="lastname" class="form-label">Last Name*</label>
																	<input type="text" id="lastname" readonly class="form-control" aria-describedby="lastname">
																</div>
															</div>
															<div class="row p-2">
																<div class="col">
																	<label for="fullname" class="form-label">Full Name</label>
																	<input type="text" id="fullname" readonly class="form-control" aria-describedby="fullname">
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<div class="row">
																		<div class="col-sm-6 ">
																			<div class="form-check form-switch align-right">
																				<input class="form-check-input" type="checkbox" id="citizen" disabled >
																				<label class="form-check-label" for="citizen">
																					  Non-Citizen
																				</label>
																			</div>
																		</div>
																		<div class="col-sm-6">
																			<label for="lastname" class="form-label">Identification Number*</label>
																			<input type="text" value="0108393019299" id="lastname" readonly class="form-control" aria-describedby="lastname">
																		</div>
																	</div>
																</div>
																<div class="col-sm-6">
																	<div class="row">
																		<div class="col-sm-6">
																			<label for="dob" class="form-label">Date of Birth</label>
																			<input type="date" id="dob" readonly class="form-control" aria-describedby="dob">
																		</div>
																		<div class="col-sm-6">
																			<label for="age" class="form-label">Age</label>
																			<input type="text" id="age" readonly class="form-control" aria-describedby="age">
																		</div>
																	</div>										
																</div>													
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<div class="row">
																		<div class="col-sm-6">
																			<label for="passport" class="form-label">Passport Number</label>
																			<input type="text" id="passport" readonly class="form-control" aria-describedby="passport">
																		</div>
																		<div class="col-sm-6">
																			<label for="expirydate" class="form-label">Expiry Date</label>
																			<input type="date" id="expirydate" readonly class="form-control" aria-describedby="expirydate">
																		</div>
																	</div>
																</div>
																<div class="col-sm-6">
																	<label for="issuing-country" class="form-label">Issuing Country</label>
																	<select class="form-select" aria-label="Disabled select example" disabled>
																		<option value="0" label="Please Choose " selected="selected"></option>													
																	</select>											
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="gender" class="form-label">Gender</label>
																	<select class="form-select" aria-label="Disabled select example" disabled>
																		<option value="0" label="Please Choose "></option>	
																		<option value="0" label="Male" selected="selected"></option>
																		<option value="0" label="Female"></option>														
																	</select>				
																</div>
																<div class="col-sm-6">
																	<label for="issuing-country" class="form-label">Marital Status</label>
																	<select class="form-select" aria-label="Disabled select example" disabled>
																		<option value="0" label="Please Choose " selected="selected"></option>													
																	</select>											
																</div>
															</div>
															<h4 class="mt-3 p-2">Education Information</h4>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="education-type" class="form-label">Education Type*</label>
																	<select class="form-select" aria-label="Disabled select example" disabled>
																		<option value="0" label="Please Choose " selected="selected"></option>													
																	</select>													</div>
																<div class="col-sm-6">
																	<label for="education-level" class="form-label">Education Level*</label>
																	<select class="form-select" aria-label="Disabled select example" disabled>
																		<option value="0" label="Please Choose " selected="selected"></option>													
																	</select>
																</div>
															</div>
															<div class="row p-2">
																<div class="col">
																	<label for="institution-name" class="form-label">Institution Name</label>
																	<input type="text" readonly class="form-control" id="institution-name" class="form-control" aria-describedby="institution-name">
																</div>
															</div>
															<h4 class="mt-3 p-2">File upload</h4>
															<div class="row p-2">
																<div class="col">
																	<input type="file"  class="form-control">
																</div>
															</div>
														</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
														
													</div>
												</div>
											</div>
										</div>
									</div>
									
										<!-- Modal Add Parent -->
										<div class="modal fade" id="add-parent" tabindex="-1" aria-labelledby="add-parent" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
													<h5 class="modal-title" id="add-parent">Add Parent Details</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<form>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="firstname" class="form-label">First Name*</label>
																	<input type="text" id="firstname" class="form-control" aria-describedby="firstname">
																</div>
																<div class="col-sm-6">
																	<label for="lastname" class="form-label">Last Name*</label>
																	<input type="text" id="lastname" class="form-control" aria-describedby="lastname">
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="dob" class="form-label">Date of Birth*</label>
																	<input type="date" id="dob5" class="form-control" aria-describedby="dob">
																</div>
																<div class="col-sm-6">
																	<label for="age" class="form-label">Gender*</label>
																	<select class="form-select">
																		<option value="0" label="Please Choose " selected="selected"></option>
																		<option value="Male" label="Male">Male</option>
																		<option value="Female" label="Female">Female</option>
																		<option value="Prefer" label="Prefer not to say">Prefer not to say</option>													
																	</select>																	
																</div>												
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="passport" class="form-label">Contact Number</label>
																	<input type="text" id="passport" class="form-control" aria-describedby="passport">
																</div>
																<div class="col-sm-6">
																	<label for="expirydate" class="form-label">Relationship</label>
																	<select class="form-select">
																		<option value="0" label="Please Choose " selected="selected"></option>
																		<option value="Brother" label="Brother">Brother</option>
																		<option value="Sister" label="Sister">Sister</option>													
																	</select>	
																</div>
															</div>
															<h4 class="mt-3 p-2">myprofile Address</h4>
															<div class="row p-2">
																<div class="col-sm-6">														
																	<div class="form-check form-switch align-right">	
																		<input class="form-check-input" type="checkbox" id="same-address">
																		<label class="form-check-label" for="same-address">
																			  Same as permenant address
																		</label>
																	</div>
																</div>															
															</div>
															<div class="row p-2">		
																<div class="col-sm-6">
																	<label for="address-1" class="form-label">Address 1*</label>
																	<input type="text" id="address-1" class="form-control" aria-describedby="address-1">
																</div>
																<div class="col-sm-6">
																	<label for="address-2" class="form-label">Address 2</label>
																	<input type="text" id="address-2" class="form-control" aria-describedby="address-2">
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="postcode" class="form-label">Postcode*</label>
																	<input type="text" id="postcode" class="form-control" aria-describedby="postcode">
																</div>
																<div class="col-sm-6">
																	<label for="city" class="form-label">City*</label>
																	<input type="text" id="City" class="form-control" aria-describedby="City">													
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="state" class="form-label">State*</label>
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
																<div class="col-sm-6">
																	<label for="country" class="form-label">Country</label>
																	<select class="form-select">
																	<option value="0" label="Select a country ... " >Select a country ... </option>
																	<optgroup id="country-optgroup-Africa" label="Africa">
																	<option value="DZ" label="Algeria">Algeria</option>
																	<option value="AO" label="Angola">Angola</option>
																	<option value="BJ" label="Benin">Benin</option>
																	<option value="BW" label="Botswana">Botswana</option>
																	<option value="BF" label="Burkina Faso">Burkina Faso</option>
																	<option value="BI" label="Burundi">Burundi</option>
																	<option value="CM" label="Cameroon">Cameroon</option>
																	<option value="CV" label="Cape Verde">Cape Verde</option>
																	<option value="CF" label="Central African Republic">Central African Republic</option>
																	<option value="TD" label="Chad">Chad</option>
																	<option value="KM" label="Comoros">Comoros</option>
																	<option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
																	<option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
																	<option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
																	<option value="DJ" label="Djibouti">Djibouti</option>
																	<option value="EG" label="Egypt">Egypt</option>
																	<option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
																	<option value="ER" label="Eritrea">Eritrea</option>
																	<option value="ET" label="Ethiopia">Ethiopia</option>
																	<option value="GA" label="Gabon">Gabon</option>
																	<option value="GM" label="Gambia">Gambia</option>
																	<option value="GH" label="Ghana">Ghana</option>
																	<option value="GN" label="Guinea">Guinea</option>
																	<option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
																	<option value="KE" label="Kenya">Kenya</option>
																	<option value="LS" label="Lesotho">Lesotho</option>
																	<option value="LR" label="Liberia">Liberia</option>
																	<option value="LY" label="Libya">Libya</option>
																	<option value="MG" label="Madagascar">Madagascar</option>
																	<option value="MW" label="Malawi">Malawi</option>
																	<option value="ML" label="Mali">Mali</option>
																	<option value="MR" label="Mauritania">Mauritania</option>
																	<option value="MU" label="Mauritius">Mauritius</option>
																	<option value="YT" label="Mayotte">Mayotte</option>
																	<option value="MA" label="Morocco">Morocco</option>
																	<option value="MZ" label="Mozambique">Mozambique</option>
																	<option value="NA" label="Namibia">Namibia</option>
																	<option value="NE" label="Niger">Niger</option>
																	<option value="NG" label="Nigeria">Nigeria</option>
																	<option value="RW" label="Rwanda">Rwanda</option>
																	<option value="RE" label="Réunion">Réunion</option>
																	<option value="SH" label="Saint Helena">Saint Helena</option>
																	<option value="SN" label="Senegal">Senegal</option>
																	<option value="SC" label="Seychelles">Seychelles</option>
																	<option value="SL" label="Sierra Leone">Sierra Leone</option>
																	<option value="SO" label="Somalia">Somalia</option>
																	<option value="ZA" label="South Africa">South Africa</option>
																	<option value="SD" label="Sudan">Sudan</option>
																	<option value="SZ" label="Swaziland">Swaziland</option>
																	<option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
																	<option value="TZ" label="Tanzania">Tanzania</option>
																	<option value="TG" label="Togo">Togo</option>
																	<option value="TN" label="Tunisia">Tunisia</option>
																	<option value="UG" label="Uganda">Uganda</option>
																	<option value="EH" label="Western Sahara">Western Sahara</option>
																	<option value="ZM" label="Zambia">Zambia</option>
																	<option value="ZW" label="Zimbabwe">Zimbabwe</option>
																</optgroup>
																<optgroup id="country-optgroup-Americas" label="Americas">
																	<option value="AI" label="Anguilla">Anguilla</option>
																	<option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
																	<option value="AR" label="Argentina">Argentina</option>
																	<option value="AW" label="Aruba">Aruba</option>
																	<option value="BS" label="Bahamas">Bahamas</option>
																	<option value="BB" label="Barbados">Barbados</option>
																	<option value="BZ" label="Belize">Belize</option>
																	<option value="BM" label="Bermuda">Bermuda</option>
																	<option value="BO" label="Bolivia">Bolivia</option>
																	<option value="BR" label="Brazil">Brazil</option>
																	<option value="VG" label="British Virgin Islands">British Virgin Islands</option>
																	<option value="CA" label="Canada">Canada</option>
																	<option value="KY" label="Cayman Islands">Cayman Islands</option>
																	<option value="CL" label="Chile">Chile</option>
																	<option value="CO" label="Colombia">Colombia</option>
																	<option value="CR" label="Costa Rica">Costa Rica</option>
																	<option value="CU" label="Cuba">Cuba</option>
																	<option value="DM" label="Dominica">Dominica</option>
																	<option value="DO" label="Dominican Republic">Dominican Republic</option>
																	<option value="EC" label="Ecuador">Ecuador</option>
																	<option value="SV" label="El Salvador">El Salvador</option>
																	<option value="FK" label="Falkland Islands">Falkland Islands</option>
																	<option value="GF" label="French Guiana">French Guiana</option>
																	<option value="GL" label="Greenland">Greenland</option>
																	<option value="GD" label="Grenada">Grenada</option>
																	<option value="GP" label="Guadeloupe">Guadeloupe</option>
																	<option value="GT" label="Guatemala">Guatemala</option>
																	<option value="GY" label="Guyana">Guyana</option>
																	<option value="HT" label="Haiti">Haiti</option>
																	<option value="HN" label="Honduras">Honduras</option>
																	<option value="JM" label="Jamaica">Jamaica</option>
																	<option value="MQ" label="Martinique">Martinique</option>
																	<option value="MX" label="Mexico">Mexico</option>
																	<option value="MS" label="Montserrat">Montserrat</option>
																	<option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
																	<option value="NI" label="Nicaragua">Nicaragua</option>
																	<option value="PA" label="Panama">Panama</option>
																	<option value="PY" label="Paraguay">Paraguay</option>
																	<option value="PE" label="Peru">Peru</option>
																	<option value="PR" label="Puerto Rico">Puerto Rico</option>
																	<option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
																	<option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																	<option value="LC" label="Saint Lucia">Saint Lucia</option>
																	<option value="MF" label="Saint Martin">Saint Martin</option>
																	<option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
																	<option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
																	<option value="SR" label="Suriname">Suriname</option>
																	<option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
																	<option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
																	<option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
																	<option value="US" label="United States">United States</option>
																	<option value="UY" label="Uruguay">Uruguay</option>
																	<option value="VE" label="Venezuela">Venezuela</option>
																</optgroup>
																<optgroup id="country-optgroup-Asia" label="Asia">
																	<option value="AF" label="Afghanistan">Afghanistan</option>
																	<option value="AM" label="Armenia">Armenia</option>
																	<option value="AZ" label="Azerbaijan">Azerbaijan</option>
																	<option value="BH" label="Bahrain">Bahrain</option>
																	<option value="BD" label="Bangladesh">Bangladesh</option>
																	<option value="BT" label="Bhutan">Bhutan</option>
																	<option value="BN" label="Brunei">Brunei</option>
																	<option value="KH" label="Cambodia">Cambodia</option>
																	<option value="CN" label="China">China</option>
																	<option value="GE" label="Georgia">Georgia</option>
																	<option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
																	<option value="IN" label="India">India</option>
																	<option value="ID" label="Indonesia">Indonesia</option>
																	<option value="IR" label="Iran">Iran</option>
																	<option value="IQ" label="Iraq">Iraq</option>
																	<option value="IL" label="Israel">Israel</option>
																	<option value="JP" label="Japan">Japan</option>
																	<option value="JO" label="Jordan">Jordan</option>
																	<option value="KZ" label="Kazakhstan">Kazakhstan</option>
																	<option value="KW" label="Kuwait">Kuwait</option>
																	<option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
																	<option value="LA" label="Laos">Laos</option>
																	<option value="LB" label="Lebanon">Lebanon</option>
																	<option value="MO" label="Macau SAR China">Macau SAR China</option>
																	<option value="MY" label="Malaysia" selected="selected">Malaysia</option>
																	<option value="MV" label="Maldives">Maldives</option>
																	<option value="MN" label="Mongolia">Mongolia</option>
																	<option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
																	<option value="NP" label="Nepal">Nepal</option>
																	<option value="NT" label="Neutral Zone">Neutral Zone</option>
																	<option value="KP" label="North Korea">North Korea</option>
																	<option value="OM" label="Oman">Oman</option>
																	<option value="PK" label="Pakistan">Pakistan</option>
																	<option value="PS" label="Palestinian Territories">Palestinian Territories</option>
																	<option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
																	<option value="PH" label="Philippines">Philippines</option>
																	<option value="QA" label="Qatar">Qatar</option>
																	<option value="SA" label="Saudi Arabia">Saudi Arabia</option>
																	<option value="SG" label="Singapore">Singapore</option>
																	<option value="KR" label="South Korea">South Korea</option>
																	<option value="LK" label="Sri Lanka">Sri Lanka</option>
																	<option value="SY" label="Syria">Syria</option>
																	<option value="TW" label="Taiwan">Taiwan</option>
																	<option value="TJ" label="Tajikistan">Tajikistan</option>
																	<option value="TH" label="Thailand">Thailand</option>
																	<option value="TL" label="Timor-Leste">Timor-Leste</option>
																	<option value="TR" label="Turkey">Turkey</option>
																	<option value="TM" label="Turkmenistan">Turkmenistan</option>
																	<option value="AE" label="United Arab Emirates">United Arab Emirates</option>
																	<option value="UZ" label="Uzbekistan">Uzbekistan</option>
																	<option value="VN" label="Vietnam">Vietnam</option>
																	<option value="YE" label="Yemen">Yemen</option>													
																	</select>											
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

										<div class="modal fade" id="update-parent" tabindex="-1" aria-labelledby="update-parent" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
													<h5 class="modal-title" id="update-parent">Update Parent Details</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<form>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="firstname" class="form-label">First Name*</label>
																	<input type="text" id="firstname" class="form-control" aria-describedby="firstname">
																</div>
																<div class="col-sm-6">
																	<label for="lastname" class="form-label">Last Name*</label>
																	<input type="text" id="lastname" class="form-control" aria-describedby="lastname">
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="dob" class="form-label">Date of Birth*</label>
																	<input type="date" id="dob6" class="form-control" aria-describedby="dob">
																</div>
																<div class="col-sm-6">
																	<label for="age" class="form-label">Gender*</label>
																	<select class="form-select">
																		<option value="0" label="Please Choose " selected="selected"></option>
																		<option value="Male" label="Male">Male</option>
																		<option value="Female" label="Female">Female</option>
																		<option value="Prefer" label="Prefer not to say">Prefer not to say</option>														
																	</select>																	
																</div>												
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="passport" class="form-label">Contact Number</label>
																	<input type="text" id="passport" class="form-control" aria-describedby="passport">
																</div>
																<div class="col-sm-6">
																	<label for="expirydate" class="form-label">Relationship</label>
																	<select class="form-select">
																		<option value="0" label="Please Choose " selected="selected"></option>
																		<option value="Brother" label="Brother">Brother</option>
																		<option value="Sister" label="Sister">Sister</option>													
																	</select>	
																</div>
															</div>
															<h4 class="mt-3 p-2">Home Address</h4>
															<div class="row p-2">
																<div class="col-sm-6">														
																	<div class="form-check form-switch align-right">	
																		<input class="form-check-input" type="checkbox" id="same-address">
																		<label class="form-check-label" for="same-address">
																			  Same as permanent address
																		</label>
																	</div>
																</div>															
															</div>
															<div class="row p-2">		
																<div class="col-sm-6">
																	<label for="address-1" class="form-label">Address 1*</label>
																	<input type="text" id="address-1" class="form-control" aria-describedby="address-1">
																</div>
																<div class="col-sm-6">
																	<label for="address-2" class="form-label">Address 2</label>
																	<input type="text" id="address-2" class="form-control" aria-describedby="address-2">
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="postcode" class="form-label">Postcode*</label>
																	<input type="text" id="postcode" class="form-control" aria-describedby="postcode">
																</div>
																<div class="col-sm-6">
																	<label for="city" class="form-label">City*</label>
																	<input type="text" id="City" class="form-control" aria-describedby="City">													
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="state" class="form-label">State*</label>
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
																<div class="col-sm-6">
																	<label for="country" class="form-label">Country</label>
																	<select class="form-select">
																	<option value="0" label="Select a country ... " >Select a country ... </option>
																	<optgroup id="country-optgroup-Africa" label="Africa">
																	<option value="DZ" label="Algeria">Algeria</option>
																	<option value="AO" label="Angola">Angola</option>
																	<option value="BJ" label="Benin">Benin</option>
																	<option value="BW" label="Botswana">Botswana</option>
																	<option value="BF" label="Burkina Faso">Burkina Faso</option>
																	<option value="BI" label="Burundi">Burundi</option>
																	<option value="CM" label="Cameroon">Cameroon</option>
																	<option value="CV" label="Cape Verde">Cape Verde</option>
																	<option value="CF" label="Central African Republic">Central African Republic</option>
																	<option value="TD" label="Chad">Chad</option>
																	<option value="KM" label="Comoros">Comoros</option>
																	<option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
																	<option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
																	<option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
																	<option value="DJ" label="Djibouti">Djibouti</option>
																	<option value="EG" label="Egypt">Egypt</option>
																	<option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
																	<option value="ER" label="Eritrea">Eritrea</option>
																	<option value="ET" label="Ethiopia">Ethiopia</option>
																	<option value="GA" label="Gabon">Gabon</option>
																	<option value="GM" label="Gambia">Gambia</option>
																	<option value="GH" label="Ghana">Ghana</option>
																	<option value="GN" label="Guinea">Guinea</option>
																	<option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
																	<option value="KE" label="Kenya">Kenya</option>
																	<option value="LS" label="Lesotho">Lesotho</option>
																	<option value="LR" label="Liberia">Liberia</option>
																	<option value="LY" label="Libya">Libya</option>
																	<option value="MG" label="Madagascar">Madagascar</option>
																	<option value="MW" label="Malawi">Malawi</option>
																	<option value="ML" label="Mali">Mali</option>
																	<option value="MR" label="Mauritania">Mauritania</option>
																	<option value="MU" label="Mauritius">Mauritius</option>
																	<option value="YT" label="Mayotte">Mayotte</option>
																	<option value="MA" label="Morocco">Morocco</option>
																	<option value="MZ" label="Mozambique">Mozambique</option>
																	<option value="NA" label="Namibia">Namibia</option>
																	<option value="NE" label="Niger">Niger</option>
																	<option value="NG" label="Nigeria">Nigeria</option>
																	<option value="RW" label="Rwanda">Rwanda</option>
																	<option value="RE" label="Réunion">Réunion</option>
																	<option value="SH" label="Saint Helena">Saint Helena</option>
																	<option value="SN" label="Senegal">Senegal</option>
																	<option value="SC" label="Seychelles">Seychelles</option>
																	<option value="SL" label="Sierra Leone">Sierra Leone</option>
																	<option value="SO" label="Somalia">Somalia</option>
																	<option value="ZA" label="South Africa">South Africa</option>
																	<option value="SD" label="Sudan">Sudan</option>
																	<option value="SZ" label="Swaziland">Swaziland</option>
																	<option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
																	<option value="TZ" label="Tanzania">Tanzania</option>
																	<option value="TG" label="Togo">Togo</option>
																	<option value="TN" label="Tunisia">Tunisia</option>
																	<option value="UG" label="Uganda">Uganda</option>
																	<option value="EH" label="Western Sahara">Western Sahara</option>
																	<option value="ZM" label="Zambia">Zambia</option>
																	<option value="ZW" label="Zimbabwe">Zimbabwe</option>
																</optgroup>
																<optgroup id="country-optgroup-Americas" label="Americas">
																	<option value="AI" label="Anguilla">Anguilla</option>
																	<option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
																	<option value="AR" label="Argentina">Argentina</option>
																	<option value="AW" label="Aruba">Aruba</option>
																	<option value="BS" label="Bahamas">Bahamas</option>
																	<option value="BB" label="Barbados">Barbados</option>
																	<option value="BZ" label="Belize">Belize</option>
																	<option value="BM" label="Bermuda">Bermuda</option>
																	<option value="BO" label="Bolivia">Bolivia</option>
																	<option value="BR" label="Brazil">Brazil</option>
																	<option value="VG" label="British Virgin Islands">British Virgin Islands</option>
																	<option value="CA" label="Canada">Canada</option>
																	<option value="KY" label="Cayman Islands">Cayman Islands</option>
																	<option value="CL" label="Chile">Chile</option>
																	<option value="CO" label="Colombia">Colombia</option>
																	<option value="CR" label="Costa Rica">Costa Rica</option>
																	<option value="CU" label="Cuba">Cuba</option>
																	<option value="DM" label="Dominica">Dominica</option>
																	<option value="DO" label="Dominican Republic">Dominican Republic</option>
																	<option value="EC" label="Ecuador">Ecuador</option>
																	<option value="SV" label="El Salvador">El Salvador</option>
																	<option value="FK" label="Falkland Islands">Falkland Islands</option>
																	<option value="GF" label="French Guiana">French Guiana</option>
																	<option value="GL" label="Greenland">Greenland</option>
																	<option value="GD" label="Grenada">Grenada</option>
																	<option value="GP" label="Guadeloupe">Guadeloupe</option>
																	<option value="GT" label="Guatemala">Guatemala</option>
																	<option value="GY" label="Guyana">Guyana</option>
																	<option value="HT" label="Haiti">Haiti</option>
																	<option value="HN" label="Honduras">Honduras</option>
																	<option value="JM" label="Jamaica">Jamaica</option>
																	<option value="MQ" label="Martinique">Martinique</option>
																	<option value="MX" label="Mexico">Mexico</option>
																	<option value="MS" label="Montserrat">Montserrat</option>
																	<option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
																	<option value="NI" label="Nicaragua">Nicaragua</option>
																	<option value="PA" label="Panama">Panama</option>
																	<option value="PY" label="Paraguay">Paraguay</option>
																	<option value="PE" label="Peru">Peru</option>
																	<option value="PR" label="Puerto Rico">Puerto Rico</option>
																	<option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
																	<option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																	<option value="LC" label="Saint Lucia">Saint Lucia</option>
																	<option value="MF" label="Saint Martin">Saint Martin</option>
																	<option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
																	<option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
																	<option value="SR" label="Suriname">Suriname</option>
																	<option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
																	<option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
																	<option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
																	<option value="US" label="United States">United States</option>
																	<option value="UY" label="Uruguay">Uruguay</option>
																	<option value="VE" label="Venezuela">Venezuela</option>
																</optgroup>
																<optgroup id="country-optgroup-Asia" label="Asia">
																	<option value="AF" label="Afghanistan">Afghanistan</option>
																	<option value="AM" label="Armenia">Armenia</option>
																	<option value="AZ" label="Azerbaijan">Azerbaijan</option>
																	<option value="BH" label="Bahrain">Bahrain</option>
																	<option value="BD" label="Bangladesh">Bangladesh</option>
																	<option value="BT" label="Bhutan">Bhutan</option>
																	<option value="BN" label="Brunei">Brunei</option>
																	<option value="KH" label="Cambodia">Cambodia</option>
																	<option value="CN" label="China">China</option>
																	<option value="GE" label="Georgia">Georgia</option>
																	<option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
																	<option value="IN" label="India">India</option>
																	<option value="ID" label="Indonesia">Indonesia</option>
																	<option value="IR" label="Iran">Iran</option>
																	<option value="IQ" label="Iraq">Iraq</option>
																	<option value="IL" label="Israel">Israel</option>
																	<option value="JP" label="Japan">Japan</option>
																	<option value="JO" label="Jordan">Jordan</option>
																	<option value="KZ" label="Kazakhstan">Kazakhstan</option>
																	<option value="KW" label="Kuwait">Kuwait</option>
																	<option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
																	<option value="LA" label="Laos">Laos</option>
																	<option value="LB" label="Lebanon">Lebanon</option>
																	<option value="MO" label="Macau SAR China">Macau SAR China</option>
																	<option value="MY" label="Malaysia" selected="selected">Malaysia</option>
																	<option value="MV" label="Maldives">Maldives</option>
																	<option value="MN" label="Mongolia">Mongolia</option>
																	<option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
																	<option value="NP" label="Nepal">Nepal</option>
																	<option value="NT" label="Neutral Zone">Neutral Zone</option>
																	<option value="KP" label="North Korea">North Korea</option>
																	<option value="OM" label="Oman">Oman</option>
																	<option value="PK" label="Pakistan">Pakistan</option>
																	<option value="PS" label="Palestinian Territories">Palestinian Territories</option>
																	<option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
																	<option value="PH" label="Philippines">Philippines</option>
																	<option value="QA" label="Qatar">Qatar</option>
																	<option value="SA" label="Saudi Arabia">Saudi Arabia</option>
																	<option value="SG" label="Singapore">Singapore</option>
																	<option value="KR" label="South Korea">South Korea</option>
																	<option value="LK" label="Sri Lanka">Sri Lanka</option>
																	<option value="SY" label="Syria">Syria</option>
																	<option value="TW" label="Taiwan">Taiwan</option>
																	<option value="TJ" label="Tajikistan">Tajikistan</option>
																	<option value="TH" label="Thailand">Thailand</option>
																	<option value="TL" label="Timor-Leste">Timor-Leste</option>
																	<option value="TR" label="Turkey">Turkey</option>
																	<option value="TM" label="Turkmenistan">Turkmenistan</option>
																	<option value="AE" label="United Arab Emirates">United Arab Emirates</option>
																	<option value="UZ" label="Uzbekistan">Uzbekistan</option>
																	<option value="VN" label="Vietnam">Vietnam</option>
																	<option value="YE" label="Yemen">Yemen</option>													
																	</select>											
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

										<!-- view parent-->
										<div class="modal fade" id="view-parent" tabindex="-1" aria-labelledby="view-parent" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
													<h5 class="modal-title" id="view-parent">View Parent Details</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<form>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="firstname" class="form-label">First Name*</label>
																	<input type="text" id="firstname" readonly  class="form-control" aria-describedby="firstname">
																</div>
																<div class="col-sm-6">
																	<label for="lastname" class="form-label">Last Name*</label>
																	<input type="text" id="lastname" readonly class="form-control" aria-describedby="lastname">
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="dob" class="form-label">Date of Birth*</label>
																	<input type="date" id="dob" readonly class="form-control" aria-describedby="dob">
																</div>
																<div class="col-sm-6">
																	<label for="age" class="form-label">Gender*</label>
																	
																	<select class="form-select" aria-label="Disabled select example" disabled>
																		<option value="0" label="Please Choose " selected="selected"></option>
																		<option value="Male" label="Male">Male</option>
																		<option value="Female" label="Female">Female</option>
																		<option value="Prefer" label="Prefer not to say">Prefer not to say</option>														
																	</select>																	
																</div>												
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="passport" class="form-label">Contact Number</label>
																	<input type="text" id="passport" readonly class="form-control" aria-describedby="passport">
																</div>
																<div class="col-sm-6">
																	<label for="expirydate" class="form-label">Relationship</label>
																	<select class="form-select" disabled>
																		<option value="0" label="Please Choose " selected="selected"></option>
																		<option value="Brother" label="Brother">Brother</option>
																		<option value="Sister" label="Sister">Sister</option>													
																	</select>	
																</div>
															</div>
															<h4 class="mt-3 p-2">Home Address</h4>
															<div class="row p-2">
																<div class="col-sm-6">														
																	<div class="form-check form-switch align-right">	
																		<input class="form-check-input" type="checkbox" id="same-address" disabled>
																		<label class="form-check-label" for="same-address">
																			  Same as permanent address
																		</label>
																	</div>
																</div>															
															</div>
															<div class="row p-2">		
																<div class="col-sm-6">
																	<label for="address-1" class="form-label">Address 1*</label>
																	<input type="text" id="address-1" readonly class="form-control" aria-describedby="address-1">
																</div>
																<div class="col-sm-6">
																	<label for="address-2" class="form-label">Address 2</label>
																	<input type="text" id="address-2" readonly class="form-control" aria-describedby="address-2">
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="postcode" class="form-label">Postcode*</label>
																	<input type="text" id="postcode" readonly class="form-control" aria-describedby="postcode">
																</div>
																<div class="col-sm-6">
																	<label for="city" class="form-label">City*</label>
																	<input type="text" id="City" readonly class="form-control" aria-describedby="City">												
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="state" class="form-label">State*</label>
																	<select class="form-select" aria-label="Disabled select example" disabled>
																		<option value="0" label="Please Choose " selected="selected"></option>													
																	</select>											
																</div>
																<div class="col-sm-6">
																	<label for="country" class="form-label">Country</label>
																	<select class="form-select"aria-label="Disabled select example" disabled>
																		<option value="0" label="Please Choose " selected="selected"></option>													
																	</select>											
																</div>
															</div>
					
														</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
									
										<!-- Modal Add Siblings -->
										<div class="modal fade" id="add-sibling" tabindex="-1" aria-labelledby="add-sibling" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
													<h5 class="modal-title" id="add-parent">Sibling Information</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<form>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="firstname" class="form-label">First Name*</label>
																	<input type="text" id="firstname" class="form-control" aria-describedby="firstname">
																</div>
																<div class="col-sm-6">
																	<label for="lastname" class="form-label">Last Name*</label>
																	<input type="text" id="lastname" class="form-control" aria-describedby="lastname">
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="dob" class="form-label">Date of Birth</label>
																	<input type="date" id="dob7" class="form-control" aria-describedby="dob">
																</div>
																<div class="col-sm-6">
																	<label for="gender" class="form-label">Gender</label>
																	<select class="form-select">
																	<option value="0" label="Please Choose " selected="selected"></option>
																	<option value="Male" label="Male">Male</option>
																	<option value="Female" label="Female">Female</option>
																	<option value="Prefer" label="Prefer not to say">Prefer not to say</option>													
																	</select>				
																</div>
															</div>	
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="lastname" class="form-label">Contact Number*</label>
																	<input type="text" value="XXXXXXXXXX" id="lastname" class="form-control" aria-describedby="lastname">
																</div>
																<div class="col-sm-6">
																	<label for="lastname" class="form-label">Relationship</label>
																	<select class="form-select">
																		<option value="0" label="Please Choose " selected="selected"></option>
																		<option value="Brother" label="Brother">Brother</option>
																		<option value="Sister" label="Sister">Sister</option>													
																	</select>		
																</div>
															</div>		
															<h4 class="mt-3 p-2">myprofile Address</h4>
															<div class="row p-2">
																<div class="col-sm-6">														
																	<div class="form-check form-switch align-right">
																		<input class="form-check-input" type="checkbox" id="same-address">
																		<label class="form-check-label" for="same-address">
																			  Same as permenant address
																		</label>
																	</div>
																</div>															
															</div>
															<div class="row p-2">		
																<div class="col-sm-6">
																	<label for="address-1" class="form-label">Address 1*</label>
																	<input type="text" id="address-1" class="form-control" aria-describedby="address-1">
																</div>
																<div class="col-sm-6">
																	<label for="address-2" class="form-label">Address 2</label>
																	<input type="text" id="address-2" class="form-control" aria-describedby="address-2">
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="postcode" class="form-label">Postcode*</label>
																	<input type="text" id="postcode" class="form-control" aria-describedby="postcode">
																</div>
																<div class="col-sm-6">
																	<label for="city" class="form-label">City*</label>
																	<input type="text" id="City" class="form-control" aria-describedby="City">													
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="state" class="form-label">State*</label>
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
																<div class="col-sm-6">
																	<label for="country" class="form-label">Country</label>
																	<select class="form-select">
																	<option value="0" label="Select a country ... " >Select a country ... </option>
																	<optgroup id="country-optgroup-Africa" label="Africa">
																	<option value="DZ" label="Algeria">Algeria</option>
																	<option value="AO" label="Angola">Angola</option>
																	<option value="BJ" label="Benin">Benin</option>
																	<option value="BW" label="Botswana">Botswana</option>
																	<option value="BF" label="Burkina Faso">Burkina Faso</option>
																	<option value="BI" label="Burundi">Burundi</option>
																	<option value="CM" label="Cameroon">Cameroon</option>
																	<option value="CV" label="Cape Verde">Cape Verde</option>
																	<option value="CF" label="Central African Republic">Central African Republic</option>
																	<option value="TD" label="Chad">Chad</option>
																	<option value="KM" label="Comoros">Comoros</option>
																	<option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
																	<option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
																	<option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
																	<option value="DJ" label="Djibouti">Djibouti</option>
																	<option value="EG" label="Egypt">Egypt</option>
																	<option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
																	<option value="ER" label="Eritrea">Eritrea</option>
																	<option value="ET" label="Ethiopia">Ethiopia</option>
																	<option value="GA" label="Gabon">Gabon</option>
																	<option value="GM" label="Gambia">Gambia</option>
																	<option value="GH" label="Ghana">Ghana</option>
																	<option value="GN" label="Guinea">Guinea</option>
																	<option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
																	<option value="KE" label="Kenya">Kenya</option>
																	<option value="LS" label="Lesotho">Lesotho</option>
																	<option value="LR" label="Liberia">Liberia</option>
																	<option value="LY" label="Libya">Libya</option>
																	<option value="MG" label="Madagascar">Madagascar</option>
																	<option value="MW" label="Malawi">Malawi</option>
																	<option value="ML" label="Mali">Mali</option>
																	<option value="MR" label="Mauritania">Mauritania</option>
																	<option value="MU" label="Mauritius">Mauritius</option>
																	<option value="YT" label="Mayotte">Mayotte</option>
																	<option value="MA" label="Morocco">Morocco</option>
																	<option value="MZ" label="Mozambique">Mozambique</option>
																	<option value="NA" label="Namibia">Namibia</option>
																	<option value="NE" label="Niger">Niger</option>
																	<option value="NG" label="Nigeria">Nigeria</option>
																	<option value="RW" label="Rwanda">Rwanda</option>
																	<option value="RE" label="Réunion">Réunion</option>
																	<option value="SH" label="Saint Helena">Saint Helena</option>
																	<option value="SN" label="Senegal">Senegal</option>
																	<option value="SC" label="Seychelles">Seychelles</option>
																	<option value="SL" label="Sierra Leone">Sierra Leone</option>
																	<option value="SO" label="Somalia">Somalia</option>
																	<option value="ZA" label="South Africa">South Africa</option>
																	<option value="SD" label="Sudan">Sudan</option>
																	<option value="SZ" label="Swaziland">Swaziland</option>
																	<option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
																	<option value="TZ" label="Tanzania">Tanzania</option>
																	<option value="TG" label="Togo">Togo</option>
																	<option value="TN" label="Tunisia">Tunisia</option>
																	<option value="UG" label="Uganda">Uganda</option>
																	<option value="EH" label="Western Sahara">Western Sahara</option>
																	<option value="ZM" label="Zambia">Zambia</option>
																	<option value="ZW" label="Zimbabwe">Zimbabwe</option>
																</optgroup>
																<optgroup id="country-optgroup-Americas" label="Americas">
																	<option value="AI" label="Anguilla">Anguilla</option>
																	<option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
																	<option value="AR" label="Argentina">Argentina</option>
																	<option value="AW" label="Aruba">Aruba</option>
																	<option value="BS" label="Bahamas">Bahamas</option>
																	<option value="BB" label="Barbados">Barbados</option>
																	<option value="BZ" label="Belize">Belize</option>
																	<option value="BM" label="Bermuda">Bermuda</option>
																	<option value="BO" label="Bolivia">Bolivia</option>
																	<option value="BR" label="Brazil">Brazil</option>
																	<option value="VG" label="British Virgin Islands">British Virgin Islands</option>
																	<option value="CA" label="Canada">Canada</option>
																	<option value="KY" label="Cayman Islands">Cayman Islands</option>
																	<option value="CL" label="Chile">Chile</option>
																	<option value="CO" label="Colombia">Colombia</option>
																	<option value="CR" label="Costa Rica">Costa Rica</option>
																	<option value="CU" label="Cuba">Cuba</option>
																	<option value="DM" label="Dominica">Dominica</option>
																	<option value="DO" label="Dominican Republic">Dominican Republic</option>
																	<option value="EC" label="Ecuador">Ecuador</option>
																	<option value="SV" label="El Salvador">El Salvador</option>
																	<option value="FK" label="Falkland Islands">Falkland Islands</option>
																	<option value="GF" label="French Guiana">French Guiana</option>
																	<option value="GL" label="Greenland">Greenland</option>
																	<option value="GD" label="Grenada">Grenada</option>
																	<option value="GP" label="Guadeloupe">Guadeloupe</option>
																	<option value="GT" label="Guatemala">Guatemala</option>
																	<option value="GY" label="Guyana">Guyana</option>
																	<option value="HT" label="Haiti">Haiti</option>
																	<option value="HN" label="Honduras">Honduras</option>
																	<option value="JM" label="Jamaica">Jamaica</option>
																	<option value="MQ" label="Martinique">Martinique</option>
																	<option value="MX" label="Mexico">Mexico</option>
																	<option value="MS" label="Montserrat">Montserrat</option>
																	<option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
																	<option value="NI" label="Nicaragua">Nicaragua</option>
																	<option value="PA" label="Panama">Panama</option>
																	<option value="PY" label="Paraguay">Paraguay</option>
																	<option value="PE" label="Peru">Peru</option>
																	<option value="PR" label="Puerto Rico">Puerto Rico</option>
																	<option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
																	<option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																	<option value="LC" label="Saint Lucia">Saint Lucia</option>
																	<option value="MF" label="Saint Martin">Saint Martin</option>
																	<option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
																	<option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
																	<option value="SR" label="Suriname">Suriname</option>
																	<option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
																	<option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
																	<option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
																	<option value="US" label="United States">United States</option>
																	<option value="UY" label="Uruguay">Uruguay</option>
																	<option value="VE" label="Venezuela">Venezuela</option>
																</optgroup>
																<optgroup id="country-optgroup-Asia" label="Asia">
																	<option value="AF" label="Afghanistan">Afghanistan</option>
																	<option value="AM" label="Armenia">Armenia</option>
																	<option value="AZ" label="Azerbaijan">Azerbaijan</option>
																	<option value="BH" label="Bahrain">Bahrain</option>
																	<option value="BD" label="Bangladesh">Bangladesh</option>
																	<option value="BT" label="Bhutan">Bhutan</option>
																	<option value="BN" label="Brunei">Brunei</option>
																	<option value="KH" label="Cambodia">Cambodia</option>
																	<option value="CN" label="China">China</option>
																	<option value="GE" label="Georgia">Georgia</option>
																	<option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
																	<option value="IN" label="India">India</option>
																	<option value="ID" label="Indonesia">Indonesia</option>
																	<option value="IR" label="Iran">Iran</option>
																	<option value="IQ" label="Iraq">Iraq</option>
																	<option value="IL" label="Israel">Israel</option>
																	<option value="JP" label="Japan">Japan</option>
																	<option value="JO" label="Jordan">Jordan</option>
																	<option value="KZ" label="Kazakhstan">Kazakhstan</option>
																	<option value="KW" label="Kuwait">Kuwait</option>
																	<option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
																	<option value="LA" label="Laos">Laos</option>
																	<option value="LB" label="Lebanon">Lebanon</option>
																	<option value="MO" label="Macau SAR China">Macau SAR China</option>
																	<option value="MY" label="Malaysia" selected="selected">Malaysia</option>
																	<option value="MV" label="Maldives">Maldives</option>
																	<option value="MN" label="Mongolia">Mongolia</option>
																	<option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
																	<option value="NP" label="Nepal">Nepal</option>
																	<option value="NT" label="Neutral Zone">Neutral Zone</option>
																	<option value="KP" label="North Korea">North Korea</option>
																	<option value="OM" label="Oman">Oman</option>
																	<option value="PK" label="Pakistan">Pakistan</option>
																	<option value="PS" label="Palestinian Territories">Palestinian Territories</option>
																	<option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
																	<option value="PH" label="Philippines">Philippines</option>
																	<option value="QA" label="Qatar">Qatar</option>
																	<option value="SA" label="Saudi Arabia">Saudi Arabia</option>
																	<option value="SG" label="Singapore">Singapore</option>
																	<option value="KR" label="South Korea">South Korea</option>
																	<option value="LK" label="Sri Lanka">Sri Lanka</option>
																	<option value="SY" label="Syria">Syria</option>
																	<option value="TW" label="Taiwan">Taiwan</option>
																	<option value="TJ" label="Tajikistan">Tajikistan</option>
																	<option value="TH" label="Thailand">Thailand</option>
																	<option value="TL" label="Timor-Leste">Timor-Leste</option>
																	<option value="TR" label="Turkey">Turkey</option>
																	<option value="TM" label="Turkmenistan">Turkmenistan</option>
																	<option value="AE" label="United Arab Emirates">United Arab Emirates</option>
																	<option value="UZ" label="Uzbekistan">Uzbekistan</option>
																	<option value="VN" label="Vietnam">Vietnam</option>
																	<option value="YE" label="Yemen">Yemen</option>													
																	</select>											
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

										<!--update silbing -->
										<div class="modal fade" id="update-sibling" tabindex="-1" aria-labelledby="update-sibling" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
													<h5 class="modal-title" id="update-parent">Update Sibling Information</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<form>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="firstname" class="form-label">First Name*</label>
																	<input type="text" id="firstname" class="form-control" aria-describedby="firstname">
																</div>
																<div class="col-sm-6">
																	<label for="lastname" class="form-label">Last Name*</label>
																	<input type="text" id="lastname" class="form-control" aria-describedby="lastname">
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="dob" class="form-label">Date of Birth</label>
																	<input type="date" id="dob8" class="form-control" aria-describedby="dob">
																</div>
																<div class="col-sm-6">
																	<label for="gender" class="form-label">Gender</label>
																	<select class="form-select">
																	<option value="0" label="Please Choose " selected="selected"></option>
																	<option value="Male" label="Male">Male</option>
																	<option value="Female" label="Female">Female</option>
																	<option value="Prefer" label="Prefer not to say">Prefer not to say</option>													
																	</select>				
																</div>
															</div>	
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="lastname" class="form-label">Contact Number*</label>
																	<input type="text" value="XXXXXXXXXX" id="lastname" class="form-control" aria-describedby="lastname">
																</div>
																<div class="col-sm-6">
																	<label for="lastname" class="form-label">Relationship</label>
																	<select class="form-select">
																	<option value="0" label="Please Choose " selected="selected"></option>
																		<option value="Brother" label="Brother">Brother</option>
																		<option value="Sister" label="Sister">Sister</option>													
																	</select>		
																</div>
															</div>		
															<h4 class="mt-3 p-2">Home Address</h4>
															<div class="row p-2">
																<div class="col-sm-6">														
																	<div class="form-check form-switch align-right">
																		<input class="form-check-input" type="checkbox" id="same-address">
																		<label class="form-check-label" for="same-address">
																			  Same as permanent address
																		</label>
																	</div>
																</div>															
															</div>
															<div class="row p-2">		
																<div class="col-sm-6">
																	<label for="address-1" class="form-label">Address 1*</label>
																	<input type="text" id="address-1" class="form-control" aria-describedby="address-1">
																</div>
																<div class="col-sm-6">
																	<label for="address-2" class="form-label">Address 2</label>
																	<input type="text" id="address-2" class="form-control" aria-describedby="address-2">
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="postcode" class="form-label">Postcode*</label>
																	<input type="text" id="postcode" class="form-control" aria-describedby="postcode">
																</div>
																<div class="col-sm-6">
																	<label for="city" class="form-label">City*</label>
																	<input type="text" id="City" class="form-control" aria-describedby="City">													
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="state" class="form-label">State*</label>
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
																<div class="col-sm-6">
																	<label for="country" class="form-label">Country</label>
																	<select class="form-select">
																	<option value="0" label="Select a country ... " >Select a country ... </option>
																	<optgroup id="country-optgroup-Africa" label="Africa">
																	<option value="DZ" label="Algeria">Algeria</option>
																	<option value="AO" label="Angola">Angola</option>
																	<option value="BJ" label="Benin">Benin</option>
																	<option value="BW" label="Botswana">Botswana</option>
																	<option value="BF" label="Burkina Faso">Burkina Faso</option>
																	<option value="BI" label="Burundi">Burundi</option>
																	<option value="CM" label="Cameroon">Cameroon</option>
																	<option value="CV" label="Cape Verde">Cape Verde</option>
																	<option value="CF" label="Central African Republic">Central African Republic</option>
																	<option value="TD" label="Chad">Chad</option>
																	<option value="KM" label="Comoros">Comoros</option>
																	<option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
																	<option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
																	<option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
																	<option value="DJ" label="Djibouti">Djibouti</option>
																	<option value="EG" label="Egypt">Egypt</option>
																	<option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
																	<option value="ER" label="Eritrea">Eritrea</option>
																	<option value="ET" label="Ethiopia">Ethiopia</option>
																	<option value="GA" label="Gabon">Gabon</option>
																	<option value="GM" label="Gambia">Gambia</option>
																	<option value="GH" label="Ghana">Ghana</option>
																	<option value="GN" label="Guinea">Guinea</option>
																	<option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
																	<option value="KE" label="Kenya">Kenya</option>
																	<option value="LS" label="Lesotho">Lesotho</option>
																	<option value="LR" label="Liberia">Liberia</option>
																	<option value="LY" label="Libya">Libya</option>
																	<option value="MG" label="Madagascar">Madagascar</option>
																	<option value="MW" label="Malawi">Malawi</option>
																	<option value="ML" label="Mali">Mali</option>
																	<option value="MR" label="Mauritania">Mauritania</option>
																	<option value="MU" label="Mauritius">Mauritius</option>
																	<option value="YT" label="Mayotte">Mayotte</option>
																	<option value="MA" label="Morocco">Morocco</option>
																	<option value="MZ" label="Mozambique">Mozambique</option>
																	<option value="NA" label="Namibia">Namibia</option>
																	<option value="NE" label="Niger">Niger</option>
																	<option value="NG" label="Nigeria">Nigeria</option>
																	<option value="RW" label="Rwanda">Rwanda</option>
																	<option value="RE" label="Réunion">Réunion</option>
																	<option value="SH" label="Saint Helena">Saint Helena</option>
																	<option value="SN" label="Senegal">Senegal</option>
																	<option value="SC" label="Seychelles">Seychelles</option>
																	<option value="SL" label="Sierra Leone">Sierra Leone</option>
																	<option value="SO" label="Somalia">Somalia</option>
																	<option value="ZA" label="South Africa">South Africa</option>
																	<option value="SD" label="Sudan">Sudan</option>
																	<option value="SZ" label="Swaziland">Swaziland</option>
																	<option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
																	<option value="TZ" label="Tanzania">Tanzania</option>
																	<option value="TG" label="Togo">Togo</option>
																	<option value="TN" label="Tunisia">Tunisia</option>
																	<option value="UG" label="Uganda">Uganda</option>
																	<option value="EH" label="Western Sahara">Western Sahara</option>
																	<option value="ZM" label="Zambia">Zambia</option>
																	<option value="ZW" label="Zimbabwe">Zimbabwe</option>
																</optgroup>
																<optgroup id="country-optgroup-Americas" label="Americas">
																	<option value="AI" label="Anguilla">Anguilla</option>
																	<option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
																	<option value="AR" label="Argentina">Argentina</option>
																	<option value="AW" label="Aruba">Aruba</option>
																	<option value="BS" label="Bahamas">Bahamas</option>
																	<option value="BB" label="Barbados">Barbados</option>
																	<option value="BZ" label="Belize">Belize</option>
																	<option value="BM" label="Bermuda">Bermuda</option>
																	<option value="BO" label="Bolivia">Bolivia</option>
																	<option value="BR" label="Brazil">Brazil</option>
																	<option value="VG" label="British Virgin Islands">British Virgin Islands</option>
																	<option value="CA" label="Canada">Canada</option>
																	<option value="KY" label="Cayman Islands">Cayman Islands</option>
																	<option value="CL" label="Chile">Chile</option>
																	<option value="CO" label="Colombia">Colombia</option>
																	<option value="CR" label="Costa Rica">Costa Rica</option>
																	<option value="CU" label="Cuba">Cuba</option>
																	<option value="DM" label="Dominica">Dominica</option>
																	<option value="DO" label="Dominican Republic">Dominican Republic</option>
																	<option value="EC" label="Ecuador">Ecuador</option>
																	<option value="SV" label="El Salvador">El Salvador</option>
																	<option value="FK" label="Falkland Islands">Falkland Islands</option>
																	<option value="GF" label="French Guiana">French Guiana</option>
																	<option value="GL" label="Greenland">Greenland</option>
																	<option value="GD" label="Grenada">Grenada</option>
																	<option value="GP" label="Guadeloupe">Guadeloupe</option>
																	<option value="GT" label="Guatemala">Guatemala</option>
																	<option value="GY" label="Guyana">Guyana</option>
																	<option value="HT" label="Haiti">Haiti</option>
																	<option value="HN" label="Honduras">Honduras</option>
																	<option value="JM" label="Jamaica">Jamaica</option>
																	<option value="MQ" label="Martinique">Martinique</option>
																	<option value="MX" label="Mexico">Mexico</option>
																	<option value="MS" label="Montserrat">Montserrat</option>
																	<option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
																	<option value="NI" label="Nicaragua">Nicaragua</option>
																	<option value="PA" label="Panama">Panama</option>
																	<option value="PY" label="Paraguay">Paraguay</option>
																	<option value="PE" label="Peru">Peru</option>
																	<option value="PR" label="Puerto Rico">Puerto Rico</option>
																	<option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
																	<option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																	<option value="LC" label="Saint Lucia">Saint Lucia</option>
																	<option value="MF" label="Saint Martin">Saint Martin</option>
																	<option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
																	<option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
																	<option value="SR" label="Suriname">Suriname</option>
																	<option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
																	<option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
																	<option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
																	<option value="US" label="United States">United States</option>
																	<option value="UY" label="Uruguay">Uruguay</option>
																	<option value="VE" label="Venezuela">Venezuela</option>
																</optgroup>
																<optgroup id="country-optgroup-Asia" label="Asia">
																	<option value="AF" label="Afghanistan">Afghanistan</option>
																	<option value="AM" label="Armenia">Armenia</option>
																	<option value="AZ" label="Azerbaijan">Azerbaijan</option>
																	<option value="BH" label="Bahrain">Bahrain</option>
																	<option value="BD" label="Bangladesh">Bangladesh</option>
																	<option value="BT" label="Bhutan">Bhutan</option>
																	<option value="BN" label="Brunei">Brunei</option>
																	<option value="KH" label="Cambodia">Cambodia</option>
																	<option value="CN" label="China">China</option>
																	<option value="GE" label="Georgia">Georgia</option>
																	<option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
																	<option value="IN" label="India">India</option>
																	<option value="ID" label="Indonesia">Indonesia</option>
																	<option value="IR" label="Iran">Iran</option>
																	<option value="IQ" label="Iraq">Iraq</option>
																	<option value="IL" label="Israel">Israel</option>
																	<option value="JP" label="Japan">Japan</option>
																	<option value="JO" label="Jordan">Jordan</option>
																	<option value="KZ" label="Kazakhstan">Kazakhstan</option>
																	<option value="KW" label="Kuwait">Kuwait</option>
																	<option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
																	<option value="LA" label="Laos">Laos</option>
																	<option value="LB" label="Lebanon">Lebanon</option>
																	<option value="MO" label="Macau SAR China">Macau SAR China</option>
																	<option value="MY" label="Malaysia" selected="selected">Malaysia</option>
																	<option value="MV" label="Maldives">Maldives</option>
																	<option value="MN" label="Mongolia">Mongolia</option>
																	<option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
																	<option value="NP" label="Nepal">Nepal</option>
																	<option value="NT" label="Neutral Zone">Neutral Zone</option>
																	<option value="KP" label="North Korea">North Korea</option>
																	<option value="OM" label="Oman">Oman</option>
																	<option value="PK" label="Pakistan">Pakistan</option>
																	<option value="PS" label="Palestinian Territories">Palestinian Territories</option>
																	<option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
																	<option value="PH" label="Philippines">Philippines</option>
																	<option value="QA" label="Qatar">Qatar</option>
																	<option value="SA" label="Saudi Arabia">Saudi Arabia</option>
																	<option value="SG" label="Singapore">Singapore</option>
																	<option value="KR" label="South Korea">South Korea</option>
																	<option value="LK" label="Sri Lanka">Sri Lanka</option>
																	<option value="SY" label="Syria">Syria</option>
																	<option value="TW" label="Taiwan">Taiwan</option>
																	<option value="TJ" label="Tajikistan">Tajikistan</option>
																	<option value="TH" label="Thailand">Thailand</option>
																	<option value="TL" label="Timor-Leste">Timor-Leste</option>
																	<option value="TR" label="Turkey">Turkey</option>
																	<option value="TM" label="Turkmenistan">Turkmenistan</option>
																	<option value="AE" label="United Arab Emirates">United Arab Emirates</option>
																	<option value="UZ" label="Uzbekistan">Uzbekistan</option>
																	<option value="VN" label="Vietnam">Vietnam</option>
																	<option value="YE" label="Yemen">Yemen</option>														
																	</select>											
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
									  
										<!-- view sibling -->

										<div class="modal fade" id="view-sibling" tabindex="-1" aria-labelledby="view-sibling" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
													<h5 class="modal-title" id="view-parent">View Sibling Information</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<form>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="firstname" class="form-label">First Name*</label>
																	<input type="text" id="firstname" readonly class="form-control" aria-describedby="firstname">
																</div>
																<div class="col-sm-6">
																	<label for="lastname" class="form-label">Last Name*</label>
																	<input type="text" id="lastname" readonly class="form-control" aria-describedby="lastname">
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="dob" class="form-label">Date of Birth</label>
																	<input type="date" id="dob" readonly class="form-control" aria-describedby="dob">
																</div>
																<div class="col-sm-6">
																	<label for="gender" class="form-label">Gender</label>
																	<select class="form-select" aria-label="Disabled select example" disabled>
																		<option value="0" label="Please Choose " selected="selected"></option>													
																	</select>				
																</div>
															</div>	
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="lastname" class="form-label">Contact Number*</label>
																	<input type="text" value="XXXXXXXXXX" readonly id="ContactNumber" class="form-control" aria-describedby="ContactNumber">
																</div>
																<div class="col-sm-6">
																	<label for="lastname" class="form-label">Relationship</label>
																	<select class="form-select" aria-label="Disabled select example" disabled>
																		<option value="0" label="Please Choose " selected="selected"></option>													
																	</select>		
																</div>
															</div>		
															<h4 class="mt-3 p-2">Home Address</h4>
															<div class="row p-2">
																<div class="col-sm-6">														
																	<div class="form-check form-switch align-right">
																		<input class="form-check-input" type="checkbox" id="same-address" aria-label="Disabled select example" disabled>
																		<label class="form-check-label" for="same-address">
																			  Same as permanent address
																		</label>
																	</div>
																</div>															
															</div>
															<div class="row p-2">		
																<div class="col-sm-6">
																	<label for="address-1" class="form-label">Address 1*</label>
																	<input type="text" id="address-1" readonly class="form-control" aria-describedby="address-1">
																</div>
																<div class="col-sm-6">
																	<label for="address-2" class="form-label">Address 2</label>
																	<input type="text" id="address-2" readonly class="form-control" aria-describedby="address-2">
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="postcode" class="form-label">Postcode*</label>
																	<input type="text" id="postcode" readonly class="form-control" aria-describedby="postcode">
																</div>
																<div class="col-sm-6">
																	<label for="city" class="form-label">City*</label>
																	<input type="text" id="City" readonly class="form-control" aria-describedby="City">													
																</div>
															</div>
															<div class="row p-2">
																<div class="col-sm-6">
																	<label for="state" class="form-label">State*</label>
																	<select class="form-select" aria-label="Disabled select example" disabled>
																		<option value="0" label="Please Choose " selected="selected"></option>													
																	</select>											
																</div>
																<div class="col-sm-6">
																	<label for="country" class="form-label">Country</label>
																	<select class="form-select" aria-label="Disabled select example" disabled>
																		<option value="0" label="Please Choose " selected="selected"></option>													
																	</select>											
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
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-employment" role="tabpanel" aria-labelledby="v-pills-employment-tab">
							<div class="row">
								<div class="col-sm-6">
									<div class="card">
										<div class="card-header bg-white bg-gray-100">
											<h4 class="fw-bold">
												Employment Information
											</h4>
											<p class="fw-light">
												Update your employment information
											</p>
										 </div>
										<div class="card-body">
											<div class="row p-2">
												<label for="firstname" class="form-label">Company*</label>
												<select class="form-select">
													<option value="0" label="Please Choose " selected="selected"></option>													
												</select>		
											</div>
											<div class="row p-2">
												<label for="firstname" class="form-label">Department*</label>
												<select class="form-select">
													<option value="0" label="Please Choose " selected="selected"></option>													
												</select>												
											</div>
											<div class="row p-2">
												<label for="firstname" class="form-label">Unit*</label>
												<select class="form-select">
													<option value="0" label="Please Choose " selected="selected"></option>													
												</select>												
											</div>
											<div class="row p-2">
												<label for="firstname" class="form-label">Branch*</label>
												<select class="form-select">
													<option value="0" label="Please Choose " selected="selected"></option>													
												</select>												
											</div>
											<div class="row p-2">
												<label for="firstname" class="form-label">Joined Date*</label>
												<input type="date" id="address-2" class="form-control" aria-describedby="address-2">
											</div>
											<div class="row p-2">
												<label for="firstname" class="form-label">Job Grade*</label>
												<select class="form-select">
													<option value="0" label="Please Choose " selected="selected"></option>													
												</select>												
											</div>
											<div class="row p-2">
												<label for="firstname" class="form-label">Designation*</label>
												<select class="form-select">
													<option value="0" label="Please Choose " selected="selected"></option>													
												</select>											
											</div>
											<div class="row p-2">
												<label for="firstname" class="form-label">Employment Type*</label>
												<select class="form-select">
													<option value="0" label="Please Choose " selected="selected"></option>													
												</select>	
											</div>
											<div class="row p-2">
												<label class="form-label" for="supervisor">
													  User Role
												</label>
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="supervisor">
													<label class="form-check-label" for="supervisor">
														  Supervisor
													</label>
												</div>
												<div class="form-text">
													If enabled, report-to will enabled the username
												</div>
											</div>
											<hr>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card">
										<div class="card-header bg-gray-100">
											<div class="row">
												<div class="col">
													<h4 class="fw-bold">
														Job History
													</h4>
													<p class="fw-light">
														Update your history information
													</p>
												</div>
												<div class="col">
													<button class="btn btn-white float-end" data-bs-toggle="dropdown">
														Filter content
														<i class="fa fa-filter text-dark"></i>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a href="#" class="dropdown-item">Company</a>
														<a href="#" class="dropdown-item">Department</a>
														<a href="#" class="dropdown-item">Unit</a>
														<a href="#" class="dropdown-item">Branch</a>
														<a href="#" class="dropdown-item">Job Grade</a>
														<a href="#" class="dropdown-item">Designation</a>
														<a href="#" class="dropdown-item">Employment Type</a>
														<a href="#" class="dropdown-item">Supervisor</a>
														<a href="#" class="dropdown-item">Clear Filter</a>
													</div>
												</div>
											</div>
										 </div>
										<div class="card-body">
											<div class="container">
												<ul class="timeline-with-icons">
													<li class="timeline-item mb-5 ">
													  <span class="timeline-icon">
														<i class="fas fa-rocket text-primary fa-sm fa-fw"></i>
													  </span>
													  
													  <div class="card p-3 bg-white">														
														  <p class="fw-bold">Designation has change from Customer Care to Administrator updated by Ahm Farid</p>
														  <p class="text-muted mb-2 fw-bold">11 March 2020</p>
														  <p class="text-muted">
															  Effective Date: 23 Sep 2021
														  </p>
													  </div>
													</li>
													<li class="timeline-item mb-5 ">
													  <span class="timeline-icon">
														<i class="fas fa-rocket text-primary fa-sm fa-fw"></i>
													  </span>
													  
													  <div class="card p-3 bg-white">														
														  <p class="fw-bold">Designation has change from Customer Care to Administrator updated by Ahm Farid</p>
														  <p class="text-muted mb-2 fw-bold">11 March 2020</p>
														  <p class="text-muted">
															  Effective Date: 23 Sep 2021
														  </p>
													  </div>
													</li>
													<li class="timeline-item mb-5 ">
													  <span class="timeline-icon">
														<i class="fas fa-rocket text-primary fa-sm fa-fw"></i>
													  </span>
													  
													  <div class="card p-3 bg-white">														
														  <p class="fw-bold">Designation has change from Customer Care to Administrator updated by Ahm Farid</p>
														  <p class="text-muted mb-2 fw-bold">11 March 2020</p>
														  <p class="text-muted">
															  Effective Date: 23 Sep 2021
														  </p>
													  </div>
													</li>
												</ul>
											</div>
											
										</div>
									</div>
								</div>
								<!-- Modal Update Employment-->
								<div class="modal fade" id="update-employment" tabindex="-1" aria-labelledby="update-employment" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="update-employment">Employment Details - Confirm Changes</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col-sm-6">
														<label for="employee-id" class="form-label">Employee ID</label>
														<input type="text" id="employee-id" class="form-control" aria-describedby="employee-id">	
													</div>
													<div class="col-sm-6">
														<label for="employee-name" class="form-label">Employee Name</label>
														<input type="text" id="employee-name" class="form-control" aria-describedby="employee-name">	
													</div>										
												</div>
												<div class="col-sm-6">
													<label for="employee-email" class="form-label">Employee Email</label>
													<input type="text" id="employee-email" class="form-control" aria-describedby="employee-email">	
												</div>		
												<hr>

												<p class="mt-3 mb-3 fw-bold">Confirm Changes</p>
												<div class="row">
													<div class="col-sm-6">
														<label for="effective-from" class="form-label">Effective From*</label>
														<input type="date" id="effective-from" class="form-control" aria-describedby="effective-from">	
													</div>	
													<div class="col-sm-6">
														<label for="firstname" class="form-label">Event*</label>
														<select class="form-select">
															<option value="0" label="Please Choose " selected="selected"></option>													
														</select>	
													</div>	
												</div>
												<hr>
												<p class="mt-3 mb-3 fw-bold">Changes Details</p>
												<div class="row">
													<label for="changes-input" class="form-label">Input</label>
													<input type="file" id="changes-input" class="form-control" aria-describedby="changes-input">	
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-changepassword" role="tabpanel" aria-labelledby="v-pills-changepassword-tab">
							<div class="card">
								<div class="card-header bg-white bg-gray-100">
									<h4 class="fw-bold">
										Change Password
									</h4>
									<p class="fw-light">
										Update your password information
									</p>
								 </div>
								<div class="card-body">
									<div class="row p-2">
										<label for="firstname" class="form-label">Current Password*</label>
										<input type="password" id="password" class="form-control" aria-describedby="password">
									</div>
									<div class="row p-2">
										<label for="firstname" class="form-label">New Password*</label>
										<input type="password" id="password" class="form-control" aria-describedby="password">
									</div>
									<div class="row p-2">
										<label for="firstname" class="form-label">Confirm Password*</label>
										<input type="password" id="password" class="form-control" aria-describedby="password">
	
									</div>
									<button type="button" class="btn btn-primary float-end mt-3">
										Save
									</button>
								</div>
								
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-vehicledetails" role="tabpanel" aria-labelledby="v-pills-vehicledetails-tab">
							<div class="card">
								<div class="card-header bg-white bg-gray-100">
									<h4 class="fw-bold">
										Vehicle Details
									</h4>
									<p class="fw-light">
										Update your vehicle information
									</p>
								 </div>
								<div class="card-body">
									<button type="button"  data-bs-toggle="modal" data-bs-target="#add-vehicle"  class="btn btn-white mt-3 mb-3"><i class="fa fa-plus"></i> Add Vehicle</button>
									<table id="data-table-car" style="width: 100%" class="table table-striped align-middle">
										<thead>
												<th width="1%" data-orderable="false">Action</th>
												<th class="text-nowrap">Vehicle Type</th>
												<th class="text-nowrap">Plate Number</th>				
										</thead>
										<tbody>
											<tr>
												<td>
													<a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i></a>
														<div class="dropdown-menu">
															<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#update-vehicle" class="dropdown-item">Edit</a>
															<div class="dropdown-divider"></div>
															<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#view-vehicle" class="dropdown-item">View</a>
															<div class="dropdown-divider"></div>
															<a href="javascript:;" class="dropdown-item">Delete</a>
														</div>
												</td>												
												<td>Car</td>
												<td>BGH9234</td>
											</tr>											
										</tbody>
									</table>	
								</div>
							</div>
							<div class="modal fade" id="add-vehicle" tabindex="-1" aria-labelledby="add-vehicle" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="add-vehicle">New Vehicle</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<form>
												<div class="row p-2">
													<label for="firstname" class="form-label">Vehicle Type*</label>
													<select class="form-select">
																		<option value="0" label="Please Choose " selected="selected"></option>
																		<option value="Car" label="Car">Car</option>
																		<option value="Motorcycle" label="Motorcycle">Motorcycle</option>													
													</select>	
												</div>
												<div class="row p-2">
													<label for="lastname" class="form-label">Plate Number*</label>
													<input type="text" id="lastname" class="form-control" aria-describedby="lastname">
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
							
							<!-- update vehicle -->
							<div class="modal fade" id="update-vehicle" tabindex="-1" aria-labelledby="update-vehicle" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="add-vehicle">Update Vehicle</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<form>
												<div class="row p-2">
													<label for="firstname" class="form-label">Vehicle Type*</label>
													<select class="form-select">
																<option value="0" label="Please Choose " selected="selected"></option>
																<option value="Car" label="Car">Car</option>
																<option value="Motorcycle" label="Motorcycle">Motorcycle</option>													
													</select>	
												</div>
												<div class="row p-2">
													<label for="lastname" class="form-label">Plate Number*</label>
													<input type="text" id="lastname" class="form-control" aria-describedby="lastname">
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

							<!-- view vehicle-->
							<div class="modal fade" id="view-vehicle" tabindex="-1" aria-labelledby="view-vehicle" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="view-vehicle">View Vehicle</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<form>
												<div class="row p-2">
													<label for="firstname" class="form-label">Vehicle Type*</label>
													<select class="form-select" aria-label="Disabled select example" disabled >
														<option value="0" label="Please Choose " selected="selected"></option>													
													</select>	
												</div>
												<div class="row p-2">
													<label for="lastname" class="form-label">Plate Number*</label>
													<input type="text" id="lastname" readonly class="form-control" aria-describedby="lastname">
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-eleave" role="tabpanel" aria-labelledby="v-pills-eleave-tab">
							<div class="card">
								<div class="card-header bg-white bg-gray-100">
									<h4 class="fw-bold">
										eLeave
									</h4>
									<p class="fw-light">
										Approval Hierarchy
									</p>
								 </div>
								<div class="card-body">
									<div class="row p-2">
										<label for="firstname" class="form-label">Employee Name</label>
										<input type="text" id="text" class="form-control" aria-describedby="password">
									</div>
									<div class="row p-2">
										<label for="firstname" class="form-label">Recommender*</label>
										<select class="form-select">
											<option value="0" label="Please Choose " selected="selected"></option>													
										</select>
									</div>
									<div class="row p-2">
										<label for="firstname" class="form-label">Approver*</label>
										<select class="form-select">
											<option value="0" label="Please Choose " selected="selected"></option>													
										</select>	
									</div>
									<button type="button" class="btn btn-primary float-end mt-3">
										Save
									</button>
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
	<!-- ================== DATA TABLE ================== -->
	<script src="../assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
	<script src="../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="../assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
	<script src="../assets/plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js"></script>
	<script src="../assets/plugins/datatables.net-colreorder-bs5/js/colReorder.bootstrap5.min.js"></script>
	<script>
		$('#data-table-default').DataTable({
			lengthMenu: [5, 10, 15],
			responsive: true
		});
	  </script>
	<script>
		$('#data-table-car').DataTable({
		  responsive: true
		});
	  </script>
	  <script>
		$('#data-table-child').DataTable({
			lengthMenu: [5, 10, 15],
			responsive: true
		});
	  </script>  
	  <script>
		$('#data-table-parent').DataTable({
		  responsive: true
		});
	  </script> 
	  <script>
		$('#data-table-sibling').DataTable({
		  responsive: true
		});
	  </script>     
	
	<script>
  $("#expirydate").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#dob").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#expirydate1").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#dob1").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#dom1").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#djc").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#dob3").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#ed3").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#dob4").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#ed4").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#dob5").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#dob6").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#dob7").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#dob8").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
	<!-- ================== END page-js ================== -->
</body>

</html>
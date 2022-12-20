<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>OrbitHRM | Add Entitlement</title>
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


	{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
	{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	 --}}


	
	
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
    <!-- {{-- margin-top: 10px; --}} -->
	<h1 class="page-header">Settings | Add Entitlement Group</h1>
         <div class="panel panel">
			<div class="panel-body">
					
                    <div class="row p-2">
                        <h3>Add Entitlement Group</h3>
                    </div>
                      <form>
                    <div class="form-control">	
                       <div class="row p-2">
                        <div class="col mb-6">
                            <div class="row">
                                <label for="entitlementgroupname" class="col-sm col-form-label">Entitlement Group Name*</label>
                                <div class="col">
                                  <input type="text" class="form-control"  name="entitlementgroupname" id="entitlement_groupname" placeholder="Entitlement Group Name">
                                </div>
                              </div>
                              <br>
                              <div class="row">
                                    <label for="jobgrade" class="col-sm col-form-label">Job Grade*</label>
                                    <div class="col">
                                        <select class="form-select" name="" id="" aria-label="Disabled select example" id="">
                                            <option selected>Please Select</option>
                                            
                                          </select>
                                    </div>
                              </div>
                              <br>
                              <div class="row">
                                <div class="col">
                                    <h6>Local Travelling*</h6>
                                </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Local" id="flexRadioF" checked>
                                            <label class="form-check-label" for="flexRadioF">
                                            F- First Class
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Local" id="flexRadioC" >
                                            <label class="form-check-label" for="flexRadioC">
                                            C- Business Class
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Local" id="flexRadioY" >
                                            <label class="form-check-label" for="flexRadioY">
                                            Y - First Class
                                            </label>
                                        </div>
                                    </div>
                              </div>
                              <br>
                              <div class="row">
                                <div class="col">
                                    <h6>Overseas Travelling*</h6>
                                </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Overseas" id="flexRadioOF">
                                            <label class="form-check-label" for="flexRadioOF">
                                            F- First Class
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Overseas" id="flexRadioOC" checked>
                                            <label class="form-check-label" for="flexRadioOC">
                                            C- Business Class
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Overseas" id="flexRadioOY" >
                                            <label class="form-check-label" for="flexRadioOY">
                                            Y - First Class
                                            </label>
                                        </div>
                                    </div>
                              </div>       
                        </div>
                        <div class="col mb-6">
                            <div class="row">
                                <label for="localhotela" class="col-sm-3 col-form-label">Local Hotel Allowance</label>
                                <div class="col-sm-3">
                                    <select class="form-select" name="localhotela" id="localhotela" aria-label="Disabled select example">
                                        <option selected value="0">None</option>
                                        <option value="1">Actual</option>
                                        <option value="2">Input Value</option>
                                      </select>
                                </div>
                                <div class="col-sm-3" id="localhoteli" style="display: none">
                                    <input type="text" class="form-control" id="" name="localhotela" value="">
                                </div>
                                
                            </div>
                            <br>
                            <div class="row">
                                <label for="lodgingallowance" class="col-sm-3 col-form-label">Lodging Allowance</label>
                                <div class="col-sm-3">
                                    <select class="form-select" name="lodgingallowance" id="lodgingallowance" aria-label="Disabled select example" id="lodginghotels">
                                        <option selected value="0">None</option>
                                        <option value="1">Actual</option>
                                        <option value="2">Input Value</option>
                                      </select>
                                </div>
                                <div class="col-sm-3" id="lodginghoteli" style="display: none">
                                    <input type="text" class="form-control" id="local_hotela1" name="" value="">
                                </div>
                            </div>
                            <br>
                              <div class="row">
                                    <label for="carmileage" class="col-sm-3 col-form-label">Car Mileage Claim* <i class="fa fa-question-circle" style="color:rgba(0, 81, 255, 0.904)"   data-toggle="tooltip1" title="Mileage claim  for own car only & with prior approval&#010; from supervisor.&#010; if leave blank KM field, it will assume as no limit.&#010; Click the &quot;+&quot; button to add the subsequent KM and rate.&#010;Click the &quot;-&quot; button to remove the subsequent KM and rate"></i></label>
                                        <div class="col-sm-3">
                                        <input type="text" class="form-control" name="carmileagecharge" id="car_mileagecharge" value="0.7">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="car_mileagekm" name="carmileagekm" value="700">
                                    </div>
                                    <div class="col">
                                        <h5 class="form-control" id="km1" aria-readonly="true">KM</h5>
                                    </div>
                                    <div class="col">
                                        <button id="plusbtn" type="button"><i class="fa fa-plus"></i> </button>
                                        <button id="minusbtn" type="button" style="display: none;" ><i class="fa fa-minus"></i> </button>
                                    </div>
                              </div>

                              <br>
                                <div class="row">
                                    <label for="carmileage1" class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-3">
                                        <input style="display: none;" type="text" class="form-control" id="mileagecharge1">
                                        </div>
                                    <div class="col-sm-3">
                                        <input type="text" style="display: none;"  class="form-control" id="mileagekm1" >
                                    </div>
                                    <div class="col">
                                        <h5 class="form-control" id="km2" style="display: none;" aria-readonly="true">KM</h5>
                                    </div>
                                    <div class="col">
                                        <button id="plusbtn1" type="button" style="display: none;"><i class="fa fa-plus"></i> </button>
                                        <button id="minusbtn1" type="button" style="display: none;"><i class="fa fa-minus"></i> </button>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    
                                    <label for="staticEmail" class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-3">
                                        <input  type="text" style="display: none;" class="form-control" id="mileagecharge2"  >
                                        </div>
                                    <div class="col-sm-3">
                                        <input type="text" style="display: none;"  class="form-control" id="mileagekm2" >
                                    </div>
                                    <div class="col">
                                        <h5 class="form-control" id="km3" style="display: none;" aria-readonly="true">KM</h5>
                                    </div>
                                    <div class="col">
                                        <button id="plusbtn2" type="button" style="display: none;" ><i class="fa fa-plus"></i> </button>
                                        <button id="minusbtn2" type="button" style="display: none;" ><i class="fa fa-minus"></i> </button>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Motorcycle Mileage <i class="fa fa-question-circle" style="color:rgba(0, 81, 255, 0.904)" data-toggle="tooltip2" title="Mileage claim  for own motorcycle only & with prior approval&#010; from supervisor.&#010; if leave blank KM field, it will assume as no limit.&#010; Click the &quot;+&quot; button to add the subsequent KM and rate.&#010;Click the &quot;-&quot; button to remove the subsequent KM and rate"></i> claim* </label>
                                        <div class="col-sm-3">
                                        <input  type="text"  class="form-control" id="mileagemcharge" value="0.40" >
                                        </div>
                                    <div class="col-sm-3">
                                        <input type="text"   class="form-control" id="mileagemkm" value="700" >
                                    </div>
                                    <div class="col">
                                        <h5 class="form-control" id="mkm1" aria-readonly="true">KM</h5>
                                    </div>
                                    <div class="col">
                                        <button id="plusmbtn" type="button"><i class="fa fa-plus" aria-hidden="true"></i> </button>
                                        <button id="minusmbtn" style="display: none;" type="button"><i class="fa fa-minus"></i> </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-3">
                                        <input  type="text" style="display: none;" class="form-control" id="mileagemcharge1"  >
                                        </div>
                                    <div class="col-sm-3">
                                        <input type="text" style="display: none;"  class="form-control" id="mileagemkm1" >
                                    </div>
                                    <div class="col">
                                        <h5 class="form-control" id="mkm2" style="display: none;" aria-readonly="true">KM</h5>
                                    </div>
                                    <div class="col">
                                        <button id="plusmbtn1" type="button" style="display: none;" ><i class="fa fa-plus"></i> </button>
                                        <button id="minusmbtn1" type="button" style="display: none;" ><i class="fa fa-minus"></i> </button>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-3">
                                        <input  type="text" style="display: none;" class="form-control" id="mileagemcharge2"  >
                                        </div>
                                    <div class="col-sm-3">
                                        <input type="text" style="display: none;"  class="form-control" id="mileagemkm2"  >
                                    </div>
                                    <div class="col">
                                        <h5 class="form-control" id="mkm3" style="display: none;" aria-readonly="true">KM</h5>
                                    </div>
                                    <div class="col">
                                        <button id="plusmbtn2" type="button" style="display: none;" ><i class="fa fa-plus"></i> </button>
                                        <button id="minusmbtn2" type="button" style="display: none;" ><i class="fa fa-minus"></i> </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="carmileage" class="col-sm-3 col-form-label">Food Allowance</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="carmileage" class="col-sm-3 col-form-label">Breakfast </label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="carmileage" class="col-sm-3 col-form-label">Lunch </label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="carmileage" class="col-sm-3 col-form-label">Dinner </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="" name="" >
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="" name="" >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    </form>
                </div>
                <br>
             <div class="row">
                <div class="col mb-6">
                   
                        <div class="form-control">
                            <h5>Subsistence Allowance</h5>
                            <table  id="tablesavesubsistence"  class="table table-striped table-bordered align-middle">
                                <thead>
                                <tr>	
                                    <th  data-orderable="false">Action</th>
                                    <th class="text-nowrap">Area</th>
                                    <th class="text-nowrap">Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="javascript:;" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#editsubsistence" class="btn btn-outline-blue" ><i class="fa fa-edit"></i></a>  
                                        </td>
                                        <td>MALAYSIA</td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a href="javascript:;" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#editsubsistence" class="btn btn-outline-blue" ><i class="fa fa-edit"></i></a> 
                                        </td>
                                        <td>MIDDLE EAST</td>
                                        <td>unlimited</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a href="javascript:;" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#editsubsistence" class="btn btn-outline-blue" ><i class="fa fa-edit"></i></a> 
                                        </td>
                                        <td>SINGAPORE/BRUNEI</td>
                                        <td>80</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>

                <div class="col mb-6">
                    
                        <div class="form-control">
                            <h5>Claim Benefits</h5>
                            <table  id="tableSaveArea"  class="table table-striped table-bordered align-middle">
                                <thead>
                                <tr>	
                                    <th  data-orderable="false">Action</th>
                                    <th class="text-nowrap">Area</th>
                                    <th class="text-nowrap">Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="javascript:;" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#editclaimbenefit" class="btn btn-outline-blue" ><i class="fa fa-edit"></i></a> 
                                        </td>
                                        <td>ENTERTAINMENT</td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a href="javascript:;" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#editclaimbenefit" class="btn btn-outline-blue" ><i class="fa fa-edit"></i></a>
                                        </td>
                                        <td>PHONE BILL</td>
                                        <td>unlimited</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a href="javascript:;" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#editclaimbenefit" class="btn btn-outline-blue" ><i class="fa fa-edit"></i></a> 
                                        </td>
                                        <td>OTHERS</td>
                                        <td>80</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
            <br>
            <div class="row p-2">
                <div class="modal-footer">
                    <div class="col align-self-start">
                        <a href="/setting/entitlement" class="btn btn-light" style="color: black" type="submit"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                    
                    <div class="col d-flex justify-content-end">
                        <button class="btn btn-light" style="color: black" type="submit"><i class="fa fa-save"></i> Save</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal subsistence -->
        <div class="modal fade" id="editsubsistence" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Subsistence Allowance</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-3">
                            <label for="subsistence allowance" class="col-sm-2 col-form-label">Subsistence Allowance</label><br>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" placeholder="" readonly >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="unlimited subsistence" class="col-sm-2 col-form-label">Value</label><br>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="valuesubsistence" placeholder="value">
                                <input type="checkbox" class="unlimited" value="unlimited"> unlimited
                            </div>
                        </div>
                        </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="savesubsistence" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>


{{-- modal claim --}}
  <div class="modal fade" id="editclaimbenefit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Claims Benefit</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="row mb-3">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Area</label><br>
					<div class="col-sm-6">
                        <input type="text" class="form-control" id="" placeholder="" readonly >
                    </div>
                </div>
                <div class="row mb-3">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Value</label><br>
					<div class="col-sm-6">
                        <input type="text" class="form-control" id="valueclaim" placeholder="value">
                        <input type="checkbox" class="unlimited1" value="unlimited">unlimited
                    </div>
                </div>
				</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" id="savesubsistence" class="btn btn-primary">Save changes</button>
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
$(document).ready(function(){
        //car 
        $("#plusbtn").click(function(){
        $("#mileagecharge1").show();
        $("#mileagekm1").show();
        $("#minusbtn").show();
        $("#minusbtn1").show();
        $("#plusbtn1").show();
        $("#km2").show();
        $("#minusbtn").prop('disabled', true);
        });

        $("#plusbtn1").click(function(){
        $("#mileagecharge2").show();
        $("#mileagekm2").show();
        $("#minusbtn2").show();
        $("#km3").show();
        $("#minusbtn1").prop('disabled', true);
        });

        $("#minusbtn1").click(function(){
        $("#mileagecharge1").hide();
        $("#mileagekm1").hide();    
        $("#plusbtn1").hide();
        $("#minusbtn1").hide();
        $("#minusbtn").hide();
        $("#km2").hide();
        $("#minusbtn").prop('disabled', false);
        });

        $("#minusbtn").click(function(){
        $("#mileagecharge1").hide();
        $("#mileagekm1").hide();
        });

        $("#minusbtn2").click(function(){
        $("#mileagecharge2").hide();
        $("#mileagekm2").hide();
        $("#minusbtn2").hide();
        $("#km3").hide();
        $("#minusbtn1").prop('disabled', false);
        });

        //motor
        $("#plusmbtn").click(function(){
        $("#mileagemcharge1").show();
        $("#mileagemkm1").show();
        $("#minusmbtn").show();
        $("#minusmbtn1").show();
        $("#plusmbtn1").show();
        $("#mkm2").show();
        $("#minusmbtn").prop('disabled', true);
        });

        $("#plusmbtn1").click(function(){
        $("#mileagemcharge2").show();
        $("#mileagemkm2").show();
        $("#minusmbtn2").show();
        $("#mkm3").show();
        $("#minusmbtn1").prop('disabled', true);
        });

        $("#minusmbtn1").click(function(){
        $("#mileagemcharge1").hide();
        $("#mileagemkm1").hide();    
        $("#plusmbtn1").hide();
        $("#minusmbtn1").hide();
        $("#minusmbtn").hide();
        $("#mkm2").hide();
        $("#minusmbtn").prop('disabled', false);
        });

        $("#minusmbtn").click(function(){
        $("#mileagemcharge1").hide();
        $("#mileagemkm1").hide();
        });

        $("#minusmbtn2").click(function(){
        $("#mileagemcharge2").hide();
        $("#mileagemkm2").hide();
        $("#minusmbtn2").hide();
        $("#mkm3").hide();
        $("#minusmbtn1").prop('disabled', false);
        });

        $('[data-toggle="tooltip1"]').tooltip();  
		$('[data-toggle="tooltip2"]').tooltip();

        $('.unlimited').click(function() {
          var text = "";
        $('.unlimited:checked').each(function() {
            text+=$(this).val()+ ',';
        });
        text=text.substring(0,text.length-1);
        $('#valuesubsistence').val(text);
        var count = $("[type='checkbox']:checked".length);
        $('#count').val($("[type='checkbox']:checked").length); 
      });


      $('.unlimited1').click(function() {
          var text = "";
        $('.unlimited1:checked').each(function() {
            text+=$(this).val()+ ',';
        });
        text=text.substring(0,text.length-1);
        $('#valueclaim').val(text);
        var count = $("[type='checkbox']:checked".length);
        $('#count').val($("[type='checkbox']:checked").length); 
      });

});

        $(document).on('change', "#localhotela", function() {
        if ($(this).val() == "2") {
            $("#localhoteli").show();
			
		}else {
			
			$("#localhoteli").hide();
        }
    });

    // 
    $(document).on('change', "#lodgingallowance", function() {
        if ($(this).val() == "2") {
            $("#lodginghoteli").show();
			
		}else {
			
			$("#lodginghoteli").hide();
        }
    });

</script>



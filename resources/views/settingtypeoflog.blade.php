
<!DOCTYPE html>
<html lang="en" >
	
<head>
	<meta charset="utf-8" />
	<title>OrbitHRM | Settings </title>
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
	
	<!-- END page-header -->
	<!-- BEGIN row -->
	
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">Settings <small>| Type of Logs </small></h1>
	
	<!-- END page-header -->
	<!-- BEGIN panel -->
	<div class="panel panel">
		
		<!-- BEGIN panel-heading -->
		
		<div class="panel-heading">
		<div class="col-md-6">
		<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">+ New Type of Log</a>
		</div>
		
			<h4 class="panel-title"></h4>
			
			
		</div>
		<!-- END panel-heading -->
		<!-- BEGIN panel-body -->
		<div class="panel-body">
			<table id="data-table-default" class="table table-striped table-bordered align-middle">
				<thead>
					<tr>
						<th width="1%">NO</th>
						<th class="text-nowrap">Department</th>
						<th class="text-nowrap">Type of Logs</th>
						<th class="text-nowrap">Project Name</th>
						<th class="text-nowrap">Activity Name</th>
						<th width="9%" data-orderable="false" class="align-middle">Action</th>


					</tr>
				</thead>
				<tbody>
					<tr>
						<td >1</td>
						<td >Service Delivery Deparment</td>
						<td >Project</td>
						<td>Project A</td>
						<td>1. Corrective Maintenance, <br> 2. Reviewing & Documenting, <br>3. Reporting </td>
						<td><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModaledit" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a> <a href="javascript:;" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
					</tr>
					<tr>
						<td >2</td>
						<td >Customer Care Department</td>
						<td >Project</td>
						<td>Project B</td>
						<td>1. Ticketing, <br> 2. Customer Service</td>
						<td><a href="javascript:;" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a> <a href="javascript:;" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
					</tr>	
					<tr>
						<td >3</td>
						<td >Coorporate Service</td>
						<td >Non-Project</td>
						<td>-</td>
						<td>1. Reporting</td>
						<td><a href="javascript:;" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a> <a href="javascript:;" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
					</tr>
					<tr>
						<td >4</td>
						<td >Bussiness Development</td>
						<td >Project</td>
						<td>Project C</td>
						<td>1. Project Documenation, <br>2. Planning </td>
						<td><a href="javascript:;" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a> <a href="javascript:;" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
					</tr>
					
					
					
				</tbody>
			</table>
		</div>
	</div>

	<!-- END row -->
	<!-- BEGIN row -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">Add Type of Log</h5>
					  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					  <form>
						
						<div class="mb-3">
						  <label class="form-label">Department* </label>
						  <select class="form-select" id="" aria-label="Default select example">
												<option class="form-label" value="" selected>Select Department</option>
												
						  </select>
						</div>
						<div class="mb-3">
						  <label class="form-label">Type of Log* </label>
						  <select class="form-select" id="addtypeoflog" aria-label="Default select example">
								<option class="form-label" value="" selected>Select Type of Log</option>
								<option class="form-label" value="1" >Non-Project</option>
								<option class="form-label" value="2" >Project</option>
						  </select>
						</div>
						<div class="mb-3" id="addtypeoflogproject" style="display:none">
						  <label class="form-label">Project* </label>
						  <select class="form-select" id="" aria-label="Default select example">
								<option class="form-label" value="">Select Project</option>
								
						  </select>
						</div>
						<div class="row p-2">
								<div class="col-sm-10" id="" >
								<label for="firstname" class="form-label">Activity Name*</label>	
								<input type="text" id="addtypelogactivityName" placeholder="Name" class="form-control">
								
								
								</div>
								<div class="col-sm-2" id="" >
									<label for="firstname" class="form-label">&nbsp;</label><br>
									<input type="button" id="add-row" class="add-row btn btn-primary btn-sm" value="Add">
									
								</div>			
						</div>
						<div class="form-control">
						<div class="row p-2">
						


						<table id="tableactivityname" class="table table-striped table-bordered align-middle">
						
						<thead>
							<tr>
								<th class="text-nowrap">Activity Name</th>
												<th width="9%" data-orderable="false" class="align-middle">Action</th>


											</tr>
										</thead>
						<tr>
							<th style="display:none"></th>
							<th style="display:none"></th>
						</tr>
						</table>

					</div></div>
					
					<div class="modal-footer">
					  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					  <button type="button" class="btn btn-primary">Save</button>
					</div>
				  </div>
				</div>
			  </div>
			  <!--MODAL EDIT  -->
			  <div class="modal fade" id="exampleModaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">Update Type of Log</h5>
					  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					  <form>
						
						<div class="mb-3">
						  <label class="form-label">Department* </label>
						  <select class="form-select" id="" aria-label="Default select example">
												<option class="form-label" value="" selected>Select Department</option>
												
						  </select>
						</div>
						<div class="mb-3">
						  <label class="form-label">Type of Log* </label>
						  <select class="form-select" id="addtypeoflogedit" aria-label="Default select example">
								<option class="form-label" value="" selected>Select Type of Log</option>
								<option class="form-label" value="1" >Non-Project</option>
								<option class="form-label" value="2" >Project</option>
						  </select>
						</div>
						<div class="mb-3" id="addtypeoflogprojectedit" style="display:none">
						  <label class="form-label">Project* </label>
						  <select class="form-select" id="" aria-label="Default select example">
								<option class="form-label" value="">Select Project</option>
								
						  </select>
						</div>
						<div class="row p-2">
								<div class="col-sm-10" id="" >
									<label for="firstname" class="form-label">Activity Name*</label>
									<input type="text" class="form-control" id="" />
								</div>
								<div class="col-sm-2" id="" >
									<label for="firstname" class="form-label">&nbsp;</label><br>
									<a href="#" class="btn btn-primary btn-sm">+ Add</a>
								</div>			
						</div>
						<div class="row p-2">
						<table id="activitynameedit" class="table table-striped table-bordered align-middle">
				<thead>
					<tr>
						<th width="1%">NO</th>
						<th class="text-nowrap">Department</th>
						<th width="9%" data-orderable="false" class="align-middle">Action</th>


					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="1%">1</td>
						<td >Corrective Maintenance</td>
						<td width="1%"><a href="javascript:;" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
					</tr>
						
					<tr>
						<td width="1%">2</td>
						<td>Reviewing & Documenting</td>
						<td width="1%"><a href="javascript:;" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
					</tr>
						
					<tr>
						<td width="1%">3</td>
						<td>Reporting</td>
						<td width="1%"><a href="javascript:;" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						
						
					
					
					
					
				</tbody>
				</table>
				</div>	
					  </form>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					  <button type="button" class="btn btn-primary">Save</button>
					</div>
				  </div>
				</div>
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
	<link href="/assets/plugins/jstree/dist/themes/default/style.min.css" rel="stylesheet" />
	<script src="/assets/plugins/jstree/dist/jstree.min.js"></script>
	<!-- required files -->
	<link href="/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
	<script src="/assets/plugins/moment/min/moment.min.js"></script>
	<script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>


<script>
  $('#data-table-default').DataTable({
	lengthMenu: [5, 10],
    responsive: false
  });
  $('#tableactivityname').DataTable({
	lengthMenu: [2,5],
    responsive: false,
	"searching": false,
  });
  $('#activitynameedit').DataTable({
	lengthMenu: [5],
    responsive: false,
	"searching": false,
  });
</script>
<script>
  $(document).on('change',"#addtypeoflog", function () {
   if ($(this).val() == "2") {
       $("#addtypeoflogproject").show();
   } else {
       $("#addtypeoflogproject").hide();
	  

   }
});
$(document).on('change',"#addtypeoflogedit", function () {
   if ($(this).val() == "2") {
       $("#addtypeoflogprojectedit").show();
   } else {
       $("#addtypeoflogprojectedit").hide();
	  

   }
});


</script>


<script>
	
  $("#add-row").click(function(){
 
  var addtypelogactivityName = document.getElementById('addtypelogactivityName').value;

  if(addtypelogactivityName == ""){
    document.getElementById('addtypelogactivityName');
    return;
  }
 
  
  else{
    
    let table = document.getElementById('tableactivityname');
    // Insert a row at the end of the table
    let newRow = table.insertRow(-1);
    var l = table.rows.length-1;
    //Col 1 = addtypelogactivityName
    table.rows[l].insertCell(0);
    table.rows[l].cells[0].innerHTML = addtypelogactivityName;
   
    //Col 3 = Delete Button
    table.rows[l].insertCell(1);
    table.rows[l].cells[1].innerHTML = "<button type='button' class='btnDelete btn btn-danger btn-sm' onclick='delRow(this);' id='btnDelete' size='1' height='1'>Delete</button>";

    //Clear input
    
  
}
  });

function delRow(btn){
  var row = btn.parentNode.parentNode;
  row.parentNode.removeChild(row);
}
	
</script>
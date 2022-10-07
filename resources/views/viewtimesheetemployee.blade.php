<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>OrbitHRM </title>
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
	<link href="../assets/plugins/@fullcalendar/common/main.min.css" rel="stylesheet" />
	<link href="../assets/plugins/@fullcalendar/daygrid/main.min.css" rel="stylesheet" />
	<link href="../assets/plugins/@fullcalendar/timegrid/main.min.css" rel="stylesheet" />
	<link href="../assets/plugins/@fullcalendar/list/main.min.css" rel="stylesheet" />
	<link href="../assets/plugins/@fullcalendar/bootstrap/main.min.css" rel="stylesheet" />
	
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
			
			<!-- END breadcrumb -->
			<!-- BEGIN page-header -->
			<h1 class="page-header">Calendar <small>| Amanina Hassan</small></h1>
			<!-- END page-header -->
			
			
			<!-- BEGIN row -->
			<div class="row">
				<!-- BEGIN event-list -->
				
				<!-- END event-list -->
				<div class="col-lg">
					<!-- BEGIN calendar -->
					<div id="calendar" class="calendar"></div>
					<!-- END calendar -->
				</div>
			</div>
			<!-- END row -->
		</div>
		<!-- END #content -->
		
				<!-- MODAL VIEW LOG -->
				<div class="modal fade" id="editlogmodal" tabindex="-1" aria-hidden="true">
    		<div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">SELECTED DATE, Eg= 13/2/2022</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addChildrenForm">
                    <div class="row p-2">
					<table id="" class="table table-striped table-bordered align-middle">
				<thead>
					<tr>
						
						<th class="text-nowrap">Type of Log</th>
						<th class="text-nowrap">Date</th>
						<th class="text-nowrap">Start Time</th>
						<th class="text-nowrap">End Time</th>
						<th class="text-nowrap">Total Hours</th>


					</tr>
				</thead>
				<tbody>
					<tr class="odd gradeX">
						
						<td >Home</td>
						<td>13/02/2022</td>
						<td>12pm</td>
						<td>11pm</td>
						<td>1 hours</td>
					</tr>
					
					
				</tbody>
			</table>
                    </div>
					<div class="row p-2">
					<table id="" class="table table-striped table-bordered align-middle">
				<thead>
					<tr>
						<th class="text-nowrap">Office Log</th>
						<th class="text-nowrap">My Project</th>
						<th class="text-nowrap">Activity Name</th>
						<th class="text-nowrap">Project Location</th>
						


					</tr>
				</thead>
				<tbody>
					<tr class="odd gradeX">
						<td >-</td>
						<td >-</td>
						<td>Tidur</td>
						<td>ganu bossku</td>
						
					</tr>
					
					
				</tbody>
			</table>
                    </div>
					
                    
					

                    
                    <div class="row p-2">
                        <div class="col-sm-12">
                            <label for="Description" class="form-label">Description</label>
							<textarea class="form-control" readonly rows="5"></textarea>
                        </div>
                        
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
			
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                
            </div>
        </div>
    </div>
</div>
		<!--END MODAL EDIT LOG -->
		

		<!-- START MODAL EDIT EVENT -->
		<div class="modal fade" id="editeventmodal" tabindex="-1" aria-labelledby="add-children" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="">SELECTED DATE, Eg= 13/2/2022</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form id="">
								<div class="row p-2">
										<table id="" class="table table-striped table-bordered align-middle">
									<thead>
										<tr>
											
											<th class="text-nowrap">Event Name</th>
											<th class="text-nowrap">Start Date</th>
											<th class="text-nowrap">End Date</th>
											<th class="text-nowrap">Start Time</th>
											<th class="text-nowrap">End Time</th>
											<th class="text-nowrap">Duration</th>


										</tr>
									</thead>
									<tbody>
										<tr class="odd gradeX">
											
											<td >Weekly Scrum Meeting Project A</td>
											<td>13/02/2022</td>
											<td>22/02/2022</td>
											<td>14.30</td>
											<td>15.30</td>
											<td>1.00 hour</td>
										</tr>
										
										
									</tbody>
								</table>
										</div>
										<div class="row p-2">
											<table id="" class="table table-striped table-bordered align-middle">
										<thead>
											<tr>
												
												<th class="text-nowrap">Location</th>
												<th class="text-nowrap">Project</th>
												<th class="text-nowrap">Priority</th>
												<th class="text-nowrap">Recurring</th>
												


											</tr>
										</thead>
										<tbody>
											<tr class="odd gradeX">
												
												<td >Meeting Room</td>
												<td>Project A</td>
												<td>Medium</td>
												<td>Every Weekday (Mon-Fri)</td>
												
											</tr>
											
											
										</tbody>
									</table>
											</div>
									
									<div class="row p-2">
										
										<div class="col-sm-12">
										
											<label for="issuing-country" class="form-label">Description*</label>
											<textarea class="form-control" rows="3" readonly></textarea>
										</div>
									</div>

									<div class="row p-2">
										<div class="col-sm-2">
											<label for="firstname" class="form-label">Status: <td><span class="badge bg-lime rounded-pill">Attending</span></td></label>
											
										</div>
										<div class="col-sm-2">
											
											<label class="form-label">Attach File:</label><br>
											<a class="form-label" href="#">file.jpg</a><br>
											<a class="form-label" href="#">file.pdf</a>
											
										</div>
										<div class="col-sm-2">
											
										<label class="form-label">Reminder:</label>
										<label class="form-label">None</label>
										</div>
										
									</div>
									<div class="row p-2">
										
										
									</div>
								</form>
							</div>
							<div class="modal-footer">
								
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								
								
							</div>
						</div>
					</div>
				</div>
		<!-- START MODAL EDIT EVENT -->
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
	<script src="../assets/plugins/moment/min/moment.min.js"></script>
	<script src="../assets/plugins/@fullcalendar/core/main.global.js"></script>
	<script src="../assets/plugins/@fullcalendar/daygrid/main.global.js"></script>
	<script src="../assets/plugins/@fullcalendar/timegrid/main.global.js"></script>
	<script src="../assets/plugins/@fullcalendar/interaction/main.global.js"></script>
	<script src="../assets/plugins/@fullcalendar/list/main.global.js"></script>
	<script src="../assets/plugins/@fullcalendar/bootstrap/main.global.js"></script>
	
	<!-- ================== END page-js ================== -->
	<!-- required files -->
	<link href="../assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
	<script src="../assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	<!-- required files -->
	<link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
	<script src="/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	<!-- required files -->
	<link href="../assets/plugins/select-picker/dist/picker.min.css" rel="stylesheet" />
	<script src="../assets/plugins/select-picker/dist/picker.min.js"></script>
</body>
</html>

<script>
	var handleCalendarDemo = function() {
	// external events
	
  
  // fullcalendar
  
  var d = new Date();
	var month = d.getMonth() + 1;
	    month = (month < 10) ? '0' + month : month;
	var year = d.getFullYear();
	var day = d.getDate();
	var today = moment().startOf('day');
  	var calendarElm = document.getElementById('calendar');

	var calendar = new FullCalendar.Calendar(calendarElm, {
    headerToolbar: {
      left: 'prev,today,next',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
    },
	customButtons: {
        logButton: {
            text:'New Log',
            click:function(event, jsEvent, view){
                   $('#newlogmodal').modal('show');
          }
        },
		EventButton: {
            text:'New Event',
            click:function(event, jsEvent, view){
                   $('#neweventmodal').modal('show');
          }
        }
	},
	eventContent: function(eventInfo) {
		if (eventInfo.event.extendedProps.type=="log" && eventInfo.event.extendedProps.allday==true) {
			return { html: ('&nbsp;&nbsp;'+ eventInfo.event.extendedProps.type + eventInfo.event.title)}
		} 
		else if (eventInfo.event.extendedProps.type=="event" && eventInfo.event.extendedProps.allday==true) {
			return { html: ('&nbsp;&nbsp;'+ eventInfo.event.extendedProps.type + eventInfo.event.title)}
		} 
		else if (eventInfo.event.extendedProps.type=="event" && eventInfo.event.extendedProps.allday==false) {
			return { html: ('&nbsp;&nbsp;'+ eventInfo.event.extendedProps.type + eventInfo.event.title)}
		} 

	},

	
		eventClick: function(info) {
			info.jsEvent.preventDefault();

			
			
			if (info.event.extendedProps.type=="log") {
            $('#editlogmodal').modal('show');
			}
			else {
				$('#editeventmodal').modal('show');
			}
			
		},
    buttonText: {
    	today:    'Today',
			month:    'Month',
			week:     'Week',
			day:      'Day',
			list:     'List'
    },
    initialView: 'dayGridMonth',
    editable: false,
    droppable: false,
	selectable: false,
  	themeSystem: 'bootstrap',
		views: {
			timeGrid: {
				eventLimit: 6 // adjust to 6 only for timeGridWeek/timeGridDay
			}
		},
  	events: [{
			title: 'EXAMPLE Log',
			start: year + '-'+ month +'-02T06:00:00',
			color: app.color.primary,
			extendedProps: {
        			type: 'log',
					
      		}
			
			
		},{
			title: 'EXAMPLE LOG 2',
			start: year + '-'+ month +'-02T07:00:00',
			color: app.color.primary,
			extendedProps: {
        			type: 'log',
					
      		},
		},{
			
			title: 'EXAMPLE EVENT',
			start: year + '-'+ month +'-10',
			end: year + '-'+ month +'-12',
			color: app.color.red,
			extendedProps: {
        			type: 'event',
					allday: true
      		},
		},{
			title: 'EXAMPLE event 2',
			start: year + '-'+ month +'-10T01:00:00',
			color: app.color.red,
			extendedProps: {
        			type: 'event'
					
      		},
		}
			],
		
  });
  
	calendar.render();
};

var Calendar = function () {
	"use strict";
	return {
		//main function
		init: function () {
			handleCalendarDemo();
		}
	};
}();

$(document).ready(function() {
	Calendar.init();
});
</script>
<!-- FOR MODAL LOG AND EVENT -->
<script>
  $("#dateaddlog").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#starteventdate").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script><script>
  $("#endeventdate").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $('#projectlocsearch').picker({ search: true });
  $('#addneweventprojectlocsearch').picker({ search: true });
  $('#addneweventparticipant').picker({ search: true });
  $('#addneweventselectproject').picker({ search: true });
</script>
<script>
  $("#starttime").timepicker({
	showMeridian:false,

  });
  $("#endtime").timepicker({
	use24hours: true
  });
  $("#starteventtime").timepicker({
	use24hours: true
  });
  $("#endeventtime").timepicker({
	use24hours: true
  });
</script>

<script>
$(document).on('change',"#typeoflog", function () {
   if ($(this).val() == "2") {
       $("#officelog").show();
   } else {
       $("#officelog").hide();
	   $("#listproject").hide();

   }
});
$(document).on('change',"#typeoflog", function () {
   if ($(this).val() == "3") {
       $("#myproject").show();
   } else {
       $("#myproject").hide();
	   $("#listproject").hide();
   }
});
$(document).on('change',"#officelog2", function () {
   if ($(this).val() == "1") {
       $("#listproject").show();
   } else {
       $("#listproject").hide();
   }
});
$(document).on('change',"#addneweventselectrecurring", function () {
   if ($(this).val()== "1" ) {
       $("#addneweventsetreccurring").show();
	   $('#mon').not(this).prop('checked', true);
	   $('#tue').not(this).prop('checked', true);
	   $('#wed').not(this).prop('checked', true);
	   $('#thu').not(this).prop('checked', true);
	   $('#fri').not(this).prop('checked', true);
   } else {
       $("#addneweventsetreccurring").hide();
	   $('#mon').not(this).prop('checked', false);
	   $('#tue').not(this).prop('checked', false);
	   $('#wed').not(this).prop('checked', false);
	   $('#thu').not(this).prop('checked', false);
	   $('#fri').not(this).prop('checked', false);
	   
   }
});
$(document).on('change',"#addneweventselectrecurring", function () {
   if ($(this).val()== "1" || $(this).val() == '2' || $(this).val() == '3') {
       $("#addneweventsetreccurring").show();

   } else {
       $("#addneweventsetreccurring").hide();
	   
	   
   }
});
$(document).on('change',"#addneweventselectrecurring", function () {
   if ($(this).val()== "4" ) {
       $("#setrecurringmontly").show();
	   $("#setrecurringonmontly").show();
   } else {
       $("#setrecurringmontly").hide();
	   $("#setrecurringonmontly").hide();
	   
   }
});
$(document).on('change',"#addneweventselectrecurring", function () {
   if ($(this).val()== "5" ) {
       $("#setrecurringyearly").show();
	   $("#setrecurringontheyearly").show();
	  
   } else {
       $("#setrecurringyearly").hide();
	   $("#setrecurringontheyearly").hide();
	   
   }
});
</script>
<script type="text/javascript">
   $().ready = function() {
    
    
    $("#addreminder").click(function() {
        $('#addeventreminder').toggle();
    });

}();
</script>
<script>

$("#addeventrecurring").click(function() {
    if($(this).is(":checked")) {
        $("#addneweventrecurring").show();
    } else {
        $("#addneweventrecurring").hide();
		$("#addneweventsetreccurring").hide();
		$("#setrecurringyearly").hide();
	   $("#setrecurringontheyearly").hide();
	   $("#setrecurringmontly").hide();
	   $("#setrecurringonmontly").hide();
    }
});

$("#ondaycheck").click(function() {
    if($(this).is(":checked")) {
        $("#ondayselect").show();
		$('#onthecheck').not(this).prop('checked', false);
		$("#recurringselectwhatday").hide();
		$("#recurringselectonthe").hide();
    } else {
        $("#ondayselect").hide();
	
		
    }
});
$("#onthecheck").click(function() {
    if($(this).is(":checked")) {
        $("#recurringselectwhatday").show();
		$("#recurringselectonthe").show();
		$('#ondaycheck').not(this).prop('checked', false);
		$("#ondayselect").hide();
    } else {
        $("#recurringselectwhatday").hide();
		$("#recurringselectonthe").hide();
		
    }
});
$("#ondayyearlycheck").click(function() {
    if($(this).is(":checked")) {
        $("#recurringmonthyearly").show();
		$("#recurringdayyearly").show();
		$('#ontheyearlycheck').not(this).prop('checked', false);
		$("#recurringselectyearly").hide();
		$("#recurringonthedayyearly").hide();
		$("#recurringonthemonthyearly").hide();
		$("#recurringontheof").hide();
		// $('#ondaycheck').not(this).prop('checked', false);
		// $("#ondayselect").hide();
    } else {
        $("#recurringmonthyearly").hide();
		$("#recurringdayyearly").hide();
		
    }
});
$("#ontheyearlycheck").click(function() {
    if($(this).is(":checked")) {
        $("#recurringselectyearly").show();
		$("#recurringonthedayyearly").show();
		$("#recurringonthemonthyearly").show();
		$("#recurringontheof").show();
		$('#ondayyearlycheck').not(this).prop('checked', false);
		$("#recurringmonthyearly").hide();
		$("#recurringdayyearly").hide();
		
    } else {
        $("#recurringselectyearly").hide();
		$("#recurringonthedayyearly").hide();
		$("#recurringonthemonthyearly").hide();
		$("#recurringontheof").hide();
    }
});
</script>
<!-- END MODAL LOG AND EVENT JS-->

<!-- START EDIT MODAL LOG AND EVENT JS-->
<script>
  $("#dateaddlogedit").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#starteventdateedit").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script><script>
  $("#endeventdateedit").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $('#projectlocsearchedit').picker({ search: true });
  $('#addneweventprojectlocsearchedit').picker({ search: true });
  $('#addneweventparticipantedit').picker({ search: true });
  $('#addneweventselectprojectedit').picker({ search: true });
</script>
<script>
  $("#starttimeedit").timepicker({
	use24hours: true
  });
  $("#endtimeedit").timepicker({
	use24hours: true
  });
  $("#starteventtimeedit").timepicker({
	use24hours: true
  });
  $("#endeventtimeedit").timepicker({
	use24hours: true
  });
</script>

<script>
$(document).on('change',"#typeoflogedit", function () {
   if ($(this).val() == "2") {
       $("#officelogedit").show();
   } else {
       $("#officelogedit").hide();
	   $("#listprojectedit").hide();

   }
});
$(document).on('change',"#typeoflogedit", function () {
   if ($(this).val() == "3") {
       $("#myprojectedit").show();
   } else {
       $("#myprojectedit").hide();
	   $("#listprojectedit").hide();
   }
});
$(document).on('change',"#officelog2edit", function () {
   if ($(this).val() == "1") {
       $("#listprojectedit").show();
   } else {
       $("#listprojectedit").hide();
   }
});
$(document).on('change',"#addneweventselectrecurringedit", function () {
   if ($(this).val()== "1" ) {
       $("#addneweventsetreccurringedit").show();
	   $('#monedit').not(this).prop('checked', true);
	   $('#tueedit').not(this).prop('checked', true);
	   $('#wededit').not(this).prop('checked', true);
	   $('#thuedit').not(this).prop('checked', true);
	   $('#friedit').not(this).prop('checked', true);
   } else {
       $("#addneweventsetreccurringedit").hide();
	   $('#monedit').not(this).prop('checked', false);
	   $('#tueedit').not(this).prop('checked', false);
	   $('#wededit').not(this).prop('checked', false);
	   $('#thuedit').not(this).prop('checked', false);
	   $('#friedit').not(this).prop('checked', false);
	   
   }
});
$(document).on('change',"#addneweventselectrecurringedit", function () {
   if ($(this).val()== "1" || $(this).val() == '2' || $(this).val() == '3') {
       $("#addneweventsetreccurringedit").show();

   } else {
       $("#addneweventsetreccurringedit").hide();
	   
	   
   }
});
$(document).on('change',"#addneweventselectrecurringedit", function () {
   if ($(this).val()== "4" ) {
       $("#setrecurringmontlyedit").show();
	   $("#setrecurringonmontlyedit").show();
   } else {
       $("#setrecurringmontlyedit").hide();
	   $("#setrecurringonmontlyedit").hide();
	   
   }
});
$(document).on('change',"#addneweventselectrecurringedit", function () {
   if ($(this).val()== "5" ) {
       $("#setrecurringyearlyedit").show();
	   $("#setrecurringontheyearlyedit").show();
	  
   } else {
       $("#setrecurringyearlyedit").hide();
	   $("#setrecurringontheyearlyedit").hide();
	   
   }
});
</script>
<script type="text/javascript">
   $().ready = function() {
    
    
    $("#addreminderedit").click(function() {
        $('#addeventreminderedit').toggle();
    });

}();
</script>
<script>

$("#addeventrecurringedit").click(function() {
    if($(this).is(":checked")) {
        $("#addneweventrecurringedit").show();
    } else {
        $("#addneweventrecurringedit").hide();
		$("#addneweventsetreccurringedit").hide();
		$("#setrecurringyearlyedit").hide();
	   $("#setrecurringontheyearlyedit").hide();
	   $("#setrecurringmontlyedit").hide();
	   $("#setrecurringonmontlyedit").hide();
    }
});

$("#ondaycheckedit").click(function() {
    if($(this).is(":checked")) {
        $("#ondayselectedit").show();
		$('#onthecheckedit').not(this).prop('checked', false);
		$("#recurringselectwhatdayedit").hide();
		$("#recurringselectontheedit").hide();
    } else {
        $("#ondayselectedit").hide();
	
		
    }
});
$("#onthecheckedit").click(function() {
    if($(this).is(":checked")) {
        $("#recurringselectwhatdayedit").show();
		$("#recurringselectontheedit").show();
		$('#ondaycheckedit').not(this).prop('checked', false);
		$("#ondayselectedit").hide();
    } else {
        $("#recurringselectwhatdayedit").hide();
		$("#recurringselectontheedit").hide();
		
    }
});
$("#ondayyearlycheckedit").click(function() {
    if($(this).is(":checked")) {
        $("#recurringmonthyearlyedit").show();
		$("#recurringdayyearlyedit").show();
		$("#ontheyearlycheckedit").not(this).prop('checked', false);
		$("#recurringselectyearlyedit").hide();
		$("#recurringonthedayyearlyedit").hide();
		$("#recurringonthemonthyearlyedit").hide();
		$("#recurringontheofedit").hide();
		// $('#ondaycheck').not(this).prop('checked', false);
		// $("#ondayselect").hide();
    } else {
        $("#recurringmonthyearlyedit").hide();
		$("#recurringdayyearlyedit").hide();
		
    }
});
$("#ontheyearlycheckedit").click(function() {
    if($(this).is(":checked")) {
        $("#recurringselectyearlyedit").show();
		$("#recurringonthedayyearlyedit").show();
		$("#recurringonthemonthyearlyedit").show();
		$("#recurringontheofedit").show();
		$('#ondayyearlycheckedit').not(this).prop('checked', false);
		$("#recurringmonthyearlyedit").hide();
		$("#recurringdayyearlyedit").hide();
		
    } else {
        $("#recurringselectyearlyedit").hide();
		$("#recurringonthedayyearlyedit").hide();
		$("#recurringonthemonthyearlyedit").hide();
		$("#recurringontheofedit").hide();
    }
});
</script>
<!-- END EDIT MODAL LOG AND EVENT JS-->
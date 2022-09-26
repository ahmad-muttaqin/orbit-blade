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
                                <a href="ui_general.html" class="menu-link">
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
			<h1 class="page-header">Calendar</h1>
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
		<!-- MODAL ADD LOG -->
		<div class="modal fade" id="newlogmodal" tabindex="-1" aria-labelledby="add-children" aria-hidden="true">
    		<div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newlogmodal">Add New Logs</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addChildrenForm">
                    <div class="row p-2">
                        <div class="col-sm-6">
                            <label for="firstname" class="form-label">Type Of Log*</label>
							<select class="form-select" id="typeoflog" aria-label="Default select example">
							<option class="form-label" value="" selected>Please Select</option>
							<option class="form-label" value="1">Home</option>
							<option class="form-label" value="2">Office</option>
							<option class="form-label" value="3">My Project</option>
							<option class="form-label" value="4">Others</option>
							</select>
                            
                        </div>
                        <div class="col-sm-6">
                            <label for="lastname" class="form-label">Date*</label>
							<div class="input-group">
                            <input type="text" class="form-control" id="dateaddlog" />
							<div class="input-group-text"><i class="fa fa-calendar"></i></div>
					  	 </div>
						 </div>
                    </div>
					<div class="row p-2">
						<div class="col-sm-6" id="officelog" style="display:none">
                            <label for="Office-Log" class="form-label">Office Log</label>
                            <select class="form-select" id="officelog2" aria-label="Default select example">
							<option class="form-label" value="" selected>Please Select</option>
							<option class="form-label" value="1">My Project</option>
							<option class="form-label" value="2">Activity</option>
							
							</select>
                        </div>
						<div class="col-sm-6" id="myproject" style="display:none">
                            <label for="Office-Log" class="form-label">My Project</label>
                            <select class="form-select" id="" aria-label="Default select example">
							<option class="form-label" value="" selected>List all project</option>
							
							
							</select>
                        </div>
                    </div>
					<div class="row p-2">
						<div class="col-sm-6" id="listproject" style="display:none">
                            <label for="Office-Log" class="form-label">My Project</label>
                            <select class="form-select" id="" aria-label="Default select example">
							<option class="form-label" value="" selected>List All Project</option>
							
							
							</select>
                        </div>
                    </div>
                    <div class="row p-2">
						<div class="col-sm-6">
                            <label for="issuing-country" class="form-label">Activity Name</label>
                            <select class="form-select" id="" >
							<option class="form-label" value="" selected>List All Activity Name</option>
							
							
							</select>
                        </div>
						
                        <div class="col-sm-6">
						<label for="issuing-country" class="form-label">End Time</label>  
						<div class="input-group">
						<input id="starttime" type="text" class="form-control" />
						<div class="input-group-text"><i class="fa fa-clock"></i></div>
						</div>	
                        </div>
                    </div>

					

                    <div class="row p-2">
                        <div class="col-sm-6">
						
                            <label for="issuing-country" class="form-label">Project Location</label>
                            <select class="selectpicker form-select" id="projectlocsearch" aria-label="Default select example">
							<option class="form-label" value="" selected>List All Project location</option>
							
							
							</select>
                       
                        </div>
						<div class="col-sm-6 ">
						
                           <label for="issuing-country" class="form-label">End Time</label>
						   <div class="input-group">
						   <input id="endtime" type="text" class="form-control" />
						   <div class="input-group-text"><i class="fa fa-clock"></i></div>
					   </div>
					   </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-sm-6">
                            <label for="gender" class="form-label">Description</label>
							<textarea class="form-control" rows="5"></textarea>
                        </div>
                        <div class="col-sm-6">
                           
                            <label for="issuing-country" class="form-label">Total Hours</label>
                            <input type="text" readonly id="" value="Auto calculate (End time - Start time), default 00:00" name="" class="form-control" aria-describedby="dob">
                       		
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="addChildren">Save</button>
            </div>
        </div>
    </div>
</div>
		<!-- MODAL ADD LOG -->
				<!-- MODAL ADD LOG -->
				<div class="modal fade" id="editlogmodal" tabindex="-1" aria-hidden="true">
    		<div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">View | Update Logs</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addChildrenForm">
                    <div class="row p-2">
                        <div class="col-sm-6">
                            <label for="firstname" class="form-label">Type Of Log*</label>
							<select class="form-select" id="typeoflogedit" aria-label="Default select example">
							<option class="form-label" value="" selected>Please Select</option>
							<option class="form-label" value="1">Home</option>
							<option class="form-label" value="2">Office</option>
							<option class="form-label" value="3">My Project</option>
							<option class="form-label" value="4">Others</option>
							</select>
                            
                        </div>
                        <div class="col-sm-6">
                            <label for="lastname" class="form-label">Date*</label>
							<div class="input-group">
                            <input type="text" class="form-control" id="dateaddlogedit" />
							<div class="input-group-text"><i class="fa fa-calendar"></i></div>
					  	 </div>
						 </div>
                    </div>
					<div class="row p-2">
						<div class="col-sm-6" id="officelogedit" style="display:none">
                            <label for="Office-Log" class="form-label">Office Log</label>
                            <select class="form-select" id="officelog2edit" aria-label="Default select example">
							<option class="form-label" value="" selected>Please Select</option>
							<option class="form-label" value="1">My Project</option>
							<option class="form-label" value="2">Activity</option>
							
							</select>
                        </div>
						<div class="col-sm-6" id="myprojectedit" style="display:none">
                            <label for="Office-Log" class="form-label">My Project</label>
                            <select class="form-select" id="" aria-label="Default select example">
							<option class="form-label" value="" selected>List all project</option>
							
							
							</select>
                        </div>
                    </div>
					<div class="row p-2">
						<div class="col-sm-6" id="listprojectedit" style="display:none">
                            <label for="Office-Log" class="form-label">My Project</label>
                            <select class="form-select" id="" aria-label="Default select example">
							<option class="form-label" value="" selected>List All Project</option>
							
							
							</select>
                        </div>
                    </div>
                    <div class="row p-2">
						<div class="col-sm-6">
                            <label for="issuing-country" class="form-label">Activity Name</label>
                            <select class="form-select" id="" >
							<option class="form-label" value="" selected>List All Activity Name</option>
							
							
							</select>
                        </div>
						
                        <div class="col-sm-6">
						<label for="issuing-country" class="form-label">End Time</label>  
						<div class="input-group">
						<input id="starttimeedit" type="text" class="form-control" />
						<div class="input-group-text"><i class="fa fa-clock"></i></div>
						</div>	
                        </div>
                    </div>

					

                    <div class="row p-2">
                        <div class="col-sm-6">
						
                            <label for="issuing-country" class="form-label">Project Location</label>
                            <select class="selectpicker form-select" id="projectlocsearch" aria-label="Default select example">
							<option class="form-label" value="" selected>List All Project location</option>
							
							
							</select>
                       
                        </div>
						<div class="col-sm-6 ">
						
                           <label for="issuing-country" class="form-label">End Time</label>
						   <div class="input-group">
						   <input id="endtimeedit" type="text" class="form-control" />
						   <div class="input-group-text"><i class="fa fa-clock"></i></div>
					   </div>
					   </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-sm-6">
                            <label for="gender" class="form-label">Description</label>
							<textarea class="form-control" rows="5"></textarea>
                        </div>
                        <div class="col-sm-6">
                           
                            <label for="issuing-country" class="form-label">Total Hours</label>
                            <input type="text" readonly id="" value="Auto calculate (End time - Start time), default 00:00" name="" class="form-control" aria-describedby="dob">
                       		
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
			<button type="button" class="btn btn-danger" >Delete</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <had type="button" class="btn btn-primary formSave" id="addChildren">Save</had>
            </div>
        </div>
    </div>
</div>
		<!--END MODAL EDIT LOG -->
		<!--START MODAL ADD EVENT -->
		<div class="modal fade" id="neweventmodal" tabindex="-1" aria-labelledby="add-children" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="newlogmodal">Add New Event</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form id="addChildrenForm">
								<div class="row p-2">
										<div class="col-sm-12">
											<label for="firstname" class="form-label">Event Name*</label>
											<input type="text" class="form-control" id="" />
											
										</div>
										
									</div>
									<div class="row p-2">
									<div class="col-sm-6">
											<label for="lastname" class="form-label">Start Date*</label>
											<div class="input-group">
											<input type="text" class="form-control" id="starteventdate" />
											<div class="input-group-text"><i class="fa fa-calendar"></i></div>
										</div>
										</div>
										<div class="col-sm-6">
											<label for="lastname" class="form-label">End Date*</label>
											<div class="input-group">
											<input type="text" class="form-control" id="endeventdate" />
											<div class="input-group-text"><i class="fa fa-calendar"></i></div>
										</div>
										</div>
									</div>
									
									
									<div class="row p-2">
									<div class="col-sm-6">
										<label for="issuing-country" class="form-label">Start Time*</label>  
										<div class="input-group">
										<input id="starteventtime" type="text" class="form-control" value="00:00 AM"/>
										<div class="input-group-text"><i class="fa fa-clock"></i></div>
										</div>	
										</div>
										
										<div class="col-sm-6">
										<label for="issuing-country" class="form-label">End Time*</label>  
										<div class="input-group">
										<input id="endeventtime" type="text" class="form-control" value="00:00 AM"/>
										<div class="input-group-text"><i class="fa fa-clock"></i></div>
										</div>	
										</div>
									</div>

									

									<div class="row p-2">
										<div class="col-sm-3">
										
											<label for="issuing-country" class="form-label">Duration</label>
											<select class="form-select" id="" aria-label="Default select example">
											<option class="form-label" value="" selected>Please Select</option>
											<option class="form-label" value="1">30 Minute</option>
											<option class="form-label" value="2">1 Hour</option>
											<option class="form-label" value="3">1 Hour 30 Minute</option>
											<option class="form-label" value="4">2 Hour</option>
											<option class="form-label" value="5">2 Hour 30 Minute</option>
											<option class="form-label" value="6">3 Hour</option>
											</select>
									
										</div>
										<div class="col-sm-3">
										
										<div style="padding-top:20px;">
										<div class="form-check form-check-inline">
										<input class="form-check-input"  type="checkbox"  name="inlineRadioOptions" >
										<label class="form-label" id="addeventallday">All Day</label>
										</div>
										<div class="form-check form-check-inline">
										<input class="form-check-input" id="addeventrecurring" type="checkbox"  name="inlineRadioOptions" >
										<label class="form-label" >Recurring</label>
										</div>
										
										</div>
										</div>

										<div class="col-sm-6 ">
										
										<label for="issuing-country" class="form-label">Priority</label>
										<div style="padding-top:10px;">
										<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
										<label class="form-label" for="inlineRadio1">Low</label>
										</div>
										<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
										<label class="form-label" for="inlineRadio2">Medium</label>
										</div>
										<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
										<label class="form-label" for="inlineRadio3">High</label>
										</div>
										</div>
										
									</div>
									</div>
									<div class="row p-2">
										<div class="col-sm-6" id="addneweventrecurring" style="display:none">
											<label for="firstname" class="form-label">Recurring*</label>
											<select class="form-select" id="addneweventselectrecurring" aria-label="Default select example">
											<option class="form-label" value="" selected>Please Select</option>
											<option class="form-label" value="1">Every Weekday</option>
											<option class="form-label" value="2">Daily</option>
											<option class="form-label" value="3">Weekly</option>
											<option class="form-label" value="4">Monthly</option>
											<option class="form-label" value="5">Yearly</option>
											</select>
										</div>
										
									</div>
									
									<div class="row p-2">
										<div class="col-sm-6" id="addneweventsetreccurring" style="display: none">
										<label for="firstname" class="form-label">Set Reccurrence*</label>
										<div class="form-check form-check-inline">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="sun" value="sunday">
											<label class="form-label" for="inlineCheckbox1">Sun</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="mon" value="monday">
											<label class="form-label" for="inlineCheckbox2">Mon</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="tue" value="tuesday">
											<label class="form-label" for="inlineCheckbox3">Tue</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="wed" value="wednesday">
											<label class="form-label" for="inlineCheckbox3">Wed</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="thu" value="thursday">
											<label class="form-label" for="inlineCheckbox3">Thu</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="fri" value="friday">
											<label class="form-label" for="inlineCheckbox3">Fri</label>
										</div>&nbsp;&nbsp;&nbsp;&nbsp;
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="sat" value="saturday">
											<label class="form-label" for="inlineCheckbox3">Sat</label>
										</div>
										</div>
										</div>
										
									</div>
									<div class="row p-2" id="setrecurringmontly" style="display:none">
										
										<div class="col-sm-3">
												<label for="issuing-country" class="form-label">Set Reccurrence</label><br>
											<div class="form-control">
												<div class="form-check">
													<input class="form-check-input" id="ondaycheck" type="checkbox"   >
													<label class="form-check-label" >On Day</label>
												</div>
											</div>
										</div>

										<div class="col-sm-3" id="ondayselect" style="display:none">
											
											<label for="" class="form-label">&nbsp;</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option class="form-label" value="" selected>Please Select</option>
												<option class="form-label" value="1">1 </option>
												<option class="form-label" value="2">2</option>
												<option class="form-label" value="3">3 </option>
												<option class="form-label" value="4">4</option>
												<option class="form-label" value="5">5 </option>
												<option class="form-label" value="6">6</option>
												<option class="form-label" value="7">7 </option>
												<option class="form-label" value="8">8</option>
												<option class="form-label" value="9">9 </option>
												<option class="form-label" value="10">10</option>
												<option class="form-label" value="11">11</option>
												<option class="form-label" value="12">12</option>
												<option class="form-label" value="13">13</option>
												<option class="form-label" value="14">14</option>
												<option class="form-label" value="15">15</option>
												<option class="form-label" value="16">16</option>
												<option class="form-label" value="17">17</option>
												<option class="form-label" value="18">18</option>
												<option class="form-label" value="19">19</option>
												<option class="form-label" value="20">20</option>
												<option class="form-label" value="21">21</option>
												<option class="form-label" value="22">22</option>
												<option class="form-label" value="23">23</option>
												<option class="form-label" value="24">24</option>
												<option class="form-label" value="25">25</option>
												<option class="form-label" value="26">26</option>
												<option class="form-label" value="27">27</option>
												<option class="form-label" value="28">28</option>
												
											</select>
										
										</div>
									
									</div>
									<div class="row p-2" id="setrecurringyearly" style="display:none">
										
										<div class="col-sm-3">
												<label for="issuing-country" class="form-label">Set Reccurrence</label><br>
											<div class="form-control">
												<div class="form-check">
													<input class="form-check-input" id="ondayyearlycheck" type="checkbox"  name="inlineRadioOptions" >
													<label class="form-check-label" >On</label>
												</div>
											</div>
										</div>

										<div class="col-sm-3" id="recurringmonthyearly" style="display:none">
											
											<label for="" class="form-label">Month</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option class="form-label" value="" selected>Please Select</option>
												<option class="form-label" value="1">January</option>
												<option class="form-label" value="2">February</option>
												<option class="form-label" value="3">March</option>
												<option class="form-label" value="4">April</option>
												<option class="form-label" value="5">May</option>
												<option class="form-label" value="6">Jun</option>
												<option class="form-label" value="7">July</option>
												<option class="form-label" value="8">August</option>
												<option class="form-label" value="9">September</option>
												<option class="form-label" value="10">October</option>
												<option class="form-label" value="11">November</option>
												<option class="form-label" value="12">December</option>
											</select>
										
										</div>
										<div class="col-sm-3" id="recurringdayyearly" style="display:none">
											
											<label for="" class="form-label">Day</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option class="form-label" value="" selected>Please Select</option>
												<option class="form-label" value="1">1 </option>
												<option class="form-label" value="2">2</option>
												<option class="form-label" value="31">31</option>
											</select>
										
										</div>
									</div>
									<div class="row p-2" id="setrecurringontheyearly" style="display:none">
										
										<div class="col-sm-3">
												<label for="issuing-country" class="form-label">Set Reccurrence Yearly*</label><br>
											<div class="form-control">
												<div class="form-check">
													<input class="form-check-input" id="ontheyearlycheck" type="checkbox"  name="inlineRadioOptions" >
													<label class="form-check-label" >On The</label>
												</div>
											</div>
										</div>

										<div class="col-sm-3" id="recurringselectyearly" style="display:none">
											
											<label for="" class="form-label">&nbsp;</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option class="form-label" value="" selected>Please Select</option>
												<option class="form-label" value="1">First</option>
												<option class="form-label" value="2">Second</option>
												<option class="form-label" value="3">Third</option>
												<option class="form-label" value="4">Fourth</option>
											</select>
										
										</div>
										<div class="col-sm-2" id="recurringonthedayyearly" style="display:none">
											
											<label for="" class="form-label">&nbsp;</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option class="form-label" value="" selected>Please Select</option>
												<option class="form-label" value="1">Sunday </option>
												<option class="form-label" value="2">Monday</option>
												<option class="form-label" value="3">Tuesday</option>
												<option class="form-label" value="4">Wednesday</option>
												<option class="form-label" value="5">Thursday</option>
												<option class="form-label" value="6">Friday</option>
												<option class="form-label" value="7">Saturday</option>
											</select>
										
										</div>
										<div class="col-sm-1" id="recurringontheof" style="padding-top:30px;display:none" >
										
											
												<label for="" class="form-label" >&nbsp;of</label>
												
										</div>
										<div class="col-sm-3" id="recurringonthemonthyearly" style="display:none">
											
											<label for="" class="form-label">&nbsp;</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option class="form-label" value="" selected>Please Select</option>
												<option class="form-label" value="1">January </option>
												<option class="form-label" value="2">February</option>
												<option class="form-label" value="3">March</option>
												<option class="form-label" value="4">May</option>
												<option class="form-label" value="5">Jun</option>
												<option class="form-label" value="6">July</option>
												<option class="form-label" value="7">August</option>
											</select>
										
										</div>
									</div>
									<div class="row p-2" id="setrecurringonmontly" style="display:none">
										
										<div class="col-sm-3">
												<label for="issuing-country" class="form-label">Set Reccurrence</label><br>
											<div class="form-control">
												<div class="form-check">
													<input class="form-check-input" id="onthecheck" type="checkbox"  name="inlineRadioOptions" >
													<label class="form-check-label" >On The</label>
												</div>
											</div>
										</div>

										<div class="col-sm-3" id="recurringselectonthe" style="display:none">
											
											<label for="" class="form-label">&nbsp;</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option class="form-label" value="" selected>Please Select</option>
												<option class="form-label" value="1">First </option>
												<option class="form-label" value="2">Second</option>
												<option class="form-label" value="3">Third</option>
												<option class="form-label" value="4">Fourth</option>
											</select>
										
										</div>
										<div class="col-sm-4" id="recurringselectwhatday" style="display:none">
											
											<label for="" class="form-label">&nbsp;</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option class="form-label" value="" selected>Please Select</option>
												<option class="form-label" value="1">Sunday </option>
												<option class="form-label" value="2">Monday</option>
												<option class="form-label" value="3">Tuesday</option>
												<option class="form-label" value="4">Wednesday</option>
												<option class="form-label" value="5">Thursday</option>
												<option class="form-label" value="6">Friday</option>
												<option class="form-label" value="7">Saturday</option>
											</select>
										
										</div>
									
									</div>
									<div class="row p-2">
										<div class="col-sm-6">
											<label for="firstname" class="form-label">Location*</label>
											<select class="selectpicker form-select" id="addneweventprojectlocsearch" aria-label="Default select example">
											<option class="form-label" value="" selected>Please Select</option>
											<option class="form-label" value="1">Location A</option>
											<option class="form-label" value="2">Location B</option>
											
											</select>
										</div>
										<div class="col-sm-6">
										
											<label for="issuing-country" class="form-label">Project*</label>
											<select class="selectpicker form-select" id="addneweventselectproject" aria-label="Default select example">
											<option class="form-label" value="" selected>Please Select</option>
											<option class="form-label" value="1">Project A</option>
											<option class="form-label" value="2">Project B</option>
											
											</select>
										</div>
									</div>
									<div class="row p-2">
										<div class="col-sm-6">
											<label for="firstname" class="form-label">Participant*</label>
											<select class="selectpicker form-select" id="addneweventparticipant" aria-label="Default select example" multiple>
											<option class="form-label" value="">Please Select</option>
											<option class="form-label" value="1">Participant A</option>
											<option class="form-label" value="2">Participant B</option>
											
											</select>
										</div>
										<div class="col-sm-6">
										
											<label for="issuing-country" class="form-label">Description*</label>
											<textarea class="form-control" rows="3"></textarea>
										</div>
									</div>

									<div class="row p-2">
										<div class="col-sm-2">
											
											<button type="button" id="addreminder" class="btn btn-primary btn-xs">Add Reminder</button>
											
										</div>
										<div class="col-sm-4">
											
											<select class="form-select" id="addeventreminder" aria-label="Default select example" style="display: none">
											<option class="form-label" value="" selected>Please Select</option>
											<option class="form-label" value="1">5 Minute Before</option>
											<option class="form-label" value="2">10 Minute Before</option>
											<option class="form-label" value="1">15 Minute Before</option>
											<option class="form-label" value="2">20 Minute Before</option>
											<option class="form-label" value="1">30 Minute Before</option>
											<option class="form-label" value="1">1 Hour Before</option>
											</select>
											
										</div>
									</div>
									<div class="row p-2">
										<div class="col-sm-6">
											
											<label for="issuing-country" class="form-label">Attach File:</label>
											<input type="file" class="btn"></input>
										</div>
										
									</div>
								</form>
							</div>
							<div class="modal-footer">
								
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary" id="">Save</button>
								
							</div>
						</div>
					</div>
				</div>
		<!-- END MODAL ADD EVENT -->

		<!-- START MODAL EDIT EVENT -->
		<div class="modal fade" id="editeventmodal" tabindex="-1" aria-labelledby="add-children" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="">View | Update  Event</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form id="">
								<div class="row p-2">
										<div class="col-sm-12">
											<label for="firstname" class="form-label">Event Name*</label>
											<input type="text" class="form-control" id="" />
											
										</div>
										
									</div>
									<div class="row p-2">
									<div class="col-sm-6">
											<label for="lastname" class="form-label">Start Date*</label>
											<div class="input-group">
											<input type="text" class="form-control" id="starteventdateedit" />
											<div class="input-group-text"><i class="fa fa-calendar"></i></div>
										</div>
										</div>
										<div class="col-sm-6">
											<label for="lastname" class="form-label">End Date*</label>
											<div class="input-group">
											<input type="text" class="form-control" id="endeventdateedit" />
											<div class="input-group-text"><i class="fa fa-calendar"></i></div>
										</div>
										</div>
									</div>
									
									
									<div class="row p-2">
									<div class="col-sm-6">
										<label for="issuing-country" class="form-label">Start Time*</label>  
										<div class="input-group">
										<input id="starteventtimeedit" type="text" class="form-control" value="00:00 AM"/>
										<div class="input-group-text"><i class="fa fa-clock"></i></div>
										</div>	
										</div>
										
										<div class="col-sm-6">
										<label for="issuing-country" class="form-label">End Time*</label>  
										<div class="input-group">
										<input id="endeventtimeedit" type="text" class="form-control" value="00:00 AM"/>
										<div class="input-group-text"><i class="fa fa-clock"></i></div>
										</div>	
										</div>
									</div>

									

									<div class="row p-2">
										<div class="col-sm-3">
										
											<label for="issuing-country" class="form-label">Duration</label>
											<select class="form-select" id="" aria-label="Default select example">
											<option class="form-label" value="" selected>Please Select</option>
											<option class="form-label" value="1">30 Minute</option>
											<option class="form-label" value="2">1 Hour</option>
											<option class="form-label" value="3">1 Hour 30 Minute</option>
											<option class="form-label" value="4">2 Hour</option>
											<option class="form-label" value="5">2 Hour 30 Minute</option>
											<option class="form-label" value="6">3 Hour</option>
											
											</select>
									
										</div>
										<div class="col-sm-3">
										
										<div style="padding-top:20px;">
										<div class="form-check form-check-inline">
										<input class="form-check-input"  type="checkbox"  name="inlineRadioOptions" >
										<label class="form-label" id="addeventalldayedit">All Day</label>
										</div>
										<div class="form-check form-check-inline">
										<input class="form-check-input" id="addeventrecurringedit" type="checkbox"  name="inlineRadioOptions" >
										<label class="form-label" >Recurring</label>
										</div>
										
										</div>
										</div>

										<div class="col-sm-6 ">
										
										<label for="issuing-country" class="form-label">Priority</label>
										<div style="padding-top:10px;">
										<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
										<label class="form-label" for="inlineRadio1">Low</label>
										</div>
										<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
										<label class="form-label" for="inlineRadio2">Medium</label>
										</div>
										<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
										<label class="form-label" for="inlineRadio3">High</label>
										</div>
										</div>
										
									</div>
									</div>
									<div class="row p-2">
										<div class="col-sm-6" id="addneweventrecurringedit" style="display:none">
											<label for="firstname" class="form-label">Recurring*</label>
											<select class="form-select" id="addneweventselectrecurringedit" aria-label="Default select example">
											<option class="form-label" value="" selected>Please Select</option>
											<option class="form-label" value="1">Every Weekday</option>
											<option class="form-label" value="2">Daily</option>
											<option class="form-label" value="3">Weekly</option>
											<option class="form-label" value="4">Monthly</option>
											<option class="form-label" value="5">Yearly</option>
											</select>
										</div>
										
									</div>
									
									<div class="row p-2">
										<div class="col-sm-6" id="addneweventsetreccurringedit" style="display: none">
										<label for="firstname" class="form-label">Set Reccurrence*</label>
										<div class="form-check form-check-inline">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="sunedit" value="sunday">
											<label class="form-label" for="inlineCheckbox1">Sun</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="monedit" value="monday">
											<label class="form-label" for="inlineCheckbox2">Mon</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="tueedit" value="tuesday">
											<label class="form-label" for="inlineCheckbox3">Tue</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="wededit" value="wednesday">
											<label class="form-label" for="inlineCheckbox3">Wed</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="thuedit" value="thursday">
											<label class="form-label" for="inlineCheckbox3">Thu</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="friedit" value="friday">
											<label class="form-label" for="inlineCheckbox3">Fri</label>
										</div>&nbsp;&nbsp;&nbsp;&nbsp;
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="satedit" value="saturday">
											<label class="form-label" for="inlineCheckbox3">Sat</label>
										</div>
										</div>
										</div>
										
									</div>
									<div class="row p-2" id="setrecurringmontlyedit" style="display:none">
										
										<div class="col-sm-3">
												<label for="issuing-country" class="form-label">Set Reccurrence</label><br>
											<div class="form-control">
												<div class="form-check">
													<input class="form-check-input" id="ondaycheckedit" type="checkbox"   >
													<label class="form-check-label" >On Day</label>
												</div>
											</div>
										</div>

										<div class="col-sm-3" id="ondayselectedit" style="display:none">
											
											<label for="" class="form-label">&nbsp;</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option class="form-label" value="" selected>Please Select</option>
												<option class="form-label" value="1">1 </option>
												<option class="form-label" value="2">2</option>
												<option class="form-label" value="3">3 </option>
												<option class="form-label" value="4">4</option>
												<option class="form-label" value="5">5 </option>
												<option class="form-label" value="6">6</option>
												<option class="form-label" value="7">7 </option>
												<option class="form-label" value="8">8</option>
												<option class="form-label" value="9">9 </option>
												<option class="form-label" value="10">10</option>
												<option class="form-label" value="11">11</option>
												<option class="form-label" value="12">12</option>
												<option class="form-label" value="13">13</option>
												<option class="form-label" value="14">14</option>
												<option class="form-label" value="15">15</option>
												<option class="form-label" value="16">16</option>
												<option class="form-label" value="17">17</option>
												<option class="form-label" value="18">18</option>
												<option class="form-label" value="19">19</option>
												<option class="form-label" value="20">20</option>
												<option class="form-label" value="21">21</option>
												<option class="form-label" value="22">22</option>
												<option class="form-label" value="23">23</option>
												<option class="form-label" value="24">24</option>
												<option class="form-label" value="25">25</option>
												<option class="form-label" value="26">26</option>
												<option class="form-label" value="27">27</option>
												<option class="form-label" value="28">28</option>
												
											</select>
										
										</div>
									
									</div>
									<div class="row p-2" id="setrecurringyearlyedit" style="display:none">
										
										<div class="col-sm-3">
												<label for="issuing-country" class="form-label">Set Reccurrence</label><br>
											<div class="form-control">
												<div class="form-check">
													<input class="form-check-input" id="ondayyearlycheckedit" type="checkbox"  name="inlineRadioOptions" >
													<label class="form-check-label" >On</label>
												</div>
											</div>
										</div>

										<div class="col-sm-3" id="recurringmonthyearlyedit" style="display:none">
											
											<label for="" class="form-label">Month</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option class="form-label" value="" selected>Please Select</option>
												<option class="form-label" value="1">January</option>
												<option class="form-label" value="2">February</option>
												<option class="form-label" value="3">March</option>
												<option class="form-label" value="4">April</option>
												<option class="form-label" value="5">May</option>
												<option class="form-label" value="6">Jun</option>
												<option class="form-label" value="7">July</option>
												<option class="form-label" value="8">August</option>
												<option class="form-label" value="9">September</option>
												<option class="form-label" value="10">October</option>
												<option class="form-label" value="11">November</option>
												<option class="form-label" value="12">December</option>
											</select>
										
										</div>
										<div class="col-sm-3" id="recurringdayyearlyedit" style="display:none">
											
											<label for="" class="form-label">Day</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option class="form-label" value="" selected>Please Select</option>
												<option class="form-label" value="1">1 </option>
												<option class="form-label" value="2">2</option>
												<option class="form-label" value="31">31</option>
											</select>
										
										</div>
									</div>
									<div class="row p-2" id="setrecurringontheyearlyedit" style="display:none">
										
										<div class="col-sm-3">
												<label for="issuing-country" class="form-label">Set Reccurrence Yearly*</label><br>
											<div class="form-control">
												<div class="form-check">
													<input class="form-check-input" id="ontheyearlycheckedit" type="checkbox"  name="inlineRadioOptions" >
													<label class="form-check-label" >On The</label>
												</div>
											</div>
										</div>

										<div class="col-sm-3" id="recurringselectyearlyedit" style="display:none">
											
											<label for="" class="form-label">&nbsp;</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option class="form-label" value="" selected>Please Select</option>
												<option class="form-label" value="1">First</option>
												<option class="form-label" value="2">Second</option>
												<option class="form-label" value="3">Third</option>
												<option class="form-label" value="4">Fourth</option>
											</select>
										
										</div>
										<div class="col-sm-2" id="recurringonthedayyearlyedit" style="display:none">
											
											<label for="" class="form-label">&nbsp;</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option class="form-label" value="" selected>Please Select</option>
												<option class="form-label" value="1">Sunday </option>
												<option class="form-label" value="2">Monday</option>
												<option class="form-label" value="3">Tuesday</option>
												<option class="form-label" value="4">Wednesday</option>
												<option class="form-label" value="5">Thursday</option>
												<option class="form-label" value="6">Friday</option>
												<option class="form-label" value="7">Saturday</option>
											</select>
										
										</div>
										<div class="col-sm-1" id="recurringontheofedit" style="padding-top:30px;display:none" >
										
											
												<label for="" class="form-label" >&nbsp;of</label>
												
										</div>
										<div class="col-sm-3" id="recurringonthemonthyearlyedit" style="display:none">
											
											<label for="" class="form-label">&nbsp;</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option class="form-label" value="" selected>Please Select</option>
												<option class="form-label" value="1">January </option>
												<option class="form-label" value="2">February</option>
												<option class="form-label" value="3">March</option>
												<option class="form-label" value="4">May</option>
												<option class="form-label" value="5">Jun</option>
												<option class="form-label" value="6">July</option>
												<option class="form-label" value="7">August</option>
											</select>
										
										</div>
									</div>
									<div class="row p-2" id="setrecurringonmontlyedit" style="display:none">
										
										<div class="col-sm-3">
												<label for="issuing-country" class="form-label">Set Reccurrence</label><br>
											<div class="form-control">
												<div class="form-check">
													<input class="form-check-input" id="onthecheckedit" type="checkbox"  name="inlineRadioOptions" >
													<label class="form-check-label" >On The</label>
												</div>
											</div>
										</div>

										<div class="col-sm-3" id="recurringselectontheedit" style="display:none">
											
											<label for="" class="form-label">&nbsp;</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option class="form-label" value="" selected>Please Select</option>
												<option class="form-label" value="1">First </option>
												<option class="form-label" value="2">Second</option>
												<option class="form-label" value="3">Third</option>
												<option class="form-label" value="4">Fourth</option>
											</select>
										
										</div>
										<div class="col-sm-4" id="recurringselectwhatdayedit" style="display:none">
											
											<label for="" class="form-label">&nbsp;</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option class="form-label" value="" selected>Please Select</option>
												<option class="form-label" value="1">Sunday </option>
												<option class="form-label" value="2">Monday</option>
												<option class="form-label" value="3">Tuesday</option>
												<option class="form-label" value="4">Wednesday</option>
												<option class="form-label" value="5">Thursday</option>
												<option class="form-label" value="6">Friday</option>
												<option class="form-label" value="7">Saturday</option>
											</select>
										
										</div>
									
									</div>
									<div class="row p-2">
										<div class="col-sm-6">
											<label for="firstname" class="form-label">Location*</label>
											<select class="selectpicker form-select" id="addneweventprojectlocsearchedit" aria-label="Default select example">
											<option class="form-label" value="" selected>Please Select</option>
											<option class="form-label" value="1">Location A</option>
											<option class="form-label" value="2">Location B</option>
											
											</select>
										</div>
										<div class="col-sm-6">
										
											<label for="issuing-country" class="form-label">Project*</label>
											<select class="selectpicker form-select" id="addneweventselectprojectedit" aria-label="Default select example">
											<option class="form-label" value="" selected>Please Select</option>
											<option class="form-label" value="1">Project A</option>
											<option class="form-label" value="2">Project B</option>
											
											</select>
										</div>
									</div>
									<div class="row p-2">
										<div class="col-sm-6">
											<label for="firstname" class="form-label">Participant*</label>
											<select class="selectpicker form-select" id="addneweventparticipantedit" aria-label="Default select example" multiple>
											<option class="form-label" value="">Please Select</option>
											<option class="form-label" value="1">Participant A</option>
											<option class="form-label" value="2">Participant B</option>
											
											</select>
										</div>
										<div class="col-sm-6">
										
											<label for="issuing-country" class="form-label">Description*</label>
											<textarea class="form-control" rows="3"></textarea>
										</div>
									</div>

									<div class="row p-2">
										<div class="col-sm-2">
											
											<button type="button" id="addreminderedit" class="btn btn-primary btn-xs">Add Reminder</button>
											
										</div>
										<div class="col-sm-4">
											
											<select class="form-select" id="addeventreminderedit" aria-label="Default select example" style="display: none">
											<option class="form-label" value="" selected>Please Select</option>
											<option class="form-label" value="1">5 Minute Before</option>
											<option class="form-label" value="2">10 Minute Before</option>
											<option class="form-label" value="1">15 Minute Before</option>
											<option class="form-label" value="2">20 Minute Before</option>
											<option class="form-label" value="1">30 Minute Before</option>
											<option class="form-label" value="1">1 Hour Before</option>
											</select>
											
										</div>
									</div>
									<div class="row p-2">
										<div class="col-sm-6">
											
											<label for="issuing-country" class="form-label">Attach File:</label>
											<input type="file" class="btn"></input>
										</div>
										
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" >Delete</button>
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary" id="">Save</button>
								
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
      left: 'logButton EventButton',
      center: 'title',
      right: 'prev,today,next dayGridMonth,timeGridWeek,timeGridDay,listWeek'
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
			title: 'EXAMPLE LOG',
			start: year + '-'+ month +'-01',
			end: year + '-'+ month +'-05',
			color: app.color.success,
			extendedProps: {
        			type: 'log'
      		}
			
			
		},{
			title: 'EXAMPLE LOG 2',
			start: year + '-'+ month +'-02T06:00:00',
			color: app.color.success,
			extendedProps: {
        			type: 'log'
      		},
		},{
			title: 'EXAMPLE EVENT',
			start: year + '-'+ month +'-10',
			end: year + '-'+ month +'-12',
			display: 'background',
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
  $("#starttime").timepicker();
  $("#endtime").timepicker();starteventtime
  $("#starteventtime").timepicker();
  $("#endeventtime").timepicker();
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
</script>addeventallday
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
  $("#starttimeedit").timepicker();
  $("#endtimeedit").timepicker();starteventtime
  $("#starteventtimeedit").timepicker();
  $("#endeventtimeedit").timepicker();
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
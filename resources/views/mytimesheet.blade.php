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
							<option value="" selected>Please Select</option>
							<option value="1">Home</option>
							<option value="2">Office</option>
							<option value="3">My Project</option>
							<option value="4">Others</option>
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
							<option value="" selected>Please Select</option>
							<option value="1">My Project</option>
							<option value="2">Activity</option>
							
							</select>
                        </div>
						<div class="col-sm-6" id="myproject" style="display:none">
                            <label for="Office-Log" class="form-label">My Project</label>
                            <select class="form-select" id="" aria-label="Default select example">
							<option value="" selected>List all project</option>
							
							
							</select>
                        </div>
                    </div>
					<div class="row p-2">
						<div class="col-sm-6" id="listproject" style="display:none">
                            <label for="Office-Log" class="form-label">My Project</label>
                            <select class="form-select" id="" aria-label="Default select example">
							<option value="" selected>List All Project</option>
							
							
							</select>
                        </div>
                    </div>
                    <div class="row p-2">
						<div class="col-sm-6">
                            <label for="issuing-country" class="form-label">Activity Name</label>
                            <select class="form-select" id="" >
							<option value="" selected>List All Activity Name</option>
							
							
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
							<option value="" selected>List All Project location</option>
							
							
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
                <had type="button" class="btn btn-primary formSave" id="addChildren">Save</had>
            </div>
        </div>
    </div>
</div>
		<!-- MODAL ADD LOG -->
				<!-- MODAL ADD LOG -->
				<div class="modal fade" id="editlogmodal" tabindex="-1" aria-labelledby="add-children" aria-hidden="true">
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
											<option value="" selected>Please Select</option>
											<option value="1">Home</option>
											<option value="2">Office</option>
											<option value="3">My Project</option>
											<option value="4">Others</option>
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
											<option value="" selected>Please Select</option>
											<option value="1">My Project</option>
											<option value="2">Activity</option>
											
											</select>
										</div>
										<div class="col-sm-6" id="myproject" style="display:none">
											<label for="Office-Log" class="form-label">My Project</label>
											<select class="form-select" id="" aria-label="Default select example">
											<option value="" selected>List all project</option>
											
											
											</select>
										</div>
									</div>
									<div class="row p-2">
										<div class="col-sm-6" id="listproject" style="display:none">
											<label for="Office-Log" class="form-label">My Project</label>
											<select class="form-select" id="" aria-label="Default select example">
											<option value="" selected>List All Project</option>
											
											
											</select>
										</div>
									</div>
									<div class="row p-2">
										<div class="col-sm-6">
											<label for="issuing-country" class="form-label">Activity Name</label>
											<select class="form-select" id="" >
											<option value="" selected>List All Activity Name</option>
											
											
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
											<input type="text" id="" name="DOB" class="form-control" aria-describedby="dob">
									
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
											<textarea class="form-control" rows="3"></textarea>
										</div>
										<div class="col-sm-6">
										
											<label for="issuing-country" class="form-label">Total Hours</label>
											<input type="text" readonly id="" value="Auto calculate (End time - Start time), default 00:00" name="" class="form-control" aria-describedby="dob">
											
										</div>
									</div>
									
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger">Delete</button>
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<had type="button" class="btn btn-primary formSave" id="addChildren">Save</had>
								
							</div>
						</div>
					</div>
				</div>
		<!-- MODAL ADD LOG -->
		<!-- MODAL ADD EVENT -->
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
											<option value="" selected>Please Select</option>
											<option value="1">1 Hour</option>
											<option value="2">2 Hour</option>
											
											</select>
									
										</div>
										<div class="col-sm-3">
										
										<div class="form-control">
										<div class="form-check form-check-inline">
										<input class="form-check-input"  type="checkbox"  name="inlineRadioOptions" >
										<label class="form-check-label" id="addeventallday">All Day</label>
										</div>
										<div class="form-check form-check-inline">
										<input class="form-check-input" id="addeventrecurring" type="checkbox"  name="inlineRadioOptions" >
										<label class="form-check-label" >Recurring</label>
										</div>
										
										</div>
										</div>

										<div class="col-sm-6 ">
										
										<label for="issuing-country" class="form-label">Priority</label>
										<div class="form-control">
										<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
										<label class="form-check-label" for="inlineRadio1">Low</label>
										</div>
										<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
										<label class="form-check-label" for="inlineRadio2">Medium</label>
										</div>
										<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
										<label class="form-check-label" for="inlineRadio3">High</label>
										</div>
										</div>
										
									</div>
									</div>
									<div class="row p-2">
										<div class="col-sm-6" id="addneweventrecurring" style="display:none">
											<label for="firstname" class="form-label">Recurring*</label>
											<select class="form-select" id="addneweventselectrecurring" aria-label="Default select example">
											<option value="" selected>Please Select</option>
											<option value="1">Every Weekday</option>
											<option value="2">Daily</option>
											<option value="3">Weekly</option>
											<option value="4">Monthly</option>
											<option value="5">Yearly</option>
											</select>
										</div>
										
									</div>
									
									<div class="row p-2">
										<div class="col-sm-6" id="addneweventsetreccurring" style="display: none">
										<label for="firstname" class="form-label">Set Reccurrence*</label>
										<div class="form-check form-check-inline">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
											<label class="form-check-label" for="inlineCheckbox1">Sun</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
											<label class="form-check-label" for="inlineCheckbox2">Mon</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
											<label class="form-check-label" for="inlineCheckbox3">Tue</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
											<label class="form-check-label" for="inlineCheckbox3">Wed</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
											<label class="form-check-label" for="inlineCheckbox3">Thu</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
											<label class="form-check-label" for="inlineCheckbox3">Fri</label>
										</div>&nbsp;&nbsp;&nbsp;&nbsp;
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
											<label class="form-check-label" for="inlineCheckbox3">Sat</label>
										</div>
										</div>
										</div>
										
									</div>
									<div class="row p-2" id="setrecurringmontly" style="display:none">
										
										<div class="col-sm-3">
												<label for="issuing-country" class="form-label">Set Reccurrence</label><br>
											<div class="form-control">
												<div class="form-check">
													<input class="form-check-input" id="ondaycheck" type="checkbox"  name="inlineRadioOptions" >
													<label class="form-check-label" >On Day</label>
												</div>
											</div>
										</div>

										<div class="col-sm-3" id="ondayselect" style="display:none">
											
											<label for="" class="form-label">&nbsp;</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option value="" selected>Please Select</option>
												<option value="1">1 </option>
												<option value="2">2</option>
												
											</select>
										
										</div>
									
									</div>
									<div class="row p-2" id="setrecurringonmontly" style="display:none">
										
										<div class="col-sm-2">
												<label for="issuing-country" class="form-label">Set Reccurrence</label><br>
											<div class="form-control">
												<div class="form-check">
													<input class="form-check-input" id="onthecheck" type="checkbox"  name="inlineRadioOptions" >
													<label class="form-check-label" >On The</label>
												</div>
											</div>
										</div>

										<div class="col-sm-4" id="recurringselectonthe" style="display:none">
											
											<label for="" class="form-label">&nbsp;</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option value="" selected>Please Select</option>
												<option value="1">First </option>
												<option value="2">Second</option>
												<option value="3">Third</option>
												<option value="4">Fourth</option>
											</select>
										
										</div>
										<div class="col-sm-4" id="recurringselectwhatday" style="display:none">
											
											<label for="" class="form-label">&nbsp;</label>
											<select class="form-select" id="" aria-label="Default select example">
												<option value="" selected>Please Select</option>
												<option value="1">Sunday </option>
												<option value="2">Monday</option>
												<option value="3">Tuesday</option>
												<option value="4">Wednesday</option>
												<option value="5">Thursday</option>
												<option value="6">Friday</option>
												<option value="7">Saturday</option>
											</select>
										
										</div>
									
									</div>
									<div class="row p-2">
										<div class="col-sm-6">
											<label for="firstname" class="form-label">Location*</label>
											<select class="selectpicker form-select" id="addneweventprojectlocsearch" aria-label="Default select example">
											<option value="" selected>Please Select</option>
											<option value="1">Location A</option>
											<option value="2">Location B</option>
											
											</select>
										</div>
										<div class="col-sm-6">
										
											<label for="issuing-country" class="form-label">Project*</label>
											<select class="form-select" id="" aria-label="Default select example">
											<option value="" selected>Please Select</option>
											<option value="1">Project A</option>
											<option value="2">Project B</option>
											
											</select>
										</div>
									</div>
									<div class="row p-2">
										<div class="col-sm-6">
											<label for="firstname" class="form-label">Participant*</label>
											<select class="selectpicker form-select" id="addneweventparticipant" aria-label="Default select example">
											<option value="" selected>Please Select</option>
											<option value="1">Participant A</option>
											<option value="2">Participant B</option>
											
											</select>
										</div>
										<div class="col-sm-6">
										
											<label for="issuing-country" class="form-label">Description*</label>
											<textarea class="form-control" rows="3"></textarea>
										</div>
									</div>

									<div class="row p-2">
										<div class="col-sm-2">
											
											<button type="button" id="addreminder" class="btn btn-primary  btn-sm">Add Reminder</button>
											
										</div>
										<div class="col-sm-4">
											
											<select class="form-select" id="addeventreminder" aria-label="Default select example" style="display: none">
											<option value="" selected>Please Select</option>
											<option value="1">5 Minute Before</option>
											<option value="2">10 Minute Before</option>
											<option value="1">15 Minute Before</option>
											<option value="2">20 Minute Before</option>
											<option value="1">30 Minute Before</option>
											<option value="1">1 Hour Before</option>
											</select>
											
										</div>
									</div>
									<div class="row p-2">
										<div class="col-sm-6">
											
											
											<button type="button" class="btn btn-primary">Attach File</button>
										</div>
										
									</div>
								</form>
							</div>
							<div class="modal-footer">
								
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<had type="button" class="btn btn-primary formSave" id="addChildren">Save</had>
								
							</div>
						</div>
					</div>
				</div>
		<!-- MODAL ADD EVENT -->
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
            text:'Add Event',
            click:function(event, jsEvent, view){
                   $('#neweventmodal').modal('show');
          }
        }
	},
		eventClick: function(info) {
			
            $('#editlogmodal').modal('show');
			

			
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
	
  	themeSystem: 'bootstrap',
		views: {
			timeGrid: {
				eventLimit: 6 // adjust to 6 only for timeGridWeek/timeGridDay
			}
		},
  	events: [{
			title: 'Trip to London',
			start: year + '-'+ month +'-01',
			end: year + '-'+ month +'-05',
			color: app.color.success,
			selectable:true,
			
		},{
			title: 'Meet with Irene Wong',
			start: year + '-'+ month +'-02T06:00:00',
			color: app.color.blue
		},{
			title: 'Mobile Apps Brainstorming',
			start: year + '-'+ month +'-10',
			end: year + '-'+ month +'-12',
			color: app.color.pink
		},{
			title: 'Stonehenge, Windsor Castle, Oxford',
			start: year + '-'+ month +'-05T08:45:00',
			end: year + '-'+ month +'-06T18:00',
			color: app.color.indigo
		},{
			title: 'Paris Trip',
			start: year + '-'+ month +'-12',
			end: year + '-'+ month +'-16'
		},{
			title: 'Domain name due',
			start: year + '-'+ month +'-15',
			color: app.color.blue
		},{
			title: 'Cambridge Trip',
			start: year + '-'+ month +'-19'
		},{
			title: 'Visit Apple Company',
			start: year + '-'+ month +'-22T05:00:00',
			color: app.color.success
		},{
			title: 'Exercise Class',
			start: year + '-'+ month +'-22T07:30:00',
			color: app.color.orange
		},{
			title: 'Live Recording',
			start: year + '-'+ month +'-22T03:00:00',
			color: app.color.blue
		},{
			title: 'Announcement',
			start: year + '-'+ month +'-22T15:00:00',
			color: app.color.red
		},{
			title: 'Dinner',
			start: year + '-'+ month +'-22T18:00:00'
		},{
			title: 'New Android App Discussion',
			start: year + '-'+ month +'-25T08:00:00',
			end: year + '-'+ month +'-25T10:00:00',
			color: app.color.red
		},{
			title: 'Marketing Plan Presentation',
			start: year + '-'+ month +'-25T12:00:00',
			end: year + '-'+ month +'-25T14:00:00',
			color: app.color.blue
		},{
			title: 'Chase due',
			start: year + '-'+ month +'-26T12:00:00',
			color: app.color.orange
		},{
			title: 'Heartguard',
			start: year + '-'+ month +'-26T08:00:00',
			color: app.color.orange
		},{
			title: 'Lunch with Richard',
			start: year + '-'+ month +'-28T14:00:00',
			color: app.color.blue
		},{
			title: 'Web Hosting due',
			start: year + '-'+ month +'-30',
			color: app.color.blue
		}],
		
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
</script>
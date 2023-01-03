<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>OrbitHRM | Dashboard 1</title>
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
</head>
<body>
<style>
    @media screen and (min-width: 1276px) {
        .modal-dialog {
          max-width: 1200px; /* New width for default modal */
        }
    }
</style>
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
		<div id="content" class="app-content">
	        <h1 class="page-header">Setting | Approval Configuration</h1>
	    <div class="row">
		    <div class="col-xl-15">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#default-tab-1" data-bs-toggle="tab" class="nav-link active">
                            <span class="d-sm-none">Tab 1</span>
                            <span class="d-sm-block d-none">Monthly Claim</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#default-tab-2" id="tab2" data-bs-toggle="tab" class="nav-link">
                            <span class="d-sm-none">Tab 2</span>
                            <span class="d-sm-block d-none">General Claim</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#default-tab-3" id="tab3" data-bs-toggle="tab" class="nav-link">
                            <span class="d-sm-none">Tab 3</span>
                            <span class="d-sm-block d-none">Cash Advance</span>
                        </a>
                    </li>
                    
                </ul>
                <div class="tab-content panel m-0 rounded-0 p-3">
                    <div class="tab-pane fade active show" id="default-tab-1">
                        <div class="panel-body">
                            <table id="table-monthly" class="table table-bordered align-middle" >
                                <thead>
                                    <tr>
                                        <th width="1%">&nbsp;</th>
                                        <th >&nbsp;</th>
                                        <th colspan="5">&nbsp;</th>
                                        <th colspan="4" style="text-align: center">CHECKER 1</th>
                                        <th colspan="4" style="text-align: center">CHECKER 2</th>
                                        <th colspan="4" style="text-align: center">CHECKER 3</th>
                                    </tr>
                                    <tr>
                                        <th >NO</th>
                                        <th style="width:180px;text-align: center;">ROLE</th>
                                        <th style="text-align: center">ACTIVE</th>
                                        <th style="text-align: center">APPROVE</th>
                                        <th style="text-align: center">REJECT</th>
                                        <th style="text-align: center">AMEND</th>
                                        <th style="text-align: center">CANCEL</th>
                                        <th style="text-align: center">CHECK</th>
                                        <th style="text-align: center;">GENERATE&nbsp;PV</th>
                                        <th style="text-align: center">PAYMENT</th>
                                        <th style="text-align: center">PAID</th>
                                        <th style="text-align: center">CHECK</th>
                                        <th style="text-align: center">GENERATE&nbsp;PV</th>
                                        <th style="text-align: center">PAYMENT</th>
                                        <th style="text-align: center">PAID</th>
                                        <th style="text-align: center">CHECK</th>
                                        <th style="text-align: center">GENERATE&nbsp;PV</th>
                                        <th style="text-align: center">PAYMENT</th>
                                        <th style="text-align: center">PAID</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="19" style="text-align: center"><label class="form-label">Level 1</label></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="40%">SUPERVISOR - RECOMMENDER</td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="40%">HOD / CEO - APPROVER</td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                    </tr>
                                    <tr>
                                        <td colspan="19" style="text-align: center"><label class="form-label">Level 2</label></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="40%">ADMIN - CHECKER</td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="40%">ADMIN - RECOMMENDER</td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td width="40%">ADMIN - APPROVER</td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                    </tr>
                                    <tr>
                                        <td colspan="19" style="text-align: center"><label class="form-label">Level 3</label></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td width="40%">FINANCE - CHECKER</td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td width="40%">FINANCE - RECOMMENDER</td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td width="40%">FINANCE - APPROVER</td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
				    </div>
				    <div class="tab-pane fade" id="default-tab-2">
					
					    <div class="panel-body">
                        <table id="table-general" class="table table-bordered align-middle">
                                <thead>
                                    <tr>
                                        <th width="1%">&nbsp;</th>
                                        <th >&nbsp;</th>
                                        <th colspan="5">&nbsp;</th>
                                        <th colspan="4" style="text-align: center">CHECKER 1</th>
                                        <th colspan="4" style="text-align: center">CHECKER 2</th>
                                        <th colspan="4" style="text-align: center">CHECKER 3</th>
                                    </tr>
                                    <tr>
                                        <th >NO</th>
                                        <th style="width:180px;text-align: center;">ROLE</th>
                                        <th style="text-align: center">ACTIVE</th>
                                        <th style="text-align: center">APPROVE</th>
                                        <th style="text-align: center">REJECT</th>
                                        <th style="text-align: center">AMEND</th>
                                        <th style="text-align: center">CANCEL</th>
                                        <th style="text-align: center">CHECK</th>
                                        <th style="text-align: center;">GENERATE&nbsp;PV</th>
                                        <th style="text-align: center">PAYMENT</th>
                                        <th style="text-align: center">PAID</th>
                                        <th style="text-align: center">CHECK</th>
                                        <th style="text-align: center">GENERATE&nbsp;PV</th>
                                        <th style="text-align: center">PAYMENT</th>
                                        <th style="text-align: center">PAID</th>
                                        <th style="text-align: center">CHECK</th>
                                        <th style="text-align: center">GENERATE&nbsp;PV</th>
                                        <th style="text-align: center">PAYMENT</th>
                                        <th style="text-align: center">PAID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="19" style="text-align: center"><label class="form-label">Level 1</label></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="40%">HOD / CEO - APPROVER</td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                    </tr>
                                    <tr>
                                        <td colspan="19" style="text-align: center"><label class="form-label">Level 3</label></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="40%"> FINANCE - CHECKER</td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="40%">FINANCE - RECOMMENDER</td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="40%">FINANCE - APPROVER</td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                    </tr>
                                </tbody>
                            </table>
			            </div>
	                </div>
                    <div class="tab-pane fade" id="default-tab-3">
					
					    <div class="panel-body">
                        <table id="table-cash-advance" class="table table-bordered align-middle">
                                <thead>
                                    <tr>
                                        <th width="1%">&nbsp;</th>
                                        <th >&nbsp;</th>
                                        <th colspan="5">&nbsp;</th>
                                        <th colspan="4" style="text-align: center">CHECKER 1</th>
                                        <th colspan="4" style="text-align: center">CHECKER 2</th>
                                        <th colspan="4" style="text-align: center">CHECKER 3</th>
                                    </tr>
                                    <tr>
                                        <th >NO</th>
                                        <th style="width:180px;text-align: center;">ROLE</th>
                                        <th style="text-align: center">ACTIVE</th>
                                        <th style="text-align: center">APPROVE</th>
                                        <th style="text-align: center">REJECT</th>
                                        <th style="text-align: center">AMEND</th>
                                        <th style="text-align: center">CANCEL</th>
                                        <th style="text-align: center">CHECK</th>
                                        <th style="text-align: center;">GENERATE&nbsp;PV</th>
                                        <th style="text-align: center">PAYMENT</th>
                                        <th style="text-align: center">PAID</th>
                                        <th style="text-align: center">CHECK</th>
                                        <th style="text-align: center">GENERATE&nbsp;PV</th>
                                        <th style="text-align: center">PAYMENT</th>
                                        <th style="text-align: center">PAID</th>
                                        <th style="text-align: center">CHECK</th>
                                        <th style="text-align: center">GENERATE&nbsp;PV</th>
                                        <th style="text-align: center">PAYMENT</th>
                                        <th style="text-align: center">PAID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="19" style="text-align: center"><label class="form-label">Level 1</label></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="40%">HOD / CEO - APPROVER</td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                    </tr>
                                    <tr>
                                        <td colspan="19" style="text-align: center"><label class="form-label">Level 3</label></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                        <td style="display: none"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="40%"> FINANCE - CHECKER</td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="40%">FINANCE - RECOMMENDER</td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox"  /></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="40%">FINANCE - APPROVER</td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center"><input class="form-check-input" type="checkbox" checked /></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                        <td style="text-align: center;background-color:darkgray!important;" ><input class="form-check-input" type="checkbox"  disabled/></td>
                                    </tr>
                                </tbody>
                            </table>
                            
			            </div>
                        
	                </div>
                    <div class="row">
				  <div class="col align-self-start">
					<a href="/setting" class="btn btn-light" style="color: black;" type="submit"><i class="fa fa-arrow-left"></i> Back</a>
				  </div>
				  
				  
				</div>
		        </div>
                
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
	<!-- required files -->
	<link href="../assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
	<script src="../assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
	<script src="../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="../assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
	<!-- ================== END page-js ================== -->
</body>
</html>
<script>
    
  $('#table-monthly').DataTable({
    responsive: false,
    scrollY: false,
    scrollX: true,
	lengthMenu: false,
    paging: false,
    searching:false,
    info:false,
    ordering:false
  });

//   $('#table-general').DataTable({
//     responsive: true,
//     scrollY: false,
//     scrollX: true,
// 	lengthMenu: false,
//     paging: false,
//     searching:false,
//     info:false,
    
// });
var general =$('#table-general').DataTable({
    responsive: false,
    scrollX: true,
	lengthMenu: false,
    paging: false,
    searching:false,
    info:false,
    ordering:false
});

var cashadvance =$('#table-cash-advance').DataTable({
    responsive: false,
    scrollX: true,
	lengthMenu: false,
    paging: false,
    searching:false,
    info:false,
    ordering:false
});

$( "#tab2" ).on( "click", function () {
   setTimeout(function () {
        general.columns.adjust().draw();
   }, 200);
} );

$( "#tab3" ).on( "click", function () {
   setTimeout(function () {
    cashadvance.columns.adjust().draw();
   }, 200);
} );
  
</script>

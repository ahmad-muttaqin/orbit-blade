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
    @media screen and (min-width: 1000px) {
        .modal-dialog {
          max-width: 800px; /* New width for default modal */
        }
    }

	.part { display: none; }
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
	<h1 class="page-header">Project Registration | Update Project - ( PROJECT NAME )</h1>
	


	

	<div class="row">
		<!-- BEGIN col-6 -->
		<div class="col-xl-15">
			<!-- BEGIN nav-tabs -->
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="#tab1" data-bs-toggle="tab" class="nav-link active">
						<span class="d-sm-none">Tab 1</span>
						<span class="d-sm-block d-none">Project Information</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="#tab2" data-bs-toggle="tab" class="nav-link">
						<span class="d-sm-none">Tab 2</span>
						<span class="d-sm-block d-none">Previous Project Manager</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="#tab3" data-bs-toggle="tab" class="nav-link">
						<span class="d-sm-none">Tab 3</span>
						<span class="d-sm-block d-none">Project Location</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="#tab4" data-bs-toggle="tab" class="nav-link">
						<span class="d-sm-none">Tab 4\5</span>
						<span class="d-sm-block d-none">Project Member</span>
					</a>
				</li>
				
			</ul>
			<!-- END nav-tabs -->
			<!-- BEGIN tab-content -->
			<div class="tab-content panel m-0 rounded-0 p-3">
				<!-- BEGIN tab-pane -->
				<div class="tab-pane fade active show" id="tab1">
				
				<h3 class="mt-10px"></i>Project Information</h3>
					<div class="panel-body">
					<form>
						<div class="row">
							<label class="form-label col-form-label col-md-4">Customer Name*</label>
							
							<label class="form-label col-form-label col-md-4">Project Code*</label>
							
							<label class="form-label col-form-label col-md-4">Project Name*</label>
							
						</div>
						<div class="row mb-15px">
							
							<div class="col-md-4">
							<select class="form-select">
								<option value="0" label="Please Choose " selected="selected"></option>
							</select>
								
							</div>
							
							<div class="col-md-4">
								<input type="Project Code" readonly class="form-control mb-5px"  />
								
							</div>
							
							<div class="col-md-4">
								<input type="Project Name" class="form-control mb-5px " style="text-transform: uppercase;"  />
								
							</div>
						</div>

						<div class="row">
							<label class="form-label col-form-label col-md-1">Description</label>
						</div>
						<div class="row mb-15px">
							
							<div class="col-md-12">
							<textarea class="form-control " rows="5" style="text-transform: uppercase;"></textarea>
						</div>

						</div>

						<div class="row">
							<div class="col-md-4">
							<label class="form-label col-form-label col-md-4">Contract Value*</label>
							</div>

							
							<div class="col-md-4">
							<label class="form-label col-form-label col-md-4">Contract Type</label>				
							</div>
							
							<div class="col-md-4">
							<label class="form-label col-form-label col-md-4">Financial Year*</label>
								
							</div>
						</div>

						<div class="row mb-15px">
							
							<div class="col-md-4">
								<input type="number" class="form-control mb-5px"  />
								
							</div>
							
							<div class="col-md-4">
							<select class="form-select">
								<option value="0" label="Please Choose " selected="selected"></option>
								<option value="1" label="EXT">EXT</option>
								<option value="2" label="ORI">ORI</option>
								<option value="3" label="VO">VO</option>
								
								
								</select>
								
							</div>
							
							<div class="col-md-4">
							<select class="form-select">
								<option value="0" label="Please Choose " selected="selected"></option>
								<option value="1" label="2025">2025</option>
								<option value="2" label="2024">2024</option>
								<option value="3" label="2023">2023</option>
								<option value="3" label="2023">2022</option>
								<option value="3" label="2023">2021</option>
								<option value="3" label="2023">2020</option>
								
								
								</select>
								
							</div>
						</div>

						<div class="row">
							<label class="form-label col-form-label col-md-4">LOA Date*</label>
							
							<label class="form-label col-form-label col-md-4">Contract Start Date*</label>
							
							<label class="form-label col-form-label col-md-4">Contract End Date*</label>
							
						</div>
						<div class="row mb-15px">
							
							<div class="col-md-4">
							<input type="text" class="form-control" id="datepicker-loa" placeholder="dd/mm/yyyy" />
								
							</div>
							
							<div class="col-md-4">
							<input type="text" class="form-control" id="datepicker-start" placeholder="dd/mm/yyyy" />
								
							</div>
							
							<div class="col-md-4">
							<input type="text" class="form-control" id="datepicker-end" placeholder="dd/mm/yyyy" />
								
							</div>
						</div>

						
						<div class="row">
							<label class="form-label col-form-label col-md-4">Account Manager*</label>
							
							<label class="form-label col-form-label col-md-4">Project Manager*</label>
							
							<label class="form-label col-form-label col-md-4">Warranty Start Date</label>
							
						</div>

						<div class="row mb-15px">
							
							<div class="col-md-4">
							<select class="form-select">
								<option value="0" label="Please Choose " selected="selected"></option>
								
								
								
							</select>
								
							</div>
							
							<div class="col-md-4">
							<select class="form-select">
								<option value="0" label="Please Choose " selected="selected"></option>
								
							</select>
							</div>
							
							<div class="col-md-4">
							<input type="text" class="form-control" id="datepicker-warstart" placeholder="dd/mm/yyyy" />
							
							</div>
						</div>

						<div class="row">
							<label class="form-label col-form-label col-md-4">Warranty End Date</label>
							
							<label class="form-label col-form-label col-md-4">Bank Guarantee Amount*</label>
							
							<label class="form-label col-form-label col-md-4">Bank Guarantee Expiry Date</label>
							
						</div>

						<div class="row mb-15px">
							
							<div class="col-md-4">
							<input type="text" class="form-control" id="datepicker-warend" placeholder="dd/mm/yyyy" />
							
								
							</div>
							
							<div class="col-md-4">
							<input type="number" class="form-control"/>
								
							</div>
							
							<div class="col-md-4">
							<input type="text" class="form-control" id="datepicker-bankexpiry" placeholder="dd/mm/yyyy" />
								
							</div>
						</div>

						<div class="row">
							
							<label class="form-label col-form-label col-md-4">Status</label>
							
						</div>
						<div class="row mb-15px">
							
							
							
							<div class="col-md-4">
							<select class="form-select">
								<option value="0" label="Please Choose " selected="selected"></option>
								<option value="1" label="Ongoing">Ongoing</option>
								<option value="2" label="Warranty">Warranty</option>
								<option value="3" label="Closed">Closed</option>
								
								
							</select>
								
							</div>
						</div>
					</form>
					<div class="modal-footer">
					<p class="text-end mb-0">
						<a href="javascript:;" class="btn btn-white me-5px">Cancel</a>
						<a class="btn btn-primary btnNext">Next</a>
					</p>
				</div>
		</div>
	
					
					
				</div>
				<!-- END tab-pane -->
				<!-- BEGIN tab-pane -->
		<div class="tab-pane fade" id="tab2">
				<h3 class="mt-10px"></i>Previous Project Manager</h3>
					<div class="panel-body">
			<table id="data-table-prevproject" class="table table-striped table-bordered align-middle">
				<thead>
					<tr>
						<th class="text-nowrap">Project Manager Name</th>
						<th class="text-nowrap">Designation</th>
						<th class="text-nowrap">Department</th>
						<th class="text-nowrap">Branch</th>
						<th class="text-nowrap">Unit</th>
						<th class="text-nowrap">Join Date</th>
						<th class="text-nowrap">Exit Date</th>
						


					</tr>
				</thead>
				<tbody>
						<td>Farid Ahmad</td>
						<td>Head of Department</td>
						<td>Service Delivery Department</td>
						<td>Application Unit</td>
						<td>Headquaters</td>
						<td>01/02/2020</td>
						<td>10/11/2020</td>
						
					</tr>
						<td>Adli Alimin</td>
						<td>Head Unit</td>
						<td>Service Delivery Department</td>
						<td>Application Unit</td>
						<td>HQ</td>
						<td>01/03/2020</td>
						<td>02/04/2021</td>
						
					</tr>
						<td>Fasiha Rosan</td>
						<td>Sales Executive</td>
						<td>Sales Department</td>
						<td>Application Unit</td>
						<td>State</td>
						<td>01/02/2021</td>
						<td>04/06/2022</td>

						
					</tr><td>Adli Alimin</td>
						<td>Head Unit</td>
						<td>Service Delivery Department</td>
						<td>Application Unit</td>
						<td>HQ</td>
						<td>01/03/2020</td>
						<td>02/04/2021</td>
						
					</tr><td>Adli Alimin</td>
						<td>Head Unit</td>
						<td>Service Delivery Department</td>
						<td>Application Unit</td>
						<td>HQ</td>
						<td>01/03/2020</td>
						<td>02/04/2021</td>
						
					</tr>
						<td>Adli Alimin</td>
						<td>Head Unit</td>
						<td>Service Delivery Department</td>
						<td>Application Unit</td>
						<td>HQ</td>
						<td>01/03/2020</td>
						<td>02/04/2021</td>
						
					</tr>
					
				</tbody>
			</table>
			
			
			


		</div>
		<div class="modal-footer">
			<a class="btn btn-white btnPrevious">Back</a>
			<a class="btn btn-primary btnNext">Next</a>
					
					</div>
	</div>		
		
		<!-- END col-4 -->
		<div class="tab-pane fade" id="tab3">
		<h3 class="mt-10px"></i>Project Location</h3>
					<div class="panel-heading-btn">
						<br>
					<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">+ Add Project Location</a>
					</div>
					<br>
					<div class="panel-body">
					<table id="data-table-projectlocation" class="table table-striped table-bordered align-middle">
				<thead>
					<tr>
						<th width="6%" data-orderable="false" class="align-middle">Action</th>
						<th class="text-nowrap">Location Name</th>
						<th class="text-nowrap">Address</th>
						<th class="text-nowrap">Location</th>
						
						


					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="6%"><a href="javascript:;"data-bs-toggle="modal" data-bs-target="#updateprojectlocation" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a> <a href="javascript:;" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						<td>JPN Putrajaya</td>
						<td>Setia Perdana 862502</td>
						<td><a href="#">https://www.google.com/maps/JPNPutrajaya</a></td>
						
						
					</tr>
					<tr>
						<td width="6%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a> <a href="javascript:;" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						<td>JPN WPKL</td>
						<td>Kompleks Setia Perdana 62502 WPKL</td>
						<td><a href="#">https://www.google.com/maps/JPNWPKL</a></td>
						
						
					</tr>
					<tr>
						<td width="6%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a> <a href="javascript:;" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						<td>JPN Selangor</td>
						<td>Federal Goverment Administrative Centre 98798 Selangor</td>
						<td><a href="#">https://www.google.com/maps/JPNFederal</a></td>
						
						
					</tr>
					<tr>
						<td width="6%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a> <a href="javascript:;" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						<td>JPN Putrajaya</td>
						<td>Setia Perdana 862502</td>
						<td><a href="#">https://www.google.com/maps/JPNPutrajaya</a></td>
						
						
					</tr>
					<tr>
						<td width="6%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a> <a href="javascript:;" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						<td>JPN Putrajaya</td>
						<td>Setia Perdana 862502</td>
						<td><a href="#">https://www.google.com/maps/JPNPutrajaya</a></td>
						
						
					</tr>
					<tr>
						<td width="6%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a> <a href="javascript:;" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						<td>JPN Putrajaya</td>
						<td>Setia Perdana 862502</td>
						<td><a href="#">https://www.google.com/maps/JPNPutrajaya</a></td>
						
						
					</tr>
					
				</tbody>
			</table>
				
			
			


			</div>
			<div class="modal-footer">
				<a class="btn btn-white btnPrevious">Back</a>
				<a class="btn btn-primary btnNext">Next</a>
						
						</div>
	</div>
	


	<div class="tab-pane fade" id="tab4">
		<div class="row">
		<!-- BEGIN col-6 -->
			<div class="col-xl-15 bg-light"><br>
			<!-- BEGIN nav-tabs -->
				<ul class="nav nav-tabs">
				<li class="nav-item bg-light">
					<a href="#current-member" data-bs-toggle="tab" class="nav-link active">
						<span class="d-sm-none">Tab 1</span>
						<span class="d-sm-block d-none">Current Member</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="#previous-member" data-bs-toggle="tab" class="nav-link">
						<span class="d-sm-none">Tab 2</span>
						<span class="d-sm-block d-none">Previous Member</span>
					</a>
				</li>
				
			</ul>
			<!-- END nav-tabs -->
			<!-- BEGIN tab-content -->
			<div class="tab-content panel m-0 rounded-0 p-3">
				<!-- BEGIN tab-pane -->
				<div class="tab-pane fade active show" id="current-member">
				<div class="panel-heading-btn">
						<br>
					<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addprojectmember" class="btn btn-primary">+ Add Project Member</a>
					<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#assignlocation" class="btn btn-primary">+ Assign Location</a>
				</div>
					<br>
					<div class="panel-body">
					<table id="data-table-projectmember" class="table table-striped table-bordered align-middle">
				<thead>
					<tr>
						<th width="1%" data-orderable="false" class="align-middle">Action</th>
						<th class="text-nowrap">Project Member Name</th>
						<th class="text-nowrap">Designation</th>
						<th class="text-nowrap">Department</th>
						<th class="text-nowrap">Branch</th>
						<th class="text-nowrap">Unit</th>
						<th class="text-nowrap">Joined Date</th>
						<th class="text-nowrap">Location</th>
						
						


					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="1%"><a data-bs-toggle="modal" data-bs-target="#updateprojectmember" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a></td>
						<td>Noraliya</td>
						<td>Business Analyst</td>
						<td>Service Delivery Department</td>
						<td>Headquaters</td>
						<td>SOU Unit</td>
						<td>01/09/2020</td>
						<td><a href="#" data-bs-toggle="modal" data-bs-target="#viewassignedprevious">1</a></td>
						
					</tr>
					<tr>
					<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a></td>
						<td>Noraliya</td>
						<td>Business Analyst</td>
						<td>Service Delivery Department</td>
						<td>Headquaters</td>
						<td>SOU Unit</td>
						<td>01/09/2020</td>
						<td><a href="#">1</a></td>
						
					</tr>
					<tr>
					<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a></td>
						<td>Noraliya</td>
						<td>Business Analyst</td>
						<td>Service Delivery Department</td>
						<td>Headquaters</td>
						<td>SOU Unit</td>
						<td>01/09/2020</td>
						<td><a href="#">1</a></td>
					</tr>
					<tr>
					<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a></td>
						<td>Noraliya</td>
						<td>Business Analyst</td>
						<td>Service Delivery Department</td>
						<td>Headquaters</td>
						<td>SOU Unit</td>
						<td>01/09/2020</td>
						<td><a href="#">1</a></td>
						
					</tr>
					<tr>
					<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a></td>
						<td>Noraliya</td>
						<td>Business Analyst</td>
						<td>Service Delivery Department</td>
						<td>Headquaters</td>
						<td>SOU Unit</td>
						<td>01/09/2020</td>
						<td><a href="#">1</a></td>
						
					</tr>
					<tr>
					<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a></td>
						<td>Noraliya</td>
						<td>Business Analyst</td>
						<td>Service Delivery Department</td>
						<td>Headquaters</td>
						<td>SOU Unit</td>
						<td>01/09/2020</td>
						<td><a href="#">1</a></td>
						
					</tr>
					
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
				<a class="btn btn-white btnPrevious">Back</a>
				<a class="btn btn-primary btnNext">Next</a>
						
						</div>
			</div>
			<div class="tab-pane fade" id="previous-member">
				
					<br>
					<div class="panel-body">
					<table id="data-table-previousmember" class="table table-striped table-bordered align-middle">
				<thead>
					<tr>
						<th width="1%" data-orderable="false" class="align-middle">Action</th>
						<th class="text-nowrap">Project Member Name</th>
						<th class="text-nowrap">Designation</th>
						<th class="text-nowrap">Department</th>
						<th class="text-nowrap">Branch</th>
						<th class="text-nowrap">Unit</th>
						<th class="text-nowrap">Joined Date</th>
						<th class="text-nowrap">Exit Date</th>
						<th class="text-nowrap">Location</th>
						
						


					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="1%"><a data-bs-toggle="modal" data-bs-target="#updateprojectmember" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a></td>
						<td>Noraliya</td>
						<td>Business Analyst</td>
						<td>Service Delivery Department</td>
						<td>Headquaters</td>
						<td>SOU Unit</td>
						<td>01/09/2020</td>
						<td>01/09/2020</td>
						<td><a href="#" data-bs-toggle="modal" data-bs-target="#viewassigned">1</a></td>
						
					</tr>
					<tr>
					<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a></td>
						<td>Noraliya</td>
						<td>Business Analyst</td>
						<td>Service Delivery Department</td>
						<td>Headquaters</td>
						<td>SOU Unit</td>
						<td>01/09/2020</td>
						<td>01/09/2020</td>
						<td><a href="#">1</a></td>
						
					</tr>
					<tr>
					<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a></td>
						<td>Noraliya</td>
						<td>Business Analyst</td>
						<td>Service Delivery Department</td>
						<td>Headquaters</td>
						<td>SOU Unit</td>
						<td>01/09/2020</td>
						<td>01/09/2020</td>
						<td><a href="#">1</a></td>
					</tr>
					<tr>
					<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a></td>
						<td>Noraliya</td>
						<td>Business Analyst</td>
						<td>Service Delivery Department</td>
						<td>Headquaters</td>
						<td>SOU Unit</td>
						<td>01/09/2020</td>
						<td>01/09/2020</td>
						<td><a href="#">1</a></td>
						
					</tr>
					<tr>
					<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a></td>
						<td>Noraliya</td>
						<td>Business Analyst</td>
						<td>Service Delivery Department</td>
						<td>Headquaters</td>
						<td>SOU Unit</td>
						<td>01/09/2020</td>
						<td>01/09/2020</td>
						<td><a href="#">1</a></td>
						
					</tr>
					<tr>
					<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a></td>
						<td>Noraliya</td>
						<td>Business Analyst</td>
						<td>Service Delivery Department</td>
						<td>Headquaters</td>
						<td>SOU Unit</td>
						<td>01/09/2020</td>
						<td>01/09/2020</td>
						<td><a href="#">1</a></td>
						
					</tr>
					
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
				<a class="btn btn-white btnPrevious">Back</a>
				<a class="btn btn-primary btnNext">Next</a>
						
						</div>
				
			</div>

		</div>
		<br><br>
	</div>
	
</div>
</div>
</div>
		
	<!--  -->
	
	<!-- END row -->
		</div>
		<!-- END #content -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">Add Project Location</h5>
					  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					<form>
						<div class="row">
							<label class="form-label col-form-label col-md-4">Location Name*</label>
						</div>
						<div class="row mb-15px">
							
							<div class="col-md-12">
							<input type="text" class="form-control mb-5px"  />
								
							</div>
							
							
						</div>

						

						<div class="row">
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">Address 1*</label>
							</div>

							
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">Address 2</label>				
							</div>
							
							
						</div>

						<div class="row mb-15px">
							
							<div class="col-md-6">
								<input type="text" class="form-control mb-5px"  />
								
							</div>
							
							<div class="col-md-6">
							<input type="text" class="form-control mb-5px"  />
								
							</div>
							
							
						</div>

						<div class="row">
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">Postcode*</label>
							</div>

							
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">City*</label>				
							</div>
							
							
						</div>
						<div class="row mb-15px">
							
							<div class="col-md-6">
								<input type="text" class="form-control mb-5px"  />
								
							</div>
							
							<div class="col-md-6">
							<input type="text" class="form-control mb-5px"  />
								
							</div>
							
							
						</div>

						
						<div class="row">
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">State*</label>
							</div>

							
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">Country*</label>				
							</div>
							
							
						</div>

						<div class="row mb-15px">
							
							<div class="col-md-6">
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
							
							<div class="col-md-6">
							<select class="form-select" disabled>
								<option value="0" label="Malaysia" selected="selected"></option>
							</select>
							</div>
							
							
						</div>

						<div class="row">
							<label class="form-label col-form-label col-md-12">Select Location*</label>
							
							
							
						</div>

						<div class="row mb-15px">
							
							<div class="col-md-12">
								<input type="text" class="form-control mb-5px"  />
								
							</div>
							
							
						</div>
						<div class="row">
						<div class="mapouter center"><div class="gmap_canvas"><iframe width="500" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=kuala%20lumpur&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">use google maps on website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
							
							
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
				<!--  -->
				<div class="modal fade" id="updateprojectlocation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">Update Project Location</h5>
					  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					<form>
						<div class="row">
							<label class="form-label col-form-label col-md-4">Location Name*</label>
						</div>
						<div class="row mb-15px">
							
							<div class="col-md-12">
							<input type="text" class="form-control mb-5px"  />
								
							</div>
							
							
						</div>

						

						<div class="row">
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">Address 1*</label>
							</div>

							
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">Address 2</label>				
							</div>
							
							
						</div>

						<div class="row mb-15px">
							
							<div class="col-md-6">
								<input type="text" class="form-control mb-5px"  />
								
							</div>
							
							<div class="col-md-6">
							<input type="text" class="form-control mb-5px"  />
								
							</div>
							
							
						</div>

						<div class="row">
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">Postcode*</label>
							</div>

							
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">City*</label>				
							</div>
							
							
						</div>
						<div class="row mb-15px">
							
							<div class="col-md-6">
								<input type="text" class="form-control mb-5px"  />
								
							</div>
							
							<div class="col-md-6">
							<input type="text" class="form-control mb-5px"  />
								
							</div>
							
							
						</div>

						
						<div class="row">
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">State*</label>
							</div>

							
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">Country*</label>				
							</div>
							
							
						</div>

						<div class="row mb-15px">
							
							<div class="col-md-6">
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
							
							<div class="col-md-6">
							<select class="form-select" disabled>
								<option value="0" label="Malaysia" selected="selected"></option>
							</select>
							</div>
							
							
						</div>

						<div class="row">
							<label class="form-label col-form-label col-md-12">Select Location*</label>
							
							
							
						</div>

						<div class="row mb-15px">
							
							<div class="col-md-12">
								<input type="text" class="form-control mb-5px"  />
								
							</div>
							
							
						</div>
						<div class="row">
						<div class="mapouter center"><div class="gmap_canvas"><iframe width="500" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=kuala%20lumpur&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">use google maps on website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
							
							
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
			  <!-- 

			   -->
			   <div class="modal fade" id="viewassigned" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">View Assigned Project Location</h5>
					  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					  <form>
						
					  <div class="row">
							
					  		<div class="col-md-10">
							<label class="form-label col-form-label col-md-10">Project Member Name: Noraliya</label>
							</div>

						</div>
						<div class="row">
							
					  		<div class="col-md-10">
							<label class="form-label col-form-label col-md-10">Project Location Name</label>
							</div>

						</div>
						
					  </form>
					  <div class="panel-body"><br>

					<table id="data-table-viewassigned" class="table table-striped table-bordered align-middle">
				<thead>
					<tr>
						<th width="1%">No</th>
						<th width="1%" data-orderable="false" class="align-middle">Action</th>
						<th class="text-nowrap">Project Location</th>
						
						
						


					</tr>
				</thead>
				<tbody>
					<tr>
					<td width="1%">1</td>
						<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						<td>Putrajaya</td>
						
						
					</tr>
					<tr>
					<td width="1%">2</td>
						<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						<td>Kuala Lumpur</td>
						
						
					</tr>
					<tr>
					<td width="1%">3</td>
						<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						<td>Selangor</td>
						
						
					</tr>
					<tr>
					<td width="1%">4</td>
					<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						<td>Kuala Terengganu</td>
						
						
					</tr>
					<tr>
					<td width="1%">5</td>
					<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						<td>Pahang</td>
						
						
					</tr>
					<tr>
					<td width="1%">6</td>
					<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						<td>Kuala Pilah</td>
						
						
					</tr>
					
				</tbody>
			</table>
				
			
			


			</div>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
					  
					</div>
				  </div>
				</div>
			  </div>
			  <div class="modal fade" id="viewassignedprevious" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">View Assigned Project Location</h5>
					  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					  <form>
						
					  <div class="row">
							
					  		<div class="col-md-10">
							<label class="form-label col-form-label col-md-10">Project Member Name: Noraliya</label>
							</div>

						</div>
						<div class="row">
							
					  		<div class="col-md-10">
							<label class="form-label col-form-label col-md-10">Project Location Name</label>
							</div>

						</div>
						
					  </form>
					  <div class="panel-body"><br>

					<table id="data-table-viewassigned" class="table table-striped table-bordered align-middle">
				<thead>
					<tr>
						<th width="1%">No</th>
						<th width="1%" data-orderable="false" class="align-middle">Action</th>
						<th class="text-nowrap">Project Location</th>
						
						
						


					</tr>
				</thead>
				<tbody>
					<tr>
					<td width="1%">1</td>
						<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						<td>Putrajaya</td>
						
						
					</tr>
					<tr>
					<td width="1%">2</td>
						<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						<td>Kuala Lumpur</td>
						
						
					</tr>
					<tr>
					<td width="1%">3</td>
						<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						<td>Selangor</td>
						
						
					</tr>
					<tr>
					<td width="1%">4</td>
					<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						<td>Kuala Terengganu</td>
						
						
					</tr>
					<tr>
					<td width="1%">5</td>
					<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						<td>Pahang</td>
						
						
					</tr>
					<tr>
					<td width="1%">6</td>
					<td width="1%"><a data-bs-toggle="modal" data-bs-target="#" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						<td>Kuala Pilah</td>
						
						
					</tr>
					
				</tbody>
			</table>
				
			
			


			</div>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
					  
					</div>
				  </div>
				</div>
			  </div>
			   <!--  -->
			  <div class="modal fade" id="addprojectmember" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">Add project Member</h5>
					  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					<form>
						
						<div class="row">
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">Joined Date*</label>
							</div>

							
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-6">Project Member Name*</label>				
							</div>
							
							
						</div>

						<div class="row mb-15px">
							
							<div class="col-md-6">
							<input type="text" class="form-control" id="datepicker-joineddate" placeholder="dd/mm/yyyy" />
							
							</div>
							
							<div class="col-md-6">
							<select class="selectpicker form-control" id="ex-search">
									<option value="1">Ali</option>
									<option value="2">Abu</option>
									<option value="3">Farah</option>
									<option value="4">Sumail</option>
									<option value="5">razak</option>
									<option value="6">Kamal</option>
								</select>
							</div>
							
							
						</div>

						<div class="row">
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">Designation*</label>
							</div>

							
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">Department*</label>				
							</div>
							
							
						</div>
						<div class="row mb-15px">
							
							<div class="col-md-6">
							<select class="form-select">
								<option value="0" label="Select State " selected="selected">Select State </option>
								
							</select>
							</div>
							
							<div class="col-md-6">
							<select class="form-select">
								<option value="0" label="Select State " selected="selected">Select State </option>
								
							</select>
							</div>
							
							
						</div>

						
						<div class="row">
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">Branch*</label>
							</div>

							
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">Unit/Base*</label>				
							</div>
							
							
						</div>

						<div class="row mb-15px">
							
							<div class="col-md-6">
							<select class="form-select">
								<option value="0" label="Select State " selected="selected">Select State </option>
								
							</select>
								
							</div>
							
							<div class="col-md-6">
							<select class="form-select">
								<option value="0" label="Select State " selected="selected">Select State </option>
								
							</select>
							</div>
							
							
						</div>

						<div class="row">
							<label class="form-label col-form-label col-md-12">Select Location*</label>
							
							
							
						</div>

						<div class="row mb-15px">
							
							<div class="col-md-12">
							<select class="selectpicker form-control" id="location-search" multiple>
									<option value="1">Kuala Lumpur</option>
									<option value="2">Selangor</option>
									<option value="3">Petaling Jaya</option>
									<option value="4">Cyberjaya</option>
									<option value="5">Dungun</option>
									<option value="6">Kerteh</option>
								</select>
								
							</div>
							
							
						</div>

						<div class="row">
							<div class="col-md-12">
							<div class="form-check form-switch">
								<input type="checkbox" value="door3" class="form-check-input partCheck"></input>
								<label class="form-label" for="checkbox1">Exit Project?</label><br>
							</div>
								
							</div>
							
						</div>

						<div id="door3" class="part">
							
							<div class="col-md-12">
								<br>
								<input type="text" class="form-control" id="datepicker-exitdate" placeholder="dd/mm/yyyy" />
							
							</div>
							
							
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

			  <div class="modal fade" id="assignlocation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">Assign Project Location</h5>
					  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					  <form>
						
						<div class="mb-3">
						  <label class="form-label">Project Member Name : </label><br><br>
						  <select class="selectpicker form-control" id="projectmember" multiple>
									<option value="1">Ali</option>
									<option value="2">Abu</option>
									<option value="3">Farah</option>
									<option value="4">Sumail</option>
									<option value="5">razak</option>
									<option value="6">Kamal</option>
								</select>
						</div>
						<div class="mb-3">
						<label class="form-label">Project Location Namead : </label><br><br>
						<select class="selectpicker form-control"  id="projectlocation" >
									
									<option value="1" >Putrajaya</option>
									<option value="2">Selangor</option>
									<option value="3">Kuala Lumpur</option>
									<option value="4">Cyberjaya</option>
									<option value="5">Kampung Baru</option>
									<option value="6">Negeri Sembilan</option>
								</select>
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
			  <div class="modal fade" id="updateprojectmember" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">Update Project Member</h5>
					  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					<form>
						
						<div class="row">
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">Joined Date*</label>
							</div>

							
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-6">Project Member Name*</label>				
							</div>
							
							
						</div>

						<div class="row mb-15px">
							
							<div class="col-md-6">
							<input type="text" class="form-control" id="datepicker-updatejoineddate" placeholder="dd/mm/yyyy" />
							
							</div>
							
							<div class="col-md-6">
							<input type="text" readonly class="form-control" />
							
							</div>
							
							
						</div>

						<div class="row">
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">Designation*</label>
							</div>

							
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">Department*</label>				
							</div>
							
							
						</div>
						<div class="row mb-15px">
							
							<div class="col-md-6">
							<select class="form-select" disabled>
								<option value="0" label="Select State " selected="selected">Select State </option>
								
							</select>
							</div>
							
							<div class="col-md-6">
							<select class="form-select" disabled>
								<option value="0" label="Select State " selected="selected">Select State </option>
								
							</select>
							</div>
							
							
						</div>

						
						<div class="row">
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">Branch*</label>
							</div>

							
							<div class="col-md-6">
							<label class="form-label col-form-label col-md-4">Unit/Base*</label>				
							</div>
							
							
						</div>

						<div class="row mb-15px">
							
							<div class="col-md-6">
							<select class="form-select" disabled>
								<option value="0" label="Select State " selected="selected">Select State </option>
								
							</select>
								
							</div>
							
							<div class="col-md-6">
							<select class="form-select" disabled>
								<option value="0" label="Select State " selected="selected">Select State </option>
								
							</select>
							</div>
							
							
						</div>

						<div class="row">
							<label class="form-label col-form-label col-md-12">Select Location*</label>
							
							
							
						</div>

						<div class="row mb-15px">
							
							<div class="col-md-12">
							<select class="selectpicker form-control" id="location-search-update" multiple>
									<option value="1">Kuala Lumpur</option>
									<option value="2">Selangor</option>
									<option value="3">Petaling Jaya</option>
									<option value="4">Cyberjaya</option>
									<option value="5">Dungun</option>
									<option value="6">Kerteh</option>
								</select>
								
							</div>
							
							
						</div>

						<div class="row">
							<div class="col-md-12">
							<div class="form-check form-switch">
								<input type="checkbox" value="exitproject2" class="form-check-input partCheck"></input>
								<label class="form-label" for="checkbox1">Exit Project?</label><br>
							</div>
								
							</div>
							
						</div>

						<div id="exitproject2" class="part">
							
							<div class="col-md-12">
								<br>
								<input type="text" class="form-control" id="datepicker-updateexitdate" placeholder="dd/mm/yyyy" />
							
							</div>
							
							
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
	
	<!-- ================== END page-js ================== -->
</body>
</html>
<script>
  $("#datepicker-loa").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#datepicker-start").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#datepicker-end").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#datepicker-warstart").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#datepicker-warend").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#datepicker-bankexpiry").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#datepicker-joineddate").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#datepicker-exitdate").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#datepicker-updateexitdate").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $("#datepicker-updatejoineddate").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>
<script>
  $('#data-table-prevproject').DataTable({
    responsive: false,
	lengthMenu: [5, 10],
	autoWidth: true,
  });
</script>
<script>
  $('#data-table-previousmember').DataTable({
    responsive: false,
	lengthMenu: [5, 10],
	autoWidth: true,
  });
</script>
<script>
  $('#data-table-projectlocation').DataTable({
    responsive: false,
	lengthMenu: [5, 10],
	autoWidth: true,
  });
</script>
<script>
  $('#data-table-projectmember').DataTable({
    responsive: false,
	lengthMenu: [5, 10],
	autoWidth: true,
  });
</script>
<script>
  $('#data-table-viewassigned').DataTable({
    responsive: false,
	lengthMenu: [5, 10],
	autoWidth: true,
  });
</script>
<script>
 $('.btnNext').click(function() {
  const nextTabLinkEl = $('.nav-tabs .active').closest('li').next('li').find('a')[0];
  const nextTab = new bootstrap.Tab(nextTabLinkEl);
  nextTab.show();
});

$('.btnPrevious').click(function() {
  const prevTabLinkEl = $('.nav-tabs .active').closest('li').prev('li').find('a')[0];
  const prevTab = new bootstrap.Tab(prevTabLinkEl);
  prevTab.show();
});
</script>
<!-- required files -->
<link href="../assets/plugins/select-picker/dist/picker.min.css" rel="stylesheet" />
<script src="../assets/plugins/select-picker/dist/picker.min.js"></script>
<script>
  $('#ex-search').picker({ 
	search: true ,
	
	});
</script>
<script>
  $('#location-search').picker({ search: true });
  $('#location-search-update').picker({ search: true });
</script>
<script>
  $('#projectmember').picker({ search: true });
</script>
<script>
  $('#projectlocation').picker({ 
	search: true ,
	liveSearchPlaceholder: 'Placeholder text'
	});
</script>
<script>
	$(".partCheck").click(function(){
  if ($(this).prop("checked")) {
        $("#"+$(this).val()).show();
  } else {
      $("#"+$(this).val()).hide();
  }
});
</script>
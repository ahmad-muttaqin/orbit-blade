
<!DOCTYPE html>
<html lang="en" >
<style>
    #chart-wrapper {
        display: flex;
        position: relative;
        width: 50%;
        margin: 0 auto;
        align-items: center;
    }
</style>
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
                <h1 class="page-header"> E-Leave | My Leave</h1>
	
            <div class="row p-2">
                <div class="col-xl-15">
                    <!-- BEGIN nav-tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#default-tab-1" data-bs-toggle="tab" class="nav-link active">
                                <span class="d-sm-none">Tab 1</span>
                                <span class="d-sm-block d-none">Leave Info</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#default-tab-2" data-bs-toggle="tab" class="nav-link">
                                <span class="d-sm-none">Tab 2</span>
                                <span class="d-sm-block d-none">Leave History</span>
                            </a>
                        </li>
                    </ul>
                    <!-- END nav-tabs -->
                    <!-- BEGIN tab-content -->
                    <div class="tab-content panel m-0 rounded-0 p-3">
                        <!-- BEGIN tab-pane -->
                        <div class="tab-pane fade active show" id="default-tab-1">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">+ Apply Leave</a>
                            </div>
                            
                            <div class="panel-body">
                                <!-- <div class="form-control"> -->
                                

                                    <div class="row">
                                            <!-- <div class="row"> -->
                                                <!-- <div class="col-sm-2"></div> -->
                                                <div class="col-sm-6">
                                                    <div class="panel-heading mt-15px">
                                                        <h5 class="panel-title">Leave Entitlement</h5>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div id="chart-wrapper" style="display: flex; justify-content: center;">
                                                            <canvas id="myChart"  style="width:100%;max-width:500px" > </canvas>
                                                        </div>
                                                        <br>
                                                        <div class="form-control "> Earned Leave to Date: 3 Days </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-sm-2"></div> -->
                                    
                                                <div class="col-sm-6">
                                                    <div class="panel-heading mt-15px">
                                                        <h5 class="panel-title">Leave Carried Foward 2021</h5>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div id="chart-wrapper" style="display: flex; justify-content: center;">
                                                            <canvas id="myChart2"style="width:100%;max-width:500px"></canvas>
                                                        </div>
                                                        <br>
                                                        <div class="form-control "> Lapsed: 0 Days </div>
                                                    </div>
                                                </div>
                                            <!-- </div> -->
                                    </div><br>

                                    <div class="row p-2">
                                        <div class="form-control">
                                        <h4> My Leave </h4>
                                            <div class="input-group rounded">
                                                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                                    <span type="button" class="input-group-text border-0" id="search-addon">
                                                        <i class="fas fa-search"></i>
                                                    </span>
                                            </div>
                                            <table id="table-leave" class="table table-striped table-bordered align-middle">
                                                <thead>
                                                    <tr>
                                                        <th width="1%">Action</th>
                                                        <th width="1%" data-orderable="false">Applied Date</th>
                                                        <th>Type of Leave</th>
                                                        <th>Start Date</th>
                                                        <th>End Date</th>
                                                        <th>Total Days Applied</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeX">
                                                        <td>
                                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                                                                <i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i>
                                                            </a>
                                                                <div class="dropdown-menu">
                                                                    <div class="viewleave">
                                                                        <a href="#exampleModal1" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="dropdown-item">View Leave</a>
                                                                    </div>
                                                                    <div class="dropdown-divider "></div>
                                                                    <div class="cancelleave">	
                                                                        <a class="dropdown-item">Cancel Leave</a>
                                                                    </div>
                                                                </div>
                                                        </td>
                                                        <td>07/04/2022</td>
                                                        <td>Emergency Leave</td>
                                                        <td>22/09/2022</td>
                                                        <td>22/09/2022</td>
                                                        <td>0.5</td>
                                                        <td>Pending</a></td>
                                                    </tr>

                                                    <tr class="even gradeX">
                                                        <td>
                                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                                                                <i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i>
                                                            </a>
                                                                <div class="dropdown-menu">
                                                                <div class="viewleave">
                                                                    <a href="#exampleModal1" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="dropdown-item">View Leave</a>
                                                                </div>
                                                                <div class="dropdown-divider "></div>
                                                                    <div class="cancelleave">	
                                                                        <a class="dropdown-item">Cancel Leave</a>
                                                                    </div>
                                                                </div>
                                                        </td>
                                                        <td>14/08/2022</td>
                                                        <td>Annual Leave</td>
                                                        <td>01/09/2022</td>
                                                        <td>02/09/2022</td>
                                                        <td>2</td>
                                                        <td>Pending For Approve</a></td>
                                                    </tr>

                                                    <tr class="odd gradeX">
                                                        <td>
                                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                                                                <i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i>
                                                            </a>
                                                                <div class="dropdown-menu">
                                                                    <div class="viewleave">
                                                                        <a href="#exampleModal1" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="dropdown-item">View Leave</a>
                                                                    </div>
                                                                    <div class="dropdown-divider "></div>
                                                                    <div class="cancelleave">	
                                                                        <a class="dropdown-item">Cancel Leave</a>
                                                                    </div>
                                                                </div>
                                                        </td>
                                                        <td>09/07/2022</td>
                                                        <td>Annual Leave</td>
                                                        <td>21/08/2022</td>
                                                        <td>23/08/2022</td>
                                                        <td>3</td>
                                                        <td>Rejected</a></td>
                                                    </tr>

                                                    <tr class="even gradeX">
                                                        <td>
                                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                                                                <i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i>
                                                            </a>
                                                                <div class="dropdown-menu">
                                                                    <div class="viewleave">
                                                                        <a href="#exampleModal1" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="dropdown-item">View Leave</a>
                                                                    </div>
                                                                    <div class="dropdown-divider "></div>
                                                                    <div class="cancelleave">	
                                                                        <a class="dropdown-item">Cancel Leave</a>
                                                                    </div>
                                                                </div>
                                                        </td>
                                                        <td>21/06/2022</td>
                                                        <td>Medical Leave</td>
                                                        <td>20/06/2022</td>
                                                        <td>20/06/2022</td>
                                                        <td>1</td>
                                                        <td>Approved</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- END tab-pane -->
                        <!-- BEGIN tab-pane -->
                        <div class="tab-pane fade" id="default-tab-2">
                            <h3 class="mt-10px"></i></h3>
                            
                            <div class="panel-body">
                                <div class="form-control">
                                    <h3>Leave History</h3>

                                    
                                        <div class="row p-2">
                                            <div class="row">
                                                <div class="col d-flex justify-content-end">
                                                    <button class="btn btn-primary" type="button" id="filter"><i class="fa fa-filter" aria-hidden="true"></i></button>&nbsp;
                                                </div>  
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div id="filterleave" style="display: none">
                                                <div class="form-control">						
                                                    <div class="row p-2">
                                                        <div class="col-md-2">
                                                            <label class="form-label">Date</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="name1" id="datepicker-filter" placeholder="dd/mm/yyyy"/>
                                                                    <div class="input-group-text">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">	
                                                            <label class="form-label">Type of Leave</label>
                                                            <select class="form-select form-select-lg mb-2" aria-label=".form-select-lg example">
                                                                <option>All</option>
                                                            </select>			
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="form-label">Status</label>
                                                            <select class="form-select form-select-lg mb-2" aria-label=".form-select-lg example">
                                                                <option  selected value="">Select Status</option>
                                                                <option value="0">Approved</option>
                                                                <option value="1">Rejected</option>
                                                                <option value="2">Cancel</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-2"></div>
                                                        <!-- <div class="col-md-2"></div> -->

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
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row p-2">
                                            <table id="table-leave2" class="table table-striped table-bordered align-middle">
                                                <thead>
                                                    <tr>
                                                        <th width="1%">Action</th>
                                                        <th width="1%" data-orderable="false">Applied Date</th>
                                                        <th>Type of Leave</th>
                                                        <th>Start Date</th>
                                                        <th>End Date</th>
                                                        <th>Total Days Applied</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeX">
                                                        <td>
                                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                                                                <i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <div class="viewleave">
                                                                    <a href="#exampleModal2" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="dropdown-item">View Leave</a>
                                                                </div>
                                                                <div class="dropdown-divider "></div>
                                                                <div class="cancelleave">	
                                                                    <a class="dropdown-item">Cancel Leave</a>
                                                                </div>
                                                                <div class="dropdown-divider "></div>
                                                                <div class="rejectedleave">	
                                                                    <a class="dropdown-item">Rejected Leave</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>07/04/2022</td>
                                                        <td>Emergency Leave</td>
                                                        <td>22/09/2022</td>
                                                        <td>22/09/2022</td>
                                                        <td>0.5</td>
                                                        <td>Pending</a></td>
                                                    </tr>

                                                    <tr class="even gradeX">
                                                        <td>
                                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                                                                <i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <div class="viewleave">
                                                                    <a href="#exampleModal2" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="dropdown-item">View Leave</a>
                                                                </div>
                                                                <div class="dropdown-divider "></div>
                                                                <div class="cancelleave">	
                                                                    <a class="dropdown-item">Cancel Leave</a>
                                                                </div>
                                                                <div class="dropdown-divider "></div>
                                                                <div class="rejectedleave">	
                                                                    <a class="dropdown-item">Rejected Leave</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>14/08/2022</td>
                                                        <td>Annual Leave</td>
                                                        <td>01/09/2022</td>
                                                        <td>02/09/2022</td>
                                                        <td>2</td>
                                                        <td>Pending For Approve</a></td>
                                                    </tr>

                                                    <tr class="odd gradeX">
                                                        <td>
                                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                                                                <i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <div class="viewleave">
                                                                    <a href="#exampleModal2" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="dropdown-item">View Leave</a>
                                                                </div>
                                                                <div class="dropdown-divider "></div>
                                                                <div class="cancelleave">	
                                                                    <a class="dropdown-item">Cancel Leave</a>
                                                                </div>
                                                                <div class="dropdown-divider "></div>
                                                                <div class="rejectedleave">	
                                                                    <a class="dropdown-item">Rejected Leave</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>09/07/2022</td>
                                                        <td>Annual Leave</td>
                                                        <td>21/08/2022</td>
                                                        <td>23/08/2022</td>
                                                        <td>3</td>
                                                        <td>Rejected</a></td>
                                                    </tr>

                                                    <tr class="even gradeX">
                                                        <td>
                                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                                                                <i class="fa fa-cogs"></i> Actions <i class="fa fa-caret-down"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <div class="viewleave">
                                                                    <a href="#exampleModal2" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="dropdown-item">View Leave</a>
                                                                </div>
                                                                <div class="dropdown-divider "></div>
                                                                <div class="cancelleave">	
                                                                    <a class="dropdown-item">Cancel Leave</a>
                                                                </div>
                                                                <div class="dropdown-divider "></div>
                                                                <div class="rejectedleave">	
                                                                    <a class="dropdown-item">Rejected Leave</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>21/06/2022</td>
                                                        <td>Medical Leave</td>
                                                        <td>20/06/2022</td>
                                                        <td>20/06/2022</td>
                                                        <td>1</td>
                                                        <td>Approved</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    
                                </div>		
                                <!--   END col-4 -->
                            </div>
                            <!-- END row -->
                        </div>
                        <!-- END #content -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Apply Leave</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row p-2">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="Menu1">Applied Date</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="name1" id="datepicker-applied" placeholder="dd/mm/yyyy"/>
                                                        <div class="input-group-text">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="col-sm-6" id="menu2">
                                            <label class="form-label" for="Menu2">Type of Leave*</label>
                                                <div class="input-group">
                                                    <select class="form-select" name="name2" id="select2">
                                                        <option value="0" label="Select Type of Leave" selected="selected"></option>
                                                        <option value="1" label="Annual Leave"></option>
                                                        <option value="2" label="Emergency Leave">2024</option>
                                                        <option value="3" label="Sick Leave">2023</option>
                                                        <option value="4" label="Unpaid Leave">2022</option>
                                                        <option value="5" label="Hospitalization Leave">2021</option>
                                                        <option value="6" label="Maternity Leave">2020</option>
                                                        <option value="7" label="Patternity Leave">2020</option>
                                                        <option value="8" label="Companitionate Leave">2020</option>
                                                        <option value="9" label="Marriage Leave">2020</option>
                                                        <option value="10" label="Umrah/Haji Leave">2020</option>
                                                        <option value="11" label="Special Paid Leave">2020</option>
                                                    </select>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="row p-2">
                                        <div class="col-sm-6" id="menu3">
                                            <label class="form-label" for="Menu3">No of Day(s) Applied*</label>
                                                <div class="input-group">
                                                    <select class="form-select" name="name3" id="select3">
                                                        <option value="All" label="Select Day(s) Applied"></option>
                                                        <option value="DayOne" label="One Days"></option>
                                                        <option value="DayHalf" label="Half Days"></option>
                                                        <option value="DayOthr" label="Others"></option>
                                                    </select>
                                                </div>
                                        </div>

                                        <div class="col-sm-6" id="menu4">
                                            <label class="form-label" for="Menu4">Total Days Applied</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="name4" id="select4"/>
                                                </div>
                                        </div>
                                    </div>
                                        
                                    <div class="row p-2">
                                        <div class="col-sm-6" id="menu5">
                                            <label class="form-label" for="Menu5">Leave Date*</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="name5" id="datepicker-leave" placeholder="dd/mm/yyyy"/>
                                                        <div class="input-group-text">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="row p-2">
                                        <div class="col-sm-12" id="menu6">
                                            <label class="form-label" for="Menu6">Leave Session*</label>
                                                <div class="input-group" name="name6" id="select6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Morning
                                                        </label>
                                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Evening
                                                        </label>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row p-2">
                                        <div class="col-sm-6" id="menu7">
                                            <label class="form-label" for="Menu5">Start Date*</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="name7" id="datepicker-start" placeholder="dd/mm/yyyy"/>
                                                        <div class="input-group-text">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="col-sm-6" id="menu8">
                                            <label class="form-label" for="Menu6">End Date*</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="name8" id="datepicker-end" placeholder="dd/mm/yyyy"/>
                                                        <div class="input-group-text">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="row p-2">
                                        <div class="col-sm-6" id="menu9">
                                            <label class="form-label" for="Menu7">Supporting Document</label>
                                                <div class="input-group">
                                                    <input id="fileupload" type="file" multiple="multiple" ></input>
                                                </div>
                                        </div>
                                        <div class="col-sm-6" id="menu10">
                                            <label class="form-label" for="Menu8">Reason*</label>
                                                <div class="input-group">
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div>
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
                <!-- 

                -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">View Leave</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row p-2">
                                        <div class="col-sm-6">
                                            <label class="form-label">Applied Date</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="datepicker-applied" placeholder="dd/mm/yyyy" readonly/>
                                                    <div class="input-group-text">
                                                    <i class="fa fa-calendar"></i>
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <label class="form-label">Type of Leave</label>
                                            <div class="input-group">
                                                <select class="form-select" name="typeLeave" id="typeLeave" style="pointer-events: none; touch-action: none; background:#e9ecef;">
                                                    <option value="0" label="Select Type of Leave" selected="selected"></option>
                                                    <option value="1" label="Annual Leave"></option>
                                                    <option value="2" label="Emergency Leave"></option>
                                                    <option value="3" label="Sick Leave"></option>
                                                    <option value="4" label="Unpaid Leave"></option>
                                                    <option value="5" label="Hospitalization Leave"></option>
                                                    <option value="6" label="Maternity Leave"></option>
                                                    <option value="7" label="Patternity Leave"></option>
                                                    <option value="8" label="Companitionate Leave"></option>
                                                    <option value="9" label="Marriage Leave"></option>
                                                    <option value="10" label="Umrah/Haji Leave"></option>
                                                    <option value="11" label="Special Paid Leave"></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row p-2">
                                        <div class="col-sm-6">
                                            <label class="form-label">No of Day(s) Applied</label>
                                                <div class="input-group">
                                                    <select class="form-select" name="dayApply" id="dayApplied" style="pointer-events: none; touch-action: none; background:#e9ecef;">
                                                        <option value="0" label="Select Day(s) Applied" selected="selected"></option>
                                                        <option value="1" label="One Days">2025</option>
                                                        <option value="2" label="Half Days">2024</option>
                                                        <option value="3" label="Others">2023</option>
                                                    </select>
                                                </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <label class="form-label">Total Days Applied</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" readonly/>
                                                </div>
                                        </div>
                                    </div>
                                            
                                    <div class="row p-2">
                                        <div class="col-sm-6">
                                            <label class="form-label">Leave Date</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="datepicker-leave" placeholder="dd/mm/yyyy" readonly/>
                                                        <div class="input-group-text">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="row p-2">
                                        <div class="col-sm-6">
                                            <label class="form-label">Leave Session</label>
                                                <div class="input-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked disabled>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Morning
                                                        </label>
                                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" disabled>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Evening
                                                        </label>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                            
                                    <div class="row p-2">
                                        <div class="col-sm-6">
                                            <label class="form-label">Start Date</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="datepicker-start" placeholder="dd/mm/yyyy" readonly/>
                                                        <div class="input-group-text">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">End Date</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="datepicker-end" placeholder="dd/mm/yyyy" readonly/>
                                                        <div class="input-group-text">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="row p-2">
                                        <div class="col-sm-6">
                                            <label class="form-label">Supporting Document</label>
                                                <div class="input-group">
                                                <a href="" target="_blank">Download.pdf</a>
                                                </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Reason</label>
                                                <div class="input-group">
                                                    <textarea class="form-control" readonly></textarea>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="row p-2">
                                        <div class="col-sm-12">
                                            <div class="form-control">
                                                <div class="row">
                                                    <div class="col-sm-4">Recommended By: 
                                                        <div>Najmi Abdullah <br> Head of SAU</div>
                                                    </div>
                                                    <div class="col-sm-4">Approved By:
                                                        <div>Najmi Abdullah <br> Head of SAU</div>
                                                    </div>
                                                    <div class="col-sm-4">Reason of Rejection: 
                                                        <div>Leave is rejected due to high demand and short of staff on that day</div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-4">Status: 
                                                        <div>Approved</div>
                                                    </div>
                                                    <div class="col-sm-4"> 
                                                       
                                                    </div>
                                                    <div class="col-sm-4">Status:
                                                        <div>Rejected</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

        
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">View Leave</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row p-2">
                                        <div class="col-sm-6">
                                            <label class="form-label">Employee Name:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="" readonly>
                                        </div>
                                    </div>

                                    <div class="row p-2">
                                        <div class="col-sm-6">
                                            <label class="form-label">Submitted Date:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control" readonly></input>
                                        </div>
                                    </div>

                                    <div class="row p-2">
                                        <div class="col-sm-6">
                                            <label class="form-label">Type of Leave:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control" readonly></input>
                                        </div>
                                    </div>
                                            
                                    <div class="row p-2">
                                        <div class="col-sm-6">
                                            <label class="form-label">No of Day(s) Applied</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control" readonly></input>
                                        </div>
                                    </div>

                                    <div class="row p-2">
                                        <div class="col-sm-6">
                                            <label class="form-label">Duration:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control" readonly></input>
                                        </div>
                                    </div>
                                            
                                    <div class="row p-2">
                                        <div class="col-sm-6">
                                            <label class="form-label">Start Date:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control" readonly></input>
                                        </div>
                                    </div>

                                    <div class="row p-2">
                                        <div class="col-sm-6">
                                            <label class="form-label">End Date</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control" readonly></input>
                                        </div>
                                    </div>

                                    <div class="row p-2">
                                        <div class="col-sm-6">
                                            <label class="form-label">Total Day(s) Applies</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control" readonly></input>
                                        </div>
                                    </div>

                                    <div class="row p-2">
                                        <div class="col-sm-3">
                                            <label class="form-label">Reason:</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <textarea class="form-control" rows="3" readonly></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- BEGIN scroll-top-btn -->
                <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top">
                    <i class="fa fa-angle-up"></i>
                </a>
                <!-- END scroll-top-btn -->
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

	<!-- required files -->
<link href="../assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<link href="../assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
<link href="../assets/plugins/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet" />
<script src="../assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js"></script>
<script src="../assets/plugins/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>

<!-- required files -->
<link href="../assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
<link href="../assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
<script src="../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../assets/plugins/pdfmake/build/pdfmake.min.js"></script>
<script src="../assets/plugins/pdfmake/build/vfs_fonts.js"></script>
<script src="../assets/plugins/jszip/dist/jszip.min.js"></script>	
<script src="../assets/plugins/chart.js/dist/Chart.min.js"></script>
<script src="../assets/plugins/flot/source/jquery.canvaswrapper.js"></script>
<script src="../assets/plugins/flot/source/jquery.colorhelpers.js"></script>
<script src="../assets/plugins/flot/source/jquery.flot.js"></script>
<script src="../assets/plugins/flot/source/jquery.flot.saturated.js"></script>
<script src="../assets/plugins/flot/source/jquery.flot.browser.js"></script>
<script src="../assets/plugins/flot/source/jquery.flot.drawSeries.js"></script>
<script src="../assets/plugins/flot/source/jquery.flot.uiConstants.js"></script>
<script src="../assets/plugins/flot/source/jquery.flot.pie.js"></script>
<script src="../assets/plugins/flot/source/jquery.flot.time.js"></script>
<script src="../assets/plugins/flot/source/jquery.flot.resize.js"></script>
<script src="../assets/plugins/flot/source/jquery.flot.touchNavigate.js"></script>
<script src="../assets/plugins/flot/source/jquery.flot.hover.js"></script>
<script src="../assets/plugins/flot/source/jquery.flot.touch.js"></script>
<script src="../assets/plugins/flot/source/jquery.flot.selection.js"></script>
<script src="../assets/plugins/flot/source/jquery.flot.symbol.js"></script>
<script src="../assets/plugins/flot/source/jquery.flot.legend.js"></script>


<script>
  $('#table-leave').DataTable({
    responsive: false,
    bFilter: false,
    paging: false,
  });
</script>

<script>
Chart.defaults.color = 'rgba(' + app.color.componentColorRgb + ', .65)';
    Chart.defaults.font.family = app.font.family;
    Chart.defaults.font.weight = 500;
    Chart.defaults.scale.grid.color = 'rgba(' + app.color.componentColorRgb + ', .15)';
    Chart.defaults.scale.ticks.backdropColor = 'rgba(' + app.color.componentColorRgb + ', 0)';

    var ctx5 = document.getElementById('myChart').getContext('2d');

    window.myPie = new Chart(ctx5, {
    type: "pie",
    data: {
        labels: ["Total Entitlement", "Total Balance", "Total Token"],
        datasets: [{
            data: [14, 6, 8],
            backgroundColor: ['rgba(52, 143, 226)', 'rgb(73, 182, 214)', 'rgba(255, 99, 71, 0.5)'
                ],
            borderColor: [app.color.red, app.color.orange, app.color.gray500, app.color.gray300, app
                .color.gray900
            ],
            borderWidth: 1,
            
            }]
    },
    options: {
        responsive: true,
    }
});

</script>

<script>
    Chart.defaults.color = 'rgba(' + app.color.componentColorRgb + ', .65)';
    Chart.defaults.font.family = app.font.family;
    Chart.defaults.font.weight = 500;
    Chart.defaults.scale.grid.color = 'rgba(' + app.color.componentColorRgb + ', .15)';
    Chart.defaults.scale.ticks.backdropColor = 'rgba(' + app.color.componentColorRgb + ', 0)';

    var ctx5 = document.getElementById('myChart2').getContext('2d');

    window.myPie = new Chart(ctx5, {
    type: "pie",
    data: {
        labels: ["Total Carried foward", "Total Balance", "Total Token"],
        datasets: [{
            data: [5, 1, 4],
            backgroundColor: ['rgba(52, 143, 226)', 'rgb(73, 182, 214)', 'rgba(255, 99, 71, 0.5)'
                ],
            borderColor: [app.color.red, app.color.orange, app.color.gray500, app.color.gray300, app
                .color.gray900
            ],
            borderWidth: 1,
            
            }]
    },
    options: {
        responsive: true,
    }
});

</script>

<script>
  $("#datepicker-applied").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>

<script>
var dt = new Date();
document.getElementById('datepicker-applied').innerHTML=dt;

var dt = new Date();
document.getElementById('datepicker-filter').innerHTML=dt;
</script>

<script>
  $("#datepicker-leave").datepicker({
    todayHighlight: true,
    autoclose: true
  });

  $("#datepicker-filter").datepicker({
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
$(document).ready(function(){
   $("#menu5").hide();
   $("#menu6").hide();
   $("#menu7").hide();
   $("#menu8").hide();

});

$(document).on('change',"#select3", function () {
   if ($(this).val() == "DayOne")  {
        $("#menu5").show();
   } else if ( $(this).val() == "DayHalf") {
        $("#menu5").show();
        $("#menu6").show();
   } else {
        $("#menu5").hide();
        $("#menu6").hide();
   }
});

$(document).on('change',"#select3", function () {
   if ($(this).val() == "DayOthr") {
        $("#menu7").show();
        $("#menu8").show();
   } else {
        $("#menu7").hide();
        $("#menu8").hide();
   }
});
</script>

<script>
		$(document).ready(function () {

            $("#filter").click(function(){
			$("#filterleave").toggle();
            });

    });
	</script>
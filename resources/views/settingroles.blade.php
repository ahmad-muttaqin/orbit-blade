
<!DOCTYPE html>
<html lang="en" >
	
<head>
	<meta charset="utf-8" />
	<title>OrbitHRM | Roles</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	
    <link rel="shortcut icon" href="../assets/img/logo/orbit-sm.png" >


	<!-- ================== BEGIN core-css ================== -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">	<link href="../assets/css/vendor.min.css" rel="stylesheet" />	<link href="../assets/css/vendor.min.css" rel="stylesheet" />
	<link href="../assets/css/default/app.min.css" rel="stylesheet" />
	<link rel="stylesheet" href=".../assets/dist/themes/default/style.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
	<!-- ================== END core-css ================== -->
	
	<!-- ================== BEGIN page-css ================== -->
	<link href="../assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
	<link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<link href="../assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
	<link href="../assets/plugins/simple-calendar/dist/simple-calendar.css" rel="stylesheet" />
	<!-- ================== END page-css ================== -->

	<!-- required files -->
	<link href="../assets/plugins/jstree/dist/themes/default/style.min.css" rel="stylesheet" />
	<script src="../assets/plugins/jstree/dist/jstree.min.js"></script>



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
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-clipboard-list text-gray"></i>
							</div>
							<div class="menu-text text-gray">Dashboard</div> 
							
					</div>

					<!-- End Sidenav Content Orbit -->

					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub">
						
							<div class="menu-icon">
								<i class="fa fa-commenting text-gray"></i>
							</div>
							<div class="menu-text text-gray">HRIS</div> 
							<div class="menu-caret text-gray"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">My Profile </div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
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
									<div class="menu-text text-gray">My Timesheets</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">Timesheets Report</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
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
									<div class="menu-text text-gray">My Attendance</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
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
									<div class="menu-text text-gray">My Leave</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
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
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">Customer</i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">Project Information</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">My Project</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
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
								<i class="fa fa-user-group text-gray"></i>
							</div>
							<div class="menu-text text-gray">Organization</div> 
							
						</a>
						
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
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">Timesheet</i></div>
								</a>
							</div>
							<div class="menu-item">
								<a href="#" class="menu-link">
									<div class="menu-text text-gray">E-Attendance</div>
								</a>
							</div>
							
						</div>
					</div>

					<!-- End Sidenav Content Orbit -->
					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub">
						<a href="#" class="menu-link">
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
	<h1 class="page-header">Roles <small>| Use roles to group permissions. </small></h1>
	
	<!-- END page-header -->
	<!-- BEGIN panel -->
	<div class="panel panel">
		
		<!-- BEGIN panel-heading -->
		
		<div class="panel-heading">
		<div class="col-md-6">
		<p>
			
		</p><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="btn btn-primary">+ New Role</a>
		</div>
		<div class="modal fade" id="modal-dialog">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Select Permissions</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
				</div>
				<div class="modal-body"></div>
				<div id="kt_docs_jstree_checkable"></div>
			
						<div class="modal-footer">
							<a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Close</a>
							<a href="javascript:;" class="btn btn-success">Action</a>
						</div>

				</div>
			</div>
			</div>
		
			<h4 class="panel-title"></h4>
			
			<div class="panel-heading-btn">
			<a href="#" class="btn btn-primary"><i class="fa fa-arrow-rotate-left"></i> Refresh</a>
				
			</div>
		</div>
		<!-- END panel-heading -->
		<!-- BEGIN panel-body -->
		<div class="panel-body">
			<table id="data-table-default" class="table table-striped table-bordered align-middle">
				<thead>
					<tr>
						<th width="1%">NO</th>
						<th class="text-nowrap">Role Name</th>
						<th class="text-nowrap">Added By</th>
						<th class="text-nowrap">Added Time</th>
						<th class="text-nowrap">Modified By</th>
						<th class="text-nowrap">Modified Time</th>
						<th width="9%" data-orderable="false" class="align-middle">Action</th>


					</tr>
				</thead>
				<tbody>
					<tr class="odd gradeX">
						<td width="1%" class="fw-bold text-dark">1</td>
						<td>Admin <span class="badge bg-primary rounded-pill">Static</span><span class="badge bg-dark rounded-pill">Default</span></td>
						<td>ahmad</td>
						<td>2 Feb 2022 2.30 pm</td>
						<td>Elon Musk</td>
						<td>14 Feb 2021 4.30 pm</td>
						<td><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal3" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a></td>
						
					</tr>
					<tr class="even gradeC">
					<td width="1%" class="fw-bold text-dark">2</td>
						<td>Administrator<span class="badge bg-primary rounded-pill">Static</span><span class="badge bg-dark rounded-pill">Default</span></td>
						<td>Rosyam</td>
						<td>3 Feb 2022 2.30 pm</td>
						<td>Bill Gates</td>
						<td>12 Feb 2021 4.30 pm</td>
						<td><a href="javascript:;" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a> 
						
					</tr>
					<tr class="even gradeC">
					<td width="1%" class="fw-bold text-dark">3</td>
						<td>Intern</td>
						<td>abu</td>
						<td>5 Feb 2022 2.30 pm</td>
						<td>Maisarah</td>
						<td>10 Feb 2022 2.30 pm</td>
						<td><a href="javascript:;" class="btn btn-outline-green"><i class="fa fa-pencil-alt"></i></a> <a href="javascript:;" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
						
					</tr>
					
					
					
					
				</tbody>
			</table>
		</div>
	</div>

	<!-- END row -->
	<!-- BEGIN row -->
	
	<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
						
					  <h5 class="modal-title" id="exampleModalLabel">New Role</h5>
					  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="hljs-wrapper">
					 
						
						<div class="mb-3">
						  
						<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="#default-tab-1" data-bs-toggle="tab" class="nav-link active">
						<span class="d-sm-none" >Tab 1</span>
						<span class="d-sm-block d-none">Role name</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="#default-tab-2" data-bs-toggle="tab" class="nav-link">
						<span class="d-sm-none">Tab 2</span>
						<span class="d-sm-block d-none">Permissions</span>
					</a>
				</li>
				
			</ul>

			<div class="tab-content panel m-0 rounded-0 p-3">
				<!-- BEGIN tab-pane -->
				<div class="tab-pane fade active show" id="default-tab-1">
				<blockquote class="blockquote">
						<p>Role name</p>
						<input type="text" class="form-control" id="recipient-name">
					</blockquote>
					<div class="form-check">
  						<input class="form-check-input" type="checkbox" id="checkbox1"  />
  						<label class="form-check-label" for="checkbox1">Default</label>
						<small> - Assign to new users by default. </small>
					</div>	
					<br>
					<div class="note note-warning note-with-end-icon mb-2">
						<div class="note-content text-end">
							
							<p>
							If you are changing your own permissions, you may need to refresh page (F5) to take effect of permission changes on your own screen!
							</p>
						</div>
						
					</div>
					
				</div>
				<!-- END tab-pane -->
				<!-- BEGIN tab-pane -->
				<div class="tab-pane fade" id="default-tab-2">
				<blockquote class="blockquote">
						
						<input type="text" class="form-control" id="recipient-name" placeholder="Search">
						<br>
						<div id="kt_docs_jstree_checkable2"></div>
					</blockquote>
					
					<br>
					<div class="note note-warning note-with-end-icon mb-2">
						<div class="note-content text-end">
							
							<p>
							If you are changing your own permissions, you may need to refresh page (F5) to take effect of permission changes on your own screen!
							</p>
						</div>
						
					</div>
				</div>
				<!-- END tab-pane -->
				<!-- BEGIN tab-pane -->
				
				<!-- END tab-pane -->
			</div>
						</div>
						<div id="dvPreview"></div>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					  <button type="button" class="btn btn-primary">Save</button>
					</div>
				  </div>
				</div>
			  </div>
			  
			  <!--  -->
			  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
						
					  <h5 class="modal-title" id="exampleModalLabel">Edit Role</h5>
					  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="hljs-wrapper">
					 
						
						<div class="mb-3">
						  
						<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="#default-tab-3" data-bs-toggle="tab" class="nav-link active">
						<span class="d-sm-none" >Tab 1</span>
						<span class="d-sm-block d-none">Role name</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="#default-tab-4" data-bs-toggle="tab" class="nav-link">
						<span class="d-sm-none">Tab 2</span>
						<span class="d-sm-block d-none">Permissions</span>
					</a>
				</li>
				
			</ul>

			<div class="tab-content panel m-0 rounded-0 p-3">
				<!-- BEGIN tab-pane -->
				<div class="tab-pane fade active show" id="default-tab-3">
				<blockquote class="blockquote">
						<p>Role name</p>
						<input type="text" class="form-control" id="recipient-name">
					</blockquote>
					<div class="form-check">
  						<input class="form-check-input" type="checkbox" id="checkbox1"  />
  						<label class="form-check-label" for="checkbox1">Default</label>
						<small> - Assign to new users by default. </small>
					</div>	
					<br>
					<div class="note note-warning note-with-end-icon mb-2">
						<div class="note-content text-end">
							
							<p>
							If you are changing your own permissions, you may need to refresh page (F5) to take effect of permission changes on your own screen!
							</p>
						</div>
						
					</div>
					
				</div>
				<!-- END tab-pane -->
				<!-- BEGIN tab-pane -->
				<div class="tab-pane fade" id="default-tab-4">
				<blockquote class="blockquote">
						
						<input type="text" class="form-control" id="recipient-name" placeholder="Search">
						<br>
						<div id="kt_docs_jstree_checkable3"></div>
					</blockquote>
					
					<br>
					<div class="note note-warning note-with-end-icon mb-2">
						<div class="note-content text-end">
							
							<p>
							If you are changing your own permissions, you may need to refresh page (F5) to take effect of permission changes on your own screen!
							</p>
						</div>
						
					</div>
				</div>
				<!-- END tab-pane -->
				<!-- BEGIN tab-pane -->
				
				<!-- END tab-pane -->
			</div>
						</div>
						<div id="dvPreview"></div>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					  <button type="button" class="btn btn-primary">Update</button>
					</div>
				  </div>
				</div>
			  </div>	
		 		  	  
			 
	<!-- END row -->
		</div>
		<!-- END #content -->
		
		<!-- BEGIN theme-panel -->
		
		<!-- END theme-panel -->
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="../assets/js/vendor.min.js"></script>
	<script src="../assets/js/app.min.js"></script>
	<script src="../assets/dist/jstree.min.js"></script>
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


	
	<script>
 $('#kt_docs_jstree_checkable').jstree({
    'plugins': ["wholerow", "checkbox", "types"],
    'core': {
        "themes" : {
            "responsive": false
        },
        'data': [{
                "text": "Pages",
                "children": [{
                    "text": "initially selected",
                    "state": {
                        "selected": true
                    }
                }, {
                    "text": "Employee Spouses",
                    "icon" : "fa fa-folder text-default",
                    "state": { "opened": true},
                    "children": [{"text" : "New Employee Spouses"}, {"text" : "Edit Employee Spouses", }],
                },{
                    "text": "Designation",
                    "icon" : "fa fa-folder text-default",
                    "state": {
                        "opened": true
                    },
                    "children": [{"text" : "New Designation"}, {"text" : "Edit Designation"}, {"text" : "Delete Designation"}],
                },{
                    "text": "Job Grade",
                    "icon" : "fa fa-folder text-default",
                    "state": {
                        "opened": true
                    },
                    "children": [{"text" : "New Job Grade"}, {"text" : "Edit Job Grade"}, {"text" : "Delete Job Grade"}],
                },{
                    "text": "Unit",
                    "icon" : "fa fa-folder text-default",
                    "state": {
                        "opened": true
                    },
                    "children": [{"text" : "New Unit"}, {"text" : "Edit Unit"}, {"text" : "Delete Unit"}],
                },{
                    "text": "Department",
                    "icon" : "fa fa-folder text-default",
                    "state": {
                        "opened": true
                    },
                    "children": [{"text" : "New Department"}, {"text" : "Edit Department"}, {"text" : "Delete Department"}],
                },{
                    "text": "Races",
                },{
                    "text": "Religions",
                },{
                    "text": "Branches",
                    "icon" : "fa fa-folder text-default",
                    "state": {
                        "opened": true
                    },
                    "children": [{"text" : "New Branches"}, {"text" : "Edit Branches"}, {"text" : "Delete Branches"}],
                },{
                    "text": "custom icon",
                    "icon": "fa fa-warning text-waring"
                }, {
                    "text": "disabled node",
                    "icon": "fa fa-check text-success",
                    "state": {
                        "disabled": true
                    }
                }]
            },
            "Others"
        ]
    },
    "types" : {
        "default" : {
            "icon" : "fa fa-folder text-warning"
        },
        "file" : {
            "icon" : "fa fa-file  text-warning"
        }
    },
});
</script>



	
<script>
 $('#kt_docs_jstree_checkable2').jstree({
    'plugins': ["wholerow", "checkbox", "types"],
    'core': {
        "themes" : {
            "responsive": false
        },
        'data': [{
                "text": "HRIS",
                "children": [{
					"text": "Employee Info", 
					"state": { "selected": false },
					"children": [{"text" : "Register Employee"}, {"text" : "Update Employee", },{"text" : "Terminate Employee", },{"text" : "Activate Employee", }],
                }]
            },{
                "text": "TSR",
                "children": [{
					"text": "My Timesheet",
					"children": [{ "text": "Create Event" }]
						},{
				"text" : "Timesheet Report",
				"children": [{"text": "Approve TSR"},{"text": "Decline TSR"},{"text": "View TSR"}]
			}]
            },{
                "text": "Attendance",
                "children": [{
					"text": "My Attendance",
					"children": [{ "text": "View Action Log" }]
						},{
				"text" : "Attendance Info",
			}]
            },{
                "text": "Leave",
                "children": [{
					"text": "Leave Approval", 
					"state": { "selected": false },
					"children": [{"text" : "Approve Leave"}, {"text" : "Reject Leave", },{"text" : "View Leave", }],
                }]
            },{
                "text": "Project",
                "children": [{
					"text": "Project Info", 
					"state": { "selected": false },
					"children": [{"text" : "Register Project"}, {"text" : "View Project", },{"text" : "Update Status", },{"text" : "Update Project", }],
                },{
				"text" : "Project Approval",
				"children": [{"text": "View Project Request"},{"text": "Approve Project Request"},{"text": "Reject Project Request"}]
			}]
            },{
                "text": "Claim",
                "children": [{
					"text": "Claim Approval", 
					"state": { "selected": false },
					"children": [{"text" : "Approve Claim"}, {"text" : "Recommend Claim" },{"text" : "Check Claim"},{"text" : "Amend Claim"},{"text" : "Cancel Claim"}],
                }]
            },{
                "text": "Settings",
                "children": [{"text": "General Settings"},{"text": "Timesheet Settings"},{"text": "Leave Settings"}]
            },{
                "text": "Reporting",
                "children": [{"text": "TSR"},{"text": "Attendance"},{"text": "Leave"},{"text": "Project"},{"text": "Claim"}]
            }
        ]
    },
    "types" : {
        "default" : {
            "icon" : "fa fa-folder text-warning"
        },
        "file" : {
            "icon" : "fa fa-file  text-warning"
        }
    },
});
</script>
<script>
 $('#kt_docs_jstree_checkable3').jstree({
    'plugins': ["wholerow", "checkbox", "types"],
    'core': {
        "themes" : {
            "responsive": false
        },
        'data': [{
                "text": "HRIS",
                "children": [{
					"text": "Employee Info", 
					"state": { "selected": false },
					"children": [{"text" : "Register Employee"}, {"text" : "Update Employee", },{"text" : "Terminate Employee", },{"text" : "Activate Employee", }],
                }]
            },{
                "text": "TSR",
                "children": [{
					"text": "My Timesheet",
					"children": [{ "text": "Create Event" }]
						},{
				"text" : "Timesheet Report",
				"children": [{"text": "Approve TSR"},{"text": "Decline TSR"},{"text": "View TSR"}]
			}]
            },{
                "text": "Attendance",
                "children": [{
					"text": "My Attendance",
					"children": [{ "text": "View Action Log" }]
						},{
				"text" : "Attendance Info",
			}]
            },{
                "text": "Leave",
                "children": [{
					"text": "Leave Approval", 
					"state": { "selected": false },
					"children": [{"text" : "Approve Leave"}, {"text" : "Reject Leave", },{"text" : "View Leave", }],
                }]
            },{
                "text": "Project",
                "children": [{
					"text": "Project Info", 
					"state": { "selected": false },
					"children": [{"text" : "Register Project"}, {"text" : "View Project", },{"text" : "Update Status", },{"text" : "Update Project", }],
                },{
				"text" : "Project Approval",
				"children": [{"text": "View Project Request"},{"text": "Approve Project Request"},{"text": "Reject Project Request"}]
			}]
            },{
                "text": "Claim",
                "children": [{
					"text": "Claim Approval", 
					"state": { "selected": false },
					"children": [{"text" : "Approve Claim"}, {"text" : "Recommend Claim" },{"text" : "Check Claim"},{"text" : "Amend Claim"},{"text" : "Cancel Claim"}],
                }]
            },{
                "text": "Settings",
                "children": [{"text": "General Settings"},{"text": "Timesheet Settings"},{"text": "Leave Settings"}]
            },{
                "text": "Reporting",
                "children": [{"text": "TSR"},{"text": "Attendance"},{"text": "Leave"},{"text": "Project"},{"text": "Claim"}]
            }
        ]
    },
    "types" : {
        "default" : {
            "icon" : "fa fa-folder text-warning"
        },
        "file" : {
            "icon" : "fa fa-file  text-warning"
        }
    },
});
</script>

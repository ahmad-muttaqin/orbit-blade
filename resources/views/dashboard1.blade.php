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
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">	<link href="../assets/css/vendor.min.css" rel="stylesheet" />
	<link href="../assets/css/vendor.min.css" rel="stylesheet" />
	<link href="../assets/css/default/app.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
	
	<!-- ================== BEGIN page-css ================== -->
	<link href="../assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<!-- ================== END page-css ================== -->



</head>
<body>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed ">
		<!-- BEGIN #header -->
		<div id="header" class="app-header">
			<!-- BEGIN navbar-header -->
			<div class="navbar">
			<a href=""><span class="navbar-logo">
			<img src="../assets/img/logo/orbit-logo-5.png" class="navbar-logo navbar-brand"  alt="...">
			
			</span></a>
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
						<a href="#" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-clipboard-list text-gray"></i>
							</div>
							<div class="menu-text text-gray">Dashboard</div> 
							
					</div>
					
					<div class="menu-item has-sub">
						<!-- <a href="#" class="menu-link"> -->
							<div class="menu-icon">
								<i class="fa fa-user-circle text-gray"></i>
							</div>
							<div class="menu-text text-gray">Tenants</div> 
							
						</a>
						
					</div>

					<!-- End Sidenav Content Orbit -->

					<!-- Sidenav Content Orbit -->

					<div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-user-edit text-gray"></i>
							</div>
							<div class="menu-text text-gray">Editions</div> 
							
						</a>
						
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
		<div id="content" class="app-content bg-gray-100">
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item active">Dashboard</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">Dashboard</h1>
	<!-- END page-header -->
	
	<!-- BEGIN row -->
	<div class="row">
		<!-- BEGIN col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-blue">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-list-check	 fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">New Subscription Amount</div>
					<div class="stats-number">US$0</div>
					<div class="stats-progress progress">
      					<div class="progress-bar" style="width: 35.1%;"></div>
    				</div>
				</div>
			</div>
		</div>
		<!-- END col-3 -->
		<!-- BEGIN col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-purple">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-user-astronaut	 fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">New Tenant</div>
					<div class="stats-number">0</div>
					<div class="stats-progress progress">
      					<div class="progress-bar" style="width: 43.1%;"></div>
    				</div>
				</div>
			</div>
		</div>
		<!-- END col-3 -->
		<!-- BEGIN col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-red">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-square-poll-vertical	 fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">Sample Statistic</div>
					<div class="stats-number">65</div>
					<div class="stats-progress progress">
      					<div class="progress-bar" style="width: 23.1%;"></div>
    				</div>
				</div>
			</div>
		</div>
		<!-- END col-3 -->
		<!-- BEGIN col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-green">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-square-poll-horizontal	 fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">Sample Statistic 2</div>
					<div class="stats-number">432</div>
					<div class="stats-progress progress">
      					<div class="progress-bar" style="width: 28.1%;"></div>
    				</div>
				</div>
			</div>
		</div>
		<!-- END col-3 -->
	</div>
	<!-- END row -->
	
	
	<!-- BEGIN row -->
	<div class="row">
		<!-- BEGIN col-8 -->
		<div class="col-xl-8">
			<!-- BEGIN panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title">Income Statistics</h4>
					<div class="btn-group btn-group-toggle my-n1" data-toggle="buttons">	
						<input type="radio" name="options" class="btn-check" id="option1" checked />
						<label class="btn btn-success btn-xs" for="option1">Daily</label>
						
						<input type="radio" name="options" class="btn-check" id="option2" />
						<label class="btn btn-success btn-xs" for="option2">Weekly</label>

						<input type="radio" name="options" class="btn-check" id="option2" />
						<label class="btn btn-success btn-xs" for="option2">Monthly</label>
					</div>
				</div>
				<div class="panel-body pe-1">
					<div id="interactive-chart" class="h-300px"></div>
				</div>
			</div>
			<!-- END panel -->
			
			<!-- BEGIN tabs -->
			
			<!-- END tabs -->
			
			<!-- BEGIN panel -->
			
			<!-- END panel -->
								
			<!-- BEGIN panel -->
			
			<!-- END panel -->
		</div>
		<!-- END col-8 -->
		<!-- BEGIN col-4 -->
		<div class="col-xl-4">
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="index-6">
				<div class="panel-heading">
					<h4 class="panel-title">Edition Statistics</h4>
					<div class="panel-heading-btn">
						
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-panel align-middle mb-0">
						<thead>
							<tr>	
								<th>Source</th>
								<th>Total</th>
								<th>Trend</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td nowrap><label class="badge bg-danger">Unique Visitor</label></td>
								<td>13,203 <span class="text-success"><i class="fa fa-arrow-up"></i></span></td>
								<td><div id="sparkline-unique-visitor"></div></td>
							</tr>
							<tr>
								<td nowrap><label class="badge bg-warning">Bounce Rate</label></td>
								<td>28.2%</td>
								<td><div id="sparkline-bounce-rate"></div></td>
							</tr>
							<tr>
								<td nowrap><label class="badge bg-success">Total Page Views</label></td>
								<td>1,230,030</td>
								<td><div id="sparkline-total-page-views"></div></td>
							</tr>
							<tr>
								<td nowrap><label class="badge bg-blue">Avg Time On Site</label></td>
								<td>00:03:45</td>
								<td><div id="sparkline-avg-time-on-site"></div></td>
							</tr>
							<tr>
								<td nowrap><label class="badge bg-default text-gray-900">% New Visits</label></td>
								<td>40.5%</td>
								<td><div id="sparkline-new-visits"></div></td>
							</tr>
							<tr>
								<td nowrap><label class="badge bg-inverse">Return Visitors</label></td>
								<td>73.4%</td>
								<td><div id="sparkline-return-visitors"></div></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- END panel -->
			
			<!-- BEGIN panel -->
			
		<!-- END col-4 -->
	</div>
	<div class="row">
		<div class="panel panel-inverse" style="width: 50%">
				<div class="panel-heading mt-10px">
					<h4 class="panel-title text-center">Subscription expiring tenants</h4>
					</div>
					<table id="data-table-default" class="table table-hover table-striped table-bordered align-middle text-center">
						<thead>
							<tr>
								<th class="text-nowrap">Tenant Name</th>
								<th class="text-nowrap">Remaining Day</th>
							</tr>
						</thead>
						<tr class="odd gradeX">
							
								<td>Shell</td>
								<td>50</td>
							</tr>
					</table>

							
					<nav aria-label="Page navigation example">
										<ul class="pagination justify-content-center">
											<li class="page-item">
											<a class="page-link" href="#" aria-label="Previous">
												<span aria-hidden="true">&laquo;</span>
											</a>
											</li>
											<li class="page-item"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item">
											<a class="page-link" href="#" aria-label="Next">
												<span aria-hidden="true">&raquo;</span>
											</a>
											</li>
										</ul>
										</nav>
				</div>
				<div class="panel panel-inverse" style="width: 50%">
				<div class="panel-heading mt-10px">
					<h4 class="panel-title text-center">Recent tenants</h4>
					</div>
					<table id="data-table-default" class="table table-hover table-striped table-bordered align-middle text-center">
						<thead>
							<tr>
								<th class="text-nowrap">Tenant Name</th>
								<th class="text-nowrap">Creation Time</th>
							</tr>
						</thead>
						<tr class="odd gradeX">
							
								<td>Petronas</td>
								<td>08:30 AM</td>
							</tr>
					</table>

							
					<nav aria-label="Page navigation example">
										<ul class="pagination justify-content-center">
											<li class="page-item">
											<a class="page-link" href="#" aria-label="Previous">
												<span aria-hidden="true">&laquo;</span>
											</a>
											</li>
											<li class="page-item"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item">
											<a class="page-link" href="#" aria-label="Next">
												<span aria-hidden="true">&raquo;</span>
											</a>
											</li>
										</ul>
										</nav>
				</div>
		</div>
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
	<script src="../assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="../assets/plugins/flot/source/jquery.canvaswrapper.js"></script>
	<script src="../assets/plugins/flot/source/jquery.colorhelpers.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.saturated.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.browser.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.drawSeries.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.uiConstants.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.time.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.resize.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.pie.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.crosshair.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.categories.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.navigate.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.touchNavigate.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.hover.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.touch.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.selection.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.symbol.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.legend.js"></script>
	<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="../assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
	<script src="../assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js"></script>
	<script src="../assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	<script src="../assets/js/demo/dashboard.js"></script>
	<!-- ================== END page-js ================== -->
</body>
</html>
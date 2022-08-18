<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>OrbitHRM | Login </title>
    <link rel="shortcut icon" href="../assets/img/logo/orbit-sm.png" >

	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">	<link href="../assets/css/vendor.min.css" rel="stylesheet" />
	<link href="../assets/css/default/app.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
</head>
<body class='pace-top'>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
		<!-- BEGIN login -->
			<!-- BEGIN news-feed -->



			
			<div class="row bg-white " style="min-height:98vh ;">
				<div class="col-sm-6" style="display: flex; justify-content: center; align-items: center; height: 100vh; background-image: url(../assets/img/orbit/bh.png);background-repeat: no-repeat; background-size: cover;">
					<div class="mx-auto" style="width: 60rem;">
						<div class="text-center">
							<img src="../assets/img/orbit/orbithrm-logo.png"  width="500rem" alt="Orbit" class="img-fluid">	
						</div>
						<h3 class="text-primary text-center">
							Streamline and automate HR processes with OrbitHRM
						</h3>
						<div class="text-center">
							<img src="../assets/img/orbit/meeting.png" width="500rem" alt="Orbit" class="img-fluid">	
						</div>
					</div>
				</div>
				<div class="col-sm" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
					<div class="mx-auto" style="width: 30rem;">
							<div class="card-body bg-white">
									<div class="login-header mb-30px">
										<div class="brand">
											<p>Current tenant not selected .
												<a href="register_v3.html" data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-primary"> Change here.</a> 
											</p>
											
										</div>
										<div class="brand">
											<h1>Login</h1>
										</div>
									</div>

									<form action="index.html" method="GET" class="fs-13px">
										<div class="form-floating mb-15px">
											<input type="text" class="form-control h-45px fs-13px" placeholder="Email Address" id="emailAddress" />
											<label for="emailAddress" class="d-flex align-items-center fs-13px text-gray-600">Email Address</label>
										</div>
										<div class="form-floating mb-15px">
											<input type="password" class="form-control h-45px fs-13px" placeholder="Password" id="password" />
											<label for="password" class="d-flex align-items-center fs-13px text-gray-600">Password</label>
										</div>
										<div class="form-check mb-30px">
											<input class="form-check-input" type="checkbox" value="1" id="rememberMe" />
											<label class="form-check-label" for="rememberMe">
												Remember Me
											</label>
										</div>
										<div class="mb-15px">
											<button type="submit" class="btn btn-primary d-block h-45px w-100 btn-lg fs-14px">Log in</button>
										</div>
										<div class="mb-40px pb-40px text-dark">
											Not a member yet? 
											<br> 
											<a href="#" class="text-primary">New tenant</a> |
											<a href="#" class="text-primary">Email activation</a>
										</div>
										<hr class="bg-gray-600 opacity-2" />
										<div class="text-gray-600 text-center  mb-0">
											&copy; OrbitHRM 
										</div>
									</form>
							</div>
						</div>
				</div>
			</div>
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">Enter Tenancy Name</h5>
					  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					  <form>
						
						<div class="mb-3">
						  <label for="recipient-name" class="col-form-label">Tenancy Code :</label>
						  <input type="text" class="form-control" id="recipient-name">
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

	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="../assets/js/vendor.min.js"></script>
	<script src="../assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
</body>
</html>
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>OrbitHRM | SignUp </title>
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




			
			<div class="row bg-white">
				<div class="col-sm-6" style="display: flex; justify-content: center; align-items: center; height: 98vh; background-image: url(../assets/img/orbit/bh.png);background-repeat: no-repeat; background-size: cover;">
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
				<div class="col-sm-6 p-5" style="display: flex; justify-content: center; align-items: center; height: 98vh;">
					<div class="mx-auto" style="width: 30rem;">
							<div class="card-body bg-white m-5">
									<div class="login-header mb-30px">
										<div class="brand">											
										</div>
										<div class="brand">
											<h1>Domain SignUp</h1>
										</div>
										<h4>Edition : Standard</h4>
									</div>

									<form action="index.html" method="GET" class="fs-13px">
										<h4>Domain Information</h4>
										<div class="form-floating mb-15px">
											<input type="text" class="form-control h-45px fs-13px" placeholder="First Name" id="tenancyFirstName" />
											<label for="tenancyName" class="d-flex align-items-center fs-13px text-gray-600">First Name</label>
										</div>
										<div class="form-floating mb-15px">
											<input type="text" class="form-control h-45px fs-13px" placeholder="Last Name" id="tenantLastName" />
											<label for="tenantName" class="d-flex align-items-center fs-13px text-gray-600">Last Name</label>
										</div>
										<div class="form-floating mb-15px">
											<input type="text" class="form-control h-45px fs-13px" placeholder="Email Address" id="adminEmail" />
											<label for="adminEmail" class="d-flex align-items-center fs-13px text-gray-600">Email Address</label>
										</div>
										<div class="form-floating mb-15px">
											<input type="text" class="form-control h-45px fs-13px" placeholder="Company Name" id="companyName" />
											<label for="adminEmail" class="d-flex align-items-center fs-13px text-gray-600">Company Name</label>
										</div>
										<div class="form-floating mb-15px">
											<input type="text" class="form-control h-45px fs-13px" placeholder="Phone Number" id="phoneNumber" />
											<label for="adminEmail" class="d-flex align-items-center fs-13px text-gray-600">Phone Number</label>
										</div>
										<div class="mb-15px">
											<select class="form-select">
											<option value="Malaysia"  label="Malaysia" selected="selected">Malaysia </option>
											<option value="Singapore" label="Singapore">Singapore</option>
											<option value="Brunei" label="Brunei">Brunei</option>
										</select>
											
										</div>
										<div class="form-floating mb-15px">
											<input type="password" class="form-control h-45px fs-13px" placeholder="Password" id="password" />
											<label for="password" class="d-flex align-items-center fs-13px text-gray-600">Password</label>
										</div>
										<div class="form-floating mb-15px">
											<input type="password" class="form-control h-45px fs-13px" placeholder="Password" id="password" />
											<label for="confirmpassword" class="d-flex align-items-center fs-13px text-gray-600">Confirm Password</label>
										</div>
										<div class="form-group form-check mb-15px">
											<input type="checkbox" class="form-check-input" id="exampleCheck1">
											<p  class="form-check-label" for="exampleCheck1">I agree to terms of <a href="#"> service & privacy policy </a> </p>
											
										</div>
										<div class="mb-15px" style="display:flex;">
											<button type="submit" class="btn btn-info d-block h-45px w-100 btn-lg fs-14px m-2">Back</button>
											<button type="submit" class="btn btn-primary d-block h-45px w-100 btn-lg fs-14px m-2">Submit</button>
										</div>

										<div class="text-gray-600 text-center  mt-35px">
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
					  <h5 class="modal-title" id="exampleModalLabel">Switch tenant</h5>
					  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					  <form>
						<div class="form-check form-switch">
							<label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
							<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
						  </div>
						<div class="mb-3">
						  <label for="recipient-name" class="col-form-label">Tenancy name :</label>
						  <input type="text" class="form-control" id="recipient-name">
						</div>
					  </form>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					  <button type="button" class="btn btn-primary">Send message</button>
					</div>
				  </div>
				</div>
			  </div>	

	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="../assets/js/vendor.min.js"></script>
	<script src="../assets/js/app.min.js"></script>
	
	<!-- <script src="../assets/plugins/parsleyjs/dist/parsley.min.js"></script> -->
	<!-- ================== END core-js ================== -->
</body>
</html>
<?php       
    session_start();     
    if (isset($_SESSION['client_id'])) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>SMART Wholesale - Login Page</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/title-logopng.png">
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/all.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="assets/js/main/jquery.min.js"></script>
	<script src="assets/js/main/bootstrap.bundle.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="assets/js/app.js"></script>
	<!-- /theme JS files -->

    <style>
        .logo-wholesale {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-lg navbar-dark navbar-static">
		<div class="navbar-brand ml-2 ml-lg-0">
			<a href="index.html" class="d-inline-block">
				<img src="assets/images/wholesales-logo.png" alt="">
			</a>
		</div>

		<div class="d-flex justify-content-end align-items-center ml-auto">
			<ul class="navbar-nav flex-row">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link">
						<i class="icon-lifebuoy"></i>
						<span class="d-none d-lg-inline-block ml-2">Support</span>
					</a>
				</li>
				
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Content area -->
				<div class="content d-flex justify-content-center align-items-center">

					<!-- Login form -->
					<form class="login-form" action="login-proses.php" method="POST">
						<div class="card mb-0">
							<div class="card-body">
								<div class="text-center mb-3">
									<div class="logo-wholesale">
                                        <img src="assets/images/title-logopng.png"> 
                                    </div>
									<h5 class="mb-0">SMART Wholesales</h5>
									<span class="d-block text-muted">Enter your credentials below</span>
								</div>

								
                                    <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="text" name="username" class="form-control" placeholder="Username">
                                        <div class="form-control-feedback">
                                            <i class="icon-user text-muted"></i>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                        <div class="form-control-feedback">
                                            <i class="icon-lock2 text-muted"></i>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-block" value="Sign in">
                                    </div>
                              

								<div class="text-center">
									<a href="login_password_recover.html">Forgot password?</a>
								</div>
							</div>
						</div>
					</form>
					<!-- /login form -->

				</div>
				<!-- /content area -->


				<!-- Footer -->
				<div class="navbar navbar-expand-lg navbar-light border-bottom-0 border-top">
					<div class="text-center d-lg-none w-100">
						<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
							<i class="icon-unfold mr-2"></i>
							Footer
						</button>
					</div>

					<div class="navbar-collapse collapse" id="navbar-footer">
						<span class="navbar-text">
							&copy; 2021. <a href="#">SMART Wholesale</a>
						</span>

						<ul class="navbar-nav ml-lg-auto">
							<li class="nav-item"><a href="http://buysmartwholesale.com//" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>

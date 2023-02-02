<?php
require ("loginQuery.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Cargo Logistics MS</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="errorfolder/styles.css">
	
	
      <?php
         if ($checkaccount_error ) {
          ?> <style>.password-error{display: block}</style><?php
         }
   ?>

</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">

	<div class="auth-content text-center">
		<!-- <img src="assets/images/logo.png" alt="" class="img-fluid mb-4"> -->
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<div class="card-body">
						<h4 class="mb-3 f-w-400">Signin</h4>
						<hr>
						<p class="error password-error" style="color: red;"><br><br>
                                                  <!-- error message -->
                                            <?php echo $checkaccount_error;?>
                                          </p>
						 <form  method="POST">
						<div class="form-group mb-3">
							<input type="text" class="form-control" name="username" id="Email" value="<?php echo  $username; ?>" placeholder="Email address"  required="">
						</div>
						<div class="form-group mb-4">
							<input type="password" name="pass" class="form-control" id="Password" value="<?php echo  $password;  ?>" placeholder="Password"  required="">
						</div>
					<!-- 	<div class="custom-control custom-checkbox text-left mb-4 mt-2">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Save credentials.</label>
						</div> -->
						<button type="submit"  class="btn btn-block btn-primary mb-4" name="userlogin">Signin</button>
						   </form>
						<hr>
						<!-- <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
						<p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>

<!-- <script src="assets/js/pcoded.min.js"></script> -->



</body>

</html>

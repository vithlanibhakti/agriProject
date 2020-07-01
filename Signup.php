<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">


	<script type="text/javascript">
		function validation() {
			var a = document.form.name.value;
			if (!isNaN(a)) {
				alert("Please Enter Only Characters");
				document.form.name.select();
				return false;
			}
		}
	</script>
	<style>
		
	</style>
</head>

<body>

	<div class="container">
		<div class="d-flex flex-row justify-content-center">
			<img src="themes\images\anil hadvani.jpg" style="height: 150px; width: 150px;">
		</div>
		<div class="d-flex flex-column justify-content-center text-center text-muted">
			<h3> Welcome To!</h3>
			<h5 class="text-black-50">Sign in to your existant account of <span class="text-success"> Shiv Agri
					Consultancy</span></h5>
		</div>
	</div>



	<form id="loginform" class="login100-form validate-form" method="post" name="form" action="Signup2.php" onsubmit="return validation()">
		<center>
			<div class="col-sm-12 col-md-4">

				<div class="md-form form-group md-outline input-with-pre-icon">
					<i class="fa fa-user input-prefix"></i>
					<input type="text" id="name" name="name" required class="form-control  z-depth-1" style="border-radius: 22px ;" onfocus="this.style.border = '2px solid #5cb85c'" onfocusout="this.style.border = 'none'" placeholder="John Alexnders">
					<label for="name">Full Name</label>
				</div>

				<div class="md-form form-group md-outline input-with-pre-icon">
				<i class="fa fa-phone input-prefix"></i>
					<input type="number" id="phn" name="phn" required class="form-control  z-depth-1" style="border-radius: 22px ;" onfocus="this.style.border = '2px solid #5cb85c'" onfocusout="this.style.border = 'none'" 	placeholder="PhoneNo ">
					<label for="phn">Mobile Number</label>
				</div>



				<div class="md-form form-group md-outline input-with-pre-icon">
					<i class="fa fa-home input-prefix"></i>
					<input placeholder="Ex. junagadh " class="form-control  z-depth-1" type="text" id="city" name="city"  style="border-radius: 22px ;" onfocus="this.style.border = '2px solid #5cb85c'" onfocusout="this.style.border = 'none'" required></i>
					<label for="email">City</label>
				</div>
				<div class="md-form form-group md-outline input-with-pre-icon">
					<label for="Password">Password</label>
					<i class="fa fa-lock input-prefix"></i>
					<input placeholder="password " class="form-control  z-depth-1" type="Password" id="Password" name="Password" style="border-radius: 22px ;" onfocus="this.style.border = '2px solid #5cb85c'" onfocusout="this.style.border = 'none'" required></i>
				</div>
				<div class="md-form form-group md-outline input-with-pre-icon">
					<i class="fa fa-lock input-prefix"></i>
					<input placeholder="Re-Enter Your Password " class="form-control  z-depth-1" type="Password" id="CoPassword" name="CoPassword" style="border-radius: 22px ;" onfocus="this.style.border = '2px solid #5cb85c'" onfocusout="this.style.border = 'none'" required></i>
					<label for="CoPassword">Confirm Password</label>
				</div>

				<!--<div class="wrap-input100 validate-input m-t-85 m-b-35">
                    <i class="fa fa-user-o" aria-hidden="true" style="font-size:34px;color:#4ba61e">
                        <input placeholder="Name" type="text" id="name" name="name" required></i>
                </div>

				<div class="wrap-input100 validate-input m-t-85 m-b-35">
					<i class="fa fa-phone" style="font-size:34px;color:#4ba61e">
						<input placeholder="PhoneNo " type="number" id="phn" name="phn" required></i>
				</div>

				<div class="wrap-input100 validate-input m-t-85 m-b-35">
					<i class="fa fa-envelope" aria-hidden="true" style="font-size:34px;color:#4ba61e">
						<input placeholder="Email" type="email" id="email" name="email" required></i>
				</div>



				<div class="wrap-input100 validate-input m-t-85 m-b-35">
					<i class="fa fa-lock" aria-hidden="true" style="font-size:34px;color:#4ba61e">
						<input placeholder="Password" type="Password" id="Password" name="Password" required></i>
				</div>-->


				<br>
				<div class="mb-5">
					<button class="btn bg-success text-white waves-effect z-depth-0 " style="border-radius: 25px;" type="submit" name="submit">
						SignUp
					</button>
				</div>

				<!--<h3><a href="#" class="txt2">Forgot Password?</a></h3>
				<h3>
					<a href="login.php" class="txt2">
						Already have an account?
						Login
					</a>
				</h3>-->
	</form>
	</div>
	</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->

	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


</body>

</html>
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	
<script type="text/javascript">
function validation()
{
 var a = document.form.name.value;
 if(!isNaN(a))
{
alert("Please Enter Only Characters");
document.form.name.select();
return false;
}
}
</script>
    <style>

input {
  border: 0;
  outline: 0;
  border-bottom: 2px solid #4ba61e;
  font-size: 2.4rem;
  color: #4ba61e;
     }
.d {
  border-radius:20px;
  background-color: #4ba61e;
  border: none;
  font-size: 20px;
  color: #FFFFFF;
  padding: 8px;
  width: 300px;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
}
    </style>
  </head>
  <body>
 <form id="loginform" class="login100-form validate-form" method="post" name="form"  action="Signup2.php" onsubmit="return validation()" >
<center>
							<h2 style="color:#4ba61e">	Welcome !</h2>
						<h2 style="color:#4ba61e">Shiv Agri Consultancy</h2>
	
		<div class="wrap-input100 validate-input m-t-85 m-b-35">
		<i class="fa fa-user-o" aria-hidden="true" style="font-size:34px;color:#4ba61e">
		<input placeholder="Name" type="text" id="name" name="name" required ></i>
		</div>
		
		<div class="wrap-input100 validate-input m-t-85 m-b-35">
		<i class="fa fa-phone" style="font-size:34px;color:#4ba61e">
		<input placeholder="PhoneNo " type="number" id="phn" name="phn" required ></i>
		</div>
		
		<div class="wrap-input100 validate-input m-t-85 m-b-35">
		<i class="fa fa-envelope" aria-hidden="true" style="font-size:34px;color:#4ba61e">
		<input placeholder="Email" type="email" id="email" name="email" required ></i>
		</div>
		
		
		
		<div class="wrap-input100 validate-input m-t-85 m-b-35">
		<i class="fa fa-lock" aria-hidden="true" style="font-size:34px;color:#4ba61e">
		<input placeholder="Password" type="Password" id="Password" name="Password" required ></i>
		</div>
		
					
		<br>
					<div>
						<button class="d" type="submit" name="submit">
							SignUp
						</button>
					</div>
					
				<h3><a href="#" class="txt2">Forgot Password?</a></h3>
						<h3>		
							<a href="login.php" class="txt2">
								Already have an account?
							Login
							</a>
							</h3>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html> 	
<!DOCTYPE html>
<html>
 <head>
  <title>Notification using PHP Ajax Bootstrap</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	<link href="themes/sidenavbar.css" rel="stylesheet" type="text/css">
	
 </head>
 <body>
 <?php include("header.php"); ?>
  <br /><br />
  
   <form method="post" id="comment_form">
   						<div class="wrap-input100 validate-input m-b-35" data-validate = "Enter Name">
						<input class="input100" id="name" type="text" name="name" required>
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-35" data-validate = "Enter Address">
						<input class="input100" id="address" type="text" name="address" required>
						<span class="focus-input100" data-placeholder="Address"></span>
					</div>
		
					<div class="wrap-input100 validate-input m-b-35 " data-validate = "Enter Area">
						<input class="input100" id="area" type="text" name="area" required>
						<span class="focus-input100" data-placeholder="Area"></span>
					</div>
		
					
					<div class="wrap-input100 validate-input m-b-35" data-validate = "Enter W/N.W">
						<input class="input100" id="w" type="text" name="w"  required>
						<span class="focus-input100" data-placeholder="W/N.W"></span>
					</div>
					
					<div class="container-login100-form-btn m-t-85 m-b-35">
						<input type="submit" name="post" id="post" class="btn btn-info" value="Post" />
					</div>
   </form>
<?php include("footer.html"); ?> 
  </div>
 </body>
</html>
<script>
$(document).ready(function(){
// updating the view with notifications using ajax
function load_unseen_notification(view = '')
{
 $.ajax({
  url:"fetch.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
  {
   $('.dropdown-menu').html(data.notification);
   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }
  }
 });
}
load_unseen_notification();
// submit form and get new records
$('#comment_form').on('submit', function(event){
 event.preventDefault();
 if($('#subject').val() != '' && $('#comment').val() != '')
 {
  var form_data = $(this).serialize();
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#comment_form')[0].reset();
    load_unseen_notification();
   }
  });
 }
 else
 {
  alert("Both Fields are Required");
 }
});
// load new notifications
$(document).on('click', '.dropdown-toggle', function(){
 $('.count').html('');
 load_unseen_notification('yes');
});
setInterval(function(){
 load_unseen_notification();;
}, 5000);
});

</script>

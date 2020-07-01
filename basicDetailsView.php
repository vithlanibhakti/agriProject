<style>
	.top-contact-menu {

		width: 100%;
	}

	.top-contact-menu h2 {
		color: #fff;
		font-size: 14px;
		display: inline-block;

	}

	ul.address-top-menu {
		list-style: none;
		float: right;
		padding-right: 10px;
		vertical-align: top;
		margin-top: 10px;
	}
</style>
<?php include_once("adminheader - Copy.php"); ?> 

<!-- <div id="main">
	<div class="top-contact-menu">
		<a href="SignUp.php">
			<h2 style="position:relative"><span class="new">NEW ENTRY</span></h2>

			<ul class="address-top-menu">

				<i class="fa fa-share-square-o" aria-hidden="true" style="font-size:34px;color:#4ba61e"></i>

				<i class="fa fa-print" aria-hidden="true" style="font-size:34px;color:#4ba61e"></i>
			</ul>
	</div> -->

	<div class="container">
		<div id="navbar">

			<center>
			<div class='card mt-2'>
				<div class=' card-header bg-secondary white-text text-center '><h3>List of Customers</h3></div>
			</center>

			<?php
			echo "<center>";

			$q = "SELECT `Id`, `Name`, `Email`, `Password`, `PhoneNo` FROM `custlogin`";
			$result = mysql_query($q);
			if ($result === FALSE) {
				die("Query Failed!" . mysql_error() . $result);
			}

			echo "<table class='table'>";
			echo "<center>	


		<th style='padding-left:10px;padding-right:10px;'>Id</th>
		<th style='padding-left:10px;padding-right:10px;'>Name</th>
		<th style='padding-left:10px;padding-right:10px;'>Email</th>
		<th style='padding-left:10px;padding-right:10px;'>Password</th>
		<th style='padding-left:20px;padding-right:20px;'>PhoneNo</th>
		<th style='padding-left:20px;padding-right:20px;'>Details</th>
		<th style='padding-left:20px;padding-right:20px;'>Delete</th>
		</center>";
			while ($row = mysql_fetch_assoc($result)) {
				echo "<tr>";
				foreach ($row as $v) {
					echo "<td style='padding:5px;'>" . $v . "</td>";
				}
				echo "<td> <a href='details.php?Id=" . $row['Id'] . "'>Details</a></td>";
				echo "<td> <a href='deleteuser.php?Id=" . $row['Id'] . "'>Delete</a></td>";
				echo "</tr>";
			}
			echo "</table></div>";

			//include_once("footer.html");

			echo "</center>"; ?>
		</div>
	</div>
</div>

</body>

</html>
<script>
	// $(document).ready(function(){

	// function load_unseen_notification(view = '')
	// {
	// $.ajax({
	// url:"fetch.php",
	// method:"POST",
	// data:{view:view},
	// dataType:"json",
	// success:function(data)
	// {
	// $('.dropdown-menu').html(data.notification);
	// if(data.unseen_notification > 0)
	// {
	// $('.count').html(data.unseen_notification);
	// }
	// }
	// });
	// }

	// load_unseen_notification();

	// $(document).on('click', '.dropdown-toggle', function(){
	// $('.count').html('');
	// load_unseen_notification('yes');
	// });

	// setInterval(function(){ 
	// load_unseen_notification();; 
	// }, 5000);

	// });
</script>
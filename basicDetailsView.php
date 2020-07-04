
<?php include_once("adminheader - Copy.php"); ?> 


	<div class="container">
		<div id="navbar">

			<center>
			<div class='card mt-2'>
				<div class=' card-header bg-secondary white-text text-center '><h3>List of Customers</h3></div>
			</center>

			<?php
			echo "<center>";

			$q = "SELECT `Id`, `Name`, `Email`, `Password`, `PhoneNo` FROM `custlogin`";
			$result = mysqli_query($con,$q);
			if ($result === FALSE) {
				die("Query Failed!" . mysqli_error($con) . $result);
			}

			echo "<table class='table table-striped table-responsive-md btn-table'>";
			echo "<center>	


		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>PhoneNo</th>
		<th>Details</th>
		<th>Delete</th>
		</center>";
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				foreach ($row as $v) {
					echo "<td>" . $v . "</td>";
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
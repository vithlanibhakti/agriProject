<html>

<body>
	<?php include("header.php"); 
	$result = mysqli_query($con,"SELECT  Id  FROM `custlogin` where PhoneNo ='" . $_SESSION['PhoneNo'] . "'");
	$row = mysqli_fetch_array($result);
	$EC = $row['Id'];

	$qurry = mysqli_query($con,"select * from plantcons where id = ".$EC."");
	while($row2 = mysqli_fetch_array($qurry)){
		echo $row2['Payment_status'];
	}
	
	?>
	

	<div class="well well-small">
		<h4>
			<a href="webindex1.php"><i style="width:auto; font-size:2em; line-height:1em; height:auto" class="icon-magic"></i></a>
			<span><br /><a href="webindex1.php">Photo/Video</a></span>
			</a>
		</h4>
	</div>
	<?php include("footer.html"); ?>
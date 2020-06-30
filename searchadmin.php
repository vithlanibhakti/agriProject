
<?php
session_start();
include("connect.php");
if(!isset($_SESSION['PhoneNo']))
{
	echo "<script>alert('You are not logged on...');</script>";
	header("refresh:0; url='login.php'");
}
else
{	
	$PhoneNo = $_SESSION['PhoneNo'];
}

  $term = $_POST['term'];
  $sql = mysqli_query($con,"SELECT * FROM custlogin WHERE Name LIKE '%".$term."%' OR Id LIKE '%".$term."%'") or die
        (mysqli_error());
		    $count=mysqli_num_rows($sql);

		IF($term !== "" AND $count > 1)
		 {
    WHILE ($ROW = MYSQLI_FETCH_ARRAY($sql)){
		ECHO "<br>";
     ECHO 'NAME: ' .$ROW['Name'];
     ECHO '<BR /> EMAIL: ' .$ROW['Email'];
     ECHO '<BR /> PHONENO: '.$ROW['PhoneNo'];
   }
	 }
	 ELSE
	 {
		 ECHO ("No result found");
		 }

?>
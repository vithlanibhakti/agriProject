
<?php
session_start();
include("dbConfig.php");
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
  $sql = mysql_query("SELECT * FROM custlogin WHERE Name LIKE '%".$term."%' OR Id LIKE '%".$term."%'") or die
        (mysql_error());
		    $count=mysql_num_rows($sql);

		IF($term !== "" AND $count > 1)
		 {
    WHILE ($ROW = MYSQL_FETCH_ARRAY($sql)){
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
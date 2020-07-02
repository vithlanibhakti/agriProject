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
$result = mysqli_query($con,"SELECT  Id AS EmploeeCode FROM `custlogin` where PhoneNo ='".$_SESSION['PhoneNo']."'");
$row = mysqli_fetch_array($result);
$EC = $row['EmploeeCode']; 



if(isset($_POST['view'])){
if($_POST["view"] != '')
{
	
	$sql = "SELECT Amount_Id FROM `amount` where Id=$EC ";
	$result1 = mysqli_query($con, $sql);
	while($row1 = mysqli_fetch_assoc($result1)) 
	{
	$EC1=$row1["Amount_Id"];
	$ar = [$EC1];
	$str= implode(', ', $ar);
	echo "<br>"."amountID=".$str;

	$update_query = "UPDATE amount SET status = 1 WHERE status=0 && Amount_Id=$EC1";
	 mysqli_query($con, $update_query);
	}

}
$query = "SELECT * FROM amount where Id=$EC ORDER BY id DESC LIMIT 50";
$result = mysqli_query($con, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
   $output .= '
   <li>
   <a href="#">
   <strong>'.$row["amount"].'</strong><br />
   </a>
   </li>
   ';
 }
}
else{
     $output .= '
     <li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}

$status_query = "SELECT * FROM amount WHERE status=0 && Id=$EC";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
    'notification' => $output,
    'unseen_notification'  => $count
);

echo json_encode($data);
}
?>
<?php
session_start();
include("dbConfig.php");
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
$result = mysql_query("SELECT  Id AS EmploeeCode FROM `custlogin` where PhoneNo ='".$_SESSION['PhoneNo']."'");
$row = mysql_fetch_array($result);
$EC = $row['EmploeeCode']; 
//echo $EC;

$sql = "SELECT Amount_Id FROM `amount` where Id=$EC ";
$result1 = mysqli_query($con, $sql);
while($row1 = mysqli_fetch_assoc($result1)) 
{
$EC1=$row1["Amount_Id"];
//echo ("Amount_Id".$EC1)."<br>";	
$ar = [$EC1];
$str= implode(', ', $ar);
echo "<br>"."amountID=".$str;

// $update_query = "UPDATE amount SET status = 1 WHERE status=0 && Amount_Id=$EC1";
// mysqli_query($con, $update_query);
}

$query = "SELECT `Amount_Id`, `amount`, `date`, `status`, `Id` FROM `amount` where Id=$EC ORDER BY id  DESC LIMIT 9";
$resul= mysql_query($query);
while($r = mysql_fetch_assoc($resul)) 
{

$E3=$r['Id'];
$amount=$r['amount'];
echo "<br>"."UniqueID".$E3;

echo "<br>"."Amount==".$amount;
// $output .= '
   // <li>
   // <a href="#">
   // <strong>'.$row["amount"].'</strong><br />
   // </a>
   // </li>
   // ';
}

$status_query = "SELECT * FROM amount WHERE status=0 && Id=$E3";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
echo "count=".$count;
// $data = array(
    // 'notification' => $output,
    // 'unseen_notification'  => $count
// );

// echo json_encode($data);

?>

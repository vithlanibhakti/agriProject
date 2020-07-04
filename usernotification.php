<?php
include("header.php");
include_once('connect.php');
$result = mysqli_query($con,"SELECT  Id  FROM `custlogin` where PhoneNo ='" . $_SESSION['PhoneNo'] . "'");
$row = mysqli_fetch_array($result);
$EC = $row['Id'];
echo $EC;
$qurry = mysqli_query($con,"SELECT amount FROM amount WHERE id = $EC");
$row = mysqli_fetch_array($qurry);
$amoute = $row['amount'];
echo $amoute;

$qurry = mysqli_query($con,"SELECT * FROM usernotification WHERE id = $EC");

while($row = mysqli_fetch_array($qurry)){
    echo $row['typeform'];
    echo $row['desc'];
    echo $row['plant_id'] ."<br>";
}


$qurry = mysqli_query($con,"SELECT `file_name` FROM `uploading` WHERE `Id` = $EC");
while($row = mysqli_fetch_array($qurry)){
    echo $row['file_name'];
}

?>
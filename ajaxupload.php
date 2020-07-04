<?php
 $id = $_POST['id']; 
 $val=$_POST['amount'];
 $plant_id = $_POST['pid'];
$dec = $_POST['desc'];
 include 'connect.php';
 $date=date("Y-m-d");
 //echo json_encode($date);
$sql1="INSERT INTO `amount`(`amount`,`date`,`Id`) VALUES ('$val','$date','$id')";
$a=mysqli_query($con,$sql1);
$type = "";

if(isset($_POST['t1'])){
    $type = "FORM A";
}if(isset($_POST['t2'])){
    $type = "FORM B";
}if(isset($_POST['t3'])){
    $type = "FORM C";
}
$qurry =mysqli_query($con,"INSERT INTO usernotification VALUE($id,'$type','$plant_id','$dec')");


$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'upload/'; // upload directory
if(!empty($_POST['name']) || !empty($_POST['email']) || $_FILES['image'])
{
$img = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
// can upload same image using rand function
$final_image = rand(1000,1000000).$img;
// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.strtolower($final_image); 
if(move_uploaded_file($tmp,$path)) 
{
;
//include database configuration file

//insert form data in the database
$insert = mysqli_query($con,"INSERT uploading (file_name ,Id) VALUES ('".$path."',".$id.")");
header("Location: notification.php");
//echo $insert?'ok':'err';
}
} 
else 
{
echo 'invalid';
}
}

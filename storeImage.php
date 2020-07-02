<?php
session_start(); 
include("connect.php");

$result = mysqli_query($con,"SELECT Id AS EmploeeCode FROM `custlogin` where PhoneNo ='" . $_SESSION['PhoneNo'] . "'");
$row = mysqli_fetch_array($result);
$Id = $row['EmploeeCode'];

echo $Id;
$img = $_POST['image'];
$folderPath = "upload/";

$image_parts = explode(";base64,", $img);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];

$image_base64 = base64_decode($image_parts[1]);
 $fileName = uniqid() . '.png';

$file = $folderPath . $fileName;
file_put_contents($file, $image_base64);

if (isset($_POST["image"])) {
    $file = addslashes(file_get_contents($_FILES["results"]["tmp_name"]));
    //$query = "INSERT INTO snapshot ('Image') VALUES('" . $fileName . "')";
    //$query = "INSERT INTO snapshot('Image') VALUES('" . $fileName . "' )";
    $query = "INSERT INTO `attachment`(`id` , `image`)VALUES ('$Id','$fileName')";
    
    if (mysqli_query($con, $query)) {
        echo 'done';
    }else{
        echo $con -> error;
        
    }
}?>


  

<?php

// include("connect.php");
// $img = $_POST['image'];
// $folderPath = "upload/";


// if (!isset($_POST["image"])) {
//     $file = addslashes(file_get_contents($_FILES["results"]["tmp_name"]));
//     $query = "INSERT INTO snapshot VALUES($id,'" . $fileName . "')";

//     if (mysqli_query($con, $query)) {
//         echo 'done';
//     }
// }

?> 


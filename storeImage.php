<?php
    $connect = mysqli_connect("localhost","root","","webcam"); 
    $img = $_POST['image'];
    $folderPath = "upload/";
  
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.png';
  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);
  


    
    if (isset($_post["image"])) { 
        $file=addslashes(file_get_contents($_file["results"]["tmp_name"])); 
        $query="INSERT INTO snapshot VALUES($id,'".$fileName."')"; 
        if (mysql_query($connect, $query)) 
            { 
                echo 'done'; 
    } 
}
  
?> 


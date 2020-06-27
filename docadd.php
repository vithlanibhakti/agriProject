<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
$id=$_POST['id'];
// If file upload form is submitted 
$status = $statusMsg = ''; 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = mysql_query("INSERT INTO `attach`(`image`, `uploded`, `Id`) VALUES ('$imgContent', NOW(),'$id')"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
				echo json_encode("1 results");
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
				echo json_encode("0 results");
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 

 
// Display status message 
echo $statusMsg; 
?>

<?php
include_once("adminheader - Copy.php");
?>
<div id="main">
<?php
$sql = "select * from attachment ";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
while ($row = mysqli_fetch_assoc($result)) {	
	$id = $row['id'];
	 $qury = "select * from attachment where id = ".$id;
	 $result2 = mysqli_query($con,$qury);
		$row2 = mysqli_fetch_array($result2);
	 while ($row2 = mysqli_fetch_assoc($result2)) {
		echo "<img src='upload/".$row['image']."'>";
	 }
	
	
	// if($id == $nextid && $nextid != ""){
	// 	echo "<img src='upload/".$row['image']."'>";
		
	// }else{
	// 	echo "<br>";
		
	// }
}

// $imagesDirectory = "webcamImage/";
//  echo "<div class='container'> <center>Receipt Proof";
// if(is_dir($imagesDirectory))
// {
// 	$opendirectory = opendir($imagesDirectory);
  
//     while (($image = readdir($opendirectory)) !== false)
// 	{
// 		if(($image == '.') || ($image == '..'))
// 		{
// 			continue;
// 		}
		
// 		$imgFileType = pathinfo($image,PATHINFO_EXTENSION);
		
// 		if(($imgFileType == 'jpg') || ($imgFileType == 'png'))
// 		{
// 			echo "<img src='webcamImage/".$image."'> webcamImage/".$image." </center></div>";
			
// 		}
//     }
	
//     closedir($opendirectory);
 
// }
?>
</div>
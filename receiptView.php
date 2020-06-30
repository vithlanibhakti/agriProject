<?php
include_once("adminheader - Copy.php");
?>
<div id="main">
<?php
$imagesDirectory = "webcamImage/";
 echo "<div class='container'> <center>Receipt Proof";
if(is_dir($imagesDirectory))
{
	$opendirectory = opendir($imagesDirectory);
  
    while (($image = readdir($opendirectory)) !== false)
	{
		if(($image == '.') || ($image == '..'))
		{
			continue;
		}
		
		$imgFileType = pathinfo($image,PATHINFO_EXTENSION);
		
		if(($imgFileType == 'jpg') || ($imgFileType == 'png'))
		{
			echo "<img src='webcamImage/".$image."'> webcamImage/".$image." </center></div>";
			
		}
    }
	
    closedir($opendirectory);
 
}
?>
</div>
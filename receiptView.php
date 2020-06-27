<?php
include_once("adminheader.php");
?>
<div id="main">
<?php
$imagesDirectory = "webcamImage/";
 echo "Receipt Proof";
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
			echo "<img src='webcamImage/".$image."' width='200'> ";
		}
    }
	
    closedir($opendirectory);
 
}
?>
</div>
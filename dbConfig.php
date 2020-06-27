
<?php 
$conn=mysql_connect('localhost','root','');
$db=mysql_select_db('agricultureconsultancy',$conn);
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
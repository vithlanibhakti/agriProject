<?php
include('connect.php');
if(isset($_POST['view'])){
if($_POST["view"] != '')
{
    $update_query = "UPDATE try SET status = 1 WHERE status=0";
    mysqli_query($con, $update_query);
}
$query = "SELECT * FROM try ORDER BY id DESC LIMIT 50";
$result = mysqli_query($con, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
   $output .= '
   <li>
   <a href="#">
   <strong>'.$row["name"].'</strong><br />
   </a>
   </li>
   ';
 }
}
else{
     $output .= '
     <li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}

$status_query = "SELECT * FROM try WHERE status=0";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
    'notification' => $output,
    'unseen_notification'  => $count
);

echo json_encode($data);
}
?>
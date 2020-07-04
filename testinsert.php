<head><meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
</head>

<?php
//insert.php
session_start();
include("connect.php");
if(!isset($_SESSION['PhoneNo']))
{
	echo "<script>alert('You are not logged on...');</script>";
	header("refresh:0; url='login.php'");
}
else
{	
	$PhoneNo = $_SESSION['PhoneNo'];
 }
 //$data= http_build_query($_POST);

 echo print_r($_POST,true);
 //echo $data;

  //echo json_encode($data, JSON_PRETTY_PRINT);

 $result = mysqli_query($con,"SELECT Id FROM `custlogin` where PhoneNo ='".$_SESSION['PhoneNo']."'");

$row = mysqli_fetch_array($result);
 $EC = $row['Id']; 

 $name = mysqli_real_escape_string($con, $_POST["fname"]);
 $phn = mysqli_real_escape_string($con, $_POST["phn"]);
 $mail = mysqli_real_escape_string($con, $_POST["mail"]);
 $address = mysqli_real_escape_string($con, $_POST["address"]);
 $pin = mysqli_real_escape_string($con, $_POST["pin"]);
 


$typeofsoil ="કાળી";
 if(isset($_POST['soilt1'])){
	$typeofsoil = $typeofsoil ." કાળી";
 }
 if(isset($_POST['soilt2'])){
	$typeofsoil = $typeofsoil.", મધ્યમ કાળી";
 }if(isset($_POST['soilt3'])){
	$typeofsoil =$typeofsoil.", ગોરાળ";
 }if(isset($_POST['soilt4'])){
	$typeofsoil =$typeofsoil.", રેતાળ";
 }if(isset($_POST['soilt5'])){
	$typeofsoil =$typeofsoil.", મોરમ / રફવાળી";
 }if(isset($_POST['soilt6'])){
	$typeofsoil =$typeofsoil.", ક્ષારવાની";
 }if(isset($_POST['soilt7'])){
	$typeofsoil =$typeofsoil.", અન્ય";
 }

 $typeofirrigation="";
 if(isset($_POST['irrigation1'])){
	$typeofirrigation ="રેડ ( ખુલ્લું ) પાણી";
 }if(isset($_POST['irrigation2'])){
	$typeofirrigation =$typeofirrigation.", ડ્રીપથી સિંચાઈ";
 }if(isset($_POST['irrigation3'])){
	$typeofirrigation =$typeofirrigation.", સ્પ્રિંકલરથી સિંચાઇ";
 }if(isset($_POST['irrigation4'])){
	$typeofirrigation =$typeofirrigation.", અન્ય";
 }


 $typeofequipment="";
 if(isset($_POST['equipment1'])){
	$typeofequipment = $typeofequipment.", બોરવેલ";
 }if(isset($_POST['equipment2'])){
	$typeofequipment =$typeofequipment.", કુવો";
 }if(isset($_POST['equipment3'])){
	$typeofequipment =$typeofequipment.", નદી";
 }if(isset($_POST['equipment4'])){
	$typeofequipment =$typeofequipment.", નાળા";
 }if(isset($_POST['equipment5'])){
	$typeofequipment =$typeofequipment.", તળાવ";
 }if(isset($_POST['equipment6'])){
	$typeofequipment =$typeofequipment.", અન્ય";
 }

 $afterrain= mysqli_real_escape_string($con,$_POST['afterrain']);

 $typeofcrackd = "";
 if(isset($_POST['crackedt1']) ){
	$typeofcrackd = "મોટી";
 }if(isset($_POST['crackedt2'])){
	$typeofcrackd =", મધ્યમ";
 }if(isset($_POST['crackedt3'])){
	$typeofcrackd =$typeofcrackd.", નાની";
 }
 $cowcount= mysqli_real_escape_string($con,$_POST['cowcount']);
 $bufflowcount= mysqli_real_escape_string($con,$_POST['bufflowcount']);
 $bullcount= mysqli_real_escape_string($con,$_POST['bullcount']);
 $othercount= mysqli_real_escape_string($con,$_POST['othercount']);

 $lastmonsooncrop = mysqli_real_escape_string($con,$_POST['lastmcrop1']) . mysqli_real_escape_string($con,$_POST['lastmcrop2']) .mysqli_real_escape_string($con,$_POST['lastmcrop3']);
 $lastwintercrop = mysqli_real_escape_string($con,$_POST['lastwcrop1']) . mysqli_real_escape_string($con,$_POST['lastwcrop2']) .mysqli_real_escape_string($con,$_POST['lastwcrop3']);
 $lastsummercrop = mysqli_real_escape_string($con,$_POST['lastscrop1']) . mysqli_real_escape_string($con,$_POST['lastscrop2']) .mysqli_real_escape_string($con,$_POST['lastscrop3']);

 $cropclean ="";
 if(isset($_POST['clean1'])){
	$cropclean = $cropclean." ખેતરની બહાર";
 }if(isset($_POST['clean2'])){
	$cropclean =$cropclean." ખેતરમાં";
 }

 $cropremains="";
 if(isset($_POST['cropremains1'])){
	$cropremains = $cropremains." ખેતરમાં ભુકો કરી દાટીયા";
 }if(isset($_POST['cropremains2'])){
	$cropremains =$cropremains." ખેતરમાં સળગાવેલ";
 }if(isset($_POST['cropremains3'])){
	$cropremains =$cropremains." ખેતર બહાર કાઢેલ";
 }

 $lasthectorproduction= mysqli_real_escape_string($con,$_POST['Producthec1']) ."કિલો  ". mysqli_real_escape_string($con,$_POST['Producthec2']) . "મણ ";
 $lastaccorproduction= mysqli_real_escape_string($con,$_POST['Productac1']) ."કિલો  ". mysqli_real_escape_string($con,$_POST['Productac2']) . "મણ ";
 $lastvighaproduction= mysqli_real_escape_string($con,$_POST['Productvigha1']) ."કિલો  ". mysqli_real_escape_string($con,$_POST['Productvigha2']) . "મણ ";
 
 $monsooncropproblem= mysqli_real_escape_string($con,$_POST['mproblem']);
 $wintercropproblem= mysqli_real_escape_string($con,$_POST['wproblem']);
 $summercropproblem= mysqli_real_escape_string($con,$_POST['sproblem']);
 
 $season= mysqli_real_escape_string($con,$_POST['season']);


 $fildcrop = mysqli_real_escape_string($con,$_POST['fildcrop1']) . ", ". mysqli_real_escape_string($con,$_POST['fildcrop2']). ", ".mysqli_real_escape_string($con,$_POST['fildcrop3']);
 $frutcrop = mysqli_real_escape_string($con,$_POST['frutcrop1']) . ", ". mysqli_real_escape_string($con,$_POST['frutcrop2']). ", ".mysqli_real_escape_string($con,$_POST['frutcrop3']);
 $vegcrop = mysqli_real_escape_string($con,$_POST['vegcrop1']) . ", ". mysqli_real_escape_string($con,$_POST['vegcrop2']). ", ".mysqli_real_escape_string($con,$_POST['vegcrop3']);
 $flowercrop = mysqli_real_escape_string($con,$_POST['flowercrop1']) . ", ". mysqli_real_escape_string($con,$_POST['flowercrop2']). ", ".mysqli_real_escape_string($con,$_POST['flowercrop3']);
 $medicrop = mysqli_real_escape_string($con,$_POST['medicrop1']) . ", ". mysqli_real_escape_string($con,$_POST['medicrop2']). ", ".mysqli_real_escape_string($con,$_POST['medicrop3']);

 $cropname	= mysqli_real_escape_string($con,$_POST['cropname']);
 $cropcast	= mysqli_real_escape_string($con,$_POST['cropcast']);
 $cropplantdate	= mysqli_real_escape_string($con,$_POST['dateofplant']);

 $seedmass = mysqli_real_escape_string($con,$_POST['vigha']) ."/વીઘા ". mysqli_real_escape_string($con,$_POST['accor'])."/એકર " .mysqli_real_escape_string($con,$_POST['heccor'])." /હેક્ટર" ;
 $tworowdistance = mysqli_real_escape_string($con,$_POST['rowcm']) ."/સેમી ". mysqli_real_escape_string($con,$_POST['rowinch'])."/ઇંચ " ;
 $towplantdistance = mysqli_real_escape_string($con,$_POST['plantcm']) ."/સેમી ". mysqli_real_escape_string($con,$_POST['plantinch'])."/ઇંચ" ;

 $treename	= mysqli_real_escape_string($con,$_POST['treename']);
 $treecast	= mysqli_real_escape_string($con,$_POST['treecast']);
 $treeplantdate	= mysqli_real_escape_string($con,$_POST['treeplant']);

 $treecount = mysqli_real_escape_string($con,$_POST['treevigha']) ."/વીઘા ". mysqli_real_escape_string($con,$_POST['treeaccor'])."/એકર " .mysqli_real_escape_string($con,$_POST['treeheccor'])." /હેક્ટર" ;
 $treedistance1 = mysqli_real_escape_string($con,$_POST['treerowcm']) ."/સેમી ". mysqli_real_escape_string($con,$_POST['treerowinch'])."/ઇંચ " ;
 $treedistance2 = mysqli_real_escape_string($con,$_POST['treerowcm1']) ."/સેમી ". mysqli_real_escape_string($con,$_POST['treerowinch1'])."/ઇંચ " ;


//  $query="INSERT INTO `PlantCons`(`Farmer_Name`, `Mobile_No`, `Village`, `Survey_No`, `Taluka`, `TestingDate`, `CropName`, `SampleNo`, `Id`)
//  VALUES ('$name','$phn','$village','$survey','$taluka','$testing','$crop','$sample','$EC')";
//  $a=mysqli_query($con, $query);
 $query = "INSERT INTO `plantcons2`
 (`id`, `fname`, `mail`, `address`, `pin`, `typeofsoil`, `typeofirrigation`, `typeofequipment`, `afterrain`, `typeofcrackd`, `cowcount`, `bufflowcount`, `bullcount`, `othercount`, `lastmonsooncrop`, `lastwintercrop`, `lastsummercrop`, `cropclean`, `cropremains`, `lasthectorproduction`, `lastaccorproduction`, `lastvighaproduction`, `monsooncropproblem`, `wintercropproblem`, `summercropproblem`, `season`, `fieldcrop`, `frutcrop`, `vegcrop`, `flowercrop`, `medicrop`, `cropname`, `cropcast`, `cropplantdate`, `seedmass`, `tworowdistance`, `towplantdistance`, `treename`, `treecast`, `treeplantdate`, `treecount`, `treedistance1`, `treedistance2`)
  VALUES  ( 
$EC,
'".$name."',
'".$mail."',
'".$address."',
'".$pin."',
'".$typeofsoil."',
'".$typeofirrigation."',
'".$typeofequipment."',
'".$afterrain."',
'".$typeofcrackd."',
'".$cowcount."',
'".$bufflowcount."',
'".$bullcount."',
'".$othercount."',
'".$lastmonsooncrop."',
'".$lastwintercrop."',
'".$lastsummercrop."',
'".$cropclean."',
'".$cropremains."',
'".$lasthectorproduction."',
'".$lastaccorproduction."',
'".$lastvighaproduction."',
'".$monsooncropproblem."',
'".$wintercropproblem."',
'".$summercropproblem."',
'".$season."',
'".$fildcrop."',
'".$frutcrop."',
'".$vegcrop."',
'".$flowercrop."',
'".$medicrop."',
'".$cropname."',
'".$cropcast."',
'".$cropplantdate."',
'".$seedmass."',
'".$tworowdistance."',
'".$towplantdistance."',
'".$treename."',
'".$treecast."',
'".$treeplantdate."',
'".$treecount."',
'".$treedistance1."',
'".$treedistance2."')";

 echo "<br><br><br>".$query."<br><br><br>";
if(mysqli_query($con,$query)){
	echo "<script>alert('form submited');</script>";
	header("location: HomePage.php");
}else{
	echo mysqli_error($con);
}


	
	


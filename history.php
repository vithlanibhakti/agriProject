<?php
include_once 'header.php';
include_once 'dbConfig.php';

$result = mysqli_query($con,"SELECT Id AS EmploeeCode FROM `custlogin` where PhoneNo ='".$_SESSION['PhoneNo']."'");
$row = mysqli_fetch_array($result);
$EC = $row['EmploeeCode']; 

$q="SELECT  `Id`, `Name`, `Email`, `Password`, `PhoneNo` FROM `custlogin` WHERE Id = '$EC'";
	$result=mysqli_query($con,$q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysqli_error($con).$result);
		}
		echo "<div class='container'><div class='card '><div class=' card-header bg-secondary white-text text-center '>Customer</div>";
		echo "<table class='table table-striped table-responsive-md btn-table '>";
		echo "<center>	
		<th >id</th>
		<th>Name</th>
		<th >Email</th>
		<th >Password</th>
		<th >PhoneNo</th>
		</center>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td >".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table></div>";

$q="SELECT `Water_Id`, `Farmer_name`, `Mobile_no`, `Village`, `Survey_no`, `Taluka`, `TestingDate`, `CropName`, `SampleNo`,`Id` FROM `water` WHERE Id = '$EC'";
	$result=mysqli_query($con,$q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysqli_error($con).$result);
		}
		echo "<div class='card '><div class=' card-header bg-secondary white-text text-center '>Water Test</div>";
		echo "<table class='table table-striped table-responsive-md btn-table ' >";
		echo "<center>	
		<th >Water_Id</th>
		<th >Farmer_name</th>
		<th >Mobile_no</th>
		<th >Village</th>
		<th >Survey_no</th>
		<th >Taluka</th>
		<th >TestingDate</th>
		<th >CropName</th>
		<th >SampleNo</th>
		<th >Id</th>
		</center>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td >".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table> </div>";

		
		$q="SELECT `Soil_Id`, `Farmer_name`, `Mobile`, `Village`, `Survey_number`, `Taluka`, `Testing_date`, `Crop_name`, `Sample_no`,`Id` FROM `soil` WHERE Id = '$EC'";
	$result=mysqli_query($con,$q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysqli_error($con).$result);
		}
		echo "<div class='card '><div class=' card-header bg-secondary white-text text-center '>Soil Test</div>";
		echo "<table class='table table-striped table-responsive-md btn-table ' >";
		echo "<center>	
		<th >Soil_Id</th>
		<th >Farmer_name</th>
		<th >Mobile_no</th>
		<th >Village</th>
		<th >Survey_no</th>
		<th >Taluka</th>
		<th >TestingDate</th>
		<th >CropName</th>
		<th >SampleNo</th>
		<th >Id</th>
		</center>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td>".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table></div>";?>

		
	<!-- // 	$q="SELECT `Plant_Id`, `fname`, `number`, `address`, `Survey_No`, `pin`, `TestingDate`, `CropName`, `SampleNo`,`Payment_status`, `id` FROM `plantcons2` WHERE Id = '$EC'";
	// $result=mysqli_query($con,$q);
	// 	 if($result === FALSE)
	// 	{
    //         die("Query Failed!".mysqli_error($con).$result);
	// 	}
	// 	echo "<div class='card '><div class=' card-header bg-secondary white-text text-center '>Plant Consulantcy</div>";
	// 	echo "<table class='table table-striped table-responsive-md btn-table ' >";
	// 	echo "<center>	
	// 	<th>Plant_Id</th>
	// 	<th>Farmer_name</th>
	// 	<th>Mobile_no</th>
	// 	<th>Village</th>
	// 	<th>Survey_no</th>
	// 	<th>Taluka</th>
	// 	<th>TestingDate</th>
	// 	<th>CropName</th>
	// 	<th>SampleNo</th>
	// 	<th>Payment_status</th>
	// 	<th>Id</th>
	// 	</center>";
	// 	while($row=mysqli_fetch_assoc($result))
	// 	{
	// 		echo "<tr>";
	// 		foreach($row as $v)
	// 		{
	// 			echo "<td >".$v."</td>";
	// 		}
	// 		echo "</tr>";
	// 	}
	// 	echo "</table> </div>";

		
	// 	$q="SELECT `Basic_Id`, `name`, `address`, `area`, `w`, `Id` FROM `try` WHERE Id = '$EC'";
	// $result=mysqli_query($con,$q);
	// 	 if($result === FALSE)
	// 	{
    //         die("Query Failed!".mysqli_error($con).$result);
	// 	}
	// 	echo "<div class='card '><div class=' card-header bg-secondary white-text text-center '>Basic Details</div>";
	// 	echo "<table class='table table-striped table-responsive-md btn-table '>";
	// 	echo "<center>	
	// 	<th>Basic_Id</th>
	// 	<th>name</th>
	// 	<th>address</th>
	// 	<th>area</th>
	// 	<th>w</th>
	// 	<th>Id</th>
	// 	</center>";
	// 	while($row=mysqli_fetch_assoc($result))
	// 	{
	// 		echo "<tr>";
	// 		foreach($row as $v)
	// 		{
	// 			echo "<td>".$v."</td>";
	// 		}
	// 		echo "</tr>";
	// 	}
	// 	echo "</table> </div>";


// $result = mysql_query("SELECT `Name` FROM `custlogin` WHERE Id = '$Id'");
// $row = mysql_fetch_array($result);
// $EC = $row['Name']; 
// //echo ($EC); -->
<?php 
$qurry = "select * from plantcons2 where id = ".$EC;
$result = mysqli_query($con, $qurry); ?>
    <div class="text-center card-header bg-secondary ">PlantConsulantancy</div>
    <?php

    if ($result === FALSE) {
        die("Query Failed!" . mysqli_error($con) . $result);
    }
    while ($plantcons2s = mysqli_fetch_assoc($result)) {
    ?>

        <div class="card ">
            <div class="accordion md-accordion" id="accordion" data-toggle="collapse" data-target="#collapse<?= $plantcons2s['id'] ?>">
                <div class="card-header" >
                    <span class="card-link"><?php echo $plantcons2s['id'] ?></span>
                    <div class="row">
                        <div class="col-sm-12 col-md-5"><span class="fa ">ખેડુતનું નામ : </span><span><?php echo $plantcons2s['fname'] ?></span></div>
                        <div class="col-sm-12 col-md-5"><span class="fa ">ઈમેઈલ : </span><span><?php echo $plantcons2s['mail'] ?></span></div>
                        <div class="col-sm-12 col-md-5"><span class="fa ">સરનામું :</span><span> <?php echo $plantcons2s['address'] ?></span></div>
                        <div class="col-sm-12 col-md-5"><span class="fa ">પીનકોડ :</span><span> <?php echo $plantcons2s['pin'] ?></span></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 col-md-5"><span class="fa ">માટીનો પ્રકાર : </span><span><?php echo $plantcons2s['typeofsoil'] ?></span></div>
                        <div class="col-sm-12 col-md-5"><span class="fa ">સિંચાઇનો પ્રકાર :</span><span> <?php echo $plantcons2s['typeofirrigation'] ?></span></div>
                        <div class="col-sm-12 col-md-5"><span class="fa ">સિંચાઇના સાઘન : </span><span><?php echo $plantcons2s['typeofequipment'] ?></span></div>
                        <div class="col-sm-12 col-md-5"><span class="fa ">વરસાદ ના ' </span><span><?php echo $plantcons2s['afterrain'] ?> દિવસ' </span></div>
                        <div class="col-sm-12 col-md-5"><span class="fa ">તીરાડ : </span><span> <?php echo $plantcons2s['typeofcrackd'] ?></span></div>
                    </div>
                    <i class="fas fa-angle-down rotate-icon d-flex justify-content-center text-primary">
                        <p class="px-1">More Details</p>
                    </i>
                </div>
            </div>
            <div id="collapse<?= $plantcons2s['id'] ?>" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <span class="fa ">ગાય ની સંખ્યા : </span><span> <?php echo $plantcons2s['cowcount'] ?></span></div>
                        <div class="col-sm-6 col-md-3">
                            <span class="fa ">ભેંસ ની સંખ્યા : </span><span><?php echo $plantcons2s['bufflowcount'] ?></span></div>
                        <div class="col-sm-6 col-md-3">
                            <span class="fa  ">બળદ ની સંખ્યા : </span><span> <?php echo $plantcons2s['bullcount'] ?></span></div>
                        <div class="col-sm-6 col-md-3">
                            <span class="fa">અન્ય ની સંખ્યા : </span><span> <?php echo $plantcons2s['othercount'] ?></span></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <div class="card-header bg-gray">ગર્ચા વર્ષે લીઘેલ પાક :</div>
                            <table class="table  border">
                                <tr>
                                    <th>ચોમાસું</th>
                                    <td><span><?php echo $plantcons2s['lastmonsooncrop'] ?></span></td>

                                </tr>
                                <tr>
                                    <th>શિયાળુ</th>
                                    <td><span><?php echo $plantcons2s['lastwintercrop'] ?></span></td>

                                </tr>
                                <tr>
                                    <th>ઉનાળું</th>
                                    <td><span><?php echo $plantcons2s['lastsummercrop'] ?></span></td>

                                </tr>
                            </table>

                        </div>

                    </div>
                    <div class=" row p-3">
                        <div class="col-sm-6 col-md-12  ">
                            <span class="fa">પાછલા પાકની સફાઈ : </span>
                            <span><?php echo $plantcons2s['cropclean'] ?></span>
                        </div>
                        <div class="col-sm-6 col-md-12">
                            <span class="fa">પાછલા પાકના અવશેષો :</span>
                            <span><?php echo $plantcons2s['cropremains'] ?></span>
                        </div>
                    </div>
                    <div clas="row p-3">
                        <div class="card-header bg-gray">પાછલા વર્ષના પાકનું ઉત્પાદન :</div>
                        <table class="table border">
                            <th></th>
                            <th>કિલો / મણ</th>
                            <tr>
                                <th>પ્રતિ હેક્ટર</th>
                                <td><span><?php echo $plantcons2s['lasthectorproduction'] ?></span></td>
                            </tr>
                            <tr>
                                <th>પ્રતિ એકર</th>
                                <td><span><?php echo $plantcons2s['lastaccorproduction'] ?></span></td>
                            </tr>
                            <tr>
                                <th>પ્રતિ વીઘા</th>
                                <td><span><?php echo $plantcons2s['lastvighaproduction'] ?></span></td>
                            </tr>
                        </table>
                    </div>

                    <div class="row  justify-content-between  p-3  ">
                        <p class="fa">પાછલા પાઇમાં થયેલ સમસ્યા :</p>
                        <span>ચોમાસું : <?php echo $plantcons2s['monsooncropproblem'] ?></span>
                        <span>શિયાળો : <?php echo $plantcons2s['wintercropproblem'] ?></span>
                        <span>ઉનાળો : <?php echo $plantcons2s['summercropproblem'] ?></span>
                    </div>
                    <p class="card-header bg-gray"> વાવેતર કરવાનો પાકની વિગત : </p>
                    <p>ઋતુ : <?php echo $plantcons2s['season'] ?></p>
                    <table class="table border ">
                        <tr>
                            <th>ફીલ્ડ ક્રોપ</th>
                            <td><span><?php echo $plantcons2s['fieldcrop'] ?></span></td>
                        </tr>
                        <tr>
                            <th>ફળ પાક</th>
                            <td><span><?php echo $plantcons2s['frutcrop'] ?></span></td>
                        </tr>
                        <tr>
                            <th>શાક્ભજી</th>
                            <td><span><?php echo $plantcons2s['vegcrop'] ?></span></td>
                        </tr>
                        <tr>
                            <th>ફુલછોડ</th>
                            <td> <span><?php echo $plantcons2s['flowercrop'] ?></span></td>
                        </tr>
                        <tr>
                            <th>ઔષધિ પાક</th>
                            <td><span><?php echo $plantcons2s['medicrop'] ?></span></td>
                        </tr>
                    </table>
                    <hr>
                    <div class="row p-2">
                        <div class="md-form col-6">
                            <label for="cropname">પાકનું નામ : </label>
                            <span><?php echo $plantcons2s['cropname'] ?></span>
                        </div>
                        <div class="md-form col-6">
                            <label for="cropcast">જાત : </label>
                            <span><?php echo $plantcons2s['cropcast'] ?></span>
                        </div>
                        <div class="md-form col-6">
                            <label for="dateofplant">વાવેતરની તારીખ : </label>
                            <span><?php echo $plantcons2s['cropplantdate'] ?></span>

                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="justify-content-between m-2">
                            <label for="vigha">બિયારણનો દર: </label>
                            <span><?php echo $plantcons2s['seedmass'] ?></span>
                        </div>

                        <div class="justify-content-between m-2">
                            <label for="rowcm">બે હાર વચ્ચેનું અંતર : </label>
                            <span><?php echo $plantcons2s['tworowdistance'] ?></span>
                        </div>

                        <div class="justify-content-between m-2">
                            <label for="cm">બે છોડ વચ્ચેનું અંતર : </label>
                            <span><?php echo $plantcons2s['towplantdistance'] ?></span>
                        </div>
                    </div>
                    <hr>
                    <div class="row p-2">
                        <div class="col-sm-12 col-md-4">
                            <label for="treename">ઝાડનું નામ : </label>
                            <span><?php echo $plantcons2s['treename'] ?></span>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="cast">જાત : </label>
                            <span><?php echo $plantcons2s['treecast'] ?></span>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="treeplant">વાવેતરની તારીખ : </label>
                            <span><?php echo $plantcons2s['treeplantdate'] ?></span>
                        </div>

                    </div>
                    <div class="d-flex flex-column p-2">
                        <div class="justify-content-between">
                            <label for="vigha">બિયારણનો દર: </label>
                            <span><?php echo $plantcons2s['treecount'] ?></span>
                        </div>

                        <div class="justify-content-between">
                            <label for="rowcm">બે હાર વચ્ચેનું અંતર : </label>
                            <span><?php echo $plantcons2s['treedistance1'] ?></span>
                        </div>

                        <div class="justify-content-between">
                            <label for="cm">બે છોડ વચ્ચેનું અંતર : </label>
                            <span><?php echo $plantcons2s['treedistance2'] ?></span>
                        </div>
                        <div>
                            <span>Payment Status : <?php echo $plantcons2s['payment_status']; ?></span>
                        </div>


                    </div>
                </div>
			</div> 
		</div>

<?php } ?>

	<?php	$q="SELECT `Amount_Id`, `amount`, `date`,  `Id` FROM `amount` WHERE Id = '$EC'";
	$result=mysqli_query($con,$q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysqli_error($con).$result);
		}
		echo "<div class='card '><div class=' card-header bg-secondary white-text text-center '>Amount</div>";
		echo "<table class='table table-striped table-responsive-md btn-table' >";
		echo "<center>	
		<th>Amount_Id</th>
		<th>amount</th>
		<th>date</th>
		<th>Id</th>
		</center>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach($row as $v)
			{
				echo "<td>".$v."</td>";
			}
			echo "</tr>";
		}
		echo "</table> </div> </div>";

include_once("footer.html");
?>
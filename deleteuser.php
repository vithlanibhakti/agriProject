<?php

                    
include_once 'dbConfig.php';
if(isset($_GET['Id']))
{
		$Id=$_GET['Id'];

		$dlt1=  mysqli_query($con,"delete from soil where Id=$Id");
		if($dlt1)
		{
			echo "<br>".'dlt soil'."<br>";
		 }
		 else {
		   echo mysqli_error();
			  }
                   

		$dlt1=  mysqli_query($con,"delete from water where Id=$Id");
		if($dlt1)
		{
			echo "<br>".'dlt water'."<br>";
		 }
		 else {
		   echo mysqli_error();
			  }
										
		

		$dlt1=  mysqli_query($con,"delete from amount where Id=$Id");
		if($dlt1)
		{
			echo "<br>".'dlt amount'."<br>";
		 }
		 else {
		   echo mysqli_error();
			  }
										
			




		$dlt1=  mysqli_query($con,"delete from try where Id=$Id");
		if($dlt1)
		{
			echo "<br>".'dlt BasicDetails'."<br>";
		 }
		 else {
		   echo mysqli_error();
			  }
										
						   



		$dlt1=  mysqli_query($con,"delete from plantcons where Id=$Id");
		if($dlt1)
		{
			echo "<br>".'dlt plantcons'."<br>";
		 }
		 else {
		   echo mysqli_error();
			  }
                      			
}
$dl1=  mysqli_query($con,"delete from custlogin where Id=$Id");
                      if($dl1)
                      {
                          header("Location: basicDetailsView.php");
                      }
                             else {
                          echo mysqli_error();
                         }
                   

                        ?>
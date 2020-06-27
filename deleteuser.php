<?php

                    
include_once 'dbConfig.php';
if(isset($_GET['Id']))
{
		$Id=$_GET['Id'];

		$dlt1=  mysql_query("delete from soil where Id=$Id");
		if($dlt1)
		{
			echo "<br>".'dlt soil'."<br>";
		 }
		 else {
		   echo mysql_error();
			  }
                   

		$dlt1=  mysql_query("delete from water where Id=$Id");
		if($dlt1)
		{
			echo "<br>".'dlt water'."<br>";
		 }
		 else {
		   echo mysql_error();
			  }
										
		

		$dlt1=  mysql_query("delete from amount where Id=$Id");
		if($dlt1)
		{
			echo "<br>".'dlt amount'."<br>";
		 }
		 else {
		   echo mysql_error();
			  }
										
			




		$dlt1=  mysql_query("delete from try where Id=$Id");
		if($dlt1)
		{
			echo "<br>".'dlt BasicDetails'."<br>";
		 }
		 else {
		   echo mysql_error();
			  }
										
						   



		$dlt1=  mysql_query("delete from plantcons where Id=$Id");
		if($dlt1)
		{
			echo "<br>".'dlt plantcons'."<br>";
		 }
		 else {
		   echo mysql_error();
			  }
                      			
}
$dl1=  mysql_query("delete from custlogin where Id=$Id");
                      if($dl1)
                      {
                          header("Location: basicDetailsView.php");
                      }
                             else {
                          echo mysql_error();
                         }
                   

                        ?>

<html>
 <head>
  <title>Admin HomePage</title>
  <meta charset="utf-8">
 
    <meta name="description" content="">
    <meta name="author" content="">
<style>
.top-contact-menu {
  
  width: 100%;
}
.top-contact-menu h2 {
  color: #fff;
  font-size: 14px;
  display: inline-block;
}
ul.address-top-menu {
  list-style: none;
  float: right;
  padding-right: 10px;
  vertical-align: top;
  margin-top: 10px;
}
</style>
<?php include_once("adminheader.php");?> 
<?php include_once("connect.php");?> 
 
 <div id="main"> 
  
 
             <center><h3>List of PlantConsulantancy</h3></center>
<div class="container">
  <div id="navbar">  
  
  	
	<?php
			 echo "<center>";
			 
	 $q="SELECT `Plant_Id`, `Farmer_Name`, `Mobile_No`, `Village`, `Survey_No`, `Taluka`, `TestingDate`, `CropName`, `SampleNo`, `status`, `Id`, `Payment_status` FROM `plantcons` ";
				$result=mysqli_query($con,$q);
		 if($result === FALSE)
		{
            die("Query Failed!".mysqli_error().$result);
		}
		echo "<table id='tbl' border=3>";
		echo "<center>	
		<th style='padding-left:10px;padding-right:10px;' class='nr'>id</th>
		<th style='padding-left:10px;padding-right:10px;'>FarmerName</th>
		<th style='padding-left:10px;padding-right:10px;'>Mobile_No</th>
		<th style='padding-left:10px;padding-right:10px;'>Village</th>
		<th style='padding-left:20px;padding-right:20px;'>Survey_No</th>
		<th style='padding-left:20px;padding-right:20px;'>Taluka</th>
		<th style='padding-left:20px;padding-right:20px;'>TestingDate</th>
		<th style='padding-left:20px;padding-right:20px;'>CropName</th>
		<th style='padding-left:20px;padding-right:20px;'>SampleNo</th>
		<th style='padding-left:20px;padding-right:20px;'>UniqueCode</th>
		<th style='padding-left:20px;padding-right:20px;'>PayAmount</th>
		<th style='padding-left:20px;padding-right:20px;'>Delete</th>
				<th style='padding-left:20px;padding-right:20px;'>Payment_status</th>
		<th style='padding-left:20px;padding-right:20px;'>Attachment</th>

		</center>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr class'test'>";
				
				// echo "<td style='padding:5px;' >".$v."</td>";
				echo "<td class='ids'>" . $row['Plant_Id'] . "</td>";
				echo "<td>" . $row['Farmer_Name'] . "</td>";
				echo "<td>" . $row['Mobile_No'] . "</td>";
				echo "<td>" . $row['Village'] . "</td>";
				echo "<td>" . $row['Survey_No'] . "</td>";
				echo "<td>" . $row['Taluka'] . "</td>";
				echo "<td>" . $row['TestingDate'] . "</td>";
				echo "<td>" . $row['CropName'] . "</td>";
				echo "<td>" . $row['SampleNo'] . "</td>";
				echo "<td>" . $row['Id'] . "</td>";

		
		echo "<td><input type='text' name='pay' id='pay' ><button id=insert class=insert>PayAmount</button></td>";
			echo "<td><button   id=del class=del>Delete</button> </td>";
echo "<td>" . $row['Payment_status'] . "<button id='status' name='status'><i class='fa fa-check' aria-hidden='true'></i></button></td>";
		// echo "<td><input type='file' id='file' name='file' /><input type='button' class='button' value='Upload' id='but_upload'></td>";
		echo "<td>
<form id=form' action='ajaxupload.php' method='post' enctype='multipart/form-data'><input id='image' type='file' accept='image/*' name='image' /><input id='btn' class='btn btn-success' type='submit' value='Upload'></form></td>";

			echo "</tr>";
		}
		echo "</table>";
		
		include_once("footer.html");
		echo "</center>";?>
	  </div>
		
</body>
</html>
<script>
$(document).ready(function(){
 //Plant notification
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"PlantFetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
	
	    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});


debugger;
// insert amount
$("#tbl").on('click', '#insert', function () {
	      var rid=($(this).closest('td').parent()[0].sectionRowIndex);
		  alert(rid);
	
	
   var val = $(this).closest('tr').find('#pay').val();	  
		alert(val);
	  if(val != '' && id != '')
	  {
     
 var tr = $(this).closest('tr');
        var id = tr.find('.ids').text();
        var tester = tr.find('.tester').text();
        alert('id: '+id);
		
		  $.ajax({
			url: "amountadd.php",
			type: "POST",
			data:{
				id: id,
				val :val
			},
			success: function(dataResult){
				alert("Amount Inserted");
				$('#pay').val('');
			}

	  });
	  }
else{
	alert("Plese enter amount");
	$('#pay').val('');
}	   
});

// delete plant record
$("#tbl").on('click', '#del', function () {
          var rid=($(this).closest('td').parent()[0].sectionRowIndex);
		  alert(rid);
		  
		  
 var tr = $(this).closest('tr');
        var id = tr.find('.ids').text();
        var tester = tr.find('.tester').text();
        alert('id: '+id);
		
		  $.ajax({
			url: "deletePlant.php",
			type: "POST",
			data:{
				id: id
			},
			success: function(dataResult){
								alert("deleted");
								
			}
			
		});
		  
         });
		 
		 //Plant Payment status
$("#tbl").on('click', '#status', function () {
          var rid=($(this).closest('td').parent()[0].sectionRowIndex);
		  alert(rid);
		  
		  var tr = $(this).closest('tr');
        var id = tr.find('.ids').text();
        var tester = tr.find('.tester').text();
        alert('id: '+id);
		  $.ajax({
			url: "updatePlant.php",
			type: "POST",
			data:{
				id: id
			},
			success: function(dataResult){
				alert("Updated");
				
			}
			
		});

});

// attachment js

// $("#tbl").on('click', '#btn', function () {
          // var rid=($(this).closest('td').parent()[0].sectionRowIndex);
		  // alert(rid);
		  
		  // var tr = $(this).closest('tr');
        // var id = tr.find('.ids').text();
        // var tester = tr.find('.tester').text();
        // alert('id: '+id);
// $.ajax({
         // url: "ajaxupload.php",
   // type: "POST",
   // data:  new FormData(this), //here want to pass id
   // contentType: false,
         // cache: false,
   // processData:false,
   // beforeSend : function()
   // {
    // //$("#preview").fadeOut();
    // $("#err").fadeOut();
   // },
   // success: function(data)
      // {
    // if(data=='invalid')
    // {
     // // invalid file format.
     // $("#err").html("Invalid File !").fadeIn();
    // }
    // else
    // {
     // // view uploaded file.
     // $("#preview").html(data).fadeIn();
     // $("#form")[0].reset(); 
    // }
      // },
     // error: function(e) 
      // {
    // $("#err").html(e).fadeIn();
      // }          
    // });

	/* Side bar Js*/

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

</script>

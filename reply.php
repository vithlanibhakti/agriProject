
<?php
include("connect.php");
include_once("adminheader - Copy.php");

?>	

<form  method="POST" action="savereply.php" enctype="multipart/form-data">
  <div class="md-form">
  <input type="number" name="amount" id="amount" class="form-control">
  <lable for="amount">Amount</lable>
  </div>
  <button class="btn"><i class="fa fa-check-circle" aria-hidden="true"></i></button>

</form>

<form id='form' action='ajaxupload.php' method='post' enctype='multipart/form-data'>
<input type="hidden" name='id' value="<?=$_GET['id']?>">
<input id='image' type='file' accept='image/*' name='image' />
<input id='btn' class='btn btn-success' type='submit' value='Upload'></form>

<script>
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

</script>




<?php
include("adminheader - Copy.php");

?>	 
  <!--<div class="container">
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
     
     <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu"></ul>
      </li>
     </ul>
    </div>
   </nav>
   <br />
   <form method="post" id="comment_form">
<label>Enter Amount</label>
     <input type="text" name="amount" id="amount" class="form-control">	 
<label>Enter Date</label>
     <input type="Date" name="date" id="date" class="form-control">	 
	 
     <input type="submit" name="post" id="post" class="btn btn-info button" value="Post" />
   </form>
 </body>
</html>-->
<div id="container "> <center>
<div class="card col-6 mt-5">
        <div class="card-body  d-flex flex-column">
          <span class="card-header bg-primary p-0 m-0">
        
<?php 
$sql=mysqli_query($con,"SELECT SUM(amount) AS Total, MONTH(date) as month, YEAR(date) as year FROM amount GROUP BY month;");
echo "Monthy Income </span>";
   while ($row = mysqli_fetch_array($sql)) {
        echo $row['Total'] ."<span class='card-header bg-primary p-0 m-0'>";
    }

    $sql=mysqli_query($con,"SELECT SUM(amount) AS YearTotal, MONTH(date) as month, YEAR(date) as year FROM amount GROUP BY year;");
    echo "yearly Income </span>";
   while ($row = mysqli_fetch_array($sql)) {
        echo $row['YearTotal'];
    }
	// include_once("footer.html");

echo "</center>";
  ?>
  </div>
      </div>
  </div>
  </center>
<script>
$(document).ready(function(){
 
  // function load_unseen_notification(view = '')
 // {
   // $.ajax({
    // url:"fetch.php",
    // method:"POST",
    // data:{view:view},
    // dataType:"json",
    // success:function(data)
    // {
     // $('.dropdown-menu').html(data.notification);
     // if(data.unseen_notification > 0)
     // {
    // $('.count').html(data.unseen_notification);
     // }
  // }
  // });
  // }
 
 // load_unseen_notification();

 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#amount').val() != '' )
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insertamount.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
	 alert("sucess");
     //load_unseen_notification();
    }
   });
  }
  else
  {
   alert("please fill required details");
  }
 });
 
  // $(document).on('click', '.dropdown-toggle', function(){
  // $('.count').html('');
  // load_unseen_notification('yes');
  // });
 
  // setInterval(function(){ 
 // load_unseen_notification();; 
  // }, 5000);
 
});


</script>


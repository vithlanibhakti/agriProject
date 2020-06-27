<?php 
include("header.php")?>
<html>
<head>
<style>
div.invoice {
		border:2px solid #ccc;
		padding:10px;
			}
.bottomright {
  position: absolute;
  bottom: 8px;
  right: 16px;
  font-size: 18px;
}

</style>
</head>
<body>
<center><h4> * SHIV AGRI CLINIC AND LABORATORY * </h4>
<h6>MEMON PLAZA,MANAVADAR ROAD VANTHALI MO:-9723456866</h6></center>
 <form method="post" id="comment_form">
<table>
<tr>
<td>1.Farmer Name:-</td>
<td>        <input type="text" name="fname" id="fname" value="" requeried><br></td>
</tr>
<tr>
<td>2.Mobile No:-</td>
  <td><input type="text" name="phn" id="phn" value="" requeried><br></td>
  </tr>
  <tr>
<td>3.Village:-</td>
  <td><input type="text" name="village" id="village" value="" requeried><br></td>
  </tr>
  <tr>
  <td>4.Survey Number:-</td>
  <td><input type="text" name="survey" id="survey" value="" requeried><br></td>
  </tr>
  <tr>
<td>5.Taluka:-</td>
  <td><input type="text" name="taluka" id="taluka" value="" requeried><br></td>
  </tr>
  <tr>
<td>6.Date of Testing:-</td>
  <td><input type="date" name="testing" id="testing" value="" requeried><br></td>
  </tr>
  <tr>
<td>7.Name of crop:-</td>
  <td><input type="text" name="crop" id="crop" value="" requeried><br></td>
  </tr>
  <tr>
<td>8.Sample No:-</td>
  <td><input type="text" name="sample" id="sample" value="" requeried><br></td>
  </tr>
  </table>
<div class="invoice"><center> WATER TESTING REPORT</center> </DIV><br><center>
<table border="1px">
<th>SR</th>
<th>PARAMETER</th>
<th>OBSERVATION</th>
<th>RESULT</th>
</center>
<tr><td>1</td>
<td>PH</td>
<td><input type="text" name="pho" id="pho"></td>
<td><input type="text" name="phr" id="phr"></td>
</tr>
<tr><td>2</td>
<td>ELECTRICAL CONDUCTIVITY
(MILLI MHOS/CM)</td>
<td><input type="text" name="eco" id="eco"></td>
<td><input type="text" name="ecr" id="ecr"></td>
</tr>
<tr><td>3</td>
<td>NA MEQ/LIT</td>
<td><input type="text" name="nao" id="nao"></td>
<td><input type="text" name="nar" id="nar"></td>
</tr>
<tr><td>4</td>
<td>[CA+MG]/MEG/LIT</td>
<td><input type="text" name="cao" id="cao"></td>
<td><input type="text" name="car" id="car"></td>
</tr>

<tr><td>5</td>
<td>SAR</td>
<td><input type="text" name="sao" id="sao"></td>
<td><input type="text" name="sar" id="sar"></td>
</tr>
<tr><td>6</td>
<td>CLASS[SR]</td>
<td><input type="text" name="classo" id="classo"></td>
<td><input type="text" name="classr" id="classr"></td>
</tr>

<tr><td>7</td>
<td>PPM SALT IN WATER</td>
<td><input type="text" name="salto" id="salto"></td>
<td><input type="text" name="saltr" id="saltr"></td>
</tr>
<tr><td>8</td>
<td>CO3+HCO3</td>
<td><input type="text" name="coo" id="coo"></td>
<td><input type="text" name="cor" id="cor"></td>
</tr>
<tr><td>9</td>
<td>RSC MEQ/LIT</td>
<td><input type="text" name="rsco" id="rsco"></td>
<td><input type="text" name="rscr" id="rscr"></td>
</tr>
</table>
<div>Opinion:- <textarea name="opinion" id="opinion"> </textarea></div>
     <input type="submit" name="post" id="post" class="btn btn-info" value="submit" />
<table border="2px">
<tr><td>EC</td><td></td><td></td><td></td><td>SAR</td><td></td><td>SALINITY</td><td>RSC</td><td></td><td>SODICITY</td></tr>
<tr>
<td>c1</td>
<td><250</td>
<td>micromhos/cm</td>
<td>safe</td>
<td>s1</td>
<td><10</td>
<td>low</td>
<td>r1</td>
<td><1.25</td>
<td>safe</td>
</tr>

<tr>
<td>c2</td>
<td>250-750</td>
<td>micromhos/cm	</td>
<td>marginal</td>
<td>s2</td>
<td>10-18</td>
<td>medium</td>
<td>r2</td>
<td>1.25-2.50</td>
<td>marginal</td>
</tr>


<tr>
<td>c3</td>
<td>750-2250</td>
<td>micromhos/cm</td>
<td>problematic</td>
<td>s3</td>
<td>18-26</td>
<td>high</td>
<td>r3</td>
<td>>2.50</td>
<td>unsuitable</td>
</tr>


<tr>
<td>c4</td>
<td>>2250</td>
<td>micromhos/cm</td>
<td>unsafe</td>
<td>s4</td>
<td>>26</td>
<td>very high</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>

</table>
<table><tr><td>
note:- 1.this report gives the idea of fertility status of given sample (soil / water), note involves any garrenty of crop production.</td></tr>
<tr>
<td>2.Homogenous chemical materials measure the hetero genious soil materials, May be slight variable.</td></tr>
<tr><td>3.this report is prepared by the work of instrument and mannualy that give slight error sometime.</td></tr>
<BR>
<div class="bottomright">ANILKUMAR HADAVANI
<BR>
M.Sc.(Agri)
</div>

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
	    // var fname = $('#opinion').val();
// alert(fname);
debugger;
  event.preventDefault();
  
  if($('#fname').val() != '' && $('#phn').val() != '' && $('#village').val() != '' && $('#survey').val() != '' && $('#taluka').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insertwater.php",
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
   alert("Please fill all details");
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

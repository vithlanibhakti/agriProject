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
<form action="soil2.php" method="POST">
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
<div class="invoice"><center> SOIL TESTING REPORT</center> </DIV><br><center>
<table border="1px">
<th>SR</th>
<th>PARAMETER</th>
<th>OBSERVATION</th>
<th>RESULT</th>
</center>
<tr><td>1</td>
<td>SOIL REACTION</td>
<td><input type="text" name="sro" id="sro"></td>
<td><input type="text" name="srr" id="srr"></td>
</tr>
<tr><td>2</td>
<td>ELECTRICAL CONDUCTIVITY
(MILLI MHOS/CM)</td>
<td><input type="text" name="eco" id="eco"></td>
<td><input type="text" name="ecr" id="ecr"></td>
</tr>
<tr><td>3</td>
<td>ORGANIC CARBON(%)
(NITROGEN)</td>
<td><input type="text" name="oco" id="oco"></td>
<td><input type="text" name="ocr" id="ocr"></td>
</tr>
<tr><td>4</td>
<td>AVAILABEL PHOSPHEROUS</td>
<td><input type="text" name="phoso" id="phoso"></td>
<td><input type="text" name="phosr" id="phosr"></td>
</tr>

<tr><td>5</td>
<td>AVAILABEL POTASH</td>
<td><input type="text" name="poto" id="poto"></td>
<td><input type="text" name="potr" id="potr"></td>
</tr>
</table>
<div>Opinion:- <textarea name="opinion" id="opinion"> </textarea></div>
<input type="submit" name="submit" id="submit" value="submit">
<table border="2px">
<tr><td>SR</td><td>PARAMETERS</td><td>LOW</td><td>MEDIUM</td><td>HIGH</td></tr>
<tr>
<td>1</td>
<td>pH</td>
<td>0-6.4
(ACIDIC)</td>
<td>6.5-8.2
(NORMAL)</td>
<td>>8.2
(ALKALINE)</td>
</tr>

<tr>
<td>2</td>
<td>EC</td>
<td>0.99
(SIMPLE)</td>
<td>1-3
(HARMFUL)</td>
<td>>3
(UNSAFE)</td>
</tr>

<tr>
<td>3</td>
<td>O.C(%)</td>
<td>0-0.50</td>
<td>0.51-0.75</td>
<td>>0.75</td>
</tr>


<tr>
<td>4</td>
<td>AVAILABEL PHOS.</td>
<td>0-25</td>
<td>26-60</td>
<td>>61</td>
</tr>


<tr>
<td>5</td>
<td>AVAILABEL POTASH</td>
<td>0-150</td>
<td>151-300</td>
<td>>300</td>
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
<?php include("footer.html");?>
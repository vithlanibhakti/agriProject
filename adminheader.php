<!DOCTYPE html>
<html>

<head>
  <title>Admin HomePage</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="themes/adminside.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="script.js"></script>
  <link href="table.css" rel="stylesheet" type="text/css">


  <script language="javascript" src="highlight.js"></script>
  <link href="sample.css" rel="stylesheet" type="text/css" />

  <style>
    a.ex1:hover,
    a.ex1:active {
      color: #4ba61e;
    }
  </style>
</head>

<body>
  <br /><br />
  <center>
    <h1><span class="a">SHIV AGRI CONSULTANCY</span></h1>
  </center>
  <div class="container">
    <div id="navbar">
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

      <!--<div>
 
    <div class="container-fluid">
     
     <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu"></ul>
      </li>
     </ul>
    </div>-->
      <?php
      include_once 'dbConfig.php';
      session_start();
      if (!isset($_SESSION['PhoneNo'])) {
        echo "<script>alert('You are not logged on...');</script>";
        header("refresh:0; url='adminlogin.php'");
      } else {
        $PhoneNo = $_SESSION['PhoneNo'];
      }
      ?>
      
      <body id="body" style="color:black;">
        <div id="mySidenav" class=" sidenav ">
          <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
          <center>
            <h1 class="bk ex1 had">ADMIN</h1>
          </center><br>

          <div id="nav" class="navbar bg-success">
            <ul>
              <li>
                <a href="basicDetailsView.php" class="ex1">Home</a></li>
              <a href="basic noti.php" class="ex1">Notification</a></center>
              </li><br>
                <li>
                  <a href="s.php" class="ex1">search</a>
             
              </li>
                <li>
                  <a href="PlantNoti.php" class="ex1">Plant Consultancy</a>
              </li>
                <li>
                  <a href="receiptView.php" class="ex1">Recipt/Payment</a>
              </li>
                <li>
                  <a href="amount.php" class="ex1">Income</a>
              </li>
                <li>
                  <a href="adminlogout.php" class="ex1">Logout</a>
              </li>
            </ul>
            <script language="javascript">
              setPage()
            </script>
          </div>

        </div>

        <script>
          function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
          }

          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
          }
        </script>
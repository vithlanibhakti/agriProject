<html>

<head>
  <title>Header</title>
  <meta charset="utf-8">
  <title>Slider</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./assets/fonts/font-awesome.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  <link href="themes/adminside.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="script.js"></script>
  <link href="table.css" rel="stylesheet" type="text/css">

  <script language="javascript" src="highlightclient.js"></script>
  <link href="sample.css" rel="stylesheet" type="text/css" />

  <style>
    #ABC {

      top: 0;
      left: 0;
      width: 100%;
    }

    .new {
      background-color: white;
      border-radius: 15px;
      width: 80px;
      font-size: 18px;
    }

    .blah {
      text-align: center
    }

    .blah>div {
      vertical-align: top;
      display: inline-block;
    }
  </style>
</head>

<?php
session_start();  
include("dbConfig.php");
if (!isset($_SESSION['PhoneNo'])) {
  echo "<script>alert('You are not logged on...');</script>";
  header("refresh:0; url='login.php'");
} else {
  $PhoneNo = $_SESSION['PhoneNo'];
}
$result = mysql_query("SELECT CONCAT(prefix, Id) AS EmploeeCode FROM `custlogin` where PhoneNo ='" . $_SESSION['PhoneNo'] . "'");
$row = mysql_fetch_array($result);
$EC = $row['EmploeeCode'];


$result = mysql_query("SELECT Name FROM `custlogin` where PhoneNo ='" . $_SESSION['PhoneNo'] . "'");
$row = mysql_fetch_array($result);
$Name = $row['Name'];
?>
<div >
  <div class="wrap-input100 validate-input m-t-85 m-b-35 ">
    <section id="ABC" >


      <div id="mySidenav" class="sidenav bg-white">
        <a href="javascript:void(0)" class="closebtn  " onclick="closeNav()">&times;</a>
        <div class="text-center d-flex flex-column justify-content-center">
          <div class="bg-success ">
            <h2 class=" ex1 had text-white "><?php echo $Name; ?></h2>
            <h2 class="badge badge-pill badge-light  had"><?php echo $EC; ?></h2>
          </div>
          <div id="nav flex-column">

            <a href="HomePage.php" class="btn">Home</a>

            <a href="history.php" class="btn">History</a>

            <a href="receipt.php" class="btn">Recipt/Payment</a>

            <a href="about.php" class="btn">AboutUS</a>

            <a href="logout.php" class="btn">Logout</a>

            <script language="javascript">
              setPage()
            </script>
          </div>
        </div>

      </div>
      <div id="main " class="navbar bg-success">
        
        <span class="text-white" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
        <div class="d-flex flex-column">
        <h3>
          <center><?php echo $EC; ?>
        </h3>

        <div class="blah">
          <div class="badge badge-pill  badge-light p-2 m-1 ">
           <span style="color:#09b515;"> English</span>
          </div>
          <div class="badge badge-pill badge-light p-2 m-1 text-success">
          <span style="color:#09b515;">ગુજરાતી</span>
          </div>
        </div>
        </div>
        </center>
        <div>
          <div class="  d-flex justify-content-end align-items-start " >
            <ul class="nav navbar-nav" style="align-self: right;">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="label label-pill label-danger count" style="border-radius:10px;"></span>
                  <span ><img src="themes/images/icon/notification_bell.png" height="25" width="auto"></span></a>
                <ul class="dropdown-menu"></ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <br />
    </section>
    <script>
      $(document).ready(function() {
        function load_unseen_notification(view = '') {
          $.ajax({
            url: "amountfetch.php",
            method: "POST",
            data: {
              view: view
            },
            dataType: "json",
            success: function(data) {
              $('.dropdown-menu').html(data.notification);
              if (data.unseen_notification > 0) {
                $('.count').html(data.unseen_notification);
              }
            }
          });
        }

        load_unseen_notification();

        $(document).on('click', '.dropdown-toggle', function() {
          $('.count').html('');
          load_unseen_notification('yes');
        });

        setInterval(function() {
          load_unseen_notification();;
        }, 5000);
      });

      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
      }
    </script>
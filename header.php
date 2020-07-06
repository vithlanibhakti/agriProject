<html>

<head>
  <title>shivagri consultancy</title>
  <meta charset="utf-8">
  <title>Slider</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

  <link href="themes/adminside.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="script.js"></script>

  <script language="javascript" src="highlightclient.js"></script>
  <link href="sample.css" rel="stylesheet" type="text/css" />
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
$result = mysqli_query($con,"SELECT CONCAT(prefix, Id) AS EmploeeCode FROM `custlogin` where PhoneNo ='" . $_SESSION['PhoneNo'] . "'");
$row = mysqli_fetch_array($result);
$EC = $row['EmploeeCode'];


$result = mysqli_query($con,"SELECT Name FROM `custlogin` where PhoneNo ='" . $_SESSION['PhoneNo'] . "'");
$row = mysqli_fetch_array($result);
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
            
            <a href="usernotification.php" class="btn">Notification</a>

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
     <!-- jQuery -->
     <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Slider</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">


  <style>
    .d {
      border-radius: 20px;
      background-color: #4ba61e;
      border: none;
      font-size: 20px;
      color: #FFFFFF;
      padding: 8px;
      width: 300px;
      text-align: center;
      -webkit-transition-duration: 0.4s;
      /* Safari */
      transition-duration: 0.4s;
      text-decoration: none;
      overflow: hidden;
      cursor: pointer;
    }

    div.invoice {
      border: 2px solid #ccc;
      padding: 10px;
    }

    .bottomright {
      position: absolute;
      bottom: 8px;
      right: 16px;
      font-size: 18px;
    }
  </style>

  <script type="text/javascript">
    function validation() {
      var a = document.form.name.value;
      if (!isNaN(a)) {
        alert("Please Enter Only Characters");
        document.form.name.select();
        return false;
      }
    }
  </script>
</head>

<body>
  <?php include("header.php") ?>
  <br />

  <div class="container col-sm-12 col-md-5">
    <!-- Material form login -->
    <div class="card">
      <!--Card header
  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Sign in</strong>
  </h5>-->

      <!--Card content-->
      <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form method="post" class="form" id="comment_form" onclick="validation()">

          <!-- Farmer name -->
          <div class="md-form">
            <input type="text" name="fname" id="fname" class="form-control">
            <label for="fname">Farmer name</label>
          </div>

          <!-- Mobile no -->
          <div class="md-form">
            <input type="number" name="phn" id="phn" class="form-control">
            <label for="phn">Mobile no</label>
          </div>

          <!-- Village -->
          <div class="md-form">
            <input type="text" name="village" id="village" class="form-control">
            <label for="village">Village</label>
          </div>

          <!-- Survey No -->
          <div class="md-form">
            <input type="text" name="survey" id="survey" class="form-control">
            <label for="survey">Survey No</label>
          </div>

          <!-- Taluka -->
          <div class="md-form">
            <input type="text" ame="taluka" id="taluka" class="form-control">
            <label for="taluka">Taluka</label>
          </div>

          <!-- Date of Testing -->
          <div class="md-form">
            <input type="date" name="testing" id="testing" class="form-control" rows="5">
            <label for="testing">Date of Testing</label>
          </div>
          <!-- Name OF crop -->
          <div class="md-form">
            <input type="text" name="crop" id="crop" class="form-control" rows="5">
            <label for="crop">Name OF crop</label>
          </div>

          <!-- Sample No -->
          <div class="md-form">
            <input type="text" name="sample" id="sample" class="form-control" rows="5">
            <label for="sample">Sample No</label>
          </div>

          <!-- post button -->
          <button class="btn btn-success btn-rounded btn-block my-4 " type="submit" id="post" name="submit">POST</button>

      </div>

    </div>
    <!--  form  -->
  </div>
<!--
  <table>
    <tr>
      <td><label>farmer name</label></td>
      <td><input type="text" name="fname" id="fname" class="form-control"></td>
    </tr>
    <tr>
      <td>
        <label>Mobile No</label></td>
      <td><input type="text" name="phn" id="phn" class="form-control" rows="5"></td>
    </tr>

    <tr>
      <td>
        <label>Village</label></td>
      <td>
        <input type="text" name="village" id="village" class="form-control"></td>
    </tr>
    <tr>
      <td>
        <label>Survey No</label></td>
      <td>
        <input type="text" name="survey" id="survey" class="form-control" rows="5"></td>
    </tr>
    <tr>
      <td>
        <label>Taluka</label></td>
      <td>
        <input type="text" name="taluka" id="taluka" class="form-control" rows="5"></td>
    </tr>

    <tr>
      <td>
        <label>Date of Testing</label></td>
      <td>
        <input type="date" name="testing" id="testing" class="form-control" rows="5"></td>
    </tr>

    <tr>
      <td>
        <label>Name OF crop</label></td>
      <td>
        <input type="text" name="crop" id="crop" class="form-control" rows="5"></td>
    </tr>

    <tr>
      <td>
        <label>Sample No</label></td>
      <td>
        <input type="text" name="sample" id="sample" class="form-control" rows="5"></td>
    </tr>
  </table>
  <center><button class="d" type="submit" id="post" name="submit">Post</button> </center>-->

  </form>
  <?php include("footer.html"); ?>
  <script>
    $(document).ready(function() {

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

      $('#comment_form').on('submit', function(event) {
        debugger;
        event.preventDefault();
        if ($('#fname').val() != '' && $('#phn').val() != '' && $('#village').val() != '' && $('#survey').val() != '' && $('#taluka').val() != '' && $('#testing').val() != '' && $('#crop').val() != '' && $('#sample').val() != '') {
          var form_data = $(this).serialize();
          $.ajax({
            url: "insertplant.php",
            method: "POST",
            data: form_data,
            success: function(data) {
              $('#comment_form')[0].reset();
              alert("sucess");
              window.location.href = 'HomePage.php';
              //load_unseen_notification();
            }
          });
        } else {
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
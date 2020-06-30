<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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

</head>

<style>
  input:focus {
  background-color: yellow;
}
</style>
<body>


  <div class="container ">
    <div class="d-flex flex-row justify-content-center">
      <img src="themes\images\anil hadvani.jpg" style="height: 150px; width: 150px;">
    </div>

    <div class="d-flex flex-column justify-content-center text-center text-muted">
      <h3> Welcome Back!</h3>
      <h5 class="text-black-50">Log in to your existant account of <span class="text-success"> Shiv Agri
          Consultancy</span></h5>
    </div>

    <form class=" col-sm-12 d-flex justify-content-center " id="loginform" method="post" name="login" action="login2.php">
      <div class="col-md-6">
        
        <div class="md-form form-group md-outline input-with-pre-icon">
          <i class="fa fa-phone input-prefix text-success "></i>
          <input type="text" id="phn" name="phn" required class="form-control  z-depth-1" style="border-radius: 22px ;" onfocus="this.style.border = '2px solid #5cb85c'" onfocusout="this.style.border = 'none'" placeholder="Mobile number / Customer ID">
        </div>

        <div class="md-form form-group md-outline input-with-pre-icon">
          <i class="fa fa-lock input-prefix text-success"></i>
          <input placeholder="Your Password" type="Password" id="Password" name="Password" style="border-radius: 22px ; " onMouseOver="this.style.border = '2px solid #5cb85c'" onMouseOut="this.style.border = 'none'" required class="form-control   z-depth-1 ">
        </div>

        <div class="d-flex justify-content-end">
        <a href=''>
          <h6  class="text-success">Forgot Password?</h6>
        </a>
      </div>

      <div class="d-flex justify-content-center">
        <button class="btn btn-success z-depth-1-half" style="border-radius: 25px;" type="submit" name="submit">Login</button>
      </div>

      <div class="d-flex justify-content-center">
        <p ><a href="Signup.php"  class="text-muted">Don't have an account ? <u class="text-success">Sign up</u> </a></p>

      </div>
</div>
    </form>


  </div>

</body>

</html>
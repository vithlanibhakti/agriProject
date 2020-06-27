<?php include("adminheader.php");?>
<!DOCTYPE html>
<html>
<head>

   <title>Live Search using AJAX</title>

   <!-- Including jQuery is required. -->

   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

   <!-- Including our scripting file. -->

   <script type="text/javascript" src="script.js"></script>

   <!-- Including CSS file. -->

   <style>
   a:hover {
   cursor: pointer;
   background-color: yellow;
}

input{position:relative;

  border-radius: 15px;
    width: 10em;
font-size:38px;}
</style>
</head>
<body>
<!-- Search box. -->

 <div id="main"> 
   <input type="text" id="search" placeholder="Search" />
</div>
   <br>

     <br />
   <!-- Suggestions will be displayed in below div. -->
   <div id="display"></div>
</body>
</html>
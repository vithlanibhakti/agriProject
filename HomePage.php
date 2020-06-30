<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Slider</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<link id="callCss" rel="stylesheet" href="themes/current/bootstrap.min.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" >
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="themes/css/base.css" rel="stylesheet" type="text/css">
	<link href="themes/fun.css" rel="stylesheet" type="text/css">
	<style type="text/css" id="enject"></style>
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="themes/js/jquery-1.8.3.min.js"></script>
<!--<script src="themes/js/bootstrap.min.js"></script>-->
    <script src="themes/js/bootstrap-tooltip.js"></script>
	<script src="themes/js/bootstrap-popover.js"></script>
	<script src="themes/js/business_ltd_1.0.js"></script>
 	</head>
	<style>
.img{width:auto\9;height:auto;max-width:89%;vertical-align:middle;border:0;-ms-interpolation-mode:bicubic;}	
.icon-barf {
  float: left;
  width: 100%;
  height:68;
  font-size: 13px;
  text-align: center;
   background-color: #555;
  position: relative;
}
	</style>
	<body>

<?php 
include("header.php")?>

<section id="carouselSection" style="text-align:center">
	<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				<div  style="text-align:center"  class="item active">
                                    <div class="wrapper"><img src="themes/images/uu.jpg" class="img">
					</div>
				</div>
				<div  style="text-align:center"  class="item">
					<div class="wrapper"><img src="themes/images/q.png" class="img">
					</div>
				</div>
				<div  style="text-align:center"  class="item">
                                    <div class="wrapper"><img src="themes/images/i.jpg" class="img">
					</div>
				</div>
				<div  style="text-align:center"  class="item">
                                    <div class="wrapper"><img src="themes/images/u.jpg" class="img">
					</div>
				</div>

			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
</section>
<!-- Sectionone ends ======================================== 
<section id="middleSection">
<div class="container">
		<div class="row" style="text-align:center">
			<div class="span2">
				
					<a href="webindex.php"><img src="themes/images/PHOTO AND VIDEO.png" height="20" width="20"></a>
					<span><br/><a href="webindex.php">Photo/Video</a></span>
					</a>
				
			</div>
			<div class="span2">
					<img src="themes/images/1consultancy.png" height="20" width="20">
					<span><br/>Plant Consultancy</span>
				
			</div>
		<div class="span2">
				<a href="ImageRetrive.php"><img src="themes/images/SOIL WATERR.png" height="20" width="20"></a>
					<span><br/><a href="ImageRetrive.php">Soil & Water</a></span>
					</a>
				
			</div>
			<div class="span2">
					<a href="ImageRetrive.php">
					<img src="themes/images/LANDSCAPEE.png" height="20" width="20">
										<a href="ImageRetrive.php"><span><br/>Landscaping</span></a>
					</a>
			
			</div>
			<div class="span2">
					<a href="ImageRetrive.php">
					<i style="width:auto; font-size:2em; line-height:1em; height:auto" class="icon-wrench"></i></a>
					
					<a href="ImageRetrive.php"><span><br/> Tips from farmer</span></a>
					</a>
				
			</div>
		</div>
		</div>
</section>
--><section style="text-align:center">

<?php include_once("hax.html");?>
</section>
<section id="carouselSection" style="text-align:center">
	<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				<div  style="text-align:center"  class="item active img" >
                                    <div class="wrapper"><img src="themes/images/uu.jpg" class="img">
					</div>
				</div>
				<div  style="text-align:center"  class="item">
					<div class="wrapper"><img src="themes/images/q.png" class="img">
					</div>
				</div>
				<div  style="text-align:center"  class="item">
                                    <div class="wrapper"><img src="themes/images/i.jpg" class="img">
					</div>
				</div>
				<div  style="text-align:center"  class="item">
                                    <div class="wrapper"><img src="themes/images/u.jpg" class="img">
					</div>
				</div>

			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
</section>
<div class="container">
		<div class="row" style="text-align:center">
			<div class="span12">
			<div class="well well-small">
				<h4>Rules / Instruction</h4>
				<p>"Agricultural lands can't be purchased by a non-agriculturist. Earlier, only those residing in the State could invest in agricultural land in Gujarat but in 2012 the Gujarat High Court passed a judgement that allows any agriculturist in the country to purchase such land in the State."<br/><br/></p>
			</div>
			<div>
<?php include_once("footer.html")?>
			</div>
			<br>
		<br>

		</div>
</div>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Slider</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!--<script src="themes/js/bootstrap.min.js"></script>-->
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<script src="./assets/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</head>
<style>
	

	.icon-barf {
		float: left;
		width: 100%;
		height: 68;
		font-size: 13px;
		text-align: center;
		background-color: #555;
		position: relative;
	}
</style>

<body style="background-color:#fafafa  ;">

	<?php
	include("header.php") ?>

	<div class="w3-content">
		<div id="demo" class="carousel slide m-3 " data-ride="carousel">

			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0"></li>
				<li data-target="#demo" data-slide-to="1" class="active"></li>
				<li data-target="#demo" data-slide-to="2"></li>
				<li data-target="#demo" data-slide-to="3"></li>
			</ul>

			<!-- The slideshow -->
			<div class="carousel-inner">
				<div class="carousel-item  active ">
					<img class="rounded" src="themes/images/uu.jpg" class="img-rounded">
				</div>
				<div class="carousel-item">
					<img class="rounded" src="themes/images/q.png">
				</div>
				<div class="carousel-item">
					<img class="rounded" src="themes/images/image2.jpg">
				</div>
				<div class="carousel-item">
					<img class="rounded" src="themes/images/u.jpg">
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>

		</div>
		<div class="container">
			<section style="text-align:center">
				<?php include_once("hax.html"); ?>
			</section>
			<div class=" mt-5 ">
				<?php include_once("footer.html") ?>
			</div>
			<!--<div class="row" style="text-align:center">
			<div class="span12">
				<div class=" m-0">
					<h4>Rules / Instruction</h4>
					<p>"Agricultural lands can't be purchased by a non-agriculturist. Earlier, only those residing in the State could invest in agricultural land in Gujarat but in 2012 the Gujarat High Court passed a judgement that allows any agriculturist in the country to purchase such land in the State."<br /><br /></p>
				</div>
-->

		</div>
	</div>
	</div>

	</div>
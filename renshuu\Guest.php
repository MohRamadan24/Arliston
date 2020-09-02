<?php 
	session_start();
	if (isset($_SESSION['login'])) {
		header("location:Home.php");
		exit;
	}
	require "function.php"
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Arliston | Home </title>
	<style>
		#clear{
			clear: both;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css&gambar/style-guest.css">
</head>
<body>
	<!-- <div class="container-nav">
		<div style="float: left;">
			<ul id="main-nav" class="left-nav">
				<li><a href="">Home</a></li>
				<li class="dropdwn">Discover
					<div id="container-subnav">
						<ul>
							<li class="subnav" style="padding-top: 5px;"><a href="#">Discover Residential</a></li>
							<div id="clear"></div>
							<li class="subnav"><a href="#">Discover Commercial</a></li>
							<div id="clear"></div>
							<li class="subnav" style="padding-bottom: 5px;"><a href="#">Discover Facilities</a></li>
						</ul>
					</div>
				</li>
				<li><a href="#">Recommended</a></li>
				<li class="active">Info</li>
			</ul>
		</div>
		<div style="float: right;">
			<ul id="main-nav" class="right-nav">
				<li><a href="#">Login</a></li>
				<li style="color: rgb(158, 168, 183);">|</li>
				<li><a href="#">Register</a></li>
			</ul>
		</div>
	</div> -->
	<div class="main-container">
		<div class="Box-1">
			<div class="container-nav">
				<div class="logo" style="float: left;"><img src="css&gambar/gambar/logo/logo-arliston1.png" width="auto" height="60" alt="">
				</div>
				<div style="float: left;">
					<ul id="main-nav" class="left-nav">
						<li class="active">Home</li>
						<!-- <li class="dropdwn">Discover
							<div id="container-subnav">
								<ul>
									<li class="subnav" style="padding-top: 5px;"><a href="#">Discover Residential</a></li>
									<div id="clear"></div>
									<li class="subnav"><a href="#">Discover Commercial</a></li>
									<div id="clear"></div>
									<li class="subnav" style="padding-bottom: 5px;"><a href="#">Discover Facilities</a></li>
								</ul>
							</div>
						</li>
						<li><a href="#">Recommended</a></li>
						<li><a href="#">Info</a></li> -->
					</ul>
				</div>
				<div style="float: right;">
					<ul id="main-nav" class="right-nav">
						<li><a href="login.php">Login</a></li>
						<li style="color: rgb(158, 168, 183);">|</li>
						<li><a href="register.php">Register</a></li>
					</ul>
				</div>
			</div>
			<div class="title-box">
				<ul>
					<li><a href="#">Arliston</a></li>
				</ul>
			</div>
		</div>
		<div class="Box-2"></div>
		<div class="footer-box">
				<div style="float:left"class="footer">&copy;2020 Arliston.com. All rights reserved</div>
				<!-- <div style="float:right" class="footer">sitemaps | privacy policy</div> -->
		</div>
	</div>
</body>
</html>
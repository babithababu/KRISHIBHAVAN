<!DOCTYPE html>
<?php
include("connection.php");
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">
		<meta name="author" content="Kodinger">
		<meta name="keyword" content="magz, html5, css3, template, magazine template">
		<!-- Shareable -->
		<meta property="og:title" content="HTML5 & CSS3 magazine template is based on Bootstrap 3" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="http://github.com/nauvalazhar/Magz" />
		<meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/images/preview.png" />
		<title>Magz &mdash; Responsive HTML5 &amp; CSS3 Magazine Template</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<!-- IonIcons -->
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<!-- Toast -->
		<link rel="stylesheet" href="scripts/toast/jquery.toast.min.css">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="scripts/owlcarousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="scripts/magnific-popup/dist/magnific-popup.css">
		<link rel="stylesheet" href="scripts/sweetalert/dist/sweetalert.css">
		<!-- Custom style -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/skins/all.css">
		<link rel="stylesheet" href="css/demo.css">
		<style>
		.aa
		{
		width:35%;}
		.bb
		{
		width:25%;}
		
		</style>
	</head>

	<body>
		<header class="primary">
			<div class="firstbar">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="brand">
								<a href="index.html">
									<img src="images/logo.png" alt="Magz Logo">
								</a>
							</div>						
						</div>
						<div class="col-md-6 col-sm-12">
							<form class="search" autocomplete="off">
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="q" class="form-control" placeholder="Type something here">									
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-search"></i></button>
										</div>
									</div>
								</div>
								<div class="help-block">
									<div>Popular:</div>
									<ul>
										<li><a href="#">HTML5</a></li>
										<li><a href="#">CSS3</a></li>
										<li><a href="#">Bootstrap 3</a></li>
										<li><a href="#">jQuery</a></li>
										<li><a href="#">AnguarJS</a></li>
									</ul>
								</div>
							</form>								
						</div>
						<div class="col-md-3 col-sm-12 text-right">
							<ul class="nav-icons">
								<li><a href="register.html"><i class="ion-person-add"></i><div>Register</div></a></li>
								<li><a href="login.html"><i class="ion-person"></i><div>Login</div></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- Start nav -->
			<nav class="menu">
				<div class="container">
					<div class="brand">
						<a href="#">
							<img src="images/logo.png" alt="Magz Logo">
						</a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
					</div>
					<div id="menu-list">
						<ul class="nav-list">
							<li class="for-tablet nav-title"><a>Menu</a></li>
							<li class="for-tablet"><a href="login.html">Login</a></li>
							<li class="for-tablet"><a href="register.html">Register</a></li>
							<li><a href="category.html">Standard</a></li>
							<li class="dropdown magz-dropdown">
								<a href="category.html">Pages <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="index.html">Home</a></li>
									<li class="dropdown magz-dropdown">
										<a href="#">Authentication <i class="ion-ios-arrow-right"></i></a>
										<ul class="dropdown-menu">
											<li><a href="login.html">Login</a></li>
											<li><a href="register.html">Register</a></li>
											<li><a href="forgot.html">Forgot Password</a></li>
											<li><a href="reset.html">Reset Password</a></li>
										</ul>
									</li>
									<li><a href="category.html">Category</a></li>
									<li><a href="single.html">Single</a></li>
									<li><a href="page.html">Page</a></li>
									<li><a href="search.html">Search</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li class="dropdown magz-dropdown">
										<a href="#">Error <i class="ion-ios-arrow-right"></i></a>
										<ul class="dropdown-menu">
											<li><a href="403.html">403</a></li>
											<li><a href="404.html">404</a></li>
											<li><a href="500.html">500</a></li>
											<li><a href="503.html">503</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="dropdown magz-dropdown"><a href="#">Dropdown <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="category.html">Internet</a></li>
									<li class="dropdown magz-dropdown"><a href="category.html">Troubleshoot <i class="ion-ios-arrow-right"></i></a>
										<ul class="dropdown-menu">
											<li><a href="category.html">Software</a></li>
											<li class="dropdown magz-dropdown"><a href="category.html">Hardware <i class="ion-ios-arrow-right"></i></a>
												<ul class="dropdown-menu">
													<li><a href="category.html">Main Board</a></li>
													<li><a href="category.html">RAM</a></li>
													<li><a href="category.html">Power Supply</a></li>
												</ul>
											</li>
											<li><a href="category.html">Brainware</a>
										</ul>
									</li>
									<li><a href="category.html">Office</a></li>
									<li class="dropdown magz-dropdown"><a href="#">Programming <i class="ion-ios-arrow-right"></i></a>
										<ul class="dropdown-menu">
											<li><a href="category.html">Web</a></li>
											<li class="dropdown magz-dropdown"><a href="category.html">Mobile <i class="ion-ios-arrow-right"></i></a>
												<ul class="dropdown-menu">
													<li class="dropdown magz-dropdown"><a href="category.html">Hybrid <i class="ion-ios-arrow-right"></i></a>
														<ul class="dropdown-menu">
															<li><a href="#">Ionic Framework 1</a></li>
															<li><a href="#">Ionic Framework 2</a></li>
															<li><a href="#">Ionic Framework 3</a></li>
															<li><a href="#">Framework 7</a></li>
														</ul>
													</li>
													<li><a href="category.html">Native</a></li>
												</ul>
											</li>
											<li><a href="category.html">Desktop</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Mega Menu <i class="ion-ios-arrow-right"></i> <div class="badge">Hot</div></a>
								<div class="dropdown-menu megamenu">
									<div class="megamenu-inner">
										<div class="row">
											<div class="col-md-3">
												<div class="row">
													<div class="col-md-12">
														<h2 class="megamenu-title">Trending</h2>
													</div>
												</div>
												<ul class="vertical-menu">
													<li><a href="#"><i class="ion-ios-circle-outline"></i> Mega menu is a new feature</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> This is an example</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> For a submenu item</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> You can add</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> Your own items</a></li>
												</ul>
											</div>
											<div class="col-md-9">
												<div class="row">
													<div class="col-md-12">
														<h2 class="megamenu-title">Featured Posts</h2>
													</div>
												</div>
												<div class="row">
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="single.html">
																	<img src="images/news/img10.jpg" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 10, 2016</div>
																	<div class="category"><a href="category.html">Healthy</a></div>
																</div>
																<h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="single.html">
																	<img src="images/news/img11.jpg" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 13, 2016</div>
																	<div class="category"><a href="category.html">Lifestyle</a></div>
																</div>
																<h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="single.html">
																	<img src="images/news/img14.jpg" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 14, 2016</div>
																	<div class="category"><a href="category.html">Travel</a></div>
																</div>
																<h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
												</div>
											</div>
										</div>								
									</div>
								</div>
							</li>
							<li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Column <i class="ion-ios-arrow-right"></i></a>
								<div class="dropdown-menu megamenu">
									<div class="megamenu-inner">
										<div class="row">
											<div class="col-md-3">
												<h2 class="megamenu-title">Column 1</h2>
												<ul class="vertical-menu">
													<li><a href="#">Example 1</a></li>
													<li><a href="#">Example 2</a></li>
													<li><a href="#">Example 3</a></li>
													<li><a href="#">Example 4</a></li>
													<li><a href="#">Example 5</a></li>
												</ul>
											</div>
											<div class="col-md-3">
												<h2 class="megamenu-title">Column 2</h2>
												<ul class="vertical-menu">
													<li><a href="#">Example 6</a></li>
													<li><a href="#">Example 7</a></li>
													<li><a href="#">Example 8</a></li>
													<li><a href="#">Example 9</a></li>
													<li><a href="#">Example 10</a></li>
												</ul>
											</div>
											<div class="col-md-3">
												<h2 class="megamenu-title">Column 3</h2>
												<ul class="vertical-menu">
													<li><a href="#">Example 11</a></li>
													<li><a href="#">Example 12</a></li>
													<li><a href="#">Example 13</a></li>
													<li><a href="#">Example 14</a></li>
													<li><a href="#">Example 15</a></li>
												</ul>
											</div>
											<div class="col-md-3">
												<h2 class="megamenu-title">Column 4</h2>
												<ul class="vertical-menu">
													<li><a href="#">Example 16</a></li>
													<li><a href="#">Example 17</a></li>
													<li><a href="#">Example 18</a></li>
													<li><a href="#">Example 19</a></li>
													<li><a href="#">Example 20</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="dropdown magz-dropdown"><a href="#">Dropdown Icons <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="icon ion-person"></i> My Account</a></li>
									<li><a href="#"><i class="icon ion-heart"></i> Favorite</a></li>
									<li><a href="#"><i class="icon ion-chatbox"></i> Comments</a></li>
									<li><a href="#"><i class="icon ion-key"></i> Change Password</a></li>
									<li><a href="#"><i class="icon ion-settings"></i> Settings</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon ion-log-out"></i> Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- End nav -->
		</header>

		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
							<h4>FARMER REGISTRATION</h4>
							<form name="farmerreg" method="Post" action="">
								<div class="form-group">
									<label>District</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="aa"type="text" name="district"value="Idukki">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label>Block</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="block" value="6" class="aa">
								</div>
								<div class="form-group">
									<label>Ward</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="aa"type="text" name="ward"value="12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label>Panchayath</label>&nbsp;&nbsp;
									<input type="text" name="panchayath" value="Adimaly" class="aa">
								</div>
								<div class="form-group">
									<label>Krishibhavan</label>
									<input class="aa"type="text" name="krishibhavan"value="Adimaly">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label>Village</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="village" value="Palai" class="aa">
								</div><br>
								<h6>Farmer Details:</h6><br>
								<div class="form-group">
									<label>First Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="aa"type="text" name="fname"value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label>Last Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="lname" value="" class="aa">
								</div>
								<div class="form-group">
									<label>House Name</label>&nbsp;
									<input class="aa"type="text" name="hname"value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label>Post Office</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="po" value="" class="aa">
								</div>
								<div class="form-group">
									<label>Place</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="aa"type="text" name="place"value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label>Pin Code</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="pin" value="" class="aa">
								</div>
								<div class="form-group">
									<label>House No</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="aa"type="text" name="hno"value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label>Mob.No1</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="mob1" value="" class="aa">
								</div>
								<div class="form-group">
									<label>Mob.No2</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="aa"type="text" name="mob2"value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label>E-mail</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="email" name="mail" value="" class="aa">
								</div>
								<div class="form-group">
									<label>Category</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="category" class="bb">
													  <option value="general">General</option>
													  <option value="scst">Sc/St</option>
													  <option value="obc">OBC</option>
													  <option value="others">Others</option>													 
									</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label>Poverty-Line</label>&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="poverty" class="bb">
													  <option value="apl">APL</option>
													  <option value="bpl">BPL</option>													 
									</select>
								</div>
								<div class="form-group">
									<label>Religion</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="religion" class="bb">
													  <option value="christian">Christian</option>
													  <option value="hindu">Hindu</option>
													  <option value="muslim">Muslim</option>
													  <option value="others">Others</option>													 
									</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label>Date of Birth</label>&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="date" name="dob" class="bb">
								</div>
								<div class="form-group">
									<label>Annual Income(Rs)</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="bb"type="text" name="income"value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label>Ration Card No</label>
									<input type="text" name="rationid" value="" class="aa">
								</div>
								<div class="form-group">
									<label>ID card No</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="aa"type="text" name="idno"value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label>Adhaar No</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="adhaarid" value="" class="aa">
								</div><br>
								<h6>Farm Details:</h6><br>
								<div class="form-group">
									<label>Total Area</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="aa"type="text" name="area"value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label>Survey No</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="survey" value="" class="aa">
								</div><div class="form-group">
									<label>Cultivated Area</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="bb"type="text" name="cultivated"value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label>Leasable Area</label>&nbsp;&nbsp;
									<input type="text" name="leasable" value="" class="aa">
								</div><br>
								<h6>Bank Account Details:</h6><br>
								<div class="form-group">
									<label>Account No</label>&nbsp;
									<input class="aa"type="text" name="acno"value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label>Bank</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="bank" value="" class="aa">
								</div><div class="form-group">
									<label>Branch</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="aa"type="text" name="branch"value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label>IFSC Code</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="ifsc" value="" class="aa">
								</div><br>
								<h6>Personal Info:</h6><br>
								<div class="form-group">
									<label>Username</label>&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="aa"type="text" name="username"value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label>Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="password" class="aa">
								</div>
								<div>
								<input type="submit" value="Register" name="register">
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Already have an account?</span> <a href="login.html">Login</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Start footer 
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Company Info</h1>
							<div class="block-body">
								<figure class="foot-logo">
									<img src="images/logo-light.png" class="img-responsive" alt="Logo">
								</figure>
								<p class="brand-description">
									Magz is a HTML5 &amp; CSS3 magazine template based on Bootstrap 3.
								</p>
								<a href="page.html" class="btn btn-magz white">About Us <i class="ion-ios-arrow-thin-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Popular Tags <div class="right"><a href="#">See All <i class="ion-ios-arrow-thin-right"></i></a></div></h1>
							<div class="block-body">
								<ul class="tags">
									<li><a href="#">HTML5</a></li>
									<li><a href="#">CSS3</a></li>
									<li><a href="#">Bootstrap 3</a></li>
									<li><a href="#">Web Design</a></li>
									<li><a href="#">Creative Mind</a></li>
									<li><a href="#">Standing On The Train</a></li>
									<li><a href="#">at 6.00PM</a></li>
								</ul>
							</div>
						</div>
						<div class="line"></div>
						<div class="block">
							<h1 class="block-title">Newsletter</h1>
							<div class="block-body">
								<p>By subscribing you will receive new articles in your email.</p>
								<form class="newsletter">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="ion-ios-email-outline"></i>
										</div>
										<input type="email" class="form-control email" placeholder="Your mail">
									</div>
									<button class="btn btn-primary btn-block white">Subscribe</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Latest News</h1>
							<div class="block-body">
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img12.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Donec consequat lorem quis augue pharetra</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img14.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">eu dapibus risus aliquam etiam ut venenatis</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img15.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Nulla facilisis odio quis gravida vestibulum </a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img16.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Proin venenatis pellentesque arcu vitae </a></h1>
										</div>
									</div>
								</article>
								<a href="#" class="btn btn-magz white btn-block">See All <i class="ion-ios-arrow-thin-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-12 col-sm-6">
						<div class="block">
							<h1 class="block-title">Follow Us</h1>
							<div class="block-body">
								<p>Follow us and stay in touch to get the latest news</p>
								<ul class="social trp">
									<li>
										<a href="#" class="facebook">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-twitter-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="youtube">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-youtube-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="googleplus">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-googleplus"></i>
										</a>
									</li>
									<li>
										<a href="#" class="instagram">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-instagram-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="tumblr">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-tumblr"></i>
										</a>
									</li>
									<li>
										<a href="#" class="dribbble">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-dribbble"></i>
										</a>
									</li>
									<li>
										<a href="#" class="linkedin">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="#" class="skype">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-skype"></i>
										</a>
									</li>
									<li>
										<a href="#" class="rss">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-rss"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="line"></div>
						<div class="block">
							<div class="block-body no-margin">
								<ul class="footer-nav-horizontal">
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Partner</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="page.html">About</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							COPYRIGHT &copy; MAGZ 2017. ALL RIGHT RESERVED.
							<div>
								Made with <i class="ion-heart"></i> by <a href="http://kodinger.com">Kodinger</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		 -->

		<!-- JS -->
		<script src="js/jquery.js"></script>
		<script src="js/jquery.migrate.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
		<script>var $target_end=$(".best-of-the-week");</script>
		<script src="scripts/jquery-number/jquery.number.min.js"></script>
		<script src="scripts/owlcarousel/dist/owl.carousel.min.js"></script>
		<script src="scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<script src="scripts/easescroll/jquery.easeScroll.js"></script>
		<script src="scripts/sweetalert/dist/sweetalert.min.js"></script>
		<script src="scripts/toast/jquery.toast.min.js"></script>
		<script src="js/demo.js"></script>
		<script src="js/e-magz.js"></script>
		<?php
		if(isset($_POST["register"]))
{	
include("connection.php");
$district=$_POST["district"];
$block=$_POST["block"];
$ward=$_POST["ward"];
$panchayath=$_POST["panchayath"];
$krishibhavan=$_POST["krishibhavan"];
$village=$_POST["village"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$hname=$_POST["hname"];
$po=$_POST["po"];
$place=$_POST["place"];
$pin=$_POST["pin"];
$hno=$_POST["hno"];
$mob1=$_POST["mob1"];
$mob2=$_POST["mob2"];
$mail =$_POST["mail"];
$category=$_POST["category"];
$poverty=$_POST["poverty"];
$religion=$_POST["religion"];
$dob=$_POST["dob"];
$income=$_POST["income"];
$rationid=$_POST["rationid"];
$idno=$_POST["idno"];
$adhaarid=$_POST["adhaarid"];
$area=$_POST["area"];
$survey=$_POST["survey"];
$cultivated=$_POST["cultivated"];
$leasable=$_POST["leasable"];
$acno=$_POST["acno"];
$bank=$_POST["bank"];
$branch=$_POST["branch"];
$ifsc=$_POST["ifsc"];
$username=$_POST["username"];
$password=$_POST["password"];
$status="n";
            $sy= "INSERT INTO `tblfarmer`(`district`, `block`, `ward`, `panchayath`, `krishibhavan`,`village`,`fname`,`lname`,`hname`,`po`,`place`,`pin`, `hno`, `mob1`, `mob2`, `mail`, `category`, `poverty`, `religion`, `dob`, `income`, `rationid`, `idno`, `adhaarid`, `area`, `survey`, `cultivated`, `leasable`, `acno`, `bank`, `branch`, `ifsc`,`username`, `password`,`cstatus`) values('$district','$block','$ward','$panchayath','$krishibhavan','$village','$fname','$lname','$hname','$po','$place',$pin,$hno,$mob1,$mob2,'$mail','$category','$poverty','$religion','$dob',$income,$rationid,'$idno',$adhaarid,$area,$survey,$cultivated,$leasable,$acno,'$bank','$branch',$ifsc,'$username','$password','$status')";
			$ss=mysqli_query($con,$sy);
			echo "$sy";
}
		?>
	</body>
</html>
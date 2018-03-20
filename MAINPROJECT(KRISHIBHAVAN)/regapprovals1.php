<!DOCTYPE html>
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
		<script type="text/javascript">
		function approval()
		{
		alert('successfully registered');
		window.location('regapprovals1.php');
		}
		function reject()
		{
			alert('user deleted');
			window.location('regapprovals1.php');
		}
		</script>
	</head>
	

	<style>
.ff{
 background: linear-gradient(to bottom, white, #00FF00);
        color: purple
}
.aa{
width:1366px;
height:50px;
background:red;
}
.bb
{
height:50px;
weight:50px;
   background: linear-gradient(to bottom, white, #FF69B4);
        color: green;}
.cc{
 border-style: ridge;
    border-width: 7px;
    border-color: purple;
height:400px;
width:400px;
margin-left:500px;	
align:center;
margin-top:40px;}
.dd{
margin-bottom:100px;
 background: linear-gradient(to bottom, white, #98FB98);
        color: black;

}
</style>
	<body>
		<header class="primary">
			
						<div class="ff">
							<ul>
								<li margin-left="350px">
									<img src="images/Webp.net-resizeimage.png" align="left"><h5 align="left">Admin</h5>	
								</li>
								
							</ul>
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
							<li><a href="regapprovals1.php">Approvals</a></li>
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

		<section class="not-found">
		<div class="aa">
					<h3 class="bb">REGISTRATIONS</h3>	</div>
			<div class="dd">
			
							 <?php

include("connection.php");
	$sel="SELECT `farmerid`,`fname`, `lname`,`username`, `password` FROM `tblfarmer` WHERE `cstatus`='n'";
	$res=mysqli_query($con,$sel);
	 echo "<table border ='1' frame=border cellpadding=8 bgcolor=#456667 bordercolor=red cellspacing=5 width=90% height=80% align='center' style=margin:80px;>
		<tr><th>Farmerid</th><th>Firstname</th><th>Lastname</th><th>more</th><th>accept</th><th>reject</th></tr>";
	   while($row=mysqli_fetch_array($res))
	   {
		    $farmerid=$row[0];
			$username=$row["username"];
            $password=$row["password"];
	   echo"<tr><td>$row[0]</td><td>" .$row["fname"]. "</td><td>" .$row["lname"]. "</td><td><form method='post' action='regapprovals2.php'><input type='hidden' name='h1' value='$farmerid'><input type='submit' name='more' value='More'></form></td><td><form method='post' action='regaccept.php'><input type='hidden' name='h1' value='$farmerid'><input type='hidden' name='h2' value='$username'><input type='submit' name='accept' value='Accept' onclick='approval()'></form></td><td><form method='post' action='regdelete.php'><input type='hidden' name='h2' value='$farmerid'><input type='submit' name='reject' value='Reject' onclick='reject()'></form></td></tr>";	  
	    }
	   echo"</table>"
	   ?>

			</div>
		</section>
		

		
		<!-- End Footer -->

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
	</body>
</html>
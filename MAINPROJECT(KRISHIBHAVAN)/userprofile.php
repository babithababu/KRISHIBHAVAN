<!DOCTYPE html>
<?php
session_start();
include('connection.php');


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
	.aaa{
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
	.ss{
	height:80px;
	width:2000px;}
	.aa{
	width: 1500px;
    height: 100px;
}
.xx
{
	width:500px;
	
}
.mm
{
	align:left;
}
.gg{
	align:center;
	margin-left:360px;
	border-style:ridge;
	width:650px;
	height: -webkit-fill-available;
	 background: linear-gradient(to bottom, white, #DDA0DD);
        color: black;
	}

</style>
	</head>
	
	<body>
		<header class="primary">
			
						<div class="ss">
							
									<img src="images/Webp.net-resizeimage.jpg" align="left" class="aa">	
							
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
							<li><a href="userprofile.php">Home</a></li>
							<li><a href="applypension.php">Pension</a></li>
							<li class="dropdown magz-dropdown">
								<a href="category.html">subsidy <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="cropsubsidy.php">Crop</a></li>
									<li><a href="machinesubsidy.php">Aggriculture Machines</a></li>
								</ul>
							</li>
							<li class="dropdown magz-dropdown"><a href="#">Subsidy<i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="cropsubsidy.php">Crop</a></li>
									<li class="dropdown magz-dropdown"><a href="machinesubsidy.php">Aggriculture Machines <i class="ion-ios-arrow-right"></i></a>
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
		<div class="bb">
		<?php
include("connection.php");
$email=$_SESSION["user"];
					$s=mysqli_query($con,"select *from tblfarmer where username='$email'");
					while($row=mysqli_fetch_array($s))
					{
						$name=$row[7];
						$id=$row[0];
					}
				 echo "<marquee behavior=alternate width=80% hspace=10% ><font size=20 color=green align=center>Welcome $name...!</font></marquee>";
				?></div>
 					
	<div>	
	<form method="POST" action="">
			<?php
	
	  include("connection.php");
	 $sss=mysqli_query($con,"select * from tblfarmer where farmerid=$id");
	  while($row=mysqli_fetch_array($sss))
	  {
$village=$row["village"];
$fname=$row["fname"];
$lname=$row["lname"];
$hname=$row["hname"];
$po=$row["po"];
$place=$row["place"];
$pin=$row["pin"];
$hno=$row["hno"];
$mob1=$row["mob1"];
$mail=$row["mail"];
$category=$row["category"];
$poverty=$row["poverty"];
$religion=$row["religion"];
$dob=$row["dob"];
$income=$row["income"];
$rationid=$row["rationid"];
$idno=$row["idno"];
$adhaarid=$row["adhaarid"];
$area=$row["area"];
$survey=$row["survey"];
$cultivated=$row["cultivated"];
$leasable=$row["leasable"];
$acno=$row["acno"];
$bank=$row["bank"];
$branch=$row["branch"];
$ifsc=$row["ifsc"];
		  }
		 
		  ?>
			<table class="gg">
				
				<tr>
				<td>First Name:</td><td><input type="text" name="txtfname" value="<?php echo $fname;?>"></td>
				<td>Last Name:</td><td><input type="text" name="txtlname" value="<?php echo $lname;?>"></td>
				</tr><br>
				<tr>
				<td>House Name:</td><td><input type="text" name="txthouse" value="<?php echo $hname;?>"></td>
				<td>PO:</td><td><input type="text" name="txtpo" value="<?php echo $po; ?>"></td><br>
				</tr>
				<tr>
				<td>Place:</td><td><input type="text" name="txtplace" value="<?php echo $place;?>"></td>
				<td>Pin:</td><td><input type="text" name="txtpin" value="<?php echo $pin; ?>">
				</tr>
				<tr>
				<td>Mob No:</td><td><input type="text" name="txtmob" value="<?php echo $mob1;?>"></td>
				<td>Mail:</td><td><input type="mail" name="txtmail" value="<?php echo $mail;?>"></td>
				</tr>
				<tr>
				<td>category:</td><td><input type="text" name="txtcategory" value="<?php echo $category;?>"></td>
				<td>poverty:</td><td><input type="text" name="txtpoverty" value="<?php echo $poverty; ?>"></td>
				</tr>
				<tr>
				<td>religion:</td><td><input type="text" name="txtreligion" value="<?php echo $religion;?>"></td>
				<td>Anual Income:</td><td><input type="text" name="txtincome" value="<?php echo $income;?>">
				</tr>
				<tr>
				<td>Total Area:</td><td><input type="text" name="txtarea" value="<?php echo $area;?>"></td>
				<td>Cultivated Area:</td><td><input type="text" name="txtcultivated" value="<?php echo $cultivated; ?>">
				</tr>
				<tr>
				<td>Leasable Area:</td><td><input type="text" name="txtleasable" value="<?php echo $leasable;?>"></td>
				<td>Survey Number:</td><td><input type="text" name="txtsurvey" value="<?php echo $survey;?>"></td>
				</tr>
				<tr>
				<td>Bank:</td><td><input type="text" name="txtbank" value="<?php echo $bank;?>"></td>
				<td>Branch:</td><td><input type="text" name="txtbranch" value="<?php echo $branch; ?>"></td>
				</tr>
				<tr>
				<td>Account Number:</td><td><input type="text" name="txtacnt" value="<?php echo $acno;?>"></td>
				<td>IFSC code:</td><td><input type="text" name="txtifsc" value="<?php echo $ifsc; ?>">
				</tr>
			
 <tr><td colspan="4" align="center"><input type="submit" name="update" value="UPDATE"></td></tr>
 </table>
 </form>
 </div>---
 </section>
	
						<?php
						include ('connection.php');
						if(isset($_POST["update"]))
						{
							
$f=$_POST["txtfname"];
$l=$_POST["txtlname"];
$h=$_POST["txthouse"];
$p=$_POST["txtpo"];
$pl=$_POST["txtplace"];
$pi=$_POST["txtpin"];
$mob=$_POST["txtmob"];
$ma=$_POST["txtmail"];
$ca=$_POST["txtcategory"];
$pov=$_POST["txtpoverty"];
$re=$_POST["txtreligion"];
$in=$_POST["txtincome"];
$ar=$_POST["txtarea"];
$cu=$_POST["txtcultivated"];
$le=$_POST["txtleasable"];
$su=$_POST["txtsurvey"];
$ba=$_POST["txtbank"];
$br=$_POST["txtbranch"];
$ac=$_POST["txtacnt"];
$if=$_POST["txtifsc"];
						$ww="UPDATE `tblfarmer` SET `fname`='$f',`lname`='$l',`hname`='$h',`po`='$p',`place`='$pl',`pin`='$pi',`mob1`='$mob',`mail`='$ma',`category`='$ca',`poverty`='$pov',`religion`='$re',`income`='$in',`area`='ar',`survey`='$su',`cultivated`='$cu',`leasable`='$le',`acno`=$ac,`bank`='$ba',`branch`='$br',`ifsc`='$if' WHERE `farmerid`='$id'";
						$qq=mysqli_query($con,$ww);
					
						}
						?>
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
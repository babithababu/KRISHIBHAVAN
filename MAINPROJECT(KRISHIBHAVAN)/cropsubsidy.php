<!DOCTYPE html>
<?php
session_start();
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
		
		<script>
			function myFunction()
			{
				
			
				var n=document.getElementById("item").value;
				window.location='select.php';
				
				
				// <?php
				// $q="select amount from tblsubsidy where item='" ?> n <?php "'"; ?>
				// <?php	
// echo $q;				
					// $sss=mysqli_query($con,$q);
					// $result=mysqli_fetch_assoc($sss);
					
				// ?>
				// document.getElementById("amnt").value= <?php echo $result["amount"];  ?>
			// }
		</script>
		
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
table { border-spacing: 10px; background:#999999;} 

th, td { padding: 5px;
border:none; }
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
							<li><a href="userhome.php">Home</a></li>
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
 			<br><br>		
	<div>
			<form method="POST" action="" enctype="multipart/form-data">

<table cellpadding="2" class="xx" bgcolor="99FFFF" align="center"
 border="2">

<tr>
<td colspan=2>
<center><font size=4><b>Crop Subsidy</b></font></center>
</td>
</tr>
<tr><td colspan=2>
<center><font size=4><b>Application Form</b></font></center>
</td></tr>
<tr><tr><td><br><td></tr>
<td align="left">Reg id:</td>
<td align="left"><input type="text" name="id" class="mm" size="15" value="<?php echo $id;?>"></td>
</tr>

<tr>
<td align="left">Crop Type:</td>
<td align="left"><select name="itemtype" width="15">
					<option value="shortduration">Short Duration</option>       
    					<option value="longduration">Long Duration</option>       
				   </select></td>
</tr>
<tr>
<td align="left">Crop Name:</td>
<td align="left"><select name="item" id="item"  width="15px" onchange="">
        <?php
       $sss=mysqli_query($con,"select *from tblsubsidy where category='crop'");
            while($row=mysqli_fetch_array($sss)){                                                 
            echo "<option value='".$row[item]."'>".$row[item]."</option>";
            }
        ?>          
    </select>
</td>
</tr>
<tr>
<td align="left">Hectare:</td>
<td align="left"><input type="text" name="hectare" class="mm" size="15"></td>
</tr>
<tr>
<td align="left">Amount per Hectare(Rs):</td>
<td align="left"><input type="text" name="amt" id="amnt" class="mm" size="15" ></td>
</tr>
<tr align="center"><th  colspan="2" align="center">Attach the Following</th></tr>
<tr>
<td align="left">adhaar Copy</td>
<td><input type="file" name="file"></td></tr>
<tr>
<td align="left">Tax Certificate/lease cheet</td>
<td><input type="file" name="file1"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" value="Submit Form" name="submit"/></td>
</tr>
</table>
</form>
			</div>
		</section>
		<?php
		if(isset($_POST["submit"]))
{	
include("connection.php");
		$cropid=$_POST["id"];
		$itemtype=$_POST["itemtype"];
		$item=$_POST["item"];
		$hectare=$_POST["hectare"];
		$file="";
		$file=$_FILES["file"]["name"];
		if( $_FILES['file']['name'] != "" )
		{
			$target_path = "documents/";
			$target_path = $target_path.basename( $_FILES['file']['name']); 
			if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) 
			{
				echo "The file ".basename( $_FILES['file']['name'])." has been uploaded";
			} 
			else
			{
				echo "There was an error uploading income certificate, please try again!";
			}

				// copy( $_FILES['file']['name'], "/SendEmail" ) or 
				//       die( "Could not copy file!");
			}
			 $filee="";
		$filee=$_FILES["file1"]["name"];
		if( $_FILES['file1']['name'] != "" )
		{
			$target_path = "documents/";
			$target_path = $target_path.basename( $_FILES['file1']['name']); 
			if(move_uploaded_file($_FILES['file1']['tmp_name'], $target_path)) 
			{
				echo "The file ".basename( $_FILES['file1']['name'])." has been uploaded";
			} 
			else
			{
				echo "There was an error uploading tax certificate, please try again!";
			}

				// copy( $_FILES['file']['name'], "/SendEmail" ) or 
				//       die( "Could not copy file!");
			}

			$apldate=date("Y")."-".date("m")."-".date("d");
			
			
			$s="INSERT INTO `tblcropsubsidy`(`farid`, `croptype`, `cropname`, `hectare`, `adhaarcet`, `taxcert`,`date`) VALUES($cropid,'$itemtype','$item','$hectare','$file','$filee','$apldate')";
			mysqli_query($con,$s);
			echo $s;
			echo "success";
			
	}
		?>
		
	
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
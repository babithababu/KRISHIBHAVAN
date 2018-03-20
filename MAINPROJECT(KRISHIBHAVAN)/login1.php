<?php	
session_start();
include("connection.php");
	$email=$_POST["username"];
	$pass=$_POST["password"];
	$sq="select * from login where username='$email'and password='$pass'";
	
	$result=mysqli_query($con,$sq);
     $num_row=mysqli_num_rows($result);
if($num_row==1)
{
	$row=mysqli_fetch_assoc($result);
	$_SESSION['user']=$email;
	if($row['status']=='1')
	{
		$_SESSION['user']=$email;
		header('location:adminhome.html');
		exit();
	}
	else if($row['status']=='2')
	{
		$_SESSION['user']=$email;		
		header('location:userprofile.php');
		exit();
}}
	else{
		 echo "<script>alert('Invalid username or password/ You are not registered');  window.location='login.php';</script>";
		 
	}	
?>
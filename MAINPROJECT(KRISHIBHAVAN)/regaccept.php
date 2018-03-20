<?php
 include("connection.php");
	  $v=$_POST["h1"];
	 $s=mysqli_query($con,"select * from tblfarmer where farmerid=$v");
	  while($row=mysqli_fetch_array($s))
	  {
$username=$row["username"];
$password=$row["password"];
	  }
	  $ii ="2";
	  $yh="INSERT INTO `login`(`username`, `password`, `status`) VALUES ('$username','$password',$ii)";
			$yy=mysqli_query($con,$yh);
			echo "$yh";
	 $sss="UPDATE `tblfarmer` SET `cstatus`='y' where farmerid=$v";	
     $yyy=mysqli_query($con,$sss);
			echo "$sss";	
			echo "success";
			header("Location: regapprovals1.php");
?>


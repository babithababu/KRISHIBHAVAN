

<?php
 include("connection.php");
	  $v=$_POST["h2"];
	 $s=mysqli_query($con,"select * from tblfarmer where farmerid=$v");
	 $sss="DELETE FROM `tblfarmer`where farmerid=$v";	
     $yyy=mysqli_query($con,$sss);
			echo "$sss";	
			
			header("Location: regapprovals1.php");
?>


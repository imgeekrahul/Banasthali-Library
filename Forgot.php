<?php

$UserId=$_GET['t1'];
$MobileNo=$_GET['t2'];
$Password=$_GET['t3'];
$CPass=$_GET['t4'];

$server="localhost";
$uid="root";
$pass="";
$db="project";

$con=new mysqli($server,$uid,$pass,$db);
$sql = "UPDATE registers SET MobileNo='".$MobileNo."', Pass='".$Password."',CPass='".$CPass."' WHERE emailid='".$UserId."'";

if($con->query($sql)==TRUE)
	echo "Password Change Successfully";
else
	echo "Change Deny";
?>
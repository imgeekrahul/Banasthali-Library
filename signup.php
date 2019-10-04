<?php
$Name=$_GET["t1"];
$Pass=$_GET["t2"];
$CPass=$_GET["t3"];
$Gender=$_GET["t4"];
$EmailID=$_GET["t5"];
$Department=$_GET["t6"];
$DOB=$_GET["t7"];
$MobileNo=$_GET["t8"];

$server="localhost";
$uid="root";
$pwd="";
$db="project";

$con=new mysqli($server,$uid,$pwd,$db);

$sql="INSERT INTO registers(Name,Pass,CPass,Gender,EmailID,Department,DOB,MobileNo) VALUES ('".$Name."','".$Pass."','".$CPass."','".$Gender."','".$EmailID."','".$Department."','".$DOB."','".$MobileNo."')";
if($con->query($sql)==true)
 header("Location:Login.html");
else
 echo "unsucessfull";

?>
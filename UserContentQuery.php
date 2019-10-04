<?php

session_start();
$user=$_SESSION['user'];





$Name=$_GET["t1"];
$UserId=$_GET["t2"];
$Researcharea=$_GET["t3"];
$Status=$_GET["t4"];
$Title=$_GET["t5"];
$Guide=$_GET["t6"];
$content=$_GET["t7"];
$CURR_DATE=$_GET["t8"];
$CURR_TIME=$_GET["t9"];

$server="localhost";
$uid="root";
$pwd="";
$db="project";

$con=new mysqli($server,$uid,$pwd,$db);
$sql="INSERT INTO projects(Name,UserId,Researcharea,Status,Title,Guide,content,CURR_DATE,CURR_TIME) VALUES ('".$Name."','".$UserId."','".$Researcharea."','".$Status."','".$Title."','".$Guide."','".$content."','".$CURR_DATE."','".$CURR_TIME."')";
if($con->query($sql)==true)
 echo "inserted successfully";
else
 echo "unsucessfully";

?>
<?php
$UserName=$_GET['t1'];
$Pass=$_GET['t2'];

session_start();
$_SESSION["username"] = $UserName;

$server="localhost";
$uid="root";
$pwd="";
$db="project";

$con=new mysqli($server,$uid,$pwd,$db);
$sql="select *from registers where EmailId='".$UserName."' and Pass='".$Pass."'";
$result=$con->query($sql);
if($result->num_rows>0)
header("Location:UserContent.html");
else
header("Location:Login.php");
?>
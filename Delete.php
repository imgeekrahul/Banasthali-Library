<?php
session_start();
$user=$_SESSION['user'];




$key=$_GET["t1"];
$key2=$_GET["t2"];

$server="localhost";
$uid="root";
$pwd="";
$db="project";

$con=new mysqli($server,$uid,$pwd,$db);

$sql="delete from projects where UserId='".$key."'and Guide='".$key1."'";
if($con->query($sql)==TRUE)
{
echo "Deleted";
}
else
{
echo "Not deleted";
}

?>


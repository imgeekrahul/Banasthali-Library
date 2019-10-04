<?php 
session_start();
$user=$_SESSION['user'];






$key=$_GET["t1"];
$key1=$_GET["t2"];
$key2=$_GET["t3"];

$server="localhost";
$uid="root";
$pwd="";
$db="project";

$con=new mysqli($server,$uid,$pwd,$db);

$sql="select *from projects where Researcharea='".$key."' or Title='".$key1."' or Guide='".$key2."'";

$result=$con->query($sql);
 echo "<body><table border='1'>";
 echo "<th>User ID</th><th>Research Area</th><th>Title</th><th>Guide</th><th>Content</th>";
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo "<tr><td>".$row['UserId']."</td><td>".$row['Researcharea']."</td><td>".$row['Title']."</td><td>".$row['Guide']."</td><td>".$row['Content']."</td></tr>";
}
echo "</body></table>";
}

else
{
echo "No Record Found";
}
?>


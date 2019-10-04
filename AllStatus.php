<?php 
session_start();
$_SESSION["username"];



$server="localhost";
$uid="root";
$pwd="";
$db="project";
$con=new mysqli($server,$uid,$pwd,$db);
$sql="select *from projects where userid='".$_SESSION["username"]."'";
$result=$con->query($sql);
if($result->num_rows>0)
{
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>UserID</th><th>Research Area</th><th>Title</th><th>Guide</th><th>CURR_DATE</th><th>CURR_TIME</th><th>Content</th><th>Action</th></tr>";
while($row=$result->fetch_assoc())
{
echo "<tr>
<td>".$row['Name']." </td>
<td>".$row['UserId']." </td>
<td> ".$row['Researcharea']."</td>
<td>".$row['Title']."</td>
<td>".$row['Guide']."</td>
<td>".$row['CURR_DATE']."</td>
<td>".$row['CURR_TIME']."</td>
<td>".$row['Content']."</td>
<td><a href='Delete.php?t1=".$row['UserId']."'><img src='/Banasthali Library/images/del.png' width='50' 

height='50'></a><a href='updateReport.php?t1=".$row['UserId']."'><img 

src='/Banasthali Library/images/update1.png'  width='50' height='50'></a></td></tr>";
}
echo "</table>";    
}
else{
echo "no record found";
}
?>
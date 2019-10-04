<?php

$server="localhost";
$uid="root";
$pwd="";
$db="project";

$con=new mysqli($server,$uid,$pwd,$db);

$sql="select *from projects  where Title like '%".$_REQUEST['t1']."%' or Researcharea='%".$_REQUEST['t1']."%'";
$result=$con->query($sql);
if($result->num_rows>0)
{
    echo "<p><font size='20px'>Search Data</font></p>";
    echo "<table width='100%' border='1'>";
while($row=$result->fetch_assoc())
{
echo "<tr><td><center><b>".$row['Name']."</b></center></td><td><center><b>".$row['Researcharea']."</b></center></td></tr>";
}
    echo "</table>";
}
else{
echo "no record found";
}
?>
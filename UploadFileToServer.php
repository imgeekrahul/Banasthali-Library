<?php
session_start();
$user=$_SESSION['user'];
$target_dir ="uploads/";
$target_file =basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

$path=pathinfo($_FILES["fileToUpload"]["name"]);

$filename=$_FILES["file"]["tmp_name"];

$target_file=$target_dir.$_SESSION["user"].$target_file;


if (file_exists($target_file)) 
{
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
else
{

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
	{
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      
	 rename($target_file,$target_dir.$_SESSION["user"].(mt_rand(10,100)).".".$path['extension']); 
	echo "<br>".$path['extension'];	
} 
	else 
	{
        echo "Sorry, there was an error uploading your file.";
    	}
}
?>
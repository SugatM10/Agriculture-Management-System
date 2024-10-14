<?php
session_start();
    require 'db.php';
  if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	$id=$_POST['pid'];
	$sql= "DELETE from fmarket where pid='$pid'"; 
	$result= mysqli_query($s,$sql);
	if($result)
	{
		$_SESSION["success"] ="Your Data is DELETED";
		header('location:viewup.php');
	}
	{
		$_SESSION["status"] ="Your Data is NOT DELETED";
		header('location:viewup.php');
	}
}
?>
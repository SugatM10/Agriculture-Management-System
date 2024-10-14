<?php
session_start();
    require 'db.php';
  if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	$id=$_POST['id'];
	$sql= "DELETE from price where id='$id'"; 
	$result= mysqli_query($conn,$sql);
	if($result)
	{
		$_SESSION["success"] ="Your Data is DELETED";
		header('location:aprice.php');
	}
	{
		$_SESSION["status"] ="Your Data is NOT DELETED";
		header('location:aprice.php');
	}
}
?>
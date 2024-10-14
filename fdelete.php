<?php
session_start();
    require 'db.php';
  if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	$pid=$_POST['product'];
	$sql= "DELETE from applyform where $product='$pid'"; 
	$result= mysqli_query( $conn ,$sql);
	if($result)
	{
		$_SESSION["success"] ="Your Data is DELETED";
		header('location:farmerreq.php');
	}
	{
		$_SESSION["status"] ="Your Data is NOT DELETED";
		header('location:farmerreq.php');
	}
}
?>
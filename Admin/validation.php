<?php 
session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		$conn = mysqli_connect('localhost', 'root', '', 'agroculture');
		if(mysqli_connect_error())
		{
			echo "<p>Error occurred..kindly try again later.</p>";
			exit();
		}
		
		$user=$_POST["uname"];
		$password=$_POST["pass"] ;
		$s="select * from adminlogin where ausername='$user' && apassword='$password'";
		$result=mysqli_query($conn, $s);
		$num=mysqli_num_rows($result);
		if($num==1) {
			$_SESSION['uname']=$user;
			header('location:../adminhome.php');
			
	}else {
            //echo mysqli_error($conn);
            $_SESSION['message'] = "Invalid User Credentials!";
            header("location: error.php");
        }
}
?>
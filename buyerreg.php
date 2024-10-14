<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$conn = mysqli_connect('localhost', 'root', '', 'agroculture');
        if(mysqli_connect_error())
        {
            echo "<p>Error occurred..kindly try again later.</p>";
            exit();
        }
	$name = dataFilter($_POST['name']);
	$mobile = dataFilter($_POST['mobile']);
	$user = dataFilter($_POST['uname']);
	$email = dataFilter($_POST['email']);
	$pass =	dataFilter(password_hash($_POST['pass'], PASSWORD_BCRYPT));
	$hash = dataFilter( md5( rand(0,1000) ) );
    $addr = dataFilter($_POST['addr']);
$s="select * from buyerss where bemail='$email'";
 $result=mysqli_query($conn, $s);
        $num=mysqli_num_rows($result);
        if($num==1) {
            echo("Email already used");
           
            exit();
    }
     if(empty($name)){
            echo"Please fill all the requirements properly";
     exit();}       
        
    if(empty($mobile)){
        echo"Please fill all the requirements properly";
      exit();}  
    
    if(empty($user)){
        echo"Please fill all the requirements properly";
    exit();}
    if(empty($email)){
        echo"Please fill all the requirements properly";
    exit();}
    if(empty($pass)){
        echo"Please fill all the requirements properly";
     exit();}   
        if(empty($addr)){
            echo"Please fill all the requirements properly";
        exit();}
    	$qry = "insert into buyerss(bname, busername, bpassword, bhash, bmobile, bemail, baddress)
    			 values('$name','$user','$pass','$hash','$mobile','$email','$addr')";

    	$res = $conn->query($qry);
        if($res)
        {
        	echo"Successfully Registered Please go Back to login page";
            
        }
    }

function dataFilter($data)
{
	$data = trim($data);
 	$data = stripslashes($data);
	$data = htmlspecialchars($data);
  	return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Cosmos Agro</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>

	<?php
		require 'menu1.php';
	?>
	 <div class="container">

<section>
	<center>
							<h2>Buyer SignUp</h2>
							<form method="post" action="">
								
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Name" required/>
									</div>
									<div class="3u 12u$(xsmall)">
										<input type="text" name="uname" id="uname" value="" placeholder="UserName" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
									</div>

									<div class="3u 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="Email" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
			                            <input type="password" name="password" id="password" value="" placeholder="Password" required/>
			                        </div>
			                        <div class="3u 12u$(xsmall)">
			                            <input type="password" name="pass" id="pass" value="" placeholder="Retype Password" required/>
			                        </div>
								</div>
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="addr" id="addr" value="" placeholder="Address" style="width:80%" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(small)">
										<input type="submit" value="Submit" name="submit" class="special" /></li>
									</div>
									<div class="3u 12u$(small)">
										<input type="reset" value="Reset" name="reset"/></li>
									</div>
								</div>
							</center>
							</form>
						</section>

    </div>
    </div>
  </form>
</div>
	</html>

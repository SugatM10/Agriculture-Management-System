<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$conn = mysqli_connect('localhost', 'root', '', 'agroculture');
        if(mysqli_connect_error())
        {
            echo "<p>Error occurred..kindly try again later.</p>";
            exit();
        }
     $SN = dataFilter($_POST['SN']);
	$type = dataFilter($_POST['type']);
	$pname = dataFilter($_POST['pname']);
	$price = dataFilter($_POST['price']);

$s="select * from price";
 $result=mysqli_query($conn, $s);
        
    	$qry = "insert into price(SN, pcat, pname, price)
    			 values('$SN', '$type','$pname','$price')";

    	$res = $conn->query($qry);
        if($res)
        {
        	echo"Successfully Added";
            
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

	<!DOCTYPE html>
			<header id="header">
				<h1><a href="">Cosmos Agro</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="aprice.php"><span class=""></span> Back</a></li>
						
					</ul>
				</nav>
			</header>

	</body>
</html>
	 <div class="container">

<section>
							<h2>Add Price Rate</h2>
							<form method="post" action="">
								<center>
								<div class="row uniform">
										<div class="3u 12u$(xsmall)">
										<input type="text" name="SN" id="SN" placeholder="S. NO." required/>
									</div>
									<div class="3u 12u$(xsmall)">
										<select name="type" id="type" required style="background-color:white;color: black;">
								  <option value="" style="color: black;">- Category -</option>
								  <option value="Fruit" style="color: black;">Fruit</option>
								  <option value="Vegetable" style="color: black;">Vegetable</option>
								  <option value="Grains" style="color: black;">Grains</option>
							  </select>
							</div>
									<div class="3u 12u$(xsmall)">
						<input type="text" name="pname" id="pname" placeholder="Product Name" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="price" id="price" placeholder="Price/kg" required/>
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

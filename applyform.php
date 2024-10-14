<?php
    session_start();

	require 'db.php';

	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] == 0)
	{
		$_SESSION['message'] = "You need to first login to Apply !!!";
		header("Location:Login/error.php");
		die();
	}
	?>
<?php
	require 'db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	$today = date("F j, Y, g:i a");
   
		$productType = $_POST['type'];
		$productName = dataFilter($_POST['pname']);
		$productInfo = $_POST['pinfo'];
		$quantity=$_POST['quantity'];
		$address=$_POST['addr'];
		$productPrice = dataFilter($_POST['price']);
		$fid = $_SESSION['id'];

		$sql = "INSERT INTO applyform(fid, product, pcat, pinfo, price, paddress, pquantity, date)
		 VALUES ('$fid', '$productName', '$productType', '$productInfo', '$productPrice', '$address', '$quantity', '$today')";
		$result = mysqli_query($conn, $sql);
	if(!$result)
		{
			$_SESSION['message'] = "Unable to upload Product !!!";
			header("Location: Login/error.php");
		}
		else {
			$_SESSION['message'] = "successfull !!!";
		}

		$pic = $_FILES['productPic'];
		$picName = $pic['name'];
		$picTmpName = $pic['tmp_name'];
		$picSize = $pic['size'];
		$picError = $pic['error'];
		$picType = $pic['type'];
		$picExt = explode('.', $picName);
		$picActualExt = strtolower(end($picExt));
		$allowed = array('jpg','jpeg','png');

		if(in_array($picActualExt, $allowed))
		{
			if($picError === 0)
			{
				$_SESSION['productPicId'] = $_SESSION['id'];
				$picNameNew = $productName.$_SESSION['productPicId'].".".$picActualExt ;
				$_SESSION['productPicName'] = $picNameNew;
				$_SESSION['productPicExt'] = $picActualExt;
				$picDestination = "images/productImages/".$picNameNew;
				move_uploaded_file($picTmpName, $picDestination);
				$id = $_SESSION['id'];

				$sql = "UPDATE applyform SET picStatus=1, pimage='$picNameNew' WHERE product='$productName';";

				$result = mysqli_query($conn, $sql);
				if($result)
				{

					echo"Sucessfullyuploaded";
					header("Location:applyform.php");
				}
				else
				{
					//die("bad");
					$_SESSION['message'] = "There was an error in uploading your product Image! Please Try again!";
					header("Location: Login/error.php");
				}
			}
			else
			{
				$_SESSION['message'] = "There was an error in uploading your product image! Please Try again!";
				header("Location: Login/error.php");
			}
		}
		else
		{
			$_SESSION['message'] = "You cannot upload files with this extension!!!";
			header("Location: Login/error.php");
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
		<title>AgroCulture</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<link rel="stylesheet" type="text/css" href="indexFooter.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<script src="https://cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!DOCTYPE html>
			<header id="header">
				<h1><a href="">Cosmos Agro</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="farmerviewprofile.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="myCart.php"><span class="glyphicon glyphicon-shopping-cart"> MyCart</a></li>
						<li><a href="fmarket.php"><span class="glyphicon glyphicon-grain"> Digital-Market</a></li>
						<li><a href="fblogView.php"><span class="glyphicon glyphicon-comment"> BLOG</a></li>
					<li><a href="Login/logout.php ?>"><span class="<?php echo $logo; ?>"></span><?php echo" "?>Logout</a></li>
					</ul>
				</nav>
			</header>

	</body>
</html>
		<!-- One -->

			<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<form method="POST" action="applyform.php" enctype="multipart/form-data">
						<h2>Enter the Product Information here..!!</h2>
						<br>
				<center>
					<input type="file" name="productPic"></input>
					<br />
				</center>
				<div class="row">
					  <div class="col-sm-6">
						  <div class="select-wrapper" style="width: auto" >
							  <select name="type" id="type" required style="background-color:white;color: black;">
								  <option value="" style="color: black;">- Category -</option>
								  <option value="Fruit" style="color: black;">Fruit</option>
								  <option value="Vegetable" style="color: black;">Vegetable</option>
								  <option value="Grains" style="color: black;">Grains</option>
							  </select>
						</div>
					  </div>
					  <div class="col-sm-6">
						<input type="text" name="pname" id="pname" value="" placeholder="Product Name" style="background-color:white;color: black;" />
					  </div>
				</div>
				<br>
				<div>
					<textarea  name="pinfo" id="pinfo" rows="12"></textarea>
				</div>
			<br>
			<div class="row">
				<div class="col-sm-6">
					  <input type="text" name="price" id="price" value="" placeholder="Price" required style="background-color:white;color: black;" />
				</div>
				 <div class="col-sm-6">
						<input type="text" name="quantity" id="quantity" value="" placeholder="Quantity" required style="background-color:white;color: black;" />
					  </div>
					   <div class="col-sm-6">
						<input type="text" name="addr" id="addr" value="" placeholder="Address" required style="background-color:white;color: black;" />
					  </div>
				<div class="col-sm-6">
					<button class="button fit" style="width:auto; color:black;">Submit</button>
				</div>ss
			</div>
			</form>
		</div>
	</section>

		<script>
			 CKEDITOR.replace( 'pinfo' );
		</script>
	</body>
</html>

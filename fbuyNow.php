<?php
	session_start();
	require 'db.php';
    $pid = $_GET['pid'];
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['name'];
        $city = $_POST['city'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $pincode = $_POST['pincode'];
        $addr = $_POST['addr'];
        $bid = $_SESSION['id'];
        $quantity= $_POST['quantity'];
        $type=$_POST['type'];

        $sql = "INSERT INTO transaction (bid, pid, name, city, mobile, email, pincode, addr, quantity, type)
                VALUES ('$bid', '$pid', '$name', '$city', '$mobile', '$email', '$pincode', '$addr', '$quantity', '$type')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            $_SESSION['message'] = "Order Succesfully placed! <br /> Thanks for shopping with us!!!";
            header('Location: Login/fsucess.php');
        }
        else {
            echo $result->mysqli_error();
            //$_SESSION['message'] = "Sorry!<br />Order was not placed";
            //header('Location: Login/error.php');
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>AgroCulture: Transaction</title>
	<meta lang="eng">
	<meta charset="UTF-8">
		<title>AgroCulture</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="Blog/commentBox.css" />
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
</head>
<body>

    <!DOCTYPE html>
            <header id="header">
                <h1>Cosmos Agro</h1>
                <nav id="nav">
                    <ul>
                        <li><a href="myCart.php"><span class="glyphicon glyphicon-shopping-cart"> MyCart</a></li>
                        <li><a href="farmermarket.php"><span class="glyphicon glyphicon-grain"> Digital-Market</a></li>
                        <li><a href="fblogView.php"><span class="glyphicon glyphicon-comment"> BLOG</a></li>
                   
                    </ul>
                </nav>
            </header>

    </body>
</html>


    <section id="main" class="wrapper" >
        <div class="container">
        <center>
                <h2>Transaction Details</h2>
        </center>
        <section id="two" class="wrapper style2 align-center">
        <div class="container">
            <center>
                <form method="post" action="fbuyNow.php?pid=<?= $pid; ?>" style="border: 1px solid black; padding: 15px;">
                    <center>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="name" id="name" value="" placeholder="Name" required/>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="city" id="city" value="" placeholder="City" required/>
                        </div>
                    </div>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
                        </div>

                        <div class="6u 12u$(xsmall)">
                            <input type="email" name="email" id="email" value="" placeholder="Email" required/>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="quantity" id="quantity" value="" placeholder="Quantity in Kg" required/>
                        </div>
                         <div class="6u 12u$(xsmall)">
                            <select name="type" id="type" required style="background-color:white;color: black;">
                                        <option value="" style="color: black;">--Select Payment Method--</option>
                                        <option value="cash" style="color: black;">Cash on Delivery</option>
                                        <option value="esewa" style="color: black;">Esewa</option>
                                        <option value="fonepay" style="color: black;">Fonepay</option>
                                    </select>
                        </div>

                    </div>
                    <div class="row uniform">
                        <div class="4u 12u$(xsmall)">
                            <input type="text" name="pincode" id="pincode" value="" placeholder="District" required/>
                        </div>
                        <div class="8u 12u$(xsmall)">
                            <input type="text" name="addr" id="addr" value="" placeholder="Address" style="width:80%" required/>
                        </div>
                    </div>
                    <br />
                    <p>
                        <input type="submit" value="Confirm Order" />
                    </p>
                </center>
            </form>
        </fieldset>

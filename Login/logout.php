<?php
	session_start();
		$_SESSION['logged_in'] = false;
	session_unset();
	session_destroy();
?>

<!DOCTYPE html>
<html>
	<head>
        <title>AgroCulture: LogOut</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="../bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../bootstrap\js\bootstrap.min.js"></script>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-layers.min.js"></script>
		<script src="../js/init.js"></script>
		<link rel="stylesheet" href="../css/skel.css" />
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/style-xlarge.css" />
    </head>

	<body>
	  <?php
    if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
    {
        $loginProfile = "My Profile: ". $_SESSION['Username'];
        $logo = "glyphicon glyphicon-user";
        
            $link = "Login/profile.php";
        }
        else {
                $link = "profileView.php";
        }
    
    {
        $loginProfile = "Login";
        $link = "index.php";
        $logo = "glyphicon glyphicon-log-in";
    }
?>

<!DOCTYPE html>
            <header id="header">
                <h1><a href="index.php">Cosmos Agro</a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="myCart.php"><span class="glyphicon glyphicon-shopping-cart"> MyCart</a></li>
                        <li><a href="market.php"><span class="glyphicon glyphicon-grain"> Digital-Market</a></li>
                        <li><a href="blogView.php"><span class="glyphicon glyphicon-comment"> BLOG</a></li>
                    <li><a href="../adminlogin.php ?>"><span class="<?php echo $logo; ?>"></span><?php echo" "?>Admin Login</a></li>
                    </ul>
                </nav>
            </header>

    </body>
</html>

	    <section id="banner">
			<div class="container">
                <header class="major">
                    <h2>Thanks for visiting !!!</h2>
					<center>
                    	<p>You have been succesfully logged out !!!</p>
                        <div class="6u 12u$(xsmall)">
							<br />
                            <a href="../index.php" class="button special">HOME</a>
                        </div>
                    </center>
                </header>
                </div>
            </div>
        </section>

    		<script src="../assets/js/jquery.min.js"></script>
            <script src="../assets/js/jquery.scrolly.min.js"></script>
            <script src="../assets/js/jquery.scrollex.min.js"></script>
            <script src="../assets/js/skel.min.js"></script>
            <script src="../assets/js/util.js"></script>
            <script src="../assets/js/main.js"></script>
	</body>
</html>

<?php
    session_start();

    if ( $_SESSION['logged_in'] != 1 )
    {
      $_SESSION['message'] = "You must log in before viewing your profile page!";
      header("location: error.php");
    }
    else
    {

       $email =  $_SESSION['Email'];
       $name =  $_SESSION['Name'];
       $user =  $_SESSION['Username'];
       $mobile = $_SESSION['Mobile'];
       $active = $_SESSION['Active'];
    }
?>

<!DOCTYPE html>
    <html >
     <head>
        <title>AgroCulture</title>
        <meta chars-et="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="../bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../bootstrap\js\bootstrap.min.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
            $link = "../farmerviewprofile.php";
        }
        else {
                $link = "../profileView.php";
        }
    
?>

<!DOCTYPE html>
            <header id="header">
                <h1><a href="index.php">Cosmos Agro</a></h1>
                <nav id="nav">
                    <ul>
        <li><a href="<?= $link; ?>"><span class="<?php echo $logo; ?>"></span><?php echo" " .$loginProfile;?></a></li>
                        <li><a href="../farmermarket.php"><span class="glyphicon glyphicon-grain"> Digital-Market</a></li>
                        <li><a href="../farmerblogView.php"><span class="glyphicon glyphicon-comment"> BLOG</a></li>
                    </ul>
                </nav>
            </header>

    </body>
</html>


        <section id="banner" class="wrapper">
            <div class="container">
                <header class="major">
                    <h2>Welcome</h2>
                </header>
                <p>
                <?php
                    if ( isset($_SESSION['message']) )
                    {
                        echo $_SESSION['message'];
                        unset( $_SESSION['message'] );
                    }
                ?>
                </p>

                <!--<?php
                    if ( !$active )
                    {
                        echo
                        "<div>
                            Account is not verified! Please confirm your email by clicking
                            on the email link!
                        </div>";
                    }
                ?>
            -->
                  <h2><?php echo $name; ?></h2>
                 <!-- <p><?= $email ?></p> -->
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <a href=../farmerviewprofile.php class="button special">My Profile</a>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <a href="logout.php" class="button special">LOG OUT</a>
                        </div>
                    </div>
        



    </body>
</html>

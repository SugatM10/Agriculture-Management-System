<?php session_start(); ?>

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
    if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
    {
        $loginProfile = "My Profile: ". $_SESSION['Username'];
        $logo = "glyphicon glyphicon-user";
        if($_SESSION['Category']!= 1)
        {
            $link = "Login/profile.php";
        }
        else {
                $link = "profileView.php";
        }
    }
    else
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
                    <li><a href="buyerreg.php ?>"><span class=""></span>Register</a></li>
                    </ul>
                </nav>
            </header>

    </body>
</html>


        <!-- Banner -->
        <body>          
    <div class="container">
        <center>
    <h2>Buyers Login</h2>
                            <form method="post" action="Login/buyerslogin.php">
                                <div class="row uniform 50%">
                                    <div class="7u$">
                                        <input type="text" name="uname" id="uname" value="" placeholder="UserName" style="width:80%" required/>
                                    </div>
                                    <div class="7u$">
                                        <input type="password" name="pass" id="pass" value="" placeholder="Password" style="width:80%" required/>
                                        <div class="row uniform">
                                        <div class="7u 12u$(small)">
                                            <input type="submit" value="Login" />
                                        </div>
                                    </div>

                                    </center>
                                    </div>
                                </div>
                                    </center>
                                </div>
                            </form>
                        </section>
</div>
    </div>
    </div>
  </form>
</div>
</body>
                    </div>
                </center>


            </section>

        <!-- One -->
            
        <!-- Footer -->
        <footer class="footer-distributed" style="background-color:black" id="aboutUs">
        <center>
            <h1 style="font: 35px calibri;">About Us</h1>
        </center>
        <div class="footer-left">
            <h3 style="font-family: 'Times New Roman', cursive;">Cosmos Agro &copy; </h3>
        <!--    <div class="logo">
                <a href="index.php"><img src="images/logo.png" width="200px"></a>
            </div>-->
            <br />
            <p style="font-size:20px;color:white">Your product Our market !!!</p>
            <br />
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p style="font-size:20px">Cosmos Agro Farm<span>Satdobato</span></p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p style="font-size:20px">123456789</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p style="font-size:20px"><a href="mailto:info@cosmoscollege.edu.np" style="color:white">cosmoscollege.edu.np</a></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-company-about" style="color:white">
                <span style="font-size:20px"><b>About Cosmos Agro</b></span>
                Cosmos Agro is e-commerce trading platform for grains & grocerries...
            </p>
            <div class="footer-icons">
                <a  href="#"><i style="margin-left: 0;margin-top:5px;"class="fa fa-facebook"></i></a>
                <a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-instagram"></i></a>
                <a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-youtube"></i></a>
            </div>
        </div>

    </footer>
</body>
</html>

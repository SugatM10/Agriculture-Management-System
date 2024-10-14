<?php
    session_start();
?>

<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>

    <body class="subpage">

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
                <h1><a href="">Cosmos Agro</a></h1>
                <nav id="nav">
                    <ul>
                   
                        <li><a href="adminhome.php"><span class=""> Home</a></li>
                    
                        <li><a href="aprice.php"><span class="glyphicon glyphicon-comment"> Back</a></li>
                   
                    </ul>
                </nav>
            </header>
    </body>
</html>


        <section id="post" class="wrapper bg-img" data-bg="banner2.jpg">
            <div class="inner">
                <div class="box">
                <header>
                    
                    <br>
                    <h2><?php echo $_SESSION['pcat'];?></h2>
                    <h4><?php echo $_SESSION['pname'];?></h4>
                    <h4><?php echo $_SESSION['price'];?></h4>
                     <!--<h4><?php echo $_SESSION['Password'];?></h4> !-->
                    <br>
                </header>
                <center>
                <form method="post" action="Profile/updateprice.php">
                    <div class="row uniform">
                        <div class="8u 12u$(xsmall)">
                            <input type="text" name="pcat" id="pcat" value="<?php echo $_SESSION['pcat'];?>" placeholder="Product Category" required />
                        </div>
                        <div class="4u 12u$(xsmall)">
                            <input type="text" name="pname" id="pname" value="<?php echo $_SESSION['pname'];?>" placeholder="Product Name" required/>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="price" id="price" value="<?php echo $_SESSION['price'];?>" placeholder="Price" required/>
                        </div>
                        <!--
                        <p>
                        <b>Education : </b>
                        </p>
                        <div class="3u 12u$(small)">
                            <input type="radio" id="diploma" name="edu" value="Diploma" checked>
                            <label for="1">Diploma</label>
                        </div>
                        <div class="3u 12u$(small)">
                            <input type="radio" id="btech" name="edu" value="B.TECH">
                            <label for="btech">B.TECH</label>
                        </div>
                         <div class="3u 12u$(small)">
                            <input type="radio" id="mtech" name="edu" value="M.TECH">
                            <label for="mtech">M.TECH</label>
                        </div>s
                        <p>
                            <b>Choose Year : </b>
                        </p>
                        <div class="2u 12u$(small)">
                            <input type="radio" id="1" name="year" value="1" checked>
                            <label for="1">1<sup>st</sup> Year</label>
                        </div>
                        <div class="2u 12u$(small)">
                            <input type="radio" id="2" name="year" value="2">
                            <label for="2">2<sup>nd</sup> Year</label>
                        </div>
                        <div class="2u 12u$(small)">
                            <input type="radio" id="3" name="year" value="3">
                            <label for="3">3<sup>rd</sup> Year</label>
                        </div>
                         <div class="2u 12u$(small)">
                            <input type="radio" id="4" name="year" value="4">
                            <label for="4">4<sup>th</sup> Year</label>
                        </div>
                        !-->
                        <div class="12u$">
                        <center>
                            <input type="submit" class = "button special" value="Update Price" />
                        </center>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </section>
    </center>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>

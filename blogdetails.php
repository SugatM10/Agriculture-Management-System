<?php 
$s=mysqli_connect('localhost','root','','agroculture');
 ?><?php 
$query="select * from blogdata";
$result=mysqli_query($s,$query);
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

<header id="header">
				<h1>Cosmos Agro</h1>
				<nav id="nav">
					<ul>
						<li><a href="adminhome.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="adminlogout.php"><span class=""></span> Logout</a></li>
					</ul>
				</nav>
			</header>
			<section id="one" class="wrapper style1 align" style="height: auto;">
				 <div class="12u$">
				 	<center>
				 		<h2> Blogs Data</h2>
				 		<table align="center" border="1px" style="width:auto; line-height:auto;">
  <t>
    <th>Blog User</th>
     <th>Blog Title</th>
      <th>Blog Content</th>
       <th>Time</th>
       <th>No. of Likes</th>

  </t>
  <?php 
  while($rows=mysqli_fetch_assoc($result)){ ?>
    <tr>
      <td><?php echo $rows['blogUser']; ?></td>
       <td><?php echo $rows['blogTitle']; ?></td>
        <td><?php echo $rows['blogContent']; ?></td>
         <td><?php echo $rows['blogTime']; ?></td>
          <td><?php echo $rows['likes']; ?></td>
     
    </tr>
    <?php 
    } ?>
</table>
				 	</center>
				 </div>
				</section>
			</html>

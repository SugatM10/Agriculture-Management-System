<?php 
$conn=mysqli_connect('localhost','root','','agroculture');
 ?><?php 
$query="select * from fproduct";
$result=mysqli_query($conn,$query);
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
				 		<h2> Uploaded Products</h2>
				 		<table align="center" border="1px" style="width:auto; line-height:auto;">
  <t>
    <th>Product ID</th>
     <th>Product Name</th>
      <th>Product Owner</th>
       <th>Category</th>
       <th>Product Details</th>
       <th>Price/kg</th>
         <th>Image</th>
         <th>Date/Time</th>
       
   
  </t>
  <?php 
  while($rows=mysqli_fetch_assoc($result)){ ?>
    <tr>
      <td><?php echo $rows['pid']; ?></td>
       <td><?php echo $rows['product']; ?></td>
        <td><?php echo $rows['powner']; ?></td>
         <td><?php echo $rows['pcat']; ?></td>
          <td><?php echo $rows['pinfo']; ?></td>
           <td><?php echo $rows['price']; ?></td>
            <td><?php echo $rows['pimage']; ?></td>
             <td><?php echo $rows['date']; ?></td>
       <td>
    	<form action="updelete.php" method="post">
    	<input type="hidden" name="pid" value="<?php echo $rows['pid'];?>">
    	
    </form>
    </tr>
    <?php 
    } ?>
</table>
				 	</center>
				 </div>
				</section>
			</html>

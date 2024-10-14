
<?php 
$conn=mysqli_connect('localhost','root','','agroculture');
 ?><?php 
$query="select * from price";
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
			<?php
			if(isset($_SESSION['success']) && $_SESSION['success']!="")
			{
				echo'<h2> '.$_SESSION['sucess'].'</h2>'; 
				unset($_SESSION['success']);
			}
			if(isset($_SESSION['status']) && $_SESSION['status']!="")
			{
				echo'<h2> '.$_SESSION['status'].'</h2>'; 
				unset($_SESSION['status']);
			}
			?>
			<section id="one" class="wrapper style1 align" style="height: auto;">
				 <div class="12u$">
				 	<center>
				 		<h2> Price List</h2>
				 		<table align="center" border="1px" style="width:auto; line-height:auto;">
  <t> <th>S.No.</th>
    <th>Product Category </th>
    <th>Product Name</th>
     <th>Price/kg</th>
   <th>Date/Time</th>
        <th>Action</th>
  </t>
  <?php 
  while($rows=mysqli_fetch_assoc($result)){ ?>
    <tr>
      <td><?php echo $rows['SN']; ?></td>
      <td><?php echo $rows['pcat']; ?></td>
      <td><?php echo $rows['pname']; ?></td>
       <td><?php echo $rows['price']; ?></td>
            <td><?php echo $rows['date']; ?></td>
    <td>
    	<form action="delete.php" method="post">
    	<input type="hidden" name="id" value="<?php echo $rows['id'];?>">
    	<button type="submit" name="delete_id" class="btn btn-success" style="text-decoration: none;">Delete</button>
    </td>

    </form>
    </tr>

    <?php 
    } ?>
</table>
<a href="price.php" class="btn btn-danger" style="text-decoration: none;">Add Product Price</a>

				 	</center>
				 </div>
				</section>
			</html>

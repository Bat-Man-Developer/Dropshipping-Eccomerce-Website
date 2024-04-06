<?php
session_start();
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>NSSA STORE</title>
			<link rel="stylesheet" type="text/css" href="assets/styles/styledefault.css">
			<link rel="stylesheet" type="text/css" href="assets/styles/stylecart.css">
			<link rel="stylesheet" type="text/css" href="assets/styles/styletrackorderbanner.css">
			<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300&display=swap" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		</head>
	  <body>

	  <div class="header">
		  <div class="container">
		    <div class="navbar">
			    <div class="logocontainer">
				    <a href="index.php"><img class="logo" src="assets/images/newstufflogo_pic.png" alt="Snow" align="left"></a>
			    </div>
			    <nav>
						<ul id="menuitems">
							<li class="exitmenutogglebtn" id="nav-exit" onclick="menutoggle()"><a href="#">X</a></li>
							<li class="active"><a href="index.php"><img id="navbaricons" src="assets/images/homeicon_pic.png" alt="Snow">Home</a></li>
							<li class="active"><a href="about.php"><img id="navbaricons" src="assets/images/abouticon_pic.png" alt="Snow">About</a></li>
							<li class="active" id="departmentitems" onclick="departmentsmenutoggle()"><a href="#"><img id="navbaricons" src="assets/images/productsicon_pic.png" alt="Snow">Shop Departments</a></li>
							<li class="active"><a href="contact.php"><img id="navbaricons" src="assets/images/contacticon_pic.png" alt="Snow">Contact</a></li>
							<li class="active"><a href="#"><img id="navbaricons" src="assets/images/resellericon_pic.png" alt="Snow">Sell on NSSA</a></li>
							<li class="active"><a href="#"><img id="navbaricons" src="assets/images/careersicon_pic.png" alt="Snow">Careers</a></li>
				    </ul>
					</nav>
					<!---------------Account Image---------------->
					<a href="login.php" style="margin-right: 3%;"><img id="accountpic" class="accountpic" src="assets/images/accounticon_pic.png" alt="Snow" width="30px" height="30px" align="left"></a>
					<!---------------Cart Image---------------->
					<a href="cart.php"><img id="cart-pic" class="cartpic" src="assets/images/cartpic.png" alt="Snow" width="30px" height="30px" align="left">

					<?php if(isset($_SESSION['totalquantity']) && $_SESSION['totalquantity'] != 0) { ?>
							
						<span class="cartquantity"><?php echo $_SESSION['totalquantity']; ?></span>
						
					<?php }?></a>

					<!-- Menu icon -->
					<img src="assets/images/menu.png" alt="Snow" class="menu-icon" onclick="menutoggle()" align="center">
				</div>

				<div class="departmentsnavbar" id="departmentsnavbar">
					<nav class="departmentsnav">
						<ul class="departmentsnavitems">
						  <li class="departmentsactive" onclick="closeallmenutoggle()"><a id="departmentsexitmenutogglebtn" href="#">Close</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductsdepartments=Automotive"><img id="navbaricons" src="" alt="Snow">Automotive</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductsdepartments=DIY"><img id="navbaricons" src="" alt="Snow">DIY</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?flddepartments="><img id="navbaricons" src="" alt="Snow">Baby, Toddler & Kids</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?flddepartments="><img id="navbaricons" src="" alt="Snow">Health, Beauty & Personal Care</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?flddepartments="><img id="navbaricons" src="" alt="Snow">Sports</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?flddepartments="><img id="navbaricons" src="" alt="Snow">Outdoors</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?flddepartments="><img id="navbaricons" src="" alt="Snow">Healthy Living</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?flddepartments="><img id="navbaricons" src="" alt="Snow">Clothing, Shoes & Accessories</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?flddepartments="><img id="navbaricons" src="" alt="Snow">Electronics & Devices</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?flddepartments="><img id="navbaricons" src="" alt="Snow">Garden, Pool & Patio</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?flddepartments="><img id="navbaricons" src="" alt="Snow">Home & Appliances</a></li><li class="departmentsactive" id="departmentsnavlist"><a href="products.php?flddepartments="><img id="navbaricons" src="" alt="Snow">Home & Furniture</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?flddepartments="><img id="navbaricons" src="" alt="Snow">Household Essentials</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?flddepartments="><img id="navbaricons" src="" alt="Snow">Office, Stationary & Books</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?flddepartments="><img id="navbaricons" src="" alt="Snow">Party Ocassions</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?flddepartments="><img id="navbaricons" src="" alt="Snow">Pets</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?flddepartments="><img id="navbaricons" src="" alt="Snow">Liquor</a></li>
						</ul>
					</nav>
				</div>

				<!---- Js for toggle menu ----->
				<script src="js/getheadertogglemenu.js"></script>

				<!------ Js for Voice Recognition Input ----->
				<script src="js/getvoicerecognition.js"></script>
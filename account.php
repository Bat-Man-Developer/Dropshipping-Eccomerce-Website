<?php
session_start();
//if user is not logged in then take user to login page
if(!isset($_SESSION['logged_in'])){
  header('location: login.php');
  exit;
}
include('server/getaccount.php');
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
					<?php } ?></a>

					<!-- Menu icon -->
					<img src="assets/images/menu.png" alt="Snow" class="menu-icon" onclick="menutoggle()" align="center">
				</div>

				<!-------- Departments Navbar ------->
				<div class="departmentsnavbar" id="departmentsnavbar">
					<nav class="departmentsnav">
						<ul class="departmentsnavitems">
						  <li class="departmentsactive" onclick="closeallmenutoggle()"><a id="departmentsexitmenutogglebtn" href="#">Close</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Automotive"><img id="navbaricons" src="assets/images/" alt="Snow">Automotive</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=DIY"><img id="navbaricons" src="assets/images/" alt="Snow">DIY</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Baby, Toddler & Kids"><img id="navbaricons" src="assets/images/" alt="Snow">Baby, Toddler & Kids</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Health, Beauty & Personal Care"><img id="navbaricons" src="assets/images/" alt="Snow">Health, Beauty & Personal Care</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Sports"><img id="navbaricons" src="assets/images/" alt="Snow">Sports</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Outdoors"><img id="navbaricons" src="assets/images/" alt="Snow">Outdoors</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Healthy Living"><img id="navbaricons" src="assets/images/" alt="Snow">Healthy Living</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Clothing, Shoes & Accessories"><img id="navbaricons" src="assets/images/" alt="Snow">Clothing, Shoes & Accessories</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Electronics & Devices"><img id="navbaricons" src="assets/images/" alt="Snow">Electronics & Devices</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Garden, Pool & Patio"><img id="navbaricons" src="assets/images/" alt="Snow">Garden, Pool & Patio</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Home & Appliances"><img id="navbaricons" src="assets/images/" alt="Snow">Home & Appliances</a></li><li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Home & Furniture"><img id="navbaricons" src="assets/images/" alt="Snow">Home & Furniture</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Household Essentials"><img id="navbaricons" src="assets/images/" alt="Snow">Household Essentials</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Office, Stationary & Books"><img id="navbaricons" src="assets/images/" alt="Snow">Office, Stationary & Books</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Party Ocassions"><img id="navbaricons" src="assets/images/" alt="Snow">Party Ocassions</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Pets"><img id="navbaricons" src="assets/images/" alt="Snow">Pets</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Liquor"><img id="navbaricons" src="assets/images/" alt="Snow">Liquor</a></li>
							<li class="departmentsactive" id="departmentsnavlist"><a href="products.php?fldproductdepartment=Sweets & Snacks"><img id="navbaricons" src="assets/images/" alt="Snow">Sweets & Snacks</a></li>
						</ul>
					</nav>
				</div>

				<!---- Voice Recognition AI Search --->
				<div class="voicerecognitioncontainer">
          <img src="assets/images/voicerecognitionicon_pic.png" class="btn" id="voicerecognitionbtn"/>
					<p id="result"></p>
					<p id="voicerecognitionhelplink">Need Help?<a href="voicerecognitionhelp.php">Voice Command List</a><p>
        </div>

				<!------ Js for Voice Recognition Output ----->
				<script src="js/getvoicerecognitionoutput.js"></script>

				<!------ Js for Toggle Menu ----->
				<script src="js/getheadertogglemenu.js"></script>
			</div>
		</div>
<!--------- Account-page ------------>
	<section class="my-5 py-5" id="account-page">
		<div class="container my-5 py-3">
			<div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
				<p class="text-center" style="color: green"><?php if(isset($_GET['registermessage'])){ echo $_GET['registermessage']; }?></p>
				<p class="text-center" style="color: green"><?php if(isset($_GET['loginmessage'])){ echo $_GET['loginmessage']; }?></p>
				<p class="text-center" style="color: green"><?php if(isset($_GET['paymentmessage'])){ echo $_GET['paymentmessage']; }?></p>
				<h3 class="font-weight-bold">Acount Info</h3>
				<hr class="mx-auto">
				<div class="accountinfo">
					<span><img style="width: 140px; height: 140px; border-radius: 50%" src="<?php if(isset($_SESSION['flduserimage'])){ echo "assets/images/".$_SESSION['flduserimage']; }else{ echo "assets/images/unknownimage.png"; }?>" alt="snow"></span>
					<p>Name: <span><?php if(isset($_SESSION['flduserfirstname'])){ echo $_SESSION['flduserfirstname']; echo " "; if(isset($_SESSION['flduserlastname'])){ echo $_SESSION['flduserlastname']; }}?></span></p>
					<p>Email: <span><?php if(isset($_SESSION['flduseremail'])){ echo $_SESSION['flduseremail']; }?></span></p>
					<p><a href="editprofile.php?flduserid=<?php if(isset($_SESSION['flduserid'])){ echo $_SESSION['flduserid']; }else{ header('location: editprofile.php?error=Opps error, try again.'); } ?>" id="logoutbtn" name="editprofile">Edit Profile</a></p>
					<p><a href="#orders" id="ordersbtn">Your Orders</a></p>
					<p><a href="invoices.php?flduserid=<?php if(isset($_SESSION['flduserid'])){ echo $_SESSION['flduserid']; }else{ header('location: editprofile.php?error=Opps error, try again.'); } ?>" id="logoutbtn" name="invoices">Invoices</a></p>
					<p><a href="returns.php?flduserid=<?php if(isset($_SESSION['flduserid'])){ echo $_SESSION['flduserid']; }else{ header('location: editprofile.php?error=Opps error, try again.'); } ?>" id="logoutbtn" name="returns">Returns</a></p>
					<p><a href="settings.php?flduserid=<?php if(isset($_SESSION['flduserid'])){ echo $_SESSION['flduserid']; }else{ header('location: editprofile.php?error=Opps error, try again.'); } ?>" id="logoutbtn" name="settings">Settings</a></p>						
					<p><a href="account.php?logout=1" id="logoutbtn" name="logout">Logout</a></p>
				</div>
			</div>
		</div>
	</section><br><br><br><br><br><br><br><br><br>

	<!--------- Orders --------->
	<section id="orders" class="orders container my-5 py-3">
		<div class="container mt-2">
			<h2 class="font-weight-bold text-center">Your Orders</h2>
			<hr class="mx-auto">
		</div>
		<table class="mt-5 pt-5">
			<tr>
				<th>Order ID</th>
				<th>Order Cost</th>
				<th>Order Status</th>
				<th>Order Date</th>
				<th>Order Details</th>
			</tr>

			<?php while($row = $orders->fetch_assoc()) { ?>

			<tr>
				<td>
					<span><?php echo $row['fldorderid']; ?></span>
				</td>
				<td>
					<span><?php echo $row['fldordercost']; ?></span>
				</td>
				<td>
					<span><?php echo $row['fldorderstatus']; ?></span>
				</td>
				<td>
					<span><?php echo $row['fldorderdate']; ?></span>
				</td>
				<td>
					<form method="POST" action="orderdetails.php">
						<input type="hidden" name="fldordercost" value="<?php echo $row['fldordercost']; ?>"/>
						<input type="hidden" name="fldcouriercost" value="<?php echo $row['fldcouriercost']; ?>"/>
						<input type="hidden" name="fldorderstatus" value="<?php echo $row['fldorderstatus']; ?>"/>
						<input type="hidden" name="fldorderid" value="<?php echo $row['fldorderid']; ?>"/>
						<input type="hidden" name="flduserid" value="<?php echo $row['flduserid']; ?>"/>
						<input class="btn" name="ordersbtn" type="submit" value="details"/>
					</form>
				</td>
			</tr>

			<?php }?>

		</table>
		<div id="accountbottomspace"></div>
	</section>
</body>
</html>
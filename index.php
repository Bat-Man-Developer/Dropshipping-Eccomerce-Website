<?php
include('layouts/header.php');
?>
  </div>
</div>
<!------------- Website Messages----------->
<p style="color: red; font-weight: bold; text-align: center" class="text-center"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
<p style="color: green" class="text-center"><?php if(isset($_GET['message'])){ echo $_GET['message']; }?></p>
<!------------- offer0 ----------->
<div class="offer0">
	<div class="container">
		<div class="row">
		<!-- Below Header Intro or Banner --> 

			<div class="col-2">
				<h2>New Gen AI Shopping!</h2>
				<p>Shop with us and find everything you need.</p>
				<a href="products.php" class="btn">Explore Now &#8594;</a>
				<!---- Voice Recognition Image --->
				<div class="voicerecognitioncontainer">
          <img src="assets/images/voicerecognitionicon_pic.png" class="btn" id="voicerecognitionbtn"/>
					<p id="result"></p>
					<p id="voicerecognitionhelplink">Need Help?<a href="voicerecognitionhelp.php">Voice Command List</a><p>
        </div>

				<!------ Js for Voice Recognition Output---->
				<script src="js/getvoicerecognitionoutput.js"></script>
			</div>
			<div class="col-2">
			</div>	
	  </div>
	</div>
</div>

<!------- Promotions Slide Show ----------->
<div class="categories">
	<div class="small-container">
		<div class="row">
			<div class="col-3">
				<img src="assets/images/gallery pic1.gif" alt="Snow">
			</div>
			<div class="col-3">
				<img src="assets/images/gallery pic2.gif" alt="Snow">
			</div>
			<div class="col-3">
				<img src="assets/images/gallery pic3.gif" alt="Snow">
			</div>
			</div>
		</div>
</div>

<!------- Recommended Products ----------->
<div class="small-container">
	<h2 class="title">Recommended Products</h2>
	<div class="row"> 
		<!---import the files--->
		<?php include('server/getrecommendedproducts.php'); ?>
		<?php while($row = $recommendedproducts->fetch_assoc()) { ?>
		<div class="col-4">
			<a href="<?php echo "productdetails.php?fldproductid=". $row['fldproductid']; ?>"><img src="assets/images/<?php echo $row['fldproductimage']; ?>" alt="Snow">
			<h4><?php echo $row['fldproductname']; ?></h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p><?php echo $row['fldproductprice']; ?></p>
			</a>
		</div>
		<?php } ?>
	</div>
</div>

<!------------- Latest products ----------->
<div class="small-container">
	<h2 class="title">Latest Products</h2>
	<div class="row"> 
		<!---import the files--->
		<?php include('server/getlatestproducts.php'); ?>
		<?php while($row = $latestproducts->fetch_assoc()) { ?>
		<div class="col-4">
			<a href="<?php echo "productdetails.php?fldproductid=". $row['fldproductid']; ?>"><img src="assets/images/<?php echo $row['fldproductimage']; ?>" alt="Snow">
			<h4><?php echo $row['fldproductname']; ?></h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p><?php echo $row['fldproductprice']; ?></p>
			</a>
		</div>
		<?php } ?>
	</div>
</div>

<!------------- offer ----------->
<div class="offer">
	<div class="small-container">
		<div class="row">

		<!---import the files--->
		<?php include('server/getofferproducts.php'); ?>
		<?php while($row = $offerproducts->fetch_assoc()) { ?>

			<div class="col-2">
				<a href="<?php echo "productdetails.php?fldproductid=". $row['fldproductid']; ?>"><img src="assets/images/<?php echo $row['fldproductimage']; ?>" class="offer-img" alt="Snow"></a>
				<a href="<?php echo "productdetails.php?fldproductid=". $row['fldproductid']; ?>"><h4><?php echo $row['fldproductname']; ?></h4></a>
			</div>
			<div class="col-2">
				<p>Exclusively Available on our Website</p>
				<h1><?php echo $row['fldproductname']; ?></h1>
				<small>Only The Best Require The Best Available. Limited Offer.<br>
				</small>
				<a href="<?php echo "productdetails.php?fldproductid=". $row['fldproductid']; ?>" class="btn">Buy Now &#8594;</a>
			</div>

			<?php } ?>

		</div>
	</div>
</div>

<!---------- testimonials --------->
<div class="testimonials">
	<div class="small-container">
		<div class="row">
			<h2 class="title">Testimonials & Suggestions</h2>
			<h3 class="titledescription">help us improve by mentioning problems & challenges experienced in our online store.</h3>
			<!---import the files--->
			<?php include('server/gettestimonials.php'); ?>
			<?php while($row = $testimonials->fetch_assoc()) { ?>
			<div class="col-3">
				<i class="fa fa-quote-left"></i>
				<p><?php echo $row['fldtestimonialscomment']; ?></p>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<img src="<?php if(isset($row['fldtestimonialsimage'])){ echo "assets/images/".$row['fldtestimonialsimage']; }else{ echo "assets/images/unknownimage.png"; } ?>" alt="Snow">
				<h3><?php echo $row['fldtestimonialsemail']; ?></h3>
			</div>
			<?php } ?>
		</div>
		<div class="row">
			<a href="testimonialslogin.php" class="btn">Suggestions...</a>
	  </div>
	</div>
</div>

<!----------- brands ---------->
<div class="brands">
	<div class="small-container">
		<div class="row">
			<div class="col-5">
				<img src="assets/images/paypalpic.png" alt="Snow">
			</div>
		</div>
	</div>
</div>
<?php
include('layouts/footer.php');
?>
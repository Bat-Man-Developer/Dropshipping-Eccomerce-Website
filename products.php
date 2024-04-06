<?php
include('layouts/header.php');
?>
  </div>
</div>

<section>
	<div class="filterdropdown">
		<label>Filter
			<select name="type" id="filtersort">
			  <option value="">Sort...</option>
				<option value="Highest - Lowest Price">Highest - Lowest Price</option>
				<option value="Highest - Lowest Price">Lowest - Highest Price</option>
				<option value="Highest - Lowest Price">Highest - Lowest Rating</option>
				<option value="Highest - Lowest Price">Lowest - Highest Rating</option>
				<option value="Discount">Discount</option>
			</select>
		</label>
	</div>
	<hr>
	<div class="row"> 
		<?php include('server/getallproducts.php'); ?>
		<?php while($row = $allproducts->fetch_assoc()) { ?>

		<div class="displayallproducts">
			<a href="<?php echo "productdetails.php?fldproductid=". $row['fldproductid']; ?>"><img src="assets/images/<?php echo $row['fldproductimage']; ?>" alt="Snow"></a>
			<a href="<?php echo "productdetails.php?fldproductid=". $row['fldproductid']; ?>"><h4><?php echo $row['fldproductname']; ?></h4></a>
			<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
			</div>
			<p><?php echo $row['fldproductprice']; ?></p>
		</div>
		<?php } ?>
	</div>
	<div class="page-btn">
		<span class="page-item <?php if($pagenumber <= 1){ echo 'disabled';} ?>"><a class="page-link" href="<?php if($pagenumber <= 1){ echo '#';}else{ echo "?pagenumber=".($pagenumber - 1);} ?>">Prev</a></span>

		<span class="page-item"><a class="page-link" href="?pagenumber=1">1</a></span>
		<span class="page-item"><a class="page-link" href="?pagenumber=2">2</a></span>

		<?php if($pagenumber >= 3) { ?>
			<span class="page-item"><a class="page-link" href="#">...</a></span>
		  <span class="page-item"><a class="page-link" href="<?php echo "?pagenumber=".$pagenumber; ?>"><?php echo $pagenumber; ?></a></span>
		<?php } ?>

		<span class="page-item <?php if($pagenumber >= $totalnumberofpages){ echo 'disabled';} ?>"><a class="page-link" href="<?php if($pagenumber >= $totalnumberofpages){ echo '#';}else{ echo "?pagenumber=".($pagenumber + 1);} ?>">Next</a></span>
	</div>
</section> 
<?php
include('layouts/footer.php');
?>
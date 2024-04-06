<?php
include('layouts/header.php');
//if user is not logged in then take user to login page
if(!isset($_SESSION['logged_in'])){
  header('location: login.php');
  exit;
}
include('server/getorderdetails.php');
?>
  </div>
</div>

<!--------- Order details--------->
<section id="orderdetails" class="orderdetails container my-5 py-3">
	<div class="container mt-2">
		<h2 class="font-weight-bold text-center">Your Orders</h2>
		<hr class="mx-auto">
	</div>
	<table class="mt-5 pt-5">
		<tr>
			<th>Product</th>
			<th>Product Price</th>
			<th>Product Quantity</th>
		</tr>
		<?php foreach($orderdetails as $row) { ?>
		<tr>
			<td>
				<div>
					<img src="assets/images/<?php echo $row['fldproductimage']; ?>" alt="Snow"/>
					<div>
						<p class="mt-3"><?php echo $row['fldproductname']; ?></p>
					</div>
				</div>
			</td>
			<td>
				<span><?php echo $row['fldproductprice']; ?></span>
			</td>
			<td>
				<span><?php echo $row['fldproductquantity']; ?></span>
			</td>
		</tr>
		<?php }?>
	</table>

	<?php if($orderstatus == "Not Paid") {?>
		<form method="POST" action="payment.php">
		  <input type="hidden" name="flduseremail" value="<?php echo $useremail; ?>"/>
		  <input type="hidden" name="fldordercost" value="<?php echo $ordercost; ?>"/>
			<input type="hidden" name="fldcouriercost" value="<?php echo $couriercost; ?>"/>
		  <input type="hidden" name="fldorderstatus" value="<?php echo $orderstatus; ?>"/>
			<input type="hidden" name="fldorderid" value="<?php echo $orderid; ?>"/>
			<input type="hidden" name="flduserid" value="<?php echo $userid; ?>"/>
			<input type="hidden" name="protectpaymentpage" value="<?php $_SESSION['protectpaymentpage'] = "unlockpage"; echo "unlockpage" ?>"/>
			<input type="submit" class="btn" name="orderdetailsbtn" value="Pay Now"/>
		</form>
	<?php }?>

	<?php if($orderstatus == "Paid") {?>
		<form method="POST" action="trackorder.php">
		  <input type="hidden" name="fldorderstatus" value="<?php echo $orderstatus; ?>"/>
			<input type="submit" class="btn" name="trackorderbtn" value="Track Order"/>
		</form>
	<?php }?>

</section>
</body>
</html>
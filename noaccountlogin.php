<?php
include('layouts/header.php');
//if user did not pay take user to home page
if(isset($_SESSION['flduserid'])){
	include('server/getnoaccountlogin.php');
}
else{
	header('location: index.php');
  exit;
}
?>
  </div>
</div>
<!--------- no account login page ------------>
<section class="my-5 py-5">
	<div class="container text-center mt-3 pt-5">

	<p class="mt-5 text-center" style="color: green"><?php if(isset($_GET['paymentmessage']))echo $_GET['paymentmessage']; ?></p>

		<h2 class="form-weight-bold">Login to Account</h2>
		<hr class="max-auto">
	</div>
	<div class="max-auto container">
		<form id="noaccountloginform" method="POST" action="noaccountlogin.php">
			<p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error'];} ?></p>
			
			<div class="form-group">
				<label>Password
					<input type="password" class="form-control" id="noaccountloginpassword" name="flduserpassword" placeholder="Password" required/>
				</label>
			</div>
			<div class="form-group">
				<label>Confirm Password
					<input type="password" class="form-control" id="noaccountloginconfirmpassword" name="flduserconfirmpassword" placeholder="Confirm Password" required/>
				</label>
			</div>
			<div class="form-group">
				<button type="submit" name="noaccountloginbtn" class="btn" id="noaccountloginbtn" required>Login</button>
			</div>
		</form>
	</div>
</section>

<?php
include('layouts/footer.php');
?>
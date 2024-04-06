<?php
include('layouts/header.php');
include('server/getresetpassword.php');
?>
  </div>
</div>

<!--------- reset password page ------------>
<section class="my-5 py-5">
	<div class="container text-center mt-3 pt-5">
		<h2 class="form-weight-bold">Reset Password</h2>
		<hr class="max-auto">
	</div>
	<div class="max-auto container">
		<form id="resetpasswordform" method="POST" action="resetpassword.php">
			<p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error'];} ?></p>
			
			<div class="form-group">
				<label>Email
					<input type="text" class="form-control" id="resetemail" name="flduseremail" placeholder="Email" required/>
				</label>
			</div>
			<div class="form-group">
				<label>Password
					<input type="password" class="form-control" id="resetpasswordpassword" name="flduserpassword" placeholder="Password" required/>
				</label>
			</div>
			<div class="form-group">
				<label>Confirm Password
					<input type="password" class="form-control" id="resetpasswordconfirmpassword" name="flduserconfirmpassword" placeholder="Confirm Password" required/>
				</label>
			</div>
			<div class="form-group">
				<button type="submit" name="resetpasswordbtn" class="btn" id="resetpasswordbtn" required>Reset Password</button>
			</div>
		</form>
	</div>
</section>
<?php
  include('layouts/footer.php');
?>
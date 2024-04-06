<?php

include('layouts/header.php');

//if user has already registered then take user to account page
if(isset($_SESSION['logged_in'])){
  header('location: account.php');
  exit;
}

include('server/getregistration.php');

?>
  </div>
</div>

<!--------- registration-page ------------>
<section class="my-5 py-5">
	<div class="container text-center mt-3 pt-5">
		<h2 class="form-weight-bold">Registration</h2>
		<hr class="max-auto">
	</div>
	<div class="registrationcontainer">
		<form id="registrationform" method="POST" action="registration.php">
			<p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error'];} ?></p>
			<div class="form-group">
				<label>First Name
				  <input type="text" class="form-control" id="registrationfirstname" name="flduserfirstname" placeholder="First Name" required/>
				</label>
			</div>
			<div class="form-group">
				<label>Last Name
					<input type="text" class="form-control" id="registrationlastname" name="flduserlastname" placeholder="Last Name" required/>
				</label>
			</div>
			<div class="form-group">
				<label>Addressline1
					<input type="text" class="form-control" id="registrationaddressline1" name="flduseraddressline1" placeholder="Addressline1" required/>
				</label>
			</div>
			<div class="form-group">
				<label>Addressline2
					<input type="text" class="form-control" id="registrationaddressline2" name="flduseraddressline2" placeholder="Addressline2"/>
				</label>
			</div>
			<div class="form-group">
				<label>Postal Code
					<input type="text" class="form-control" id="registrationpostalcode" name="flduserpostalcode" placeholder="Postalcode" required/>
				</label>
			</div>
			<div class="form-group">
				<label>City
					<input type="text" class="form-control" id="registrationcity" name="fldusercity" placeholder="City" required/>
				</label>
			</div>
			<div class="form-group">
				<label>Country
					<select class="form-control" id="registrationcountry" name="fldusercountry" size="1" value="" required>
						<option value="">Select Country..</option>
						<option value="Australia">Australia</option>
						<option value="Britain">Britain</option>
						<option value="China">China</option>
						<option value="Egypt">Egypt</option>
						<option value="England">England</option>
						<option value="France">France</option>
						<option value="Germany">Germany</option>
						<option value="Italy">Italy</option>
						<option value="Mauritius">Mauritius</option>
						<option value="Mexico">Mexico</option>
						<option value="Nigeria">Nigeria</option>
						<option value="Portugal">Portugal</option>
						<option value="Russia">Russia</option>  
						<option value="South_Africa">South Africa</option>
						<option value="Thailand">Thailand</option>
						<option value="USA">USA</option>
					</select>
				</label>
			</div>
			<div class="form-group">
				<label>Phone Number
					<input type="text" class="form-control" id="registrationphonenumber" name="flduserphonenumber" placeholder="Phone Number" required/>
				</label>
			</div>
			<div class="form-group">
				<label>Email
					<input type="text" class="form-control" id="registrationemail" name="flduseremail" placeholder="Email" required/>
				</label>
			</div>
			<div class="form-group">
				<label>ID Number
					<input type="text" class="form-control" id="registrationidnumber" name="flduseridnumber" placeholder="ID Number" required/>
				</label>
			</div>
			<div class="form-group">
				<label>Password
					<input type="password" class="form-control" id="registrationpassword" name="flduserpassword" placeholder="Password" required/>
				</label>
			</div>
			<div class="form-group">
				<label>Confirm Password
					<input type="password" class="form-control" id="registrationconfirmpassword" name="flduserconfirmpassword" placeholder="Confirm Password" required/>
				</label>
			</div>
			<div class="form-group">
				<input type="hidden" name="flduserimage" value="unknownimage.png" required/>
				<button type="submit" name="registrationbtn" class="btn" required>Register</button>
				<p style="font-size: small">Do you have an account?<a id="loginurl" href="login.php">Login Here</a></p>
			</div>
		</form>
	</div>
</section>


<?php

include('layouts/footer.php');
	
?>
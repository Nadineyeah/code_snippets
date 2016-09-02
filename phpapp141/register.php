<?php
include("header.php"); ?>
<div class="container">
<?php include('navigation.php'); ?>
	<div class="row">
		
		<div class="col-md-3 col-lg-3"></div>
		<form method="post" action="user_action.php">
			<div class="col-md-6 col-lg-4">
				<h3>Registration Form</h3>
				<input type="text" name="fname" class="form-control" placeholder="First Name" required /><br/>
				<input type="text" name="lname" class="form-control" placeholder="Last Name" required /><br/>
				<select name="gender" class="form-control" required>
					<option value="0">-Select Gender-</option>
					<option value="m">Male</option>
					<option value="f">Female</option>
				</select><br />
				<input type="email" name="email" class="form-control" placeholder="Email Address" required/><br/>
				<input type="tel" name="contactno" class="form-control" placeholder="Contact Number" required/><br/><br/>
				
				<h3>User credentials</h3>
				<input type="text" name="userid" class="form-control" placeholder="Username" required/><br/>
				<input type="password" name="password" class="form-control" placeholder="Password" required/><br/>
				<input type="submit" value="Register User" class="btn btn-success" />
			</div>
		</form>
		<div class="col-md-3 col-lg-3"></div>
		
	</div>
</div>

<?php
include("footer.php"); ?>
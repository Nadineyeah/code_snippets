<html>
<?php require('header.php');?>
	<body>
		<div class="container">
			<!--Navigation bar-->
			<?php require('navigation.php'); ?>
			<!--body content-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-lg-4"></div>
					<div class="col-md-4 col-lg-4">
						<!--create form to submit username and password to server -->
						<!--remove the comment tag to enable the form tags-->
						<form method="post" action="login.php">
							
							<div class="well">
								<input type="text" placeholder="Username" name="username" class="form-control" /><br />
								<input type="password" placeholder="Password" name="password" class="form-control"/><br />
								<input type="submit" value="Login" class="btn btn-info btn-block" /><br/>
								<a href="register.php">Register User</a>
								
							</div>
							
						</form>
					</div>
					<div class="col-md-4 col-lg-4"></div>
				</div>
			</div>
			
		</div>
		
	</body>
</html>
<?php
	require('footer.php');
?>
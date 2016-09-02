<?php include('header.php'); ?>

<div class="container">
	<?php include('navigation.php'); ?>
	<h1>Home Page</h1>
	<div class="row">
		<div class="col-md-6 col-lg-6">
			<form method="post" action="file_action.php" enctype="multipart/form-data">
				<input type="file" class="form-control" name="profilepic" /><br />
				<input type="submit" value="Upload" class="btn btn-default" />
			</form>
		</div>
		<div class="col-md-6 col-lg-6">
		</div>
	</div>
</div>
<?php include('footer.php'); ?>

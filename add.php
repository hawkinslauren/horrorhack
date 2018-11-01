<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>Horror Hackathon</title>
	<style>
		/*custom page css here*/

	</style>
</head>

<body>
	<!-- HTML here. -->
	<?php require('nav.php'); ?>
	<div class="jumbotron bg-danger text-light hero">
		<div class="container">
			<h1 class="display-2">Add your Favorite Horror Flick</h1>
			<h2>Added movies are voted on.</h2>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form method="post" action="addmovie.php" enctype="multipart/form-data">
					<div class="form-group">
						<label>Name<br>
							<input type="text" name="name" class="form-control" placeholder="Exorcist">
						</label>
					</div>

					<div class="form-group">
						<label>Description<br>
							<input type="text" name="desc" class="form-control" placeholder="On a dark, cold night...">
						</label>
					</div>

					<div class="form-group">
						<label>Youtube Embed link<br>
							<input type="text" name="youtube" class="form-control" placeholder="https://www.youtube.com/embed/123abc">
						</label>
					</div>

					<div class="form-group">
						<label>Poster Image<br>
							<input type="file" name="poster" class="form-control">
						</label>
					</div>
					<input type="submit" name="submit" value="Add Movie" class="btn btn-primary">
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>

	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script>
		/* custom script here */

	</script>
</body>

</html>

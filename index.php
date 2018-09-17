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
	<div class="jumbotron">
		<h1 class="display-1">Horror Hackathon</h1>
		<h2>Vote on the best movies of 2018</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
		incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
		nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
		fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
		culpa qui officia deserunt mollit anim id est laborum.</p>

	</div>
	<div class="container">
		<h3 class="text-center">Vote for your favorite!</h3>
		<form method="post" action="vote.php">
			<div class="row" id="movies">

				<?php
					$d = file_get_contents('data.json');
					$d = json_decode($d, true);
					
					$total = 0;
					foreach($d as $v){
						echo '<div class="col-sm-4">
								<a href="moviedetail.php#'.$v[id].'" class="d-inline-block">
									<img src="'.$v[poster].'" class="img-fluid">
									<h4>'.$v[name].'</h4>
								</a>
								<p><a href="moviedetail.php#'.$v[id].'" class="btn btn-primary">See Details</a></p>
								<p>Votes: '.$v[votes].'</p>
								<label>
									<input type="radio" value="'.$v[id].'" name="vote"> This was the best movie!
								</label>
							</div>';
						$total += $v[votes];
					}
				?>
			</div>
			<p class="text-center p-3">
				<input type="submit" name="submit" value="Vote Now" class="btn btn-primary">
			</p>
		</form>
		<hr>
		<h4 class="text-center p-3">Total Votes: <?php echo $total; ?></h4>
	
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
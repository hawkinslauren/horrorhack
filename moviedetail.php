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
	<div class="jumbotron bg-danger text-light mb-0">
		<div class="container">
		<h1 class="display-1"></h1>
		<p>Description of movie.</p>
	</div>
		</div>
	
	<div class="embed-responsive embed-responsive-16by9">
  <iframe id="trailer" class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
</div>

		<form method="post" action="vote.php">

			<p class="text-center p-3">
			<input id="voteid" type="hidden" value="1" name="vote">
			<input type="submit" name="submit" value="Vote Now" class="btn btn-primary">
			</p>
		</form>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<?php
		$d = file_get_contents('data.json');
		//$d = json_decode($d, true);
	?>
	<script>
		/* custom script here */
		var moviedata = <?php echo $d; ?>;
		var id = window.location.hash.substr(1);
		for(i in moviedata){
			if (moviedata[i]['id'] == id){
				console.log(moviedata[i]['name']);
				$(".jumbotron h1").html(moviedata[i]['name']);
				$(".jumbotron p").html(moviedata[i]['desc']);
				$("#trailer").attr("src", moviedata[i]['youtube']);
				$("#voteid").val(moviedata[i]['id']);
				
			}
			
		}
		


	</script>
</body>

</html>

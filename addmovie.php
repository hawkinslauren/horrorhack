<?php

$name = $_POST['name'];
$desc = $_POST['desc'];
$yout = $_POST['youtube'];
$posr = $_FILES['poster'];

$postmp = $_FILES['poster']['tmp_name'];
$posname = $_FILES['poster']['name'];
$img = "assets/img/$posname"; 
move_uploaded_file( $postmp, $img );

$d = file_get_contents('data.json');
$d = json_decode($d, true);

$id = count($d);

$a = array(
	"id" => ++$id,
	"name" => $name,
	"poster" => $img,
	"youtube" => $yout,
	"desc" => $desc,
	"votes" => 0
);

array_push($d, $a);

$d = json_encode($d);
file_put_contents('data.json', $d);

header('location: index.php#movies');

?>
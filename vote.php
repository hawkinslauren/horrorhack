<?php
	$a = $_POST['vote'];

	$d = file_get_contents('data.json');
	$d = json_decode($d, true);

	foreach($d as $k => $v){
		if($v['id'] == $a ){
			++$d[$k]['votes'];
		}
	}

	$d = json_encode($d);
	file_put_contents('data.json', $d);

	header('location: index.php#movies');


?>

<?php
	$img = $_POST['img'];
	//print $img;

	$img = str_replace(' ', '+', $img);
	$decoded=base64_decode($img);
	file_put_contents('newImage.JPG',$decoded);
	//echo $decoded;

?>
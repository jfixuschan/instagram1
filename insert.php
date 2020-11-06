<?php 
	$con = mysqli_connect("127.0.0.1", "root", "", "insta");
	$text_query_vstavit = "INSERT INTO posts (user, texts, img)
		VALUES ('{$_GET["user"]}', '{$_GET["texts"]}', '{$_GET["img"]}')";
	$zapros_vvoda = mysqli_query($con, $text_query_vstavit);
	header('Location: index.php');
 ?>
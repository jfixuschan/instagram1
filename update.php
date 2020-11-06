<?php 
		$con = mysqli_connect('127.0.0.1', 'root','','insta');
		$query_zapros = "UPDATE posts SET texts='".$_GET["texts"]."', img = '".$_GET["img"]."' WHERE id = '".$_GET["id"]."'";
	 	$zapros_vvoda = mysqli_query($con, $query_zapros);
	 	header('Location: index.php');
	 ?>

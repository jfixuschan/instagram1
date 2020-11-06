<?php 
	$con = mysqli_connect('127.0.0.1','root','','insta');
	$delete = "DELETE FROM posts WHERE id = '".$_GET["id"]."'";
	mysqli_query($con, $delete);
	header('Location: index.php');
 ?>

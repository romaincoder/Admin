<?php
	$con=mysqli_connect('localhost','root','','ngo');

$id = $_GET['n_id'];

$q = "DELETE FROM `ngodata` WHERE n_id = $id";

mysqli_query($con,$q);

header('location:list.php');

?>
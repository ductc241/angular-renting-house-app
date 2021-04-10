<?php
	session_start();

	if(isset($_SESSION['admin']) == false){
	 	header('location:../../index.php');
	 }

?>


<?php
	require_once "pdo.php";

	function user_select() {
		$sql = "select * from user order by user_id DESC";
		return pdo_query($sql);
	}

	function user_delete($user_id) {
		$sql = "DELETE FROM user WHERE user_id=$user_id";
		pdo_execute($sql, $user_id);
		header("location:user.php");
	}

	function user_insert($user_name, $password, $email, $address) {
		$sql = "INSERT INTO user SET user_name='$user_name', password='$password', email='$email', address='$address'";
		pdo_execute($sql);
		header("location:user.php");
	}

	function update(){
		
	}
?>
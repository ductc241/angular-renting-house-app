<?php
	require_once "pdo.php";

	function cate_select() {
		$sql = "select category.*, COUNT(category.cate_id) AS quantity from category join room on category.cate_id = room.cate_id where room.censorship = 1 group by category.cate_id";
		return pdo_query($sql);
	}

	function cate_insert($cate_name) {
		$sql = "INSERT INTO category SET cate_name='$cate_name'";
		pdo_execute($sql);
		header('location:cate.php');
	}

	function cate_update($cate_name, $cate_id) {
		$sql = "UPDATE category SET cate_name = '$cate_name' where cate_id = $cate_id";
		pdo_execute($sql);
	}


	function cate_delete($cate_id) {
		$sql = "DELETE FROM category WHERE cate_id=$cate_id";
		pdo_execute($sql);
		header("location:cate.php");
	}
?>
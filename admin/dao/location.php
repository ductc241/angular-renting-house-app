<?php
	require_once "pdo.php";

	function loca_select() {
		$sql = "select location.*, COUNT(location.loca_id) AS quantity from location join room on location.loca_id = room.loca_id WHERE room.censorship = 1 group by location.loca_id";
		return pdo_query($sql);
	}

	function loca_insert($loca_name) {
		$sql = "INSERT INTO location SET loca_name = '$loca_name'";
		pdo_execute($sql);
		header('location:location.php');
	}

	function loca_update($loca_name, $loca_id) {
		$sql = "UPDATE location SET loca_name = '$loca_name' where loca_id = $loca_id";
		pdo_execute($sql);
	}


	function loca_delete($loca_id) {
		$sql = "DELETE FROM location WHERE loca_id=$loca_id";
		pdo_execute($sql);
		header("location:location.php");
	}
?>
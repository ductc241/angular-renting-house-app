<?php
	require_once "pdo.php";

	function service_insert($electric, $water, $internet, $clean, $parking, $room_id) {
		$sql = "INSERT INTO service SET  electric = $electric,  water = $water, internet = $internet, clean = $clean, parking = $parking, room_id = $room_id";
		pdo_execute($sql);
	}
?>
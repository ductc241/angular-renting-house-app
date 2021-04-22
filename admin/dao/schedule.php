<?php
	require_once "pdo.php";

	function schedule_insert($room_id, $user_id, $date){
		$sql = "INSERT INTO schedule SET room_id = $room_id, user_id = $user_id, date = '$date'";
		pdo_execute($sql);
		header('location:./userbackend/notification.php');
	}

	function schedule_notify($date, $landlords, $user_id, $room_id){
		$msg = 'Bạn đã đặt lịch xem phòng này vào ' . $date;
		$msg1 = 'Có người đã đặt lịch xem phòng này vào ngày ' . $date;
		$sql = "INSERT INTO notify SET renter = $user_id, room_id = $room_id, message = '$msg'";
		$sql1 = "INSERT INTO notify SET landlords = $landlords, renter = $user_id, room_id = $room_id, message = '$msg1'";
		pdo_execute($sql);
		pdo_execute($sql1);
		header('location:./userbackend/notification.php');
	}
?>
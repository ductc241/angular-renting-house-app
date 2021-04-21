<?php
	require_once "pdo.php";

	function notify_cencored($landlord){
		$sql = "select notify.*, room.room_name from notify join room on notify.room_id = room.room_id 
				where notify.landlords = $landlord and renter is NULL
				order by create_at DESC";
		return pdo_query($sql);
	}

	function notify_schedule($renter){
		$sql = "select notify.*, room.room_name from notify join room on notify.room_id = room.room_id 
				where notify.renter = $renter and landlords is NULL
				order by create_at DESC";
		return pdo_query($sql);
	}

	function notify_view($landlord){
		$sql = "select notify.*, room.room_name from notify join room on notify.room_id = room.room_id 
				where notify.renter is not NULL and landlords  = $landlord
				order by create_at DESC";
		return pdo_query($sql);
	}

?>
<?php
	require_once "pdo.php";

	function room_select() {
		$sql = "SELECT user.user_name AS username, category.cate_name AS catename, location.loca_name AS locaname, room.* 
				FROM room JOIN user ON room.user_id = user.user_id 
				JOIN category ON room.cate_id = category.cate_id
				JOIN location ON room.loca_id = location.loca_id
				WHERE room.censorship = 1";

		return pdo_query($sql);
	}

	function room_delete() {
		
	}


	function room_select_one($room_id){
		$sql = "select room.*, user.user_name as username, service.*
				from room join user on room.user_id = user.user_id 
				join service on room.room_id = service.room_id 
				where room.room_id = $room_id";
		$result = pdo_query_one($sql);

		return $result;
	}

?>
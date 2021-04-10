<?php
	require_once "pdo.php";

	function room_select() {
		$sql = "SELECT user.user_name AS username, category.cate_name AS catename, location.loca_name AS locaname, room.* 
				FROM room JOIN user ON room.user_id = user.user_id 
				JOIN category ON room.cate_id = category.cate_id
				JOIN location ON room.loca_id = location.loca_id
				WHERE room.censorship = 0";

		return pdo_query($sql);
	}

	function censored($room_id) {
		$sql = "UPDATE room SET censorship = 1 where room_id = $room_id";
		pdo_execute($sql);
		header('location:./censorship.php');
	}


	function notify_accept($admin_id, $room_id) {
		$msg = "Tin của bạn đã được phê duyệt từ admin và sẻ xuất hiện trên trang của chúng tôi";
		$sql = " INSERT INTO notify SET (admin_id, room_id, message) VALUES ($admin_id, $user_id, $room_id, $msg) ";
		pdo_execute($sql);
		header(location:censorship.php);
	}
?>
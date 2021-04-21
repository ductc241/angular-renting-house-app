<?php
	require_once "pdo.php";

	function user_select() {
		$sql = "select * from user order by user_id DESC";
		return pdo_query($sql);
	}

	function user_select_one($id) {
		$sql = "select * from user where user_id = $id";
		return pdo_query_one($sql);
	}

	function user_select_roomid($room_id){
		$sql = "select user.* from user join room on user.user_id = room.user_id where room.room_id = $room_id";
		return pdo_query_one($sql);
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

	function user_registry($user_name, $password, $email, $phone){
		$sql = "INSERT INTO user SET user_name='$user_name', password='$password', email='$email', phone='$phone'";
		pdo_execute($sql);
		header("location:./login.php");
	}

	function user_update($name_avatar, $email, $address, $phone, $birthday, $id){
		if($name_avatar == ""){
			$sql = "UPDATE user SET birthday = '$birthday', email='$email', address='$address', phone='$phone' where user_id=$id";
		}else{
			$sql = "UPDATE user SET avatar='$name_avatar', birthday = '$birthday', email='$email', address='$address', phone='$phone' where user_id=$id";
		}		
		pdo_execute($sql);
		unset($_POST);
        header("Location:./profile.php ");
        exit;
	}
?>
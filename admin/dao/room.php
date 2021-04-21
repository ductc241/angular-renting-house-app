<?php
    require_once "pdo.php";
    require_once "service.php";
	require_once "album.php";

	function room_select() {
		$sql = "SELECT user.user_name AS username, category.cate_name AS catename, location.loca_name AS locaname, room.* 
				FROM room JOIN user ON room.user_id = user.user_id 
				JOIN category ON room.cate_id = category.cate_id
				JOIN location ON room.loca_id = location.loca_id
				WHERE room.censorship = 1";

		return pdo_query($sql);
	}

    function room_select_id ($id){
        $sql = "select room.*, location.loca_name AS locaname from room JOIN location ON room.loca_id = location.loca_id where user_id = $id";
        return pdo_query($sql);
    }

	function room_select_one($room_id){
		$sql = "select room.*, user.user_name as username, service.*, category.cate_name AS catename, location.loca_name AS locaname
				from room join user on room.user_id = user.user_id 
				join service on room.room_id = service.room_id
                join category on room.cate_id = category.cate_id
                join location on room.loca_id = location.loca_id
				where room.room_id = $room_id";
		$result = pdo_query_one($sql);

		return $result;
	}

    function room_select_landlord($id) {
        $sql = "select user.*, count(room.user_id) as sl from user join room on user.user_id = room.user_id where room.room_id = $id";
        return pdo_query_one($sql);
    }



	function room_insert() {
        $conn = pdo_get_connection();
		$room_name = $_POST['room_name'];
    	$loca_id = $_POST['loca_id'];
    	$cate_id = $_POST['cate_id'];
    	$address = $_POST['address'];
    	$price = $_POST['price'];
    	$area = $_POST['area'];
    	$summary = $_POST['editor'];
    	$day_start = $_POST['day_start'];
    	$day_end = $_POST['day_end'];
        $user_id = $_SESSION['user']['user_id'];

        $electric = $_POST['electric'];
        $water = $_POST['water'];
        $internet = $_POST['internet'];
        $clean = $_POST['clean'];
        $parking = $_POST['parking'];



        // image
        $image = $_FILES['image'];
        $mainImageName = time() . '-' . $image['name'][0];

        if ($image && $image['tmp_name'][0]) {
            move_uploaded_file($image['tmp_name'][0], '../assets/images/product/' . $mainImageName);
        }   


        $sql = "INSERT INTO room SET room_name = '$room_name', image = '$mainImageName', address = '$address', price = $price, area = $area, summary = '$summary', day_start = '$day_start', day_end = '$day_end', user_id = $user_id, cate_id = $cate_id, loca_id = $loca_id";
        $stm = $conn->prepare($sql);
        $stm->execute();

        $room_id = $conn->lastInsertId();
        $id = (int)$room_id;

        album_insert($image, $id);
        service_insert($electric, $water, $internet, $clean, $parking, $id);
        notify_accept($id);
	}

    function notify_accept($room_id) {
        $landlords = $_SESSION['user']['user_id'];
        $sql = "INSERT INTO notify SET landlords = $landlords, room_id = $room_id, message = 'Tin của bạn đang chờ duyệt được phê duyệt từ admin và sẽ được xác nhận trong thời gian tới' ";
        pdo_execute($sql);
        header('location:./notification.php');
    }

?>
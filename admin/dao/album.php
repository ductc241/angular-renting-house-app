<?php
	require_once "pdo.php";

	function album_insert($image, $id) {
		for ($i = 1; $i < count($image['name']); $i++) {
            $imgName = time() . $image['name'][$i];
            mkdir('../assets/images/album/' . $id);
            move_uploaded_file($image['tmp_name'][$i], '../assets/images/album/'. $id . '/' . $imgName);
            $sql = "INSERT INTO album SET room_id = $id, image = '$imgName'";
            pdo_execute($sql);
        }
	}

    function album_select($id) {
        $sql = "select * from album where room_id = $id";
        return pdo_query($sql);
    }
?>
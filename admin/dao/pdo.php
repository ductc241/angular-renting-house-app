<?php
	function pdo_get_connection(){ 
		$dburl = "mysql:host=localhost;dbname=phongtro;charset=utf8"; //
		$username = 'root'; 
		$password = '';
		$conn = new PDO($dburl, $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;	
	}

// kết nối đến cơ sở dữ liệu
	function pdo_execute($sql){
		try{
			$conn = pdo_get_connection();
			$stmt = $conn->prepare($sql);
			$stmt->execute();
		}
		catch(PDOException $e){
			throw $e;
		}
		finally{
			unset($conn);
		}	
	}

// thực hiện lệnh sql : lệnh nào cũng thưucj hiện đc
	function pdo_query($sql){
		try{
			$conn = pdo_get_connection();
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$rows = $stmt->fetchAll();
			return $rows;
		}
		catch(PDOException $e){
			throw $e;
		}
		finally{
			unset($conn);
		}
	}

 //lấy ra nhiều giá trị 
	function pdo_query_one($sql){
		try{
			$conn = pdo_get_connection();
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$rows = $stmt->fetch();
			return $rows;
		}
		catch(PDOException $e){
			throw $e;
		}
		finally{
			unset($conn);
		}
	}

//lệnh sql để lấy ra 1 giá trị
?>
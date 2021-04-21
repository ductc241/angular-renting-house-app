<?php
	function pdo_get_connection(){ 
		$dburl = "mysql:host=localhost;dbname=phongtro;charset=utf8"; //
		$username = 'root'; 
		$password = '';
		$conn = new PDO($dburl, $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;	
	}

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

?>
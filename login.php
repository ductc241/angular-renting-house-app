<?php
	require "./admin/dao/pdo.php";

	session_start();

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "select * from user where user_name = '$username'";
	    $result =  pdo_query_one($sql);

	    if(gettype($result) == 'array'){
	      if($password == $result['password']) {
	        $_SESSION['user'] = $result;
	        header('location:./index.php');
	      }else{
	        echo "Kiểm tra lại mật khẩu hoặc tài khoản";
	      }
	    }else{
	      echo "Không tìm thấy tài khoản";
	    }
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trọ tốt</title>

	<!-- css files -->
	<link rel="stylesheet" href="./assets/css/tailwind.css">
	<link rel="stylesheet" href="./assets/css/style.css">

	<!-- icon -->
	<script src="https://kit.fontawesome.com/39b79a0923.js" crossorigin="anonymous"></script>

	<!-- slider -->
	<link rel="stylesheet" href="./assets/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="./assets/owlcarousel/assets/owl.theme.default.min.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">
</head>
<body>
	<?php include "./inc/header.php" ?>

	<div class="my-16">
		<div class="container mx-auto">
			<h1 class="capitalize text-5xl font-bold text-center mb-16">customer login</h1>
			<div class="mx-auto w-1/2 border py-10 px-6">
				<form action="login.php" method="POST">
					<p class="capitalize text-lg font-medium border-b pb-3">registered customers</p>
					<p class="my-3 text-sm text-gray-600">If you have an account, sign in with your email address.</p>
					<div class="mt-6">
						<label for="" class="text-gray-600">Username</label>
						<input type="text" class="w-full border rounded p-2 outline-none" name="username">
					</div>
					<div class="mt-6">
						<label for="" class="text-gray-600">Password</label>
						<input type="password" class="w-full border rounded p-2 outline-none" name="password">
					</div>
					<button type="submit" name="login">Sign in</button>
				</form>

				<div class="mt-14">
					<p class="capitalize text-lg font-medium border-b pb-3">new customers</p>
					<p class="my-3 text-sm text-gray-600">Creating an account has many benefits: check out faster, keep more than one address, track orders and more.</p>
					<button type="submit">
						<a href="registry.html">Create an account</a>
					</button>
				</div>
			</div>
		</div>
	</div>

	<?php include "./inc/footer.html" ?>
</body>
</html>
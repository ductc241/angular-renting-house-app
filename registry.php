<?php
	require "./admin/dao/user.php";

	if(isset($_POST['registry'])){
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		user_registry($user_name, $password, $email, $phone);
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
			<h1 class="capitalize text-5xl font-bold text-center mb-16">create new customer account</h1>
			<div class="mx-auto w-1/2 border p-6">
				<form action="" method="POST">
					<p class="capitalize text-lg font-medium">personal information</p>
					<div class="mt-6">
						<label for="" class="text-gray-600">Email</label>
						<input type="email" name="email" class="w-full border rounded p-2 outline-none">
					</div>
					<div class="mt-6">
						<label for="" class="text-gray-600">Phone</label>
						<input type="text" name="phone" class="w-full border rounded p-2 outline-none">
					</div>

					<p class="capitalize text-lg font-medium pt-6">sign-in information</p>
					<div class="mt-6">
						<label for="" class="text-gray-600">Username</label>
						<input type="text" name="user_name" class="w-full border rounded p-2 outline-none">
					</div>
					<div class="mt-6">
						<label for="" class="text-gray-600">Password</label>
						<input type="password" name="password" class="w-full border rounded p-2 outline-none">
					</div>
					<div class="mt-6">
						<label for="" class="text-gray-600">Confirm Password</label>
						<input type="password" class="w-full border rounded p-2 outline-none">
					</div>
					<button type="submit" name="registry">Create an account</button>
				</form>
			</div>
		</div>
	</div>

	<?php include "./inc/footer.html" ?>
</body>
</html>
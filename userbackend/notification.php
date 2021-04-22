<?php
	require "../admin/dao/pdo.php";
	require "../admin/dao/notify.php";
	session_start();

	if(!isset($_SESSION['user'])){
        header("location: ../login.php");
    }

	// $notify = notify_select($_SESSION['user']['user_id']);
	$notify_cencored = notify_cencored($_SESSION['user']['user_id']);
	$notify_view = notify_view($_SESSION['user']['user_id']);
	$notify_schedule = notify_schedule($_SESSION['user']['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thông báo</title>

	<!-- css files -->
	<link rel="stylesheet" href="../assets/css/userbackend.css">
	<link rel="stylesheet" href="../assets/css/tailwind.css">

	<!-- icon -->
	<script src="https://kit.fontawesome.com/39b79a0923.js" crossorigin="anonymous"></script>

	<!-- slider -->
	<link rel="stylesheet" href="../assets/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="../assets/owlcarousel/assets/owl.theme.default.min.css">

	<!-- gg font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">
</head>
<body>
	<?php include "inc/sidebar.html" ?>

	<div class="main_content p-5">
		<div class="bg-white p-5 rounded-lg">
			<span>Quản lý người dùng</span>
			<span class="mx-3">></span>
			<span class="">Thông báo</span>
		</div>

		<div class="grid grid-cols-12 gap-10 mt-5">
			<div class="col-span-4">
				<h1 class="text-xl font-bold">Thông báo duyệt bài</h1>
				<?php foreach ($notify_cencored as $result): ?>
					<div class="p-5 bg-white rounded-lg mt-5">
						<div class="border-b flex justify-between">
							<p href="#" class="font-bold text-lg uppercase">Thông báo</p>
							<p>Ngày: <?= $result['create_at'] ?></p>
						</div>
						<div class="mt-5">
							<a  class="text-red-500" href="../detail.php?id=<?=$result['room_id']?>">Bài đăng: <?= $result['room_name'] ?></a>
							<p class="mt-2"><?= $result['message'] ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="col-span-4">
				<h1 class="text-xl font-bold">Thông báo khách xem phòng</h1>
				<?php foreach ($notify_view as $result): ?>
					<div class="p-5 bg-white rounded-lg mt-5">
						<div class="border-b flex justify-between">
							<p href="#" class="font-bold text-lg uppercase">Thông báo</p>
							<p>Ngày: <?= $result['create_at'] ?></p>
						</div>
						<div class="mt-5">
							<a  class="text-red-500" href="../detail.php?id=<?=$result['room_id']?>">Bài đăng: <?= $result['room_name'] ?></a>
							<p class="mt-2"><?= $result['message'] ?></p>
							<?php
								$id = (int)$result['renter'];
								$sql = "select * from user where user_id = $id";
								$renter = pdo_query_one($sql);
								echo "<p class='mt-2'> Tên: " . $renter['user_name'] . "</p>";
								echo "<p class='mt-2'> SĐT: " . $renter['phone'] . "</p>";
							?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="col-span-4">
				<h1 class="text-xl font-bold">Thông báo lịch đã đặt</h1>
				<?php foreach ($notify_schedule as $result): ?>
					<div class="p-5 bg-white rounded-lg mt-5">
						<div class="border-b flex justify-between">
							<p href="#" class="font-bold text-lg uppercase">Thông báo</p>
							<p>Ngày: <?= $result['create_at'] ?></p>
						</div>
						<div class="mt-5">
							<a  class="text-red-500" href="../detail.php?id=<?=$result['room_id']?>">Bài đăng: <?= $result['room_name'] ?></a>
							<p class="mt-2"><?= $result['message'] ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>


		
	</div>
</body>
</html>
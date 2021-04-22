<?php
	session_start();
	require_once "./admin/dao/schedule.php";
	require_once "./admin/dao/room.php";
	require_once "./admin/dao/user.php";
	require_once "./admin/dao/album.php";

	if(isset($_SESSION['user'])){
		$user =  user_select_one($_SESSION['user']['user_id']);
	}

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$room = room_select_one($id);
		$album = album_select($id);
		$landlord = room_select_landlord($id);
	}

	if(isset($_POST['setup'])){
		$room_id = $_GET['id'];
		$landlords = user_select_roomid($room_id)['user_id'];
		$user_id = $_SESSION['user']['user_id'];
		$date = $_POST['schedule'];

		schedule_insert($room_id, $user_id, $date);
		schedule_notify($date, $landlords, $user_id, $room_id);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trọ tốt</title>

	<!-- css files -->
	<link rel="stylesheet" href="./assets/css/style.css">
	<link rel="stylesheet" href="./assets/css/tailwind.css">

	<!-- icon -->
	<script src="https://kit.fontawesome.com/39b79a0923.js" crossorigin="anonymous"></script>

	<!-- slider -->
	<link rel="stylesheet" href="./assets/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="./assets/owlcarousel/assets/owl.theme.default.min.css">

	<!-- gg font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">

	<style>
		button{
			margin-top: 20px;
			padding: 13px 45px;
			background-color: #FF385C;
			color: white;
			border-radius: 5px;
			text-transform: capitalize;
			font-weight: 500;
			width: 100%;
		}

		ul{
			list-style-type: disc;
			margin-left: 40px;
		}

		#map-canvas {
            height: 73%;
            width: 100%;
        }
	</style>
</head>
<body>
	<?php include "./inc/header.php" ?>

	<div class="my-10">
		<div class="container mx-auto px-20">
			<div class="grid grid-cols-12">
				<div class="col-span-7">
					<div class="owl-carousel owl-theme">
						<?php foreach ($album as $img) : ?>
							<div class="item">
								<img src="./assets/images/album/<?=$room['room_id']?>/<?=$img['image']?>" alt="anh minh hoa" class="rounded-xl">
							</div>
						<?php endforeach ; ?>
					</div>
				</div>

				<div class="col-span-5 pl-10 mb-10">
					<p class="text-2xl font-bold">Thông tin chung</p>
					<div class="flex flex-col justify-between h-full">
						<ul class="mt-3">
							<li class="font-semibold mb-3 text-gray-500"><span class="text-lg text-blue-700">Địa chỉ: </span><?= $room['address'] ?></li>
							<li class="font-semibold mb-3 text-gray-500"><span class="text-lg text-blue-700">Thuộc: </span><?= $room['locaname'] ?> , Hà nội</li>
							<li class="font-semibold mb-3 text-gray-500"><span class="text-lg text-blue-700">Giá: </span><?= number_format($room['price']) ?>đ/tháng</li>
							<li class="font-semibold mb-3 text-gray-500"><span class="text-lg text-blue-700">Diện tích: </span> <?= $room['area'] ?>m2</li>
						</ul>

						<div class="pr-10">
							<p class="text-2xl font-bold mb-5">Đặt lịch xem phòng</p>
							<form action="" method="post">
								<input type="date" name="schedule" id="schedule" class="w-full border p-3 rounded-lg">
								<button name="setup">
									<span class="text-white">Đặt lịch hẹn</span>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="mt-12">
				<div class="grid grid-cols-12 gap-5">
					<div class="col-span-8 px-9">
						<p class="font-semibold text-xl uppercase text-purple-500 mb-1"><?= $room['room_name'] ?></p>
						<p class="text-gray-500 mb-2">
							<i class="fas fa-map-marker-alt"></i>
							<?= $room['locaname'] ?>, Hà Nội
						</p>
						<p>Ngày đăng: <?= $room['create_at'] ?> - Lượt xem: 213 </p>

						<div class="my-10">
							<p class="text-2xl font-bold mb-3">Giá dịch vụ</p>
							<div class="grid grid-cols-12 gap-x-10 gap-y-8">
								<div class="col-span-6 border-b">
									<div class="flex justify-between">
										<p>Giá điện (bao gồm điện dùng chung)</p>
										<p><?=$room['electric']?>đ/số</p>
									</div>
								</div>
								<div class="col-span-6 border-b">
									<div class="flex justify-between">
										<p>Giá vệ sinh</p>
										<p><?=$room['clean']?>₫/số</p>
									</div>
								</div>
								<div class="col-span-6 border-b">
									<div class="flex justify-between">
										<p>Giá nước</p>
										<p><?=$room['water']?>₫/số</p>
									</div>
								</div>
								<div class="col-span-6 border-b">
									<div class="flex justify-between">
										<p>Giá Internet</p>
										<p><?=$room['internet']?>₫/phòng</p>
									</div>
								</div>
								<div class="col-span-6 border-b">
									<div class="flex justify-between">
										<p>Giá gửi xe</p>
										<p><?=$room['parking']?>₫/người</p>
									</div>
								</div>
							</div>
						</div>

						<div class="my-10">
							<p class="text-2xl font-bold mb-3">Tổng quan căn phòng</p>
							<?= $room['summary'] ?>
						</div>

						<div class="my-10">
							<p class="text-2xl font-bold mb-4">Vị trí phòng</p>
							<iframe src="https://maps.google.com/maps?q=<?=$room['latitude']?>, <?=$room['longitude']?>&z=15&output=embed" width="100%" height="450" frameborder="0" style="border:0"></iframe>

						</div>
					</div>

					<div class="col-span-4 px-9">
						<div class="p-5 border rounded-lg">
							<div class="flex items-center border-b pb-3 mb-3">
								<img src="./assets/images/users/<?=$landlord['avatar']?>" class="w-20 h-20 rounded-full" alt="" class="rounded-full border">
								<div class="ml-3">
									<p class="uppercase font-semibold text-blue-400"><?= $landlord['user_name'] ?></p>
									<p>Chính chủ</p>
								</div>
							</div>
							<p class="mb-1">Tham gia từ: <?= $landlord['create_at'] ?></p>
							<p class="mb-1">Số tin đăng: <?= $landlord['sl'] ?></p>
							<p class="mb-1">Sđt: <?= $landlord['phone'] ?></p>
						</div>

						<div class="mt-5">
							<p class="shop_title">Thuê trọ tại Hà Nội</p>
							<ul class="shop_option">
								<li class="flex justify-between mb-2">
									<a href="#">Quận Hoàn Kiếm</a>
									<span class="text-blue-400">25</span>
								</li>
								<li class="flex justify-between mb-2">
									<a href="#">Quận Đống Đa</a>
									<span class="text-blue-400">13</span>
								</li>
								<li class="flex justify-between mb-2">
									<a href="#">Quận Ba Đình</a>
									<span class="text-blue-400">48</span>
								</li>
								<li class="flex justify-between mb-2">
									<a href="#">Quận Hai Bà Trưng</a>
									<span class="text-blue-400">21</span>
								</li>
								<li class="flex justify-between mb-2">
									<a href="#">Quận Hoàng Mai</a>
									<span class="text-blue-400">45</span>
								</li>
								<li class="flex justify-between mb-2">
									<a href="#">Quận Thanh Xuân</a>
									<span class="text-blue-400">65</span>
								</li>
								<li class="flex justify-between mb-2">
									<a href="#">Quận Long Biên</a>
									<span class="text-blue-400">35</span>
								</li>
								<li class="flex justify-between mb-2">
									<a href="#">Quận Nam Từ Liêm</a>
									<span class="text-blue-400">74</span>
								</li>
								<li class="flex justify-between mb-2">
									<a href="#">Quận Bắc Từ Liêmg</a>
									<span class="text-blue-400">85</span>
								</li>
								<li class="flex justify-between mb-2">
									<a href="#">Quận Tây Hồ</a>
									<span class="text-blue-400">15</span>
								</li>
								<li class="flex justify-between mb-2">
									<a href="#">Quận Cầu Giấy</a>
									<span class="text-blue-400">27</span>
								</li>
								<li class="flex justify-between mb-2">
									<a href="#">Quận Hà Đông</a>
									<span class="text-blue-400">38</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div>
				<div class="container mx-auto px-9">
					<p class="text-2xl font-bold mb-3">Phòng trọ lân cận</p>
					<div class="grid grid-cols-12 gap-8">
						<div class="col-span-3 rounded-xl bg-white">
							<img src="./assets/images/trending/trend1.jpg" alt="" class="rounded-t-lg">
							<div class="product_infor">
								<a href="#" title="phòng trọ - chung cư mini (ccmn) tại Số 12, ngõ 127 An Trạch, Đống Đa, Hà Nội.">phòng trọ - chung cư mini (ccmn) tại Số 12, ngõ 127 An Trạch, Đống Đa, Hà Nội.</a>
								<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
								<p><span class="font-semibold">Loại: </span>Chung cư mini</p>
								<p><span class="font-semibold">Diện tích: </span>30m2</p>
								<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
								<hr class="mt-2">
								<div class="product_infor-footer">
									<p>Ngày đăng: 24/3/2021</p>
								</div>
							</div>
						</div>

						<div class="col-span-3 rounded-xl bg-white">
							<img src="./assets/images/trending/trend1.jpg" alt="" class="rounded-t-lg">
							<div class="product_infor">
								<a href="#" title="phòng trọ - chung cư mini (ccmn) tại Số 12, ngõ 127 An Trạch, Đống Đa, Hà Nội.">phòng trọ - chung cư mini (ccmn) tại Số 12, ngõ 127 An Trạch, Đống Đa, Hà Nội.</a>
								<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
								<p><span class="font-semibold">Loại: </span>Chung cư mini</p>
								<p><span class="font-semibold">Diện tích: </span>30m2</p>
								<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
								<hr class="mt-2">
								<div class="product_infor-footer">
									<p>Ngày đăng: 24/3/2021</p>
								</div>
							</div>
						</div>

						<div class="col-span-3 rounded-xl bg-white">
							<img src="./assets/images/trending/trend1.jpg" alt="" class="rounded-t-lg">
							<div class="product_infor">
								<a href="#" title="phòng trọ - chung cư mini (ccmn) tại Số 12, ngõ 127 An Trạch, Đống Đa, Hà Nội.">phòng trọ - chung cư mini (ccmn) tại Số 12, ngõ 127 An Trạch, Đống Đa, Hà Nội.</a>
								<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
								<p><span class="font-semibold">Loại: </span>Chung cư mini</p>
								<p><span class="font-semibold">Diện tích: </span>30m2</p>
								<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
								<hr class="mt-2">
								<div class="product_infor-footer">
									<p>Ngày đăng: 24/3/2021</p>
								</div>
							</div>
						</div>

						<div class="col-span-3 rounded-xl bg-white">
							<img src="./assets/images/trending/trend1.jpg" alt="" class="rounded-t-lg">
							<div class="product_infor">
								<a href="#" title="phòng trọ - chung cư mini (ccmn) tại Số 12, ngõ 127 An Trạch, Đống Đa, Hà Nội.">phòng trọ - chung cư mini (ccmn) tại Số 12, ngõ 127 An Trạch, Đống Đa, Hà Nội.</a>
								<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
								<p><span class="font-semibold">Loại: </span>Chung cư mini</p>
								<p><span class="font-semibold">Diện tích: </span>30m2</p>
								<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
								<hr class="mt-2">
								<div class="product_infor-footer">
									<p>Ngày đăng: 24/3/2021</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include "./inc/footer.html" ?>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="./assets/owlcarousel/owl.carousel.min.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA66KwUrjxcFG5u0exynlJ45CrbrNe3hEc&libraries=places&callback=initialize"></script>

	<script>
		$('.owl-carousel').owlCarousel({
			dots: false,
			autoplayTimeout: 4000,
			autoplay: 'true',
			center: 'true',
			loop: true,
			items: 1
		})


		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; //January is 0 so need to add 1 to make it 1!
		var yyyy = today.getFullYear();
		if(dd<10){
		  dd='0'+dd
		} 
		if(mm<10){
		  mm='0'+mm
		} 

		today = yyyy+'-'+mm+'-'+dd;
		document.getElementById("schedule").setAttribute("min", today);
	</script>

</body>
</html>
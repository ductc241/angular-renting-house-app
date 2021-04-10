<?php
	session_start();
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
	</style>
</head>
<body>
	<?php include "./inc/header.php" ?>

	<div class="my-10">
		<div class="container mx-auto px-20">
			<div class="grid grid-cols-12">
				<div class="col-span-7">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<img src="./assets/images/home.jpg" alt="anh minh hoa" class="rounded-xl">
						</div>
						<div class="item">
							<img src="./assets/images/home.jpg" alt="anh minh hoa" class="rounded-xl">
						</div>
						<div class="item">
							<img src="./assets/images/home.jpg" alt="anh minh hoa" class="rounded-xl">
						</div>
						<div class="item">
							<img src="./assets/images/home.jpg" alt="anh minh hoa" class="rounded-xl">
						</div>
					</div>
				</div>

				<div class="col-span-5 pl-10 mb-10">
					<p class="text-2xl font-bold">Thông tin chung</p>
					<div class="flex flex-col justify-between h-full">
						<ul class="mt-3">
							<li class="font-semibold mb-3 text-gray-500"><span class="text-lg text-blue-700">Địa chỉ: </span>Số 31B, Ngách 189/43 Nguyễn Ngọc Vũ</li>
							<li class="font-semibold mb-3 text-gray-500"><span class="text-lg text-blue-700">Thuộc: </span>Cầu giấy, Hà nội</li>
							<li class="font-semibold mb-3 text-gray-500"><span class="text-lg text-blue-700">Giá: </span> 3,500,000đ/tháng</li>
							<li class="font-semibold mb-3 text-gray-500"><span class="text-lg text-blue-700">Diện tích: </span> 30m2</li>
						</ul>

						<div class="pr-10">
							<p class="text-2xl font-bold mb-5">Đặt lịch xem phòng</p>
							<form action="">
								<input type="date" name="" id="" class="w-full border p-3 rounded-lg">
								<button type="submit">
									<a href="registry.html">Đặt lịch hẹn</a>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="mt-12">
				<div class="grid grid-cols-12 gap-5">
					<div class="col-span-8 px-9">
						<p class="font-semibold text-xl uppercase text-purple-500 mb-1">Số 31B, Ngách 189/43 Nguyễn Ngọc Vũ</p>
						<p class="text-gray-500 mb-2">
							<i class="fas fa-map-marker-alt"></i>
							Trung Hoà, Cầu Giấy, Hà Nội
						</p>
						<p>Ngày đăng: 24/3/2021 - Lượt xem: 213 </p>

						<div class="my-10">
							<p class="text-2xl font-bold mb-3">Giá dịch vụ</p>
							<div class="grid grid-cols-12 gap-x-10 gap-y-8">
								<div class="col-span-6 border-b">
									<div class="flex justify-between">
										<p>Giá điện (bao gồm điện dùng chung)</p>
										<p>3,200₫/số</p>
									</div>
								</div>
								<div class="col-span-6 border-b">
									<div class="flex justify-between">
										<p>Giá vệ sinh</p>
										<p>30,00₫/số</p>
									</div>
								</div>
								<div class="col-span-6 border-b">
									<div class="flex justify-between">
										<p>Giá nước</p>
										<p>20,00₫/số</p>
									</div>
								</div>
								<div class="col-span-6 border-b">
									<div class="flex justify-between">
										<p>Giá thang máy</p>
										<p>50,00₫/người</p>
									</div>
								</div>
								<div class="col-span-6 border-b">
									<div class="flex justify-between">
										<p>Giá Internet</p>
										<p>50,00₫/phòng</p>
									</div>
								</div>
								<div class="col-span-6 border-b">
									<div class="flex justify-between">
										<p>Giá gửi xe</p>
										<p>100,000₫/người</p>
									</div>
								</div>
							</div>
						</div>

						<div class="my-10">
							<p class="text-2xl font-bold mb-3">Thông tin mô tả</p>
							<p class="mb-2">Cho thuê phòng trọ - chung cư mini tại Số 31B, ngách 189/43 Nguyễn Ngọc Vũ, Cầu Giấy, Hà Nội.</p>
							<p class="mb-2">Tòa nhà mã số CG011 thiết kế cao 7 tầng. Tầng 1 là khu để xe, từ tầng 2 - 7 được chia thành 22 phòng, trên tầng 7 là khu phơi đồ - giặt đồ chung miễn phí cho tòa nhà. Hàng lang lắp đặt thiết bị PCCC và camera an ninh mỗi tầng trong tòa nhà.</p>
						</div>


						<div class="my-10">
							<p class="text-2xl font-bold mb-3">Tổng quan căn phòng</p>
							<p class="mb-5">Các căn phòng được thiết kế sang trọng và thoáng mát gồm 4 cửa (1 cửa chính, 2 cửa sổ, 1 cửa ban công). Phòng ngủ thiết kế riêng biệt với phòng bếp và khu ban công, các phòng đều có views cửa rất rộng với hàng cây xanh phía trước.</p>

							<p class="mb-2">✶ Diện tích căn phòng: Phòng 1 ngủ từ 35m2 - 40m2.</p>
							<p class="mb-2">✶ Nội thất cơ bản gồm: Điều hòa, nóng lạnh, giường ngủ, tủ quần áo, rèm cửa, tủ - bàn bếp, chậu rửa, ban công.</p>
							<p class="mb-2">✶ Chi phí điện nước: Áp dụng tính giá nhà nước (tiêu chuẩn nhà nước).</p>
							<p class="mb-2">✶ An ninh tòa nhà: Camera theo dõi 24h; Khóa vân tay bảo mật.</p>
							<p class="mb-2">✶ Thủ tục - giấy tờ: Hợp đồng thuê nhà, hợp đồng đặt cọc, thủ tục đăng ký tạm trú tạm vắng,... Đội ngũ Bản Đôn sẽ hỗ trợ khách hàng hoàn thành tất cả.</p>
							<p class="mb-2">Phòng trọ phù hợp dành cho các bạn sinh viên, người đi làm và đặc biệt là hộ gia đình.</p>
						</div>

						<div class="my-10">
							<p class="text-2xl font-bold mb-4">Vị trí phòng</p>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.810613899905!2d105.76800507529944!3d21.04026250712611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454c7dce37431%3A0x7a3e01807c4a08f0!2zTmdoxKlhIHRyYW5nIE1haSBE4buLY2g!5e0!3m2!1svi!2s!4v1616689703841!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>

					<div class="col-span-4 px-9">
						<div class="p-5 border rounded-lg">
							<div class="flex items-center border-b pb-3 mb-3">
								<img src="./assets/images/users/user1.png" alt="" class="rounded-full border">
								<div class="ml-3">
									<p class="uppercase font-semibold text-blue-400">đõ văn triều</p>
									<p>Chính chủ</p>
								</div>
							</div>
							<p class="mb-1">Tham gia từ: 12/2020</p>
							<p class="mb-1">Số tin đăng: 1</p>
							<p class="mb-1">Sđt: 0328238186</p>
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

	<script>
		$('.owl-carousel').owlCarousel({
			dots: false,
			autoplayTimeout: 4000,
			autoplay: 'true',
			center: 'true',
			loop: true,
			items: 1
		})
	</script>

</body>
</html>
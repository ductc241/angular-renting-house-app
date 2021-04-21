<?php 
  	require "./admin/dao/user.php";
	session_start();

	if(isset($_GET['logout'])) {
    	session_destroy();
    	header('location:./index.php');
 	}

 	if(isset($_SESSION['user'])){
 		$user =  user_select_one($_SESSION['user']['user_id']);
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


	<!-- js -->
	<script src="./assets/js/app.js"></script>
</head>
<body>
	<?php include "./inc/header.php" ?>

	<div class="feature">
		<div class="container mx-auto relative z-50">
			<div class="flex justify-between px-32">
				<div class="feature_text">
					<p class="text-5xl uppercase font-bold text-white mb-7" style="line-height: 60px">Hỗ trợ tìm trọ tại hà nội</p>
					<p class="text-2xl font-semibold text-white mb-7">Nhanh chóng - An toàn - Uy tín</p>
					<p class="text-white font-semibold">Giúp bạn tiết kiện thời gian,chi phí đi lại, giá cả hợp lí và nhanh chóng có được phòng trọ như ý muốn. </p>
				</div>

				<div class="feature_option">
					<p class="text-2xl font-semibold text-gray-500">Tìm Kiếm Nhanh</p>
					<form action="#">				
						<!-- <input type="text" placeholder="Nhập từ khóa ...."> -->

						<select>
							<option value="">Vị trí</option>
						</select>

						<select>
							<option value="">Diện tích</option>
						</select>

						<select>
							<option value="">Giá tiền</option>
						</select>

						<input type="submit" value="Search">
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="latest_product py-16">
		<div class="container mx-auto">
			<div class="text-center relative mb-10">
				<span class="main_title">phòng <span class="text-red-500 font-bold">mới đăng</span></span>
			</div>

			<div class="grid grid-cols-12 gap-10">
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
							<p>View: 513</p>
						</div>
					</div>
				</div>

				<div class="col-span-3 rounded-xl bg-white">
					<img src="./assets/images/trending/trend2.jpg" alt="" class="rounded-t-lg">
					<div class="product_infor">
						<a href="#">cho thuê chung cư mini tại quan nhân, thanh xuân</a>
						<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
						<p><span class="font-semibold">Loại: </span>Nhà trọ</p>
						<p><span class="font-semibold">Diện tích: </span>30m2</p>
						<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
						<hr class="mt-2">
						<div class="product_infor-footer">
							<p>Ngày đăng: 24/3/2021</p>
							<p>View: 513</p>
						</div>
					</div>
				</div>

				<div class="col-span-3 rounded-xl bg-white">
					<img src="./assets/images/trending/trend1.jpg" alt="" class="rounded-t-lg">
					<div class="product_infor">
						<a href="#">cho thuê chung cư mini tại quan nhân, thanh xuân</a>
						<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
						<p><span class="font-semibold">Loại: </span>Chung cư mini</p>
						<p><span class="font-semibold">Diện tích: </span>30m2</p>
						<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
						<hr class="mt-2">
						<div class="product_infor-footer">
							<p>Ngày đăng: 24/3/2021</p>
							<p>View: 513</p>
						</div>
					</div>
				</div>

				<div class="col-span-3 rounded-xl bg-white">
					<img src="./assets/images/trending/trend2.jpg" alt="" class="rounded-t-lg">
					<div class="product_infor">
						<a href="#">cho thuê chung cư mini tại quan nhân, thanh xuân</a>
						<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
						<p><span class="font-semibold">Loại: </span>Nhà trọ</p>
						<p><span class="font-semibold">Diện tích: </span>30m2</p>
						<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
						<hr class="mt-2">
						<div class="product_infor-footer">
							<p>Ngày đăng: 24/3/2021</p>
							<p>View: 513</p>
						</div>
					</div>
				</div>

				<div class="col-span-3 rounded-xl bg-white">
					<img src="./assets/images/trending/trend2.jpg" alt="" class="rounded-t-lg">
					<div class="product_infor">
						<a href="#">cho thuê chung cư mini tại quan nhân, thanh xuân</a>
						<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
						<p><span class="font-semibold">Loại: </span>Nhà trọ</p>
						<p><span class="font-semibold">Diện tích: </span>30m2</p>
						<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
						<hr class="mt-2">
						<div class="product_infor-footer">
							<p>Ngày đăng: 24/3/2021</p>
							<p>View: 513</p>
						</div>
					</div>
				</div>

				<div class="col-span-3 rounded-xl bg-white">
					<img src="./assets/images/trending/trend1.jpg" alt="" class="rounded-t-lg">
					<div class="product_infor">
						<a href="#">cho thuê chung cư mini tại quan nhân, thanh xuân</a>
						<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
						<p><span class="font-semibold">Loại: </span>Nhà trọ</p>
						<p><span class="font-semibold">Diện tích: </span>30m2</p>
						<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
						<hr class="mt-2">
						<div class="product_infor-footer">
							<p>Ngày đăng: 24/3/2021</p>
							<p>View: 513</p>
						</div>
					</div>
				</div>

				<div class="col-span-3 rounded-xl bg-white">
					<img src="./assets/images/trending/trend2.jpg" alt="" class="rounded-t-lg">
					<div class="product_infor">
						<a href="#">cho thuê chung cư mini tại quan nhân, thanh xuân</a>
						<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
						<p><span class="font-semibold">Loại: </span>Nhà trọ</p>
						<p><span class="font-semibold">Diện tích: </span>30m2</p>
						<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
						<hr class="mt-2">
						<div class="product_infor-footer">
							<p>Ngày đăng: 24/3/2021</p>
							<p>View: 513</p>
						</div>
					</div>
				</div>

				<div class="col-span-3 rounded-xl bg-white">
					<img src="./assets/images/trending/trend1.jpg" alt="" class="rounded-t-lg">
					<div class="product_infor">
						<a href="#">cho thuê chung cư mini tại quan nhân, thanh xuân</a>
						<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
						<p><span class="font-semibold">Loại: </span>Nhà trọ</p>
						<p><span class="font-semibold">Diện tích: </span>30m2</p>
						<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
						<hr class="mt-2">
						<div class="product_infor-footer">
							<p>Ngày đăng: 24/3/2021</p>
							<p>View: 513</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="news py-16">
		<div class="container mx-auto">
			<div class="text-center relative mb-10">
				<span class="main_title">tin mới
					<span class="text-red-500 font-bold">cập nhật</span>
				</span>
			</div>

			<div class="grid grid-cols-12 gap-16">
				<div class="col-span-6">
					<div class="news_box">
						<div class="news_image">
							<img src="./assets/images/news/new1.jpg" alt="">
						</div>
						<div class="news_content">
							<p class="text-lg font-semibold capitalize">Kinh nghiệm tìm trọ quận nam từ liêm</p>
							<p class="text-sm text-gray-500">Ngày đăng: 24/3/2021</p>

							<p class="news_header">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum fugiat amet, officiis, nemo est quaerat, quis fugit natus voluptas vel rem voluptate officia ea quia, obcaecati libero porro vero qui?</p>

							<a class="text-sm font-bold text-red-500">Đọc thêm...</a>
						</div>
					</div>
				</div>

				<div class="col-span-6">
					<div class="news_box">
						<div class="news_image">
							<img src="./assets/images/news/new2.jpg" alt="">
						</div>
						<div class="news_content">
							<p class="text-lg font-semibold capitalize">Kinh nghiệm tìm trọ quận nam từ liêm</p>
							<p class="text-sm text-gray-500">Ngày đăng: 24/3/2021</p>

							<p class="news_header">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum fugiat amet, officiis, nemo est quaerat, quis fugit natus voluptas vel rem voluptate officia ea quia, obcaecati libero porro vero qui?</p>

							<a class="text-sm font-bold text-red-500">Đọc thêm...</a>
						</div>
					</div>
				</div>

				<div class="col-span-6">
					<div class="news_box">
						<div class="news_image">
							<img src="./assets/images/news/new3.jpg" alt="">
						</div>
						<div class="news_content">
							<p class="text-lg font-semibold capitalize">Kinh nghiệm tìm trọ quận nam từ liêm</p>
							<p class="text-sm text-gray-500">Ngày đăng: 24/3/2021</p>

							<p class="news_header">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum fugiat amet, officiis, nemo est quaerat, quis fugit natus voluptas vel rem voluptate officia ea quia, obcaecati libero porro vero qui?</p>

							<a class="text-sm font-bold text-red-500">Đọc thêm...</a>
						</div>
					</div>
				</div>

				<div class="col-span-6">
					<div class="news_box">
						<div class="news_image">
							<img src="./assets/images/news/new4.jpg" alt="">
						</div>
						<div class="news_content">
							<p class="text-lg font-semibold capitalize">Kinh nghiệm tìm trọ quận nam từ liêm</p>
							<p class="text-sm text-gray-500">Ngày đăng: 24/3/2021</p>

							<p class="news_header">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum fugiat amet, officiis, nemo est quaerat, quis fugit natus voluptas vel rem voluptate officia ea quia, obcaecati libero porro vero qui?</p>

							<a class="text-sm font-bold text-red-500">Đọc thêm...</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="trending_product py-16">
		<div class="container mx-auto">
			<div class="text-center relative mb-10">
				<span class="main_title">phòng trọ  <span class="text-red-500 font-bold">đang sales</span></span>
			</div>

			<div class="grid grid-cols-12 gap-10">
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
							<p>View: 513</p>
						</div>
					</div>
				</div>

				<div class="col-span-3 rounded-xl bg-white">
					<img src="./assets/images/trending/trend2.jpg" alt="" class="rounded-t-lg">
					<div class="product_infor">
						<a href="#" title="phòng trọ - chung cư mini (ccmn) tại Số 12, ngõ 127 An Trạch, Đống Đa, Hà Nội.">phòng trọ - chung cư mini (ccmn) tại Số 12, ngõ 127 An Trạch, Đống Đa, Hà Nội.</a>
						<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
						<p><span class="font-semibold">Loại: </span>Chung cư mini</p>
						<p><span class="font-semibold">Diện tích: </span>30m2</p>
						<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
						<hr class="mt-2">
						<div class="product_infor-footer">
							<p>Ngày đăng: 24/3/2021</p>
							<p>View: 513</p>
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
							<p>View: 513</p>
						</div>
					</div>
				</div>

				<div class="col-span-3 rounded-xl bg-white">
					<img src="./assets/images/trending/trend2.jpg" alt="" class="rounded-t-lg">
					<div class="product_infor">
						<a href="#" title="phòng trọ - chung cư mini (ccmn) tại Số 12, ngõ 127 An Trạch, Đống Đa, Hà Nội.">phòng trọ - chung cư mini (ccmn) tại Số 12, ngõ 127 An Trạch, Đống Đa, Hà Nội.</a>
						<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
						<p><span class="font-semibold">Loại: </span>Chung cư mini</p>
						<p><span class="font-semibold">Diện tích: </span>30m2</p>
						<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
						<hr class="mt-2">
						<div class="product_infor-footer">
							<p>Ngày đăng: 24/3/2021</p>
							<p>View: 513</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="review py-20">
		<div class="container mx-auto px-20">
			<div class="text-center relative mb-10">
				<span class="main_title">khách hàng
					<span class="text-red-500 font-bold">đánh giá</span>
				</span>
			</div>

			<div class="owl-carousel owl-theme">
				<div class="item">
					<div  class="item_user">
						<img src="./assets/images/users/user1.png" alt="" class="w-full rounded-full">
					</div>
					<div class="review_content">
						<p>Phòng trọ rất sạch sẽ thoáng mát, có sẵn điều hòa, nóng lạnh, giường tủ còn mới. Ở đây giờ giấc thoải mái hợp với mình vì hay đi làm về muộn, mình khá ưng ý khi thuê được căn phòng này.</p>
						<p class="mt-10 text-lg font-semibold">Anh Hoàng</p>
					</div>
				</div>

				<div class="item">
					<div class="item_user">
						<img src="./assets/images/users/user2.png" alt="" class="w-full rounded-full">
					</div>
					<div class="review_content">
						<p>Chúng tôi ở đây được 7 tháng, phòng trọ ở đây rất oke, điện nước giá dân, chỗ để xe ở tầng 1 có cửa và camera giám sát an toàn, thấy an ninh tốt - đảm bảo khi ra vào cửa bằng vân tay.</p>
						<p class="mt-10 text-lg font-semibold">Anh Dũng & Chị Ngọc</p>
					</div>
				</div>

				<div class="item">
					<div>
						<img src="./assets/images/users/user1.png" alt="" class="w-full rounded-full">
					</div>
					<div class="review_content">
						<p>Phòng trọ rất sạch sẽ thoáng mát, có sẵn điều hòa, nóng lạnh, giường tủ còn mới. Ở đây giờ giấc thoải mái hợp với mình vì hay đi làm về muộn, mình khá ưng ý khi thuê được căn phòng này.</p>
						<p class="mt-10 text-lg font-semibold">Anh Hoàng</p>
					</div>
				</div>

				<div class="item">
					<div  class="item_user">
						<img src="./assets/images/users/user2.png" alt="" class="w-full rounded-full">
					</div>
					<div class="review_content">
						<p>Xưa mình ở phòng cũ trả tiền điện cao tới 4 nghìn/ số, mùa hè dùng điều hòa, tủ lạnh là mỗi tháng đóng thêm 300-500 nghìn tiền điện. Giờ ở phòng của Bản Đôn, tiền điện đóng theo quy định nhà nước nên tiết kiệm được khá nhiều và cũng cảm thấy thoải mái hơn vì mình dùng trả đúng giá nhà nước.</p>
						<p class="mt-10 text-lg font-semibold">Anh Hoàng</p>
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
			autoplayTimeout: 3000,
			autoplay: 'true',
			center: 'true',
			loop: true,
			items: 1
		})
	</script>
</body>
</html>
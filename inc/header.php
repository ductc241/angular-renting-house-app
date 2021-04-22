<header class="header">
	<div class="header_top">
		<div class="container mx-auto">
			<div class="flex justify-between items-center">
				<img src="./assets/images/logo.png" alt="">
				<div class="header_page">
					<ul class="tool_links">
						<li><a href="index.php">Trang chủ</a></li>
						<li><a href="shop.php">Thuê nhà trọ</a></li>
						<li><a href="">Tin tức</a></li>
						<li><a href="#">Liên hệ</a></li>
					</ul>
				</div>
				<div class="header_user">
					<ul class="flex items-center relative">
						<?php if(isset($_SESSION['user'])):?>
							<img src="./assets/images/users/<?= $user['avatar'] ?>" class="w-11 h-11 rounded-full mr-2" alt="" >
							
							<li class="font-semibold">
								<a href=""><?= $_SESSION['user']['user_name'] ?></a>
							</li>
						<?php else:?>
							<li><a href="login.php">Đăng nhập</a></li>
						<?php endif; ?>
						<div class="user_form">
							<li>
								<i class="fas fa-plus" style="margin-right: 7px;"></i>
								<a href="./userbackend/create.php">Đăng tin</a>
							</li>
							<li>
								<i class="fas fa-bell" style="margin-right: 7px;"></i>
								<a href="./userbackend/notification.php">Thông báo</a>
							</li>
							<li>
								<i class="fas fa-user" style="margin-right: 7px;"></i>
								<a href="./userbackend/profile.php">Trang cá nhân</a>
							</li>
							<li>
								<i class="fas fa-sign-out-alt" style="margin-right: 7px;"></i>
								<a href="./index.php?logout">Đăng xuất</a>
							</li>
						</div>
					</ul>			
				</div>
			</div>
		</div>
	</div>
</header>
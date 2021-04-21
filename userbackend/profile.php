<?php
    session_start();

    require "../admin/dao/user.php";
    $user = user_select_one($_SESSION['user']['user_id']);

    if(isset($_POST['user_update'])) {
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $birthday = $_POST['birthday'];
        $name_avatar = $_FILES['avatar']['name'];
        $tmp_avatar = $_FILES['avatar']['tmp_name'];

        if($name_avatar != ""){
            $name = time() . $name_avatar;
            move_uploaded_file($tmp_avatar, '../assets/images/users/' . $name);
        }

        user_update($name, $email, $address, $phone, $birthday, $_SESSION['user']['user_id']);

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trọ tốt</title>

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
        <div class="bg-white p-4 rounded-xl flex justify-between items-center">
            <div class="flex">
                <i class="fas fa-home"></i>
                <p class="mx-3">></p>
                <p class="text-blue-700">Quản lí người dùng</p>
                <p class="mx-3">></p>
                <p>Thông tin cá nhân</p>
            </div>
            <div class="flex items-center">
                <p class="font-bold"><?= $user['user_name'] ?></p>
                <img src="../assets/images/users/<?= $user['avatar'] ?>" alt="" class=" w-10 h-10 rounded-full ml-5">
            </div>
        </div>

        <div class="bg-white p-7 mt-5 rounded-xl">
            <div class="flex">
                <i class="far fa-user"></i>
                <p class="mx-3 text-blue-700">Thông tin cá nhân</p>
            </div>
            <form action="" method="POST" enctype="multipart/form-data" class="">
                <div>
                    <p class="font-bold mt-5 mb-3">Ảnh Đại Diện</p>
                    <img src="../assets/images/users/<?= $user['avatar'] ?>" alt="" class="w-24 h-24 rounded-full">
                    <input type="file" name="avatar" class="" value="">
                    <p class="font-bold mt-5 mb-3">Email</p>
                    <input type="text" name="email" class="border border-gray-300 rounded-md  p-1 w-64" value="<?= $user['email'] ?>" required>
                    <p class="font-bold mt-5 mb-3">Ngày sinh</p>
                    <input type="date" name="birthday" class="border border-gray-300 rounded-md  p-1 w-64" value="<?= $user['birthday'] ?>" required>
                </div>
                <div>
                    <p class="font-bold mt-5 mb-3">Địa chỉ</p>
                    <input type="text" name="address" class="border border-gray-300 rounded-md p-1  w-64" value="<?= $user['address'] ?>" required><br>
                    <p class="font-bold mt-5 mb-3">Số điện thoại</p>
                    <input type="number" name="phone" class="border border-gray-300 rounded-md p-1  w-64" value="<?= $user['phone'] ?>" required><br>
                </div>
                <input type="submit" value="Lưu" name="user_update" class="bg-blue-500 text-white font-bold p-2 rounded-md mt-5">
            </form>
        </div>
    </div>
</body>

</html>
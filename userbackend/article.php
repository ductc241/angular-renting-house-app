<?php
    require "../admin/dao/room.php";
    require "../admin/dao/location.php";
    require "../admin/dao/category.php";

    session_start();

    if(!isset($_SESSION['user'])){
        header("location: ../login.php");
    }

    $location = loca_select_all();
    $category = cate_select_all();

    $room = room_select_id($_SESSION['user']['user_id']);
    // var_dump($room);
    // return;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng tin</title>

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

    <script src="../assets/ckeditor/ckeditor.js"></script>

</head>

<body>
    <?php include "inc/sidebar.html" ?>
    <div class="main_content p-5">
        <div class="bg-white p-5 rounded-lg">
            <span>Quản lý dịch vụ</span>
            <span class="mx-3">></span>
            <span class="">Phòng đã đăng</span>
        </div>

        <div class="p-5 bg-white rounded-lg mt-5 overflow-hidden">
            <h1 class="text-xl font-semibold mb-5">Tất cả các phòng</h1>

            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Address
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Show
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Start
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            End
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Delete</span>
                                        </th>
                                    </tr>
                                </thead>

                               
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php foreach($room as $result): ?>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="">
                                                        <div class="text-md font-medium text-gray-900">
                                                            <a href="../detail.php?id=<?=$result['room_id']?>" class="text-blue-500" ><?= $result['room_name'] ?></a>
                                                         </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900"><?=$result['address']?>, <?=$result['locaname']?>, Hà Nội</div>
                                                <!-- <div class="text-sm text-gray-500">Optimization</div> -->
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">                                                
                                                <?php if($result['status'] == 1) : ?>
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                                        Còn phòng
                                                    </span>
                                                <?php else : ?>
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-500 text-white">
                                                        Đã hết phòng
                                                    </span>
                                                <?php endif; ?>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">                                                
                                                <?php if($result['visible'] == 1) : ?>
                                                    <span class="px-2 text-md leading-5 font-semibold rounded-full text-blue-500">
                                                        <i class="fas fa-eye"></i>
                                                    </span>
                                                <?php else : ?>
                                                    <span class="px-2 text-md leading-5 font-semibold rounded-full text-blue-500">
                                                        <i class="fas fa-eye-slash"></i>
                                                    </span>
                                                <?php endif; ?>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900"><?= $result['day_start'] ?></div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900"><?= $result['day_end'] ?></div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="edit.php?id=<?=$result['room_id']?>" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace( 'editor' );

        var nav_item = document.querySelectorAll('.menu_link')[1];
        nav_item.setAttribute('class', 'bg-active')
    </script>
</body>
</html>
<?php
    require "../admin/dao/room.php";
    require "../admin/dao/location.php";
    require "../admin/dao/category.php";

    session_start();

    $location = loca_select_all();
    $category = cate_select_all();


    if (isset($_POST['submit'])) {
        room_insert();
    }
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

    <style>
        #map-canvas {
            height: 73%;
            width: 100%;
        }
    </style>    

</head>

<body>
    <?php include "inc/sidebar.html" ?>
    <div class="main_content p-5">
        <div class="bg-white p-5 rounded-lg">
            <span>Quản lý dịch vụ</span>
            <span class="mx-3">></span>
            <span class="">Đăng tin</span>
        </div>

        <div class="p-5 bg-white rounded-lg mt-5">
            <h1 class="text-xl font-semibold mb-5">Vị trí</h1>
            <div class="grid grid-cols-12 gap-10">
                <div class="col-span-6">
                    <div class="form-group">
                        <label>Tên Phòng</label>
                        <input type="text" name="room_name" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label>Quận</label>
                        <select name="loca_id" id="">
                            <option value="">Chọn quận</option>
                            <?php foreach($location  as  $loca): ?>
                                <option value="<?= $loca['loca_id'] ?>"><?= $loca['loca_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tọa độ</label>
                        <input type="number" name="latitude" class="latitude" placeholder="Vĩ độ">
                        <input type="number" name="longitude" class="longitude mt-5" placeholder="Kinh độ">
                    </div>
                    <div class="form-group">
                        <label>Địa Chỉ Cụ thể</label>
                        <input type="text" name="address" placeholder="Nhập tên đường, số nhà, ..." autocomplete="off" required>
                    </div>
                </div>
                <div class="col-span-6">
                    <label for="">Tìm kiếm: 
                        <input id="map-search" class="controls" type="text" placeholder="Search Box" size="104">
                    </label>
                    <br>
                    <div id="map-canvas"></div>
                </div>
            </div>
            
            <form method="post" enctype="multipart/form-data">              
                <div class="form-group">
                    <label>Loại Phòng</label>
                    <select name="cate_id" id="">
                        <option value="">Chọn loại phòng</option>
                        <?php foreach($category  as  $cate): ?>
                            <option value="<?= $cate['cate_id'] ?>"><?= $cate['cate_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Giá Phòng</label>
                    <input type="number" name="price" required>
                </div>

                <div class="form-group">
                    <label>Diện Tích</label>
                    <input type="number" name="area" required></input>
                </div>
                <div class="form-group">
                    <label>Mô Tả Chi Tiết</label>
                    <textarea name="editor" id="editor" rows="10" cols="80" name="summary"></textarea>
                </div>
                 <div class="form-group">
                    <label>Giá dịch vụ</label>
                    <div class="grid grid-cols-12 gap-10">
                        <div class="col-span-6">
                            <input type="number" name="electric" placeholder="Giá điện" min=0>
                            <input type="number" name="water" placeholder="Giá nước" class="mt-4" min=0>
                            <input type="number" name="internet" placeholder="Giá internet" class="mt-4" min=0>
                        </div>
                        <div class="col-span-6">
                            <input type="number" name="clean" placeholder="Giá dọn vệ sinh" min=0>
                            <input type="number" name="parking" placeholder="Giá gửi xe" class="mt-4" min=0>
                       </div>
                    </div>
                </div>
                <div class="form-group">
                   <div class="flex justify-between">
                        <div class="w-2/5">
                            <label>Ngày Đăng</label>
                            <input type="date" step=".01" name="day_start">
                         </div>
                        <div class="w-2/5">
                            <label>Ngày Kết Thúc</label>
                            <input type="date" step=".01" name="day_end">
                        </div>
                   </div>
                </div>
                <div class="form-group">
                    <label>Ảnh Phòng</label>
                    <input type="file" name="image[]" multiple />
                </div>

                <input type="submit" class="btn btn-primary" value="Đăng tin" name="submit"></input>
            </form> 
        </div>
    </div>

    <script src="../assets/js/map.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA66KwUrjxcFG5u0exynlJ45CrbrNe3hEc&libraries=places&callback=initialize"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
</body>
</html>
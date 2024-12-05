<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
            border-radius: 15px;
            padding: 20px;
        }

        .sidebar a {
            color: black;
            padding: 10px 15px;
            text-decoration: none;
            display: block;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background-color: #69b9f9;
            color: white;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            background-color: #f8f9fa;
            padding: 10px 15px;
            border-bottom: 1px solid #ddd;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        /* Nút ban đầu */
        .btn {
            background: #edf6fe;
            border: 1px solid #ccc;
            color: #333;
            /* Màu chữ mặc định */
            padding: 7px 15px;
            cursor: pointer;
        }

        /* Nút khi hover */
        .btn:hover {
            background-color: #69b9f9;
            /* Màu nền khi hover */
            border-color: #58a7e4;
            /* Màu viền khi hover */
            color: white;
            /* Màu chữ khi hover */
        }
    </style>
</head>

<body>
    <div class="dashboard">
        <div class="sidebar" style="background: #edf6fe; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <h1 class="text-center text-black">Dashboard</h1>
            <a href="../dashboard.php">Tổng quan</a>
            <a href="../news/index.php">Quản lý bài viết</a>
            <a href="#">Cài đặt</a>
            <a href="../Home/index.php">Đăng xuất</a>
        </div>
    </div>

    <div class="content">
        <!-- Header -->
        <div class="header " style="background: #edf6fe; padding: 15px; border-radius: 5px;">
            <h2><strong>Dashboard</strong></h2>
            <br>
            <div class="d-flex justify-content-between align-items-center" style="width: 100%;">
                <h5 class="text-dark">Dashboard / Quản lý bài viết</h5>
                <a href="./add.php"><button class="btn">Thêm</button></a>
            </div>
        </div>

        <!-- Table for Posts -->
        <div class="mt-4">


            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Hình ảnh</th>
                        <th>Ngày đăng</th>
                        <th>Thể loại</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>AI</td>
                        <td>Giới thiệu về công nghệ AI</td>
                        <td>Ảnh AI</td>
                        <td>Ngày hôm nay</td>
                        <td>Thể loại hải cạc thích chem chép</td>
                        <td>
                            <div>
                                <a href="./edit.php"><button class="btn">Sửa</button></a>
                                <button class="btn">xóa</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bigdata</td>
                        <td>Giới thiệu về công nghệ Bigdata</td>
                        <td>Ảnh Bigdata</td>
                        <td>Ngày hôm qua</td>
                        <td>Thể loại hải cạc thích chem chép</td>
                        <td>
                            <div>
                                <button class="btn">Sửa</button>
                                <button class="btn">xóa</button>
                            </div>
                        </td>
                    </tr>
                    <!-- Các bài viết khác -->
                </tbody>
            </table>
        </div>
    </div>
    <script src="../../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
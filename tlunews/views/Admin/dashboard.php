<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Liên kết đến Bootstrap CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tùy chỉnh giao diện -->
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
            <a href="index.php?controller=Admin&action=index">Tổng quan</a>
            <a href="index.php?controller=News&action=newsManagement">Quản lý bài viết</a>
            <a href="#">Cài đặt</a>
            <a href="index.php?controller=Admin&action=logout">Đăng xuất</a>
        </div>
    </div>

    <div class="content">
        <div class="header " style="background: #edf6fe; padding: 15px; border-radius: 5px;">
            <h2><strong>DASHBOARD</strong></h2>
            <br>
            <div class="d-flex justify-content-between align-items-center" style="width: 100%;">
                <h5 class="text-dark">Dashboard | Tổng quan</h5>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div class="row mt-4">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tổng số bài viết</h5>
                        <p class="card-text">350</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tổng số người dùng</h5>
                        <p class="card-text">1,500</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Đang chờ duyệt</h5>
                        <p class="card-text">12</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
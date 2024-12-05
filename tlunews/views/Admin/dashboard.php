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
    }

    .sidebar a {
        color: white;
        padding: 10px 15px;
        text-decoration: none;
        display: block;
    }

    .sidebar a:hover {
        background-color: #575d63;
    }

    .content {
        margin-left: 250px;
        padding: 20px;
    }

    .header {
        background-color: #f8f9fa;
        padding: 10px 15px;
        border-bottom: 1px solid #ddd;
    }
    </style>
</head>

<body>

<body>
    <div class="dashboard">
        <div class="sidebar" style="background: #edf6fe; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <h1 class="text-center text-black">Dashboard</h1>
            <a href="#">Tổng quan</a>
            <a href="../Admin/news/index.php">Quản lý bài viết</a>
            <a href="#">Cài đặt</a>
            <a href="../Home/index.php">Đăng xuất</a>
        </div>
    </div>

    <div class="content">
        <div class="header d-flex justify-content-between align-items-center">
            <div>
                <span>Admin</span> | <a style="text-decoration:none; color:cadetblue;" href="../Home/home.php">Thoát</a>
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



    <!-- Content -->


    <!-- Liên kết đến Bootstrap JS và Popper.js -->
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
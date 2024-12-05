<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin DashBoard</title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
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
        cursor: pointer;
        color: white;
    }

    /* Nút khi hover */
    .btn:hover {
        color: black;
    }
    </style>
</head>

<body>
    <div class="dashboard">
        <div class="sidebar" style="background: #edf6fe; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <h1 class="text-center text-black">Dashboard</h1>
            <a href="index.php?controller=Admin&action=index">Tổng quan</a>
            <a href="index.php?controller=News&action=index">Quản lý bài viết</a>
            <a href="#">Cài đặt</a>
            <a href="index.php?controller=Admin&action=logout">Đăng xuất</a>
        </div>
    </div>

    <div class="content">
        <!-- Header -->
        <div class="header " style="background: #edf6fe; padding: 15px; border-radius: 5px;">
            <h2><strong>DASHBOARD</strong></h2>
            <br>
            <div class="d-flex justify-content-between align-items-center" style="width: 100%;">
                <h5 class="text-dark">Dashboard | Quản lý bài viết</h5>
                <a href="index.php?controller=News&action=createNews"><button
                        class="btn btn-primary mx-2">Thêm</button></a>
            </div>
        </div>

        <!-- Table for Posts -->
        <div class="mt-4">


            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="py-3 text-center">STT</th>
                        <th class="py-3 text-center">Tiêu đề</th>
                        <th class="py-3 text-center">Nội dung</th>
                        <th class="py-3 text-center">Hình ảnh</th>
                        <th class="py-3 text-center">Ngày đăng</th>
                        <th class="py-3 text-center">Thể loại</th>
                        <th class="py-3 text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($news)): ?>
                    <tr>
                        <td colspan="7" class="py-3 text-center">Không có tin tức nào</td>
                    </tr>
                    <?php else: ?>
                    <?php
                    static $count = 1;
                    foreach ($news as $id => $new) : ?>
                    <tr>
                        <td class="py-3 text-center"><?php echo $count++ ?></td>
                        <td class="py-3 text-center"><?php echo htmlspecialchars($new['title'])?></td>
                        <td class="py-3 text-center"><?php echo htmlspecialchars($new['content'])?></td>
                        <td class="py-3 text-center">
                            <img src="<?php echo htmlspecialchars($new['image']) ?>" class="img-fluid"
                                style="max-height:120px; max-width: 150px;">
                        </td>
                        <td><?php echo htmlspecialchars($new['created_at']) ?></td>
                        <td><?php echo htmlspecialchars($new['name']) ?></td>
                        <td class="py-3 text-center">
                            <a href="index.php?controller=News&action=updateNews&id=<?=htmlspecialchars($new['id'])?>"
                                class="btn btn-warning m-1 w-75">Sửa</a>
                            <a href="index.php?controller=News&action=deleteNews&id=<?=htmlspecialchars($new['id'])?>"
                                class="btn btn-danger m-1 w-75">Xoá</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
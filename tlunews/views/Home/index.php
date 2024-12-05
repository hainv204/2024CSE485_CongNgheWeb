<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>
<style>
body {
    background: #eeeeee;
}

.form-inline {
    display: inline-block;
}

.navbar-header.col {
    padding: 0 !important;
}

.navbar {
    background: #fff;
    padding-left: 16px;
    padding-right: 16px;
    border-bottom: 1px solid #d6d6d6;
    box-shadow: 0 0 4px rgba(0, 0, 0, .1);
}

.nav-link img {
    border-radius: 50%;
    width: 36px;
    height: 36px;
    margin: -8px 0;
    float: left;
    margin-right: 10px;
}

.navbar .navbar-brand {
    color: #555;
    padding-left: 0;
    padding-right: 50px;
    font-family: 'Merienda One', sans-serif;
}

.navbar .navbar-brand i {
    font-size: 20px;
    margin-right: 5px;
}

.search-box {
    position: relative;
}

.search-box input {
    box-shadow: none;
    padding-right: 35px;
    border-radius: 3px !important;
}

.search-box .input-group-addon {
    min-width: 35px;
    border: none;
    background: transparent;
    position: absolute;
    right: 0;
    z-index: 9;
    padding: 7px;
    height: 100%;
}

.search-box i {
    color: #a0a5b1;
    font-size: 19px;
}

.navbar .nav-item i {
    font-size: 18px;
}

.navbar .dropdown-item i {
    font-size: 16px;
    min-width: 22px;
}

.navbar .nav-item.open>a {
    background: none !important;
}

.navbar .dropdown-menu {
    border-radius: 1px;
    border-color: #e5e5e5;
    box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
}

.navbar .dropdown-menu a {
    color: #777;
    padding: 8px 20px;
    line-height: normal;
}

.navbar .dropdown-menu a:hover,
.navbar .dropdown-menu a:active {
    color: #333;
}

.navbar .dropdown-item .material-icons {
    font-size: 21px;
    line-height: 16px;
    vertical-align: middle;
    margin-top: -2px;
}

.navbar .badge {
    color: #fff;
    background: #f44336;
    font-size: 11px;
    border-radius: 20px;
    position: absolute;
    min-width: 10px;
    padding: 4px 6px 0;
    min-height: 18px;
    top: 5px;
}

.navbar a.notifications,
.navbar a.messages {
    position: relative;
    margin-right: 10px;
}

.navbar a.messages {
    margin-right: 20px;
}

.navbar a.notifications .badge {
    margin-left: -8px;
}

.navbar a.messages .badge {
    margin-left: -4px;
}

.navbar .active a,
.navbar .active a:hover,
.navbar .active a:focus {
    background: transparent !important;
}

@media (min-width: 1200px) {
    .form-inline .input-group {
        width: 300px;
        margin-left: 30px;
    }
}

@media (max-width: 1199px) {
    .form-inline {
        display: block;
        margin-bottom: 10px;
    }

    .input-group {
        width: 100%;
    }
}
</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">TLUNews</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Admin/login.php">Đăng nhập</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>

        <body>

            <!-- Container chính -->
            <div class="container mt-5">
                <div class="row">
                    <!-- Bài viết 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Bài viết 1">
                            <div class="card-body">
                                <h5 class="card-title">Tiêu đề bài viết 1</h5>
                                <p class="card-text">Mô tả ngắn gọn về bài viết 1.</p>
                                <button class="btn btn-outline-secondary">Xem chi tiết</button>
                            </div>
                        </div>
                    </div>
                    <!-- Bài viết 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Bài viết 2">
                            <div class="card-body">
                                <h5 class="card-title">Tiêu đề bài viết 2</h5>
                                <p class="card-text">Mô tả ngắn gọn về bài viết 2.</p>
                                <button class="btn btn-outline-secondary">Xem chi tiết</button>
                            </div>
                        </div>
                    </div>
                    <!-- Bài viết 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Bài viết 3">
                            <div class="card-body">
                                <h5 class="card-title">Tiêu đề bài viết 3</h5>
                                <p class="card-text">Mô tả ngắn gọn về bài viết 3.</p>
                                <button class="btn btn-outline-secondary">Xem chi tiết</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <footer>
        <footer class="bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Liên hệ</h5>
                        <ul class="list-unstyled">
                            <li>Email: contact@example.com</li>
                            <li>Điện thoại: 123-456-7890</li>
                            <li>Địa chỉ: 123 Main St, Thành phố ABC</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>Liên kết</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Giới thiệu</a></li>
                            <li><a href="#" class="text-white">Chính sách bảo mật</a></li>
                            <li><a href="#" class="text-white">Điều khoản sử dụng</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>Mạng xã hội</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Facebook</a></li>
                            <li><a href="#" class="text-white">Twitter</a></li>
                            <li><a href="#" class="text-white">Instagram</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center mt-4">
                        <p>&copy; 2024 Trang báo ABC. Tất cả các quyền được bảo lưu.</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        =======
        <title>Danh sách tin tức</title>
        </head>

        <body>
            <h1>Danh sách tin tức</h1>
            <form method="GET" action="index.php">
                <input type="hidden" name="controller" value="home">
                <input type="hidden" name="action" value="search">
                <input type="text" name="keyword" placeholder="Tìm kiếm tin tức...">
                <button type="submit">Tìm kiếm</button>
            </form>

            <ul>
                <?php foreach ($newsList as $news): ?>
                <li>
                    <a href="index.php?controller=news&action=detail&id=<?= $news['id'] ?>">
                        <?= htmlspecialchars($news['title']) ?>
                    </a>
                    <p><?= htmlspecialchars($news['category_name']) ?> | <?= htmlspecialchars($news['created_at']) ?>
                    </p>
                </li>
                <?php endforeach; ?>
            </ul>
            >>>>>>> origin/HoangThuPhuong
        </body>

</html>
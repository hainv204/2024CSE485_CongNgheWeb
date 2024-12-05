<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        /* Màu mặc định cho liên kết trong navbar */
        .navbar-nav .nav-link {
            color: #000;
            /* Màu mặc định */
        }

        .navbar-nav .nav-link:hover {
            color: white;
            /* Màu khi hover */
            background-color: #69b9f9;
            /* background-color: #70bcfc; */
            /* Đảm bảo không có nền */
            border-radius: 5px;
        }

        /* Tùy chỉnh màu cho nút tìm kiếm */
        .btn.btn-outline-secondary:hover:hover {
            background-color: #69b9f9;
            /* Màu nền khi hover */
            color: white;
            /* Màu chữ khi hover */
            border: none;
        }
    </style>


    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>

<body>
    <header style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <nav class="navbar navbar-expand-lg " style="background: #edf6fe">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><strong>
                        <h2>TLUNews</h2>
                    </strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link px-2" aria-current="page" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="../Admin/login.php">Đăng nhập</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search" method="GET" action="index.php">
                        <select class="form-select me-2" name="category_id">
                            <option value="">Chọn thể loại</option>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?= $category['id'] ?>"
                                    <?php if (isset($_GET['category_id']) && $_GET['category_id'] == $category['id']) echo 'selected'; ?>>
                                    <?= htmlspecialchars($category['name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <button class="btn btn-outline-secondary" type="submit">Tìm kiếm</button>
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
                                <button class="btn btn-outline-secondary" >Xem chi tiết</button>
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
                                <button class="btn btn-outline-secondary" >Xem chi tiết</button>
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
                                <button class="btn btn-outline-secondary" >Xem chi tiết</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <footer class="text-black py-4 " style="background: #edf6fe; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Liên hệ</h5>
                    <ul class="list-unstyled">
                        <li>Email: nhom7@gmail.com</li>
                        <li>Điện thoại: 0123-456-789</li>
                        <li>Địa chỉ: 175 Tây Sơn, Đống Đa, Hà Nội</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Liên kết</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-black">Giới thiệu</a></li>
                        <li><a href="#" class="text-black">Chính sách bảo mật</a></li>
                        <li><a href="#" class="text-black">Điều khoản sử dụng</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Mạng xã hội</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-black">Facebook</a></li>
                        <li><a href="#" class="text-black">Twitter</a></li>
                        <li><a href="#" class="text-black">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col text-center mt-4">
                    <p>&copy; 2024 TLU NEWS.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
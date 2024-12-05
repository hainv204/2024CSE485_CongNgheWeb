<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết bài viết</title>
    <!-- Liên kết đến Bootstrap CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
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
        .btn.btn-outline-secondary:hover {
            background-color: #69b9f9;
            /* Màu nền khi hover */
            color: white;
            /* Màu chữ khi hover */
            border: none;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <header style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <nav class="navbar navbar-expand-lg " style="background: #edf6fe; border-top-left-radius: 10px; border-top-right-radius: 10px;">
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
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Tìm kiếm bài viết" aria-label="Search">
                        <button class="btn btn-outline-secondary" type="submit">Tìm kiếm</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- Container bài viết chi tiết -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!-- Tiêu đề bài viết -->
                    <h1 class="mb-4">Tiêu đề bài viết chi tiết</h1>

                    <!-- Ảnh bài viết -->
                    <img src="https://via.placeholder.com/800x400" class="img-fluid mb-4" alt="Bài viết chi tiết">

                    <!-- Nội dung bài viết -->
                    <p><strong>Thể loại:</strong> Thể loại trinh thám</p>
                    <p><strong>Ngày đăng:</strong> 01/12/2024</p>
                    <p class="lead">Đây là phần nội dung bài viết chi tiết. Bạn có thể mô tả chi tiết hơn về chủ đề, sự kiện, hoặc câu chuyện mà bài viết muốn truyền tải. Các đoạn văn này có thể dài và phong phú với hình ảnh, video, hoặc các yếu tố khác hỗ trợ nội dung.</p>

                </div>
            </div>
        </div>
    </main>

    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
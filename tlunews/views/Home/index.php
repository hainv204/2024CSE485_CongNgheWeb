<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tin tức</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        header {
            background-color: #343a40;
        }

        .navbar-brand {
            color: #ffffff !important;
        }

        .navbar-nav .nav-link {
            color: #ffffff !important;
        }

        .navbar-nav .nav-link:hover {
            color: #dcdcdc !important;
        }

        main {
            padding: 40px 0;
        }

        .text_uppercase {
            text-transform: uppercase;
        }

        .text-success {
            color: #28a745 !important;
        }

        .card {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            border-radius: 8px 8px 0 0;
            object-fit: cover;
            height: 200px;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 1rem;
            color: #6c757d;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 8px 16px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #343a40;
            color: #ffffff;
        }

        footer p {
            margin: 0;
        }

        .form-select,
        .btn-outline-success {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">TLUNews</a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Admin/login.php">Đăng nhập</a>
                        </li>
                    </ul>
                    <!-- Tìm kiếm theo thể loại -->
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
                        <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-5">
            <h1 class="text-center text-uppercase text-primary mb-5">Danh sách tin tức</h1>
            <div class="row">
                <?php if (count($newsList) > 0): ?>
                    <?php foreach ($newsList as $news): ?>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="<?= htmlspecialchars($news['image']) ?>" class="card-img-top" alt="Hình ảnh tin tức">
                                <div class="card-body">
                                    <h5 class="card-title"><?= htmlspecialchars($news['title']) ?></h5>
                                    <p class="card-text"><?= htmlspecialchars(substr($news['content'], 0, 100)) ?>...</p>
                                    <a href="index.php?controller=home&action=detail&id=<?= $news['id'] ?>" class="btn btn-primary">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12">
                        <p class="text-center">Không có tin tức nào trong thể loại này.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main>
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <p class="text-center">&copy; 2024 TLUNews. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>
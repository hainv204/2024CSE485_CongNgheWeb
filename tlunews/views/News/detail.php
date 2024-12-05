<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết tin tức</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
    }

    header {
        background-color: #ffffff;
        border-bottom: 1px solid #e0e0e0;
    }

    .navbar-brand {
        color: #007bff !important;
        font-weight: bold;
    }

    .navbar-nav .nav-link {
        color: #495057 !important;
    }

    .navbar-nav .nav-link:hover {
        color: #007bff !important;
    }

    .container {
        margin-top: 40px;
    }

    .card {
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #007bff;
        color: #ffffff;
        font-size: 1.5rem;
        text-align: center;
        padding: 10px 0;
    }

    .card-body {
        padding: 20px;
    }

    .card-body h3 {
        font-size: 2rem;
        color: #343a40;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .card-body p {
        font-size: 1.1rem;
        color: #6c757d;
    }

    .card-body img {
        width: 100%;
        max-height: 400px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .card-body img.no-image {
        width: 100%;
        max-height: 400px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 20px;
        background: #e0e0e0;
        display: block;
    }

    footer {
        background-color: #343a40;
        color: #ffffff;
        padding: 20px 0;
    }

    footer p {
        margin: 0;
        text-align: center;
    }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">TLUNews</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Admin/login.php">Đăng nhập</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Chi tiết tin tức
                </div>
                <div class="card-body">
                    <h3><?= htmlspecialchars($news['title']) ?></h3>
                    <p><strong>Chuyên mục:</strong> <?= htmlspecialchars($news['category_name']) ?></p>
                    <p><strong>Ngày đăng:</strong> <?= htmlspecialchars($news['created_at']) ?></p>

                    <?php if (!empty($news['image'])): ?>
                    <img src="<?= htmlspecialchars($news['image']) ?>" alt="<?= htmlspecialchars($news['title']) ?>">
                    <?php else: ?>
                    <img class="no-image" alt="Không có hình ảnh">
                    <?php endif; ?>

                    <p><?= nl2br(htmlspecialchars($news['content'])) ?></p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 TLUNews. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
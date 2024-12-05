<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tin tức</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
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
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-5">
            <h1>Danh sách tin tức</h1>
            <div class="row">
                <?php foreach ($newsList as $news): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="../../assets/images/<?= htmlspecialchars($news['image']) ?>"
                                class="card-img-top"
                                alt="Hình ảnh tin tức">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($news['title']) ?></h5>
                                <p class="card-text"><?= htmlspecialchars(substr($news['content'], 0, 100)) ?>...</p>
                                <a href="index.php?controller=news&action=detail&id=<?= $news['id'] ?>" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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
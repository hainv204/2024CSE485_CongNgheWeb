<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết tin tức</title>
</head>

<body>
    <h1><?= htmlspecialchars($news['title']) ?></h1>
    <p><strong>Chuyên mục:</strong> <?= htmlspecialchars($news['category_name']) ?></p>
    <p><strong>Ngày đăng:</strong> <?= htmlspecialchars($news['created_at']) ?></p>
    <?php if (!empty($news['image'])): ?>
        <img src="<?= htmlspecialchars($news['image']) ?>" alt="<?= htmlspecialchars($news['title']) ?>">
    <?php endif; ?>
    <p><?= nl2br(htmlspecialchars($news['content'])) ?></p>
</body>

</html>
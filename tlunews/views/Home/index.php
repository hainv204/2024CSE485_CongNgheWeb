<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <p><?= htmlspecialchars($news['category_name']) ?> | <?= htmlspecialchars($news['created_at']) ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
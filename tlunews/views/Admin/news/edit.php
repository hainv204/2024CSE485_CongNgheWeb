<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Bài Viết</title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .container {
        margin-top: 50px;
    }
    </style>
</head>

<body>

    <div class="container">
        <h2><strong>Sửa Bài Viết</strong></h2>
        <?php //print_r($news);?>
        <!-- Form Sửa -->
        <form action="index.php?controller=News&action=handleUpdateNews" method="POST" enctype="multipart/form-data">
            <!-- Tiêu đề bài viết -->
            <div class="mb-3">
                <label for="title" class="form-label">Tiêu đề</label>
                <input type="text" class="form-control" id="title" name="title"
                    value="<?= htmlspecialchars($news['title']) ?>" required>
            </div>

            <!-- Nội dung bài viết -->
            <div class="mb-3">
                <label for="content" class="form-label">Nội dung</label>
                <textarea class="form-control" id="content" name="content" rows="4"
                    required><?= htmlspecialchars($news['content']) ?> </textarea>
            </div>

            <!-- Hình ảnh bài viết -->
            <div class="mb-3">
                <label for="image" class="form-label">Hình ảnh</label>
                <img src="<?= htmlspecialchars($news['image']) ?>" style="max-width: 200px">
                <input class="my-2" type="file" name="image">
            </div>

            <!-- Ngày đăng -->
            <div class="mb-3">
                <label for="date" class="form-label">Ngày đăng</label>
                <input type="text" class="form-control" id="date" name="date"
                    value="<?= htmlspecialchars($news['created_at']) ?>" required>
            </div>

            <!-- Thể loại bài viết -->
            <div class="mb-3">
                <label for="category" class="form-label">Thể loại</label>
                <select name="categoryID" id="categoryID" class="form-control">
                    <option value="1" <?= $news['category_id'] == 1 ? 'selected' : '' ?>>Thể thao</option>
                    <option value="2" <?= $news['category_id'] == 2 ? 'selected' : '' ?>>Công nghệ</option>
                    <option value="3" <?= $news['category_id'] == 3 ? 'selected' : '' ?>>Sức khoẻ</option>
                    <option value="4" <?= $news['category_id'] == 4 ? 'selected' : '' ?>>Giải trí</option>
                    <option value="5" <?= $news['category_id'] == 5 ? 'selected' : '' ?>>Thời sự</option>
                </select>
            </div>
            <!-- Index hidden -->
            <input type="hidden" name="id" value="<?=htmlspecialchars($news['id'])?>">
            <!-- Nút Sửa -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-default" name="btnUpdateNews" value="Cancel">Quay lại</button>
                <button type="submit" class="btn btn-success" name="btnUpdateNews" value="Update">Cập nhật</button>
            </div>
        </form>
    </div>

</body>

</html>
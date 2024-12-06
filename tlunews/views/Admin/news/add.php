<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Bài Viết</title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .container {
        margin-top: 50px;
    }
    </style>
</head>

<body>

    <div class="container">
        <h2><strong>Thêm Bài Viết</strong></h2>
        <!-- Form Thêm -->
        <form action="index.php?controller=News&action=handleCreateNews" method="POST" enctype="multipart/form-data">
            <!-- Tiêu đề bài viết -->
            <div class="mb-3">
                <label for="title" class="form-label">Tiêu đề</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <!-- Nội dung bài viết -->
            <div class="mb-3">
                <label for="content" class="form-label">Nội dung</label>
                <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
            </div>

            <!-- Hình ảnh bài viết -->
            <div class="mb-3">
                <label for="image" class="form-label">Hình ảnh</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <!-- Ngày đăng -->
            <div class="mb-3">
                <label for="date" class="form-label">Ngày đăng</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <!-- Thể loại bài viết -->
            <div class="mb-3">
                <label for="category" class="form-label">Thể loại</label>
                <select name="categoryID" id="categoryID" class="form-control">
                    <option value="1">Thể thao</option>
                    <option value="2">Giáo dục</option>
                    <option value="3">Du lịch</option>
                    <option value="4">Kinh doanh</option>
                    <option value="5">Công nghệ</option>
                </select>
            </div>

            <!-- Nút Thêm -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" name="btnAddNews" value="Add">Thêm</button>
            </div>
        </form>
    </div>

</body>

</html>
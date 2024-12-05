<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Bài Viết</title>
    <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2><strong>Sửa Bài Viết</strong></h2>
        <!-- Form Sửa -->
        <form action="#" method="POST">
            <!-- Tiêu đề bài viết -->
            <div class="mb-3">
                <label for="title" class="form-label">Tiêu đề</label>
                <input type="text" class="form-control" id="title" name="title" value="Tiêu đề cũ" required>
            </div>

            <!-- Nội dung bài viết -->
            <div class="mb-3">
                <label for="content" class="form-label">Nội dung</label>
                <textarea class="form-control" id="content" name="content" rows="4" required>Đây là nội dung cũ của bài viết.</textarea>
            </div>

            <!-- Hình ảnh bài viết -->
            <div class="mb-3">
                <label for="image" class="form-label">Hình ảnh</label>
                <input type="file" class="form-control" id="image" name="image">
                <small class="text-muted">Nếu không thay đổi hình ảnh, hãy bỏ qua trường này.</small>
            </div>

            <!-- Ngày đăng -->
            <div class="mb-3">
                <label for="date" class="form-label">Ngày đăng</label>
                <input type="date" class="form-control" id="date" name="date" value="2024-12-01" required>
            </div>

            <!-- Thể loại bài viết -->
            <div class="mb-3">
                <label for="category" class="form-label">Thể loại</label>
                <input type="text" class="form-control" id="title" name="title" value="Tiêu đề cũ" required>
            </div>

            <!-- Nút Sửa -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Cập nhật</button>
            </div>
        </form>
    </div>

    <script src="../../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>

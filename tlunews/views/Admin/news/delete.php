<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xoá bài viết</title>
    <!-- Link Bootstrap 5 -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .form-container {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 30px;
        width: 100%;
        max-width: 500px;
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .header h4 {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .footer {
        display: flex;
        justify-content: space-between;
    }

    .footer button {
        width: 48%;
    }

    .btn-default {
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        color: #6c757d;
    }

    .btn-success {
        background-color: #28a745;
        border: 1px solid #28a745;
        color: white;
    }

    .btn-default:hover {
        background-color: #e2e6ea;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    .body {
        margin-bottom: 20px;
    }
    </style>
</head>

<body>
    <div class="form-container">
        <form action="index.php?controller=News&action=handleDeleteNews&id=<?= htmlspecialchars($_GET['id']) ?>"
            method="post">
            <div class="header">
                <h4 class="title">Bạn chắc chắn muốn xoá tin tức?</h4>
            </div>
            <div class="body">
                <!-- Index hidden -->
                <input type="hidden" name="id" value="<?= htmlspecialchars($_GET['id']) ?>">
            </div>
            <div class="footer my-2">
                <button type="submit" class="btn btn-default" name="btnDelNews" value="Cancel">Quay lại</button>
                <button type="submit" class="btn btn-danger" name="btnDelNews" value="Delete">Xoá</button>
            </div>
        </form>
    </div>
</body>

</html>
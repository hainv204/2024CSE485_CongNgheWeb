<?php
require_once __DIR__ . '/../models/News.php';

class NewsController
{
    public function detail()
    {
        // Lấy ID từ URL
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

        // Kiểm tra ID hợp lệ
        if ($id <= 0) {
            die('ID không hợp lệ');
        }

        // Lấy dữ liệu từ model
        $newsModel = new News();
        $news = $newsModel->getNewsById($id);

        if (!$news) {
            die('Không tìm thấy bài viết');
        }

        // Gửi dữ liệu sang view
        require_once __DIR__ . '/../views/news/detail.php';
    }
}

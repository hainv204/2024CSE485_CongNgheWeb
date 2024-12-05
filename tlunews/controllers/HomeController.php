<?php
require_once __DIR__ . '/../models/News.php';

class HomeController
{
    public function index()
    {
        $newsModel = new News(); // Gọi model News
        $newsList = $newsModel->getAllNews(); // Lấy tất cả bản ghi từ bảng news
        require_once __DIR__ . '/../views/home/index.php'; // Truyền dữ liệu vào view
    }
}

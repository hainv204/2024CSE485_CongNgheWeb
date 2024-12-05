<?php
require_once __DIR__ . '/../models/News.php';
require_once __DIR__ . '/../models/Category.php';

class HomeController
{
    public function index()
    {
        // Lấy category_id từ GET request (nếu có)
        $category_id = isset($_GET['category_id']) ? intval($_GET['category_id']) : 0;

        // Lấy danh sách tin tức. Nếu có category_id thì lọc theo thể loại
        $newsModel = new News();
        if ($category_id > 0) {
            // Nếu có category_id, gọi phương thức getNewsByCategory
            $newsList = $newsModel->getNewsByCategory($category_id);
        } else {
            // Nếu không có category_id, lấy tất cả tin tức
            $newsList = $newsModel->getAllNews();
        }

        // Lấy danh sách thể loại
        $categoryModel = new Category();
        $categories = $categoryModel->getAllCategories();

        // Truyền dữ liệu vào view
        require_once __DIR__ . '/../views/home/index.php';
    }

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

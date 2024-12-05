<?php
require_once __DIR__ . '/../models/News.php';


class NewsController
{
    public function detail()
    {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            echo "Tin tức không tồn tại.";
            return;
        }

        $newsModel = new News();
        $news = $newsModel->getNewsById($id);
        if (!$news) {
            echo "Tin tức không tồn tại.";
            return;
        }

        require_once 'views/news/detail.php';
    }
}

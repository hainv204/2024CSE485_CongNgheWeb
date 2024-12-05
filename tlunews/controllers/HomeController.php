<?php
require_once __DIR__ . '/../models/News.php';

class HomeController
{
    public function index()
    {
        $newsModel = new News();
        $newsList = $newsModel->getAllNews();
        require_once 'views/home/index.php';
    }

    public function search()
    {
        $keyword = $_GET['keyword'] ?? '';
        $newsModel = new News();
        $newsList = $newsModel->searchNews($keyword);
        require_once 'views/home/index.php';
    }
}

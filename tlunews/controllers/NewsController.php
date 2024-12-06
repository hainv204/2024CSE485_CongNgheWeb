<?php
require_once __DIR__ . '/../models/News.php';
define('BASE_URL', '/2024CSE485_CongNgheWeb/tlunews');
class NewsController
{
    public function newsManagement()
    {
        $news = News::getAllNewsAdmin();
        include __DIR__ . '/../views/Admin/news/index.php';
    }
    //Create
    public function createNews()
    {
        include __DIR__ . '/../views/Admin/news/add.php';
    }
    public function handleCreateNews()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['btnAddNews']) && $_POST['btnAddNews'] === 'Add') {
                if (
                    isset($_POST['title'], $_POST['content'], $_POST['date'], $_POST['categoryID'], $_FILES['image'])
                    && !empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['date']) && !empty($_POST['categoryID'])
                ) {
                    $target_dir = "./assets/images/"; //Folder server, where to save image store
                    $target_file = $target_dir . basename($_FILES["image"]["name"]); // Path to file
                    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file); //upload file
                    // Path web display image
                    $image_url = BASE_URL . '/assets/images/' . basename($_FILES["image"]["name"]);
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $date = $_POST['date'];
                    $categoryID = $_POST['categoryID'];
                    $result = News::addNews($title, $content, $image_url, $date, $categoryID);
                    print_r($result);
                    if ($result)
                        header('Location: index.php?controller=News&action=newsManagement');
                }
            }
        }
    }
    //Update
    public function updateNews()
    {
        $id = $_GET['id'];
        $news = News::getByID($id);
        include __DIR__ . '/../views/Admin/news/edit.php';
    }
    public function handleUpdateNews()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['btnUpdateNews']) && $_POST['btnUpdateNews'] === 'Update') {
                if (
                    isset($_POST['title'], $_POST['content'], $_POST['date'], $_POST['categoryID'], $_FILES['image'])
                    && !empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['date']) && !empty($_POST['categoryID'])
                ) {
                    $id = $_POST['id'];
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $date = $_POST['date'];
                    $categoryID = $_POST['categoryID'];
                    $image_url = null;
                    if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
                        $target_dir = "./assets/images/"; //Folder server, where to save image store
                        $target_file = $target_dir . basename($_FILES["image"]["name"]); // Path to file
                        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file); //upload file
                        // Path web display image
                        $image_url = BASE_URL . '/assets/images/' . basename($_FILES["image"]["name"]);
                    } else {
                        $news = News::getByID($id);
                        $image_url = $news['image'];
                    }
                    $result = News::updateNews($title, $content, $image_url, $date, $categoryID, $id);
                    // print_r($result);
                    if ($result)
                        header('Location: index.php?controller=News&action=newsManagement');
                }
            } else header('Location: index.php?controller=News&action=newsManagement');
        }
    }
    //Delete
    public function deleteNews()
    {
        include __DIR__ . '/../views/Admin/news/delete.php';
    }
    public function handleDeleteNews()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['btnDelNews']) && $_POST['btnDelNews'] === 'Delete') {
                $id = $_POST['id'];
                $result = News::deleteNews($id);
                if ($result)
                    header('Location: index.php?controller=News&action=newsManagement');
            } else header('Location: index.php?controller=News&action=newsManagement');
        }
    }
}

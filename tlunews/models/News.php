<?php
require_once __DIR__ . '/../configs/database.php';

class News
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getAllNews()
    {
        $sql = "SELECT news.*, categories.name AS category_name 
                FROM news 
                LEFT JOIN categories ON news.category_id = categories.id
                ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNewsById($id)
    {
        $sql = "SELECT news.*, categories.name AS category_name 
            FROM news 
            LEFT JOIN categories ON news.category_id = categories.id 
            WHERE news.id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getNewsByCategory($category_id)
    {
        $sql = "SELECT news.*, categories.name AS category_name 
            FROM news 
            LEFT JOIN categories ON news.category_id = categories.id 
            WHERE news.category_id = :category_id
            ORDER BY news.created_at DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }




    //Create
    public static function addNews($title,$content,$image,$created_at,$category_id){
        $database = new Database();
        $conn = $database->getConnection();
        //Check category_id
        $checkCategory = $conn->prepare('select count(*) from categories where id = :category_id');
        $checkCategory->bindParam(':category_id', $category_id,PDO::PARAM_INT);
        $checkCategory->execute();
        if($checkCategory->fetchcolumn() == 0)//category_id not exist
            return false;
        $stmt = $conn->prepare('insert into news(title,content,image,created_at,category_id) values(:title,:content,:image,:created_at,:category_id)');
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':created_at', $created_at);
        $stmt->bindParam(':category_id', $category_id,PDO::PARAM_INT);
        if($stmt->execute())
            return true;
        return false;
    }
    //Read
    public static function getAllNewsAdmin(){
        $database = new Database();
        $conn = $database->getConnection();
        $stmt = $conn->query('select news.*,name from news,categories where news.category_id = categories.id');
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // print_r($news);
        return $news;
    }
    //Update
    public static function updateNews($title,$content,$image,$created_at,$category_id,$id){
        $database = new Database();
        $conn = $database->getConnection();
        //Check category_id
        $checkCategory = $conn->prepare('select count(*) from categories where id = :category_id');
        $checkCategory->bindParam(':category_id', $category_id,PDO::PARAM_INT);
        $checkCategory->execute();
        if($checkCategory->fetchcolumn() == 0)//category_id not exist
            return false; 
        $stmt = $conn->prepare('update news set title = :title, content = :content, image = :image, created_at = :created_at,category_id = :category_id where id = :id');
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':created_at', $created_at);
        $stmt->bindParam(':category_id', $category_id,PDO::PARAM_INT);
        $stmt->bindParam(':id', $id,PDO::PARAM_INT);
        if($stmt->execute())
            return true;
        return false;

    }
    //Delete
    public static function deleteNews($id){
        $database = new Database();
        $conn = $database->getConnection();
        $stmt = $conn->prepare('delete from news where id = :id');
        $stmt->bindParam(':id', $id,PDO::PARAM_INT);
        if($stmt->execute())
            return true;
        return false;
    }
    //Get by ID
    public static function getByID($id){
        $database = new Database();
        $conn = $database->getConnection();
        $stmt = $conn->prepare('select news.*,categories.id from news,categories where news.category_id = categories.id and news.id = :id');
        $stmt->bindParam(':id', $id,PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return[
            'id'=> $id,
            'title'=> $result['title'],
            'content'=> $result['content'],
            'image'=> $result['image'],
            'created_at'=> $result['created_at'],
            'category_id'=> $result['category_id']
        ];
    }
}
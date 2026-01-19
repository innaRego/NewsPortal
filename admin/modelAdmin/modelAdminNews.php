<?php
class modelAdminNews {
    

    public static function getNewsList() {
        $query = "SELECT news.*, category.name, users.username from news
                  JOIN category ON news.category_id = category.id
                  JOIN users ON news.user_id = users.id
                  ORDER BY `news`.id DESC";

        $db = new Database();
        // echo $query;
        // die;
        $arr = $db->getAll($query);
        return $arr;
    }


    // Add News
    public static function getNewsAdd() {
        $test = false;

        if (isset($_POST['save'])) {
            if (isset($_POST['title']) && isset($_POST['text']) && isset($_POST['idCategory'])) {

                $title   = $_POST['title'];
                $text    = $_POST['text'];
                $idCategory = (int)$_POST['idCategory'];
                // По желанию: обработка загрузки изображения
                // $image = ...;

                $sql = "INSERT INTO `news` (`id`, `title`, `text`, `picture`, `category_id`, `user_id`) 
                        VALUES (NULL, '$title', '$text', NULL, '$idCategory', '1')";

                $db = new Database();
                $item = $db->executeRun($sql);

                if ($item === true) {
                    $test = true;
                }
            }
        }

        return $test;
    }
}
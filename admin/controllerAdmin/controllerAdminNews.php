<?php
class controllerAdminNews {

    // list News
    public static function NewsList() {
        $arr = modelAdminNews::getNewsList();
        // var_dump($arr);
        // die;

        include_once('viewAdmin/newsList.php');
    }

    // add News form
    public static function newsAddForm() {
        $arr = modelAdminCategory::getCategoryList();
        include_once('viewAdmin/newsAddForm.php');
    }

    // add News result / processing
    public static function newsAddResult() {
        $test = modelAdminNews::getNewsAdd();
        include_once('viewAdmin/newsAddForm.php');
    }
}
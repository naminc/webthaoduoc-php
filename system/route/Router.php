<?php
// Lớp điều hướng url
class Router {
    public $url;
    // Hàm xuất view url
    function __construct()
    {
        $arr = $this->UrlProcess();
        if(isset($arr)){
            $url = implode("/",$arr);
            if(file_exists("./system/views/pages/".$url.".php") ){
                require_once "./system/views/pages/".$url.'.php';
            }else{
                require_once './system/views/layouts/404.html'; // trang không tồn tại
                exit;
            }
        }else {
            require_once "./system/views/pages/home.php"; // nếu không có path mặc định sẽ trỏ vào home
        } 

    }
    // Hàm get url
    function UrlProcess(){
        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}
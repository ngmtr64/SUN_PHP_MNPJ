<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
require_once "controllers/ArticleController.php";
require_once "controllers/UserController.php";
$mod=isset($_GET['mod'])?$_GET['mod']:'article';
$act=isset($_GET['act'])?$_GET['act']:'index';
if (isset($_GET['mod'])){
    $mod = $_GET['mod'];
}
if (isset($_GET['act'])){
    $act = $_GET['act'];
}   
$class_name = ucfirst($mod) . "Controller";
$path = __DIR__ . "/controllers/". $class_name . ".php";
if (!file_exists($path)){
    echo "File $path khong ton tai";
    exit();
}
require_once($path);
$controller_obj = new $class_name();
$controller_obj -> $act();
?>
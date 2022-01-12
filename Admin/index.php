<?php
session_start();
$mod = "home";
$act = "index";
if(isset($_GET['mod'])){
  $mod = $_GET['mod'];
}

if(isset($_GET['act'])){
  $act = $_GET['act'];
}

//Cả phần này thay cho require_once bên trên
$class_name = ucfirst($mod) . "Controller";
$path = __DIR__ . "/Controllers/" . $class_name . ".php";
if(!file_exists($path)){
  //Dieu kien khong co file
  echo "File $path khong ton tai";
  exit();
}
require_once($path);

 //Cả phần này thay cho phần tạo đối tượng
  $controller_obj = new $class_name;
 $controller_obj -> $act();
?>

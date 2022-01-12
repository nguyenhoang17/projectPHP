<?php
require_once('Controllers/AdminController.php');
class HomeController extends AdminController
{
  public function index(){
    require('Views/Home/index.php');
  }
}
?>

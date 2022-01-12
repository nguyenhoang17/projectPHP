<?php
require('Models/Category.php');
require_once("Controllers/BaseController.php");
  class CategoryController extends BaseController
  {
    public function index(){
      $category = new Category;
      $categories = $category -> getList();
      $this-> view('Category/list.php', ['categories'=> $categories]);
    }
  }
?>

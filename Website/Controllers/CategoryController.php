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

    //xu ly tim kiem
      public function handleSearch(){
        $keyword = $_POST;
        $keySearch = $_POST['keysearch'];
        $category = new Category();
        $categories = $category -> searchCategory($keySearch);
        // var_dump($posts);
        // die();
        $this -> view('Category/searchcategory.php', ['categories'=> $categories,'keyword'=> $keyword]);
      }
  }
?>

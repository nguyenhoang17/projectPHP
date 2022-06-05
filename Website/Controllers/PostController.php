<?php
require_once('Models/Category.php');
require('Models/Post.php');
require_once("Controllers/BaseController.php");
  class PostController extends BaseController
  {
      public function index(){
        $post = new Post;
        $posts = $post -> getListCategoryId();

        $this-> view('Post/list.php', ['posts'=> $posts]);
      }
      //lấy post theo category
      public function postByCategory(){
        $id = (isset($_GET['category_id'])?$_GET['category_id']:0);
        $category_id = (isset($_GET['category_id'])?$_GET['category_id']:0);
        $post = new Post();
        $posts = $post -> findPostByCategory($category_id);
        // var_dump($posts);
        // die();
        $category = new Category;
        $categories = $category -> getCategoryById($id);
        $this-> view('Post/listbycategory.php', ['posts'=> $posts, 'categories' => $categories]);
      }
      //chi tiết
      public function postDetail(){
        $id= (isset($_GET['id'])?$_GET['id']:0);
        $post = new Post();
        $posts = $post -> getSelectPost($id);
        $viewPost = new Post();
        $viewPosts = $viewPost-> viewPost($id);

        $this -> view('Post/postdetail.php',['posts'=> $posts]);
      }
      public function like(){
        $id= (isset($_GET['id'])?$_GET['id']:0);

        $likepost = new Post();
        $likeposts = $likepost -> likePost($id);
        $post = new Post();
        $posts = $post -> getSelectPost($id);
        // $this->redirect('Post/postdetail.php');

        $this -> view('Post/postdetail.php',['posts'=> $posts]);
      }

    //xu ly tim kiem
      public function handleSearch(){
        $keyword = $_POST;
        $keySearch = $_POST['keysearch'];
        $post = new Post();
        $posts = $post -> searchPost($keySearch);
        $category = new Category();
        $categories = $category-> getList();
        // var_dump($posts);
        // die();
        $this -> view('Home/searchpost.php', ['posts' => $posts,'categories'=> $categories,'keyword'=> $keyword]);
      }
  }
?>

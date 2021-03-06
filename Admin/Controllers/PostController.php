<?php
require('Models/Post.php');
// require('Models/Category.php');
require_once("Controllers/AdminController.php");

  class PostController extends AdminController
  {
    public function index(){
      $post = new Post();
      $posts = $post-> getList();
      $category = new Category();
      $categories = $category-> getList();
      require('Views/Posts/post.php');

      $this->view('Posts/post.php', ['posts' => $posts,'categories' => $categories
      ]);
    }

    public function create(){
      $category = new Category();
      $categories = $category-> getList();

      $this -> view("Posts/create.php", ['categories'=> $categories]);
    }
    //luu tru du lieu hnguoi dung tao ra
    public function store(){
        $data = $_POST;

        $data_insert = [
          'title' => $data['title'],
          'description' => $data['description'],
          'category_id' => $data['category_id'],
          'content' => $data['content'],
          'created_at' => $data['created_at'],
          'like_post' => $data['like_post'],
          'view_post' => $data['view_post']
        ];

        $target_dir = 'images/';
		    $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
		    if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
		        $arr = array(
		        	'thumbnail'=> $_FILES["thumbnail"]["name"]
		        );
		        $data_insert = array_merge($data_insert,$arr);
		    } else {
		        echo "Lỗi upload ảnh.";
		    }

        $post = new Post();
        $status = $post -> create($data_insert);
        $_SESSION['addPost']="";
        $this -> redirect("index.php?mod=post&act=index");
    }

    public function handleEdit()
    {
        $id =(isset($_GET['id'])?$_GET['id']:0);
        $post = new Post();
        $posts = $post-> edit($id);

        $category = new Category();
        $categories = $category-> getList();

        $this->view('Posts/edit.php', ['posts' => $posts,'categories'=> $categories]);
    }
    //xem chi tiết
    public function detail()
    {

        $post = new post();
        $posts = $post-> edit();
        $this->view('Posts/detail.php', ['posts' => $posts]);
    }

    public function updatePost(){
        $data = $_POST;
        $data_update = [
          'title' => $data['title'],
          'description' => $data['description'],
          'category_id' => $data['category_id'],
          'content' => $data['content'],
          'created_at' => $data['created_at']
        ];

        $target_dir = 'images/';
        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
            $arr = array(
              'thumbnail'=> $_FILES["thumbnail"]["name"]
            );
            $data_update = array_merge( $data_update, $arr);
        } else {
            echo "Lỗi upload ảnh.";
        }


        $post = new Post();
        $posts = $post-> updatePost($data_update, $data['id']);
        // var_dump($data_update);
        // die();
        $_SESSION['editPost']="";
        $this->redirect("index.php?mod=post&act=index");
      }


//xỬ lý xóa
    public function deleteList(){
        $id = (isset($_GET['id'])?$_GET['id']:0);
        $post = new Post();
        $status = $post -> destroy($id);
        // var_dump($status);
        // die();
        $_SESSION['deletePost']="";
        $this-> redirect("index.php?mod=post&act=index");
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
      $this -> view('Posts/postsearch.php', ['posts' => $posts,'categories'=> $categories,'keyword'=> $keyword]);
    }
  }
?>

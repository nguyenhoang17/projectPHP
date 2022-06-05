<?php
require_once('Models/Query.php');
require_once('Models/Connection.php');
require_once('Models/Category.php');
  class Post extends Query
  {
    // public $conn;

    public $table = 'posts';
    public function __construct(){
      parent::__construct();
    }

    public function getListLimit5()
    {

      $query = "SELECT posts.view_post, posts.like_post, posts.id, posts.title, posts.description, posts.thumbnail, posts.category_id,posts.content, posts.created_at, categories.name
                FROM posts
                INNER JOIN categories ON categories.id = posts.category_id
                ORDER BY created_at DESC
                LIMIT 0,5";
    	$result = $this->conn->query($query);
      $data = array();

      while($row = $result->fetch_assoc()) {
      	$data[] = $row;
      };


    	return $data;
    }
    public function getListLimit4()
    {

      $query = "SELECT posts.view_post, posts.like_post, posts.id, posts.title, posts.description, posts.thumbnail, posts.category_id,posts.content, posts.created_at, categories.name
                FROM posts
                INNER JOIN categories ON categories.id = posts.category_id
                ORDER BY created_at DESC
                LIMIT 0,4";
    	$result = $this->conn->query($query);
      $data = array();

      while($row = $result->fetch_assoc()){
      	$data[] = $row;
      };


    	return $data;
    }


    public function getListCategoryId(){
      $query = "	SELECT posts.view_post, posts.like_post, posts.id, posts.title, posts.description, posts.thumbnail, posts.category_id,posts.content, posts.created_at, categories.name
              FROM posts
              INNER JOIN categories ON categories.id = posts.category_id
              ORDER BY created_at DESC";
      $result = $this->conn->query($query);
      $data = array();

      while($row = $result->fetch_assoc()) {
        $data[] = $row;
      };

      return $data;
    }

    public function findPostByCategory($category_id){
      $query = "	SELECT posts.view_post, posts.like_post, posts.id, posts.title, posts.description, posts.thumbnail, posts.category_id,posts.content, posts.created_at, categories.name
              FROM posts
              INNER JOIN categories ON categories.id = $category_id AND categories.id = posts.category_id
              ORDER BY created_at DESC";
              // echo $query;
              // die();
      $result = $this->conn->query($query);
      $data = array();

      while($row = $result->fetch_assoc()) {
        $data[] = $row;
      };

      return $data;

    }

    public function getSelectPost($id){
      $post = $this -> findByid($this->table, $id) ;
      return $post;
    }

    public function LikePost($id){
      $query = "UPDATE posts
                SET like_post = like_post + 1
                WHERE id =".$id;
      $result = $this->conn->query($query);
      return $result;
    }

    public function viewPost($id){
      $query = "UPDATE posts
                SET view_post = view_post + 1
                WHERE id =".$id;
      $result = $this->conn->query($query);
      return $result;
    }


    public function getByLike()
    {

      $query = "SELECT *
                FROM posts
                ORDER BY like_post DESC
                LIMIT 0,5";
    	$result = $this->conn->query($query);
      $data = array();

      while($row = $result->fetch_assoc()) {
      	$data[] = $row;
      };
    	return $data;
    }
    //Tim kiem
    public function searchPost($keySearch){
      $searchByTitle = $this -> search($this -> table, 'title', $keySearch);
      return $searchByTitle;
    }

  }
?>

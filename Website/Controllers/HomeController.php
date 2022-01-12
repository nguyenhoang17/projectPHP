<?php
require_once('Controllers/BaseController.php');
require_once('Models/Category.php');
require_once('Models/Post.php');
class HomeController extends BaseController
{
  public function index(){
    $category = new Category();
    $categories = $category -> getList();
    $post = new Post();
    $posts = $post-> getListLimit4();
    $newPost = new Post();
    $newPosts = $newPost -> getListLimit5();
    $postByLike = new Post();
    $postByLikes = $postByLike -> getByLike();
    // var_dump($newPost);
    // die();
    $this->view('Home/index.php', ['categories' => $categories,'posts'=> $posts, 'newPosts'=> $newPosts, 'postByLikes'=> $postByLikes
    ]);

  }

}
?>

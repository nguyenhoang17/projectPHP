<?php
  require_once('Models/User.php');
  require_once('Controllers/AdminController.php');

  class UserController extends AdminController{
    //hiển thị người dùng
    public function index(){
      $user = new User();
      $users = $user -> getList();
      $this -> view("Auth/list.php", ['users'=> $users]);
    }
    //Xử lý edit
    public function handleEdit()
    {
      $id =(isset($_GET['id'])?$_GET['id']:0);
      $user = new User();
      $users = $user-> edit($id);
      $this->view('Auth/edit.php', ['users' => $users]);
    }

    //update
    public function userUpdate(){
      $data = $_POST;
      $dataUserUpdate = ['name'=> $data['name'],
                          'email'=>$data['email'],
                          'password' => $data['password']];
                          // var_dump($dataUserUpdate);
                          // die();
      $user = new User();
      $users = $user ->updateUser($dataUserUpdate, $data['id']);
        $this->redirect("index.php?mod=user&act=index");
    }

    //xoas
    public function deleteUser(){
      $id =(isset($_GET['id'])?$_GET['id']:0);
      $user = new User();
      $status = $user -> destroy($id);
      // var_dump($status);
      // die();
      $this-> redirect("index.php?mod=user&act=index");
    }

  }
?>

<?php
require('Models/Category.php');
require_once("Controllers/AdminController.php");
  class CategoryController extends AdminController
  {
    public function index(){
      $category = new Category();
      $categories = $category-> getList();


      $this->view('Categories/list.php', ['categories' => $categories,
    ]);


    }

    //Xử lý Create
    //Hien thi ra giao dien form tao moi

    public function create(){
      // $this -> view("Categories/create.php");
      $category = new Category();
      $categories = $category-> getList();


      $this->view('Categories/create.php', ['categories' => $categories,
    ]);
    }
//luu tru du lieu hnguoi dung tao ra
    public function store(){
      $data = $_POST;
      $data_insert = [
        'name' => $data['name'],
        'description' => $data['description'],
        'parent_id' => $data['parent_id'],
        'created_at' => $data['created_at']
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


      $category = new Category();

      $status = $category -> create($data_insert);
      $this -> redirect("index.php?mod=category&act=index");
    }




    //Xử lý edit
    public function handleEdit()
    {
      $id =(isset($_GET['id'])?$_GET['id']:0);
      $category = new Category();
      $category_id= $category-> getList();
      $categories = $category-> edit($id);
      $this->view('Categories/edit.php', ['categories' => $categories, 'category_id'=> $category_id
    ]);
    }
    //xem chi tiết
    public function detail()
    {
      $id =(isset($_GET['id'])?$_GET['id']:0);
      $category = new Category();
      $categories = $category-> edit($id);
      $this->view('Categories/detail.php', ['categories' => $categories
    ]);
    }

    public function updateCategory(){

      $data = $_POST;
      $data_update = [
       'name' => $data['name'],
       'description' => $data['description'],
       'parent_id' => $data['parent_id'],
       'created_at' => $data['created_at']
     ];

      $target_dir = 'images/';
      $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
         if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
            $arr = array(
              'thumbnail'=> $_FILES["thumbnail"]["name"]
            );
            $data_update = array_merge($data_update,$arr);
        } else {
            echo "Lỗi upload ảnh.";
        }


        $category = new Category();
        $categories= $category-> updateCategory($data_update,$data['id']);

        $this->redirect("index.php?mod=category&act=index");
    }


//xỬ lý xóa
    public function deleteList(){
       $id =(isset($_GET['id'])?$_GET['id']:0);
      $category = new Category();
      $status = $category -> destroy($id);
      // var_dump($status);
      // die();
      $this-> redirect("index.php?mod=category&act=index");
    }
  }
?>

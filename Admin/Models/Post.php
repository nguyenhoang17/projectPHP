<?php
require_once('Models/Query.php');
  class Post extends Query
  {
      public $table = 'posts';
      public function getList()
      {

          $posts = $this -> select ($this -> table, ['id', 'title', 'description', 'thumbnail', 'category_id','content', 'created_at','like_post']);
          return $posts;
      }

      public function create($data)
      {
          $status = $this -> insert($this -> table, $data);
          return $status;
      }


      // Update
      public function edit($id)
      {
          $update = $this -> find($this-> table, $id);
          return $update;
      }

      public function updatePost($data,$id)
      {
          $updateProcess = $this -> update($this->table, $data, ['id' => $id]);
          return $updateProcess;
      }
      //xóa
      public function destroy($id){
          $delete1 = $this -> delete($this-> table, $id);
          return $delete1;
      }

          //   public function updateCategory($id){
          //      $id =(isset($_GET['id'])?$_GET['id']:0);
          //     $query= "UPDATE categories
          //             SET name = '".$data_insert['name']."', description = '".$data_insert['description']."', thumbnail = '".$data_insert['thumbnail']."', parent_id= '".$data_insert['parent_id']."', created_at = '".$data_insert['created_at']."' WHERE id = ".$id;
          //   ;
          //   $result = $this->conn->query($query);
          //   // Buoc 3
          //   // Tạo 1 mảng để chứa dữ liệu
          //   $data = array();
          //
          //   while($row = $result->fetch_assoc()) {
          //     $data[] = $row;
          //   };
          //   return $data;
          // }
  }
?>

<?php
require_once('Models/Query.php');
require_once('Models/Category.php');
  class Post extends Query
  {
      public $table = 'posts';
      public function getList()
      {

          $posts = $this -> select ($this -> table, ['id', 'title', 'description', 'thumbnail', 'category_id','content', 'created_at','like_post','view_post']);
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

      //Tim kiem
      public function searchPost($keySearch){
        $searchByTitle = $this -> search($this -> table, 'title', $keySearch);
        return $searchByTitle;
      }


  }
?>

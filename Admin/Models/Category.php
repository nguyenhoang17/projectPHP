<?php
require_once('Models/Query.php');
require_once('Models/Post.php');
  class Category extends Query
  {
      public $table = 'categories';
      public function getList()
      {

          $categories = $this -> select ($this -> table, ['id', 'name', 'description', 'thumbnail', 'parent_id', 'created_at']);
          return $categories;
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

      public function updateCategory($data,$id){
          $updateProcess = $this -> update($this->table, $data, ['id' => $id]);
          return $updateProcess;
      }
//xóa
      public function destroy($id){
          $delete1 = $this -> delete($this-> table, $id);
          return $delete1;
      }
      //Tim kiem
      public function searchCategory($keySearch){
        $searchByName = $this -> search($this -> table, 'name', $keySearch);
        return $searchByName;
      }



  }
?>

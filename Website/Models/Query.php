<?php
  require_once('Models/Connection.php');
  class Query{
    protected $conn;


    public function __construct(){

      $connection = new Connection1();
      // $connection -> password = '';
      $this -> conn = $connection -> connect();
    }

    protected function select($table, $columns = '*')
    {

      // $connection->conn

      if ($columns == '*') {
        $query = "SELECT * FROM " . $table;
      }elseif (is_array($columns)) {
        $sub_string = '';
        foreach ($columns as $i =>$column) {
          $sub_string .= '`'.$column . '`';

          if ($i + 1 != count($columns)) {
            $sub_string .= ',';
          }
        }

        $query = "SELECT " . $sub_string . " FROM " . '`' . $table . '`' . "ORDER BY created_at DESC";
      }else{
        exit();
      }

      $result = $this->conn->query($query);
      // Buoc 3
      // Tạo 1 mảng để chứa dữ liệu
      $data = array();

      while($row = $result->fetch_assoc()) {
        $data[] = $row;
      };
      return $data;
    }

    protected function find($table, $id){
      $query = "SELECT * FROM ". $table." WHERE category_id = ".$id;
      $result[] = $this -> conn -> query($query)->fetch_assoc();
      return $result;
      //Thông báo lỗi: "$this->conn->error"
    }

    protected function findByid($table, $id){
      $query = "SELECT * FROM ". $table." WHERE id = ".$id;
      $result[] = $this -> conn -> query($query)->fetch_assoc();
      return $result;
      //Thông báo lỗi: "$this->conn->error"
    }
//tìm kiếm
    protected function search($table, $column, $keySearch){
      $query = "SELECT * FROM $table WHERE $column LIKE '%$keySearch%'" . "ORDER BY created_at DESC";
      // echo $query;
      // die();
      $result = $this->conn->query($query);
      $data = array();

      while($row = $result->fetch_assoc()) {
        $data[] = $row;
      };
      return $data;
    }


  }
?>

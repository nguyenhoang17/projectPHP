<?php
  require_once('Models/Query.php');
  require_once('Models/Connection.php');

  class Category extends Query
  {
    // private $conn;
    public $table = 'categories';


    public function __construct(){
       parent::__construct();
    }

    public function getListLimit()
    {
      $query = "SELECT * FROM categories
                ORDER BY created_at ASC
                LIMIT 0,4";
      $result = $this->conn->query($query);
      $data = array();

    	while($row = $result->fetch_assoc()) {
    	   $data[] = $row;
    	  };
      return $data;
    }

    public function getList()
      {
        $categories = $this -> select ($this -> table, ['id', 'name', 'description', 'thumbnail', 'parent_id', 'created_at']);
        return $categories;

      }

    public function getCategoryById($id)
      {
        $category = $this -> findById($this -> table,$id );
        return $category;
      }
    }
?>

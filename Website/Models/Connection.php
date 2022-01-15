<?php
  class Connection1{
    private $servername= "localhost";
    private $username= "root";
    private $password = "";
    private $dbname = "blogs";

    public function connect(){
      $conn = new mysqli($this->servername, $this -> username, $this ->password, $this-> dbname );
      $conn->query("SET NAMES 'utf8'");
      if($conn -> connect_errno){
        echo "Failed to connect to MySQL:" .$conn->connect_errno;
        exit();
      }
      return $conn;
    }
  }
?>

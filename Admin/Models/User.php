<?php
require_once('Models/Query.php');
  class User extends Query{
    public $table = "users";
    public function checkLogin($email, $password)
    {
      $users = $this -> where($this-> table,
        ['email' => $email, 'password' => $password]);

      if (count($users) > 0){//nếu số lượng user lớn hơn 0 thì lấy user ở vị trí đầu tiên trong bảng user
        $user = $users[0];
        $_SESSION['auth']= [//tạo session auth
          'id' => $user['id'],
          'name' => $user['name'],
          'email'=> $user['email']
          ] ;
        return true;
      }else{
        return false;
      }
    }


//Ddawng kys
    public function checkRegister($email)
    {
      $userRegister = $this -> where($this -> table,
      ['email' => $email]);

      if(count($userRegister) > 0){
        return false;
      }else {
        return true;
      }

    }

    public function getList()
    {

      $user = $this -> select ($this -> table, ['id', 'name', 'email', 'password']);
      return $user;
    }

    public function register($data)
    {
      $status = $this -> insert($this -> table, $data);
      return $status;
    }
//sửa
    public function edit($id)
    {
        $update = $this -> find($this-> table, $id);
        return $update;
    }

    public function updateUser($data,$id){
      $updateProcess = $this -> update($this->table, $data, ['id' => $id]);
      return $updateProcess;
    }
//xóa
    public function destroy($id){
      $delete1 = $this -> delete($this-> table, $id);
      return $delete1;
    }


  }
?>

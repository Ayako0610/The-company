<?php
require_once "database.php";
class User extends Database{
  public function createUser($first_name,$last_name,$username,$password){
    $sql ="INSERT INTO `users`(`first_name`,`last_name`,`username`,`password`) VALUES('$first_name','$last_name','$username','$password')";

    if($this->conn->query($sql)){
      header("location:../views"); 
      // go to index.php of views
      exit;
        // same as die();
    }else{
      die("Error creation user". $this->conn->error);
    }
  }

  public function login($username,$password){
    $sql = "SELECT `id`, `username`, `password` FROM `users` WHERE `username`='$username'";
    if($result = $this->conn->query($sql)){
      if($result->num_rows == 1){
        // print_r($result);
        $user_details = $result->fetch_assoc();
        // print_r($user_details);
        if(password_verify($password,$user_details['password'])){
          // create session variables
          session_start();

          $_SESSION['user_id'] = $user_details['id'];
          $_SESSION['username'] = $user_details['username'];

          header("location: ../views/dashboard.php");
          exit;

        }else{
          // password is incorrect
          die("Password is incorrect.");
        }
      }else{
        // username does not exist
        die("Username does not exist.");
      }
    }else{
      // query faild
      die("Error: " .$this->conn->error);
    }
  }

  public function getAllUsers($user_id){
    // user id is the id of the Logged in user
    $sql = "SELECT id, first_name,last_name,username FROM users WHERE id !=$user_id";

    if($result = $this->conn->query($sql)){
      return $result;
      // Expectiong one or more
    }else{
      die("Error retrieving all users".$this->conn->error);
    }
  }

  public function getUser($user_id){
    $sql = "SELECT id, first_name,last_name,username FROM users WHERE id =$user_id";

    if($result = $this->conn->query($sql)){
      // Expectiong one only
      return $result->fetch_assoc();
    }else{
      die("Error retrieving users:".$this->conn->error);
    }
  }

  public function updateUser($user_id,$first_name,$last_name,$username){
    $sql ="UPDATE users SET first_name = '$first_name', last_name = '$last_name',username = '$username' WHERE id = $user_id";

    if($this->conn->query($sql)){
      header("location: ../views/dashboard.php");
      exit;
    } else{
      die ("Error updating user:" .$this->conn->error);
    }
  }
  
  public function deleteUser($user_id){
    $sql = "DELETE FROM users WHERE id = $user_id";
    if($this->conn->query($sql)){
      header("location: ../views/dashboard.php");
      exit;
    } else{
      die("Error delete user: " .$this->conn->error);
    }
  }
}
?>
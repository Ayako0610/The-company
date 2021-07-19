<?php
include "../classes/user.php";
// creat from
 $username = $_POST['username'];
 $password = $_POST['password'];

//  creat object
$user = new User;

// call the method
$user->login($username,$password);
?>
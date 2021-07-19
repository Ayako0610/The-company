<?php
session_start();

include "../classes/user.php";

$user = new User;
$user_list = $user->getAllUsers($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashbord</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/1f22affdad.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a href="dashboard.php" class="navbar-brand">
        <h1 class="h3">The Company</h1>
      </a>
        <div class="ml-auto">
          <ul class="navbar-nav">
            <li class="nav-item"><a href="profile.php" class="nav-link"><?=$_SESSION['username']?></a></li>
            <li class="nav-item"><a href="../actions/logout.php" class="nav-link text-danger">LOG OUT</a></li>
          </ul>
        </div>
    </nav>  

    <main class="container-flud" style="padding-top :80px">
    <div class="row">
      <div class="col-6 mx-auto">
        <h2 class="text-muted">User List</h2>

          <table class="table tabl-hover">
          <thead class="thead-light">
            <tr>
            <th>#</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Username</th>
            <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
          while($user_details = $user_list->fetch_assoc()){
         ?>
          <tr>
          <td><?= $user_details['id']?></td>
          <td><?= $user_details['first_name']?></td>
          <td><?= $user_details['last_name']?></td>
          <td><?= $user_details['username']?></td>
          <td>
           <a href="edit-user.php?user_id=<?= $user_details['id']?>" class="btn btn-outline-warning"><i class= "fas  fa-pencil-alt"></i></a>

           <a href="delete-user.php?user_id=<?= $user_details['id']?>" class="btn btn-outline-danger"><i class= "fas  fa-trash-alt"></i></a>
          </td>
          <?php
          }
          ?>
          </tbody>
          </table>
          </div>
        </div>
    </main>
</body>
</html>
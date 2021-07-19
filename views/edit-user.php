<?php
session_start();

include "../classes/user.php";

$user = new User;
$user_details = $user->getUser($_GET['user_id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
  <main class="container" style="padding-top: 80px">
    <div class="card w-50 mx-auto border-0">
      <div class="card-header bg-white border-0">
        <h2 class="text-center">
        EDIT USER
        </h2>
      </div>
      <div class="card-body">
        <form action="../actions/edit-user.php" method="post">
          <input type="hidden" name="id" id="id" value="<?= $user_details['id'] ?>">

          

          <label for="last_name">Last Name</label>
          <input type="text" name="last_name" id="last_name" class="form-control mb-2" value="<?= $user_details['last_name'] ?>"required>

          <label for="username" class="font-weight-bold">Username</label>
          <input type="text" name="username" id="username" class="form-control mb-5 font-weight-bold" maxlength="15" value="<?= $user_details['username'] ?>"required>

          <div class="text-right">
            <button type="submit" class="btn btn-warning btn-sm px5">Save</button>
            <a href="dashboard.php" class="btn btn-secondary btn-sm">Cancel</a>
          </div>  
        </form>
      </div>
    </div>
  </main>

</body>
</html>
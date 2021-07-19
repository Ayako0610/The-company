<!-- start the session -->
<?php
session_start();

include "../classes/user.php";

// <!-- creat object -->
$user = new User;
// <!-- call getUser -->
$user_details = $user->getUser($_GET['user_id']);
// $user_details = $user->getDeleteUser($_GET['fullname']);
$full_name = $user_details['first_name'] . " " .$user_details['last_name'];
?>
<!-- $full_name = first name + last name -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete User</title>
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
  <main class="container" style="padding-top:80px">
    <div class="card w-25 mx-auto border-0">
      <h2 class="text-center text-danger">DELETE USER</h2>
    </div>
    <div class="card-body">
      <div class="text-center mb-4">
        <i class="fas fa-exclamation-triangle text-warning display-4 d-block mb-2"></i>
        <p class="font-weight-bold mb-0">Are you sure you want to delete "<?= $full_name ?>"</p>
      </div>
      <div class="row">
        <div class="col">
          <a href="dashboard.php" class="btn btn-secondary btn-block">Cancel</a>
        </div>
        <div class="col">
          <a href="../actions/delete-user.php?user_id=<?= $user_details['id']?>" class="btn btn-outline-danger btn-block">Delete</a>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Login</title>

</head>
<body class="bg-light">
      <div style="height:100vh">
        <div class="row h-100 m-0">
          <div class="card w-25 mx-auto my-auto">
            <div class="card-header bg-white border-0">
              <h1 class="text-center">LOGIN</h1>
            </div>
            <div class="card-body">
            <form action="../actions/login.php" method="post">
            <input type="text" name="username" placeholder="USERNAME" class="form-control mb-2" required autofocus>

            <input type="password" name="password" placeholder="PASSWORD" class="form-control mb-5" required autofocus>
            <button type="submit" class="btn btn-primary btn-block">Log in</button>

            <p class="text-center mt-3 small"><a href="register.php">Create Account</a></p>
            </form>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>register</title>
</head>
<body class ="bg-light">
    <div style="height: 100vh">
       <div class="row h-100 m-0">
        <div class="card w-25 my-auto mx-auto">
            <div class="card-header bg-white border-0">
              <h1 class="text-center">REGISTER</h1>
            </div> 
            <div class="card-body">
                <form action="../actions/register.php" method="post">
                  <label for="first_name">First Name</label>
                  <input type="text" name="first_name" id="first_name" class="form-control mb-2 "required autofocus>

                  <label for="last_name">Last Name</label>
                  <input type="text" name="last_name" id="last_name" class="form-control mb-2"reiquired >
                  <label for="username" class="font-weight-bold">Username</label>
                  <input type="text" name="username" id="username" class="form-control mb-2 font-weight-bold" maxlengh="15">

                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control mb-5" minlength="8" required>

                  <button type="submit" class="btn btn-success btn-black">Register</button>

                  <p class="text-center mt-3 sma11">Registered already? <a href="../views">Log in.</a></p>
      
                </form>
            </div>
        </div>
       </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

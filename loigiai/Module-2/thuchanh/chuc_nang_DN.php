<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<pre>';
    print_r( $_POST );
    echo '</pre>';
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if ($username == "admin" && $password == "admin") {
        echo "<h3>Welcome <span style='color:red'>" .$username. "</span> to website</h3>";
    } else{
        echo "<h3><span style='color:red'>Login Error</span></h3>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style type="text/css">
        .login {
            width:300px;
            margin:0;
            padding:10px;
            border:1px #CCC solid;
        }
        h2 {
            text-align: center;
        }
        .login input {
            padding:5px; margin:5px
        }
    </style>

</head>

<body>
<form action="" method="POST">
    <div class="login">
        <h2>Login</h2>
        <label>
            Username:
            <input type="text" name="username" size="30"  placeholder="username" />
        </label>
        <label>
            Password:
            <input type="password" name="password" size="30" placeholder="password" />
        </label>
        <!-- <input type="submit" value="Sign in"/> -->
        <button type="submit" class="btn btn-primary">
  Sign Up
  </button>
<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Sign Up Success</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        SAVE ACCOUNT ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Never</button>
        <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
</div> -->
</form>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>


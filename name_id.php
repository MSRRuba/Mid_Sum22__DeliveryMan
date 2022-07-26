<?php require('scripts/connect-to-database.php');?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Name ID</title>
   
</head>

<body>
<div class="login-page">
    <div class="form">
      <form class="login-form" action = 'scripts/login.php' method = 'POST'>
            <input type="text" name = 'username' placeholder="username"/>
            <input type="text" name = 'password' placeholder="password"/>
            <button type = 'submit' value = 'Log In' name = 'login'>Insert</button>
            <p class="message">Not registered? <a href="Signup.php">Create an account</a></p>
          </form>
    </div>


</body>
</html>
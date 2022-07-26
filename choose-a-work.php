<?php
session_start();

include("scripts/connect-to-database.php");
?>

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
      <form class="login-form" action = 'scripts/choose_work.php' method = 'POST'>
            <input type="text" name = 'username' placeholder="Enter ID"/>
            <button type = 'submit' value = 'Log In' name = 'login'>Insert</button>
          </form>
    </div>


</body>
</html>
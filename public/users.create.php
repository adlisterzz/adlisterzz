<?php

require_once '../models/User.php';
require_once '../utils/Input.php';
require_once '../models/BaseModel.php';



if (Input::get('Password') === Input::get('Password2')) {
    $user = new User([

        'email' => Input::get('Email'),
        'firstname' => Input::get('Firstname'),
        'lastname' => Input::get('Lastname'),
        'username' => Input::get('Username'),
        'password' => password_hash(Input::get('Password'), PASSWORD_DEFAULT)

        ]);

    $user->save();
} else {
    echo '<script language="javascript">alert ("Your passwords do not match!");</script>';
    echo '<script type="text/javascript">window.history.go(-1);</script>';
    }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Or Create New User</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Create a new User</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="Email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputFirstname" class="sr-only">First Name</label>
        <input name="Firstname" type="text" id="inputFirstname" class="form-control" placeholder="First Name" required autofocus>
         <label for="inputLasttname" class="sr-only">Last Name</label>
        <input name="Lastname" type="text" id="inputLastname" class="form-control" placeholder="Last Name" required autofocus>
        <label for="inputUsername" class="sr-only">Username</label>
        <input name="Username" type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="Password2"type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword2" class="sr-only">Re-Enter Password</label>
        <input name="Password" type="password" id="inputPassword2" class="form-control" placeholder="Re-Enter Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <!-- <script src="//code.jquery.com/jquery-1.12.0.min.js"></script> -->
  </body>
</html>
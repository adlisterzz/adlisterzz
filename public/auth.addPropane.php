<?php
require_once '../utils/Input.php';
require '../database/db_connect.php';

	   

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

    <title>Add Your Propane</title>

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
<form class="form-horizontal" role="form" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Propane Name:</label>
    <div class="col-sm-10">
      <input name="name" type="text" class="form-control" id="name" placeholder="Propane Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="maker">Maker:</label>
    <div class="col-sm-10"> 
      <input name="maker" type="text" class="form-control" id="maker" placeholder="Enter Maker">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="maker">Grade:</label>
    <div class="col-sm-10"> 
      <input name="grade" type="text" class="form-control" id="grade" placeholder="Enter Grade">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="maker">Type:</label>
    <div class="col-sm-10"> 
      <input name"type" type="text" class="form-control" id="type" placeholder="Enter Type">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="maker">Price:</label>
    <div class="col-sm-10"> 
      <input name="price" type="text" class="form-control" id="price" placeholder="Enter Price">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="maker">Description:</label>
    <div class="col-sm-10"> 
      <input name="description" type="text" class="form-control" id="descr" placeholder="Enter Description">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</body>
<?php
require_once '../utils/Input.php';
require_once '../models/AccessoriesModel.php';
require_once '../utils/Auth.php';
require_once '../models/User.php';

session_start();

// if (Auth::check() == false) {
// 	header("Location: index.php");
//     die();
// }

$error = "";
if($_POST) {

  $image = Input::uploadImage('image');
  if ($image === false) {

    $error = "Image was not uploaded";
  } else {

          $acessories = new Accessories ([

      		'category'=> Input::get('category'),
      		'type'=> Input::get('type'),
      		'price'=> Input::get('price'),
      		'description'=> Input::get('description'),
          'user_id'=>Auth::user()->id,
          'image'=> "/img/$image",
      		
      		]);

            $acessories->save();
  }
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

    <title>Add Your Propane and Propane Accessories!</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <link href="/css/carousel.css" rel="stylesheet" type="text/css">
    <link href="/css/index.css" rel="stylesheet" type="text/css">
    <link href="/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/simple-sidebar.css" rel="stylesheet" type="text/css" />
    <link href="/css/footer-distributed.css" rel="stylesheet" type="text/css" />

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
<?php include_once 'stricklandNavbarAuth.php'; ?>
<hr>
<hr>
<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label class="control-label col-sm-2" for="category">Category Name:</label>
    <div class="col-sm-10">
      <input name="category" type="text" class="form-control" id="category" placeholder="Category Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="type">Type:</label>
    <div class="col-sm-10"> 
      <input name="type" type="text" class="form-control" id="type" placeholder="Enter Type">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="price">Price:</label>
    <div class="col-sm-10"> 
      <input name="price" type="text" class="form-control" id="price" placeholder="Enter Price">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="descr">Description:</label>
    <div class="col-sm-10"> 
      <input name="description" type="text" class="form-control" id="descr" placeholder="Enter Description">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="img">Image:</label>
    <div class="col-sm-10"> 
      <input name="image" type="file" name="fileToUpload" id="fileToUpload">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
      <?php echo $error ?>
    </div>
  </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<hr>
<?php include_once 'stricklandFooter.php'; ?>
</body>
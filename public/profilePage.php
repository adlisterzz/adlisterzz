<?php


// require '../utils/Input.php';
// require '../utils/Auth.php';

session_start();

function pageController()
{
require '../utils/Auth.php';
// require '../database/db_connect.php';

$query = "SELECT * FROM users WHERE id = :id" ;
$statement = $dbc->prepare($query);
$statement->bindValue(':id', Auth::user()->id, PDO::PARAM_INT);
$statement->execute();
$users = $statement->fetch();

return array(
  'users' => $users
  
  );

}

extract(pageController());

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

    <title>My Profile Page</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/simple-sidebar.css" rel="stylesheet" type="text/css" />
    <link href="css/footer-distributed.css" rel="stylesheet" type="text/css" />
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet" type="text/css"> 
    <link href="css/shop-item.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php include_once 'stricklandNavbarAuth.php'; ?>
<hr>
<hr>
<hr>
<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <A href="edit.html" >Edit Profile</A>
           <br>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo "Welcome " . $users ['firstname'] . " " . $users ['lastname']?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="" class="img-circle img-responsive"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Email Address:</td>
                        <td><?php echo $users ['email'] ?></td>
                      </tr>
                      <tr>
                        <td>First Name</td>
                        <td><?php echo $users ['firstname']?></td>
                      </tr>
                      <tr>
                        <td>Last Name</td>
                        <td><?php echo $users ['lastname']?></td>
                      </tr>   
                      <tr>
                        <td>Username</td>
                        <td><?php echo $users ['username']?></td>
                      </tr>
                      
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">Add some Propane!</a>
                  <a href="#" class="btn btn-primary">Add some Propane Accessories!</a>
                </div>
              </div>
            </div>
                 <!-- <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div> -->
            
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src"/js/profilePage.js"type="text/javascript"></script>
    <hr>
    <?php include_once 'stricklandFooter.php'; ?>
</body>
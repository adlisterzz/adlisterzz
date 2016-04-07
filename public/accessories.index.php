<?php

  // DEFINE('DB_PASS', 'codeup1');
  // DEFINE('DB_USER', 'codeup1');
  // DEFINE('DB_NAME', 'dbname=ad');
  // DEFINE('DB_HOST', 'mysql:host=127.0.0.1;');

  // require '../database/db_connect.php';

  session_start();

  function pageController()
  {

    require '../database/db_connect.php';

    $query = "SELECT * FROM propane_and_accessories" ;
    $statement = $dbc->prepare($query);
    $statement->execute();


    $accessories = $statement->fetchAll(PDO::FETCH_ASSOC);

    return array(
      'accessories' => $accessories
      
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

    <title>Accessories Listing</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/carousel.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/simple-sidebar.css" rel="stylesheet" type="text/css" />
    <link href="css/footer-distributed.css" rel="stylesheet" type="text/css" />
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
    <link href="css/shop-item.css" rel="stylesheet" type="text/css">
    <link href="css/index.css" rel="stylesheet" type="text/css"> 
    
    
  </head>

  <body>

    <?php if (isset($_SESSION['logged_in_user'])): ?>

        <?php include_once 'stricklandNavbarAuth.php'; ?>

    <?php  else: ?>

        <?php include_once 'stricklandNavbar.php'; ?>
        
    <?php endif ?>
    <?php include_once 'stricklandFooter.php'; ?>
    <?php include_once 'stricklandNarrowJumbotronSidebar.php'; ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    
    <div class="jumbotron text-center jumbotronColor">
      <img src="/img/propaneTank.png" class="navbar-left">
      <img src="/img/propaneTank.png" class="navbar-right">
      <div class="container">
        <h class="impactText fontSize48">Propane Accessories</h>
      </div>
    </div>



    <div class="container">
      <!-- Example row of columns -->
      
        <?php foreach (array_chunk($accessories, 3) as $three_accessorie): ?>
        <div class="row adjustForSidebar">    
        <?php foreach ($three_accessorie as $accessorie):?>
        <div class="col-md-4" id="paddingForListings">
          <h2><?php echo $accessorie ['type']?></h2> 
          <img src="<?php echo $accessorie ['image'] ?>"alt="<?php echo $accessorie['type']?>" height="120" width="120" >
          <hr>
          <p><?php echo 'Description - ' . ''. $accessorie ['description'] ?></p> 
          <p><a class="btn btn-default" href="accessories.show.php?id= <?php echo $accessorie ['id']?>" role="button">View details &raquo;</a></p> 
        </div>
        <?php endforeach; ?>
        </div>
        <?php endforeach; ?>

      <footer>
      <p>&copy; 2015 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  </body>
</html>
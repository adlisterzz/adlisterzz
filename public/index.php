<?php

session_start();


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Strickland's Propane and Propane Accessories</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/index.css" rel="stylesheet" type="text/css" />
    <link href="/css/carousel.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/simple-sidebar.css" rel="stylesheet" type="text/css" />
    <link href="/css/footer-distributed.css" rel="stylesheet" type="text/css" />
    
  </head>

  <body>
    
    
    <?php include_once 'stricklandCarousel.php'; ?>
    <?php include_once 'stricklandFooter.php'; ?>

<?php if (isset($_SESSION['logged_in_user'])): ?>

      <?php include_once 'stricklandNavbarAuth.php'; ?>

    <?php  else: ?>

      <?php include_once 'stricklandNavbar.php'; ?>
      
    <?php endif ?>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row text-center">
        <div class="col-lg-6">
          <img class="img-circle" src="/img/propaneBlueFlameCircle.jpg" width="140" height="140">
          <h2>Propane</h2>
          <p> Choosing the right fuel for the right job is always important. Whether you're overcooking last years freezer-burned deer venison or powering a generator in your remote greenhouse, we've got you covered. </p>
          <p><a class="btn btn-default" href="ads.index.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-6">
          <img class="img-circle" src="/img/PropaneAccessories.jpeg" width="140" height="140">
          <h2>Propane Accessories</h2>
          <p> You have propane. We have accessories. Camping? RVing? Does a friend need to hold your beer for this one? </p>
          <p><a class="btn btn-default" href="accessories.index.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->


      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">How to pick the right propane for the job. <span class="text-muted"><a href="ads.index.php"> It'll blow your mind.</a></span></h2>
          <p class="lead"> At Strickland, we know what lights your fire: Propane. And only the finest. That's why we hand select our propane only from USDA certified, free-range, GMO free, organic propane farms. </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block featuretteImage" src="/img/PropaneFlame.jpeg" alt="Caliente!">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Which propane accesories fit my active adult lifestyle? <span class="text-muted"><a href="accessories.index.php">See for yourself.</a></span></h2>
          <p class="lead"> You'll be grilling up a storm in no time with our top of the line gills and grill accessories.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block featuretteImage" src="/img/PropaneLife.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Done acceossirizing your propane? Ready to accessorize your body? <span class="text-muted"><a href="giftshop_index.php">It's lit fam.</a></span></h2>
          <p class="lead"> Stay up to date with the finest in this seasons propane fashions.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block featuretteImage" src="/img/stricklandShirt.jpeg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    
  </body>
</html>

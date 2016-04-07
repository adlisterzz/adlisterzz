<?php

DEFINE('DB_PASS', 'codeup1');
DEFINE('DB_USER', 'codeup1');
DEFINE('DB_NAME', 'dbname=ad');
DEFINE('DB_HOST', 'mysql:host=127.0.0.1;');


require '../utils/Input.php';

function pageController()
{

require '../database/db_connect.php';

$id = Input::get('id');
$query = "SELECT * FROM propane WHERE id = :id" ;
$statement = $dbc->prepare($query);
$statement->bindValue(':id', $id, PDO::PARAM_INT);
$statement->execute();
$propane = $statement->fetch();


// $propanes = $statement->fetch(PDO::FETCH_ASSOC);

return array(
  'propane' => $propane
  
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
 

    <title>Show Details</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/carousel.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/simple-sidebar.css" rel="stylesheet" type="text/css" />
    <link href="css/footer-distributed.css" rel="stylesheet" type="text/css" />
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet" type="text/css"> 
    <link href="css/shop-item.css" rel="stylesheet" type="text/css">
    
  </head>

  <body>


      <?php if (isset($_SESSION['logged_in_user'])): ?>

        <?php include_once 'stricklandNavbarAuth.php'; ?>

      <?php  else: ?>

        <?php include_once 'stricklandNavbar.php'; ?>
        
      <?php endif ?>

      <?php include_once 'stricklandFooter.php'; ?>
      <?php include_once 'stricklandNarrowJumbotronSidebar.php'; ?>

    <div class="container pad40">
      
      <h1 class="text-center"> Propane Details</h1>
      <div class="row">

            <div class="col-md-9 marginLeft100">

                <div class="thumbnail">
                    <img src="<?php echo $propane ['image'] ?>"alt="<?php echo $propane['name']?>" class="img-responsive">

                    <div class="caption-full">
                        <h1 class="pull-right">$<?php echo $propane ['price'] ?></h1>
                        <h1><a href="#"></a><?php echo $propane ['name'] ?></a>
                        </h1>
                        <h4><a href="#"></a><?php echo $propane ['maker'] ?></a>
                        </h4>
                        <h4><a href="#"></a><?php echo $propane ['grade'] ?> / <?php echo $propane ['type'] ?></a>
                        </h4>
                        <p><?php echo $propane ['description'] ?></p>
                        
                        <p>Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'?</p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                    <p><a class="btn btn-default" href="ads.index.php" role="button">Go Back to Listings! &raquo;</a></p>
                </div>

                <div class="well">

                    <div class="text-right">
                        <a class="btn btn-success">Leave a Review</a>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">10 days ago</span>
                            <p>This product was great in terms of quality. I would definitely buy another!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">12 days ago</span>
                            <p>I've alredy ordered another one!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">15 days ago</span>
                            <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

      

      <footer class="footer">
        <p>&copy; 2015 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>
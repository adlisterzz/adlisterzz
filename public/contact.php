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
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Strickland's Propane and Propane Accessories</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/carousel.css" rel="stylesheet" type="text/css">
    <link href="/css/index.css" rel="stylesheet" type="text/css">
    <link href="/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/css/simple-sidebar.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <?php if (isset($_SESSION['logged_in_user'])): ?>

        <?php include_once 'stricklandNavbarAuth.php'; ?>

    <?php  else: ?>

        <?php include_once 'stricklandNavbar.php'; ?>
        
    <?php endif ?>
    <?php include_once 'stricklandFooter.php'; ?>

    <div class="container margin100">

      <div class="starter-template text-center">
        <h1>We like to get personal.</h1>
        <p class="lead text-center">We're here to listen to how terrible our employees are and encourage you to let us know on every social media account.</p>
      </div>
    </div>
       
    <div class="container marketing">

        
        <div class="column">

            <div class="row">
                <div class="col-lg-6 text-center">
                    <img class="img-circle" src="/img/BuckStrickland.png" width="140" height="140">
                    <h2>Buck Strickland</h2>
                    <h3>Owner</h3>
                    <p> Owner, founder, and operator of the Strickland Propane family of Propane dealers in the Texas area.  </p>
                    <p><button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Contact Me!</button></p>
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">
                                        <ul class="navbar-nav nav padModal">
                                            <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
                                            <li><a href="http://www.twitter.com" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
                                            <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-lg fa-google-plus"></i></a></li>
                                            <li><a href="http://www.linkedin.com" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a></li>
                                        </ul>
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        <h4>Phone: (555)345-6789</h4>
                                        <h4>Cell: (555)345-6789</h4>
                                        <h4>E-Mail: buck.strickland@gmail.com</h4>
                                        <h4>Fax: (555)345-6789</h4>
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>      
                    </div>
                </div><!-- /.col-lg-2 -->
        
                <div class="col-lg-6 text-center">
                    <img class="img-circle" src="/img/Hank.png" width="140" height="140">
                    <h2>Hank Hill</h2>
                    <h3>Associate Manager</h3>
                    <p> Employee of the month for 41 consecutive months!  </p>
                    <p><button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal2">Contact Me!</button></p>
                    <div id="myModal2" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">
                                        <ul class="navbar-nav nav padModal">
                                            <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
                                            <li><a href="http://www.twitter.com" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
                                            <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-lg fa-google-plus"></i></a></li>
                                            <li><a href="http://www.linkedin.com" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a></li>
                                        </ul>
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        <h4>Phone: (555)345-6789</h4>
                                        <h4>Cell: (555)345-6789</h4>
                                        <h4>E-Mail: ITellYouHwat@gmail.com</h4>
                                        <h4>Fax: (555)345-6789</h4>
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>      
                    </div>
                </div><!-- /.col-lg-2 -->
            </div>

            <div class="row">
                <div class="col-lg-6 text-center">
                    <img class="img-circle" src="/img/JoeJack.jpg" width="140" height="140">
                    <h2>Joe Jack</h2>
                    <h3>Grill Associate</h3>
                    <p> Proudly serving Arlen's grill needs for the last 3 years.  </p>
                    <p><button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal3">Contact Me!</button></p>
                    <div id="myModal3" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">
                                        <ul class="navbar-nav nav padModal">
                                            <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
                                            <li><a href="http://www.twitter.com" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
                                            <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-lg fa-google-plus"></i></a></li>
                                            <li><a href="http://www.linkedin.com" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a></li>
                                        </ul>
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        <h4>Phone: (555)345-6789</h4>
                                        <h4>Cell: (555)345-6789</h4>
                                        <h4>E-Mail: JoeJack@gmail.com</h4>
                                        <h4>Fax: (555)345-6789</h4>
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>      
                    </div>
                </div><!-- /.col-lg-2 -->

                <div class="col-lg-6 text-center">
                    <img class="img-circle" src="/img/Enrique.jpg" width="140" height="140">
                    <h2>Enrique</h2>
                    <h3>Truck Driver</h3>
                    <p> Enrique's enjoyed the benefits of the propane lifestyle for 2 years.</p>
                    <p><button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal4">Contact Me!</button></p>
                    <div id="myModal4" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">
                                        <ul class="navbar-nav nav padModal">
                                            <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
                                            <li><a href="http://www.twitter.com" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
                                            <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-lg fa-google-plus"></i></a></li>
                                            <li><a href="http://www.linkedin.com" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a></li>
                                        </ul>
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        <h4>Phone: (555)345-6789</h4>
                                        <h4>Cell: (555)345-6789</h4>
                                        <h4>E-Mail: SpanishFly@gmail.com</h4>
                                        <h4>Fax: (555)345-6789</h4>
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>      
                    </div>
                </div><!-- /.col-lg-2 -->
            </div>

            <div class="row">
                <div class="col-lg-6 text-center">
                    <img class="img-circle" src="/img/Donna2.jpg" width="140" height="140">
                    <h2>Donna</h2>
                    <h3>From Accounting</h3>
                    <p> Donna's been cooking the books for Strickland for 2 years.  </p>
                    <p><button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal5">Contact Me!</button></p>
                    <div id="myModal5" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">
                                        <ul class="navbar-nav nav padModal">
                                            <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
                                            <li><a href="http://www.twitter.com" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
                                            <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-lg fa-google-plus"></i></a></li>
                                            <li><a href="http://www.linkedin.com" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a></li>
                                        </ul>
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        <h4>Phone: (555)345-6789</h4>
                                        <h4>Cell: (555)345-6789</h4>
                                        <h4>E-Mail: DonnaFromAccounting@gmail.com</h4>
                                        <h4>Fax: (555)345-6789</h4>
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>      
                    </div>
                </div><!-- /.col-lg-2 -->

                <div class="col-lg-6 text-center">
                    <img class="img-circle" src="/img/Booda_Sack.png" width="140" height="140">
                    <h2>Roger Sack</h2>
                    <h3>Associate</h3>
                    <p> The store comedian, Roger's been with us for 1 year.</p>
                    <p><button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal6">Contact Me!</button></p>
                    <div id="myModal6" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">
                                        <ul class="navbar-nav nav padModal">
                                            <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
                                            <li><a href="http://www.twitter.com" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
                                            <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-lg fa-google-plus"></i></a></li>
                                            <li><a href="http://www.linkedin.com" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a></li>
                                        </ul>
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        <h4>Phone: (555)345-6789</h4>
                                        <h4>Cell: (555)345-6789</h4>
                                        <h4>E-Mail: BoodaSacks420@gmail.com</h4>
                                        <h4>Fax: (555)345-6789</h4>
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>      
                    </div>
                </div><!-- /.col-lg-2 -->
            </div>

        </div><!-- /.row -->
    
    </div><!-- /.container -->

    <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
  </body>
  </html>
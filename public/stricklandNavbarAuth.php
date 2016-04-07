<?php
require_once '../utils/Input.php';
require_once '../utils/Auth.php';
require_once '../models/User.php';

$user = Auth::user();

?>


<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-left" href="index.php"><img src="/img/strickland4.jpeg"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav social">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jump to a section <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="dropdown-header">Buy/Sell</li>
            <li><a href="ads.index.php">Propane</a></li>
            <li><a href="accessories.index.php">Propane Accessories</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Site</li>
            <li><a href="giftshop_index.php">Strickland Gift Shop</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="#">Check out the Propaniacs</a></li>
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text"><?php echo $user->username . " is logged in!!"?></p></li> 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>My Options</b> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="dropdown-header">Profile</li>
            <li><a href="#">My Profile</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Actions</li>
            <li><a href="auth.addPropane.php">Add Propane</a></li>
            <li><a href="auth.addAccessories.php">Add Propane and Propane Accessories</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="User.logout.php">Logout</a></li>
          </ul>  
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link href="../public/fontawesome-free-5.12.0-web/fontawesome-free-5.12.0-web/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">

  <link href="../public/stylesheets/style4.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-dark"  style="background-color: rgba(31,122,61,0.8)">
  <div class="container">
    <div class="navbar-header">
    <a class="navbar-brand" href="#">
        <img src="../public/images/Logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="TFO">
        <span>Track Food Online</span>
    </a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
      <ul class="nav navbar-nav">
        <li class="<?php if($page=='storeHome'){echo 'active';}?>"><a href="/TFO-PHP/routes/storeHome.php">My Store</a></li>
        <li class="<?php if($page=='storeOrder'){echo 'active';}?>"><a href="/TFO-PHP/php/storeOrders.php">Process Orders</a></li>
        <li><a href="/TFO-PHP/views/about.php">About Us</a></li>
        <li><a href="/TFO-PHP/views/contact.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li style="display:<?php if(!isset($_SESSION['user'])){echo'none';}?>;"><a href="#"><span class="glyphicon glyphicon-user"></span> Hi, Store <?php echo $_SESSION['store_name'] ?></a></li>
        <li style="display:<?php if(!isset($_SESSION['user'])){echo'none';}?>;"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        <li style="display:<?php if(isset($_SESSION['store'])){echo'none';}?>;"><a href="Login.php?store_registered=<?php echo 'yes';?>"><span class="glyphicon glyphicon-user"></span> Store Login</a></li>
      </ul>
  </div>
</nav>
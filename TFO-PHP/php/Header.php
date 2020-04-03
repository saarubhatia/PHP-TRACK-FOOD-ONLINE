<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script-->

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
        <li class="<?php if($page=='Home'){echo 'active';}?>"><a href="/TFO-PHP/php/Home.php">Home</a></li>
        <li class="<?php if($page=='RestaurantDetail'){echo 'active';}?>"><a href="/TFO-PHP/php/RestaurantDetail.php">Orders</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li style="display:<?php if(!isset($_SESSION['user'])){echo'none';}?>;"><a href="#"><span class="glyphicon glyphicon-user"></span> Hi, Ankit</a></li>
        <li style="display:<?php if(!isset($_SESSION['user'])){echo'none';}?>;"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        <li style="display:<?php if(isset($_SESSION['user'])){echo'none';}?>;"><a href="Login.php?user_registered=<?php echo 'no';?>"><i class="fas fa-user-plus"></i> Sign Up</a></li>
        <li style="display:<?php if(isset($_SESSION['user'])){echo'none';}?>;"><a href="Login.php?user_registered=<?php echo 'yes';?>"><span class="glyphicon glyphicon-user"></span> Log In</a></li>
      </ul>
  </div>
</nav>
</body>
</html>
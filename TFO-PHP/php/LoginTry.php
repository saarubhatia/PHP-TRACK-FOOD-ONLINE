<?php
declare(strict_types=1);
        session_start();
        const username_login = 'a';
        const password_login ='a';
        function auth():int
        {
            if(isset($_POST['username_login']) && isset($_POST['password_login']))
            {
                if($_POST['username_login']===username_login && $_POST['password_login']===password_login)
                {
                    $_SESSION['user']=$_POST['username_login'];
                    header('Location:../php/Home.php');
                    return 1;
                }
                else
                {
                    return 0;
                }
            }
        }
?>
<html>
    <head>
        <title>Track Food Online</title>
        <link rel="icon" type="image/ico" href="../public/images/Logo.ico">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="../public/stylesheets/style1.css">
        <script src="../public/scripts/script1.js"></script>
        <script type="text/javascript">
            function authen()
            {
                var result=<?php auth();?>;
                alert(result);
                //$(document).ready(function(){
                    if(result==0)
                    {
                        alert("Invalid Credentials. Please try again");
                    }
                //});
            }
        </script>
    </head>
    <body>
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../public/images/6.jpg" class="d-block w-100 carousel-img" alt="Image 1">
                    <div class="carousel-caption d-none d-md-block">
                      <q>If more of us valued food and cheer and song above hoarded gold, it would be a merrier world</q>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="../public/images/5.jpg" class="d-block w-100 carousel-img" alt="Image 2">
                    <div class="carousel-caption d-none d-md-block">
                      <q>One cannot think well, love well, sleep well, if one has not dined well</q>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="../public/images/2.jpg" class="d-block w-100 carousel-img" alt="Image 3">
                    <div class="carousel-caption d-none d-md-block">
                      <q>After a good dinner one can forgive anybody, even one's own relations</q>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
            <img src="../public/images/Logo.jpg" alt="Logo" class="logo">
            <!--reg-form-->
            <div class="reg-form" style="display: none; padding-top: 4%;">
            <form>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationServer01">First name</label>
                  <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationServer02">Last name</label>
                  <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="validationServerUsername">Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend3">@</span>
                    </div>
                    <input type="email" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                    <div class="invalid-feedback username-n">
                      Please choose a valid username.
                    </div>
                    <div class="valid-feedback">
                      Available
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="validationServer03">Password</label>
                  <input type="password" class="form-control is-invalid" id="validationServer03" placeholder="Password" required>
                  <div class="invalid-feedback">
                    Please enter a valid password.
                  </div>
                  <div class="valid-feedback pass"></div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="validationServer04">Confirm Password</label>
                  <input type="password" class="form-control is-invalid" id="validationServer04" placeholder="Confirm Password" required>
                  <div class="invalid-feedback cpass-n">
                    Please enter a valid password
                  </div>
                  <div class="valid-feedback cpass-y"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                  <label class="form-check-label" for="invalidCheck3">
                    I agree to the terms and conditions of TFO
                  </label>
                  <div class="invalid-feedback">
                    You must agree before submitting.
                  </div>
                  <div class="valid-feedback">
                    You can Sign Up now!
                  </div>
                </div>
              </div>
              <button class="btn btn-light log-btn" type="submit">Sign Up</button>
              <a href="#" id="login" style="float: right; padding-top: 20px; text-decoration: none; color: black;">Have an account? Login</a>
            </form>
            </div>
            <!--login-form-->
            <div class="login-form" style="padding-top: 17%;">
              <form method="POST">
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationServerUsernameLog">Email</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                      </div>
                      <!--input type="email" class="form-control is-invalid" id="validationServerUsernameLog" name="username_login" placeholder="Username" aria-describedby="inputGroupPrepend3" required-->
                      <input type="text" class="form-control is-invalid" id="validationServerUsernameLog" name="username_login" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                      <div class="invalid-feedback usernamelog-n">
                        Please provide a valid username.
                      </div>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationServer05">Password</label>
                    <input type="password" class="form-control is-invalid" id="validationServer05" name="password_login" placeholder="Password" required>
                    <div class="invalid-feedback">
                      Please provide a valid password.
                    </div>
                  </div>
                </div>
                <button class="btn btn-light log-btn" type="submit"  onclick="authen()">Login</button>
                <a href="#" id="reg" style="float: right; padding-top: 20px; text-decoration: none; color: black;">Don't have an account? Sign Up</a>
              </form>
            </div>

        </div>
    </body>
</html>
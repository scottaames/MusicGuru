<!--Developed by Adam Schilperoort https://www.adamschilperoort.com -->
<!DOCTYPE html>
<html lang="en">

<head>


  <title>User Login</title>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <!-- <meta name="google-site-verification" content="02d0b66dbb181201"> -->

    <!-- Bootstrap Css -->
    <link href="bootstrap-assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style -->
    <link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="plugins/Lightbox/dist/css/lightbox.css" rel="stylesheet">
    <link href="plugins/Icons/et-line-font/style.css" rel="stylesheet">
    <link href="plugins/animate.css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- Icons Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style type="text/css">
      a.spotify-login {
        display:inline-block;
        color:#FFFFFF;
        border:1px solid #CCC;
        background:#1DB954;
        box-shadow: 0 0 5px -1px rgba(0,0,0,0.2);
        cursor:pointer;
        vertical-align:middle;
        max-width: 100%;
        padding: 5px;
        text-align: center;
      }
      a.create-account {
        display:inline-block;
        color:#FFFFFF;
        border:1px solid #CCC;
        background:#000000;
        box-shadow: 0 0 5px -1px rgba(0,0,0,0.2);
        cursor:pointer;
        vertical-align:middle;
        max-width: 100%;
        padding: 5px;
        text-align: center;
      }
    </style>

<body width = "device-width">

    <!-- Preloader
	============================================= -->
    <div class="preloader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>
    <!-- Header
	============================================= -->
  <?php
  // Init - redirect user to home page if already signed in
  require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "3a-config.php";
  if (is_array($_SESSION['user'])) {
    header("Location: Profile.html");
    die();
  }
  ?>

    <!-- Welcome
	============================================= -->
    <section id="welcome">
        <div class="container">
          <img src="img/logo/MG-logo.png" height="20%" width="20%"/>
            <h2><span>Login:</span></h2>
            <hr class="sep">

            <form class ="Login" id="login-form" onsubmit="return login();" />
              <label for="login_email">Email</label>
              <input type="email" id="login-email" required value="admin@test.com"/>
              <label for="login_password">Password</label>
              <input type="password" id="login-password" required value="123456"/>
              <input type="submit" value="Sign In"/>
            </form>
            <br>
            <img src="img/logo/Spotify_Icon_CMYK_Green.png" height="35" width="35"/><a class="spotify-login" href="localhost:8888" target="_blank">Login with Spotify</a>
            <a class="create-account" href="2a-register.html">Create Account</a> <img src="img/logo/MG-logo.png" height="35" width="35"/>

        </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-assets/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- JS PLUGINS -->
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="plugins/countTo/jquery.countTo.js"></script>
    <script src="plugins/inview/jquery.inview.min.js"></script>
    <script src="plugins/Lightbox/dist/js/lightbox.min.js"></script>
    <script src="plugins/WOW/dist/wow.min.js"></script>
    <!-- GOOGLE MAP -->
    <!-- AIzaSyDbi84W3b2-Gqi6SI1bRLFWzsvQfvXGIIQ GOOGLE API KEY -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
</body>

</html>

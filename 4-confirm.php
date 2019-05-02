<?php
/* [VALIDATION CHECK] */
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "3a-config.php";
$pass = false;
if (is_numeric($_GET['id']) && isset($_GET['h'])) {
  require PATH_LIB . "3b-database.php";
  $pdoUsers = new Users();
  $pass = $pdoUsers->verify($_GET['id'], $_GET['h']);
}

/* [THE HTML] */ ?>
<!DOCTYPE html>
<html>
  <body>
  <?php if ($pass) { ?>
    <h3>THANK YOU!</h3>
    <p>Your account is now active.</p>
  <?php } else { ?>
    <h3>ERROR</h3>
    <p>We encountered some problems while activating your account.</p>
  <?php } ?>
  </div>
</body>
</html>

<?php
global $db;
require "dbConnect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>Login</title>
  <link rel="stylesheet" href="style.php">
</head>
<body>



<section class='wrapper'>
  <div class='hero'>
  </div>
  <div class='content'>
    <h1 class='h1--scalingSize' data-text='An awesome title'>Welcome back</h1>
    <div class="login-container">
        <form action="login.php" method="post">
            <input type="text" placeholder="Username" id="name" required>
            <input type="password" placeholder="Password" id="passwd" required>
            <button type="submit"  >Login</button>
        </form>
        <p class="signup-link">Don't have an account? <a href="join.php">Sign up</a></p>
    </div>
  </div>
</section>



<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);  ?>

</body>
</html>








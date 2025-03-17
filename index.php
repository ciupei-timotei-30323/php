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

<?php

  $db = mysqli_connect( "mysql-38065637-timociupei-7099.c.aivencloud.com","avnadmin", "AVNS_trJDZyuHOMIki9yMTNa","defaultdb", 10056);

?>

<section class='wrapper'>
  <div class='hero'>
  </div>
  <div class='content'>
    <h2 class='h1--scalingSize' data-text='An awesome title'>Welcome back</h1>
    <div class="login-container">
        <form>
            <input type="text" placeholder="Username" required>
            <input type="password" placeholder="Password" required>
            <button type="submit"  >Login</button>
        </form>
        <p class="signup-link">Don't have an account? <a href="welcomeScreen.php">Sign up</a></p>
    </div>
  </div>
</section>



<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);  ?>

</body>
</html>








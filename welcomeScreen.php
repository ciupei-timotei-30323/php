<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>Sign-up</title>
  <link rel="stylesheet" href="style.php">
</head>
<body>


<section class='wrapper'>
  <div class='hero'>
  </div>
  <div class='content'>
    <h2 class='h1--scalingSize' data-text='An awesome title'>Join</h1>
    <div class="login-container">
        <form>
            <input type="text" placeholder="Choose a username" autocomplete="off" required>
            <input type="email" placeholder="Type your email" autocomplete="off"  required>
            <input type="password" placeholder="Choose a password" required>
            <input type="password" placeholder="Retype the password"  required>
            <button type="submit">Sign-up</button>
        </form>
        <p class="signup-link">Already have an account? <a href="/index.php">Log in</a></p>
    </div>
  </div>
</section>





<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);  ?>

</body>
</html>

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



<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);  
?>

<?php
  $db = mysqli_connect( "mysql-38065637-timociupei-7099.c.aivencloud.com","avnadmin", "AVNS_trJDZyuHOMIki9yMTNa","defaultdb", 10056);
  mysqli_error($db);

  $errMsg = "";
  $param_username = "";
  $username = "";
  $result = "";

  // Sort of works
  // I need to make such that when I refresh the page, the query doesn't start again 
  // if the username field ain't empty
  if(empty(trim($_POST["name"])))
  {
    $errMsg = "Please provide a username";
  }
  else
  {

      $param_username = trim($_POST["name"]);
      $stmt = "SELECT name FROM users WHERE name ='" . $param_username . "'";
      // Attempt to execute the prepared statement
      $result = mysqli_query($db,$stmt);

      if($result->num_rows > 1)
      {
        $errMsg = "Username already exists";
      }
      else
      {
        $username = $param_username;
        // $errMsg = "User is valid";
      }

  }



?>


<section class='wrapper'>
  <div class='hero'>
  </div>
  <div class='content'>
    <h2 class='h1--scalingSize' data-text='An awesome title'>Join</h1>
    <div class="login-container">
        <form action="welcomeScreen.php" method="POST">
            <input type="text" placeholder="Choose a username" autocomplete="off" id="name" name="name" required>

            <input type="email" placeholder="Type your email" autocomplete="off"  id="email" name="email" required>
            <input type="password" placeholder="Choose a password" id="passwd" name="passwd" required>
            <input type="password" placeholder="Retype the password" id="repasswd" name="repasswd" required>
            <button type="submit">Sign-up</button>

            <!-- The error message -->
            <p hidden="<?php echo ((strcmp("", $errMsg) == 0) ? "true" : "false") ?>"><?php echo $errMsg ?></p>

        </form>
        <p class="signup-link">Already have an account? <a href="index.php">Log in</a></p>
    </div>
  </div>
</section>





</body>
</html>

<?php

class joinScreen
{

    private $htmlCodeValid = <<<'EOD'
<section class='wrapper'>
  <div class='hero'>
  </div>
  <div class='content'>
    <h2 class='h1--scalingSize' data-text='An awesome title'>Join</h2>
    <div class="login-container">
        <form action="signup.php" method="POST">
            <input type="text" placeholder="Choose a username" autocomplete="off" id="name" name="name" required>

            <input type="password" placeholder="Choose a password" id="passwd" name="passwd" required>
            <input type="password" placeholder="Retype the password" id="repasswd" name="repasswd" required>
            <button type="submit">Sign-up</button>
        </form>
        <p class="signup-link">Already have an account? <a href="index.php">Log in</a></p>
    </div>
  </div>
</section> 
EOD;

    private $htmlCodeInvalidUser = <<<'EOD'
<section class='wrapper'>
  <div class='hero'>
  </div>
  <div class='content'>
    <h2 class='h1--scalingSize' data-text='An awesome title'>Join</h2>
    <div class="login-container">
        <form action="signup.php" method="POST">
            <input type="text" placeholder="Choose a username" autocomplete="off" id="name" name="name" required>

            <input type="password" placeholder="Choose a password" id="passwd" name="passwd" required>
            <input type="password" placeholder="Retype the password" id="repasswd" name="repasswd" required>
            <button type="submit">Sign-up</button>
        </form>
        <p class="loginError">Username already taken</p>
        <p class="signup-link">Already have an account? <a href="index.php">Log in</a></p>
    </div>
  </div>
</section> 
EOD;


    private $htmlCodeUnmatchedPasswds = <<<'EOD'

<section class='wrapper'>
  <div class='hero'>
  </div>
  <div class='content'>
    <h2 class='h1--scalingSize' data-text='An awesome title'>Join</h2>
    <div class="login-container">
        <form action="signup.php" method="POST">
            <input type="text" placeholder="Choose a username" autocomplete="off" id="name" name="name" required>

            <input type="password" placeholder="Choose a password" id="passwd" name="passwd" required>
            <input type="password" placeholder="Retype the password" id="repasswd" name="repasswd" required>
            <button type="submit">Sign-up</button>
        </form>
        <p class="loginError">Passwords do not match</p>
        <p class="signup-link">Already have an account? <a href="index.php">Log in</a></p>
    </div>
  </div>
</section> 

EOD;



    public function showInvalidUserScreen() : mixed
    {
        return $this->htmlCodeInvalidUser;
    }

    public function showValidUserScreen() : mixed
    {
        return $this->htmlCodeValid;
    }

    public function showUnmatchedPsswdScreen() : mixed
    {
        return $this->htmlCodeUnmatchedPasswds;
    }

}
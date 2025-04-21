<?php

class loginScreen
{

    private string $htmlCodeValidLogin = <<<'EOD'

<section class='wrapper'>
  <div class='hero'>
  </div>
  <div class='content'>
    <h1 class='h1--scalingSize' data-text='An awesome title'>Welcome back</h1>
    <div class="login-container">
        <form action="login.php" method="post">
            <input type="text" placeholder="Username" autocomplete="off" name="name" required>
            <input type="password" placeholder="Password" name="passwd" required>
            <button type="submit">Login</button>
        </form>
        <p class="signup-link">Don't have an account? <a href="join.php">Sign up</a></p>
    </div>
  </div>
</section>

EOD;


    private string $htmlCodeInvalidUser = <<<'EOD'

<section class='wrapper'>
  <div class='hero'>
  </div>
  <div class='content'>
    <h1 class='h1--scalingSize' data-text='An awesome title'>Welcome back</h1>
    <div class="login-container">
        <form action="login.php" method="post">
            <input type="text" placeholder="Username" autocomplete="off" name="name" required>
            <input type="password" placeholder="Password" name="passwd" required>
            <button type="submit">Login</button>
        </form>
        <p class="loginError">Wrong username</p>
        <p class="signup-link">Don't have an account? <a href="join.php">Sign up</a></p>
    </div>
  </div>
</section>

EOD;

    private string $htmlCodeInvalidPasswd = <<<'EOD'

<section class='wrapper'>
  <div class='hero'>
  </div>
  <div class='content'>
    <h1 class='h1--scalingSize' data-text='An awesome title'>Welcome back</h1>
    <div class="login-container">
        <form action="login.php" method="post">
            <input type="text" placeholder="Username" autocomplete="off" name="name" required>
            <input type="password" placeholder="Password" name="passwd" required>
            <button type="submit">Login</button>
        </form>
        <p class="loginError">Wrong Password</p>
        <p class="signup-link">Don't have an account? <a href="join.php">Sign up</a></p>
    </div>
  </div>
</section>

EOD;

    public function getHtmlCodeValidLogin(): string
    {
        return $this->htmlCodeValidLogin;
    }

    public function getHtmlCodeInvalidUser(): string
    {
        return $this->htmlCodeInvalidUser;
    }

    public function getHtmlCodeInvalidPasswd(): string
    {
        return $this->htmlCodeInvalidPasswd;
    }






}
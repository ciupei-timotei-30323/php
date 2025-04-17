<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #e8f5e9;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}


p.loginError {
color: red;
font-weight: bold;
animation: jiggle 0.4s ease-in-out;
}

/* Jiggle animation */
@keyframes jiggle {
0% { transform: translateX(0); }
15% { transform: translateX(-5px); }
30% { transform: translateX(5px); }
45% { transform: translateX(-5px); }
60% { transform: translateX(5px); }
75% { transform: translateX(-5px); }
100% { transform: translateX(0); }
}


.login-container {
    background:rgba(46, 125, 50, 0.39);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    color: white;
    width: 90%;
    max-width: 350px;
}
h2 {
    user-select: none;
    margin-bottom: 20px;
}
input {
    width: calc(100% - 20px);
    padding: 10px;
    margin: 10px 0;
    border: none;
    border-radius: 4px;
    display: block;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #1b5e20;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background 0.3s ease;
}
button:hover {
    background-color: #388e3c;
}
.signup-link {
    margin-top: 10px;
    font-size: 14px;
    color: #000;
}
.signup-link a {
    color: #000000;
    text-decoration: underline;
    text-decoration-style: double;
}
.signup-link a:hover {
    text-decoration: underline;
    color: white;
    font-weight: bold;
}

a {
  user-select: none;
}

a:hover {
    font-weight: bold;

}




@media (max-width: 400px) {
    .login-container {
        padding: 15px;
    }
    input {
        padding: 8px;
    }
    button {
        padding: 8px;
        font-size: 14px;
    }
}



/*houdini*/
@property --blink-opacity {
    syntax: "<number>";
    inherits: false;
    initial-value: 1;
  }
  
  /* #fallback @keyframes blink-animation {
    0%,
    100% {
      opacity: 1;
    }
    50% {
      opacity: 0;
    }
  }*/
  
  @keyframes blink-animation {
    0%,
    100% {
      opacity: var(--blink-opacity, 1);
    }
    50% {
      opacity: 0;
    }
  }



  /*houdini*/
  
  /*base*/
  :root {
    font-family: Inter, sans-serif;
  
    --stripe-color: #fff;
    --bg: var(--stripe-color);
    --maincolor: var(--bg);
  }
  
  body {
    width: 100cqw;
    min-height: 100cqh;
    display: flex;
    place-content: center;
    place-items: flex-start center;
    background: var(--bg);
  }
  
  /*custom*/
  
  @keyframes smoothBg {
    from {
      background-position: 50% 50%, 50% 50%;
    }
    to {
      background-position: 350% 50%, 350% 50%;
    }
  }
  
  .wrapper {
    width: 100%;
    height: auto;
    position: relative;
  }
  
  .hero {
    width: 100%;
    height: 100%;
    min-height: 100vh;
    position: relative;
    display: flex;
    place-content: center;
    place-items: center;
    --stripes: repeating-linear-gradient(
        <?php 
        $randVal = rand(0,100);
        echo "{$randVal}deg," ?>
      var(--stripe-color) 0%,
      var(--stripe-color) 7%,
      transparent 10%,
      transparent 12%,
      var(--stripe-color) 16%
    );
  
    --rainbow: repeating-linear-gradient(
      100deg,
      #01200F 10%,
      #104F55 15%,
      #32746D 20%,
      #9EC5AB 25%,
      #01200F 30%
    );
    background-image: var(--stripes), var(--rainbow);
    background-size: 1%, 1%;
    background-position: 50% 50%, 50% 50%;
  
    filter: blur(40px) invert(100%);
  
    mask-image: radial-gradient(ellipse at 100% 0%, black 40%, transparent 80%);
    &::after {
      content: "";
      position: absolute;
      inset: 0;
      background-image: var(--stripes), var(--rainbow);
      background-size: 800%, 200%;
      animation: smoothBg 160s linear infinite;
      background-attachment: fixed;
      mix-blend-mode: difference;
    }
  }
  
  :has(:checked) {
    --stripe-color: #000;
  }
  :has(:checked) .hero,
  :has(:checked) .hero::after {
    filter: blur(10px) opacity(50%) saturate(200%);
  }
  
  .content {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    display: flex;
    place-content: center;
    place-items: center;
    flex-flow: column;
    gap: 4.5%;
    text-align: center;
    mix-blend-mode:difference;
    -webbkit-mix-blend-mode: difference;
    filter: invert(1);
  }
  
  .h1--scalingSize {
    font-size: calc(1rem - -5vw);
    position: relative;
  }
  
  #switch {
    appearance: none;
    -webkit-appearance: none;
    opacity: 0;
  }

  
  @keyframes animSwitch {
    50% {
      transform: scale(1.2);
      font-weight: 900;
    }
  }
  




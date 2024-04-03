<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AnganAchar Website</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      overflow: hidden;
    }
    
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    h1 {
      margin: 0;
      padding: 0;
      font-size: 48px;
      color: #333;
      cursor: pointer;
      transition: color 0.3s ease;
    }

    h1:hover {
      color: #ff6600;
      animation: shake 0.5s ease;
    }

    @keyframes shake {
      0% { transform: translateX(0); }
      25% { transform: translateX(-5px); }
      50% { transform: translateX(5px); }
      75% { transform: translateX(-5px); }
      100% { transform: translateX(0); }
    }

    .buttons {
      margin-top: 30px;
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      margin: 5px;
      background-color: #ff6600;
      color: #fff;
      font-size: 18px;
      text-decoration: none;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #e65c00;
    }

    .background-animation {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: -1;
    }

    .background-animation div {
      position: absolute;
      width: 30px;
      height: 30px;
      background-color: #77b300; /* Green mango color */
      border-radius: 50%;
      animation: backgroundMove 10s linear infinite;
      opacity: 0.7;
    }

    .background-animation div.carrot {
      background-color: #ff6600; /* Carrot color */
    }

    .background-animation div.garlic {
      background-color: #f5f5f5; /* Garlic color */
    }

    .background-animation div:nth-child(1) {
      left: 10%;
      bottom: -5%;
      animation-delay: 0s;
    }

    .background-animation div:nth-child(2) {
      left: 20%;
      bottom: -10%;
      animation-delay: 1s;
    }

    .background-animation div:nth-child(3) {
      left: 30%;
      bottom: -15%;
      animation-delay: 2s;
    }

    .background-animation div:nth-child(4) {
      left: 40%;
      bottom: -20%;
      animation-delay: 3s;
    }

    .background-animation div:nth-child(5) {
      left: 50%;
      bottom: -25%;
      animation-delay: 4s;
    }

    .background-animation div:nth-child(6) {
      left: 60%;
      bottom: -20%;
      animation-delay: 5s;
    }

    .background-animation div:nth-child(7) {
      left: 70%;
      bottom: -15%;
      animation-delay: 6s;
    }

    .background-animation div:nth-child(8) {
      left: 80%;
      bottom: -10%;
      animation-delay: 7s;
    }

    .background-animation div:nth-child(9) {
      left: 90%;
      bottom: -5%;
      animation-delay: 8s;
    }

    @keyframes backgroundMove {
      0% {
        transform: translateY(0) scale(1);
        opacity: 0.7;
      }
      50% {
        opacity: 0.3;
      }
      100% {
        transform: translateY(-800px) scale(2);
        opacity: 0;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome to Achar Angan</h1>
    <div class="buttons">
      <a class="button" href="login.php">Login</a>
      <a class="button" href="register.php">Register</a>
    </div>
  </div>
  <div class="background-animation">
    <?php for ($i = 1; $i <= 3; $i++) { ?>  
      <div></div>
    <?php } ?>
    <?php for ($i = 1; $i <= 3; $i++) { ?>
      <div class="carrot"></div>
    <?php } ?>
    <?php for ($i = 1; $i <= 3; $i++) { ?>
      <div class="garlic"></div>
    <?php } ?>
  </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <title>planet spark</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    nav {
      width: 100%;
      height: 60px;
      background: black;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      text-transform: uppercase;
      top: 0;
      position: sticky;
    }

    nav .logo {
      width: 25%;
      text-align: center;
      color: #00b894;
      font-family: cursive;

    }

    nav .menu {
      width: 45%;
      text-align: center;
      display: flex;
      justify-content: space-around;
    }

    nav .menu a {
      width: 25%;
      text-decoration: none;
      color: white;
      font-weight: bold;
    }

    nav .menu a:first-child {
      color: #00b894;
    }        
  </style>
</head>

<body>
  <nav menu="me">
    <div class="logo">
      <h1 class="animated infinite bounce heartBeat">Planet Spark</h1>
    </div>
    <div class="menu">
      <a href="Admin.php"> Home</a>
      <a href="admission.php">ADMISSION</a>
      <a href="style/contact_us.html">contact</a>
      <a href="style/about_us.html">About us</a>
    </div>
  </nav>
</body>

</html>
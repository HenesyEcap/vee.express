<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Homepage</title>
  <style>

    /* Reset default styles */
    body, html {
      margin: 0;
      padding: 0;
    }

    /* Set background video */
    #background-video {
      position: fixed;
      right: 0;
      bottom: 0;
      min-width: 100%;
      min-height: 100%;
      z-index: -1;
    }

    /* Navigation bar styles */
    nav {
      position: fixed;
      top: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
      z-index: 1;
    }

    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    nav ul li {
      margin-right: 30px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-size: 15px;
      font-family: Arial, Helvetica, sans-serif;
      font-weight: bold;
    }

    nav ul li a:hover {
      color: lightblue;
    }

    /* Logo styles */
    .logo {
      display: flex;
      align-items: center;
    }

    .logo img {
      width: 40px;
      height: 40px;
      margin-right: 10px;
    }

    .logo span {
      color: #fff;
      font-size: 20px;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    /* Main content */
    .content {
      padding-top: 100px;
      text-align: center;
      color: #fff;
    }

    .content h1 {
      font-size: 36px;
      margin-bottom: 20px;
      text-shadow: black 0 -2px;
    }

 
    /* Centered title */
    .centered-title {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 30px;
      color: #fff;
      text-align: center;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
     font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
  </style>

</head>
<body>
 <link rel="shortcut icon" type="image/png" href="https://i.pinimg.com/750x/00/19/54/001954a9bb6aca63d7938b988a892022.jpg">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <video id="background-video" src="https://vod-progressive.akamaized.net/exp=1686343422~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F3626%2F17%2F443134372%2F1940911886.mp4~hmac=d92ba697b9cfb12d1a9a9ad7ce9e58569727bb1d148139944346e2af410a6ccb/vimeo-prod-skyfire-std-us/01/3626/17/443134372/1940911886.mp4?filename=file.mp4" autoplay muted loop></video>

  <nav>
    <div class="logo">
      <img src="assets/images/3.png" alt="Logo">
      <span>VEE EXPRESS</span>
    </div>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="trains.php">Trains</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </nav>

  <div class="content">
    <h1>Welcome to Cagayan de Oro</h1>
    <h2>Railway Station</h2>
  </div>
  <div class="centered-title">
    <h1>where your journey is our priority!</h1>
  </div>
</body>
</html>


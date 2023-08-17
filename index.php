<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/index.css">
    <title>Login</title>
  </head>
  <body>
    <script src="js/home.js"></script>
    <div class="main">
      <form smethod="post">
      <div class="heading">
      <img src="images/login.png" height="95px" width="95px"><img>
      <div class="details">
      <legend>Username
      <input type="text" id="username" placeholder="Username" class="in" autofocus required/>
      </legend><br>
      <legend>Password
      <input type="password" id="password" class="in" placeholder="password" required/>
      </legend>
      <br>
      <button type="submit"  class="btn" onclick="home()">Login</button>
</form>
    </div>
  </body>
</html>
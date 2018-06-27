<?php
session_start();
 ?>

<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anaheim|Dosis" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
<section id = "main">

<header>
<h1><a href = "home.html">Perspective</a></h1>
</header>

<form action = "assets/includes/login-inc.php" method = "POST">

  <div id="search-container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username/e-mail" name="uname" required>

	<br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type ="submit" name = "submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div id="search-container" style="background-color:#f1f1f1">
    <a href = "home.html">Cancel</a>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

<p>Don't have an account? <a href = "signUp.php">Sign up</a></p>

</section>
</body>

</html>

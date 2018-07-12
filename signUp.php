<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<link rel = "stylesheet" href = "assets/css/main.css"></link>
</head>
<body>

<header>
<h1><a href = "home.php">Perspective</a></h1>
</header>

<form action="assets/includes/signUp-inc.php" method = "POST">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in the following information to create an account.</p>
    <hr>

    <div class = "registerInput">
    <label for="usr"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="usr" required>
    </div>

    <div class = "registerInput">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    </div>

    <div class = "registerInput">
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
    </div>
<!--
    <div class = "registerInput">
    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="psw-repeat" required>
    </div>
-->
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <div class="clearfix">
      <a href = "home.php">Cancel</a>
      <button type="submit" name = "submit">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>

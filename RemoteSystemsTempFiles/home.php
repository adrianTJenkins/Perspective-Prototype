<?php
session_start();
 ?>

<html>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anaheim|Dosis" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <section id="main">
        <header>
        	<script src="assets/js/search.js" type="text/javascript"></script>
    			<script src="https://apis.google.com/js/client.js?onload=onClientLoad" type="text/javascript"></script>
    			<h1><a href = "home.php">Perspective</a></h1>
            </header>
            </section>

            <?php
              if(isset($_SESSION['u_id'])) {
                echo '<form action = "assets/includes/logout-inc.php" method = "POST">
                  <button type = "submit" id = "submit" name = "submit">Log out</button>
                </form>';
              }

              else {
                echo '<form action = "assets/includes/login-inc.php" method = "POST">

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
                    <a href = "home.php">Cancel</a>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                  </div>
                </form>';
              }

              //<p>Don't have an account? <a href = "signUp.php">Sign up</a></p>';
            ?>

            <div id = "homeSearch">
            <h3>Search for a live event.</h3>
    			<form action = "viewer.html">
      				<input id = "keyword" autofocus = "autofocus" type="text" onkeyup = "search()" placeholder="Enter keywords..." name = "q">
      				<button id = "sub" onclick = "" type="submit"><i class="fa fa-search"></i></button>
    			</form>

  			</div>
  	</body>

</html>

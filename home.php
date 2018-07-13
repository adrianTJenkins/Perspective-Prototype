<?php
//session_start();
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
            <div id = "adminLogout">
            <?php
              if(isset($_SESSION['u_id'])) {
                echo $_SESSION['u_name'].'<form action = "assets/includes/logout-inc.php" method = "POST">
                  <a href = "producer.php">Producer Page</a><br>
                  <button type = "submit" name = "submit">Log out</button>
                </form>';
              }
              ?>
</div>
<?php
            if(!(isset($_SESSION['u_id']))) {
                echo '
                  <p id = "adminLogin">Are you a producing your own broadcast as an <strong>administrater</strong>? <a href = "signIn.php">Sign in</a><br>No account? <a href = "signUp.php">Sign up</a></p>';
              }

              //<p>Don't have an account? <a href = "signUp.php">Sign up</a></p>';
            ?>

            <div id = "homeSearch">
            <h3>Search for a live event.</h3>
    			<form action = "multi.php">
      				<input id = "keyword" autofocus = "autofocus" type="text" onkeyup = "search()" placeholder="Find broadcasts..." name = "q">
      				<button id = "sub" onclick = "" type="submit"><i class="fa fa-search"></i></button>
              <a href = "viewer.php">Single View Page</a><br>
    			</form>

  			</div>
  	</body>

</html>

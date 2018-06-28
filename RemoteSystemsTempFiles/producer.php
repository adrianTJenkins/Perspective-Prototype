<?php
session_start();
 ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anaheim|Dosis" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/view.css">
</head>

<body>
    <section id="main">
        <header>
        	<script src="search.js" type="text/javascript"></script>
    			<script src="https://apis.google.com/js/client.js?onload=onClientLoad" type="text/javascript"></script>
            <h1><a href ="home.php">Perspective</a></h1>

        	<div id="search-container">
    			<form>
      				<input id = "keyword" type="text" onkeyup = "search()" placeholder="Enter keywords..." name = "q">
      				<button type="submit"><i class="fa fa-search"></i></button>
    			</form>

  			</div>


        <?php
          if(isset($_SESSION['u_id'])) {
            echo '<form action = "assets/includes/logout-inc.php" method = "POST">
              <button type = "submit" name = "submit">Log out</button>
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


        </header>
    </section>
    <div id=playback>
        <section id="videos">

            <script>
            // 2. This code loads the IFrame Player API code asynchronously.
            var tag = document.createElement('script');

            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

            // 3. This function creates an <iframe> (and YouTube player)
            //    after the API code downloads.
            var player;

            // 4. The API will call this function when the video player is ready.
            function onPlayerReady(event) {
                event.target.playVideo();
                event.target.mute();
            }
            </script>
        </section>
    </div>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/player.js"></script>

	<video id = "bigPlayer" controls style="width:640px;height:360px;"></video>
    <script>
	var youtubeSearch = null;
    function searchCompleted(response) {
		youtubeSearch = response;
		for (var k=0; k<youtubeSearch.items.length; k++)
		{
			$('#videos').append('<div class="vid" id="player' + k+ '"> </div>');
            var player = new YT.Player('player' + k, {
                height: '60px',
                width: '90px',
                videoId: youtubeSearch.items[k].id.videoId,
                events: {
                    'onReady': onPlayerReady,
                }
            });
            var j = k+1;
           $('#videos').append('<button class = "camera" onclick = "feedId("#player '+k+'")">Camera ' + j+ '</button>');
		}
    }
    </script>

    <?php
      if(isset($_SESSION['u_id'])) {
        echo "You are logged in";
      }
    ?>

</body>
</html>

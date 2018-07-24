<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anaheim|Dosis" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/view.css">
    <script src = "assets/js/comm.js"></script>
</head>

<body>
    <section id="main">
        <header>
        	<!--<script src="assets/js/search.js" type="text/javascript"></script> -->
    			<script src="https://apis.google.com/js/client.js?onload=onClientLoad" type="text/javascript"></script>
            <h1><a href = "index.html">Perspective</a></h1><!-- Perspective Header -->

        	<!--<div id="search-container">
    			<form>
      				<input id = "keyword" type="text"  placeholder="Enter keywords..." name = "q">
      				<button type="submit"><i class="fa fa-search"></i></button>
    			</form>

  			</div> -->

        </header>

    </section>

    <script src="assets/js/player.js" type="text/javascript">console.log(a);</script>


    <section id="broadcast">
    <iframe id = "vidPlayer" src = "" alow="autoplay"></iframe>

    <a id="mute-button" class="playerControls" href="#"><span class="fas fa-volume-up fa-3x"></span></a>

    <a id="rv-button" class="playerControls" href="#"><span class="fas fa-step-backward fa-3x"></span></a>

    <a id="play-button" class="playerControls" href="#"><span class="fas fa-play-circle fa-3x"></span></a>

    <a id="ff-button" class="playerControls" href="#"><span class="fas fa-step-forward fa-3x"></span></a>

    <a id="live-button" class="playerControls" href="#"><span class="fas fa-fast-forward fa-3x"></span></a>

    <div id="overVid" class="overlay">
      <a id="rv-button" href="#">Player Controls Disabled</a>



      <!-- &nbsp;
      <a id="live-button" href="#"><span class="fas fa-dot-circle fa-3x"></span></a> -->
    </div>
    <!--<div class="Video Title"><h2>Video Title</h2></div>-->
    <!-- <div class="producerInfo"><h3>Produced by: <a href="#">justpac</a></h3></div>
    <div class="streamerInfo"><h3>Streamed by: <a href="#">AJ</a></h3></div> -->
  </section>


  <script>
  // 2. This code loads the IFrame Player API code asynchronously.
  var tag = document.createElement('script');

  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  function onYouTubeApiLoad() {
      // This API key is intended for use only in this lesson.
      // See http://goo.gl/PdPA1 to get a key for your own applications.
      gapi.client.setApiKey('AIzaSyB6NHm3GnxowmCidVHMyx26tPrYdQguFyE');
      //search();
  }


  // 3. This function creates an <iframe> (and YouTube player)
  //    after the API code downloads.
  var player;

  function onYouTubePlayerAPIReady() {
    console.log("Loaded VidPlayer");
  // create the global player from the specific iframe (#vidPlayer)
    player = new YT.Player('vidPlayer', {
      events: {
      // call this function when player is ready to use
        'onReady': onPlayerReady
      }
    });
  }


  // 4. The API will call this function when the video player is ready.
  function onPlayerReady(event) {
      event.target.playVideo();
      event.target.unMute();

      var playButton = document.getElementById("play-button");
      playButton.addEventListener("click", function() {
      console.log("clicked play button");

      var playerState = player.getPlayerState();
      if(playerState == 2 || playerState == -1){ // If player paused
        player.playVideo();
        document.getElementById("play-button").innerHTML = '<span class="fas fa-pause-circle fa-3x">';
      } else if (playerState == 1){ // if player is playing
        player.pauseVideo();
        document.getElementById("play-button").innerHTML = '<span class="fas fa-play-circle fa-3x">';
      }

      });

      var muteButton = document.getElementById("mute-button");
      muteButton.addEventListener("click", function() {
      console.log("clicked mute button");

      if(player.isMuted()){ // If player paused
        player.unMute();
        document.getElementById("mute-button").innerHTML = '<span class="fas fa-volume-up fa-3x">';
      } else if(player.isMuted() == false){ // if player is playing
        player.mute();
        document.getElementById("mute-button").innerHTML = '<span class="fas fa-volume-off fa-3x">';
      }

      });

      var stepFButton = document.getElementById("ff-button");
      stepFButton.addEventListener("click", function() {
      console.log("clicked ff button");
      var t = player.getCurrentTime();
      console.log(t + " of " + player.getDuration());
      player.seekTo(t+10);
      });


      var stepRButton = document.getElementById("rv-button");
      stepRButton.addEventListener("click", function() {
      console.log("clicked rv button");
      var t = player.getCurrentTime();
      console.log(t);
      player.seekTo(t-10);
      });

      var toLiveButton = document.getElementById("live-button");
      toLiveButton.addEventListener("click", function() {
      console.log("clicked live button");
      var t = player.getCurrentTime();
      console.log(t);
      player.seekTo(t+player.getDuration());
      player.playVideo();
      });

      }
  </script>



<script>
  readPriorityID();
  setInterval(readPriorityID, 2000);
</script>

</body>
</html>

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
        	<script src="assets/js/search.js" type="text/javascript"></script>
    			<script src="https://apis.google.com/js/client.js?onload=onClientLoad" type="text/javascript"></script>
            <h1><a href = "home.php">Perspective</a></h1><!-- Perspective Header -->

        	<div id="search-container">
    			<form onsubmit = "search()">
      				<input id = "keyword" type="text"  placeholder="Enter keywords..." name = "q">
      				<button type="submit"><i class="fa fa-search"></i></button>
    			</form>

  			</div>


        </header>

    </section>

    <video id = "vidPlayer" width="999" height="500" controls>
  <source src="feedId()" type="video/mp4">
Your browser does not support the video tag.
</video>
    <!--
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
    <!-- Scripts
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/player.js"></script>

    <script>

	var youtubeSearch = null;
    function searchCompleted(response) {
		youtubeSearch = response;
		for (var k=0; k<youtubeSearch.items.length; k++)
		{
			$('#videos').append('<div class = "boxes"><div class="vid" id="player' + k+ '"> </div></div>');
            var player = new YT.Player('player' + k, {
                height: '60px',
                width: '90px',
                videoId: youtubeSearch.items[k].id.videoId,
                events: {
                    'onReady': onPlayerReady,
                }
            });
            var j = k+1;
           $('#player' + k).after('<button id = "cam' + k+'" class = "camera")">Camera ' + j+ '</button>');
		}
    bindCameraButtons();
    }
    </script>
-->
</body>
</html>

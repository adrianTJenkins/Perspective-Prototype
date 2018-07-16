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
        	<script src="assets/js/search.js" type="text/javascript"></script>
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
    <iframe id = "vidPlayer" src = ""></iframe>
    <div id="overVid" class="overlay"><a href="#">Player Controls</a></div>
    <div class="Video Title"><h2>Video Title</h2></div>
    <div class="producerInfo"><h3>Produced by: <a href="#">justpac</a></h3></div>
    <div class="streamerInfo"><h3>Streamed by: <a href="#">AJ</a></h3></div>
  </section>

<script>
  readPriorityID();
  setInterval(readPriorityID, 2000);
</script>

</body>
</html>

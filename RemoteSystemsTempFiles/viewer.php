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

    <script src="assets/js/player.js" type="text/javascript">console.log(a);</script>
    

    <video id = "vidPlayer" width="999" height="500" controls>

  <source src = <?php echo $vid ?>> type="video/mp4">
Your browser does not support the video tag.
</video>

</body>
</html>

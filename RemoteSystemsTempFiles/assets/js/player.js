function bindCameraButtons() {

setInterval(checkPlayers, 3000);

$('button[id^="cam"]').click(function(){

  console.log("button clicked!")
  var ele = ($(this).attr('id').substring(3)); // This will remove bigPlayer from everything, then add it back to the one player

  if($('.bigPlayer').length == 0) {
  console.log($('.bigPlayer').length);
    $('#player' + ele).addClass("bigPlayer");
    $('#player' + ele).parent().addClass("bigBox");
    $('.boxes').first().before($('.bigBox'));
    //code to feed Id to database
    console.log(feedId());
    var a = feedId();
  } else {
    if($('#player' + ele).hasClass("bigPlayer"))
    {
      var ret = parseInt(ele, 10);
      ret += 1;
      console.log(ret);
      $('#player' + ret).parent().before($('.bigBox'));
      $('#player' + ele).removeClass("bigPlayer");
      $('#player' + ele).parent().removeClass("bigBox");
      $('#player' + ele).parent().addClass("boxes");
    } else {

      console.log($('.bigPlayer').attr('id')); //Logs the id of the big player
      var ele2 = ($('.bigPlayer').attr('id').substring(6)); // grabs and stores the number from the id of the big player

      $('.vid').removeClass("bigPlayer"); //removes (downsizes) everything by removing the bigplayer class from all iframes
      $('#player' + ele).addClass("bigPlayer"); //adds (upsizes) the one player based on the button that was clicked

      // Moves the existing big player to it's rightful shrunken position
      var ret = parseInt(ele2, 10); // converts the substring number to an integer
      ret += 1; // adds one to the players position to represent the player it precedes
      console.log(ret);
      console.log(feedId());
      a = feedId();
      if($('#player9').parent().hasClass("bigBox")){
          $('.boxes').last().after($('.bigBox'));
        } else {
          $('#player' + ret).parent().before($('.bigBox'));
        }


      //$('#player' + ele2).parent().removeClass("bigBox"); // removes the bigbox class
      //$('#player' + ele2).parent().addClass("boxes"); // restores the boxes class

      $('.bigBox').addClass("boxes"); //restores the boxes class to all bigboxes
      $('.vid').parent().removeClass("bigBox"); // removes all bigboxes
      $('#player' + ele).parent().addClass("bigBox"); //Makes the currently clicked player the bigBox
      $('#player' + ele).parent().removeClass("boxes"); // Removes the boxes class from the current player
      $('.boxes').first().before($('.bigBox')); //Moves the bigBox before the first box
    }
  }
});
}

function findBigNum() {
  return ($('.bigPlayer').attr('id').substring(6));
}

// Feeds the VideoId to the Big Video Player
function feedId() {
  var num = findBigNum();
	return $('#player'+num).attr('src').substring(30,41);
}

function ajax_post() {

}

function checkPlayers (){

 console.log("Checking Videos...");
 for(var i = 0; i < $('.vid').length; i++){
   verifyLive(i);
   //console.log("Checking " + i);
 }
}

function verifyLive (num) {

 var q = $('#player' + num).attr('src').substring(30,41); // GEts the video ID from the src URL of the iframe
 //console.log("verifying");
 var request = gapi.client.youtube.videos.list({
   id: q,
   //part: 'status' // for testing status loop
   part: 'snippet' //used to retrieve liveBroadcastContent
 }).then(function(response) {
   var str = response.result.items[0].snippet.liveBroadcastContent;
   var status = false; // initially false set to true if the video is live

   if(str == "live"){status = true;}

   //var status = response.result.items[0].status.embeddable; // For testing only

   if(!status){
     console.log(num + " is " + status);

     $('#cam'+ num).prop('disabled',true);
   }

 });
}

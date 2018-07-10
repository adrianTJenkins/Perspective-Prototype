function updatePriorityID(str) { //call with updatePriorityID(String IDvalue)
if (str.length == 0) {
    return;
} else {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    };

    xmlhttp.open("GET", "assets/php/setvid.php?q=" + str, true);
    xmlhttp.send();
}
}


function readPriorityID() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          if(this.responseText.substring(30,41) != document.getElementById('vidPlayer').src.substring(30,41)){
            document.getElementById('vidPlayer').src = this.responseText;
        }
        else {

        }
      }
    };
    xmlhttp.open("GET", "assets/php/videoID.php", true);
    xmlhttp.send();
    console.log("readPriorityID is running");
}

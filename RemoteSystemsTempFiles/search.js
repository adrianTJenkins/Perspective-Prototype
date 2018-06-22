// Your use of the YouTube API must comply with the Terms of Service:
// https://developers.google.com/youtube/terms

// Helper function to display JavaScript value on HTML page.
function showResponse(response) {
    //var responseString = JSON.stringify(response, '', 2);
    //document.getElementById('response').innerHTML += responseString;
    searchCompleted(response);
}

// Called automatically when JavaScript client library is loaded.
function onClientLoad() {
    gapi.client.load('youtube', 'v3', onYouTubeApiLoad);
}

// Called automatically when YouTube API interface is loaded (see line 9).
function onYouTubeApiLoad() {
    // This API key is intended for use only in this lesson.
    // See http://goo.gl/PdPA1 to get a key for your own applications.
    gapi.client.setApiKey('AIzaSyB6NHm3GnxowmCidVHMyx26tPrYdQguFyE');
    search();
}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function search() {
    // Use the JavaScript client library to create a search.list() API call.
	var key = document.getElementById('keyword').value;
    var request = gapi.client.youtube.search.list({
        part: 'id',
        q: getParameterByName('q'),
        eventType: 'live',
        type: 'video',
		maxResults: '10'
    });
    // Send the request to the API server,
    // and invoke onSearchRepsonse() with the response.
    request.execute(onSearchResponse);
}

function getId(request) {
    return item.id.videoId;
}

// Called automatically with the response of the YouTube API request.
function onSearchResponse(response) {
    showResponse(response);
}

// Feeds the VideoId to the Big Video Player
function feedId(num) {
	$('#bigPlayer').attr('src', $(num).attr('src'));
}


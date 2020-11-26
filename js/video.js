var tag = document.createElement('script');
tag.src = "http://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
var player1;
var player2;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        videoId: 'M4Xrh8OP1Jk',
        host: 'https://www.youtube.com',
        playerVars: { 'autoplay': 0, 'controls': 0,'autohide':1,'wmode':'opaque','origin':'http://localhost/test/video.html' },
    });
    player1 = new YT.Player('player1', {
        videoId: 'M4Xrh8OP1Jk',
        host: 'https://www.youtube.com',
        playerVars: { 'autoplay': 0, 'controls': 0,'autohide':1,'wmode':'opaque','origin':'http://localhost/test/video.html' },
    });
    player2 = new YT.Player('player2', {
        videoId: 'tgbNymZ7vqY',
        host: 'https://www.youtube.com',
        playerVars: { 'autoplay': 0, 'controls': 0,'autohide':1,'wmode':'opaque','origin':'http://localhost/test/video.html' },
    });
}

$(document).on('mouseover', '#player', function() {
    player.playVideo();
});
$(document).on('mouseout', '#player', function() {
    player.pauseVideo();
});

$(document).on('mouseover', '#player1', function() {
    player1.playVideo();
});
$(document).on('mouseout', '#player1', function() {
    player1.pauseVideo();
});

$(document).on('mouseover', '#player2', function() {
    player2.playVideo();
});
$(document).on('mouseout', '#player2', function() {
    player2.pauseVideo();
});
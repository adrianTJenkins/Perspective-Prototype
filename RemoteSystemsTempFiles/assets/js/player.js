$('#mute-toggle').on('click', function() {
    var mute_toggle = $(this); // The button

    if (player.isMuted()) {
        player.unMute();
        mute_toggle.text('P1 mute');
    } else {
        player.mute();
        mute_toggle.text('P1 un-mute');
    }
});

$('#mute-toggle1').on('click', function() {
    var mute_toggle = $(this); // The button

    if (player1.isMuted()) {
        player1.unMute();
        mute_toggle.text('P2 mute');
    } else {
        player1.mute();
        mute_toggle.text('P2 un-mute');
    }
});

$('#mute-toggle2').on('click', function() {
    var mute_toggle = $(this); // The button

    if (player2.isMuted()) {
        player2.unMute();
        mute_toggle.text('P3 mute');
    } else {
        player2.mute();
        mute_toggle.text('P3 un-mute');
    }
});

$('#mute-toggle3').on('click', function() {
    var mute_toggle = $(this); // The button

    if (player3.isMuted()) {
        player3.unMute();
        mute_toggle.text('P4 mute');
    } else {
        player3.mute();
        mute_toggle.text('P4 un-mute');
    }
});

$('#mute-toggle4').on('click', function() {
    var mute_toggle = $(this); // The button

    if (player4.isMuted()) {
        player4.unMute();
        mute_toggle.text('P5 mute');
    } else {
        player4.mute();
        mute_toggle.text('P5 un-mute');
    }
});

$('#mute-toggle5').on('click', function() {
    var mute_toggle = $(this); // The button

    if (player5.isMuted()) {
        player5.unMute();
        mute_toggle.text('P6 mute');
    } else {
        player5.mute();
        mute_toggle.text('P6 un-mute');
    }
});

$('#mute-toggle6').on('click', function() {
    var mute_toggle = $(this); // The button

    if (player6.isMuted()) {
        player6.unMute();
        mute_toggle.text('P7 mute');
    } else {
        player6.mute();
        mute_toggle.text('P7 un-mute');
    }
});

$('#mute-toggle7').on('click', function() {
    var mute_toggle = $(this); // The button

    if (player7.isMuted()) {
        player7.unMute();
        mute_toggle.text('P8 mute');
    } else {
        player7.mute();
        mute_toggle.text('P8 un-mute');
    }
});
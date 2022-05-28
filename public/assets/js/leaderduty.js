function newrecord() {
    var leader_id = document.getElementById('leader_id').value;
    document.getElementById('leader_duty').reset();
    document.getElementById('leader_id_set').value = leader_id;
}


function follow_up_enable() {
    for (i = 1; i < 11; i++) {
        var follow_up_standard = "follow_up_standard_" + i;
        document.getElementById(follow_up_standard).disabled = false;
    }
}

function follow_up_disable() {
    for (i = 1; i < 11; i++) {
        var follow_up_standard = "follow_up_standard_" + i;
        document.getElementById(follow_up_standard).disabled = true;
    }
}

function support_enable() {
    for (i = 1; i < 9; i++) {
        var support_standard = "support_standard_" + i;
        document.getElementById(support_standard).disabled = false;
    }
}

function support_disable() {
    for (i = 1; i < 9; i++) {
        var support_standard = "support_standard_" + i;
        document.getElementById(support_standard).disabled = true;
    }
}

function elementary_enable() {
    for (i = 1; i < 6; i++) {
        var elementary_standard = "elementary_standard_" + i;
        document.getElementById(elementary_standard).disabled = false;
    }
}

function elementary_disable() {
    for (i = 1; i < 6; i++) {
        var elementary_standard = "elementary_standard_" + i;
        document.getElementById(elementary_standard).disabled = true;
    }
}

function image_upload_enable() {
    for (i = 1; i < 4; i++) {
        var leader_message = "leader_message_" + i;
        document.getElementById(leader_message).disabled = false;
    }
    document.getElementById('leader_reply_message').disabled = false;
}

function image_upload_disable() {
    for (i = 1; i < 4; i++) {
        var leader_message = "leader_message_" + i;
        document.getElementById(leader_message).disabled = true;
    }
    document.getElementById('leader_reply_message').disabled = true;
}

function withdrawn_number_enable() {
    document.getElementById('withdrawn_number').disabled = false;
}

function withdrawn_number_disable() {
    document.getElementById('withdrawn_number').disabled = true;
}

function news_Check() {
    var newsLeaderSelected = document.querySelector('input[name="news_leader"]:checked');
    var newsDiscussionSelected = document.querySelector('input[name="news_discussion"]:checked');
    var newsWritingSelected = document.querySelector('input[name="news_writing"]:checked');
    if (newsDiscussionSelected == null || newsWritingSelected == null || newsLeaderSelected == null) {
        document.getElementById('error_msg').innerHTML = " this filed is required"
    }
}


$(document).ready(function() {
    $("#newselect").on('change', (function() {
        var valueselect = $("#newselect").val();
        if (valueselect == 'empty') {
            $('#leader_select').hide();
            $('#discussion_select').hide();
            $('#writing_select').hide();
        }
        if (valueselect == 'leader') {
            $('#leader_select').show();
            $('#discussion_select').hide();
            $('#writing_select').hide();
            x
        }
        if (valueselect == "discussion") {
            $('#leader_select').hide();
            $('#discussion_select').show();
            $('#writing_select').hide();
        }
        if (valueselect == "writing") {
            $('#leader_select').hide();
            $('#discussion_select').hide();
            $('#writing_select').show();
        }
    }));

    if ($('.leader').length > 0) {
        $('.news_leader').attr('required', 'required');
    }

    if ($('.discussion').length > 0) {
        $('.news_discussion').attr('required', 'required');

    }
    if ($('.writing').length > 0) {
        $('.news_writing').attr('required', 'required');

    }

    // $('.form_hidden').hide();
    // $('#leader_id').on('change', function() {
    //     let id = $(this).val();
    //     $('.form_hidden').hide();
    //     $('#leader_duty_' + id).css('display', 'block');
    // })
});

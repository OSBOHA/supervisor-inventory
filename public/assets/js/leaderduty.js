// function newrecord() {
//     var leader_id = document.getElementById('leader_id').value;
//     document.getElementById('leader_duty').reset();
//     document.getElementById('leader_id_set').value = leader_id;
//     document.getElementById('leader_duty').hidden = false;
//     if ( leader_id == 'empty') {
//         document.getElementById('leader_duty').hidden = true;
//         document.getElementById('leader_name_select').style.display = 'block';
//     } else{
//         document.getElementById('leader_name_select').style.display = 'none';
//     }
// }

function follow_up_enable() {
    for (i = 1; i < 11; i++) {
        var follow_up_standard = "follow_up_standard_" + i;
        document.getElementById(follow_up_standard).disabled = false;
        document.getElementById(follow_up_standard).required = true;
    }

}

function follow_up_disable() {
    for (i = 1; i < 11; i++) {
        var follow_up_standard = "follow_up_standard_" + i;
        document.getElementById(follow_up_standard).disabled = true;
        document.getElementById(follow_up_standard).required = false;
    }
}

function support_enable() {
    for (i = 1; i < 9; i++) {
        var support_standard = "support_standard_" + i;
        document.getElementById(support_standard).disabled = false;
        document.getElementById(support_standard).required = true;
    }
}

function support_disable() {
    for (i = 1; i < 9; i++) {
        var support_standard = "support_standard_" + i;
        document.getElementById(support_standard).disabled = true;
        document.getElementById(support_standard).required = false;
    }
}

function elementary_enable() {
    for (i = 1; i < 6; i++) {
        var elementary_standard = "elementary_standard_" + i;
        document.getElementById(elementary_standard).disabled = false;
        document.getElementById(elementary_standard).required = true;
    }
}

function elementary_disable() {
    for (i = 1; i < 6; i++) {
        var elementary_standard = "elementary_standard_" + i;
        document.getElementById(elementary_standard).disabled = true;
        document.getElementById(elementary_standard).required = false;

    }
}

function image_upload_enable() {
    for (i = 1; i < 4; i++) {
        var leader_message = "leader_message_" + i;
        document.getElementById(leader_message).disabled = false;
    }
    document.getElementById('leader_message_1').required = true;

    document.getElementById('leader_reply_message').disabled = false;
    document.getElementById('leader_reply_message').required = true;

}

function image_upload_disable() {
    for (i = 1; i < 4; i++) {
        var leader_message = "leader_message_" + i;
        document.getElementById(leader_message).disabled = true;
    }
    document.getElementById('leader_message_1').required = false;

    document.getElementById('leader_reply_message').disabled = true;
    document.getElementById('leader_reply_message').required = false;
}

function withdrawn_number_enable() {
    document.getElementById('withdrawn_number').disabled = false;
    document.getElementById('withdrawn_number').required = true;
}

function withdrawn_number_disable() {
    document.getElementById('withdrawn_number').disabled = true;
    document.getElementById('withdrawn_number').required = false;
}

function duty_Check() {
    var newsLeaderSelected = document.querySelector('input[name="news_leader"]:checked');
    var newsDiscussionSelected = document.querySelector('input[name="news_discussion"]:checked');
    var newsWritingSelected = document.querySelector('input[name="news_writing"]:checked');
    if (newsDiscussionSelected == null || newsWritingSelected == null || newsLeaderSelected == null) {
        $('#error_msg').text('يجب إدخال أخبار الأسبوع كافة');
    }

    if ($('.current_team_members').val() > 30 || $('.current_team_members').val() < 1  || $('.current_team_members').val() == '') {
        $('.current_team_members').css('background-color', '#f08080d4');
        $('#team_member_msg').text('عدد الأعضاء يجب أن يكون بين (1) و (30)');
    }

    if ($('.team_final_mark').val() > 100 || $('.team_final_mark').val() < 0 || $('.team_final_mark').val() == '' ) {
        $('.team_final_mark').css('background-color', '#f08080d4');
        $('#team_mark_msg').text('معدل الفريق يجب أن يكون بين (0) و (100)');
    }

    if ( $('.follow_up_missing_standards').is(':checked') && $('.follow_up_standard').prop('required')) {
        $('#follow_up_missing_standard_msg').text('يجب اختيار سبب واحد على الأقل لعدم استيفاء المعايير');
    }

    if ( $('.support_missing_standards').is(':checked') && $('.support_standard').prop('required')) {
        $('#support_missing_standard_msg').text('يجب اختيار سبب واحد على الأقل لعدم استيفاء المعايير');
    }

    if ( $('.elementary_missing_standards').is(':checked') && $('.elementary_standard').prop('required')) {
        $('#elementary_missing_standard_msg').text('يجب اختيار سبب واحد على الأقل لعدم استيفاء المعايير');
    }

    if ( $('.audit_final_mark_done').is(':checked') &&
    ( $('#leader_message_1').prop('required') || $('#leader_reply_message').prop('required')) ) {
        $('#audit_final_mark_upload_pic_msg').text(' يجب إرفاق صورة واحدة على الأقل لتواصلك مع القائد وصورة لرد القائد');
    }

    if ( ($('.withdrawn_ambassadors_done').is(':checked') || $('.withdrawn_ambassadors_not_done').is(':checked'))
         && $('#withdrawn_number').prop('required')
         && ( $('#withdrawn_number').val() > 30 || $('#withdrawn_number').val() < 1 || $('#withdrawn_number').val() == '' )) {
        $('#withdrawn_number_required_msg').text(' يجب إدخال عدد الأعضاء المنسحبين، وأن يكون بين (1) و (30)');
    }

    if ( $('.follow_up').is(':checked') == 0) {
         $('#follow_up_msg').text('هذا الحقل مطلوب');
    }

    if ( $('.support_post').is(':checked') == 0 ) {
         $('#support_msg').text('هذا الحقل مطلوب');
    }

    if ( $('.leader_reading').is(':checked') == 0) {
        $('#leader_reading_msg').text('هذا الحقل مطلوب');
   }

   if ( $('.elementary_mark').is(':checked') == 0 ) {
    $('#elementary_mark_msg').text('هذا الحقل مطلوب');
   }

   if ( $('.final_mark').is(':checked') == 0 ) {
    $('#final_mark_msg').text('هذا الحقل مطلوب');
   }

   if ( $('.audit_final_mark').is(':checked') == 0 ) {
    $('#audit_final_mark_msg').text('هذا الحقل مطلوب');
   }

   if ( $('.withdrawn_ambassadors').is(':checked') == 0 ) {
    $('#withdrawn_ambassadors_msg').text('هذا الحقل مطلوب');
   }

}

$(document).ready(function() {

    $("#leader_id").on('change', (function() {
        $('.leader_duty_form').trigger("reset");
        var leader_id = $("#leader_id").val();
        if (leader_id == '' || leader_id == 'empty') {
            $('.leader_duty_form').hide();
            $('#leader_name_select').show();
        }
        else {
            $('#leader_name_select').hide();
            $('.leader_duty_form').show();
            $('#leader_id_set').val(leader_id);

        }
    }));

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

    var follow_up_checkbox_required = $('.follow_up_standard');
    follow_up_checkbox_required.on('click', function(){
    if (follow_up_checkbox_required.is(':checked')) {
        follow_up_checkbox_required.attr('required', false);
    } else {
        follow_up_checkbox_required.attr('required', true);
    }
    });

    var support_checkbox_required = $('.support_standard');
    support_checkbox_required.on('click', function(){
    if (support_checkbox_required.is(':checked')) {
        support_checkbox_required.attr('required', false);
    } else {
        support_checkbox_required.attr('required', true);
    }
    });

    var elementary_checkbox_required = $('.elementary_standard');
    elementary_checkbox_required.on('click', function(){
    if (elementary_checkbox_required.is(':checked')) {
        elementary_checkbox_required.attr('required', false);
    } else {
        elementary_checkbox_required.attr('required', true);
    }
    });

});

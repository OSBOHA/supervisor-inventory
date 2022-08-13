function Leader_communicat_status_done() {
    document.getElementById('communicate_with_leaders_img').disabled = false;
    document.getElementById('communicate_with_leaders_img').required = true;
    var communicate_with_leaders_id = document.getElementsByName('communicate_with_leaders_id[]');
    for (i=0; i<communicate_with_leaders_id.length ; i++){
        communicate_with_leaders_id[i].disabled = false;
        communicate_with_leaders_id[i].required = true;
    }
}

function Leader_communicat_status_not_done() {
    document.getElementById('communicate_with_leaders_img').disabled = true;
    document.getElementById('communicate_with_leaders_img').required = false;
    var communicate_with_leaders_id = document.getElementsByName('communicate_with_leaders_id[]');
    for (i=0; i<communicate_with_leaders_id.length ; i++){
        communicate_with_leaders_id[i].disabled = true;
        communicate_with_leaders_id[i].required = false;
    }
}

function extra_work_check() {
    if ($('.leaders_didnt_enter_withdraw_id').is(':checked') && ($('#leaders_didnt_enter_withdraw_img').val() == '')){
        $('#leaders_didnt_enter_withdraw_msg').text(' يجب إرفاق صورة لتواصلك مع أحد القادة');
    }

    if ($('.communicate_with_leaders_id').is(':checked') && ($('#communicate_with_leaders_img').val() == '')){
        $('#communicate_with_leaders_msg').text(' يجب إرفاق صورة لتواصلك مع أحد القادة');
    }

    if (($('.communicate_with_leaders_id').is(':checked') == 0) && ($('#communicate_with_leaders_img').val() == '')){
        $('#communicate_with_leaders_msg').text('  يجب اختيار أحد القادة و إرفاق صورة لتواصلك معه');
    }
}

$(document).ready(function() {

    var leaders_didnt_enter_withdraw_checkbox_required = $('.leaders_didnt_enter_withdraw_id');
    leaders_didnt_enter_withdraw_checkbox_required.on('click', function(){
        if ($('.leaders_didnt_enter_withdraw_id').is(':checked') ) {
        $('#leaders_didnt_enter_withdraw_img').attr('disabled', false);
        $('#leaders_didnt_enter_withdraw_img').attr('required', true);
        }
        else {
            $('#leaders_didnt_enter_withdraw_img').attr('disabled', true);
            $('#leaders_didnt_enter_withdraw_img').attr('required', false);
        }
    });

    var communicate_with_leaders_id_checkbox_required = $('.communicate_with_leaders_id');
    communicate_with_leaders_id_checkbox_required.on('click', function(){
        if ($('.communicate_with_leaders_id').is(':checked') ) {
        $('.communicate_with_leaders_id').attr('required', false);
        }
        else {
            $('.communicate_with_leaders_id').attr('required', true);
        }
    });


});

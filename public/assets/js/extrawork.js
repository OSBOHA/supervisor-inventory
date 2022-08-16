function extra_work_check() {
    if ($('.leaders_didnt_enter_withdraw_id').children("option:selected").is(':selected') && ($('#leaders_didnt_enter_withdraw_img').val() == '')){
        $('#leaders_didnt_enter_withdraw_msg').text(' يجب إرفاق صورة لتواصلك مع أحد القادة');
    }

    if ($('.communicate_with_leaders_id').children("option:selected").is(':selected') && ($('#communicate_with_leaders_img').val() == '')){
        $('#communicate_with_leaders_msg').text(' يجب إرفاق صورة لتواصلك مع أحد القادة');
    }
}

// $( window ).on( 'load', function(){
//     $('#activity_description_1').attr('disabled', true);
//     $('#activity_description_2').attr('disabled', true);

// });

$(document).ready(function() {

    var leaders_didnt_enter_withdraw_required = $('.leaders_didnt_enter_withdraw_id');
    leaders_didnt_enter_withdraw_required.on('change', function(){
        if ($(this).children("option:selected").is(':selected') ) {
        $('#leaders_didnt_enter_withdraw_img').attr('disabled', false);
        $('#leaders_didnt_enter_withdraw_img').attr('required', true);
        }
        else {
            $('#leaders_didnt_enter_withdraw_img').attr('disabled', true);
            $('#leaders_didnt_enter_withdraw_img').attr('required', false);
        }
    });

    var communicate_with_leaders_id_required = $('.communicate_with_leaders_id');
    communicate_with_leaders_id_required.on('change', function(){
        if ($(this).children("option:selected").is(':selected') ) {
        $('#communicate_with_leaders_img').attr('disabled', false);
        $('#communicate_with_leaders_img').attr('required', true);
        }
        else {
            $('#communicate_with_leaders_img').attr('disabled', true);
            $('#communicate_with_leaders_img').attr('required', false);
        }
    });

    var activity_description = $('.activity_description');
    activity_description.on('keyup', function(){
        if ($('#activity_description_0').val() == ''){
            $('input[name="activity_img_0"]').attr('disabled', true);
            $('input[name="activity_img_0"]').attr('required', false);
           // $('#activity_description_1').attr('disabled', true);
        }
        //else {$('#activity_description_1').attr('disabled', false);}

        if ($('#activity_description_1').val() == ''){
            $('input[name="activity_img_1"]').attr('disabled', true);
            $('input[name="activity_img_1"]').attr('required', false);
            //$('#activity_description_2').attr('disabled', true);
        }

        if ($('#activity_description_2').val() == ''){
            $('input[name="activity_img_2"]').attr('disabled', true);
            $('input[name="activity_img_2"]').attr('required', false);
        }
    });

    var activity_description = $('.activity_description');
    activity_description.on('keypress', function(){
        if ($('#activity_description_0').val() != ''){
            $('input[name="activity_img_0"]').attr('disabled', false);
            $('input[name="activity_img_0"]').attr('required', true);
            //$('#activity_description_1').attr('disabled', false);
        }

        if ($('#activity_description_1').val() != ''){
            $('input[name="activity_img_1"]').attr('disabled', false);
            $('input[name="activity_img_1"]').attr('required', true);
            //$('#activity_description_2').attr('disabled', false);
        }

        if ($('#activity_description_2').val() != ''){
            $('input[name="activity_img_2"]').attr('disabled', false);
            $('input[name="activity_img_2"]').attr('required', true);
        }
    });
   // }

    // var communicate_with_leaders_id_checkbox_required = $('.communicate_with_leaders_id');
    // communicate_with_leaders_id_checkbox_required.on('click', function(){
    //     if ($('.communicate_with_leaders_id').is(':checked') ) {
    //     $('.communicate_with_leaders_id').attr('required', false);
    //     }
    //     else {
    //         $('.communicate_with_leaders_id').attr('required', true);
    //     }
    // });

    let choices = document.querySelectorAll('.choices');
    let initChoice;
    for(let i=0; i<choices.length; i++) {
    if (choices[i].classList.contains("multiple-remove")) {
        initChoice = new Choices(choices[i],
        {
            delimiter: ',',
            editItems: true,
            maxItemCount: -1,
            removeItemButton: true,
        });
    }else{
        initChoice = new Choices(choices[i]);
    }
    }


});

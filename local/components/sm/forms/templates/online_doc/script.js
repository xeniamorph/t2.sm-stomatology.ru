$(document).ready(function () {
    if (!isMobile.any()) {
        $('.onlinedocform-phone').mask('9 (999) 999-99-99');
    }
    if($('#onlinedocform-match').is(':checked')) {
        $('.onlinedocform-form-field-addressr').hide();
    }
    $('#onlinedocform-match').click(function(){
        if($(this).is(':checked')) {
            $('.onlinedocform-form-field-addressr').hide();
        } else {
            $('.onlinedocform-form-field-addressr').show();
        }
    });
    if($('#onlinedocform-accept').is(':checked')) {
        $('#onlinedocform .btn').prop('disabled', false);
    }
    $('#onlinedocform-accept').click(function(){
        if($(this).is(':checked')) {
            $('#onlinedocform .btn').prop('disabled', false);
        } else {
            $('#onlinedocform .btn').prop('disabled', true);
        }
    });
});
var send_mainform = true;
var scrollTop = $('#onlinedocform-start').offset().top;
$('#onlinedocform').submit(function() {
    var form = $(this);
    var data_form = form.serializeArray();
    var go = true;

    $('.onlinedocform-required').each(function (index, el) {
        if($(this).val() == '') {
            $(this).addClass("b-form__control--error");
            $('.onlinedocform-msg-required').css('color', 'red');
            $(document).scrollTop(scrollTop);
            go = false;
        } else {
            $(this).removeClass("b-form__control--error");
        }
    });

    if (go && send_mainform) {
        send_mainform = false;
        try {
            data_form.push(
                {name: 'action', value: 'send'},
            );
        } catch(err) {}
        $.ajax({
            url: "/include/forms/onlinedoc_ajax.php",
            type: "POST",
            data: data_form,
            dataType: "html",
            success: function(jsondata) {
                form.hide();
                form.parent().find('.onlinedocform-msg').show();
                $(document).scrollTop(scrollTop);
                yaCounter42012629.reachGoal('FormSend');
                try {dataLayer.push({'event': 'myTrackEvent', 'eventCategory': 'Form', 'eventAction': 'Send', 'eventLabel': 'OnlineDocuments'});} catch (error) {}
                ga('send', 'event', 'Form', 'Send', 'OnlineDocuments');

            },
        });
    }
    return false;
});
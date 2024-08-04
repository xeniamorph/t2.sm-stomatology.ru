if (!isMobile.any()) {
    $('.mainform-box-phone').mask('9 (999) 999-99-99');
}
var send_mainform = true;
$('#mainform').submit(function() {
    var form = $(this);
    var go = true;
    var name = form.find('.mainform-box-name').val();
    var phone = form.find('.mainform-box-phone').val();
    var spec = form.find('.mainform-box-spec').val();

    if (phone == '') {
        form.find('.mainform-box-phone').addClass("not-valid").focus();
        go = false;
    }

    if (go && send_mainform) {
        send_mainform = false;
        $.ajax({
            url: "/include/forms/mnenie_ajax.php",
            type: "POST",
            data: { name: name, phone: phone, spec: spec, source: sources_form, action: 'send' },
            dataType: "html",
            success: function(jsondata) {
                form.hide();
                form.parent().find('.mainform-box-msg').show();
                yaCounter42012629.reachGoal('FormSend');
                try {dataLayer.push({'event': 'myTrackEvent', 'eventCategory': 'Form', 'eventAction': 'Send', 'eventLabel': 'OnlineConsult'});} catch (error) {}
                ga('send', 'event', 'Form', 'Send', 'OnlineConsult');

            },
        });
    }
    return false;
});
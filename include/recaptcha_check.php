<?php
function getStatusRecaptcha($recaptcha_response) {
    if(!empty($recaptcha_response)) {
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_secret = '6Lfw1yUkAAAAAMhhB4zLOoqRZ5moXLCPxvFW8ElM';

        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);

        $recaptcha = json_decode($recaptcha);

        if ($recaptcha->success == true && $recaptcha->score >= 0.5 && $recaptcha->action == 'contact') {
            return true;
        }
    }
    return false;
}

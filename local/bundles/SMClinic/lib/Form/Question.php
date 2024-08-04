<?php
namespace App\Bundle\SMClinic\Form;

use Bitrix\Main\Context;

use \App\Bundle\Google\Recaptcha;

class Question extends \TAO\Form
{
	public function options()
	{
        $form_url = explode('?', $_SERVER['HTTP_REFERER']);
        $form_url = explode($_SERVER['HTTP_HOST'], $form_url[0]);
        $mail_event = 'NEW_QUESTION';
        if(isset($form_url[1])) {
            if($form_url[1] == '/zubotekhnicheskaya-laboratoriya/') {
                $mail_event = 'NEW_QUESTION_LAB';
            }
        }
        
		return [
			'ajax' => true,
			'infoblock' => 'questions',
			'submit_text' => 'Задать вопрос',
			'layout' => 'question',
			'on_error' => 'error_function',
			'on_ok' => 'analitic',
			'mail_event' => $mail_event
		];
	}

	public function required()
	{
		return [
			'phone' => 'Введите телефон.',
		];
	}
	public function validate($values)
	{
		$errors = parent::validate($values);
		$recaptcha = new Recaptcha(GOOGLE_CAPTCHA_SECRET_KEY);

		if (!$recaptcha->isValidResponse($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR'])) {
			$errors['recaptcha'] = 'invalid recaptcha';
		}

		if ($values['user_email'] != '') {
			$errors['user_email'] = 'robot detected';
		}
		if(trim($values['phone']) == ''){
			$errors['contact'] = 'Введите Номер телефона';
		}
		return $errors;
	}

	protected function escapeCharacter($value) {
		if(isset($value)) {
			$value = strip_tags($value);
			return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
		} else return '';
	}

    protected function afterProcess()
    {

        if(preg_match('/^[^A-Za-zА-Яа-яЁё]+$/u', $this->values['phone'])) {
            $url_call = 'http://callcenter.smclinic.ru/shluz_sources.php';
            @$date = date("Y-m-d H:i");
            $form_url = explode('?', $_SERVER['HTTP_REFERER']);
            $form_url = explode($_SERVER['HTTP_HOST'], $form_url[0]);

            $source = 160065;
            if(isset($form_url[1])) {
                if($form_url[1] == '/zubotekhnicheskaya-laboratoriya/') {
                    $source = 482587;
                }
            }

			$request = Context::getCurrent()->getRequest();

			$f_source['clientid'] = $this->escapeCharacter($request->getPost('source')['clientId']);
			$f_source['type'] = $this->escapeCharacter($request->getPost('source')['type']);
			$f_source['referrer'] = $this->escapeCharacter($request->getPost('source')['referrer']);
			$f_source['source'] = $this->escapeCharacter($request->getPost('source')['source']);
			$f_source['medium'] = $this->escapeCharacter($request->getPost('source')['medium']);
			$f_source['campaign'] = $this->escapeCharacter($request->getPost('source')['campaign']);
			$f_source['keyword'] = $this->escapeCharacter($request->getPost('source')['keyword']);

            $items = array(
                'id_form' => 367,
                'SOURCE' => $source,
                'TYPE' => 367,
                'FNAME' => $this->values['name'],
                'DATE_BEGIN' => date,
                'PHONE' => $this->values['phone'],
                'VOPROS' => $this->values['question'],
				'SOURCES' => $f_source
            );

            if ($curl = curl_init()) {
                curl_setopt($curl, CURLOPT_URL, $url_call);

                curl_setopt_array($curl, array(
                    CURLOPT_POST => TRUE,
                    CURLOPT_RETURNTRANSFER => TRUE,
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/json'
                    ),
                    CURLOPT_POSTFIELDS => json_encode($items)
                ));

                $out = curl_exec($curl);
                curl_close($curl);
            }
        } else {
            die;
        }
    }
}

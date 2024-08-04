<?php
namespace App\Bundle\SMClinic\Form;

use Bitrix\Main\Context;

class Appointment extends \TAO\Form
{
	public function options()
	{
		return [
			'ajax' => true,
			'infoblock' => 'appointments',
			'submit_text' => 'Записаться на прием',
			'layout' => 'appointment',
			'on_error' => 'error_function',
			'mail_event' => 'NEW_APPOINTMENT',
			'disable_field_comment' => true,
		];
	}

	public function required()
	{
		return [
			'phone' => 'Введите телефон.'
		];
	}

	protected function escapeCharacter($value) {
		if(isset($value)) {
			$value = strip_tags($value);
			return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
		} else return '';
	}

    protected function afterProcess()
    {
        /*if(strpos($this->values['comment'], 'http') !== false) {
            die();
        }*/
        if(preg_match('/^[^A-Za-zА-Яа-яЁё]+$/u', $this->values['phone'])) {
            $url_call = 'http://callcenter.smclinic.ru/shluz_sources.php';
            @$date = date("Y-m-d H:i");
            $date_send = '';
            $time_send = '';
            if (!empty($this->values['date'])) {
                $date_send_list = explode('-', $this->values['date']);
                $date_send = date("d.m.Y", mktime(0, 0, 0, $date_send_list[1], $date_send_list[0], $date_send_list[2]));
            }
            if ($this->values['time'] == 'Время') {
                $this->values['time'] = '';
            }
            if (!empty($this->values['time'])) {
                $time_send = ' ' . $this->values['time'];
                if ($date_send == '') {
                    $date_send = date("d.m.Y");
                }
            }

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
                'id_form' => 366,
                'SOURCE' => $source,
                'TYPE' => 366,
                'FNAME' => $this->values['name'],
                //'VRACH' => $expertList[$f_expert],
                'DATE_BEGIN' => $date,
                'PHONE' => $this->values['phone'],
                'VOPROS' => $this->values['comment'],
                'PRIEM_DATE_TIME' => $date_send . $time_send,
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
?>

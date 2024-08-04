<?php

namespace App\Bundle\SMClinic\Form;

use \App\Bundle\Google\Recaptcha;

class Review extends \TAO\Form
{
	public function options()
	{
		return [
			'ajax' => true,
			'infoblock' => 'review',
			'submit_text' => 'Оставить отзыв',
			'layout' => 'review',
			'on_error' => 'error_function',
			'mail_event' => 'NEW_REVIEW'
		];
	}

	public function required()
	{
		return [
			'fio' => 'Введите Имя.',
			'review' => 'Введите отзыв.',
			'email' => 'Введите E-mail.'
		];
	}
	public function validate($values)
	{
		/*if(!empty($values['email']) && ($values['email'] == $values['number_cart'])) {
			die;
		}
		$errors = [];
		$errors = parent::validate($values);
		return $errors;*/
		$errors = parent::validate($values);

		$recaptcha = new Recaptcha(GOOGLE_CAPTCHA_SECRET_KEY);

		if (!$recaptcha->isValidResponse($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR'])) {
			$errors['recaptcha'] = 'invalid recaptcha';
		}

		if ($values['user_email'] != '') {
			$errors['user_email'] = 'robot detected';
		}

		return $errors;
	}
    protected function afterProcess()
    {
		$doctro_fio = $_POST['doctor_fio'];
		$doctor_id = $this->values['doctors'];
		$review_id = $this->item->id();
		$s_item = \TAO::infoblock('review')->getItems(['filter' => ['ID' => $review_id]]);
		$s_item[0]['IBLOCK_SECTION_ID'] = 21;
		$s_item[0]['answer'] = '';
		$s_item[0]['review_ip'] = $_SERVER['REMOTE_ADDR'];
		$s_item[0]->save();


		$url_okk = 'http://okk.smclinic.ru/shluz.php';
		@$date = date("d.m.Y");

		// send okk
		$items = array(
			'ID_FORM' => $review_id,
			'SOURCE' => 12638,
			'TYPE' => 366,
			'FNAME' => $this->values['fio'],
			'PHONE' => $this->values['phone'],
			'DATE_BEGIN' => $date,
			'EMAIL' => $this->values['email'],
			'VOPROS' => $this->values['review'],
			'CARD' => $this->values['number_cart'],
			'VRACH' => $doctro_fio, // ФИО Врача
			'VRACH_ID' => $doctor_id, // ID Врача
		);

		if ($curl = curl_init()) {
			curl_setopt($curl, CURLOPT_URL, $url_okk);

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

    }
}

<?php
namespace App\Bundle\SMClinic\Form;

use App\Bundle\Google\Recaptcha;

class Administration extends \TAO\Form
{
	public function options()
	{
		return [
			'ajax' => true,
			'infoblock' => 'administration',
			'submit_text' => 'Записаться на прием',
			'layout' => 'administration',
			'on_error' => 'error_function',
			'mail_event' => 'NEW_ADMIN'
		];
	}

	public function required()
	{
		return [
			'name' => 'Введите имя.',
			'lastname' => 'Введите фамилию',
			'email' => 'Введите E-mail',
			'review' => 'Введите отзыв.'
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
		return $errors;
	}
}
?>

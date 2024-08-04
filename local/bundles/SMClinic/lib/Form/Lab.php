<?php
namespace App\Bundle\SMClinic\Form;

use Bitrix\Main\Context;
use Bitrix\Main\Mail\Event;

class Lab extends \TAO\Form
{
	public function options()
	{
		return [
			'ajax' => true,
			'infoblock' => 'laboratoriya',
			'submit_text' => 'Оформить заказ',
			'layout' => 'lab',
			'on_error' => 'error_function',
			'mail_event' => 'NEW_ORDER',
            'disable_field_comment' => true,
            'ok_message' => 'Заявка на Ваш заказ отправлена!'
		];
	}

	public function required()
	{
		return [
			'phone' => 'Введите телефон.',
            'email' => 'Введите email.'      
		];
    }

    protected function escapeCharacter($value) {
		if(isset($value)) {
			$value = strip_tags($value);
			return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
		} else return '';
	}

    /*public function validate($values)
	{
        $errors = [];
        $errors = parent::validate($values);
        $email = $this->escapeCharacter($this->values['email']);
        if(!empty($email)) {
			$errors['email'] = 'invalid email';
		}
		return $errors;
	}*/

    protected function afterProcess()
    {
        $email = $this->escapeCharacter($this->values['email']);
        if(!empty($email)) {
            $product_price = '';
            if($this->values['product'] == 'Полный съемный протез') {
                $product_price = 'Стоимость «Полного съемного протеза с опорой на 4-6 имплантатах с использованием балочной конструкции»  - 50.700 рублей.';
            }
            if($this->values['product'] == 'Бюгельный протез') {
                $product_price = 'Стоимость «Бюгельного протеза с фиксацией на аттачменах SAE двусторонний» - 30.300 рублей.';
            }
            if(!empty($product_price)) {
                Event::send([
                    'EVENT_NAME' => 'NEW_ORDER_CLIENT',
                    'LID' => 's1',
                    'C_FIELDS' => [
                        'email' => $this->values['email'],
                        'product_price' => $product_price
                    ]
                ]);
            }
        }
    }
}
?>

<?php
return [
	'/' => 'Главная',
	[
		'url' => '/about/',
		'title' => 'О нас',
		'sub' => [
			'/about/' => 'О клинике',
			[
				'url' => '/about/technologies/',
				'title' => 'Технологии и оборудование',
				'flag' => 'technologies'
			],
			'/about/gallery/' => 'Галерея',
			[
				'url' => '/about/news/',
				'title'=> 'Новости',
				'flag' => 'news'
			],
			[
				'url' => '/about/articles/',
				'title' => 'Статьи',
				'flag' => 'articles'
			],
			'/about/legal-info/' => 'Правовая информация',
			'/about/obrabotka-dannykh/' => 'Обработка персональных данных',
		],
	],
	[
		'url' => '/services/',
		'title'=> 'Услуги и цены',
		'sub' => 'bundle:SMClinic:serviceMenu'
	],
	'/stock/' => 'Акции',
	[
		'url' => '/doctors/',
	   	'title' => 'Наши врачи',
	   	'sub' => 'sections:doctors',
	],
	[
		'url' => '/patients/diseases/',
		'title' => 'Пациентам',
		'sub' => [
			'/patients/lechenie-zubov-v-rassrochku-i-v-kredit/' => 'Лечение зубов в кредит',
			[
				'url' => '/patients/diseases/',
				'title' =>'Заболевания',
				//'flag' => 'diseases',
				'sub' => 'infoblock:disease'
			],
			//'/patients/find-disease/' => 'Узнать болезнь по симптомам',
			/*
			'/patients/program/' => 'Программа годового обслуживания',
			'/patients/discount/' => 'Дисконтная программа',
			 */
			'/about/technologies/' => 'Технологии и оборудование',

			/*'/patients/patient-safety/' => 'Безопасность пациента',*/
			'/patients/zubotekhnicheskaya-laboratoriya/' => 'Зуботехническая лаборатория'
		]
	],
	'/reviews-site/' => 'Отзывы',
	'/contacts/' => 'Контакты'
];
?>

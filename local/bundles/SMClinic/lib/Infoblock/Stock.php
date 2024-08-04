<?php

namespace App\Bundle\SMClinic\Infoblock;
use TAO\Infoblock;

class Stock extends Infoblock
{
    public function title()
    {
        return 'Акции';
    }

    public function sites()
    {
        return array('s1');
    }

    public function access()
    {
        return array(
            1 => 'X',
            2 => 'R',
			5 => 'W'
        );
    }

    public function data()
    {
        return array(
            'LIST_PAGE_URL' => '#SITE_DIR#/stock/',
            'DETAIL_PAGE_URL' => '#SITE_DIR#/stock/#ELEMENT_CODE#/',
            'SECTION_PAGE_URL' => '#SITE_DIR#/stock/',
            'INDEX_SECTION' => 'Y',
            'WORKFLOW' => 'N',
            'SECTIONS_NAME' => 'Разделы',
            'SECTION_NAME' => 'Раздел',
        );
    }

    public function messages()
    {
        return array(
            'ELEMENT_NAME' => 'Элемент',
            'ELEMENTS_NAME' => 'Элементы',
            'ELEMENT_ADD' => 'Добавить элемент',
            'ELEMENT_EDIT' => 'Изменить элемент',
            'ELEMENT_DELETE' => 'Удалить элемент',
            'SECTION_NAME' => 'Раздел',
            'SECTIONS_NAME' => 'Разделы',
            'SECTION_ADD' => 'Добавить раздел',
            'SECTION_EDIT' => 'Изменить раздел',
            'SECTION_DELETE' => 'Удалить раздел',
        );
    }

    public function fields()
    {
        return array(
            'IBLOCK_SECTION' => array(
                'NAME' => 'Привязка к разделам',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => array(
                    'KEEP_IBLOCK_SECTION_ID' => 'N',
                ),
            ),
            'ACTIVE' => array(
                'NAME' => 'Активность',
                'IS_REQUIRED' => 'Y',
                'DEFAULT_VALUE' => 'Y',
            ),
            'ACTIVE_FROM' => array(
                'NAME' => 'Начало активности',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'ACTIVE_TO' => array(
                'NAME' => 'Окончание активности',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'SORT' => array(
                'NAME' => 'Сортировка',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '0',
            ),
            'NAME' => array(
                'NAME' => 'Название',
                'IS_REQUIRED' => 'Y',
                'DEFAULT_VALUE' => '',
            ),
            'PREVIEW_PICTURE' => array(
                'NAME' => 'Картинка для анонса',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => array(
                    'FROM_DETAIL' => 'N',
                    'SCALE' => 'N',
                    'WIDTH' => '',
                    'HEIGHT' => '',
                    'IGNORE_ERRORS' => 'N',
                    'METHOD' => 'resample',
                    'COMPRESSION' => '95',
                    'DELETE_WITH_DETAIL' => 'N',
                    'UPDATE_WITH_DETAIL' => 'N',
                    'USE_WATERMARK_TEXT' => 'N',
                    'WATERMARK_TEXT' => '',
                    'WATERMARK_TEXT_FONT' => '',
                    'WATERMARK_TEXT_COLOR' => '',
                    'WATERMARK_TEXT_SIZE' => '',
                    'WATERMARK_TEXT_POSITION' => 'tl',
                    'USE_WATERMARK_FILE' => 'N',
                    'WATERMARK_FILE' => '',
                    'WATERMARK_FILE_ALPHA' => '',
                    'WATERMARK_FILE_POSITION' => 'tl',
                    'WATERMARK_FILE_ORDER' => '',
                ),
            ),
            'PREVIEW_TEXT_TYPE' => array(
                'NAME' => 'Тип описания для анонса',
                'IS_REQUIRED' => 'Y',
                'DEFAULT_VALUE' => 'text',
            ),
            'PREVIEW_TEXT' => array(
                'NAME' => 'Описание для анонса',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'DETAIL_PICTURE' => array(
                'NAME' => 'Детальная картинка',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => array(
                    'SCALE' => 'N',
                    'WIDTH' => '',
                    'HEIGHT' => '',
                    'IGNORE_ERRORS' => 'N',
                    'METHOD' => 'resample',
                    'COMPRESSION' => '95',
                    'USE_WATERMARK_TEXT' => 'N',
                    'WATERMARK_TEXT' => '',
                    'WATERMARK_TEXT_FONT' => '',
                    'WATERMARK_TEXT_COLOR' => '',
                    'WATERMARK_TEXT_SIZE' => '',
                    'WATERMARK_TEXT_POSITION' => 'tl',
                    'USE_WATERMARK_FILE' => 'N',
                    'WATERMARK_FILE' => '',
                    'WATERMARK_FILE_ALPHA' => '',
                    'WATERMARK_FILE_POSITION' => 'tl',
                    'WATERMARK_FILE_ORDER' => '',
                ),
            ),
            'DETAIL_TEXT_TYPE' => array(
                'NAME' => 'Тип детального описания',
                'IS_REQUIRED' => 'Y',
                'DEFAULT_VALUE' => 'text',
            ),
            'DETAIL_TEXT' => array(
                'NAME' => 'Детальное описание',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'XML_ID' => array(
                'NAME' => 'Внешний код',
                'IS_REQUIRED' => 'Y',
                'DEFAULT_VALUE' => '',
            ),
            'CODE' => array(
                'NAME' => 'Символьный код',
                'IS_REQUIRED' => 'Y',
                'DEFAULT_VALUE' => array(
                    'UNIQUE' => 'Y',
                    'TRANSLITERATION' => 'Y',
                    'TRANS_LEN' => '100',
                    'TRANS_CASE' => 'L',
                    'TRANS_SPACE' => '-',
                    'TRANS_OTHER' => '-',
                    'TRANS_EAT' => 'Y',
                    'USE_GOOGLE' => 'N',
                ),
            ),
            'TAGS' => array(
                'NAME' => 'Теги',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'SECTION_NAME' => array(
                'NAME' => 'Название',
                'IS_REQUIRED' => 'Y',
                'DEFAULT_VALUE' => '',
            ),
            'SECTION_PICTURE' => array(
                'NAME' => 'Картинка для анонса',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => array(
                    'FROM_DETAIL' => 'N',
                    'SCALE' => 'N',
                    'WIDTH' => '',
                    'HEIGHT' => '',
                    'IGNORE_ERRORS' => 'N',
                    'METHOD' => 'resample',
                    'COMPRESSION' => '95',
                    'DELETE_WITH_DETAIL' => 'N',
                    'UPDATE_WITH_DETAIL' => 'N',
                    'USE_WATERMARK_TEXT' => 'N',
                    'WATERMARK_TEXT' => '',
                    'WATERMARK_TEXT_FONT' => '',
                    'WATERMARK_TEXT_COLOR' => '',
                    'WATERMARK_TEXT_SIZE' => '',
                    'WATERMARK_TEXT_POSITION' => 'tl',
                    'USE_WATERMARK_FILE' => 'N',
                    'WATERMARK_FILE' => '',
                    'WATERMARK_FILE_ALPHA' => '',
                    'WATERMARK_FILE_POSITION' => 'tl',
                    'WATERMARK_FILE_ORDER' => '',
                ),
            ),
            'SECTION_DESCRIPTION_TYPE' => array(
                'NAME' => 'Тип описания',
                'IS_REQUIRED' => 'Y',
                'DEFAULT_VALUE' => 'text',
            ),
            'SECTION_DESCRIPTION' => array(
                'NAME' => 'Описание',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'SECTION_DETAIL_PICTURE' => array(
                'NAME' => 'Детальная картинка',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => array(
                    'SCALE' => 'N',
                    'WIDTH' => '',
                    'HEIGHT' => '',
                    'IGNORE_ERRORS' => 'N',
                    'METHOD' => 'resample',
                    'COMPRESSION' => '95',
                    'USE_WATERMARK_TEXT' => 'N',
                    'WATERMARK_TEXT' => '',
                    'WATERMARK_TEXT_FONT' => '',
                    'WATERMARK_TEXT_COLOR' => '',
                    'WATERMARK_TEXT_SIZE' => '',
                    'WATERMARK_TEXT_POSITION' => 'tl',
                    'USE_WATERMARK_FILE' => 'N',
                    'WATERMARK_FILE' => '',
                    'WATERMARK_FILE_ALPHA' => '',
                    'WATERMARK_FILE_POSITION' => 'tl',
                    'WATERMARK_FILE_ORDER' => '',
                ),
            ),
            'SECTION_XML_ID' => array(
                'NAME' => 'Внешний код',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'SECTION_CODE' => array(
                'NAME' => 'Символьный код',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => array(
                    'UNIQUE' => 'N',
                    'TRANSLITERATION' => 'N',
                    'TRANS_LEN' => '100',
                    'TRANS_CASE' => 'L',
                    'TRANS_SPACE' => '-',
                    'TRANS_OTHER' => '-',
                    'TRANS_EAT' => 'Y',
                    'USE_GOOGLE' => 'N',
                ),
            ),
            'LOG_SECTION_ADD' => array(
                'NAME' => 'LOG_SECTION_ADD',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'LOG_SECTION_EDIT' => array(
                'NAME' => 'LOG_SECTION_EDIT',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'LOG_SECTION_DELETE' => array(
                'NAME' => 'LOG_SECTION_DELETE',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'LOG_ELEMENT_ADD' => array(
                'NAME' => 'LOG_ELEMENT_ADD',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'LOG_ELEMENT_EDIT' => array(
                'NAME' => 'LOG_ELEMENT_EDIT',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'LOG_ELEMENT_DELETE' => array(
                'NAME' => 'LOG_ELEMENT_DELETE',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'XML_IMPORT_START_TIME' => array(
                'NAME' => 'XML_IMPORT_START_TIME',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
                'VISIBLE' => 'N',
            ),
            'DETAIL_TEXT_TYPE_ALLOW_CHANGE' => array(
                'NAME' => 'DETAIL_TEXT_TYPE_ALLOW_CHANGE',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => 'Y',
                'VISIBLE' => 'N',
            ),
            'PREVIEW_TEXT_TYPE_ALLOW_CHANGE' => array(
                'NAME' => 'PREVIEW_TEXT_TYPE_ALLOW_CHANGE',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => 'Y',
                'VISIBLE' => 'N',
            ),
            'SECTION_DESCRIPTION_TYPE_ALLOW_CHANGE' => array(
                'NAME' => 'SECTION_DESCRIPTION_TYPE_ALLOW_CHANGE',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => 'Y',
                'VISIBLE' => 'N',
            ),
        );
    }

    public function properties()
    {
        return array(
            'services' => array(
                'NAME' => 'Услуги',
                'PROPERTY_TYPE' => 'E',
                'MULTIPLE' => 'Y',
                'LINK_IBLOCK_CODE' => 'services',
            ),
            'menu_text' => array(
                'NAME' => 'Текст для меню',
                'DEFAULT_VALUE' => array(
                    'TEXT' => '',
                    'TYPE' => 'HTML',
                ),
                'PROPERTY_TYPE' => 'S',
                'USER_TYPE' => 'HTML',
                'USER_TYPE_SETTINGS' => array(
                    'height' => '200',
                ),
            ),
            'slide_img' => array(
                'NAME' => 'Изображение для слайдера',
                'PROPERTY_TYPE' => 'F',
            ),
            'menu_img' => array(
                'NAME' => 'Изображение для меню',
                'PROPERTY_TYPE' => 'F',
            ),
            'in_menu' => array(
                'NAME' => 'Отображать в меню',
                'PROPERTY_TYPE' => 'L',
                'LIST_TYPE' => 'C',
                'ITEMS' => array(
                    'd99303939411c9d781c1c96ffc8fed75' => 'Да',
                ),
            ),
            'in_slider' => array(
                'NAME' => 'Отображать в слайдре',
                'PROPERTY_TYPE' => 'L',
                'LIST_TYPE' => 'C',
                'ITEMS' => array(
                    '4ab7da9f7fe310d0339f17ea4bbcd80b' => 'Да',
                ),
            ),
			'show_form' => array(
				'NAME' => 'Показать форму для записи',
				'PROPERTY_TYPE' => 'L',
				'LIST_TYPE' => 'C',
				'ITEMS' => array(
					'42b7da9f7fe310d0339f17ea4bbcd80b' => 'Y',
				),
			),
			'text_form' => array(
				'NAME' => 'Текст под формой',
				'DEFAULT_VALUE' => array(
					'TEXT' => '',
					'TYPE' => 'HTML',
				),
				'PROPERTY_TYPE' => 'S',
				'USER_TYPE' => 'HTML',
				'USER_TYPE_SETTINGS' => array(
					'height' => '200',
				),
			),
			'title_form' => array(
				'NAME' => 'Заголовок формы',
				'PROPERTY_TYPE' => 'S',
				'COL_COUNT' => 80
			),
			'email_form' => array(
				'NAME' => 'Email для отправки (через запятую)',
				'PROPERTY_TYPE' => 'S',
				'COL_COUNT' => 80
			),
			'time_form' => array(
				'NAME' => 'Время для формы',
				'PROPERTY_TYPE' => 'S',
				'MULTIPLE' => 'Y',
			),
			'PERIOD' => array(
				'NAME' => 'Период действия акции',
				'PROPERTY_TYPE' => 'S',
			),
			'clinics' => array(
				'NAME' => 'Клиники',
				'PROPERTY_TYPE' => 'E',
				'MULTIPLE' => 'Y',
				'LINK_IBLOCK_CODE' => 'address',
			),
			'conditions' => array(
				'NAME' => 'Условия',
				'DEFAULT_VALUE' => array(
					'TEXT' => '',
					'TYPE' => 'HTML',
				),
				'PROPERTY_TYPE' => 'S',
				'USER_TYPE' => 'HTML',
				'USER_TYPE_SETTINGS' => array(
					'height' => '200',
				),
			),
            'archive' => array(
                'NAME' => 'Перенести в архив',
                'PROPERTY_TYPE' => 'L',
                'LIST_TYPE' => 'C',
                'ITEMS' => array(
                    '54d7b418359256b16356ffb0b61a5375' => 'Y',
                ),
            ),
			'main' => array(
				'NAME' => 'Главная акция',
				'PROPERTY_TYPE' => 'L',
				'LIST_TYPE' => 'C',
				'ITEMS' => array(
					'54d7b418359256b16356ffb0b61a5379' => 'Y',
				),
			),
			'prices' => array(
				'NAME' => 'Цены',
				'PROPERTY_TYPE' => 'S',
				'MULTIPLE' => 'Y',
				'USER_TYPE' => 'techart_sort_price',
			),
			'benefit' => array(
				'NAME' => 'Ваша выгода',
				'PROPERTY_TYPE' => 'S',
				'COL_COUNT' => 80
			),
			'cost' => array(
				'NAME' => 'Стоимость',
				'PROPERTY_TYPE' => 'S',
				'COL_COUNT' => 80
			),
			'date_active' => array(
				'NAME' => 'Срок действия для детальной',
				'PROPERTY_TYPE' => 'S',
				'COL_COUNT' => 80
			),
			'text_with_img' => array(
				'NAME' => 'Текст с картинкой',
				'DEFAULT_VALUE' => array(
					'TEXT' => '',
					'TYPE' => 'HTML',
				),
				'PROPERTY_TYPE' => 'S',
				'USER_TYPE' => 'HTML',
				'USER_TYPE_SETTINGS' => array(
					'height' => '200',
				),
			),
			'gallery' => array(
				'NAME' => 'Фотогалерея',
				'PROPERTY_TYPE' => 'F',
				'MULTIPLE' => 'Y',
			),
        );
    }
}

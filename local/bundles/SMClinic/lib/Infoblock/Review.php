<?php

namespace App\Bundle\SMClinic\Infoblock;
use TAO\Infoblock;

class Review extends Infoblock
{
    public function title()
    {
        return 'Отзывы';
    }

    public function sites()
    {
        return array('s1');
    }

    public function access()
    {
        return array(
            1 => 'X',
			5 => 'W'
        );
    }

    public function data()
    {
        return array(
            'LIST_PAGE_URL' => '#SITE_DIR#/review/',
            'DETAIL_PAGE_URL' => '#SITE_DIR#/review/#ELEMENT_ID#/',
            'SECTION_PAGE_URL' => '#SITE_DIR#/review/',
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
            'site_or_clinic' => array(
                'NAME' => 'Cайт/Клиника',
                'PROPERTY_TYPE' => 'L',
                'ITEMS' => array(
                    '36583aba634dfe530229da4ec3a0cec2' => 'Сайт',
                    'd52a1505853d87833a95fb9ccb6b2d80' => 'Клиника',
                ),
            ),
            'fio' => array(
                'NAME' => 'ФИО',
                'SORT' => '100',
                'PROPERTY_TYPE' => 'S',
            ),
            'name' => array(
                'NAME' => 'Короткое имя',
                'SORT' => '150',
                'PROPERTY_TYPE' => 'S',
            ),
            'email' => array(
                'NAME' => 'E-mail',
                'SORT' => '200',
                'PROPERTY_TYPE' => 'S',
            ),
            'doctors' => array(
                'NAME' => 'Врачи',
                'PROPERTY_TYPE' => 'E',
                'MULTIPLE' => 'Y',
                'LINK_IBLOCK_CODE' => 'doctors',
            ),
            'services' => array(
                'NAME' => 'Услуги',
                'PROPERTY_TYPE' => 'E',
                'MULTIPLE' => 'Y',
                'LINK_IBLOCK_CODE' => 'services',
            ),
            'number_cart' => array(
                'NAME' => 'Номер карты',
                'SORT' => '300',
                'PROPERTY_TYPE' => 'S',
            ),
            'review' => array(
                'NAME' => 'Отзыв',
                'SORT' => '400',
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
            'answer' => array(
                'NAME' => 'Ответ',
                'SORT' => '450',
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
			'user_email' => array(
				'NAME' => 'Скрытое поле для капчи',
				'PROPERTY_TYPE' => 'S',
			),
			'scan_review' => array(
                'NAME' => 'Скан отзыва',
                'SORT' => '500',
                'PROPERTY_TYPE' => 'S',
            ),
			'review_ip' => array(
                'NAME' => 'IP',
                'SORT' => '150',
                'PROPERTY_TYPE' => 'S',
            ),
        );
    }
}

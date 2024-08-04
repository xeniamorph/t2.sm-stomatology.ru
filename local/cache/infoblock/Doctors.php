<?php
	namespace TAO\CachedInfoblock;
use TAO\Infoblock;

/* infoblock ID=6, code=video_list */
class doctors extends Infoblock
{
public function title()
{
return 'Врачи';
}

    public function sites()
    {
        return array('s1');
    }

    public function description()
    {
        return '<div class="b-text text">
	<div class="container">
		<div class="b-text__wrapper">
			<blockquote class="blockquote">
				<p>
					 Нашим специалистам доступны все новейшие методики лечения, имплантации и протезирования зубов
				</p>
			</blockquote>
		</div>
	</div>
</div>
<div class="b-text text">
	<div class="container">
		<div class="b-text__wrapper">
			
				<p>
					 В «СМ-Стоматология» представлен полный спектр диагностической аппаратуры (дентальную компьютерную томографию, компьютерная ортопантомография, радиовизиография, компьютерная диагностика состояния пародонта, компьютерное моделирование коронок и искусственных протезов), что позволяет безошибочно поставить диагноз и составить план лечения.
				</p>
				<p>
					 Консультация у врача-стоматолога проходит в приятной, спокойной обстановке. На первичной консультации вам предложат все возможные варианты лечения, из которых вы сможете выбрать наиболее подходящий.
				</p>
			
		</div>
	</div>
</div>
 <!-- {form} -->
<div class="b-text text">
	<div class="container">
		<div class="b-text__wrapper">
			<p>
				 В «СМ-Стоматология» применяется самое современное оборудование. Новейшие немецкие установки с фиброоптикой и системой веерного охлаждения при препарировании позволяют забыть о боли. Наши специалисты используют проверенные методики и эффективные способы обезболивания, применяется электронная анестезия.
			</p>
			<p>
				 В «СМ-Стоматология» доступны все новейшие методики лечения, имплантации и протезирования зубов. В стоматологических отделениях обеспечена безопасность лечения: каждый стоматологический инструмент стерилизуется индивидуально и упаковывается в крафт-пакет! Прием ведут лучшие врачи-стоматологи.
			</p>
 <br>
		</div>
	</div>
</div>
 <br>';
    }

    public function descriptionType()
    {
        return 'html';
    }

public function access()
{
return array(
            1 => 'X',
            2 => 'R',
            5 => 'W',
        );
}

	public function data()
	{
	return array(
            'LIST_PAGE_URL' => '#SITE_DIR#/doctors/',
            'DETAIL_PAGE_URL' => '#SITE_DIR#/doctors/#ELEMENT_CODE#/',
            'SECTION_PAGE_URL' => '#SITE_DIR#/doctors/#SECTION_CODE#/',
            'TMP_ID' => '3690a992a35ce6f1376e5590bd319386',
            'INDEX_SECTION' => 'Y',
            'WORKFLOW' => 'N',
            'SECTIONS_NAME' => 'Разделы',
            'SECTION_NAME' => 'Раздел',
            'REST_ON' => 'N',
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
            'clinics' => array(
                'NAME' => 'Клиники',
                'PROPERTY_TYPE' => 'E',
                'MULTIPLE' => 'Y',
                'LINK_IBLOCK_ID' => '5',
                'FILTRABLE' => 'Y',
            ),
            'specialization' => array(
                'NAME' => 'Специлизация',
                'PROPERTY_TYPE' => 'S',
            ),
            'certificates' => array(
                'NAME' => 'Сертификаты',
                'PROPERTY_TYPE' => 'F',
                'MULTIPLE' => 'Y',
            ),
            'SUPER_STAR' => array(
                'NAME' => 'Приоритет для блока Звездные врачи',
                'DEFAULT_VALUE' => '100',
                'PROPERTY_TYPE' => 'N',
            ),
            'SQUARE_PHOTO' => array(
                'NAME' => 'Квадратная фотография',
                'PROPERTY_TYPE' => 'F',
            ),
            'experience' => array(
                'NAME' => 'Стаж',
                'PROPERTY_TYPE' => 'N',
                'WITH_DESCRIPTION' => 'Y',
            ),
            'achievements' => array(
                'NAME' => 'Достижения',
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
            'certificates_list' => array(
                'NAME' => 'Сертификаты',
                'PROPERTY_TYPE' => 'S',
                'MULTIPLE' => 'Y',
                'WITH_DESCRIPTION' => 'Y',
            ),
            'doctors_specialization' => array(
                'NAME' => 'Специализация врача',
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
            'education' => array(
                'NAME' => 'Образование',
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
            'work_experience' => array(
                'NAME' => 'Опыт работы',
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
            'professional_skills' => array(
                'NAME' => 'Профессиональные навыки',
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
            'video_list' => array(
                'NAME' => 'Список видео',
                'PROPERTY_TYPE' => 'S',
                'MULTIPLE' => 'Y',
                'USER_TYPE' => 'link_with_text_and_img_property',
            ),
        );
}
}

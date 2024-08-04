<?php

/**
 * Class NotifyDoctorsUnactive
 * Отправка уведомлений о деактивированных врачах участвующих в привязках к указанным блокам
 * Почтовый шаблон и событие создаются автоматически из переменных класса
 */
class NotifyDoctorsUnactive
{
    /**
     * @var string
     * Домен сайта для ссылок в админку
     */
    private static $siteDomain = 'www.sm-stomatology.ru';

    /**
     * @var string
     * ID для создания почтового шаблона и события
     */
    private static $notifyId = 'NOTIFY_DOCTORS_UNACTIVE';

    /**
     * @return string
     * Настройки почтового шаблона и события
     */
    private static $notifySettings = [
        'SITE_ID' => 's1',
        'SUBJECT' => 'Деактивированные врачи',
        'EMAIL_FROM' => 'noreply@smpost.ru',
        'EMAIL_TO' => 'z25x27y31@gmail.com'
    ];

    /**
     * @var \string[][]
     * CODE блока для проверки => [ PROPERTY_CODE ] для проверки
     */
    private static $arBlockCode = [];

    /**
     * @var string[]
     * Проверять элементы в инфоблоках
     * IBLOCK_ID => [ PROPERTY_CODE ]
     */
    private static $arIblocks = [
        2 => ['author'],
        8 => ['doctors']
    ];

    /**
     * @param $error
     * @return string
     * Значение $error отличное от нуля означает что скрипт отработал с ошибкой
     */
    public static function run($error = 0)
    {
        $arResultBlocks = [];
        $arBlocks = [];

        try {
            if (!empty(self::$arBlockCode)) {
                $temp = [];
                // делаем выборку всех активных блоков с заданными CODE
                $arItems = \CIBlockElement::GetList(
                    [],
                    [
                        'CODE' => array_keys(self::$arBlockCode),
                        'ACTIVE' => 'Y'
                    ],
                    false,
                    false,
                    ['ID', 'IBLOCK_ID', 'IBLOCK_TYPE_ID', 'IBLOCK_CODE', 'NAME', 'CODE']
                );
                while ($arItem = $arItems->fetch()) {
                    $temp[$arItem['IBLOCK_ID']][$arItem['ID']] = $arItem;
                    $temp[$arItem['IBLOCK_ID']][$arItem['ID']]['PROPERTIES'] = [];
                }

                // заполняем для всех блоков PROPERTIES
                foreach ($temp as $iblockId => &$arItems) {
                    $arBlockCode = array_unique(array_column($arItems, 'CODE'));
                    $arPropCode = [];
                    foreach ($arBlockCode as $v) {
                        $arPropCode = array_merge($arPropCode, self::$arBlockCode[$v]);
                    }
                    \CIBlockElement::GetPropertyValuesArray(
                        $arItems,
                        $iblockId,
                        [],
                        ['CODE' => $arPropCode]
                    );
                } unset($arItems);
                $arBlocks = array_merge($arBlocks, $temp);
            }

            if (!empty(self::$arIblocks)) {
                $temp = [];
                $arItems = \CIBlockElement::GetList(
                    [],
                    [
                        'IBLOCK_ID' => array_keys(self::$arIblocks),
                        'ACTIVE' => 'Y'
                    ],
                    false,
                    false,
                    ['ID', 'IBLOCK_ID', 'IBLOCK_TYPE_ID', 'IBLOCK_CODE', 'NAME', 'CODE']
                );
                while ($arItem = $arItems->fetch()) {
                    $temp[$arItem['IBLOCK_ID']][$arItem['ID']] = $arItem;
                    $temp[$arItem['IBLOCK_ID']][$arItem['ID']]['PROPERTIES'] = [];
                }

                // заполняем для всех блоков PROPERTIES
                foreach ($temp as $iblockId => &$arItems) {
                    $arPropCode = [];
                    foreach (self::$arIblocks[$iblockId] as $v) {
                        $arPropCode[] = $v;
                    }
                    \CIBlockElement::GetPropertyValuesArray(
                        $arItems,
                        $iblockId,
                        [],
                        ['CODE' => $arPropCode]
                    );
                } unset($arItems);
                $arBlocks = array_merge($arBlocks, $temp);
            }

        } catch (\Throwable $throwable) {
            return 'NotifyDoctorsUnactive::run(1);';
        }

        // собираем id врачей для проверки и блоки с пустыми значениями привязки
        $arBlockDoctors = [];
        foreach ($arBlocks as $blocks) {
            foreach ($blocks as $arBlock) {

                // проверяем наличие свойства у блока, если свойство отсутствует, то добавляем в отчет как с пустым значением
                foreach (self::$arBlockCode[$arBlock['CODE']] as $propCode) {
                    if (isset($arBlock['PROPERTIES'][$propCode])) continue;

                    $arResultBlocks[] = [
                        'ID' => $arBlock['ID'],
                        'IBLOCK_ID' => $arBlock['IBLOCK_ID'],
                        'IBLOCK_CODE' => $arBlock['IBLOCK_CODE'],
                        'IBLOCK_TYPE_ID' => $arBlock['IBLOCK_TYPE_ID'],
                        'NAME' => $arBlock['NAME'],
                        'DOCTOR' => ''
                    ];
                }

                foreach ($arBlock['PROPERTIES'] as $arProp) {
                    if (empty($arProp['VALUE'])) {
                        $arResultBlocks[] = [
                            'ID' => $arBlock['ID'],
                            'IBLOCK_ID' => $arBlock['IBLOCK_ID'],
                            'IBLOCK_CODE' => $arBlock['IBLOCK_CODE'],
                            'IBLOCK_TYPE_ID' => $arBlock['IBLOCK_TYPE_ID'],
                            'NAME' => $arBlock['NAME'],
                            'DOCTOR' => ''
                        ];
                    } elseif (is_array($arProp['VALUE'])) {
                        foreach ($arProp['VALUE'] as $id) {
                            $arBlockDoctors[$id][$arBlock['ID']] = $arBlock;
                        }
                    } else {
                        $arBlockDoctors[$arProp['VALUE']][$arBlock['ID']] = $arBlock;
                    }
                }
            }
        }

        if (!empty($arBlockDoctors)) {
            // получаем неактивных врачей, которые участвуют в привязках блоков
            $arDoctors = [];
            $arItems = \CIBlockElement::GetList(
                ['SORT' => 'ASC'],
                [
                    'ID' => array_keys($arBlockDoctors),
                    'ACTIVE' => 'N'
                ],
                false,
                false,
                ['ID', 'IBLOCK_ID', 'IBLOCK_TYPE_ID', 'IBLOCK_CODE', 'NAME']
            );
            while ($arItem = $arItems->fetch()) {
                $arDoctors[$arItem['ID']] = $arItem;
            }
            foreach ($arDoctors as $arDoctor) {
                // все блоки в которых привязан данный врач
                foreach ($arBlockDoctors[$arDoctor['ID']] as $arBlock) {
                    $arResultBlocks[] = [
                        'ID' => $arBlock['ID'],
                        'IBLOCK_ID' => $arBlock['IBLOCK_ID'],
                        'IBLOCK_CODE' => $arBlock['IBLOCK_CODE'],
                        'IBLOCK_TYPE_ID' => $arBlock['IBLOCK_TYPE_ID'],
                        'NAME' => $arBlock['NAME'],
                        'DOCTOR' => $arDoctor['ID']
                    ];
                }
            }
        }

        if (!empty($arResultBlocks)) {
            $table = "<table border='1' style=\"border-collapse:collapse;\">";
            $table .= "<tbody>";
            $table .= "<tr>";
            $table .= "<td style=\"padding: 2px 4px;\">";
            $table .= '<strong></strong>';
            $table .= "</td>";
            $table .= "<td style=\"padding: 2px 4px;\">";
            $table .= '<strong>Название</strong>';
            $table .= "</td>";
            $table .= "<td style=\"padding: 2px 4px;\">";
            $table .= '<strong>Отключенное резюме врача</strong>';
            $table .= "</td>";
            $table .= "</tr>";
            foreach ($arResultBlocks as $index => $arRow) {
                $table .= "<tr>";
                $table .= "<td style=\"padding: 2px 4px;\">" . ($index + 1) . "</td>";
                $table .= "<td style=\"padding: 2px 4px;\">";
                $table .= "<a href=\"https://" . self::$siteDomain . "/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=" . $arRow['IBLOCK_ID'] . "&type=" . $arRow['IBLOCK_TYPE_ID'] . "&ID=" . $arRow['ID'] . "\" target=\"_blank\">" . $arRow['NAME'] . "</a>";
                $table .= "</td>";
                $table .= "<td style=\"padding: 2px 4px;\">";
                if (empty($arRow['DOCTOR'])) {
                    $table .= "Врач не привязан";
                } else {
                    $table .= "<a href=\"https://" . self::$siteDomain . "/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=" . $arDoctors[$arRow['DOCTOR']]['IBLOCK_ID'] . "&type=" . $arDoctors[$arRow['DOCTOR']]['IBLOCK_TYPE_ID'] . "&ID=" . $arDoctors[$arRow['DOCTOR']]['ID'] . "\" target=\"_blank\">" . $arDoctors[$arRow['DOCTOR']]['NAME'] . "</a>";
                }
                $table .= "</td>";
                $table .= "</tr>";
            }
            $table .= "<tbody>";
            $table .= "</table>";

            // проверяем существование почтового шаблона и события
            $rsET = CEventType::GetList([
                "TYPE_ID" => self::$notifyId,
                "LID" => 'ru'
            ])->Fetch();

            if (empty($rsET)) {
                $et = new CEventType;
                if (!$et->Add([
                    "LID" => 'ru',
                    "EVENT_NAME" => self::$notifyId,
                    "NAME" => self::$notifySettings['SUBJECT'],
                    "DESCRIPTION" => "#TABLE# - таблица с данными"
                ])) return 'NotifyDoctorsUnactive::run(2);';
            }

            $emExist = false;
            $rsMess = CEventMessage::GetList(false, false, ['TYPE_ID' => self::$notifyId]);
            while ($arMess = $rsMess->GetNext()) {
                if ($arMess['EVENT_NAME'] == self::$notifyId) $emExist = true;
            }

            if (!$emExist) {
                $em = new CEventMEssage;
                if (!$em->Add([
                    'ACTIVE' => 'Y',
                    'EVENT_NAME' => self::$notifyId,
                    'LID' => self::$notifySettings['SITE_ID'],
                    'EMAIL_FROM' => self::$notifySettings['EMAIL_FROM'],
                    'EMAIL_TO' => self::$notifySettings['EMAIL_TO'],
                    'SUBJECT' => self::$siteDomain . ' ' . self::$notifySettings['SUBJECT'],
                    'BODY_TYPE' => 'html',
                    'MESSAGE' => "#TABLE#"
                ])) return 'NotifyDoctorsUnactive::run(3);';
            }

            $id = \Bitrix\Main\Mail\Event::send([
                'EVENT_NAME' => self::$notifyId,
                'LID' => self::$notifySettings['SITE_ID'],
                'C_FIELDS' => [
                    'TABLE' => $table
                ]
            ]);

        }

        return 'NotifyDoctorsUnactive::run(0);';
    }
}
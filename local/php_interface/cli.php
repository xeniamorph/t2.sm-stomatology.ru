<?php
chdir('../..');
$_SERVER['DOCUMENT_ROOT'] = '/var/www/sm-stomatology/data/www/sm-stomatology.ru';
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');
TAO::CLI();

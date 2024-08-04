<?
//require_once __DIR__ . '/../local/vendor/autoload.php';
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use WebPConvert\WebPConvert;
use Bitrix\Main\Context;

$request = Context::getCurrent()->getRequest();

function escapeCharacterImg($value) {
	if(isset($value)) {
		$value = strip_tags($value);
		return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
	} else return '';
}

$img_src = escapeCharacterImg($request->get('img'));

if(!empty($img_src)) {
    $img = $_SERVER['DOCUMENT_ROOT'].'/'.str_replace(".webp", "", $img_src);
    //$img_src_webp = $_SERVER['DOCUMENT_ROOT'].'/'.str_replace([".jpg", ".png", ".jpeg"], ".webp", $img_src);
    $img_src_webp = $_SERVER['DOCUMENT_ROOT'].'/'.$img_src.".webp";
    $options_webp = [
        'fail' => 'original',
        'serve-image' => [
            'headers' => [
                'cache-control' => true,
                'vary-accept' => true,
            ],
            'cache-control-header' => 'max-age=31557600',
        ],
    ];
    try {
        WebPConvert::serveConverted($img, $img_src_webp, $options_webp);
    } catch (Exception $e) {
        header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");
    }
}

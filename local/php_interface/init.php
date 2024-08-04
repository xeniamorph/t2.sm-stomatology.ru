<?php
CModule::AddAutoloadClasses(
   '',
   array(
      'SMClinicBuild' => '/local/php_interface/smclinic/SMClinicBuild.php',
      'SMClinicHelper' => '/local/php_interface/smclinic/SMClinicHelper.php',
      'SMClinicForm' => '/local/php_interface/smclinic/SMClinicForm.php',
      'SMClinicAppointmentForm' => '/local/php_interface/smclinic/SMClinicAppointmentForm.php',
      'SMClinicCallbackForm' => '/local/php_interface/smclinic/SMClinicCallbackForm.php',
      'SMClinicReviewForm' => '/local/php_interface/smclinic/SMClinicReviewForm.php',
      'SMClinicQuestionForm' => '/local/php_interface/smclinic/SMClinicQuestionForm.php',
      'SMClinicAdministrationForm' => '/local/php_interface/smclinic/SMClinicAdministrationForm.php',
      'SMClinicLabForm' => '/local/php_interface/smclinic/SMClinicLabForm.php',
      'SMClinicConsultationForm' => '/local/php_interface/smclinic/SMClinicConsultationForm.php',
		'NotifyDoctorsUnactive' => '/local/php_interface/NotifyDoctorsUnactive.php',
   )
);

include_once($_SERVER['DOCUMENT_ROOT'].'/local/vendor/autoload.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/local/php_interface/customProperties/LinkWithTextAndImgProperty.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/local/php_interface/customProperties/CUserTypeIBlockElementCustom.php');
TAO::Init([
	'auth' => 'https://office.techart.ru/project11382/siteadmin/'
]);

\TAO\Urls::addVar('page');

\TAO::addBundles('SMClinic');
//\TAO::addBundles('Google');
\TAO::addBundles('Vars');



AddEventHandler("main", "OnEndBufferContent", "deleteKernelJs");
AddEventHandler("main", "OnEndBufferContent", "deleteKernelCss");

function deleteKernelJs(&$content) {
   global $USER, $APPLICATION;
   if((is_object($USER) && $USER->IsAuthorized()) || strpos($APPLICATION->GetCurDir(), "/bitrix/")!==false) return;
   if($APPLICATION->GetProperty("save_kernel") == "Y") return;

   $arPatternsToRemove = Array(
      '/<script.+?src=".+?kernel_htmleditor\/kernel_htmleditor_v1\.js\?\d+"><\/script\>/',
      '/<script.+?src=".+?kernel_main\/kernel_main_v1\.js\?\d+"><\/script\>/',
      '/<script.+?src=".+?kernel_coreuploader\/kernel_coreuploader_v1\.js\?\d+"><\/script\>/',
      /*'/<script.+?src=".+?bitrix\/js\/main\/core\/core[^"]+"><\/script\>/',*/
      '/<script.+?>BX\.(setCSSList|setJSList)\(\[.+?\]\).*?<\/script>/',
      '/<script.+?>if\(\!window\.BX\)window\.BX.+?<\/script>/',
      '/<script[^>]+?>\(window\.BX\|\|top\.BX\)\.message[^<]+<\/script>/',
   );

   $content = preg_replace($arPatternsToRemove, "", $content);
   $content = preg_replace("/\n{2,}/", "\n\n", $content);
}

function deleteKernelCss(&$content) {
   global $USER, $APPLICATION;
   if((is_object($USER) && $USER->IsAuthorized()) || strpos($APPLICATION->GetCurDir(), "/bitrix/")!==false) return;
   if($APPLICATION->GetProperty("save_kernel") == "Y") return;

   $arPatternsToRemove = Array(
      '/<link.+?href=".+?kernel_main\/kernel_main_v1\.css\?\d+"[^>]+>/',
      '/<link.+?href=".+?html_editor\/html-editor\.min\.css\?\d+"[^>]+>/',
      '/<link.+?href=".+?main\/popup\.min\.css\?\d+"[^>]+>/',
      '/<link.+?href=".+?bitrix\/js\/main\/core\/css\/core[^"]+"[^>]+>/',
      '/<link.+?href=".+?bitrix\/templates\/[\w\d_-]+\/styles.css[^"]+"[^>]+>/',
      '/<link.+?href=".+?bitrix\/templates\/[\w\d_-]+\/template_styles.css[^"]+"[^>]+>/',
      '/<link.+?href=".+?bitrix\/js\/ui\/fonts\/opensans\/ui.font.opensans.min.css[^"]+"[^>]+>/',
      '/<link.+?href=".+?bitrix\/js\/main\/popup\/dist\/main.popup.bundle.min.css[^"]+"[^>]+>/'
   );

   $content = preg_replace($arPatternsToRemove, "", $content);
   $content = preg_replace("/\n{2,}/", "\n\n", $content);
}
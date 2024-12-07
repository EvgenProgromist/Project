<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?><div class="site-section">
    <div class="container">
        <div class="row">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"feedback_service",
	Array(
		"EMAIL_TO" => "statkevich_rabota@mail.ru",
		"EVENT_MESSAGE_ID" => array(0=>"7",),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(0=>"EMAIL",),
		"USE_CAPTCHA" => "Y"
	)
     );?>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/contact_info",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
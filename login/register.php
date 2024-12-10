<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.registration", 
	".default", 
	array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => "",
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => "",
		"SUCCESS_PAGE" => "",
		"USER_PROPERTY" => "",
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
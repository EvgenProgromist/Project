<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

// ссылка для выхода из личного кабинета
$logout = $APPLICATION->GetCurPageParam(
    "logout=yes&" . bitrix_sessid_get(),
    array(
        "login",
        "logout",
        "register",
        "forgot_password",
        "change_password"
    )
);

?>


<? $APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"form_login", 
	array(
		"FORGOT_PASSWORD_URL" => "/login/",
		"PROFILE_URL" => "/login/profile.php",
		"REGISTER_URL" => "/login/register.php",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => "form_login"
	),
	false
);
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
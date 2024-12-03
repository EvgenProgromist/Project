<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 * @var array $arResult - Массив хлебных крошек
 */

global $APPLICATION;

// Если массив с хлебными крошками пустой, возвращаем пустую строку
if (empty($arResult)) {
    return "";
}

$strReturn = '';

$css = $APPLICATION->GetCSSArray();
if (!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css)) {
    $strReturn .= '<link href="' . CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css") . '" type="text/css" rel="stylesheet" />' . "\n";
}


$pageTitle = $APPLICATION->GetTitle();
$backgroundImage = "/local/templates/.default/images/hero_bg_2.jpg";

$strReturn .= '
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(' . $backgroundImage . ');" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <h1 class="mb-2">' . htmlspecialchars($pageTitle) . '</h1>
                <div>
';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    $link = $arResult[$index]["LINK"];
    $isLast = ($index === $itemSize - 1);

    if ($link <> "" && !$isLast) {
        $strReturn .= '<a href="' . $link . '">' . $title . '</a>';
    } else {
        $strReturn .= '<strong class="text-white">' . $title . '</strong>';
    }

    if (!$isLast) {
        $strReturn .= ' <span class="mx-2 text-white">&bullet;</span> ';
    }
}

$strReturn .= '
                </div>
            </div>
        </div>
    </div>
</div>
';

return $strReturn;
?>

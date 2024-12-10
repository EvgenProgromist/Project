<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$APPLICATION->SetTitle(GetMessage("PAGE_TITLE"));

?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <? $APPLICATION->ShowHead();?>
    <title><? $APPLICATION->ShowTitle()?></title>
    <? $APPLICATION->AddHeadString('<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"/>'); ?>

    <?
    $APPLICATION->SetAdditionalCSS("/local/templates/.default/fonts/icomoon/style.css");
    $APPLICATION->SetAdditionalCSS("/local/templates/.default/css/bootstrap.min.css");
    $APPLICATION->SetAdditionalCSS("/local/templates/.default/css/magnific-popup.css");
    $APPLICATION->SetAdditionalCSS("/local/templates/.default/css/jquery-ui.css");
    $APPLICATION->SetAdditionalCSS("/local/templates/.default/css/owl.carousel.min.css");
    $APPLICATION->SetAdditionalCSS("/local/templates/.default/css/owl.theme.default.css");
    $APPLICATION->SetAdditionalCSS("/local/templates/.default/css/bootstrap-datepicker.css");
    $APPLICATION->SetAdditionalCSS("/local/templates/.default/css/mediaelementplayer.css");
    $APPLICATION->SetAdditionalCSS("/local/templates/.default/css/animate.css");
    $APPLICATION->SetAdditionalCSS("/local/templates/.default/fonts/flaticon/font/flaticon.css");
    $APPLICATION->SetAdditionalCSS("/local/templates/.default/css/fl-bigmug-line.css");
    $APPLICATION->SetAdditionalCSS("/local/templates/.default/css/aos.css");
    $APPLICATION->SetAdditionalCSS("/local/templates/.default/css/style.css");
    ?>
</head>

<body>
<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>

<div class="site-loader"></div>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-md-6">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/phone.php",
                            "NO-PARAGRAPH" => "Y"
                        )
                    );
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/mail.php",
                            "NO-PARAGRAPH" => "Y"
                        )
                    );?>
                </div>
                <div class="col-6 col-md-6 text-right">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/icon_header.php"
                        )
                    );?>
                </div>
            </div>
        </div>

    </div>
    <div class="site-navbar">
        <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-5 col-md-5 col-lg-1">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/logo.php"
                        )
                    );?>
                </div>
                <div class="col-5 col-md-5 col-lg-9">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "top_menu2",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "3",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MENU_CACHE_TIME" => "36000",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N",
                            "COMPONENT_TEMPLATE" => ".default"
                        ),
                        false
                    );?>

                </div>
                <div class="col-2 col-md-2 col-lg-2">
                    <a href="/login/index.php">Войти на сайт</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?$APPLICATION->IncludeComponent(
    "bitrix:breadcrumb",
    "nav_chain",
    Array(
        "PATH" => "",
        "SITE_ID" => "s1",
        "START_FROM" => "0"
    )
);?>

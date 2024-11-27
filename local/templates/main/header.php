<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$APPLICATION->SetTitle("Биржа недвижимости");

?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <? $APPLICATION->ShowHead();?>
    <title><? $APPLICATION->ShowTitle()?></title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">

    <?
    $APPLICATION->SetAdditionalCSS("/local/.default/fonts/icomoon/style.css");
    $APPLICATION->SetAdditionalCSS("/local/.default/css/bootstrap.min.css");
    $APPLICATION->SetAdditionalCSS("/local/.default/css/magnific-popup.css");
    $APPLICATION->SetAdditionalCSS("/local/.default/css/jquery-ui.css");
    $APPLICATION->SetAdditionalCSS("/local/.default/css/owl.carousel.min.css");
    $APPLICATION->SetAdditionalCSS("/local/.default/css/owl.theme.default.css");
    $APPLICATION->SetAdditionalCSS("/local/.default/css/bootstrap-datepicker.css");
    $APPLICATION->SetAdditionalCSS("/local/.default/css/mediaelementplayer.css");
    $APPLICATION->SetAdditionalCSS("/local/.default/css/animate.css");
    $APPLICATION->SetAdditionalCSS("/local/.default/fonts/flaticon/font/flaticon.css");
    $APPLICATION->SetAdditionalCSS("/local/.default/css/fl-bigmug-line.css");
    $APPLICATION->SetAdditionalCSS("/local/.default/css/aos.css");
    $APPLICATION->SetAdditionalCSS("/local/.default/css/style.css");
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
                    <p class="mb-0">
                        <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span
                                    class="d-none d-md-inline-block ml-2">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_RECURSIVE" => "Y",
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/phone.php"
                                    )
                                );?>
                                </span></a>
                        <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span
                                    class="d-none d-md-inline-block ml-2">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_RECURSIVE" => "Y",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/mail.php"
                                        )
                                    );?>
                                </span></a>
                    </p>
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
                <div class="col-8 col-md-8 col-lg-4">
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
                <div class="col-4 col-md-4 col-lg-8">
                    <nav class="site-navigation text-right text-md-right" role="navigation">

                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                                                                      class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            ".default",
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

                    </nav>
                </div>


            </div>
        </div>
    </div>
</div>


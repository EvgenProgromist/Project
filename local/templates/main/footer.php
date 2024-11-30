<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-5">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/about_homespace.php"
                        )
                    );?>
                </div>



            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4"><?= GetMessage("NAVIGATIONS") ?></h3>
                    </div>
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "footer_menu", Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "ROOT_MENU_TYPE" => "top",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => "",
                        "MAX_LEVEL" => "2",
                        "CHILD_MENU_TYPE" => "left",
                        "USE_EXT" => "N",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N",
                    ),
                        false
                    );?>
                </div>



            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/follow_us.php"
                    )
                );?>



            </div>

        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/copylirgt.php"
                        )
                    );?>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>

        </div>
    </div>
</footer>

</div>

<?
$APPLICATION->AddHeadScript('/local/templates/.default/js/jquery-3.3.1.min.js');
$APPLICATION->AddHeadScript('/local/templates/.default/js/jquery-migrate-3.0.1.min.js');
$APPLICATION->AddHeadScript('/local/templates/.default/js/jquery-ui.js');
$APPLICATION->AddHeadScript('/local/templates/.default/js/popper.min.js');
$APPLICATION->AddHeadScript('/local/templates/.default/js/bootstrap.min.js');
$APPLICATION->AddHeadScript('/local/templates/.default/js/owl.carousel.min.js');
$APPLICATION->AddHeadScript('/local/templates/.default/js/mediaelement-and-player.min.js');
$APPLICATION->AddHeadScript('/local/templates/.default/js/jquery.stellar.min.js');
$APPLICATION->AddHeadScript('/local/templates/.default/js/jquery.countdown.min.js');
$APPLICATION->AddHeadScript('/local/templates/.default/js/jquery.magnific-popup.min.js');
$APPLICATION->AddHeadScript('/local/templates/.default/js/bootstrap-datepicker.min.js');
$APPLICATION->AddHeadScript('/local/templates/.default/js/aos.js');
$APPLICATION->AddHeadScript('/local/templates/.default/js/main.js');
?>

</body>

</html>
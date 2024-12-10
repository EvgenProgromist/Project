<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

?>
<div class="site-blocks-cover overlay" style="background-image: url('/images/hero_bg_2.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded"><?= GetMessage("PROPERTY_DETAILS_OF") ?></span>
                <h1 class="mb-2"><?= $arResult["NAME"] ?></h1>
                <p class="mb-5">
                    <strong class="h2 text-success font-weight-bold">
                        $<?= $arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"] ?? '$1,000,500'; ?>
                    </strong>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="site-section site-section-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="margin-top: -150px;">
                <div class="mb-5">
                    <div class="slide-one-item home-slider owl-carousel">
                        <? if(count($arResult["DISPLAY_PROPERTIES"]["GALLARY_IMG"]["VALUE"]) > 1):?>
                            <?foreach ($arResult["DISPLAY_PROPERTIES"]["GALLARY_IMG"]["FILE_VALUE"] as $file):?>
                            <div>
                                <img src="<?= $file["SRC"]?>" alt="Image" class="img-fluid">
                            </div>
                        <?endforeach;?>
                        <? else:?>
                            <div class="mb-2">
                                <img src="<?= $arResult["DISPLAY_PROPERTIES"]["GALLARY_IMG"]["FILE_VALUE"]["SRC"] ?>" alt="Image" class="img-fluid" width="200" height="200">
                            </div>
                        <?endif;?>
                    </div>
                </div>
                <div class="bg-white">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <strong class="text-success h1 mb-3">
                            $    <?= $arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"] ?? '$1,000,500'; ?>
                            </strong>
                        </div>
                        <div class="col-md-6">
                            <ul class="property-specs-wrap mb-3 mb-lg-0 float-lg-right">
                                <li>
                                    <span class="property-specs"><?= GetMessage("FLOORS") ?></span>
                                    <span class="property-specs-number">
                                        <?= $arResult["DISPLAY_PROPERTIES"]["NUM_FLOOR"]["VALUE"] ?? '2'; ?>
                                    </span>
                                </li>
                                <li>
                                    <span class="property-specs"><?= GetMessage("CREATION_DATE") ?></span>
                                    <span class="property-specs-number">
                                        <?= $arResult["ACTIVE_FROM"]; ?>
                                    </span>
                                </li>
                                <li>
                                    <span class="property-specs"><?= GetMessage("TOTAL_ARIA") ?></span>
                                    <span class="property-specs-number">
                                        <?= $arResult["DISPLAY_PROPERTIES"]["TOTAL_ARIA"]["VALUE"] ?? '7,000'; ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text"><?= GetMessage("BATHS") ?></span>
                            <strong class="d-block">
                                <?= $arResult["DISPLAY_PROPERTIES"]["NUM_BATH"]["VALUE"] ?? '2'; ?>
                            </strong>
                        </div>
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text"><?= GetMessage("GARAGES") ?></span>
                            <strong class="d-block">
                                <? if($arResult["DISPLAY_PROPERTIES"]["GARAGE"]["VALUE"] == "y"){
                                    echo("Есть");
                                } else echo("Нету");
                                ?>
                            </strong>
                        </div>
                    </div>
                    <h2 class="h4 text-black"><?= GetMessage("MORE_INFORMATION") ?></h2>
                    <p><?= $arResult["DETAIL_TEXT"] ?? 'No additional information available.'; ?></p>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                    <? if (!empty($arResult["DISPLAY_PROPERTIES"]["GALLARY_IMG"]["VALUE"])):?>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                            <h2 class="h4 text-black mb-3"><?= GetMessage("GALLERY") ?></h2>
                            <?php
                            if(count($arResult["DISPLAY_PROPERTIES"]["GALLARY_IMG"]["VALUE"]) > 1):
                                foreach ($arResult["DISPLAY_PROPERTIES"]["GALLARY_IMG"]["FILE_VALUE"] as $file):
                                    ?>
                                    <div class="mb-2">
                                        <img href="<?= $file["SRC"] ?>" src="<?= $file["SRC"] ?>" alt="Image" class="img-fluid">
                                    </div>
                                <?php
                                endforeach;
                            else:?>
                                <div class="mb-2">
                                    <img src="<?= $arResult["DISPLAY_PROPERTIES"]["GALLARY_IMG"]["FILE_VALUE"]["SRC"] ?>" alt="Image" class="img-fluid" width="200" height="200">
                                </div>
                            <?endif;?>
                        </div>
                    <? endif; ?>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <? if (!empty($arResult["DISPLAY_PROPERTIES"]["ADD_MAT"]["VALUE"])):?>
                        <h2 class="h4 text-black mb-3"><?= GetMessage("ADDITIONAL_MATERIALS") ?></h2>
                        <?php
                            if(count($arResult["DISPLAY_PROPERTIES"]["ADD_MAT"]["VALUE"]) > 1):
                            foreach ($arResult["DISPLAY_PROPERTIES"]["ADD_MAT"]["FILE_VALUE"] as $file):
                                ?>
                                <div class="mb-2">
                                    <a href="<?= $file["SRC"] ?>"><?= $file["ORIGINAL_NAME"] ?></a>
                                </div>
                            <?php
                            endforeach;
                            else:?>
                                <div class="mb-2">
                                    <a href="<?= $arResult["DISPLAY_PROPERTIES"]["ADD_MAT"]["FILE_VALUE"]["SRC"] ?>"><?= $arResult["DISPLAY_PROPERTIES"]["ADD_MAT"]["FILE_VALUE"]["ORIGINAL_NAME"] ?></a>
                                </div>
                        <?endif;?>

                        <? endif; ?>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <h2 class="h4 text-black mb-3"><?= GetMessage("EXTERNAL_LINKS") ?></h2>
                    </div>
                    <?php
                    if (!empty($arResult["DISPLAY_PROPERTIES"]["LINK_RES"]["VALUE"])):
                        foreach ($arResult["DISPLAY_PROPERTIES"]["LINK_RES"]["DISPLAY_VALUE"] as $file):
                            ?>
                            <div class="mb-2">
                                <p><?= $file ?><br></p>

                            </div>
                        <?php
                        endforeach;
                    else:
                        ?>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-lg-4 pl-md-5">
                <div class="bg-white widget border rounded">
                    <h3 class="h4 text-black widget-title mb-3"><?= GetMessage("CONTACT_AGENT") ?></h3>
                    <form action="" class="form-contact-agent">
                        <div class="form-group">
                            <label for="name"><?= GetMessage("NAME") ?></label>
                            <input type="text" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email"><?= GetMessage("EMAIL") ?></label>
                            <input type="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone"><?= GetMessage("PHONE") ?></label>
                            <input type="text" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="bg-white widget border rounded">
                    <h3 class="h4 text-black widget-title mb-3"><?= GetMessage("PARAGRAPH") ?></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
                </div>
            </div>
        </div>
    </div>
</div>

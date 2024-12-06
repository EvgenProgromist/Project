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

<html lang="<?= LANGUAGE_ID ?>">
<div class="site-section site-section-sm bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="site-section-title">
                    <h2><?= GetMessage("PAGE_TITLE_NEW_PROPERTIES") ?></h2>
                </div>
            </div>
        </div>


    <!--Фильтр-поисковик-->
    <div class="pt-5">
        <div class="container">
            <form class="row">

                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="select-wrap">
                        <span class="icon icon-arrow_drop_down"></span>
                        <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                            <option value="">Lot Area</option>
                            <option value="1000">1000</option>
                            <option value="800">800</option>
                            <option value="600">600</option>
                            <option value="400">400</option>
                            <option value="200">200</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="select-wrap">
                        <span class="icon icon-arrow_drop_down"></span>
                        <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                            <option value="">Property Status</option>
                            <option value="For Sale">For Sale</option>
                            <option value="For Rent">For Rent</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="select-wrap">
                        <span class="icon icon-arrow_drop_down"></span>
                        <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                            <option value="">Location</option>
                            <option value="United States">United States</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Canada">Canada</option>
                            <option value="Belgium">Belgium</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="select-wrap">
                        <span class="icon icon-arrow_drop_down"></span>
                        <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                            <option value="">Lot Area</option>
                            <option value="1000">1000</option>
                            <option value="800">800</option>
                            <option value="600">600</option>
                            <option value="400">400</option>
                            <option value="200">200</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="select-wrap">
                        <span class="icon icon-arrow_drop_down"></span>
                        <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                            <option value="">Bedrooms</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5+">5+</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="select-wrap">
                        <span class="icon icon-arrow_drop_down"></span>
                        <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                            <option value="">Bathrooms</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5+">5+</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="mb-4">
                        <div id="slider-range" class="border-primary"></div>
                        <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <input type="submit" class="btn btn-primary btn-block form-control-same-height rounded-0" value="Search">
                </div>

            </form>


        </div>
    </div>

<!--Фильтр-поисковик-->

    <div class="row mb-5">
        <?if($arParams["DISPLAY_TOP_PAGER"]):?>
            <?=$arResult["NAV_STRING"]?><br />
        <?endif;?>
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="col-md-6 col-lg-4 mb-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="prop-entry d-block">
                    <figure>
                        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                            <img
                                    src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                    alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                    title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                                    class="img-fluid">
                        <?else:?>
                            <img src="/local/templates/.default/images/no_image.png" alt="No Image" class="img-fluid">
                        <?endif;?>
                    </figure>
                    <div class="prop-text">
                        <div class="inner">
                            <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                                <span class="price rounded"><?=htmlspecialchars($arItem["NAME"])?></span>
                            <?endif;?>
                            <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                                <h3 class="title"><?=htmlspecialchars($arItem["PREVIEW_TEXT"])?></h3>
                            <?endif;?>
                            <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                                <p class="location"><?=htmlspecialchars($arItem["DISPLAY_ACTIVE_FROM"])?></p>
                            <?endif;?>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <span><?= GetMessage("TOTAL_ARIA") ?></span>
                                    <strong><?=$arItem["PROPERTIES"]["TOTAL_ARIA"]["VALUE"] ?: 'N/A'?>m<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <span><?= GetMessage("PROPERTY_FLOORS") ?>:</span>
                                    <strong><?=$arItem["PROPERTIES"]["NUM_FLOOR"]["VALUE"] ?: 'N/A'?></strong>
                                </div>
                                <div class="col">
                                    <span><?= GetMessage("PROPERTY_BATHS") ?>:</span>
                                    <strong><?=$arItem["PROPERTIES"]["NUM_BATH"]["VALUE"] ?: 'N/A'?></strong>
                                </div>
                                <div class="col">
                                    <span><?= GetMessage("GARAGES") ?>:</span>
                                    <strong><? if($arItem["PROPERTIES"]["GARAGE"]["VALUE"] == "y"){
                                                 echo("Есть");
                                               } else echo("Нету");
                                    ?></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?endforeach;?>
    </div>
    </div>
</div>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <br /><?=$arResult["NAV_STRING"]?>
    <?endif;?>


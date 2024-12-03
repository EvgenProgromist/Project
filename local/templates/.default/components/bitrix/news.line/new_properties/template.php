<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<div class="row mb-5">
    <? foreach ($arResult["ITEMS"] as $arItem):
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
        ?>
        <div class="col-md-6 col-lg-4 mb-4" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <a href="<?= $arItem["PROPERTY_LINK_RES_VALUE"] ?>" class="prop-entry d-block">
                <? if (isset($arItem["PREVIEW_PICTURE"])): ?>
                    <figure>
                        <img alt="Image" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" class="img-fluid">
                    </figure>
                <? endif; ?>
                <div class="prop-text">
                    <div class="inner">
                        <span class="price rounded">$<?= $arItem["PROPERTY_PRICE_VALUE"] ?></span>
                        <h3 class="title"><?= $arItem["NAME"] ?></h3>
                        <p class="location">
                            <?= $arItem["PROPERTY_LOCATION_VALUE"] ?>
                        </p>
                    </div>
                    <div class="prop-more-info">
                        <div class="inner d-flex">
                            <div class="col">
                                <strong><?= $arItem["PROPERTY_TOTAL_ARIA_VALUE"] ?>m<sup>2</sup></strong>
                            </div>
                            <div class="col">
                                <?= GetMessage("BEDS_LABEL") ?> <strong>2</strong>
                            </div>
                            <div class="col">
                                <?= GetMessage("BATHS_LABEL") ?> <strong><?= $arItem["PROPERTY_NUM_BATH_VALUE"] ?></strong>
                            </div>
                            <div class="col">
                                <? if ($arItem["DISPLAY_PROPERTIES"]["GARAGE"]["VALUE"] == "Y"): ?>
                                    <?= GetMessage("GARAGES_LABEL") ?>: <strong><?= GetMessage("GARAGE_AVAILABLE") ?></strong>
                                <? endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <? endforeach; ?>
</div>

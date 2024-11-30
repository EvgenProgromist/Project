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
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="slide-one-item home-slider owl-carousel">
        <?php foreach ($arResult['ITEMS'] as $arItem): ?>
            <?php

            $image = $arItem['PREVIEW_PICTURE']['SRC'] ?? '/local/.default/images/default.jpg';
            $title = $arItem['NAME'];
            $location = $arItem['PROPERTIES']['LOCATION']['VALUE'] ?? 'Unknown Location';
            $price = $arItem['PROPERTIES']['PRICE']['VALUE'] ?? 'Price not specified';
            $link = $arItem['DETAIL_PAGE_URL'];
            ?>
            <div class="site-blocks-cover" style="background-image: url(<?= $image ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="text">
                    <h2><?= htmlspecialchars($title) ?></h2>
                    <p class="location">
                        <span class="property-icon icon-room"></span> <?= htmlspecialchars($location) ?>
                    </p>
                    <p class="mb-2">
                        <strong><?= htmlspecialchars($price) ?></strong>
                    </p>
                    <p class="mb-0">
                        <a href="<?= htmlspecialchars($link) ?>" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>

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
<div class="row mb-5">
    <?php foreach ($arResult['ITEMS'] as $arItem): ?>
        <?php
        $image = $arItem['PREVIEW_PICTURE']['SRC'] ?? '/local/.default/images/default.jpg';
        $title = $arItem['NAME'];
        $location = $arItem['PROPERTIES']['LOCATION']['VALUE'] ?? 'Unknown Location';
        $price = $arItem['PROPERTIES']['PRICE']['VALUE'] ?? 'Not specified';
        $area = $arItem['PROPERTIES']['AREA']['VALUE'] ?? 'N/A';
        $beds = $arItem['PROPERTIES']['BEDS']['VALUE'] ?? '0';
        $baths = $arItem['PROPERTIES']['BATHS']['VALUE'] ?? '0';
        $garages = $arItem['PROPERTIES']['GARAGES']['VALUE'] ?? '0';
        $link = $arItem['DETAIL_PAGE_URL'];
        ?>
        <div class="col-md-6 col-lg-4 mb-4">
            <a href="<?= htmlspecialchars($link) ?>" class="prop-entry d-block">
                <figure>
                    <img alt="<?= htmlspecialchars($title) ?>" src="<?= htmlspecialchars($image) ?>" class="img-fluid">
                </figure>
                <div class="prop-text">
                    <div class="inner">
                        <span class="price rounded">$<?= htmlspecialchars($price) ?></span>
                        <h3 class="title"><?= htmlspecialchars($title) ?></h3>
                        <p class="location"><?= htmlspecialchars($location) ?></p>
                    </div>
                    <div class="prop-more-info">
                        <div class="inner d-flex">
                            <div class="col">Area: <strong><?= htmlspecialchars($area) ?>m<sup>2</sup></strong></div>
                            <div class="col">Beds: <strong><?= htmlspecialchars($beds) ?></strong></div>
                            <div class="col">Baths: <strong><?= htmlspecialchars($baths) ?></strong></div>
                            <div class="col">Garages: <strong><?= htmlspecialchars($garages) ?></strong></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>

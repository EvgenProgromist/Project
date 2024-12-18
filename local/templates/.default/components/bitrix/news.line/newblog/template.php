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

<div class="row">
    <?foreach($arResult["ITEMS"] as $arItem):
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
        ?>
        <div class="col-md-6 col-lg-4 mb-5" id="<?=$this->GetEditAreaId($arItem['ID']);?>" data-aos="fade-up" data-aos-delay="100">
            <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>">
                <?if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])):?>
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" alt="<?= $arItem["NAME"]; ?>" class="img-fluid">
                <?else:?>
                    <img src="/path/to/default-image.jpg" alt="No Image" class="img-fluid">
                <?endif;?>
            </a>
            <div class="p-4 bg-white">
                <span class="d-block text-secondary small text-uppercase"><?= $arItem["DISPLAY_ACTIVE_FROM"]; ?></span>
                <h2 class="h5 text-black mb-3">
                    <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>"><?= $arItem["NAME"]; ?></a>
                </h2>
                <p><?= $arItem["PREVIEW_TEXT"]; ?></p>
            </div>
        </div>
    <?endforeach;?>
</div>

<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && !$arResult["NavShowAll"])) {
        return;
    }
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
?>

<div class="row">
    <div class="col-md-12 text-center">
        <div class="site-pagination">
            <?php
            // Список страниц
            for ($page = $arResult["nStartPage"]; $page <= $arResult["nEndPage"]; $page++):
                if ($page == $arResult["NavPageNomer"]): ?>
                    <a href="#" class="active"><?= $page ?></a>
                <?php else: ?>
                    <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $page ?>"><?= $page ?></a>
                <?php endif;
            endfor;

            // Переход к последней странице
            if ($arResult["NavPageCount"] > $arResult["nEndPage"]): ?>
                <span>...</span>
                <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["NavPageCount"] ?>"><?= $arResult["NavPageCount"] ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>

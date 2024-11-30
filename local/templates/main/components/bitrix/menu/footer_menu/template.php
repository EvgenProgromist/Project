<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<nav class="site-navigation text-left text-md-left" role="navigation">
    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
        <a href="#" class="site-menu-toggle js-menu-toggle text-black">
            <span class="icon-menu h3"></span>
        </a>
    </div>
    <?php if (!empty($arResult)): ?>
        <ul class="list-unstyled">
            <?php foreach ($arResult as $arItem): ?>
                <?php if ($arItem["DEPTH_LEVEL"] == 1): // Только первый уровень ?>
                    <li>
                        <a href="<?= $arItem["LINK"] ?>"
                           class="<?= ($arItem["SELECTED"] ? 'root-item-selected' : 'root-item') ?>">
                            <?= $arItem["TEXT"] ?>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</nav>
<div class="menu-clear-left"></div>

<div class="menu-clear-left"></div>

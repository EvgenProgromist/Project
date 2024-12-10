<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

    <div class="col-md-12 col-lg-8 mb-5">
        <?php if (!empty($arResult["ERROR_MESSAGE"])): ?>
            <?php foreach ($arResult["ERROR_MESSAGE"] as $v): ?>
                <?php ShowError($v); ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php if (!empty($arResult["OK_MESSAGE"])): ?>
            <div class="mf-ok-text"><?= $arResult["OK_MESSAGE"] ?></div>
        <?php endif; ?>

        <form action="<?= POST_FORM_ACTION_URI ?>" method="POST" class="p-5 bg-white border">
            <?= bitrix_sessid_post() ?>

            <!-- Full Name -->
            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="fullname"><?= GetMessage("MFT_NAME") ?>
                        <?php if (empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])): ?>
                            <span class="mf-req">*</span>
                        <?php endif; ?>
                    </label>
                    <input type="text" id="fullname" name="user_name" class="form-control"
                           placeholder="Full Name" value="<?= $arResult["AUTHOR_NAME"] ?>">
                </div>
            </div>

            <!-- Email -->
            <div class="row form-group">
                <div class="col-md-12">
                    <label class="font-weight-bold" for="email"><?= GetMessage("MFT_EMAIL") ?>
                        <?php if (empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])): ?>
                            <span class="mf-req">*</span>
                        <?php endif; ?>
                    </label>
                    <input type="email" id="email" name="user_email" class="form-control"
                           placeholder="Email Address" value="<?= $arResult["AUTHOR_EMAIL"] ?>">
                </div>
            </div>

            <!-- Message -->
            <div class="row form-group">
                <div class="col-md-12">
                    <label class="font-weight-bold" for="message"><?= GetMessage("MFT_MESSAGE") ?>
                        <?php if (empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])): ?>
                            <span class="mf-req">*</span>
                        <?php endif; ?>
                    </label>
                    <textarea name="MESSAGE" id="message" cols="30" rows="5" class="form-control"
                              placeholder="Say hello to us"><?= ($arResult["MESSAGE"] ?? '') ?></textarea>
                </div>
            </div>

            <!-- CAPTCHA -->
            <?php if ($arParams["USE_CAPTCHA"] == "Y"): ?>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="font-weight-bold" for="captcha_word"><?= GetMessage("MFT_CAPTCHA") ?></label>
                        <input type="hidden" name="captcha_sid" value="<?= $arResult["capCode"] ?>">
                        <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>"
                             width="180" height="40" alt="CAPTCHA">
                        <input type="text" id="captcha_word" name="captcha_word" class="form-control"
                               placeholder="<?= GetMessage("MFT_CAPTCHA_CODE") ?>" size="30" maxlength="50">
                    </div>
                </div>
            <?php endif; ?>

            <!-- Submit Button -->
            <div class="row form-group">
                <div class="col-md-12">
                    <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
                    <input type="submit" value="<?= GetMessage("MFT_SUBMIT") ?>"
                           class="btn btn-primary py-2 px-4 rounded-0">
                </div>
            </div>
        </form>
    </div>




<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Web\Json;

echo '<pre>';
print_r($_POST);
echo '</pre>';
?>

?>
<div class="bx-auth">
    <? if (!empty($arParams["~AUTH_RESULT"])): ?>
        <? ShowMessage($arParams["~AUTH_RESULT"]); ?>
    <? endif; ?>

    <? if ($arResult["SHOW_EMAIL_SENT_CONFIRMATION"]): ?>
        <p><?= GetMessage("AUTH_EMAIL_SENT") ?></p>
    <? elseif ($arResult["USE_EMAIL_CONFIRMATION"] === "Y"): ?>
        <p><?= GetMessage("AUTH_EMAIL_WILL_BE_SENT") ?></p>
    <? endif; ?>

    <form method="post" action="<?= $arResult["AUTH_URL"] ?>" enctype="multipart/form-data">
        <?= bitrix_sessid_post() ?>
        <input type="hidden" name="AUTH_FORM" value="Y" />
        <input type="hidden" name="TYPE" value="REGISTRATION" />
        
        <? if (!empty($arResult["BACKURL"])): ?>
            <input type="hidden" name="backurl" value="<?= $arResult["BACKURL"] ?>" />
        <? endif; ?>

        <div>
            <label for="user_login"><?= GetMessage("AUTH_LOGIN_MIN") ?>:</label>
            <input type="text" id="user_login" name="USER_LOGIN" value="<?= htmlspecialcharsbx($arResult["USER_LOGIN"]) ?>" />
        </div>
        <div>
            <label for="user_email"><?= GetMessage("AUTH_EMAIL") ?>:</label>
            <input type="text" id="user_email" name="USER_EMAIL" value="<?= htmlspecialcharsbx($arResult["USER_EMAIL"]) ?>" />
        </div>
        <div>
            <label for="user_password"><?= GetMessage("AUTH_PASSWORD_REQ") ?>:</label>
            <input type="password" id="user_password" name="USER_PASSWORD" value="" autocomplete="off" />
        </div>
        <div>
            <label for="user_confirm_password"><?= GetMessage("AUTH_CONFIRM") ?>:</label>
            <input type="password" id="user_confirm_password" name="USER_CONFIRM_PASSWORD" value="" autocomplete="off" />
        </div>
        <div>
            <label><?= GetMessage("USER_TYPE") ?>:</label>
            <label>
                <input type="radio" name="UF_USER_TYPE" value="Продавец" <?= $arResult["UF_USER_TYPE"] === "Продавец" ? "checked" : "" ?> /> <?= GetMessage("USER_TYPE_SELLER") ?>
            </label>
            <label>
                <input type="radio" name="UF_USER_TYPE" value="Покупатель" <?= $arResult["UF_USER_TYPE"] === "Покупатель" ? "checked" : "" ?> /> <?= GetMessage("USER_TYPE_BUYER") ?>
            </label>
        </div>

        <? if ($arResult["USE_CAPTCHA"] == "Y"): ?>
            <div>
                <input type="hidden" name="captcha_sid" value="<?= $arResult["CAPTCHA_CODE"] ?>" />
                <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["CAPTCHA_CODE"] ?>" alt="CAPTCHA" />
                <label for="captcha_word"><?= GetMessage("CAPTCHA_REGF_PROMT") ?>:</label>
                <input type="text" id="captcha_word" name="captcha_word" value="" autocomplete="off" />
            </div>
        <? endif; ?>

        <div>
            <button type="submit" name="Register"><?= GetMessage("AUTH_REGISTER") ?></button>
        </div>
    </form>
</div>

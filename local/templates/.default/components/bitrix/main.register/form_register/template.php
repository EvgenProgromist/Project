<?php
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2024 Bitrix
 */

use Bitrix\Main\Web\Json;

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if($arResult["SHOW_SMS_FIELD"] == true)
{
	CJSCore::Init('phone_auth');
}



?>
<div class="bx-auth-reg">

<?if(!$USER->IsAuthorized()):?>

    <div class="bx-auth-reg">

        <?if($USER->IsAuthorized()):?>

            <p><?= GetMessage("MAIN_REGISTER_AUTH") ?></p>

        <?else:?>

            <?if (!empty($arResult["ERRORS"])):?>
                <?foreach ($arResult["ERRORS"] as $key => $error):?>
                    <?if (intval($key) == 0 && $key !== 0):?>
                        <?$arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#", "&quot;" . GetMessage("REGISTER_FIELD_" . $key) . "&quot;", $error);?>
                    <?endif;?>
                <?endforeach;?>
                <?= ShowError(implode("<br />", $arResult["ERRORS"])) ?>
            <?elseif($arResult["USE_EMAIL_CONFIRMATION"] === "Y"):?>
                <p><?= GetMessage("REGISTER_EMAIL_WILL_BE_SENT") ?></p>
            <?endif?>

            <form action="<?= POST_FORM_ACTION_URI ?>" method="POST" name="regform" enctype="multipart/form-data">
                <?= bitrix_sessid_post() ?>

                <?if ($arResult["BACKURL"] <> ''):?>
                    <input type="hidden" name="backurl" value="<?= $arResult["BACKURL"] ?>" />
                <?endif;?>

                <div>
                    <label for="user_login">Логин:</label>
                    <input type="text" id="user_login" name="REGISTER[LOGIN]" value="<?= htmlspecialcharsbx($arResult["VALUES"]["LOGIN"]) ?>">
                </div>

                <div>
                    <label for="user_password">Пароль:</label>
                    <input type="password" id="user_password" name="REGISTER[PASSWORD]" value="<?= htmlspecialcharsbx($arResult["VALUES"]["PASSWORD"]) ?>" autocomplete="off">
                </div>

                <div>
                    <label for="user_confirm_password">Повторите пароль:</label>
                    <input type="password" id="user_confirm_password" name="REGISTER[CONFIRM_PASSWORD]" value="<?= htmlspecialcharsbx($arResult["VALUES"]["CONFIRM_PASSWORD"]) ?>" autocomplete="off">
                </div>

                <div>
                    <label>Выберите тип пользователя:</label>
                    <label>
                        <input type="radio" name="REGISTER[UF_USER_TYPE]" value="Продавец" <?= $arResult["VALUES"]["UF_USER_TYPE"] == "Продавец" ? "checked" : "" ?>> Продавец
                    </label>
                    <label>
                        <input type="radio" name="REGISTER[UF_USER_TYPE]" value="Покупатель" <?= $arResult["VALUES"]["UF_USER_TYPE"] == "Покупатель" ? "checked" : "" ?>> Покупатель
                    </label>
                </div>

                <?if ($arResult["USE_CAPTCHA"] == "Y"):?>
                    <div>
                        <input type="hidden" name="captcha_sid" value="<?= $arResult["CAPTCHA_CODE"] ?>">
                        <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["CAPTCHA_CODE"] ?>" alt="CAPTCHA">
                        <input type="text" name="captcha_word" value="" placeholder="<?= GetMessage("REGISTER_CAPTCHA_PROMT") ?>">
                    </div>
                <?endif;?>

                <button type="submit" name="register_submit_button"><?= GetMessage("AUTH_REGISTER") ?></button>
            </form>

            <p><?= $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"] ?></p>
            <p><span class="starrequired">*</span><?= GetMessage("AUTH_REQ") ?></p>

        <?endif?>
    </div>
</div>
<?php endif; ?>
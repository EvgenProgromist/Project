<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();


echo '<pre>';
print_r($arResult);
echo '</pre>';
?>

<div class="bx-system-auth-form">
    <?
    // Показываем ошибки, если они есть
    if ($arResult['SHOW_ERRORS'] === 'Y' && $arResult['ERROR'] && !empty($arResult['ERROR_MESSAGE']))
    {
        ShowMessage($arResult['ERROR_MESSAGE']);
    }

    // Если пользователь не авторизован
    if($arResult["FORM_TYPE"] == "login"): ?>

        <form action="<?=$arResult["AUTH_URL"]?>" method="POST">
            <?=bitrix_sessid_post()?> <!-- Безопасность сессии -->
            <?if($arResult["BACKURL"] <> ''):?>
                <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
            <?endif?>
            <?foreach ($arResult["POST"] as $key => $value):?>
                <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
            <?endforeach?>
            <input type="hidden" name="AUTH_FORM" value="Y" />
            <input type="hidden" name="TYPE" value="AUTH" />

            <div>
                <label for="user_login">Логин:</label>
                <input type="text" id="user_login" name="USER_LOGIN" maxlength="50" value="" size="17" />
                <script>
                    BX.ready(function() {
                        var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
                        if (loginCookie)
                        {
                            var loginInput = document.getElementById("user_login");
                            loginInput.value = loginCookie;
                        }
                    });
                </script>
            </div>
            <div>
                <label for="user_password">Пароль:</label>
                <input type="password" id="user_password" name="USER_PASSWORD" maxlength="255" size="17" autocomplete="off" />
                <?if($arResult["SECURE_AUTH"]):?>
                    <span class="bx-auth-secure" id="bx_auth_secure" title="<?=GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
                <div class="bx-auth-secure-icon"></div>
            </span>
                    <noscript>
            <span class="bx-auth-secure" title="<?=GetMessage("AUTH_NONSECURE_NOTE")?>">
                <div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
            </span>
                    </noscript>
                    <script>
                        document.getElementById('bx_auth_secure').style.display = 'inline-block';
                    </script>
                <?endif?>
            </div>

            <?if ($arResult["CAPTCHA_CODE"]):?>
                <div>
                    <input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
                    <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
                    <br /><br />
                    <input type="text" name="captcha_word" maxlength="50" value="" placeholder="<?=GetMessage("AUTH_CAPTCHA_PROMT")?>" />
                </div>
            <?endif?>

            <button type="submit" name="Login"><?=GetMessage("AUTH_LOGIN_BUTTON")?></button>

            <?if($arResult["NEW_USER_REGISTRATION"] == "Y"):?>
                <p><a href="<?=$arResult["AUTH_REGISTER_URL"]?>"><?=GetMessage("AUTH_REGISTER")?></a></p>
            <?endif?>

            <p><a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a></p>
        </form>

    <?else: // Если пользователь авторизован ?>

        <form action="<?=$arResult["AUTH_URL"]?>">
            <p><?=$arResult["USER_NAME"]?> [<?=$arResult["USER_LOGIN"]?>]</p>
            <p><a href="<?=$arResult["PROFILE_URL"]?>"><?=GetMessage("AUTH_PROFILE")?></a></p>
            <input type="hidden" name="logout" value="yes" />
            <input type="submit" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" />
        </form>

    <?endif?>
</div>

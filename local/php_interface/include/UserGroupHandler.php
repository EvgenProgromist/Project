<?php
use Bitrix\Main\UserTable;
use Bitrix\Main\Loader;

class UserGroupHandler
{
    public static function OnAfterUserAddHandler($userID)
    {
        // Проверяем, что модуль "main" подключен
        if (!Loader::includeModule('main')) {
            return;
        }

        // Преобразуем $userID в число, чтобы исключить ошибки
        $userID = (int)$userID;
        if ($userID <= 0) {
            return;
        }

        // Получаем данные пользователя через ORM
        $user = UserTable::getList([
            'filter' => ['=ID' => $userID],
            'select' => ['ID', 'UF_USER_TYPE']
        ])->fetch();

        if (!$user) {
            return; // Пользователь не найден
        }

        // Ваше пользовательское поле
        $userType = $user['UF_USER_TYPE'];

        // ID групп: замените на реальные значения
        $sellerGroupId = 8; // Продавец
        $buyerGroupId = 7;  // Покупатель

        // Определяем, в какую группу добавить
        $groupIdToAdd = null;

        if ($userType === 'SELLER' || $userType === 'Продавец') {
            $groupIdToAdd = $sellerGroupId;
        } elseif ($userType === 'BUYER' || $userType === 'Покупатель') {
            $groupIdToAdd = $buyerGroupId;
        }

        // Если группа определена, добавляем пользователя в нее
        if ($groupIdToAdd) {
            $userGroups = \CUser::GetUserGroup($userID); // Получаем текущие группы пользователя
            $userGroups[] = $groupIdToAdd; // Добавляем новую группу

            // Устанавливаем группы для пользователя
            \CUser::SetUserGroup($userID, $userGroups);
        }
    }
}

<?php
use Bitrix\Main\Loader;

// Подключаем класс для работы с обработчиками
Loader::includeModule("main");

// Подключаем наш класс
require_once __DIR__ . '/include/UserGroupHandler.php';

// Регистрируем обработчик
AddEventHandler("main", "OnAfterUserAdd", ["UserGroupHandler", "OnAfterUserAddHandler"]);

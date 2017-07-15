<?php
define("NOT_CHECK_PERMISSIONS", true);
define("NO_AGENT_CHECK", true);
$GLOBALS["DBType"] = 'mysql';
$_SERVER["DOCUMENT_ROOT"] = realpath(__DIR__ . '/../..');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
require($_SERVER["DOCUMENT_ROOT"]."/local/composer/vendor/autoload.php");


global $DB;
$app = \Bitrix\Main\Application::getInstance();
$con = $app->getConnection();
$DB->db_Conn = $con->getResource();


\Bitrix\Main\Loader::includeModule("main");
\Bitrix\Main\Loader::includeModule("iblock");
\Bitrix\Main\Loader::includeModule("sale");
\Bitrix\Main\Loader::includeModule("catalog");

// "authorizing" as admin
$_SESSION["SESS_AUTH"]["USER_ID"] = 1;


<?php
/**
 * @author dev2fun (darkfriend)
 * @copyright darkfriend
 * @version 0.2.0
 */
if (!check_bitrix_sessid()) return;
IncludeModuleLangFile(__FILE__);

CModule::IncludeModule("main");

use \Bitrix\Main\Localization\Loc;

$admMsg = new CAdminMessage(false);
$admMsg->ShowMessage([
    "MESSAGE" => Loc::getMessage('D2F_MULTIDOMAIN_UNINSTALL_SUCCESS'),
    "TYPE" => "OK",
]);
echo BeginNote();
echo Loc::getMessage("D2F_MULTIDOMAIN_UNINSTALL_LAST_MSG");
EndNote();
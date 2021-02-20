<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

if (check_bitrix_sessid() && $_SERVER['REQUEST_METHOD'] == "POST" && !empty($_REQUEST["error_message"]) && !empty($_REQUEST["error_url"]))
{

	$arMailFields = Array();
	$arMailFields["ERROR_EMAIL_SUBJECT"] = trim ($_REQUEST["error_email_subject"]);
	$arMailFields["ERROR_MESSAGE_TITLE"] = trim ($_REQUEST["error_message_title"]);
	$arMailFields["ERROR_MESSAGE"] = trim ($_REQUEST["error_message"]);
	$arMailFields["ERROR_DESCRIPTION_TITLE"] = trim ($_REQUEST["error_desc_title"]);
	$arMailFields["ERROR_DESCRIPTION"] = trim ($_REQUEST["error_desc"]);
	$arMailFields["ERROR_URL"] = $_REQUEST["error_url"];
	$arMailFields["ERROR_REFERER"] = $_REQUEST["error_referer"];
	$arMailFields["ERROR_USERAGENT"] = $_REQUEST["error_useragent"];

	// generate email event (created in the administrative part of the site)
	CEvent::Send("ERROR_CONTENT", SITE_ID, $arMailFields);
}
$this->IncludeComponentTemplate();

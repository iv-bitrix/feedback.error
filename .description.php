<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentDescription = array(
	// component name (3 level) in components tree
	"NAME" => GetMessage("SMSN_FEEDBACK_ERROR_LIST"),
	"DESCRIPTION" => GetMessage("SMSN_FEEDBACK_ERROR_DESC"),
	"ICON" => "/images/feedback.gif",
	"PATH" => array(
		"ID" => "samson",
		// 1 level name in components tree
		"NAME" => GetMessage("SMSN_GROUP_TITLE"),
		"CHILD" => array(
			"ID" => "forms_components",
			// 2 level name in components tree
			"NAME" => GetMessage("SMSN_FEEDBACK_GROUP_TITLE")
		)
	),
);
?>
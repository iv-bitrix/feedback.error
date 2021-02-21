<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$arComponentParameters = array(
	'PARAMETERS' => array(
		'SET_MESSAGE' => array(
			'PARENT' => 'VISUAL',
			'NAME' => GetMessage('SMSN_FEEDBACK_ERROR_ENABLED_PARAM_CAPTION'),
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'N',
			'REFRESH' => 'Y',
		),
	),
);

if ($arCurrentValues['SET_MESSAGE'] == 'Y') {
	$arComponentParameters['PARAMETERS']['FEEDBACK_ERROR_MESSAGE'] = array(
				'PARENT' => 'VISUAL',
				'NAME' => GetMessage('SMSN_FEEDBACK_ERROR_PLACEHOLDER_PARAM_CAPTION'),
				'TYPE' => 'STRING',
				'DEFAULT' => GetMessage('SMSN_FEEDBACK_ERROR_HINT'),
			);
}

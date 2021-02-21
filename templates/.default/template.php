<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

CUtil::InitJSCore(array('window', 'ajax'));

if ($arParams['SET_MESSAGE'] == 'Y') {
	echo '<div id="smsn_feedback_error">';
	echo $arParams['FEEDBACK_ERROR_MESSAGE'];
	echo '</div>';
}
?>

<!-- send localised messages to JS -->
<script>
	BX.message({
		SMSN_FEEDBACK_ERROR_DIALOG_TITLE: '<?= GetMessage("SMSN_FEEDBACK_ERROR_DIALOG_TITLE") ?>',
		SMSN_FEEDBACK_ERROR_DIALOG_QUESTION: '<?= GetMessage("SMSN_FEEDBACK_ERROR_DIALOG_QUESTION") ?>',
		SMSN_BTN_CANCEL: '<?= GetMessage("SMSN_BTN_CANCEL") ?>',
		SMSN_BTN_SEND: '<?= GetMessage("SMSN_BTN_SEND") ?>',
	});
</script>
<!-- component-end -->
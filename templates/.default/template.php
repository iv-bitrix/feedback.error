<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

CUtil::InitJSCore(array('window', 'ajax'));

?>

<!-- show the content message if it is enabled -->
<div id="smsn_feedback_error">
	<?= ($arParams['SET_MESSAGE'] != 'Y') ? : $arParams['FEEDBACK_ERROR_MESSAGE'] ?>
</div>

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
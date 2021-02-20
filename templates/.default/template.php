<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

CUtil::InitJSCore(array('window', 'ajax'));
?>

<div id="smsn_feedback_error"><?= GetMessage("SMSN_FEEDBACK_ERROR_CONTENT_MESSAGE") ?></div>

<!-- send localised messages to JS -->
<script>
	BX.message({
		SMSN_FEEDBACK_ERROR_DIALOG_TITLE: '<?= GetMessage("SMSN_FEEDBACK_ERROR_DIALOG_TITLE") ?>',
		SMSN_FEEDBACK_ERROR_DIALOG_QUESTION: '<?= GetMessage("SMSN_FEEDBACK_ERROR_DIALOG_QUESTION") ?>',
		SMSN_BTN_CANCEL: '<?= GetMessage("SMSN_BTN_CANCEL") ?>',
		SMSN_BTN_SEND: '<?= GetMessage("SMSN_BTN_SEND") ?>',
		SMSN_ERROR_EMAIL_SUBJECT: '<?= GetMessage("SMSN_ERROR_EMAIL_SUBJECT") ?>',
		SMSN_ERROR_EMAIL_MESSAGE_TITLE: '<?= GetMessage("SMSN_ERROR_EMAIL_MESSAGE_TITLE") ?>',
		SMSN_ERROR_EMAIL_DESCRIPTION_TITLE: '<?= GetMessage("SMSN_ERROR_EMAIL_DESCRIPTION_TITLE") ?>',
	});

</script>
<!-- component-end -->
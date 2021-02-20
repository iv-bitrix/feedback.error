// set event listener
BX.bind(document, "keypress", SendError);

/**
 * if event is 'Ctyrl+Enter pressed', then show dialog to send error email
 * @param {event} event 
 * @returns undefined
 */
function SendError(event) {
	// get event
	event = event || window.event;

	// if pressed Ctrl+Enter
	if ((event.ctrlKey) && ((event.keyCode == 0xA) || (event.keyCode == 0xD))) {
		var Dialog = new BX.CDialog({
			title: BX.message('SMSN_FEEDBACK_ERROR_DIALOG_TITLE'),
			head: BX.message('SMSN_FEEDBACK_ERROR_DIALOG_QUESTION'),
			content: '<form method="POST" id="help_form">\
				<input type="hidden" name="error_message" value="'+ getSelectedText() + '">\
				<textarea name="error_desc" style="height: 78px; width: 374px;"></textarea>\
				<input type="hidden" name="error_url" value="'+ window.location + '">\
				<input type="hidden" name="error_referer" value="'+ document.referrer + '">\
				<input type="hidden" name="error_useragent" value="'+ navigator.userAgent + '">\
				<input type="hidden" name="sessid" value="'+ BX.bitrix_sessid() + '"></form>',
			resizable: false,
			height: '198',
			width: '400'
		});

		// formation of a dialogue form using phrases of the current language
		// button action_send generate ajax email sending
		Dialog.SetButtons([
			{
				'title': BX.message('SMSN_BTN_SEND'),
				'id': 'action_send',
				'name': 'action_send',
				'action': function () {
					BX.ajax.submit(BX("help_form"));
					this.parentWindow.Close();
				}
			},
			{
				'title': BX.message('SMSN_BTN_CANCEL'),
				'id': 'cancel',
				'name': 'cancel',
				'action': function () {
					this.parentWindow.Close();
				}
			}
		]);
		Dialog.Show();
	}
}

/**
 * function gets selected text
 * @returns {string} selected text
 */
function getSelectedText() {
	if (window.getSelection) {
		txt = window.getSelection();
	}
	else if (document.getSelection) {
		txt = document.getSelection();
	}
	else if (document.selection) {
		txt = document.selection.createRange().text;
	}
	else return;
	return txt;
}
var Forms = {
	init : function() {
		$("form.ajax *[type='submit']").on('click', this.checkValid);
		$("form.ajax").on('submit', this.submitForm);
	},

	checkValid : function(e) {
		e.preventDefault();
		
		var target = $(e.target);
		var form = target.closest('form');

		if (form.checkValidity()) {
			form.submit();
		}

		return false;
	},

	submitForm : function(e) {
		e.preventDefault();

		// remove response span if it exists
		$("span.response").remove();

		var submitBtn = $(this).find('*[type=submit]');
		var response = $("<span class='response'></span>").css('padding', '0 16px');

		response.html('<img src="/img/ajax-loader.gif" style="float:right; margin: 1em;">');
		response.insertAfter(submitBtn);
		submitBtn.attr('disabled', 'disabled');

		$.ajax({
			url : $(this).attr('action'),
			type : $(this).attr('method'),
			dataType : 'json',
			data : $(this).serialize(),
			success : function(data) {
				if (data.success) {
					response.html("Thank you!");
				} else {
					response.html("<p>An error has occurred.<br>" + data.message + "</p>");
				}
				submitBtn.removeAttr('disabled');
			}
		});

		return false;
	}

};

$(document).ready(function() {
	Forms.init();
});
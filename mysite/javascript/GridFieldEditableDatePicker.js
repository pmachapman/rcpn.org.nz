(function($) {
	$(document).on("click", ".col-Date input.text.date", function() {
		// Clean up the ID
		$(this).attr('id', $(this).attr('name'));
		
		// Show the date picker
		$(this).ssDatepicker();

		if($(this).data('datepicker')) {
			$(this).datepicker('show');
		}
	});
}(jQuery));
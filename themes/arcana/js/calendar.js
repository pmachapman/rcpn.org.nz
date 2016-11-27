// Include the calendar, if this is the calendar page
if ($("#mycalendar.monthly").length > 0) {
	$(window).load( function() {
		$('div#mycalendar').monthly({
			mode: 'event',
			monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
			xmlUrl: '/calendar.xml'
		});
	});
}
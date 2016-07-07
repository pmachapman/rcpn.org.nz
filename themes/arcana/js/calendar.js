// Include the calendar, if this is the calendar page
if ($("#mycalendar.monthly").length > 0) {
	$(window).load( function() {
		$('div#mycalendar').monthly({
			mode: 'event',
			xmlUrl: '/calendar.xml'
		});
	});
}
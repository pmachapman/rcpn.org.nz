<?php
class CalendarEventDate extends DataObject {
	// Add new columns to the database
	private static $db = array(
		'Date' => 'Date'
	);

	private static $has_one = array(
		'CalendarEvent' => 'CalendarEvent'
	);

	private static $summary_fields = array(
		'Date' => 'Date'
	);

	private static $default_sort = '"Date"';
}
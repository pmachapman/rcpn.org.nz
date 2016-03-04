<?php
class CalendarEventDate extends DataObject {
	// Add new columns to the database
	static $db = array(
		'Date' => 'Date'
	);

	public static $has_one = array(
		'CalendarEvent' => 'CalendarEvent'
	);

	public static $summary_fields = array(
		'Date' => 'Date'
	);
	
	private static $default_sort = '"Date"';
}
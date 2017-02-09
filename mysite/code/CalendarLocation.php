<?php
class CalendarLocation extends DataObject {
	// Add new columns to the database
	static $db = array(
		'Name' => 'Varchar(255)'
	);

	private static $belongs_many_many = array (
		'CalendarEvents' => 'CalendarEvent'
	);

	public static $has_one = array(
		'CalendarPage' => 'CalendarPage'
	);
}
<?php

namespace {

	use SilverStripe\ORM\DataObject;

	class CalendarEventDate extends DataObject
	{
		// Add new columns to the database
		private static $db = array(
			'Date' => 'Date'
		);

		private static $has_one = array(
			'CalendarEvent' => CalendarEvent::class
		);

		private static $summary_fields = array(
			'Date' => 'Date'
		);

		private static $default_sort = '"Date"';
	}
}

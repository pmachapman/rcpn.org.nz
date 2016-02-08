<?php
class ExternalLink extends DataObject {
	// Add new columns to the database
	static $db = array(
		'Name' => 'Varchar(255)',
		'Address' => 'Varchar(255)'
	);

	public static $has_one = array(
		'HomePage' => 'HomePage'
	);

	public static $summary_fields = array(
		'Name' => 'Website Name',
		'Address' => 'Website Address'
	);
}
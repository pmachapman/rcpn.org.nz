<?php
class ContactFormSubmission extends DataObject {
	// Add new columns to the database
	static $db = array(
		'Name' => 'Text',
		'Email' => 'Text',
		'Message' => 'Text'
	);

	public static $has_one = array(
		'ContactPage' => 'ContactPage'
	);

	public static $summary_fields = array(
		'Name' => 'Name',
		'Email' => 'Email',
		'Message' => 'Message'
	);
}
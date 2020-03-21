<?php

namespace {

	use SilverStripe\ORM\DataObject;

	class ContactFormSubmission extends DataObject
	{
		// Add new columns to the database
		private static $db = array(
			'Name' => 'Text',
			'Email' => 'Text',
			'Message' => 'Text'
		);

		private static $has_one = array(
			'ContactPage' => ContactPage::class
		);

		private static $summary_fields = array(
			'Name' => 'Name',
			'Email' => 'Email',
			'Message' => 'Message'
		);
	}
}

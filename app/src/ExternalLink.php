<?php

namespace {

	use SilverStripe\ORM\DataObject;

	class ExternalLink extends DataObject
	{
		// Add new columns to the database
		private static $db = array(
			'Name' => 'Varchar(255)',
			'Address' => 'Varchar(255)'
		);

		private static $has_one = array(
			'HomePage' => HomePage::class
		);

		private static $summary_fields = array(
			'Name' => 'Website Name',
			'Address' => 'Website Address'
		);
	}
}

<?php

namespace {

	use PMAChapman\TimePickerField\TimePickerField;
	use SilverStripe\Forms\CheckboxField;
	use SilverStripe\Forms\CheckboxSetField;
	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldButtonRow;
	use SilverStripe\Forms\GridField\GridFieldConfig;
	use SilverStripe\Forms\GridField\GridFieldDeleteAction;
	use SilverStripe\Forms\GridField\GridFieldToolbarHeader;
	use SilverStripe\ORM\DataObject;
	use Symbiote\GridFieldExtensions\GridFieldAddNewInlineButton;
	use Symbiote\GridFieldExtensions\GridFieldEditableColumns;

	class CalendarEvent extends DataObject
	{

		// Add new columns to the database
		private static $db = array(
			'Title' => 'Varchar(255)',
			'StartTime' => 'Time',
			'EndTime' => 'Time',
			'Description' => 'HTMLText',
			'Private' => 'Boolean'
		);

		private static $has_one = array(
			'CalendarPage' => CalendarPage::class
		);

		private static $has_many = array(
			'CalendarEventDates' => CalendarEventDate::class
		);

		private static $many_many = array(
			'Locations' => CalendarLocation::class
		);

		private static $summary_fields = array(
			'Title' => 'Title',
			'StartTime' => 'Start Time',
			'EndTime' => 'End Time',
			'Private' => 'Private Booking'
		);

		public function getCMSFields()
		{
			$fields = parent::getCMSFields();

			// Hide the calendar locations tab
			$fields->removeByName('Locations');

			// Use the time picker field
			$fields->addFieldToTab('Root.Main', new TimePickerField('StartTime'), 'Description');
			$fields->addFieldToTab('Root.Main', new TimePickerField('EndTime'), 'Description');

			// Add a private flag
			$fields->addFieldToTab('Root.Main', new CheckboxField('Private', 'Private Booking'), 'Description');

			// Add the locations
			$fields->addFieldToTab('Root.Main', new CheckboxSetField(
				'Locations',
				'Locations',
				CalendarLocation::get()->map('ID', 'Name')
			), 'Description');

			// Create a default configuration for the new GridField, allowing record deletion
			$config = GridFieldConfig::create();
			$config->addComponent(new GridFieldButtonRow('before'));
			$config->addComponent(new GridFieldToolbarHeader());
			$config->addComponent(new GridFieldEditableColumns());
			$config->addComponent(new GridFieldDeleteAction());
			$config->addComponent(new GridFieldAddNewInlineButton());

			// Create a gridfield to hold the dates
			$externalLinksGridField = new GridField(
				'CalendarEventDatesGrid', // Field name
				'Dates', // Field title
				$this->CalendarEventDates(), // List of all event dates
				$config
			);

			$fields->addFieldToTab('Root.Main', $externalLinksGridField, 'Description');

			// Hide the calendar event date tab
			$fields->removeByName('CalendarEventDates');

			return $fields;
		}

		public function LocationsList()
		{
			if ($this->Locations()->exists()) {
				return implode(', ', $this->Locations()->column('Name'));
			}
		}

		public function getEventDates()
		{
			if ($this->CalendarEventDates()->exists()) {
				return implode(', ', $this->CalendarEventDates()->column('Date'));
			}
		}
	}
}

<?php
class CalendarEvent extends DataObject {
	
	// Add new columns to the database
	static $db = array(
		'Title' => 'Varchar(255)',
		'StartTime' => 'Time',
		'EndTime' => 'Time',
		'Description' => 'HTMLText'
	);

	public static $has_one = array(
		'CalendarPage' => 'CalendarPage'
	);

	private static $has_many = array(
		'CalendarEventDates' => 'CalendarEventDate'
	);

	private static $many_many = array (
		'Locations' => 'CalendarLocation'
	);

	public static $summary_fields = array(
		'Title' => 'Title',
		'StartTime' => 'Start Time',
		'EndTime' => 'End Time'
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		
		// Use the time picker field
		$fields->addFieldToTab('Root.Main', new TimePickerField('StartTime'), 'Description');
		$fields->addFieldToTab('Root.Main', new TimePickerField('EndTime'), 'Description');
		
		// Add the locations
		$fields->addFieldToTab('Root.Main', new CheckboxSetField(
            'Locations',
            'Locations',
            $this->CalendarPage()->CalendarLocations()->map('ID', 'Name')
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
			$this->CalendarEventDates()->sort('Date'), // List of all event dates
			$config
		);

		$fields->addFieldToTab('Root.Main', $externalLinksGridField, 'Description');
		
		// Hide the calendar event date tab
		$fields->removeByName('CalendarEventDates');
		
		return $fields;
	}
}
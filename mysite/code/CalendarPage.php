<?php
class CalendarPage extends Page {

	private static $description = 'The calendar page template';

	private static $has_many = array(
		'CalendarEvents' => 'CalendarEvent',
		'CalendarLocations' => 'CalendarLocation'
	);

	function getCMSFields() {
		$fields = parent::getCMSFields();

		// Create a default configuration for the new GridField, allowing record deletion
		$config = GridFieldConfig_RecordEditor::create();

		// Set the names and data for our gridfield columns
		$config->getComponentByType('GridFieldDataColumns')->setDisplayFields(array(
			'Title' => 'Title',
			'StartTime' => 'Start Time',
			'EndTime' => 'End Time'
		));

		// Create a gridfield to hold the calendar event relationship
		$calendarEventsGridField = new GridField(
			'CalendarEvents', // Field name
			'Calendar Events', // Field title
			$this->CalendarEvents(), // List of all related events
			$config
		);

		// Create a tab named "Calendar" and add our field to it
		$fields->addFieldToTab('Root.Calendar', $calendarEventsGridField); 
		
		// Create a default configuration for the location GridField, allowing record deletion
		$locationsConfig = GridFieldConfig::create();
        $locationsConfig->addComponent(new GridFieldButtonRow('before'));
        $locationsConfig->addComponent(new GridFieldToolbarHeader());
        $locationsConfig->addComponent(new GridFieldTitleHeader());
        $locationsConfig->addComponent(new GridFieldEditableColumns());
        $locationsConfig->addComponent(new GridFieldDeleteAction());
        $locationsConfig->addComponent(new GridFieldAddNewInlineButton());

		// Create a gridfield to hold the locations
		$locationsGridField = new GridField(
			'CalendarLocations', // Field name
			'Calendar Locations', // Field title
			$this->CalendarLocations(), // List of all calendar locations
			$locationsConfig
		);

		// Create a tab named "Locations" and add our field to it
		$fields->addFieldToTab('Root.Locations', $locationsGridField);

		return $fields; 
	}
}
class CalendarPage_Controller extends Page_Controller {
}
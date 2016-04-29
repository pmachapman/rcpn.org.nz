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

    public function init() {
        parent::init();
    }

	public function GroupedCalendarEventsByDate() {
		$view = $this->getRequest()->getVar('view');
		if ($view == "thisweek") {
			$sql = "SELECT `CalendarEvent`.*, `CalendarEventDate`.`Date`, DATE_FORMAT(`CalendarEventDate`.`Date`, '%W %e %M %Y') AS `FormattedDate` FROM `CalendarEvent` INNER JOIN `CalendarEventDate` ON `CalendarEventDate`.`CalendarEventID` = `CalendarEvent`.`ID` WHERE `Date` >= DATE_ADD(CURDATE(), INTERVAL (0 - WEEKDAY(CURDATE())) DAY) AND `Date` < DATE_ADD(CURDATE(), INTERVAL (7 - WEEKDAY(CURDATE())) DAY) ORDER BY `CalendarEventDate`.`Date`, `CalendarEvent`.`StartTime`, `CalendarEvent`.`EndTime`";
		} elseif ($view == "nextweek") {
			$sql = "SELECT `CalendarEvent`.*, `CalendarEventDate`.`Date`, DATE_FORMAT(`CalendarEventDate`.`Date`, '%W %e %M %Y') AS `FormattedDate` FROM `CalendarEvent` INNER JOIN `CalendarEventDate` ON `CalendarEventDate`.`CalendarEventID` = `CalendarEvent`.`ID` WHERE `Date` >= DATE_ADD(CURDATE(), INTERVAL (0 - WEEKDAY(CURDATE()) + 7) DAY) AND `Date` < DATE_ADD(CURDATE(), INTERVAL (7 - WEEKDAY(CURDATE()) + 7) DAY) ORDER BY `CalendarEventDate`.`Date`, `CalendarEvent`.`StartTime`, `CalendarEvent`.`EndTime`";
		} elseif ($view == "thismonth") {
			$sql = "SELECT `CalendarEvent`.*, `CalendarEventDate`.`Date`, DATE_FORMAT(`CalendarEventDate`.`Date`, '%W %e %M %Y') AS `FormattedDate` FROM `CalendarEvent` INNER JOIN `CalendarEventDate` ON `CalendarEventDate`.`CalendarEventID` = `CalendarEvent`.`ID` WHERE `Date` >= CONCAT(DATE_FORMAT(LAST_DAY(CURDATE()),'%Y-%m-'), '01') AND `Date` <= LAST_DAY(CURDATE()) ORDER BY `CalendarEventDate`.`Date`, `CalendarEvent`.`StartTime`, `CalendarEvent`.`EndTime`";
		} elseif ($view == "nextmonth") {
			$sql = "SELECT `CalendarEvent`.*, `CalendarEventDate`.`Date`, DATE_FORMAT(`CalendarEventDate`.`Date`, '%W %e %M %Y') AS `FormattedDate` FROM `CalendarEvent` INNER JOIN `CalendarEventDate` ON `CalendarEventDate`.`CalendarEventID` = `CalendarEvent`.`ID` WHERE `Date` >= CONCAT(DATE_FORMAT(LAST_DAY(DATE_ADD(CURDATE(), INTERVAL 1 MONTH)), '%Y-%m-'), '01') AND `Date` <= LAST_DAY(DATE_ADD(CURDATE(), INTERVAL 1 MONTH)) ORDER BY `CalendarEventDate`.`Date`, `CalendarEvent`.`StartTime`, `CalendarEvent`.`EndTime`";
		} elseif ($view == "thisyear") {
			$sql = "SELECT `CalendarEvent`.*, `CalendarEventDate`.`Date`, DATE_FORMAT(`CalendarEventDate`.`Date`, '%W %e %M %Y') AS `FormattedDate` FROM `CalendarEvent` INNER JOIN `CalendarEventDate` ON `CalendarEventDate`.`CalendarEventID` = `CalendarEvent`.`ID` WHERE `Date` >= CONCAT(YEAR(CURDATE()), '-01-01') AND `Date` <= CONCAT(YEAR(CURDATE()), '-12-31') ORDER BY `CalendarEventDate`.`Date`, `CalendarEvent`.`StartTime`, `CalendarEvent`.`EndTime`";
		} elseif ($view == "nextyear") {
			$sql = "SELECT `CalendarEvent`.*, `CalendarEventDate`.`Date`, DATE_FORMAT(`CalendarEventDate`.`Date`, '%W %e %M %Y') AS `FormattedDate` FROM `CalendarEvent` INNER JOIN `CalendarEventDate` ON `CalendarEventDate`.`CalendarEventID` = `CalendarEvent`.`ID` WHERE `Date` >= CONCAT(YEAR(CURDATE()) + 1, '-01-01') AND `Date` <= CONCAT(YEAR(CURDATE()) + 1, '-12-31') ORDER BY `CalendarEventDate`.`Date`, `CalendarEvent`.`StartTime`, `CalendarEvent`.`EndTime`";
		} elseif ($view == "all") {
			$sql = "SELECT `CalendarEvent`.*, `CalendarEventDate`.`Date`, DATE_FORMAT(`CalendarEventDate`.`Date`, '%W %e %M %Y') AS `FormattedDate` FROM `CalendarEvent` INNER JOIN `CalendarEventDate` ON `CalendarEventDate`.`CalendarEventID` = `CalendarEvent`.`ID` WHERE `Date` >= CURDATE() ORDER BY `CalendarEventDate`.`Date`, `CalendarEvent`.`StartTime`, `CalendarEvent`.`EndTime`";
		} else {
			// Default to the next 14 days
			$sql = "SELECT `CalendarEvent`.*, `CalendarEventDate`.`Date`, DATE_FORMAT(`CalendarEventDate`.`Date`, '%W %e %M %Y') AS `FormattedDate` FROM `CalendarEvent` INNER JOIN `CalendarEventDate` ON `CalendarEventDate`.`CalendarEventID` = `CalendarEvent`.`ID` WHERE `Date` >= CURDATE() AND `Date` <= DATE_ADD(CURDATE(), INTERVAL 14 DAY) ORDER BY `CalendarEventDate`.`Date`, `CalendarEvent`.`StartTime`, `CalendarEvent`.`EndTime`";
		}
		$records = DB::query($sql);
		foreach($records as $record) {
			$objects[] = new $record['ClassName']($record);
		}
		if (isset($objects)) {
			$arrayList = new ArrayList($objects);
		} else {
			$arrayList = new ArrayList();
		}
        return GroupedList::create($arrayList);
    }
}
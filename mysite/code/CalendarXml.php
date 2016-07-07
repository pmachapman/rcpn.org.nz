<?php
class CalendarXmlController extends ContentController
{
	private static $allowed_actions = array(
		'index',
	);

	/**
	 * Default controller action for the calendar.xml file. Renders an xml
	 * file containing all of the event data.
	 *
	 * @return mixed
	 */
	public function index()
	{
		Config::inst()->update('SSViewer', 'set_source_file_comments', false);

		$this->getResponse()->addHeader('Content-Type', 'application/xml; charset="utf-8"');
		$this->getResponse()->addHeader('X-Robots-Tag', 'noindex');

		$sql = "SELECT `CalendarEvent`.*, `CalendarEventDate`.`Date`, DATE_FORMAT(`CalendarEventDate`.`Date`, '%W %e %M %Y') AS `FormattedDate` FROM `CalendarEvent` INNER JOIN `CalendarEventDate` ON `CalendarEventDate`.`CalendarEventID` = `CalendarEvent`.`ID` ORDER BY `CalendarEventDate`.`Date`, `CalendarEvent`.`StartTime`, `CalendarEvent`.`EndTime`";
		$records = DB::query($sql);
		foreach($records as $record) {
			$objects[] = new $record['ClassName']($record);
		}
		if (isset($objects)) {
			$arrayList = new ArrayList($objects);
		} else {
			$arrayList = new ArrayList();
		}
		return $this->customise(new ArrayData(array('Events' => $arrayList)))->renderWith("CalendarXml");
	}

	public function GetCalendarPage(){
		return DataObject::get_one(CalendarPage);
	}
}
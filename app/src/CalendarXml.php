<?php

namespace {

	use SilverStripe\CMS\Controllers\ContentController;
	use SilverStripe\Core\Config\Config;
	use SilverStripe\ORM\ArrayList;
	use SilverStripe\ORM\DataObject;
	use SilverStripe\ORM\DB;
	use SilverStripe\View\ArrayData;

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

			$sql = "SELECT `CalendarEvent`.*, `CalendarEventDate`.`Date`, DATE_FORMAT(`CalendarEventDate`.`Date`, '%W %e %M %Y') AS `FormattedDate`, TIME_FORMAT(`CalendarEvent`.`StartTime`, '%k:%i') AS `FormattedStartTime`, TIME_FORMAT(`CalendarEvent`.`EndTime`, '%k:%i') AS `FormattedEndTime` FROM `CalendarEvent` INNER JOIN `CalendarEventDate` ON `CalendarEventDate`.`CalendarEventID` = `CalendarEvent`.`ID` ORDER BY `CalendarEventDate`.`Date`, `CalendarEvent`.`StartTime`, `CalendarEvent`.`EndTime`";
			$records = DB::query($sql);
			foreach ($records as $record) {
				$objects[] = new $record['ClassName']($record);
			}
			if (isset($objects)) {
				$arrayList = new ArrayList($objects);
			} else {
				$arrayList = new ArrayList();
			}
			return $this->customise(new ArrayData(array('Events' => $arrayList)))->renderWith("CalendarXml");
		}

		public function GetCalendarPage()
		{
			return DataObject::get_one(CalendarPage::class);
		}
	}
}

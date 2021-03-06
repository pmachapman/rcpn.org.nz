<?php

namespace {

	use SilverStripe\ORM\ArrayList;
	use SilverStripe\ORM\DataObject;
	use SilverStripe\ORM\DB;
	use SilverStripe\View\ArrayData;

	class BookingCalendarPage extends Page
	{

		private static $description = 'The booking calendar page template';
	}
	class BookingCalendarPageController extends PageController
	{

		public function init()
		{
			parent::init();
		}

		public function GetDateArray()
		{
			$day = date("Y-m-d");
			$days[] = $day;
			for ($i = 1; $i < 14; $i++) {
				$day = date("Y-m-d", strtotime("+1 day", strtotime($day)));
				$days[] = $day;
			}
			$result = ArrayList::create();
			foreach ($days as $day) {
				$r = ArrayData::create(array('Date' => date("d/m/Y", strtotime($day))));
				$result->push($r);
			}
			return $result;
		}

		public function GetCalendarEvents()
		{
			// Get the next 14 days
			$sql = "SELECT `CalendarEvent`.*, `Date`, (DATEDIFF(`Date`, CURDATE()) * 40) + 40 AS `Top`, (IF(HOUR(`StartTime`) < 7, 0, HOUR(`StartTime`) - 7) * 40) + 120 AS `Left`, (IF(HOUR(`EndTime`) < 7, 0, HOUR(`EndTime`) - 7) - IF(HOUR(`StartTime`) < 7, 0, HOUR(`StartTime`) - 7)) * 40 AS `Width` FROM `CalendarEvent` INNER JOIN `CalendarEventDate` ON `CalendarEventDate`.`CalendarEventID` = `CalendarEvent`.`ID` WHERE `Date` >= CURDATE() AND `Date` <= DATE_ADD(CURDATE(), INTERVAL 14 DAY) ORDER BY `Date`, `StartTime`, `EndTime`";
			$records = DB::query($sql);
			foreach ($records as $record) {
				$objects[] = new $record['ClassName']($record);
			}
			if (isset($objects)) {
				$arrayList = new ArrayList($objects);
			} else {
				$arrayList = new ArrayList();
			}
			return $arrayList;
		}

		public function GetCalendarPage()
		{
			return DataObject::get_one(CalendarPage::class);
		}
	}
}

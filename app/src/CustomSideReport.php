<?php

namespace {

	use SilverStripe\Forms\DateField;
	use SilverStripe\Forms\DropdownField;
	use SilverStripe\Forms\FieldList;
	use SilverStripe\ORM\ArrayList;
	use SilverStripe\ORM\DataObject;
	use SilverStripe\ORM\FieldType\DBDate;
	use SilverStripe\ORM\Queries\SQLSelect;
	use SilverStripe\Reports\Report;

	class CustomSideReportFacilityBookings extends Report
	{

		// Show at the top of the list of reports
		protected $sort = -1;

		// The name of the report
		public function title()
		{
			return 'Calendar Bookings';
		}

		// Which fields on that object we want to show
		public function columns()
		{
			$fields = array(
				'Date' => 'Date',
				'Event' => 'Event',
				'StartTime' => 'Start Time',
				'EndTime' => 'End Time'
			);

			return $fields;
		}

		function parameterFields()
		{
			$params = new FieldList();

			$params->push(new DateField(
				"DateFrom",
				"Report From",
				date("Y-01-01")
			));

			$params->push(new DateField(
				"DateTo",
				"Report To",
				date("Y-12-31")
			));

			$params->push(new DropdownField(
				"PrivateBookings",
				"Private Bookings",
				array(
					'Both' => 'Show Private and Public',
					'Private' => 'Show Private Bookings Only',
					'Public' => 'Show Public Bookings Only'
				)
			));

			return $params;
		}

		// The records used for the report
		function sourceRecords($params, $sort, $limit)
		{
			$result = $this->sourceQuery($params)->execute();
			$list = ArrayList::create();
			foreach ($result as $row) {
				$list->push(new DataObject($row));
			}

			return $list;
		}

		/**
		 * Return the {@link SQLQuery} that provides your report data.
		 */
		function sourceQuery($params)
		{
			$sqlQuery = new SQLSelect();
			$sqlQuery->setFrom('CalendarEvent');
			$sqlQuery->selectField('Date');
			$sqlQuery->selectField('CalendarEvent.Title', 'Event');
			$sqlQuery->selectField('StartTime');
			$sqlQuery->selectField('EndTime');
			$sqlQuery->addInnerJoin('CalendarEventDate', '"CalendarEventDate"."CalendarEventID" = "CalendarEvent"."ID"');

			if (isset($params['DateFrom'])) {
				$fromDate = new DBDate('FromDate');
				$fromDate->setValue($params['DateFrom']);
				$sqlQuery->addWhere(array('Date >= ?' => $fromDate->Format("yyyy-MM-dd")));
			}

			if (isset($params['DateTo'])) {
				$toDate = new DBDate('ToDate');
				$toDate->setValue($params['DateTo']);
				$sqlQuery->addWhere(array('Date <= ?' => $toDate->Format("yyyy-MM-dd")));
			}

			if (isset($params['PrivateBookings'])) {
				if ($params['PrivateBookings'] == 'Private') {
					$sqlQuery->addWhere('Private = 1');
				} elseif ($params['PrivateBookings'] == 'Public') {
					$sqlQuery->addWhere('Private = 0');
				}
			}

			$sqlQuery->addOrderBy('Date');
			$sqlQuery->addOrderBy('Event');
			$sqlQuery->addOrderBy('StartTime');
			$sqlQuery->addOrderBy('EndTime');

			return $sqlQuery;
		}
	}
}

<?php
class CustomSideReport_FacilityBookings extends SS_Report {

	// Show at the top of the list of reports
	protected $sort = -1;
	
	// The name of the report
	public function title() {
		return 'Calendar Bookings';
	}

	// Which fields on that object we want to show
	public function columns() {
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

		return $params;
	}

	// The records used for the report
	function sourceRecords($params, $sort, $limit) 
	{
		$result = $this->sourceQuery($params)->execute();
		$list = ArrayList::create();
		foreach($result as $row) {
			$list->push(new DataObject($row));
		}

		return $list;
	}

	/**
	 * Return the {@link SQLQuery} that provides your report data.
	 */
	function sourceQuery($params) {
		$sqlQuery = new SQLQuery();
		$sqlQuery->setFrom('CalendarEvent');
		$sqlQuery->selectField('Date');
		$sqlQuery->selectField('CalendarEvent.Title', 'Event');
		$sqlQuery->selectField('StartTime');
		$sqlQuery->selectField('EndTime');
		$sqlQuery->addInnerJoin('CalendarEventDate', '"CalendarEventDate"."CalendarEventID" = "CalendarEvent"."ID"');

		if (isset($params['DateFrom']))
		{
			$fromDate = new SS_DateTime('FromDate');
			$fromDate->setValue($params['DateFrom']);
			$sqlQuery->addWhere(array('Date >= ?' => $fromDate->Format("Y-m-d")));
		}

		if (isset($params['DateTo']))
		{
			$toDate = new SS_DateTime('ToDate');
			$toDate->setValue($params['DateTo']);
			$sqlQuery->addWhere(array('Date <= ?' => $toDate->Format("Y-m-d")));
		}

		$sqlQuery->addOrderBy('Date');
		$sqlQuery->addOrderBy('Event');
		$sqlQuery->addOrderBy('StartTime');
		$sqlQuery->addOrderBy('EndTime');

		return $sqlQuery;
	}
}
<?xml version="1.0" encoding="UTF-8"?>
<monthly>
	<% loop $Events %>
	<event>
		<id>$ID</id>
		<name><% if $Private %>Private Booking<% else %>$Title.XML<% end_if %></name>
		<startdate>$Date</startdate>
		<enddate>$Date</enddate>
		<starttime>$FormattedStartTime</starttime>
		<endtime>$FormattedEndTime</endtime>
		<color>#ffb128</color>
		<url>{$CalendarPage.Link}?view=events#event-$ID-$Date</url>
	</event>
	<% end_loop %>
</monthly>
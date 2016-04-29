<!-- Main -->
<section class="wrapper style1">
	<div class="container">
		<div id="content">
			<!-- Content -->
			<article>
				<header>
					<h2>$Title</h2>
				</header>
				$CalendarView
				<% if $BannerImage %>
				<span class="image featured"><img src="$BannerImage.URL" alt="" /></span>
				<% end_if %>
				$Content
				<p>
					<a href="$URLSegment?view=thisweek">This Week</a>
					-
					<a href="$URLSegment?view=nextweek">Next Week</a>
					-
					<a href="$URLSegment?view=thismonth">This Month</a>
					-
					<a href="$URLSegment?view=nextmonth">Next Month</a>
					-
					<a href="$URLSegment?view=thisyear">This Year</a>
					-
					<a href="$URLSegment?view=nextyear">Next Year</a>
					-
					<a href="$URLSegment?view=all">All Upcoming</a>
				</p>
				<div class="calendar">
				<% loop $GroupedCalendarEventsByDate.GroupedBy(FormattedDate) %>
					<h3>$FormattedDate</h3>
						<% loop $Children %>
							<h4 id="event-$ID-$Date"><em>$StartTime.Nice() - $EndTime.Nice()</em> $Title</h4>
							<div><em>$LocationsList</em></div>
							$Description
						<% end_loop %>
				<% end_loop %>
				</div>
			</article>
		</div>
	</div>
</section>
<% include Footer %>
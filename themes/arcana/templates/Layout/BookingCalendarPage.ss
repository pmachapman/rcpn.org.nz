<!-- Main -->
<section class="wrapper style1">
	<div class="container">
		<div id="content">
			<!-- Content -->
			<article>
				<header>
					<h2>$Title</h2>
				</header>
				<% if $BannerImage %>
				<span class="image featured"><img src="$BannerImage.URL" alt="" /></span>
				<% end_if %>
				$Content
				
				<div class="booking-calendar-wrapper">
					<div class="booking-calendar">
						<div class="empty-header"></div>
						<div class="time-header">12 am</div>
						<div class="time-header">1 am</div>
						<div class="time-header">2 am</div>
						<div class="time-header">3 am</div>
						<div class="time-header">4 am</div>
						<div class="time-header">5 am</div>
						<div class="time-header">6 am</div>
						<div class="time-header">7 am</div>
						<div class="time-header">8 am</div>
						<div class="time-header">9 am</div>
						<div class="time-header">10 am</div>
						<div class="time-header">11 am</div>
						<div class="time-header">12 pm</div>
						<div class="time-header">1 pm</div>
						<div class="time-header">2 pm</div>
						<div class="time-header">3 pm</div>
						<div class="time-header">4 pm</div>
						<div class="time-header">5 pm</div>
						<div class="time-header">6 pm</div>
						<div class="time-header">7 pm</div>
						<div class="time-header">8 pm</div>
						<div class="time-header">9 pm</div>
						<div class="time-header">10 pm</div>
						<div class="time-header">11 pm</div>
						<div class="last-time-header">12 pm</div>
						<% loop $GetDateArray %>
						<div class="day-header">$Date</div><% end_loop %>
						<% loop $GetCalendarEvents %>
						<div class="booking" style="top:{$Top}px;left:{$Left}px;width:{$Width}px" title="$Title">$Title</div><% end_loop %>
					</div>
				</div>
			</article>
		</div>
	</div>
</section>
<% include Footer %>
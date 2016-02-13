<!-- Footer -->
<div id="footer">
	<div class="container">
		<div class="row">
			<% control ShowExternalLinks %>
			<% if externalLinks %>
			<section class="6u 6u(narrower) 12u$(mobilep)">
				<h3>Other Links</h3>
				<ul class="links">
					<% loop externalLinks %>
					<li><a href="$Address" target="_blank" rel="nofollow">$Name</a></li>
					<% end_loop %>
				</ul>
			</section>
			<% end_if %>
			<% end_control %>
			<section class="6u 6u(narrower) 12u$(mobilep)">
				<% if $Form %>
				$Form
				<% else_if $CommentsForm %>
				$CommentsForm
				<% else %>
				<% control ShowContactForm %>
				$ContactForm
				<% end_control %>
				<% end_if %>
			</section>
		</div>
	</div>
	<% include Copyright %>
</div>
<!-- Footer -->
<div id="footer">
	<div class="container">
		<div class="row">
			<% with ShowExternalLinks %>
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
			<% end_with %>
			<section class="6u 6u(narrower) 12u$(mobilep)">
				<% if $Form %>
				$Form
				<% else_if $CommentsForm %>
				$CommentsForm
				<% else %>
				<% with ShowContactForm %>
				$ContactForm
				<% end_with %>
				<% end_if %>
			</section>
		</div>
	</div>
	<% include Copyright %>
</div>
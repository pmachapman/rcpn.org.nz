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
					<li><a href="$Address" target="_blank">$Name</a></li>
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
	<!-- Copyright -->
	<div class="copyright">
		<ul class="menu">
			<li>&copy; <% if $SiteConfig.Title %>$SiteConfig.Title<% else %>Palmerston North Reformed Church<% end_if %>. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
	</div>
</div>
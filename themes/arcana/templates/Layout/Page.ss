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
			</article>
		</div>
	</div>
</section>
<% include Footer %>
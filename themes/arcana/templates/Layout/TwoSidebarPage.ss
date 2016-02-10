<!-- Main -->
<section class="wrapper style1">
	<div class="container">
		<div class="row 200%">
			<div class="3u 12u(narrower)">
				<div id="sidebar1">
					<!-- Sidebar 1 -->
					<% if $TopSidebarHeading || $TopSidebarContent %>
					<section>
						<% if $TopSidebarHeading %>
						<h3>$TopSidebarHeading</h3>
						<% end_if %>
						<% if $TopSidebarContent %>
						<p>$TopSidebarContent</p>
						<% end_if %>
						<% if $TopSidebarButton && $TopSidebarUrl %>
						<footer>
							<a href="$TopSidebarUrl.Link" class="button">$TopSidebarButton</a>
						</footer>
						<% end_if %>
					</section>
					<% end_if %>
					<% if $BottomSidebarHeading || $BottomSidebarContent %>
					<section>
						<% if $BottomSidebarHeading %>
						<h3>$BottomSidebarHeading</h3>
						<% end_if %>
						<% if $BottomSidebarContent %>
						<p>$BottomSidebarContent</p>
						<% end_if %>
						<% if $BottomSidebarButton && $BottomSidebarUrl %>
						<footer>
							<a href="$BottomSidebarUrl.Link" class="button">$BottomSidebarButton</a>
						</footer>
						<% end_if %>
					</section>
					<% end_if %>
				</div>
			</div>
			<div class="6u 12u(narrower) important(narrower)">
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
			<div class="3u 12u(narrower)">
				<div id="sidebar2">
					<!-- Sidebar 2 -->
					<% if $AltTopSidebarHeading || $AltTopSidebarContent %>
					<section>
						<% if $AltTopSidebarHeading %>
						<h3>$AltTopSidebarHeading</h3>
						<% end_if %>
						<% if $AltTopSidebarContent %>
						<p>$AltTopSidebarContent</p>
						<% end_if %>
						<% if $AltTopSidebarButton && $AltTopSidebarUrl %>
						<footer>
							<a href="$AltTopSidebarUrl.Link" class="button">$AltTopSidebarButton</a>
						</footer>
						<% end_if %>
					</section>
					<% end_if %>
					<% if $AltBottomSidebarHeading || $AltBottomSidebarContent %>
					<section>
						<% if $AltBottomSidebarHeading %>
						<h3>$AltBottomSidebarHeading</h3>
						<% end_if %>
						<% if $AltBottomSidebarContent %>
						<p>$AltBottomSidebarContent</p>
						<% end_if %>
						<% if $AltBottomSidebarButton && $AltBottomSidebarUrl %>
						<footer>
							<a href="$AltBottomSidebarUrl.Link" class="button">$AltBottomSidebarButton</a>
						</footer>
						<% end_if %>
					</section>
					<% end_if %>
				</div>
			</div>
		</div>
	</div>
</section>
<% include Footer %>
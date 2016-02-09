<!-- Main -->
<section class="wrapper style1">
	<div class="container">
		<div class="row 200%">
			<div class="8u 12u(narrower) important(narrower)">
				<div id="content">
					<!-- Content -->
					<article>
						<header>
							<h2>$Title</h2>
						</header>
						$Content
					</article>
				</div>
			</div>
			<div class="4u 12u(narrower)">
				<div id="sidebar">
					<!-- Sidebar -->
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
					<% if $MiddleSidebarHeading || $MiddleSidebarContent %>
					<section>
						<% if $MiddleSidebarHeading %>
						<h3>$MiddleSidebarHeading</h3>
						<% end_if %>
						<% if $MiddleSidebarContent %>
						<p>$MiddleSidebarContent</p>
						<% end_if %>
						<% if $MiddleSidebarButton && $MiddleSidebarUrl %>
						<footer>
							<a href="$MiddleSidebarUrl.Link" class="button">$MiddleSidebarButton</a>
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
		</div>
	</div>
</section>
<% include Footer %>
<!-- Banner -->
<section id="banner"<% if $BannerImage %> style="background-image: url('$BannerImage.URL')"<% end_if %>>
	<header>
		<h2>Welcome <em>to the Reformed Church of Palmerston North</em></h2>
		<a href="#learn-more" class="button">Learn More</a>
	</header>
</section>

<!-- Highlights -->
<section id="learn-more" class="wrapper style1">
	<div class="container">
		<div class="row 200%">
			<section class="4u 12u(narrower)">
				<div class="box highlight">
					<i class="icon major $LeftIcon"></i>
					<h3>$LeftIconHeading</h3>
					<p>$LeftIconCaption</p>
				</div>
			</section>
			<section class="4u 12u(narrower)">
				<div class="box highlight">
					<i class="icon major $MiddleIcon"></i>
					<h3>$MiddleIconHeading</h3>
					<p>$MiddleIconCaption</p>
				</div>
			</section>
			<section class="4u 12u(narrower)">
				<div class="box highlight">
					<i class="icon major $RightIcon"></i>
					<h3>$RightIconHeading</h3>
					<p>$RightIconCaption</p>
				</div>
			</section>
		</div>
	</div>
</section>

<!-- Gigantic Heading -->
<% if $AboutUsHeading %>
<section class="wrapper style2">
	<div class="container">
		<header class="major">
			<h2>$AboutUsHeading</h2>
			<% if $AboutUsCaption %>
			<p>$AboutUsCaption</p>
			<% end_if %>
		</header>
	</div>
</section>
<% end_if %>

<!-- Posts -->
<% if $AboutUsTopLeftHeading || $ AboutUsTopRightHeading || $AboutUsBottomLeftHeading || $ AboutUsBottomRightHeading%>
<section class="wrapper style1">
	<div class="container">
		<% if $AboutUsTopLeftHeading || $ AboutUsTopRightHeading %>
		<div class="row">
			<% if $AboutUsTopLeftHeading %>
			<section class="6u 12u(narrower)">
				<div class="box post">
					<% if $AboutUsTopLeftImage && $AboutUsTopLeftUrl %>
					<a href="$AboutUsTopLeftUrl.Link" class="image left"><img src="$AboutUsTopLeftImage.URL" alt="" /></a>
					<% else_if $AboutUsTopLeftImage %>
					<a href="javascript:;" class="image left" style="cursor:default"><img src="$AboutUsTopLeftImage.URL" alt="" /></a>
					<% end_if %>
					<div class="inner">
						<% if $AboutUsTopLeftHeading && $AboutUsTopLeftUrl %>
						<h3><a href="$AboutUsTopLeftUrl.Link">$AboutUsTopLeftHeading</a></h3>
						<% else_if $AboutUsTopLeftHeading %>
						<h3>$AboutUsTopLeftHeading</h3>
						<% end_if %>
						<% if $AboutUsTopLeftCaption %>
						<p>$AboutUsTopLeftCaption</p>
						<% end_if %>
					</div>
				</div>
			</section>
			<% end_if %>
			<% if $AboutUsTopRightHeading %>
			<section class="6u 12u(narrower)">
				<div class="box post">
					<% if $AboutUsTopRightImage && $AboutUsTopRightUrl %>
					<a href="$AboutUsTopRightUrl.Link" class="image left"><img src="$AboutUsTopRightImage.URL" alt="" /></a>
					<% else_if $AboutUsTopRightImage %>
					<a href="javascript:;" class="image left" style="cursor:default"><img src="$AboutUsTopRightImage.URL" alt="" /></a>
					<% end_if %>
					<div class="inner">
						<% if $AboutUsTopRightHeading && $AboutUsTopRightUrl %>
						<h3><a href="$AboutUsTopRightUrl.Link">$AboutUsTopRightHeading</a></h3>
						<% else_if $AboutUsTopRightHeading %>
						<h3>$AboutUsTopRightHeading</h3>
						<% end_if %>
						<% if $AboutUsTopRightCaption %>
						<p>$AboutUsTopRightCaption</p>
						<% end_if %>
					</div>
				</div>
			</section>
			<% end_if %>
		</div>
		<% end_if %>
		<% if $AboutUsBottomLeftHeading || $ AboutUsBottomRightHeading %>
		<div class="row">
			<% if $AboutUsBottomLeftHeading %>
			<section class="6u 12u(narrower)">
				<div class="box post">
					<% if $AboutUsBottomLeftImage && $AboutUsBottomLeftUrl %>
					<a href="$AboutUsBottomLeftUrl.Link" class="image left"><img src="$AboutUsBottomLeftImage.URL" alt="" /></a>
					<% else_if $AboutUsBottomLeftImage %>
					<a href="javascript:;" class="image left" style="cursor:default"><img src="$AboutUsBottomLeftImage.URL" alt="" /></a>
					<% end_if %>
					<div class="inner">
						<% if $AboutUsBottomLeftHeading && $AboutUsBottomLeftUrl %>
						<h3><a href="$AboutUsBottomLeftUrl.Link">$AboutUsBottomLeftHeading</a></h3>
						<% else_if $AboutUsBottomLeftHeading %>
						<h3>$AboutUsBottomLeftHeading</h3>
						<% end_if %>
						<% if $AboutUsBottomLeftCaption %>
						<p>$AboutUsBottomLeftCaption</p>
						<% end_if %>
					</div>
				</div>
			</section>
			<% end_if %>
			<% if $AboutUsBottomRightHeading %>
			<section class="6u 12u(narrower)">
				<div class="box post">
					<% if $AboutUsBottomRightImage && $AboutUsBottomRightUrl %>
					<a href="$AboutUsBottomRightUrl.Link" class="image left"><img src="$AboutUsBottomRightImage.URL" alt="" /></a>
					<% else_if $AboutUsBottomRightImage %>
					<a href="javascript:;" class="image left" style="cursor:default"><img src="$AboutUsBottomRightImage.URL" alt="" /></a>
					<% end_if %>
					<div class="inner">
						<% if $AboutUsBottomRightHeading && $AboutUsBottomRightUrl %>
						<h3><a href="$AboutUsBottomRightUrl.Link">$AboutUsBottomRightHeading</a></h3>
						<% else_if $AboutUsBottomRightHeading %>
						<h3>$AboutUsBottomRightHeading</h3>
						<% end_if %>
						<% if $AboutUsBottomRightCaption %>
						<p>$AboutUsBottomRightCaption</p>
						<% end_if %>
					</div>
				</div>
			</section>
			<% end_if %>
		</div>
		<% end_if %>
	</div>
</section>
<% end_if %>

<!-- CTA -->
<% if $CallToAction || $CallToActionButton && $CallToActionUrl %>
<section id="cta" class="wrapper style3">
	<div class="container">
		<header>
			<% if $CallToAction %>
			<h2>$CallToAction</h2>
			<% end_if %>
			<% if $CallToActionButton && $CallToActionUrl %>
			<a href="$CallToActionUrl.Link" class="button">$CallToActionButton</a>
			<% end_if %>
		</header>
	</div>
</section>
<% end_if %>
<!-- Main -->
<section class="wrapper style1">
	<div class="container">
		<div id="content">
			<!-- Content -->
			<article>
				<header>
					<h2>$Title</h2>
					<% if $Blurb %>
					<p>$Blurb</p>
					<% end_if %>
				</header>
				<div class="row">
					<section class="4u 12u(narrower)">
					$Content
					</section>
					<section class="8u 12u(narrower)">
						$ContactForm
						<% if $Success %>
						<p id="thanks">$SubmitText</p>
						<% end_if %>
					</section>
					<section class="12u">
						<h3>How to find us in Palmerston North</h3>
						<p>
							<iframe style="width:100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.nz/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Palmerston+North+Reformed+Church+541+Ruahine+Street+P.O.+Box+1670,+Palmerston+North&amp;sll=-40.799894,175.310128&amp;sspn=75.869034,86.044922&amp;t=m&amp;ie=UTF8&amp;hq=Palmerston+North+Reformed+Church+541+Ruahine+Street+P.O.+Box+1670,+Palmerston+North&amp;cid=11477067336517118410&amp;hnear=&amp;ll=-40.350273,175.643406&amp;spn=0.022894,0.074673&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br>
							<a href="https://maps.google.co.nz/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Palmerston+North+Reformed+Church+541+Ruahine+Street+P.O.+Box+1670,+Palmerston+North&amp;sll=-40.799894,175.310128&amp;sspn=75.869034,86.044922&amp;t=m&amp;ie=UTF8&amp;hq=Palmerston+North+Reformed+Church+541+Ruahine+Street+P.O.+Box+1670,+Palmerston+North&amp;cid=11477067336517118410&amp;hnear=&amp;ll=-40.350273,175.643406&amp;spn=0.022894,0.074673&amp;z=14&amp;iwloc=A" target="_blank">View Larger Map</a>
						</p>
					</section>
				</div>
			</article>
		</div>
	</div>
</section>
<div id="footer">
<% include Copyright %>
</div>
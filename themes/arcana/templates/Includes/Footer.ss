<!-- Footer -->
<div id="footer">
	<div class="container">
		<div class="row">
			<section class="6u 6u(narrower) 12u$(mobilep)">
				<h3>TODO: Other Links</h3>
				<ul class="links">
					<li><a href="http://www.sermonaudio.com/source_detail.asp?sourceid=palmerstonnorth" target="_blank">RCPN Sermons</a></li>
					<li><a href="http://rcnz.org.nz/" target="_blank">Reformed Churches of New Zealand</a></li>
					<li><a href="http://www.icrconline.com/" target="_blank">ICRC - Conference of Reformed Churches</a></li>
					<li><a href="http://www.rtc.edu.au/" target="_blank">Reformed Theological College</a></li>
					<li><a href="http://www.refstudy.org/" target="_blank">Theology and Ministry Training</a></li>
					<li><a href="http://www.ccel.org/ccel/calvin/commentaries.i.html" target="_blank">Calvin's Commentaries</a></li>
					<li><a href="http://www.nouthetic.org.nz/" target="_blank">Nouthetic Counsellors of New Zealand</a></li>
				</ul>
			</section>
			<section class="6u 12u(narrower)">
				<% if $Form %>
				$Form
				<% else_if $CommentsForm %>
				$CommentsForm
				<% else %>
				<h3>TODO: Get In Touch</h3>
				<form>
					<div class="row 50%">
						<div class="6u 12u(mobilep)">
							<input type="text" name="name" id="name" placeholder="Name" />
						</div>
						<div class="6u 12u(mobilep)">
							<input type="email" name="email" id="email" placeholder="Email" />
						</div>
					</div>
					<div class="row 50%">
						<div class="12u">
							<textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
						</div>
					</div>
					<div class="row 50%">
						<div class="12u">
							<ul class="actions">
								<li><input type="submit" class="button alt" value="Send Message" /></li>
							</ul>
						</div>
					</div>
				</form>
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
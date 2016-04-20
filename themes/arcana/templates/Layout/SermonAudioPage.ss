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
				<!--Begin SermonAudio Link Button--><SCRIPT LANGUAGE="JavaScript" type="text/javascript">document.write("<" + "script  src='https://www.sermonaudio.com/code_sermonlist.asp?sourceid=$SermonAudioMemberId&style=1&hideheader=false&hidelogo=false&alwaysbible=false&rows=30&sourcehref=" + escape(location.href) + "'><","/script>");</SCRIPT><!--End SermonAudio Link Button-->
			</article>
		</div>
	</div>
</section>
<% include Footer %>
<!-- Nav -->
<nav id="nav">
	<ul>
		<% loop $Menu(1) %>
		<li class="$LinkingMode">
			<a href="$Link">$MenuTitle</a>
			<% if $Children %>
				<ul>
					<% loop $Children %>
						<li class="$LinkingMode">
							<a href="$Link">$MenuTitle</a>
							<% if $Children %>
								<ul>
									<% loop $Children %>
										<li class="$LinkingMode"><a href="$Link">$MenuTitle</a></li>
									<% end_loop %>
								</ul>
							<% end_if %>
						</li>
					<% end_loop %>
				</ul>
			<% end_if %>
		</li>
		<% end_loop %>
	</ul>
</nav>
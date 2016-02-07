<h3>Get In Touch</h3>
<form $FormAttributes>
	<div class="row 50%">
		<div class="6u 12u(mobilep)">
			$Fields.dataFieldByName(Name)
			<span class="message $Fields.dataFieldByName(Name).MessageType">$Fields.dataFieldByName(Name).Message</span>
		</div>
		<div class="6u 12u(mobilep)">
			$Fields.dataFieldByName(Email)
			<span class="message $Fields.dataFieldByName(Email).MessageType">$Fields.dataFieldByName(Email).Message</span>
		</div>
	</div>
	<div class="row 50%">
		<div class="12u">
			$Fields.dataFieldByName(Message)
			<span class="message $Fields.dataFieldByName(Message).MessageType">$Fields.dataFieldByName(Message).Message</span>
		</div>
	</div>
	<div class="row 50%">
		<div class="12u">
			<ul class="actions">
				<% loop $Actions %><li>$Field</li><% end_loop %>
			</ul>
			$Fields.dataFieldByName(SecurityID)
		</div>
	</div>
</form>
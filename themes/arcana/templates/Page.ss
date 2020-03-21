<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="$ContentLocale">
	<head>
		<% base_tag %>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		$MetaTags(false)
		<% require css($resourceURL('themes/arcana/css/main.css')) %>
		<% require css($resourceURL('themes/arcana/css/custom.css')) %>
		<% require css($resourceURL('themes/arcana/css/monthly.css')) %>
		<!--[if lte IE 8]><link type="text/css" rel="stylesheet" href="$resourceURL('themes/arcana/css/ie8.css')" /><![endif]-->
		<!--[if lte IE 9]><link type="text/css" rel="stylesheet" href="$resourceURL('themes/arcana/css/ie9.css')" /><![endif]-->
		<link type="image/vnd.microsoft.icon" rel="shortcut icon" href="$resourceURL('themes/arcana/images/favicon.ico')" />
		<!--[if lte IE 8]><script type="text/css" src="$resourceURL('themes/arcana/js/ie/html5shiv.js')"></script><![endif]-->
	</head>
	<body class="$ClassName" <% if $i18nScriptDirection %>dir="$i18nScriptDirection"<% end_if %>>
		<div id="page-wrapper">
			<% include Header %>
			$Layout
		</div>

		<!-- Scripts -->
			<script type="text/javascript" src="$resourceURL('themes/arcana/js/jquery.min.js')"></script>
			<script type="text/javascript" src="$resourceURL('themes/arcana/js/jquery.dropotron.min.js')"></script>
			<script type="text/javascript" src="$resourceURL('themes/arcana/js/skel.min.js')"></script>
			<script type="text/javascript" src="$resourceURL('themes/arcana/js/util.js')"></script>
			<!--[if lte IE 8]><script type="text/javascript" src="$resourceURL('themes/arcana/js/ie/respond.min.js')"></script><![endif]-->
			<script type="text/javascript" src="$resourceURL('themes/arcana/js/main.js')"></script>
			<!--[if gt IE 8]><!-->
			<script type="text/javascript" src="$resourceURL('themes/arcana/js/monthly.js')"></script>
			<script type="text/javascript" src="$resourceURL('themes/arcana/js/calendar.js')"></script>
			<!--<![endif]-->
	</body>
</html>
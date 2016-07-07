<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="$ContentLocale">
	<head>
		<% base_tag %>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		$MetaTags(false)
		<% require themedCSS('main') %>
		<% require themedCSS('custom') %>
		<% require themedCSS('monthly') %>
		<!--[if lte IE 8]><link rel="stylesheet" href="{$ThemeDir}/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="{$ThemeDir}/css/ie9.css" /><![endif]-->
		<link rel="shortcut icon" href="$ThemeDir/images/favicon.ico" />
		<!--[if lte IE 8]><script src="{$ThemeDir}/js/ie/html5shiv.js"></script><![endif]-->
	</head>
	<body class="$ClassName" <% if $i18nScriptDirection %>dir="$i18nScriptDirection"<% end_if %>>
		<div id="page-wrapper">
			<% include Header %>
			$Layout
		</div>

		<!-- Scripts -->
			<script src="{$ThemeDir}/js/jquery.min.js"></script>
			<script src="{$ThemeDir}/js/jquery.dropotron.min.js"></script>
			<script src="{$ThemeDir}/js/skel.min.js"></script>
			<script src="{$ThemeDir}/js/util.js"></script>
			<!--[if lte IE 8]><script src="{$ThemeDir}/js/ie/respond.min.js"></script><![endif]-->
			<script src="{$ThemeDir}/js/main.js"></script>
			<!--[if gt IE 8]><!-->
			<script src="{$ThemeDir}/js/monthly.js"></script>
			<script src="{$ThemeDir}/js/calendar.js"></script>
			<!--<![endif]-->
	</body>
</html>
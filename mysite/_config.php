<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	'type' => 'MySQLDatabase',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'SS_RCPN',
	'path' => ''
);

// Set the site locale
i18n::set_locale('en_GB');

// Disable cache
SS_Cache::set_cache_lifetime('any', -1, 100);
<?php

global $project;
$project = 'mysite';

global $database;
$database = 'SS_RCPN';

// Set the site locale
i18n::set_locale('en_GB');

// Use _ss_environment.php file for configuration
require_once("conf/ConfigureFromEnv.php");
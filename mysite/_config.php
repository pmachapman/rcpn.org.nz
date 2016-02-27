<?php

global $project;
$project = 'mysite';

global $database;
$database = 'SS_RCPN';

// Set the site locale
i18n::set_locale('en_GB');

// Set the editor stylesheet
HtmlEditorConfig::get('cms')->setOption('content_css', project() . '/css/editor.css');

// Include JavaScript to fix the date picker in the editable grid field
LeftAndMain::require_javascript('mysite/javascript/GridFieldEditableDatePicker.js');

// Use _ss_environment.php file for configuration
require_once("conf/ConfigureFromEnv.php");
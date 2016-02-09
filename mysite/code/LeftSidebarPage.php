<?php
class LeftSidebarPage extends Page {

	private static $has_one = array(
		'TopSidebarUrl' => 'SiteTree',
		'MiddleSidebarUrl' => 'SiteTree',
		'BottomSidebarUrl' => 'SiteTree'
	);

	private static $db = array(
		'TopSidebarHeading' => 'Varchar(255)',
		'TopSidebarContent' => 'Varchar(255)',
		'MiddleSidebarHeading' => 'Varchar(255)',
		'MiddleSidebarContent' => 'Varchar(255)',
		'BottomSidebarHeading' => 'Varchar(255)',
		'BottomSidebarContent' => 'Varchar(255)',
		'TopSidebarButton' => 'Varchar(20)',
		'MiddleSidebarButton' => 'Varchar(20)',
		'BottomSidebarButton' => 'Varchar(20)'
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		// Add the top side bar section
		$fields->addFieldToTab('Root.Main', new HeaderField('TopSidebarSection', 'Top Left Sidebar'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('TopSidebarHeading', 'Heading'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('TopSidebarContent', 'Content'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('TopSidebarButton', 'Button Caption'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TreeDropdownField("TopSidebarUrlID", "Link Button To Page", "SiteTree"), 'Metadata');

		// Add the middle side bar section
		$fields->addFieldToTab('Root.Main', new HeaderField('MiddleSidebarSection', 'Middle Left Sidebar'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('MiddleSidebarHeading', 'Heading'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('MiddleSidebarContent', 'Content'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('MiddleSidebarButton', 'Button Caption'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TreeDropdownField("MiddleSidebarUrlID", "Link Button To Page", "SiteTree"), 'Metadata');

		// Add the bottom side bar section
		$fields->addFieldToTab('Root.Main', new HeaderField('BottomSidebarSection', 'Bottom Left Sidebar'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('BottomSidebarHeading', 'Heading'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('BottomSidebarContent', 'Content'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('BottomSidebarButton', 'Button Caption'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TreeDropdownField("BottomSidebarUrlID", "Link Button To Page", "SiteTree"), 'Metadata');

		return $fields;
	}
}
class LeftSidebarPage_Controller extends Page_Controller {
}
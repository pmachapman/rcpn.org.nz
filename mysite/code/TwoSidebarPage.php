<?php
class TwoSidebarPage extends Page {

	private static $description = 'A standard page with two sidebars';

	private static $has_one = array(
		'TopSidebarUrl' => 'SiteTree',
		'BottomSidebarUrl' => 'SiteTree',
		'AltTopSidebarUrl' => 'SiteTree',
		'AltBottomSidebarUrl' => 'SiteTree'
	);

	private static $db = array(
		'TopSidebarHeading' => 'Varchar(255)',
		'TopSidebarContent' => 'Varchar(255)',
		'BottomSidebarHeading' => 'Varchar(255)',
		'BottomSidebarContent' => 'Varchar(255)',
		'TopSidebarButton' => 'Varchar(20)',
		'BottomSidebarButton' => 'Varchar(20)',
		'AltTopSidebarHeading' => 'Varchar(255)',
		'AltTopSidebarContent' => 'Varchar(255)',
		'AltBottomSidebarHeading' => 'Varchar(255)',
		'AltBottomSidebarContent' => 'Varchar(255)',
		'AltTopSidebarButton' => 'Varchar(20)',
		'AltBottomSidebarButton' => 'Varchar(20)'
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		
		// Add the top left side bar section
		$fields->addFieldToTab('Root.Main', new HeaderField('TopSidebarSection', 'Top Left Sidebar'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('TopSidebarHeading', 'Heading'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('TopSidebarContent', 'Content'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('TopSidebarButton', 'Button Caption'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TreeDropdownField("TopSidebarUrlID", "Link Button To Page", "SiteTree"), 'Metadata');
		
		// Add the bottom left side bar section
		$fields->addFieldToTab('Root.Main', new HeaderField('BottomSidebarSection', 'Bottom Left Sidebar'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('BottomSidebarHeading', 'Heading'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('BottomSidebarContent', 'Content'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('BottomSidebarButton', 'Button Caption'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TreeDropdownField("BottomSidebarUrlID", "Link Button To Page", "SiteTree"), 'Metadata');
		
		// Add the top right side bar section
		$fields->addFieldToTab('Root.Main', new HeaderField('AltTopSidebarSection', 'Top Right Sidebar'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('AltTopSidebarHeading', 'Heading'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('AltTopSidebarContent', 'Content'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('AltTopSidebarButton', 'Button Caption'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TreeDropdownField("AltTopSidebarUrlID", "Link Button To Page", "SiteTree"), 'Metadata');
		
		// Add the bottom right side bar section
		$fields->addFieldToTab('Root.Main', new HeaderField('AltBottomSidebarSection', 'Bottom Right Sidebar'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('AltBottomSidebarHeading', 'Heading'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('AltBottomSidebarContent', 'Content'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('AltBottomSidebarButton', 'Button Caption'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TreeDropdownField("AltBottomSidebarUrlID", "Link Button To Page", "SiteTree"), 'Metadata');

		return $fields;
	}
}
class TwoSidebarPage_Controller extends Page_Controller {
}
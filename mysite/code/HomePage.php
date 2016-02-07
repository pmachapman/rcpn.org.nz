<?php
class HomePage extends Page {

	private static $icon = 'cms/images/treeicons/home-file.png';

	private static $has_one = array(
		'BannerImage' => 'Image',
		'AboutUsTopLeftImage' => 'Image',
		'AboutUsTopLeftUrl' => 'SiteTree',
		'AboutUsTopRightImage' => 'Image',
		'AboutUsTopRightUrl' => 'SiteTree',
		'AboutUsBottomLeftImage' => 'Image',
		'AboutUsBottomLeftUrl' => 'SiteTree',
		'AboutUsBottomRightImage' => 'Image',
		'AboutUsBottomRightUrl' => 'SiteTree',
		'CallToActionUrl' => 'SiteTree'
	);

	private static $db = array(
		'LeftIcon' => 'Varchar(20)',
		'LeftIconHeading' => 'Varchar(255)',
		'LeftIconCaption' => 'Varchar(255)',
		'MiddleIcon' => 'Varchar(20)',
		'MiddleIconHeading' => 'Varchar(255)',
		'MiddleIconCaption' => 'Varchar(255)',
		'RightIcon' => 'Varchar(20)',
		'RightIconHeading' => 'Varchar(255)',
		'RightIconCaption' => 'Varchar(255)',
		'AboutUsHeading' => 'Varchar(255)',
		'AboutUsCaption' => 'Varchar(255)',
		'AboutUsTopLeftHeading' => 'Varchar(255)',
		'AboutUsTopLeftCaption' => 'Varchar(255)',
		'AboutUsTopRightHeading' => 'Varchar(255)',
		'AboutUsTopRightCaption' => 'Varchar(255)',
		'AboutUsBottomLeftHeading' => 'Varchar(255)',
		'AboutUsBottomLeftCaption' => 'Varchar(255)',
		'AboutUsBottomRightHeading' => 'Varchar(255)',
		'AboutUsBottomRightCaption' => 'Varchar(255)',
		'CallToAction' => 'Varchar(255)',
		'CallToActionButton' => 'Varchar(20)'
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		// Remove the content field
		$fields->removeFieldFromTab('Root.Main', 'Content');

		// Add the banner image
		$fields->addFieldToTab('Root.Main', new HeaderField('BannerSection', 'Banner'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new UploadField('BannerImage', 'Banner image'), 'Metadata');
		
		// Add the left icon
		$fields->addFieldToTab('Root.Main', new HeaderField('LeftIconSection', 'Left Icon'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('LeftIcon', 'Left Icon'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('LeftIconHeading', 'Heading'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('LeftIconCaption', 'Caption'), 'Metadata');
		
		// Add the middle icon
		$fields->addFieldToTab('Root.Main', new HeaderField('MiddleIconSection', 'Middle Icon'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('MiddleIcon', 'Middle Icon'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('MiddleIconHeading', 'Heading'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('MiddleIconCaption', 'Caption'), 'Metadata');
		
		// Add the right icon
		$fields->addFieldToTab('Root.Main', new HeaderField('RightIconSection', 'Right Icon'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('RightIcon', 'Right Icon'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('RightIconHeading', 'Heading'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('RightIconCaption', 'Caption'), 'Metadata');
		
		// Add the about us heading
		$fields->addFieldToTab('Root.Main', new HeaderField('AboutUsSection', 'About Us'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('AboutUsHeading', 'Heading'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('AboutUsCaption', 'Caption'), 'Metadata');
		
		// Add the top left about us link
		$fields->addFieldToTab('Root.Main', new HeaderField('AboutUsTopLeftSection', 'About Us - Top Left', 3), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('AboutUsTopLeftHeading', 'Heading'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('AboutUsTopLeftCaption', 'Caption'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new UploadField('AboutUsTopLeftImage', 'Thumbnail Image'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TreeDropdownField("AboutUsTopLeftUrlID", "Link Image To Page", "SiteTree"), 'Metadata');
		
		// Add the top right about us link
		$fields->addFieldToTab('Root.Main', new HeaderField('AboutUsTopRightSection', 'About Us - Top Right', 3), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('AboutUsTopRightHeading', 'Heading'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('AboutUsTopRightCaption', 'Caption'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new UploadField('AboutUsTopRightImage', 'Thumbnail Image'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TreeDropdownField("AboutUsTopRightUrlID", "Link Image To Page", "SiteTree"), 'Metadata');
		
		// Add the bottom left about us link
		$fields->addFieldToTab('Root.Main', new HeaderField('AboutUsBottomLeftSection', 'About Us - Bottom Left', 3), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('AboutUsBottomLeftHeading', 'Heading'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('AboutUsBottomLeftCaption', 'Caption'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new UploadField('AboutUsBottomLeftImage', 'Thumbnail Image'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TreeDropdownField("AboutUsBottomLeftUrlID", "Link Image To Page", "SiteTree"), 'Metadata');
		
		// Add the bottom right about us link
		$fields->addFieldToTab('Root.Main', new HeaderField('AboutUsBottomRightSection', 'About Us - Bottom Right', 3), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('AboutUsBottomRightHeading', 'Heading'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('AboutUsBottomRightCaption', 'Caption'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new UploadField('AboutUsBottomRightImage', 'Thumbnail Image'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TreeDropdownField("AboutUsBottomRightUrlID", "Link Image To Page", "SiteTree"), 'Metadata');
		
		// Add the call to action
		$fields->addFieldToTab('Root.Main', new HeaderField('CallToActionSection', 'Call To Action'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('CallToAction', 'Call To Action Message'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TextField('CallToActionButton', 'Button Caption'), 'Metadata');
		$fields->addFieldToTab('Root.Main', new TreeDropdownField("CallToActionUrlID", "Link Button To Page", "SiteTree"), 'Metadata');

		return $fields;
	}
}
class HomePage_Controller extends Page_Controller {
}
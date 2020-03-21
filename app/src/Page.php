<?php

namespace {

	use SilverStripe\Assets\Image;
	use SilverStripe\AssetAdmin\Forms\UploadField;
	use SilverStripe\CMS\Model\SiteTree;
	use SilverStripe\Forms\HeaderField;

	class Page extends SiteTree
	{
		private static $description = 'A standard page with no sidebars';

		private static $db = array();

		private static $has_one = array(
			'BannerImage' => Image::class
		);

		public function getCMSFields()
		{
			$fields = parent::getCMSFields();

			// Add the banner image
			$fields->addFieldToTab('Root.Main', new HeaderField('BannerSection', 'Banner'), 'Content');
			$fields->addFieldToTab('Root.Main', new UploadField('BannerImage', 'Banner image'), 'Content');

			return $fields;
		}
	}
}

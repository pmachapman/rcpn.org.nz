<?php
class Page extends SiteTree {

	private static $description = 'A standard page with no sidebars';

	private static $db = array(
	);

	private static $has_one = array(
		'BannerImage' => 'Image'
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		// Add the banner image
		$fields->addFieldToTab('Root.Main', new HeaderField('BannerSection', 'Banner'), 'Content');
		$fields->addFieldToTab('Root.Main', new UploadField('BannerImage', 'Banner image'), 'Content');

		return $fields;
	}
}
class Page_Controller extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();
		// You can include any CSS or JS required by your project here.
		// See: http://doc.silverstripe.org/framework/en/reference/requirements
	}

	function ShowContactForm() {
		$get = DataObject::get_one('ContactPage');
		return new ContactPage_Controller($get);
	}

	function ShowExternalLinks() {
		$get = DataObject::get_one('HomePage');
		return new HomePage_Controller($get);
	}
}

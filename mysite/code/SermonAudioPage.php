<?php
class SermonAudioPage extends Page {

	private static $description = 'A page with a SermonAudio.com browser';

	private static $db = array(
		'SermonAudioMemberId' => 'Varchar(255)'
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		// Add the sermon audio member ID
		$fields->addFieldToTab('Root.Main', new TextField('SermonAudioMemberId', 'SermonAudio.com Member ID'), 'Content');

		return $fields;
	}
}
class SermonAudioPage_Controller extends Page_Controller {
}
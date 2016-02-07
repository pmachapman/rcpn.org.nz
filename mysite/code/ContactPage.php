<?php
class ContactPage extends Page {
	static $db = array(
		'MailTo' => 'Varchar(255)',
		'SubmitText' => 'Text'
	);
	
	function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab('Root.OnSubmission', new TextField('MailTo', 'Email submissions to'));
		$fields->addFieldToTab('Root.OnSubmission', new TextareaField('SubmitText', 'Text on Submission'));
	
		return $fields; 
	}
}
class ContactPage_Controller extends Page_Controller {
	static $allowed_actions = array(
		'ContactForm',
		'Success'
	);
 
	function ContactForm() {
		
		// Set up the fields
		$nameField = new TextField('Name', 'Name');
		$nameField->setAttribute('placeholder', 'Name');
		
		$emailField = new EmailField('Email', 'Email');
		$emailField->setAttribute('placeholder', 'Email');
		
		$messageField = new TextareaField('Message', 'Message');
		$messageField->setAttribute('placeholder', 'Message');
		
		// Add the fields
		$fields = new FieldList(
			$nameField,
			$emailField,
			$messageField
		);

		// Create action
		$actions = new FieldList(
			new FormAction('SendContactForm', 'Send Message')
		);

		// Create Validators
		$validator = new RequiredFields('Name', 'Email', 'Message');
		
		// Set up the form
		$form = new Form($this, 'ContactForm', $fields, $actions, $validator);
		$form->setTemplate('ContactForm');

		return $form;
	}

	function SendContactForm($data, $form) {
		// Set data
		$From = $data['Email'];
		$To = $this->MailTo;
		$Subject = 'PNRC Website Contact Message';
		$email = new Email($From, $To, $Subject);

		// Set template
		$email->setTemplate('ContactEmail');

		// Populate template
		$email->populateTemplate($data);

		// Send mail
		$email->send();

		// Return to submitted message
		$this->redirect($this->Link('?success=1'));
	}

	function Success()
	{
		return isset($_REQUEST['success']) && $_REQUEST['success'] == '1';
	}
}
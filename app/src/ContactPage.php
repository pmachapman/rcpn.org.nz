<?php

namespace {

	use SilverStripe\Control\Email\Email;
	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldAddNewButton;
	use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
	use SilverStripe\Forms\GridField\GridFieldDataColumns;
	use SilverStripe\Forms\GridField\GridFieldEditButton;
	use SilverStripe\Forms\HTMLEditor\HtmlEditorField;
	use SilverStripe\Forms\EmailField;
	use SilverStripe\Forms\Form;
	use SilverStripe\Forms\FormAction;
	use SilverStripe\Forms\FieldList;
	use SilverStripe\Forms\RequiredFields;
	use SilverStripe\Forms\TextField;
	use SilverStripe\Forms\TextareaField;

	class ContactPage extends Page
	{

		private static $description = 'The contact us page template';

		private static $db = array(
			'MailFrom' => 'Varchar(255)',
			'MailTo' => 'Varchar(255)',
			'SubmitText' => 'Text',
			'Blurb' => 'HTMLText'
		);

		private static $has_many = array(
			'ContactFormSubmissions' => ContactFormSubmission::class
		);

		function getCMSFields()
		{
			$fields = parent::getCMSFields();

			// Add a box to customise the blurb
			$blurbField = new HtmlEditorField('Blurb', 'Blurb');
			$blurbField->setRows(2);
			$fields->addFieldToTab('Root.Main', $blurbField, 'Content');

			// Setup the contact form settings
			$fields->addFieldToTab('Root.ContactForm', new TextField('MailTo', 'Email enquiries to'));
			$fields->addFieldToTab('Root.ContactForm', new TextField('MailFrom', 'Email enquiries from'));
			$fields->addFieldToTab('Root.ContactForm', new TextareaField('SubmitText', 'Message when email submitted'));

			// Create a default configuration for the new GridField, allowing record deletion
			$config = GridFieldConfig_RecordEditor::create();

			$config->removeComponentsByType(GridFieldAddNewButton::class);
			$config->removeComponentsByType(GridFieldEditButton::class);

			// Set the names and data for our gridfield columns
			$dataColumns = $config->getComponentByType(GridFieldDataColumns::class);
			$dataColumns->setDisplayFields(array(
				'Name' => 'Name',
				'Email' => 'Email',
				'Message' => 'Message'
			));

			// Create a gridfield to hold the submission relationship
			$contactFormEnquiriesGridField = new GridField(
				'ContactFormSubmissions', // Field name
				'Contact Form Enquiries', // Field title
				$this->ContactFormSubmissions(), // List of all related students
				$config
			);

			// Create a tab named "Enquiries" and add our field to it
			$fields->addFieldToTab('Root.Enquiries', $contactFormEnquiriesGridField);

			return $fields;
		}
	}
	class ContactPageController extends PageController
	{
		private static $allowed_actions = array(
			'ContactForm',
			'Success'
		);

		function ContactForm()
		{

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

			// Add reCAPTCHA
			$form->enableSpamProtection()->fields()->fieldByName('Captcha');

			return $form;
		}

		function SendContactForm($data, $form)
		{
			// Create submission object
			$submission = new ContactFormSubmission();
			$submission->ContactPageID = $this->ID;

			// Save submission object into form object this function is needed so the submission values will be available from the $submission object.
			$form->saveInto($submission);
			$submission->write();

			// Set data
			$From = $this->MailFrom;
			$To = $this->MailTo;
			$Subject = 'PNRC Website Contact Message';
			$email = new Email($From, $To, $Subject);

			// Set the reply-to address
			$email->setReplyTo($data['Email']);

			// Set template
			$email->setHTMLTemplate('Email\\ContactEmail');

			// Populate template
			$email->setData($data);

			// Send mail
			$email->send();

			// Return to submitted message
			$this->redirect($this->Link('?success=1#thanks'));
		}

		function Success()
		{
			return isset($_REQUEST['success']) && $_REQUEST['success'] == '1';
		}
	}
}

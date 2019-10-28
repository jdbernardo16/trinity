<?php
namespace {
	use SilverStripe\CMS\Model\SiteTree;
	use Page;  
	use PageController;
	use SilverStripe\Forms\TextField;
	use SilverStripe\Forms\TextareaField;
	use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
	use SilverStripe\Forms\HTMLEditor;
	use SilverStripe\AssetAdmin\Forms\UploadField;
	use SilverStripe\Assets\Image;
	use SilverStripe\Assets\File;
	use SilverStripe\Forms\TabSet;
	use SilverStripe\Forms\Tab;
	use SilverStripe\ORM\DataObject;
	use SilverStripe\Forms\FieldList;
	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

	class CareerPage extends Page {

		private static $db = [

			'EmailRecipient' => 'Text',
		];

		private static $has_one = [
		];

		private static $has_many = [
	        'Jobs' => Job::class,
	    ];

		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'Career Page',
			'MenuTitle' => 'Career',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');

			$fields->addFieldToTab('Root.Frame1.Main', new TabSet('Jobs',
				new Tab('Jobs', GridField::create(
		            'Jobs',
		            'Jobs',
		            $this->Jobs(),
		            GridFieldConfig_RecordEditor::create()
				))
			));

			/*
			|-----------------------------------------------
			| @Email
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Email.Main', array(
				new TextField('EmailRecipient', 'Email Recipient'),
			));


			
			return $fields;
		}
	}

	class CareerPageController extends PageController {

	}
}

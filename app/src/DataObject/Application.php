<?php

namespace {
	use SilverStripe\CMS\Model\SiteTree;
	use Page;  
	use PageController;
	use SilverStripe\Forms\TextField;
	use SilverStripe\Forms\TextareaField;
	use SilverStripe\Forms\HTMLEditorField;
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
	use SilverStripe\Forms\ReadonlyField;

	class Application extends DataObject {
		private static $db = array(
			'SortOrder' => 'Int',
			'JobTitle' => 'Text',
			'Name' => 'Text',
			'MobileNumber' => 'Text',
			'Email' => 'Text',
			'Education' => 'Text',
			'Message' => 'Text',
		);

		private static $has_one = [
			'File' => File::class,
		];

		private static $owns = [
			'File',
		];

		private static $has_many = array(
		);
		

		private static $summary_fields = array(
			'JobTitle' => 'Job Title',
			'Name' => 'Name',
			'MobileNumber' => 'Mobile Number',
			'Email' => 'Email',
		);

		public function getThumbnail() {
		    if ($this->Image()->exists()) { 
		        return $this->Image()->SetWidth(50); 
		    } else { 
		        return '(No Image)'; 
		    }
		}

		private static $default_sort='SortOrder';

		public function getCMSFields() {
			$fields = parent::getCMSFields();
			
			$fields->addFieldToTab('Root.Main', new ReadonlyField('JobTitle', 'Job Title'));
			$fields->addFieldToTab('Root.Main', new TextField('Name', 'Name'));
			$fields->addFieldToTab('Root.Main', new TextField('MobileNumber', 'Mobile Number'));
			$fields->addFieldToTab('Root.Main', new TextField('Email', 'Email'));
			$fields->addFieldToTab('Root.Main', new TextField('Education', 'Education'));
			$fields->addFieldToTab('Root.Main', new TextareaField('Message', 'Message'));
			$fields->addFieldToTab('Root.Main', $upload = UploadField::create('File','File'));

			# SET FIELD DESCRIPTION 
			$upload->setDescription('Max file size: 2MB | CV');
			# Set destination path for the uploaded images.
			$upload->setFolderName('careerpage/cv');

			$fields->removeByName('SortOrder');


			

			return $fields;
		}
	}
}


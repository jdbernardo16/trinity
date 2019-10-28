<?php

namespace {
	use SilverStripe\CMS\Model\SiteTree;
	use SilverStripe\ORM\DataObject;
	use SilverStripe\Assets\Image;
	use SilverStripe\Forms\FieldList;
	use SilverStripe\Forms\TextField;
	use SilverStripe\Forms\TextareaField;
	use SilverStripe\Forms\ReadonlyField;
	use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
	use SilverStripe\Forms\HTMLEditor;
	use SilverStripe\Forms\DateField;
	use SilverStripe\AssetAdmin\Forms\UploadField;
	use SilverStripe\Versioned\Versioned;
	use SilverStripe\Control\Controller;

	class Job extends DataObject {

		private static $db = [
			#Specialty
			'SortID' => 'Int',
			'JobTitle' => 'Text',
			'JobLoc' => 'Text',
			'PostDate' => 'Date',
			'CloseDate' => 'Date',
			'Desc' => 'HTMLText',
		];

		private static $has_one = [
			'CareerPage' => CareerPage::class,
		];


		private static $summary_fields = array(
			'JobTitle' => 'Job Title',
			'JobLoc' => 'Location',
			

		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();
			$fields->addFieldToTab('Root.Main', ReadonlyField::create('SortID', 'Sort ID'));
			$fields->addFieldToTab('Root.Main', TextField::create('JobTitle', 'Job Title'));
			$fields->addFieldToTab('Root.Main', TextField::create('JobLoc', 'Job Location'));
			$fields->addFieldToTab('Root.Main', HTMLEditorField::create('Desc', 'Description'));

			$fields->addFieldToTab('Root.Main', DateField::create('PostDate', 'Enter Post Date'));

			$fields->addFieldToTab('Root.Main', DateField::create('CloseDate', 'Enter Close Application Date'));

			return $fields;
		}
	}
}


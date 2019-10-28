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
	use SilverStripe\AssetAdmin\Forms\UploadField;
	use SilverStripe\Versioned\Versioned;
	use SilverStripe\Control\Controller;

	class AppDetail extends DataObject {

		private static $db = [
			#Specialty
			'SortID' => 'Int',
			'Title' => 'Text',
			'Desc' => 'Text',
		];

		private static $has_one = [
			'TrinityCareAppPage' => TrinityCareAppPage::class,
		];

		private static $owns = [
		];

		

		private static $summary_fields = array(
			'Title' => 'Title',
			'Desc' => 'Description',
			

		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();
			$fields->addFieldToTab('Root.Main', ReadonlyField::create('SortID', 'Sort ID'));
			$fields->addFieldToTab('Root.Main', TextField::create('Title', 'Title'));
			$fields->addFieldToTab('Root.Main', TextareaField::create('Desc', 'Description'));

			return $fields;
		}
	}
}


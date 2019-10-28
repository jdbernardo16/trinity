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

	class Trinity extends DataObject {

		private static $db = [
			#Specialty
			'SortID' => 'Int',
			'Title' => 'Text',
			'Desc' => 'Text',
		];

		private static $has_one = [
			'Image' => Image::class,
			'TrinityCareAppPage' => TrinityCareAppPage::class,
		];

		private static $owns = [
			'Image',
		];

		public function getThumbnail() {
		   if ($this->Image()->exists()) { 
		       return $this->Image()->ScaleWidth(50); 
		   } else { 
		       return '(No Image)'; 
		   }
		}

		private static $summary_fields = array(
			'Thumbnail' => 'Icon',
			'Title' => 'Title',
			'Desc' => 'Description',
			

		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();
			$fields->addFieldToTab('Root.Main', ReadonlyField::create('SortID', 'Sort ID'));
			$fields->addFieldToTab('Root.Main', TextField::create('Title', 'Title'));
			$fields->addFieldToTab('Root.Main', TextareaField::create('Desc', 'Description'));
			$fields->addFieldToTab('Root.Main', $upload = UploadField::create('Image','Image'));

			# SET FIELD DESCRIPTION 
			$upload->setDescription('Max file size: 2MB | Dimension: 100px x 100px');

			# Set destination path for the uploaded images.
			$upload->setFolderName('trinity/frame-3');
			return $fields;
		}
	}
}


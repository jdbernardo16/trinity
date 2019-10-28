<?php
namespace {
	use SilverStripe\CMS\Model\SiteTree;
	use Page;  
	use PageController;
	use SilverStripe\Forms\TextField;
	use SilverStripe\Forms\TextareaField;
	use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
	use SilverStripe\Forms\HTMLEditor;
	use SilverStripe\Forms\FormField;
	use SilverStripe\AssetAdmin\Forms\UploadField;
	use SilverStripe\Assets\Image;
	use SilverStripe\Assets\File;
	use SilverStripe\Forms\TabSet;
	use SilverStripe\Forms\Tab;
	use SilverStripe\ORM\DataObject;
	use SilverStripe\Forms\FieldList;
	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
	use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

	class HomePage extends Page {

		private static $db = [

			/*Frame 1*/
			'F1Title' => 'Text',
			'F1Desc' => 'Text',

			/*Frame 2*/
			'F2Title' => 'Text',
			'F2Desc' => 'Text',

			/*Frame 3*/
			'F3Title' => 'Text',
			'F3Desc' => 'Text',

			/*Frame 4*/
			'F4Title' => 'Text',
			'F4Desc' => 'Text',

			/*Frame 5*/
			'F5Title' => 'Text',
			'F5Desc' => 'Text',

			/*Frame 6*/
			'F6Title' => 'Text',
			'F6Desc' => 'Text',

			/*Download Link*/

			'playstorelink' => 'Text',
			'appstorelink' => 'Text',
		];

		private static $has_one = [
			'F1BG' => Image::class,
			'F2BG' => Image::class,
			'F4BG' => Image::class,
			'F4IMG' => Image::class,
			'F5BG' => Image::class,
			'googleicon' => Image::class,
			'appleicon' => Image::class,
		];

		private static $owns = [
			'F1BG',
			'F2BG',
			'F4BG',
			'F4IMG',
			'F5BG',
			'googleicon',
			'appleicon',
		];



		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'Home Page',
			'MenuTitle' => 'Home',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');

			/*
			|-----------------------------------------------
			| @Frame1
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Frame1.Main', array(
				new TextareaField('F1Title', 'Title'),
				new TextareaField('F1Desc', 'Description'),
				$upload = UploadField::create('F1BG','Background'),
			));
			# SET FIELD DESCRIPTION 
			$upload->setDescription('Max file size: 2MB | Dimension: 1366px x 768px');
			# Set destination path for the uploaded images.
			$upload->setFolderName('homepage/background');

			/*
			|-----------------------------------------------
			| @Frame2
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Frame2.Main', array(
				new TextareaField('F2Title', 'Title'),
				new TextareaField('F2Desc', 'Description'),
				$upload = UploadField::create('F2BG','Background'),
			));
			# SET FIELD DESCRIPTION 
			$upload->setDescription('Max file size: 2MB | Dimension: 1366px x 768px');
			# Set destination path for the uploaded images.
			$upload->setFolderName('homepage/background');

			/*
			|-----------------------------------------------
			| @Frame3
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Frame3.Main', array(
				new TextareaField('F3Title', 'Title'),
				new TextareaField('F3Desc', 'Description'),
			));

			/*
			|-----------------------------------------------
			| @Frame4
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Frame4.Main', array(
				new TextareaField('F4Title', 'Title'),
				new TextareaField('F4Desc', 'Description'),
				$upload = UploadField::create('F4BG','Background'),
				$upload = UploadField::create('F4IMG','Image'),
			));
			# SET FIELD DESCRIPTION 
			$upload->setDescription('Max file size: 2MB | Dimension: 1366px x 768px');
			# Set destination path for the uploaded images.
			$upload->setFolderName('homepage/background');

			/*
			|-----------------------------------------------
			| @Frame5
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Frame5.Main', array(
				new TextareaField('F5Title', 'Title'),
				new TextareaField('F5Desc', 'Description'),
				$upload = UploadField::create('F5BG','Background'),
			));
			# SET FIELD DESCRIPTION 
			$upload->setDescription('Max file size: 2MB | Dimension: 1366px x 768px');
			# Set destination path for the uploaded images.
			$upload->setFolderName('homepage/background');

			/*
			|-----------------------------------------------
			| @Frame6
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Frame6.Main', array(
				new TextareaField('F6Title', 'Title'),
				new TextareaField('F6Desc', 'Description'),
			));

			/*
			|-----------------------------------------------
			| @Download Link
			|----------------------------------------------- */

			$fields->addFieldsToTab('Root.Frame6.Playstore', [
				new TextField('playstorelink', 'Playstore Link'),
				$upload = UploadField::create('googleicon','Playstore Download Button'),
			]);

			# SET FIELD DESCRIPTION 
			$upload->setDescription('Max file size: 2MB');
			# Set destination path for the uploaded images.
			$upload->setFolderName('homepage/background');

			$fields->addFieldsToTab('Root.Frame6.Appstore', [
				new TextField('appstorelink', 'Appstore Link'),
				$upload = UploadField::create('appleicon','Appstore Download Button'),
			]);

			# SET FIELD DESCRIPTION 
			$upload->setDescription('Max file size: 2MB');
			# Set destination path for the uploaded images.
			$upload->setFolderName('homepage/background');
			
			return $fields;
		}
	}

	class HomePageController extends PageController {

		public function FeaturedProducts() {
			return Product::get()
				->filter(array (
				'Featured' => true
			));
		}

	}
}

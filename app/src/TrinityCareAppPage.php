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

	class TrinityCareAppPage extends Page {

		private static $db = [

			/*Frame 1*/
			'F1Title' => 'Text',
			'F1Desc' => 'Text',

			/*Download Link*/
			'DownloadText' => 'Text',
			'playstorelink' => 'Text',
			'appstorelink' => 'Text',

			/*Video Link*/
			'VideoLink' => 'Text',

		];

		private static $has_one = [
			'googleicon' => Image::class,
			'appleicon' => Image::class,
		];

		private static $owns = [
			'googleicon',
			'appleicon',
		];

		private static $has_many = [
	        'AppDetails' => AppDetail::class,
	        'Trinities' => Trinity::class,
	    ];

		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'Trinity Care App Page',
			'MenuTitle' => 'TrinityCare App',
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
				new TextareaField('DownloadText', 'Download Text'),
			));

			/*
			|-----------------------------------------------
			| @Download Link
			|----------------------------------------------- */

			$fields->addFieldsToTab('Root.Frame1.Playstore', [
				new TextField('playstorelink', 'Playstore Link'),
				$upload = UploadField::create('googleicon','Playstore Download Button'),
			]);


			$fields->addFieldsToTab('Root.Frame1.Appstore', [
				new TextField('appstorelink', 'Appstore Link'),
				$upload = UploadField::create('appleicon','Appstore Download Button'),
			]);

			/*
			|-----------------------------------------------
			| @Frame2
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Frame2.Main', array(
				new TextField('VideoLink', 'Video src'),
			));

			$fields->addFieldToTab('Root.Frame2.AppDetails', new TabSet('App Details',
				new Tab('Gallery', GridField::create(
		            'AppDetails',
		            'App Details',
		            $this->AppDetails(),
		            GridFieldConfig_RecordEditor::create(10)
		            ->addComponent(new GridFieldSortableRows('SortID'))
				))
			));

			$fields->addFieldToTab('Root.Frame3.Trinity', new TabSet('Trinity',
				new Tab('Gallery', GridField::create(
		            'Trinities',
		            'Trinity',
		            $this->Trinities(),
		            GridFieldConfig_RecordEditor::create(10)
		            ->addComponent(new GridFieldSortableRows('SortID'))
				))
			));

			
			return $fields;
		}
	}

	class TrinityCareAppPageController extends PageController {

	}
}

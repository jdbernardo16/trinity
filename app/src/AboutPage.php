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

	class AboutPage extends Page {

		private static $db = [

			/*Frame 1*/

			'F1Title' => 'Text',
			'F1Desc' => 'Text',
			'videolink' => 'Text',

			/*Frame 2*/

			'F2Title' => 'Text',

			/*Frame 3*/

			'VTitle' => 'Text',
			'VDesc' => 'HTMLText',
			'MTitle' => 'Text',
			'MDesc' => 'HTMLText',
		];

		private static $has_one = [
			'F1BG' => Image::class,
			'F3BG' => Image::class,
		];

		private static $owns = [
			'F1BG',
			'F3BG',
		];

		private static $has_many = [
	        'Values' => Value::class,
	    ];

		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'About Page',
			'MenuTitle' => 'About Us',
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
			$upload->setFolderName('aboutpage/background');

			$fields->addFieldsToTab('Root.Frame1.Video', array(
				new TextField('videolink', 'Video Link src'),
			));

			/*
			|-----------------------------------------------
			| @Frame1
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Frame2.Main', array(
				new TextareaField('F2Title', 'Title'),
			));

			$fields->addFieldToTab('Root.Frame2.CompanyValues', new TabSet('Company Values',
				new Tab('Gallery', GridField::create(
		            'Values',
		            'Company values',
		            $this->Values(),
		            GridFieldConfig_RecordEditor::create(10)
		            ->addComponent(new GridFieldSortableRows('SortID'))
				))
			));

			/*
			|-----------------------------------------------
			| @Frame3
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Frame3.Main', array(
				$upload = UploadField::create('F3BG','Background'),
			));

			$upload->setDescription('Max file size: 2MB | Dimension: 1366px x 768px');
			# Set destination path for the uploaded images.
			$upload->setFolderName('aboutpage/background');

			$fields->addFieldsToTab('Root.Frame3.Vision', array(
				new TextField('VTitle', 'Title'),
				new HTMLEditorField('VDesc', 'Description'),
			));		

			$fields->addFieldsToTab('Root.Frame3.Mission', array(
				new TextField('MTitle', 'Title'),
				new HTMLEditorField('MDesc', 'Description'),
			));			
			
			return $fields;
		}
	}

	class AboutPageController extends PageController {

	}
}

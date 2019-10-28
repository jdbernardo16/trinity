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

	class ProductPage extends Page {

		private static $db = [
		
		];

		private static $has_one = [
		];

		private static $allowed_children = array(
			"ProductCategory"

		);

		private static $defaults = array(
			'PageName' => 'Product Page',
			'MenuTitle' => 'Product Page',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');
			
			return $fields;
		}
	}

	class ProductPageController extends PageController {

		public function init() {
	    	parent::init();
	    	/*REDIRECT TO CHILDREN*/ 
	    	if (empty($this->Content)) {
	  			if($this->Children()->Count()){
	  				return $this->redirect($this->Children()->First()->AbsoluteLink()); 
	   			 } 
			}
		}
	}
}

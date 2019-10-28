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
	use SilverStripe\Forms\CheckboxField;
	use SilverStripe\Forms\FieldList;
	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
	use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

	class Product extends Page {

		private static $db = [

			'Name' => 'Text',
			'Teaser' => 'Text',
			'Desc' => 'HTMLText',
			'New' => 'Boolean',
			'Featured' => 'Boolean',
		
		];

		private static $has_one = [
		];

		private static $has_many = [
			'ProductImages' => ProductImage::class,
	    ];

		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'Product',
			'MenuTitle' => 'Product',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');

			/*
			|-----------------------------------------------
			| @Product
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Product.Main', array(
				new TextField('Name', 'Name'),
				new TextField('Teaser', 'Teaser Description'),
				new HTMLEditorField('Desc', 'Description'),
			));

			$fields->addFieldToTab('Root.Product.ProductImage', new TabSet('Product Image',
				new Tab('Gallery', GridField::create(
		            'ProductImages',
		            'Product Images',
		            $this->ProductImages(),
		            GridFieldConfig_RecordEditor::create(10)
		            ->addComponent(new GridFieldSortableRows('SortID'))
				))
			));

			$fields->addFieldsToTab('Root.Product.NewTag', array(
				new CheckboxField('New', 'New Product?'),
			));

			/*
			|-----------------------------------------------
			| @Featured Button
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.FeaturedButton.Main', array(
				new CheckboxField('Featured', 'Featured on homepage?'),
			));
			
			return $fields;
		}
	}

	class ProductController extends PageController {

	}
}

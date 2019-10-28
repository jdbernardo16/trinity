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
	use SilverStripe\Forms\TabSet;
	use SilverStripe\Forms\Tab;
	use SilverStripe\ORM\DataObject;
	use SilverStripe\Forms\FieldList;
	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

	class HeaderFooter extends Page {

		private static $db = [


			/*Seo Keywords*/

			'SeoKeywords' => 'Text',	

			/*Footer copyrights*/

			'copyright' => 'Text',	

			/*Header Top Text*/

			'TopAddress' => 'Text',	
			'TopNum' => 'Text',	
			'TopMail' => 'Text',	
			'TopSched' => 'Text',

			/*Social Media Link*/

			'fbtext' => 'Text',
			'fblink' => 'Text',
			'igtext' => 'Text',
			'iglink' => 'Text',
			'twittertext' => 'Text',
			'twitterlink' => 'Text',
			'youtubetext' => 'Text',
			'youtubelink' => 'Text',

			/*Download Link*/

			'playstorelink' => 'Text',
			'appstorelink' => 'Text',


		];

		private static $has_one = [
			'Logo' => Image::class,
			'Favicon' => Image::class,
			'googleicon' => Image::class,
			'appleicon' => Image::class,
			// 'LoadingIcon' => Image::class,
			
		];

		private static $owns = [
			'Logo',
			'Favicon',
			'googleicon',
			'appleicon',
			// 'LoadingIcon',
		];

		private static $has_many = [
	    ];


		private static $allowed_children = "none";

		private static $defaults = array(
			
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');

			/*
			* Header
			*/
			$fields->addFieldsToTab('Root.Header', array(
				$upload = new UploadField('Logo', 'Logo (Max size: 2MB)'),
				$upload = new UploadField('Favicon', 'Fav Icon (Max size: 2MB)'),
				// $upload = new UploadField('LoadingIcon', 'Loading Icon (Max size: 2MB)'),
			));

			# SET FIELD DESCRIPTION 
			$upload->setDescription('Max file size: 2MB');
			# Set destination path for the uploaded images.
			$upload->setFolderName('headerfooter');


			/*
			|-----------------------------------------------
			| @SEO Keywords
			|----------------------------------------------- */

			$fields->addFieldsToTab('Root.SEO Keywords', [
				new TextareaField('SeoKeywords', 'SEO Keywords'),
			]);

			/*
			|-----------------------------------------------
			| @Header Top
			|----------------------------------------------- */

			$fields->addFieldsToTab('Root.HeaderTop', [
				new TextField('TopAddress', 'Short Address'),
				new TextField('TopNum', 'Contact Number'),
				new TextField('TopMail', 'E-mail'),
				new TextField('TopSched', 'Schedule'),
			]);

			/*
			|-----------------------------------------------
			| @Social Media Link
			|----------------------------------------------- */

			$fields->addFieldsToTab('Root.SocialMediaLink', [
				new TextField('fbtext', 'Facebook Text'),
				new TextField('fblink', 'Facebook Link'),
				new TextField('igtext', 'Instagram Text'),
				new TextField('iglink', 'Instagram Link'),
				new TextField('twittertext', 'Twitter Text'),
				new TextField('twitterlink', 'Twitter Link'),
				new TextField('youtubetext', 'YouTube Text'),
				new TextField('youtubelink', 'YouTube Link'),
			]);

			/*
			|-----------------------------------------------
			| @Download Link
			|----------------------------------------------- */

			$fields->addFieldsToTab('Root.DownloadLink.Playstore', [
				new TextField('playstorelink', 'Playstore Link'),
				$upload = UploadField::create('googleicon','Playstore Download Button'),
			]);

			$fields->addFieldsToTab('Root.DownloadLink.Appstore', [
				new TextField('appstorelink', 'Appstore Link'),
				$upload = UploadField::create('appleicon','Appstore Download Button'),
			]);

			
			/*
			|-----------------------------------------------
			| @Copy Right
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.CopyRights.Main', array(
				new TextField('copyright', 'Copy Rights'),
			));



			
			return $fields;
		}
	}

	class HeaderFooterController extends PageController {

	}
}

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use SilverStripe\Control\Controller;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\View\ArrayData;
use SilverStripe\Assets\File;

require '../vendor/autoload.php';

class ApplyController extends Controller {

	private $jobtitle;
	private $messagedetails;
	private $name;
	private $email;
	private $mobile;
	private $education;

	private $resume;
	private $file;

	private $receipient;

	private $errors;

	public function init() {
		parent::init();
		// print_r('Init...');
		if(isset($_POST['postFlag']) && is_numeric($_POST['postFlag'])) {

    		$postFlag = $_POST['postFlag'];
    		// print_r('PostFlag : '$_POST['postFlag']);
    		switch ($postFlag) {
    		
	    		// Sending
	    		case 1:
	    				
					if($this->setPostVars() && $this->checkPostVars()) {
						// print_r('Sending...');
						$this->setReceipients();
						$this->sendEmail();
						$this->sendConfirmationEmail();
						$this->writeRecord();
						$this->returnEcho(1, 'Sending successful!');
					}

				break;
			}
    	}

    	exit();
	}

	private function setPostVars() {
		// print_r('Set post...');

		if(isset($_POST['jobtitle'])) {
			$this->jobtitle = $_POST['jobtitle'];
		}

		if(isset($_POST['messagedetails'])) {
			$this->messagedetails = $_POST['messagedetails'];
		}


		if(isset($_POST['name'])) {
			$this->name = $_POST['name'];
		}

		if(isset($_POST['email'])) {
			$this->email = $_POST['email'];
		}

		if(isset($_POST['mobile'])) {
			$this->mobile = $_POST['mobile'];
		}

		if(isset($_POST['education'])) {
			$this->education = $_POST['education'];
		}

		
		if(isset($_POST['resume'])) {
			$this->resume = $_POST['resume'];
		}

		return true;

	}

	private function checKPostVars() {
		// print_r('Check post...');


		if(empty($_POST['jobtitle'])) {
			$this->errors['jobtitle'] = array(
				'error' => 'Please input your job title'
			);
		}

		if(empty($_POST['name'])) {
			$this->errors['name'] = array(
				'error' => 'Please input your name'
			);
		}

		if(empty($_POST['email'])) {
			$this->errors['email'] = array(
				'error' => 'Please input your email'
			);
		}

		if(empty($_POST['education'])) {
			$this->errors['education'] = array(
				'error' => 'Please select your highest educational attainment'
			);
		}


		if(empty($_POST['resume'])) {
			$this->errors['resume'] = array(
				'error' => 'Please upload your resume'
			);
		}

		switch ($this->postFlag) {
    		// Sending
    		case 1: break;
    	}		

		if(!empty(count($this->errors) > 0)) {
			$this->returnEcho(0, 'Please enter all required fields');

			return false;
		}
 
		return true;

	}

	private function setReceipients() {
		$email = CareerPage::get()->First()->EmailRecipient;
		$this->receipient = $email;
	}

	private function writeRecord() {
    	$duplicate = new Application();

    	$duplicate->JobTitle = $this->jobtitle;
    	$duplicate->Message = $this->messagedetails;
    	$duplicate->Name = $this->name;
    	$duplicate->MobileNumber = $this->mobile;
    	$duplicate->Email = $this->email;
    	$duplicate->Education = $this->education;
    
    	$this->file = File::get()->ByID($this->resume);

    	$duplicate->FileID = $this->file->ID;

	    	// print_r($this->$resume);
	    	// print_r($this->file->ID); exit();

    	$duplicate->write(); 
    }

    /*
	* ADMIN 
	* send email
    */
	private function sendEmail() {
		// print_r('Email...');

		$to = explode(',', $this->receipient);
		// Enables HTML Text
		// $headers .= "\r\n" . "MIME-Version: 1.0" . "\r\n";
		// $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

		$subject = $this->subject .'Trinity Health PH: New Applicant!';

		$message = $this->getAdminEmailTemplate();

		$this->sendPHPMailer($to, $subject, $message);

	}

	private function getAdminEmailTemplate() {

		$arrayData = new ArrayData(array(
			'jobtitle' => $this->jobtitle,
			'message' => $this->messagedetails,
		    'name' => $this->name,
		    'email' => $this->email,
		    'mobile' => $this->mobile,
		    'education' => $this->education,
		));

		return $arrayData->renderWith('ApplyAdminEmailTemplate');
	}

    /*
	* USER
	* send confirmation email
    */

	private function sendConfirmationEmail() {
		// print_r('Email confirmation...');
		
		$recipients = explode(',', $this->email);
		$subject = $this->subject .'Trinity Health PH: This is to notify you that we have succesfully received your message on trinityhealthph.com';
		
		// Enables HTML Text
		// $headers .= "\r\n" . "MIME-Version: 1.0" . "\r\n";
		// $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

		$message = $this->getUserEmailTemplate();

		$this->sendPHPMailer($recipients, $subject, $message);
	}

	private function getUserEmailTemplate() {

		$arrayData = new ArrayData(array(
		    'name' => $this->name,
		));

		return $arrayData->renderWith('ApplyUserEmailTemplate');
	}

	private function sendPHPMailer($recipients, $subject, $body) {
		// print_r('Emailing...' . $recipients);
		try {

			$mail = new PHPMailer(true);  

			$mail->SMTPDebug = 0;
			$mail->SMTPAuth = true;
			$mail->Host = 'email.praxxys.ph';
		    $mail->Username = 'mark.praxxys';
		    $mail->Password = '5xRaJCyQ6ddWRTeR';
		    $mail->Port = 587;

			$mail->setFrom('no-reply@praxxys.ph', 'www.trinityhealthph.com');

			// Add in each recipient to the "TO"
			foreach ($recipients as $recipient) {
				$mail->addAddress($recipient, $recipient);
			}

			$mail->isSMTP();
			$mail->isHTML(true);
			$mail->Subject = $subject;
			$mail->Body = $body;
			// $mail->addAttachment( $file, 'curriculum vitae');

			$mail->send();

			// print_r('Emailing done...');

		} catch (phpmailerException $e) {
			// print_r($e->errorMessage());
		} catch (Exception $e) {
			// print_r($e->getMessage());
		}
	}

	private function returnEcho($status, $message = 'Sent') {

		echo json_encode(array(
			'status' => $status,
			'message' => $message
		));
	}
}
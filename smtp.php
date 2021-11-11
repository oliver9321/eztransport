
<?php
include 'core.php';

	if($_POST){

		if(isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['message']) ){

		$emailto = EMAIL;
		$toname = 'Sales EZ Auto Transportation';
		$emailfrom = trim($_POST['email']);
		$fromname  = trim($_POST['fullname']);
		$subject   = 'Contact Us - '.trim($_POST['fullname']);
		
		$messagebody = trim($_POST['message']);
		
		$headers = 
			'Return-Path: ' . $emailfrom . "\r\n" . 
			'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
			'X-Priority: 3' . "\r\n" . 
			'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
			'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
			'MIME-Version: 1.0' . "\r\n" . 
			'Content-Transfer-Encoding: 8bit' . "\r\n" . 
			'Content-Type: text/plain; charset=UTF-8' . "\r\n";

		$params = '-f ' . $emailfrom;

		echo mail($emailto, $subject, $messagebody, $headers, $params);

	}else{
		echo false;
	}
		
	}else{
		echo false;
	}

?>
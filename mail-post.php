<?php 
/**
 * mail.php
 *
 * Bulk Mail Sending Script
 *
 * @category   Mail
 * @package    PhpMailler
 * @author     seotamsin
 * @copyright  2022 seotamsin
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @link       https://github.com/seotamsin/php-mail-script
 * @datetime   02 05 2022
 */



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

	$smtphost=$_POST['smtphost'];  
	$smtpport=$_POST['smtpport']; 
	$mailadress=$_POST['mailadress']; 
	$mailpassword=$_POST['mailpassword']; 
	$mailname=$_POST['mailname']; 
	$mailsubject=$_POST['mailsubject']; 
	$mailmessage=$_POST['mailmessage']; 
	$mailfilename="mail.txt";
	$mfile = @file("$mailfilename");

	require 'phpmailler/src/Exception.php';
	require 'phpmailler/src/PHPMailer.php';
	require 'phpmailler/src/SMTP.php';



	$mail = new PHPMailer(true);
	for ($i = 0; $i < count($mfile); $i++) {
	try {

		$mail->SMTPDebug = 0;
		$mail->isSMTP();
		$mail->Host       = $smtphost;
		$mail->SMTPAuth   = true;
		$mail->Username   = $mailadress;
		$mail->Password   = $mailpassword;
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port       = $smtpport;

		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);

		//Recipients
		$mail->setFrom($mailadress, $mailname);
		$mail->addAddress($mfile[$i]);     



		$mail->isHTML(true);  
		$mail->CharSet = 'UTF-8';                 
		$mail->Subject = $mailsubject;
		$mail->Body    = $mailmessage;

		$mail->send();
		
	} 
	catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		die();
	}
}
	unlink($mailfilename);
	header("Location:mail.php?success=1");
?>

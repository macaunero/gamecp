<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once('class.phpmailer.php');
class Mailer {
	public function __construct() {
		//$mail = new PHPMailer();
	}
	public function sendmail($setting, $to, $to_name, $subject, $body) {
		try{
			$mail = new PHPMailer();
			if ($setting['type'] == "Mail") $mail->IsMail();
			else if ($setting['type'] == "Sendmail") $mail->IsSendmail();
			else if ($setting['type'] == "Qmail") $mail->IsQmail();
			else $mail->IsSMTP();
			$mail->SMTPAuth = $setting['SMTPAuth'] == 1 ? TRUE : FALSE;
			$mail->SMTPSecure = $setting['SMTPSecure'];
			$mail->Host = $setting['Host'];
			$mail->Port = $setting['Port'];
			$mail->CharSet = $setting['CharSet'];
			$mail->Username = $setting['Username'];
			$mail->Password = $setting['Password'];
			$mail->From = $setting['From'];
			$mail->FromName = $setting['FromName'];
			$mail->SMTPDebug = $setting['SMTPDebug'] == 1 ? TRUE : FALSE;
			if ($setting['IsHTML']) $mail->IsHTML(true); else $mail->IsHTML(false);
			$mail->AddAddress($to, $to_name);
			$mail->Subject = $subject;
			$mail->Body = $body;
			if(!$mail->Send()) {
				echo "Mailer Error: " . $mail->ErrorInfo;
			} else {
				echo "OK";
			}
		} catch (phpmailerException $e) {
			echo $e->errorMessage(); //Pretty error messages from PHPMailer
		} catch (Exception $e) {
			echo $e->getMessage(); //Boring error messages from anything else!
		}
	}
}

/* End of file mailer.php */
/* Location: ./application/libraries/phpmailer/mailer.php */
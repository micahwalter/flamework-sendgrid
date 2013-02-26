<?
	
	include ('sendgrid-php/SendGrid_loader.php');

	#########################################################################################

	function sendgrid_email_send($to, $from, $subject, $message){
		
		$sendgrid = new SendGrid($GLOBALS['cfg']['sendgrid_username'], $GLOBALS['cfg']['sendgrid_password']);
		
		$mail = new SendGrid\Mail();
		
		$mail->
		  addTo($to)->
		  setFrom($from)->
		  setSubject($subject)->
		  setText($message);
		
		$sendgrid->
		smtp->
		  send($mail);
		
		
	}
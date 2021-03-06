<?php

	$GLOBALS['_email_hooks']['send'] = 'email_sendgrid_send';

	#########################################################################################

	# https://github.com/sendgrid/sendgrid-php

	#########################################################################################

	function email_sendgrid_send($args){

		$args = email_common_prepare_email($args);

		$from = new SendGrid\Email($args['from_name'], $args['from_email']);
		$subject = $args['subject'];
		$to = new SendGrid\Email(null, $args['to_email']);
		$content = new SendGrid\Content("text/plain", $args['message']);
		$mail = new SendGrid\Mail($from, $subject, $to, $content);

		$apiKey = $GLOBALS['cfg']['email_sendgrid_api_key'];
		$sg = new \SendGrid($apiKey);

		try{
		 	$ok = $sg->client->mail()->send()->post($mail) ? 1 : 0;
		 	$rsp = array('ok' => $ok);
		}

		catch (Exception $e){
		 	$rsp = array(
		 		'ok' => 0,
		 		'error' => $e->getMessage()
		 	);
		 }

		 return $rsp;
	}

	#########################################################################################

	# the end

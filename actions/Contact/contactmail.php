<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team | Sathish Kumar <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED, 2014 webbehinds
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$subject = ossn_print('contact:mail:subject');
$message = input('message');
$message = html_entity_decode($message, ENT_QUOTES, "UTF-8");
$message = strip_tags($message);
$message = ossn_restore_new_lines($message);
$name = input('name');
$cemail = input('email');

$body = ossn_print('contact:mail:body', array(
                        $name,
                        $cemail,
                        $message
                    ));
$settings = new OssnComponents;
$settings = $settings->getComSettings('contact');
$email = $settings->email;

if(!empty($message) && !empty($cemail) && !empty($name)) {
	if(!filter_var($cemail, FILTER_VALIDATE_EMAIL)) {
		ossn_trigger_message(ossn_print('contact:admin:settings:email:invalid'), 'error');
		redirect(REF);
	}
	$mail = new OssnMail;
	if($mail->NotifiyUser($email, $subject, $body)){
		ossn_trigger_message(ossn_print('contact:form:message:sent'));
		redirect(REF);
	}
	else {
		ossn_trigger_message(ossn_print('contact:form:message:not:sent'), 'error');
		redirect(REF);
	}
}
else {
	ossn_trigger_message(ossn_print('contact:form:message:incomplete'), 'error');
	redirect(REF);
}

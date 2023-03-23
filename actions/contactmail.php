<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   (webbehinds.com).ossn
 * @author    OSSN Core Team | Sathish Kumar <info@opensource-socialnetwork.com>
 * @copyright 2014 webbehinds
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      http://www.opensource-socialnetwork.com/licence
 */
$subject = ossn_print('contact:mail:subject');
$message = input('message');
$message = html_entity_decode($message, ENT_QUOTES, "UTF-8");
$message = strip_tags($message);
$message = ossn_restore_new_lines($message);
$name = input('name');
$cemail = input('email');

$body = ossn_print('contact:body', array($name, $cemail, $message));

$settings = new OssnComponents;
$settings = $settings->getComSettings('contact');
$email = $settings->email;

if (!empty($message) && !empty($cemail)) {
    $mail = new Contact;
    if ($mail->NotifiyUserWithReplyTo($email, $subject . "  - ID: " . time(), $body, $cemail, $name)) { //add id = timestamp to prevent group by subject 
        ossn_trigger_message(ossn_print('contact:form:message:sent'));
        redirect(REF);
    } else {
        ossn_trigger_message(ossn_print('contact:form:message:not:sent'), 'error');
        redirect(REF);

    }
} else {
    ossn_trigger_message(ossn_print('contact:form:message:incomplete'), 'error');
    redirect(REF);
}
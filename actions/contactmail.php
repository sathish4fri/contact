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
$subject= "Contact form Page";
$message = input('message');
$name = input('name');
$cemail = input('email');

$body = ossn_print('contact:body', array(
                        $name,
                        $cemail,
                        $message
                    ));
$settings = new OssnComponents;
$settings = $settings->getComSettings('contact');
$email = $settings->email;

if(!empty($message) && !empty($cemail)){
$mail = new OssnMail;
if($mail->NotifiyUser($email, $subject, $body)){
ossn_trigger_message('Mail Sent');
redirect(REF);
}
else
{
 ossn_trigger_message('mail not sent', 'error');
redirect(REF);

}
}else
{
ossn_trigger_message('Please fill all the details', 'error');
redirect(REF);
}


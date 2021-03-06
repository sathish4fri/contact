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
$OssnComponents = new OssnComponents;

$email = input('email');
if(isset($email))
{
	if($OssnComponents->setComSETTINGS('contact', 'email', $email)){
		ossn_trigger_message('Settings saved');
		redirect(REF);
	} else {
		ossn_trigger_message('Cannot save settings', 'error');
		redirect(REF);
	}
}else{
	ossn_trigger_message('Please Enter the value ', 'error');
}
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
$email = input('email');
$map = input('map');
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$component = new OssnComponents;
	if($component->setSettings('contact', array('email' => $email, 'map' => $map))){
		ossn_trigger_message(ossn_print('ossn:admin:settings:saved'));
		redirect(REF);
	} else {
		ossn_trigger_message(ossn_print('ossn:admin:settings:save:error'), 'error');
		redirect(REF);
	}
} else {
	ossn_trigger_message(ossn_print('contact:admin:settings:email:invalid'), 'error');
	redirect(REF);
}
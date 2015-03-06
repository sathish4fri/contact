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
//$gmap = input('gmap');
//echo $email;
//&& $OssnComponents->setComSETTINGS('contact', 'gmap', $gmap) for gmap iframe 
//for single value
if($OssnComponents->setComSETTINGS('contact', 'email', $email)){
    ossn_trigger_message('Settings saved');
    redirect(REF);
} else {
    ossn_trigger_message('Cannot save settings', 'error');
    redirect(REF);
}

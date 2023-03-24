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

define('__CONTACT__', ossn_route()->com . 'Contact/');
require_once(__CONTACT__ . 'classes/contact.php');

function contact_init() {
	if(ossn_isAdminLoggedin()){
		ossn_register_com_panel('Contact', 'settings');
		ossn_register_action('Contact/admin/settings', __CONTACT__ . 'actions/Contact/admin/settings.php');		
	}	
	ossn_register_action('Contact/contactmail', __CONTACT__ . 'actions/Contact/contactmail.php');
	ossn_register_page('contact', 'contact_page_handler');
	ossn_register_menu_link('Contact', ossn_print('contact:form:title'), ossn_site_url('contact'), 'footer');
}

function contact_page_handler($page) {
	if (empty($page)) {
		redirect(REF);
	}
	$title = ossn_print('contact:form:title');
	$contents = array('content' => ossn_plugin_view('pages/contactpage'));
	$content = ossn_set_page_layout('contents', $contents);
	echo ossn_view_page($title, $content);			
}

ossn_register_callback('ossn', 'init', 'contact_init');

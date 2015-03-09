<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   (webbehinds.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES 
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      http://www.opensource-socialnetwork.com/licence
 */

define('__contact_PATH__', ossn_route()->com . 'contact/');

function contact_init() {
	//don't register again and again for each component
	//register at onece
	ossn_register_com_panel('contact', 'settings');
	
	//add actio for save settings
	if(ossn_isAdminLoggedin()){
		ossn_register_action('admin/contact/settings', __contact_PATH__ . 'actions/save.php');		
	}	
	ossn_register_action('contact',__contact_PATH__ . 'actions/contactmail.php');
	ossn_extend_view('css/ossn.default', 'components/contact/css/style');
	//register page handler
	ossn_register_page('contact', 'contact_page_handler');
	ossn_register_menu_link('Contact', ossn_print('contact'), ossn_site_url('contact'), 'footer');
}

function contact_page_handler($page) {
	//$page = $pages[0];
    if (empty($page)) {
        redirect(REF);
    }
		  $params['title'] = ossn_print('Contact');
        	$title = $params['title'];
            $contents = array('content' => ossn_view('components/contact/pages/page', $params),);
            $content = ossn_set_page_layout('contents', $contents);
            echo ossn_view_page($title, $content);			
	  
}

ossn_register_callback('ossn', 'init', 'contact_init');

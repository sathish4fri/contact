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
if (!isset($params['title'])) {
    $params['title'] = '';
}
?>
<div class="ossn-site-pages">
    <div class="ossn-site-pages-inner">
       <!-- <div class="ossn-site-pages-title">
            <?php //echo $params['title']; ?>
        </div>-->
        <div class="ossn-site-pages-body">
           <?php	echo ossn_view_form('administrator/contacform', array(
    				'action' => ossn_site_url() . 'action/contact',
				    'component' => 'contact',
					'params' => $params,
				    'class' => 'ossn-admin-form'	
					), false); 
		?>
        </div>
    </div>
</div>

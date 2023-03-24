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
?>
<div class="ossn-site-pages">
	<div class="ossn-site-pages-inner">
		<div class="ossn-site-pages-body">
			<?php	echo ossn_view_form('contactform', array(
    				'action' => ossn_site_url() . 'action/Contact/contactmail',
				    'component' => 'Contact'
					), false); 
			?>
		</div>
	</div>
</div>

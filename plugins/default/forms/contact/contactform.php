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
<div>
<?php
$component = new OssnComponents;
$settings = $component->getSettings('contact');
if ($settings->map && !empty($settings->map)){
	echo html_entity_decode($settings->map, ENT_QUOTES, 'utf-8');
}
?>
</div>

<div class="col-md-12 ossn-site-pages-inner  ossn-page-contents">
	<div class="ossn-site-pages-title">
		<?php echo ossn_print('contact:form:title');?>
	</div>
	<p></p>
	<div>
		<input id="name" type="text" name="name" placeholder="<?php echo ossn_print('contact:form:name');?>"/>
	</div>
	<div>
		<input id="email" type="text" name="email" placeholder="<?php echo ossn_print('contact:form:email');?>" />
	</div>
	<div>
		<textarea id="message" name="message" placeholder="<?php echo ossn_print('contact:form:message');?>"></textarea>
	</div>
	<div>
		<?php echo ossn_fetch_extend_views('forms/Contact/contactform/before/submit'); ?>
	</div>
	<div>
		<span>&nbsp;</span>
		<input type="submit" class="ossn-admin-button btn btn-success" value="<?php echo ossn_print('contact:form:button:send'); ?>"/>
	</div>
</div>




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
$en = array(
	// site frontend
    'contact:form:title' => 'Contact Us',
	'contact:form:description' => 'Please fill out all fields',
	'contact:form:name' => 'Your Name',
	'contact:form:email' => 'Your Email',
	'contact:form:message' => 'Message',
	'contact:form:button:send' => 'Submit',
	
	'contact:form:message:sent' => 'Your Message was sent!',
	'contact:form:message:incomplete' => 'Please fill out all fields',
	'contact:form:message:not:sent' => 'Your message could not be sent due to a technical problem. Please try again later.',

	// admin backend
	'contact' => 'Contact', // Configure menu entry - don't translate
	'contact:admin:form:label:contactform:receiver' => 'Email address to which the contact form should be sent',
	'contact:admin:form:label:contactform:top:html' => 'Any text or HTML that should appear above the contact form, e.g. an IFRAME with a road map',
	'contact:admin:form:button:save' => 'Save',
	'contact:admin:settings:email:invalid' => 'Please enter a valid email address',

	// mailer
	'contact:mail:subject' => 'Contact request',
	'contact:mail:body' => '
You received a message from

Name : %s
Email: %s	

%s ',
);
ossn_register_languages('id', $en); 

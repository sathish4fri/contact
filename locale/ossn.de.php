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
    'contact:form:title' => 'Kontaktiere uns',
	'contact:form:description' => 'Bitte fülle alle Felder aus',
	'contact:form:name' => 'Dein Name',
	'contact:form:email' => 'Deine Email',
	'contact:form:message' => 'Nachricht',
	'contact:form:button:send' => 'Absenden',
	
	'contact:form:message:sent' => 'Deine Nachricht wurde verschickt!',
	'contact:form:message:incomplete' => 'Bitte fülle alle Felder aus',
	'contact:form:message:not:sent' => 'Deine Nachricht konnte aufgrund eines technischen Problems nicht gesendet werden. Bitte versuche es später noch einmal.',

	// admin backend
	'contact' => 'Contact', // Configure menu entry - don't translate
	'contact:admin:form:label:contactform:receiver' => 'E-Mail-Adresse, an die das Kontaktformular gesendet werden soll',
	'contact:admin:form:label:contactform:top:html' => 'Beliebiger Text oder HTML-Code, der über dem Kontaktformular angezeigt werden soll, z. ein IFRAME mit einer Straßenkarte',
	'contact:admin:form:button:save' => 'Speichern',
	'contact:admin:settings:email:invalid' => 'Bitte gib eine gültige E-Mail-Adresse ein',

	// mailer
	'contact:mail:subject' => 'Kontact Anfrage',
	'contact:mail:body' => '
Du hast eine Nachricht erhalten von

Name : %s
Email: %s	

%s ',
);
ossn_register_languages('de', $en); 

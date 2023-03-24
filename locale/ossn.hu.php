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
$hu = array(
	// site frontend
    'contact:form:title' => 'Lépjen kapcsolatba velünk',
	'contact:form:description' => 'Kérjük, töltse ki az összes mezőt',
	'contact:form:name' => 'Név',
	'contact:form:email' => 'Email címe',
	'contact:form:message' => 'Üzenet',
	'contact:form:button:send' => 'Elküld',
	
	'contact:form:message:sent' => 'Üzenetét elküldtük!',
	'contact:form:message:incomplete' => 'Kérjük, töltse ki az összes mezőt',
	'contact:form:message:not:sent' => 'Üzenetét technikai probléma miatt nem lehetett elküldeni. Kérjük, próbálja újra később.',

	// admin backend
	'contact' => 'Contact', // Configure menu entry - don't translate
	'contact:admin:form:label:contactform:receiver' => 'E-mail cím, amelyre a kapcsolatfelvételi űrlapot el kell küldeni',
	'contact:admin:form:label:contactform:top:html' => 'Bármilyen szöveg vagy HTML, amelynek meg kell jelennie a kapcsolatfelvételi űrlap felett, pl. egy IFRAME egy útitervvel',
	'contact:admin:form:button:save' => 'Mentés',
	'contact:admin:settings:email:invalid' => 'Kérjük valós e-mail címet adjon meg',

	// mailer
	'contact:mail:subject' => 'Kapcsolatfelkérés',
	'contact:mail:body' => '
Üzenetet kapott tőle

Név : %s
Email: %s	

%s ',
);
ossn_register_languages('hu', $hu); 

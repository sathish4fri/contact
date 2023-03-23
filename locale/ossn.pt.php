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
$pt = array(
	// site frontend
    'contact:form:title' => 'Contato',
	'contact:form:description' => 'Todos os campos são obrigatórios',
	'contact:form:name' => 'Seu nome',
	'contact:form:email' => 'Seu e-mail',
	'contact:form:message' => 'Mensagem',
	'contact:form:button:send' => 'Enviar',
	
	'contact:form:message:sent' => 'Sua mensagem foi enviada!',
	'contact:form:message:incomplete' => 'Todos os campos são obrigatórios',
	'contact:form:message:not:sent' => 'Devido a problemas técnicos, sua mensagem não foi enviada. Tente mais tarde.',

	// admin backend
	'contact' => 'Contact', // Configure menu entry - don't translate
	'contact:admin:form:label:contactform:receiver' => 'Endereço de e-mail para o qual a mensagem deve ser enviada',
	'contact:admin:form:label:contactform:top:html' => 'Qualquer texto ou HTML que deve aparecer acima do formulário de contato, por exemplo um IFRAME com uma página ou mapa',
	'contact:admin:form:button:save' => 'Salvar',
	'contact:admin:settings:email:invalid' => 'Informe um endereço de e-mail válido',

	// mailer
	'contact:mail:subject' => 'Formulário de contato',
	'contact:mail:body' => '
Você recebeu uma mensagem de %s (%s): 	
%s ',
);

ossn_register_languages('pt', $pt); 

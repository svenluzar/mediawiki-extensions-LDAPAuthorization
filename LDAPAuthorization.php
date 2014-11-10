<?php

/*
 * Copyright (c) 2014 The MITRE Corporation
 *
 * Permission is hereby granted, free of charge, to any person obtaining a
 * copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( '<b>Error:</b> This file is part of a MediaWiki extension and cannot be run standalone.' );
}

if ( version_compare( $GLOBALS['wgVersion'], '1.23', 'lt' ) ) {
	die(
		'<b>Error:</b> This version of LDAPAuthorization is only compatible with 
		MediaWiki 1.23 or above.' );
}

$GLOBALS['wgExtensionCredits']['other'][] = array (
	'path' => __FILE__,
	'name' => 'LDAPAuthorization',
	'version' => '1.0',
	'author' => array(
		'[https://www.mediawiki.org/wiki/User:Icampbell Ian Campbell]',
		'[https://www.mediawiki.org/wiki/User:Cindy.cicalese Cindy Cicalese]'
		),
	'descriptionmsg' => 'ldapauthorization-desc',
	'url' => 'https://mediawiki.org/wiki/Extension:LDAPAuthorization'
);

$GLOBALS['wgExensionMessagesFiles']['LDAPAuthorization'] = __DIR__ . '/LDAPAuthorization.i18n.php';

$GLOBALS['wgMessagesDirs']['LDAPAuthorization'] = __DIR__ . '/i18n';

$GLOBALS['wgAutoloadClasses']['LDAPAuthorization'] =
	__DIR__ . '/LDAPAuthorization.class.php';

$GLOBALS['wgHooks']['PluggableAuthUserAuthorization'][] = 'LDAPAuthorization::authorize';


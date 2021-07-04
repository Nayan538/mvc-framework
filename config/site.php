<?php

/**
 * Content	: Application Configuration
 * Date	 	:
 * Feature	:
 */
define('TOKEN', sha1('CSRF_TOKEN_SECRET'));

define('APP', array(
	'title'		=> 'Protfolio',
	'path'		=> getFullHost(),
	'country'	=> 'BANGLADESH',
	'code'		=> '+88',
	'symbol'		=> '&#2547;',
	'currency'	=> 'tk/BDT',
	'tax'			=> 7.5
));



/**
 * Content	: Direcotory Path and Base File Parser
 * Date	 	:
 * Feature	:
 */
function getFullHost()
{
	$protocol = $_SERVER['REQUEST_SCHEME'] . '://';
	$host		 = $_SERVER['HTTP_HOST'] . '/';
	$explode	 = explode('/', $_SERVER['REQUEST_URI']);
	if (count($explode) === 5) {
		$project = $explode[1] . '/' . $explode[2];
	} else {
		$project = $explode[1];
	}
	return $protocol . $host . $project;
}

function baseFile()
{
	return str_replace('.php', '', basename($_SERVER['PHP_SELF']));
}

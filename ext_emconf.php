<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "static_info_tables_es".
 *
 * Auto generated 14-02-2014 11:39
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Static Info Tables (es)',
	'description' => 'Spanish (es) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '6.0.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'static_countries,static_languages,static_currencies,static_territories',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Romain Hobsterdre',
	'author_email' => 'hobsty@gmail.com',
	'author_company' => '',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' =>
	array (
		'depends' =>
		array (
			'static_info_tables' => '6.0.2-0.0.0',
			'typo3' => '6.0.6-6.1.99',
		),
		'conflicts' =>
		array (
		),
		'suggests' =>
		array (
		),
	),
);

?>
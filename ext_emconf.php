<?php

/*  | This extension is part of the TYPO3 project. The TYPO3 project is
 *  | free software and is licensed under GNU General Public License.
 *  |
 *  | (c) 2011-2015 Armin Ruediger Vieweg <armin@v.ieweg.de>
 *  |     2015 Dennis Roemmich <dennis@roemmich.eu>
 */


$EM_CONF[$_EXTKEY] = array(
	'title' => 'News extender',
	'description' => '',
	'category' => 'plugin',
	'author' => '',
	'author_email' => '',
	'author_company' => '',
	'shy' => '',
	'dependencies' => 'extbase,fluid,news',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => '',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'version' => '-10.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '7.6.0-7.6.99',
			'extbase' => '7.6.0',
			'fluid'	=> '7.6.0'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
);

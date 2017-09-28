<?php

/*  | This extension is part of the TYPO3 project. The TYPO3 project is
 *  | free software and is licensed under GNU General Public License.
 *  |
 *  | (c) 2011-2015 Armin Ruediger Vieweg <armin@v.ieweg.de>
 *  |     2015 Dennis Roemmich <dennis@roemmich.eu>
 */

if (!defined ('TYPO3_MODE')) die ('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['switchableControllerActions']['newItems']['News->gallery'] = 'Gallery view';

$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Controller/NewsController'][] = 'newsextender';
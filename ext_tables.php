<?php
if(!defined('TYPO3')) {
	die('Access denied.');
}

// TypoScript
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('mindshape_cookie_hint', 'Configuration/TypoScript', 'mindshape Cookie Hint');

// Plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'mindshape_cookie_hint',
	'Main',
	'Cookies'
);

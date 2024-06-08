<?php
if(!defined('TYPO3')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'MindshapeCookieHint',
	'Main',
	array(
		\Mindshape\MindshapeCookieHint\Controller\MainController::class => 'cookie',
	),
	// non-cacheable actions
	array(
	)
);

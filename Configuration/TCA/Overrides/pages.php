<?php

$newPageColumns = array(
	'css_id' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.css_id',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'nospace,alphanum_x,lower,unique'
		),
	),
	'css_class' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.css_class',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.css_class.none', ''),
				array('LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.css_class.dark-section', 'dark-section'),
				array('LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.css_class.highlight-section', 'highlight-section'),
				array('LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.css_class.feature-section', 'feature-section'),
        array('LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.css_class.color1', 'color1-section'),
        array('LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.css_class.color2', 'color2-section'),
        array('LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.css_class.color3', 'color3-section'),
        array('LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.css_class.color4', 'color4-section'),
        array('LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.css_class.color5', 'color5-section'),
			),
			'size' => 1,
			'maxitems' => 1,
			'eval' => ''
		),
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $newPageColumns);

$GLOBALS['TCA']['pages']['palettes']['t3onepage'] = array(
	'canNotCollapse' => 1,
	'showitem' => 'css_id, css_class'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
	'pages',
	'--palette--;LLL:EXT:t3onepage/Resources/Private/Language/locallang_db.xlf:pages.palettes.t3onepage;t3onepage,',
	'',
	'after:layout'
);

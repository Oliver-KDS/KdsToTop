<?php
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:kdstotop/Resources/Private/Language/locallang_db.xlf:kdstotop',
        'kdstotop_kdstotop',
        'kdstotop-wizard-icon'
    ],
    'CType',
    'kdstotop'
);

$GLOBALS['TCA']['tt_content']['types']['kdstotop_kdstotop'] = [
    'showitem' => '
       --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,rowDescription,
       --div--;LLL:EXT:kdstotop/Resources/Private/Language/locallang_db.xlf:icon,-palette,
       --palette--;;imaging,--palette--;--div--,
       --div--;LLL:EXT:kdstotop/Resources/Private/Language/locallang_db.xlf:othersettings,-palette,--palette--;;flex,--palette--;
'];

$GLOBALS['TCA']['tt_content']['types']['kdstotop_kdstotop']['columnsOverrides'] = [
    'image' => [
        'label' => '',
        'config' => [
            'type' => 'file',
            'minitems' => 1,
            'maxitems' => 1,
            'allowed' => 'svg',
            'appearance' => [
                'createNewRelationLinkTitle' => 'LLL:EXT:kdstotop/Resources/Private/Language/locallang_db.xlf:icon',
                'fileUploadAllowed' => false,
                'fileByUrlAllowed' => false,
                'elementBrowserEnabled ' => false,
                'collapseAll' => true,
                'enabledControls' => [
                    'dragdrop' => false
                ]
            ]
        ],
    ],
];

$GLOBALS['TCA']['tt_content']['palettes']['imaging'] = [
    'showitem' => 'image'
];
$GLOBALS['TCA']['tt_content']['palettes']['flex'] = [
    'showitem' => 'pi_flexform'
];

$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',kdstotop_kdstotop'] = 'FILE:EXT:kdstotop/Configuration/FlexForms/kdstotop.xml';

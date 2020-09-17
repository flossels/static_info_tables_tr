<?php
defined('TYPO3_MODE') || die;

call_user_func(
    function($extensionKey) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
            sprintf('@import \'EXT:%s/Configuration/TypoScript/Extbase/setup.typoscript\'', $extensionKey)
        );
    }, \Leuchtfeuer\StaticInfoTablesTr\Extension::EXTENSION_KEY
);

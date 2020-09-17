<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (TR)" extension for TYPO3 CMS.
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

namespace Leuchtfeuer\StaticInfoTablesTr\Provider;

use Leuchtfeuer\StaticInfoTablesBg\Extension;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

class TcaProvider
{
    /**
     * @var string Path to language file of labels in the backend
     */
    protected static $LL = 'LLL:EXT:%s/Resources/Private/Language/locallang_db.xlf:%s_item.%s';

    public static function generateAndRegisterTca(array $additionalFields, string $dataSetName)
    {
        foreach ($additionalFields as $sourceField => $destField) {
            $additionalColumns = [];
            $additionalColumns[$destField] = $GLOBALS['TCA'][$dataSetName]['columns'][$sourceField];
            $additionalColumns[$destField]['label'] = sprintf(static::$LL, Extension::EXTENSION_KEY, $dataSetName, $destField);
            ExtensionManagementUtility::addTCAcolumns($dataSetName, $additionalColumns);
            ExtensionManagementUtility::addToAllTCAtypes($dataSetName, $destField, '', 'after:' . $sourceField);
            // Add as search field
            $GLOBALS['TCA'][$dataSetName]['ctrl']['searchFields'] .= ',' . $destField;
        }
    }
}

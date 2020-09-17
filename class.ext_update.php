<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (TR)" extension for TYPO3 CMS.
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

namespace Leuchtfeuer\StaticInfoTablesTr;

use SJBR\StaticInfoTables\Cache\ClassCacheManager;
use SJBR\StaticInfoTables\Utility\DatabaseUpdateUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

class ext_update
{
    public function main(): string
    {
        $objectManager = GeneralUtility::makeInstance(ObjectManager::class);

        // Clear the class cache and update the database
        $objectManager->get(ClassCacheManager::class)->reBuild();
        $objectManager->get(DatabaseUpdateUtility::class)->doUpdate(Extension::EXTENSION_KEY);

        return sprintf(
            '<div class="callout callout-info"><div class="media"><div class="media-left"><span class="fa-stack fa-lg callout-icon"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-info fa-stack-1x"></i></span></div><div class="media-body"><div class="callout-body"><p>%s</p></div></div></div></div>',
            LocalizationUtility::translate('updateLanguageLabels', 'StaticInfoTables', [Extension::EXTENSION_KEY])
        );
    }

    public function access(): bool
    {
        return true;
    }
}

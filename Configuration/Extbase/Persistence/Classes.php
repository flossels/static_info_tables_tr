<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (TR)" extension for TYPO3 CMS.
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

return [
    \SJBR\StaticInfoTables\Domain\Model\Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNameTr' => [
                'fieldName' => 'cn_short_tr',
            ],
        ],
    ],
];

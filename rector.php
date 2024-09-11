<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/docroot/modules/custom/golem',
    ])
    ->withPhpSets(
        php83: true,
    )
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true
    )
    ->withTypeCoverageLevel(0);

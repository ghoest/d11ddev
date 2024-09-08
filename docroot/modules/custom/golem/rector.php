<?php

/**
 * @file
 * Implements Rector.
 */

declare(strict_types=1);

use DrupalRector\Set\Drupal8SetList;
use DrupalRector\Set\Drupal9SetList;
use DrupalRector\Set\Drupal10SetList;
use Rector\Config\RectorConfig;
use Rector\Exception\Configuration\InvalidConfigurationException;
use Rector\CodeQuality\Rector\If_\CombineIfRector;

try {
  return RectorConfig::configure()
    /* https://getrector.com/documentation/define-paths */
    ->withFileExtensions([
      'engine',
      'inc',
      'install',
      'module',
      'php',
      'profile',
      'theme',
    ])
    ->withPaths([
      __DIR__,
    ])

    /* https://getrector.com/documentation/set-lists */
    ->withPhpSets(php83: TRUE)
    ->withPreparedSets(
      codeQuality: TRUE,
      deadCode: TRUE,
    )
    ->withSets([
      Drupal8SetList::DRUPAL_8,
      Drupal9SetList::DRUPAL_9,
      Drupal10SetList::DRUPAL_10,
    ])

    /* https://getrector.com/find-rule */
    ->withRules([])

    /* https://getrector.com/documentation/ignoring-rules-or-paths */
    ->withSkip([
      // When install is less of a 'work in proress', remove this skip.
      CombineIfRector::class => [
        __DIR__ . '/golem.install',
      ],
    ]);
}
catch (InvalidConfigurationException) {
}

<?php

/**
 * @file
 * Contains \Drupal\file\Tests\Migrate\d6\FileMigrationTestTrait.
 */

namespace Drupal\file\Tests\Migrate\d6;

/**
 * Helper for setting up a file migration test.
 */
trait FileMigrationTestTrait {

  /**
   * Setup and execute d6_file migration.
   */
  protected function setUpMigratedFiles() {
    $this->installEntitySchema('file');
    $this->installConfig(['file']);

    /** @var \Drupal\migrate\Plugin\MigrationInterface $migration */
    $migration_plugin_manager = $this->container->get('plugin.manager.migration');

    /** @var \Drupal\migrate\Plugin\migration $migration */
    $migration = $migration_plugin_manager->createInstance('d6_file');
    $source = $migration->get('source');
    $source['site_path'] = 'core/modules/simpletest';
    $migration->set('source', $source);
    $this->executeMigration($migration);
  }

}

<?php

/**
 * @file
 * Contains \Drupal\migrate\Plugin\MigrationPluginManagerInterface.
 */

namespace Drupal\migrate\Plugin;

use Drupal\Component\Plugin\PluginManagerInterface;

/**
 * Migration plugin manager interface.
 */
interface MigrationPluginManagerInterface extends PluginManagerInterface {

  /**
   * Create pre-configured instance of plugin derivatives.
   *
   * @param array $id
   *   Either the plugin ID or the base plugin ID of the plugins being
   *   instantiated. Also accepts an array of plugin IDs and an empty array to
   *   load all plugins.
   * @param array $configuration
   *   An array of configuration relevant to the plugin instances. Keyed by the
   *   plugin ID.
   *
   * @return \Drupal\migrate\Plugin\MigrationInterface[]
   *   Fully configured plugin instances.
   *
   * @throws \Drupal\Component\Plugin\Exception\PluginException
   *   If an instance cannot be created, such as if the ID is invalid.
   */
  public function createInstances($id, array $configuration = array());

}

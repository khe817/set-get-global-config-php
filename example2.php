<?php
/**
 * Example for using different configuration groups based on the same config class
 */

// Name the base class BaseConfig
require __DIR__ . 'class.Config.php';

// Set configuration group as namespace
namespace AConfigGroupName;

class Config extends \BaseConfig {}

/**
 * set configurations for AConfigGroupName here
 * configurations can then later be accessed as:
 * $example_config = \AConfigGroupName\Config::get('example_config_key');
 */
$key = 'test_config';
$value = 'test_value';
Config::set($key, $value);


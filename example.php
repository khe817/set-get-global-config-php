<?php
require __DIR__ . 'class.Config.php';

$key = 'test_config';
$value = 'test_value';
Config::set($key, $value);

echo Config::get($key);
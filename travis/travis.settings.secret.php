<?php
/**
 * @file
 * Secret configuration settings for the site.
 */

// Database.
$databases = array(
  'default' => array(
    'default' => array(
      'database' => 'drupal',
      'username' => 'root',
      'password' => '',
      'host' => '127.0.0.1',
      'driver' => 'mysql',
    ),
  ),
);

$drupal_hash_salt = '';

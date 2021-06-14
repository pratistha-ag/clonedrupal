<?php

      $settings['trusted_host_patterns'] = ['^.*$'];
      /**
      * Database settings:
      */
      $databases['default']['default'] = array (
        'username' => 'root',
        'password' => 'root',
        'host' => 'localhost',
        'driver' => 'mysql',
        'namespace' => 'Drupal\Core\Database\Driver\mysql',
        'database' => 'drupal',
        'prefix' => '',
        'port' => '30059',
      );
      
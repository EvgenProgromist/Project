<?php
return array (
  'utf_mode' =>
  array (
    'value' => true,
    'readonly' => true,
  ),
  'cache_flags' =>
  array (
    'value' =>
    array (
      'config_options' => 3600,
      'site_domain' => 3600,
    ),
    'readonly' => false,
  ),
  'cookies' =>
  array (
    'value' =>
    array (
      'secure' => false,
      'http_only' => true,
    ),
    'readonly' => false,
  ),
  'exception_handling' =>
  array (
    'value' =>
    array (
      'debug' => true,
      'handled_errors_types' => 4437,
      'exception_errors_types' => 4437,
      'ignore_silence' => false,
      'assertion_throws_exception' => true,
      'assertion_error_type' => 256,
      'log' => array (
          'settings' =>
          array (
            'file' => '/var/log/php/exceptions.log',
            'log_size' => 1000000,
        ),
      ),
    ),
    'readonly' => false,
  ),
  'crypto' => 
  array (
    'value' => 
    array (
        'crypto_key' => 'ezo6b5lczm0t133pcvwwsd4ykd42xqzz',
    ),
    'readonly' => true,
  ),
  'connections' =>
  array (
    'value' =>
    array (
      'default' =>
    array (
    // ansible managed
    'className' => '\Bitrix\Main\DB\MysqliConnection',
    'host' => 'localhost:3306',
    'database' => 'sitemanager_statkevich',
    'login'    => 'stud',
    'password' => 'F1Bf1oG3PlwQVlSUe1znZPm327',
    'options' => '2',
    ),
    ),
    'readonly' => true,
  )
);

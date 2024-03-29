<?php 
return array (
  'security' => 
  array (
    'mode' => 'strict',
    'force_https' => false,
    'session_lifespan' => 7200,
    'perform_session_fingerprinting' => true,
    'debug_fingerprint' => false,
  ),
  'debug_and_monitoring' => 
  array (
    'debug' => false,
    'log_stacktrace' => true,
    'stacktrace_length' => 25,
    'report_errors' => false,
  ),
  'info' => 
  array (
    'salt' => 'a2e38bbc8dbbc206ed8b68f4260ab439',
    'instance_id' => 'd52dd6ae-c06e-4e00-a28f-edcf7093d58a',
  ),
  'url' => 'http://localhost/',
  'admin_area_prefix' => '/admin',
  'update_branch' => 'release',
  'maintenance_mode' => 
  array (
    'enabled' => false,
    'allowed_urls' => 
    array (
    ),
    'allowed_ips' => 
    array (
    ),
  ),
  'disable_auto_cron' => false,
  'i18n' => 
  array (
    'locale' => 'en_US',
    'timezone' => 'UTC',
    'date_format' => 'medium',
    'time_format' => 'short',
    'datetime_pattern' => '',
  ),
  'path_data' => '/var/www/html/data',
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'mariadb',
    'port' => '3306',
    'name' => 'fossbilling',
    'user' => 'dbuser',
    'password' => 'bitnami',
  ),
  'twig' => 
  array (
    'debug' => false,
    'auto_reload' => true,
    'cache' => '/var/www/html/data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
    'throttle_delay' => 2,
    'rate_span_login' => 60,
    'rate_limit_login' => 20,
    'CSRFPrevention' => true,
    'rate_limit_whitelist' => 
    array (
    ),
  ),
);
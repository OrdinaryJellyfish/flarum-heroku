<?php
// if using with Heroku ClearDB add-on
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

return array (
  'debug' => false,
  'database' =>
  array (
    'driver' => 'mysql',
    'host' => $url["host"],
    'port' => 3306,
    'database' => substr($url["path"], 1),
    'username' => $url["user"],
    'password' => $url["pass"],
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => NULL,
    'strict' => false,
    'engine' => 'InnoDB',
    'prefix_indexes' => true,
  ),
  'url' => 'https://example.com',
  'paths' =>
  array (
    'api' => 'api',
    'admin' => 'admin',
  ),
);

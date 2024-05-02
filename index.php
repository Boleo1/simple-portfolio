<?php
session_start();

define('BASE_URL', '/portfolio/');
require_once 'src/core/Router.php';

$config = parse_ini_file('config.ini', true);

if (!$config) {
    die('Unable to load the configuration file.');
}

define('DB_USER', $config['database']['user']);
define('DB_PASS', $config['database']['password']);
define('DB_HOST', $config['database']['host']);
define('DB_NAME', $config['database']['name']);

$router = new Router();
$router->route(); 
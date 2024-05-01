<?php
define('BASE_URL', '/simple-portfolio/');
require_once 'src/core/Router.php';

$config = parse_ini_file('config.ini', true);

if (!$config) {
    die('Unable to load the configuration file.');
}

$router = new Router();
$router->route();


<?php
if ( '/favicon.ico' == $_SERVER['REQUEST_URI'] ) {
    header( 'Content-Type: image/vnd.microsoft.icon' );
    exit;
}

define('EZRA_START_TIMESTAMP', microtime(true));
define('EZRA_MODE', 'web');
define('EZRA_PATH', realpath(__DIR__ . '/..'));

require_once EZRA_PATH . '/vendor/autoload.php';
require_once EZRA_PATH . '/env.php';

date_default_timezone_set('UTC');
mb_internal_encoding('UTF-8');
error_reporting(EZRA_ERROR);

$platform = new \Ezra\Framework\Core\WebPlatform(
    EZRA_PATH,
    new \Ezra\Framework\Core\Config(EZRA_PATH.'/config'),
    new \Ezra\Framework\Core\Container(),
    new \Ezra\Framework\Core\ReflectionResolver(),
    new \Ezra\Framework\Core\Hook()
);

$platform->run();
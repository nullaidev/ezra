<?php
if ( '/favicon.ico' == $_SERVER['REQUEST_URI'] ) {
    header( 'Content-Type: image/vnd.microsoft.icon' );
    exit;
}

define('EZRA_START_TIMESTAMP', microtime(true));
define('EZRA_WEB', true);
define('EZRA_PATH', realpath(__DIR__ . '/..'));

require_once EZRA_PATH . '/vendor/autoload.php';
require_once EZRA_PATH . '/env.php';

$platform = new \Ezra\Framework\Platform(EZRA_PATH);
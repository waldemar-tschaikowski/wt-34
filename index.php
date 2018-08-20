<?php
include __DIR__ . '/vendor/autoload.php';

defined('ENVDIR') || define('ENVDIR', realpath('App/'));
defined('ENV') || define('ENV', 'app');

$app = new App\Base\StartApplication();

$app['session'] = unserialize($_SESSION['Foo']['session']);


$app->run();

?>
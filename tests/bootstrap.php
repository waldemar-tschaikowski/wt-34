<?php
/**
 * @author waldemar.tschaikowsk
 * @version $Id$
 */

error_reporting(E_ALL | E_STRICT);

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);

defined('ENVDIR') || define('ENVDIR', realpath('App/'));
defined('ENV') || define('ENV', 'app');

include __DIR__ . '/../vendor/autoload.php';


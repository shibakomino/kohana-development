<?php
//nothing to do right now.
date_default_timezone_set('America/Chicago');
setlocale(LC_ALL, 'en_US.utf-8');
mb_internal_encoding('UTF-8');
mb_substitute_character('none');

define('EXT', '.php');
define('DOCROOT', realpath(dirname(__FILE__).'/../web/') . '/');
define('APPPATH', realpath(DOCROOT . 'application') . '/');
define('MODPATH', realpath(DOCROOT . 'modules') . '/');
define('SYSPATH', realpath(DOCROOT . 'system') . '/');
define('DEV_MODPATH', realpath(DOCROOT . '../dev-modules/') . '/');

require '../web/system/classes/Kohana.php';

spl_autoload_register(['Kohana', 'auto_load_PSR4']);

Kohana::init(Kohana::DEVELOPMENT);
Kohana::modules([
//    'core-config'  => MODPATH . 'core/config',
    'core-wrapper' => MODPATH . 'core/wrapper',
    'core-log'     => MODPATH . 'core/log',
    ]);
Kohana::modules_init();
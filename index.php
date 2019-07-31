<?php

define('BASEDIR', __DIR__ . '/');
include BASEDIR . 'Lib/AutoLoader.php';
spl_autoload_register('\\Lib\\AutoLoader::autoLoader');


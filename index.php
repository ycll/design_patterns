<?php
/**
 * 入口文件
 */

use Lib\Factory\AbstractFactory\ConcreteFactory1;
use Lib\Factory\AbstractFactory\ConcreteFactory2;

define('BASEDIR', __DIR__ . '/');
include BASEDIR . 'Lib/AutoLoader.php';
spl_autoload_register('\\Lib\\AutoLoader::autoLoader');

$a = new ConcreteFactory1();
$a->CreateProductA()->show();
$a->CreateProductB()->show();

$b = new ConcreteFactory2();
$b->CreateProductA()->show();
$b->CreateProductB()->show();



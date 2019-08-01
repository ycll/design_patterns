<?php
/**
 * 入口文件
 */

use Lib\Factory\AbstractFactory\ConcreteFactory1;
use Lib\Factory\AbstractFactory\ConcreteFactory2;
use Lib\Single\Database;

define('BASEDIR', __DIR__ . '/');
include BASEDIR . 'Lib/AutoLoader.php';
spl_autoload_register('\\Lib\\AutoLoader::autoLoader');

// 抽象工厂模式
//$a = new ConcreteFactory1();
//$a->CreateProductA()->show();
//$a->CreateProductB()->show();
//
//$b = new ConcreteFactory2();
//$b->CreateProductA()->show();
//$b->CreateProductB()->show();

// 单例模式
//$single = Database::getInstance();
//var_dump($single);

// 适配器模式
//$obj = new \Lib\Adapter\RealDo();
//$adapter = new \Lib\Adapter\Adapter($obj);
//$adapter->push();



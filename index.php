<?php

define('BASEDIR', __DIR__ . '/');
include BASEDIR . 'Lib/AutoLoader.php';
spl_autoload_register('\\Lib\\AutoLoader::autoLoader');

Lib\Object::testObj();
echo PHP_EOL;
App\Controller\Home\Index::test();

// spl 栈
$stack = new SplStack();
// 入栈
$stack->push('data1');
$stack->push('data2');
// 出栈
echo $stack->pop();
echo PHP_EOL;
echo $stack->pop();
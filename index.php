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

// sql 队列
$queue = new SplQueue();
// 入队
$queue->enqueue('data1');
$queue->enqueue('data2');
// 出队
echo $queue->dequeue();
echo PHP_EOL;
echo  $queue->dequeue();

// sql 堆（最小堆）
$heap = new SplMinHeap();
// 入堆
$heap->insert('data1');
$heap->insert('data2');
// 提取
echo $heap->extract();
echo PHP_EOL;
echo $heap->extract();

// spl 固定大小的数组
$array = new SplFixedArray(10);
$array[1] = 1;
$array[6] = 6;

var_dump($array);
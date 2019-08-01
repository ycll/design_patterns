<?php
namespace Lib\Adapter;

/**
 * Class RealDo
 * @package Lib\Adapter
 * 新业务的函数名和原来业务函数名不一致，就需要适配器适配
 */
class RealDo
{
    public function noPush() {
        echo 'I am the really worker!';
    }
}
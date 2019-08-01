<?php
namespace Lib\Adapter;

/**
 * Class Adapter
 * @package Lib\Adapter
 * 适配器
 */
class Adapter implements Target
{
    /** @var RealDo */
    protected $obj;

    public function __construct($obj)
    {
        $this->obj = $obj;
    }

    public function push()
    {
       $this->obj->noPush();
    }
}

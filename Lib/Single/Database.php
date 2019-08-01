<?php
namespace Lib\Single;

/**
 * Class Database
 * @package Lib\Single
 * 单例模式
 */
class Database
{
    /** @var $instance Database */
    private $instance;

    private function __construct()
    {
        // TODO
    }

    /**
     * 防止克隆
     */
    private function __clone()
    {
    }

    /**
     * @return Database
     */
    public function getInstance() : Database
    {
        if (!$this->instance instanceof self) {
            $this->instance = new self();
        }
        return $this->instance;
    }
}

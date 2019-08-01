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
    static private $instance;

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
    static public function getInstance() : Database
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

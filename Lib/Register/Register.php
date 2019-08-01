<?php
namespace Lib\Register;

/**
 * Class Register
 * @package Lib\Register
 * 注册树模式
 */
class Register
{
    /** @var  $objects array */
    static protected $objects;

    /**
     * @param $alias
     * @param $object
     * 注册对象
     */
    static public function set($alias, $object) {
        self::$objects[$alias] = $object;
    }

    /**
     * @param $alias
     * 销毁对象
     */
    static public function _unset($alias) {
        unset(self::$objects[$alias]);
    }

    /**
     * @param $alias
     * @return mixed
     * 获取对象
     */
    static public function get($alias) {
        return self::$objects[$alias];
    }
}
<?php
namespace Lib;

/**
 * @property string title
 */
class Object
{
    protected $array = [];

    /**
     * @param $name
     * @param $value
     * 当对象设置不存在的属性的时候执行的函数
     */
    public function __set($name, $value) :void
    {
        $this->array[$name] = $value;
    }

    /**
     * @param $name
     * @return mixed
     * 当对象访问不存在的属性的时候执行的函数
     */
    public function __get($name)
    {
        return $this->array[$name];
    }

    /**
     * @param $name
     * @param $arguments
     * @return string
     * 当对象调用不存在的方法的时候执行的函数
     */
    public function __call($name, $arguments) :string
    {
        return 'function ' . $name . ' not found';
    }

    /**
     * @param $name
     * @param $arguments
     * @return string
     * 当调用的静态方法不存在的时候执行的函数
     */
    static function __callStatic($name, $arguments) :string
    {
        return 'static function ' . $name . ' not found';
    }

    /**
     * @return string
     * 当对象被当做字符串输出的时候执行的函数 eg: echo $obj;
     */
    public function __toString() :string
    {
        return __CLASS__;
    }

    /**
     * @return string
     * 当对象被当做函数使用的时候执行的函数 eg: echo $obj();
     */
    public function __invoke() :string
    {
        return 'invoke';
    }
}
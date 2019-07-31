<?php
namespace Lib\Factory\Simple;

use App\Product\Product;
use App\Product\ProductA;
use App\Product\ProductB;

/**
 * Class Factory
 * @package Lib
 * 工厂模式，工厂方法或者类生成对象，而不是在代码中直接new。
 * 使用工厂模式，可以避免当改变某个类的名字或者方法之后，在调用这个类的所有的代码中都修改它的名字或者参数，只需要在工厂类里修改需要new的
 * 类名即可。如果我们不使用工厂方式实例化这些类，则需要每一个类都需要new一遍，过程不可控，类多了，到处都是new的身影引进工厂模式，通过工厂
 * 统一创建对象实例。
 * 分类：简单工厂模式，工厂（方法）模式，抽象工厂模式
 * 本例为简单工厂模式
 */
class SimpleFactory
{
    /**
     * @param string $type
     * @return Product
     */
    public static function createProduct(string $type) : Product
    {
        $product = null;
        switch ($type) {
            case 'A':
                $product = new ProductA();
                break;
            case 'B':
                $product = new ProductB();
                break;
        }
        return $product;
    }
}
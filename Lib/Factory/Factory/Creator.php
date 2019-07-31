<?php
namespace Lib\Factory\Factory;

use App\Product\Product;

/**
 * Class Creator
 * @package Lib\Factory\Factory
 * 工厂方法模式对比简单工厂来说，最核心的一点，其实就是将实现推迟到子类。怎么理解呢？我们可以将上回的简单工厂当做父类，然后有一堆子类去
 * 继承它。createProduct()这个方法在父类中也变成一个抽象方法。然后所有的子类去实现这个方法，不再需要用switch去判断，子类直接返回一个实
 * 例化的对象即可。
 */
abstract class Creator
{
    /**
     * @return Product
     * 抽象工厂方法
     */
    abstract protected function FactoryMethod() :Product;

    /**
     * @return Product
     * 操作方法
     */
    public function AnOperation() :Product {
        return  $this->FactoryMethod();
    }
}

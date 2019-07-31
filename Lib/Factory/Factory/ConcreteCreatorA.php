<?php
namespace Lib\Factory\Factory;

use App\Product\Product;
use App\Product\ProductA;

class ConcreteCreatorA extends Creator
{
    protected function FactoryMethod(): Product {
        return new ProductA();
    }
}

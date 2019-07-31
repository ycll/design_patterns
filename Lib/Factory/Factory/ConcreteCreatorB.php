<?php
namespace Lib\Factory\Factory;

use App\Product\Product;
use App\Product\ProductB;

class ConcreteCreatorB extends Creator
{
    protected function FactoryMethod(): Product {
        return new ProductB();
    }
}

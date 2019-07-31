<?php
namespace Lib\Factory\AbstractFactory;

use App\Product\AbstractProduct\ProductA\ProductA;
use App\Product\AbstractProduct\ProductA\ProductA2;
use App\Product\AbstractProduct\ProductB\ProductB;
use App\Product\AbstractProduct\ProductB\ProductB2;

class ConcreteFactory2 implements AbstractFactory
{
    public function CreateProductA(): ProductA
    {
        return new ProductA2();
    }

    public function CreateProductB(): ProductB
    {
        return new ProductB2();
    }
}

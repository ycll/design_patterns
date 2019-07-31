<?php
namespace Lib\Factory\AbstractFactory;

use App\Product\AbstractProduct\ProductA\ProductA1;
use App\Product\AbstractProduct\ProductA\ProductA;
use App\Product\AbstractProduct\ProductB\ProductB;
use App\Product\AbstractProduct\ProductB\ProductB1;

class ConcreteFactory1 implements AbstractFactory
{
    public function CreateProductA(): ProductA
    {
        return new ProductA1();
    }

    public function CreateProductB(): ProductB
    {
        return new ProductB1();
    }
}

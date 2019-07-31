<?php
namespace Lib\Factory\AbstractFactory;

use App\Product\AbstractProduct\ProductA\ProductA;
use App\Product\AbstractProduct\ProductB\ProductB;

interface AbstractFactory
{
    // 创建A
    public function CreateProductA() : ProductA;
    // 创建B
    public function CreateProductB() : ProductB;
}

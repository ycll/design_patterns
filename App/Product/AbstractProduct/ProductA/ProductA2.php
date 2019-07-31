<?php
namespace App\Product\AbstractProduct\ProductA;

class ProductA2 implements ProductA
{
    public function show(): void
    {
        echo 'ProductA ProductA2', PHP_EOL;
    }
}

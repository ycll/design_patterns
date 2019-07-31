<?php
namespace App\Product\AbstractProduct\ProductA;

class ProductA1 implements ProductA
{
    public function show(): void
    {
        echo 'ProductA ProductA1', PHP_EOL;
    }
}

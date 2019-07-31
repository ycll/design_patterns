<?php
namespace App\Product\AbstractProduct\ProductB;

class ProductB2 implements ProductB
{
    public function show(): void
    {
        echo 'ProductA ProductA2', PHP_EOL;
    }
}

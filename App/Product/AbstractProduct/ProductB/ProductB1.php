<?php
namespace App\Product\AbstractProduct\ProductB;

class ProductB1 implements ProductB
{
    public function show(): void
    {
        echo 'ProductB ProductB1', PHP_EOL;
    }
}

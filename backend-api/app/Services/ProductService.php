<?php
namespace App\Services;
class ProductService
{
    public function getProducts()
    {
        return [
            ['id' => 1, 'name' => 'Gundam Barbatos - Metal Grade', 'price' => 21.00],
            ['id' => 2, 'name' => 'Gundam Exia - Metal Grade', 'price' => 27.00],
            ['id' => 3, 'name' => 'Gundam Dynames - Metal Grade', 'price' => 33.00],
        ];
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Pokemon Card - Pikachu',
                'price' => 9.99,
                'stock' => 10,
            ],
            [
                'name' => 'Pokemon Card - Charizard',
                'price' => 14.99,
                'stock' => 5,
            ],
            [
                'name' => 'Pokemon Card - Blastoise',
                'price' => 11.99,
                'stock' => 8,
            ],
        ]);
    }
}
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get( 
    '/products', function() {
        return response()->json([
            'message' => 'Welcome to the Product',
            'data' => [
                'id' => 1,
                'name' => 'Pokemon Card - Pikachu',
                'price' => 9.99
            ],
            [
                'id'=> 2,
                'name'=> 'Pokemon Card - Charizard',
                'price' => 14.99
            ],
            [
                'id'=> 3,
                'name'=> 'Pokemon Card - Blastoise',
                'price' => 11.99
            ]
        ]);
    }
);

Route::post(
    '/products',
    [ProductController::class, 'store']
);


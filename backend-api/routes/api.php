<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Http\Controllers\AuthController;


Route::get( 
    '/products', function() {
        return response()->json([
            'message' => 'Welcome to the Product',
            'data' => Product::all()
        ]);
    }
);

Route::post(
    '/products',
    [ProductController::class, 'store']
);

Route::put(
    '/products/{id}', 
    [ProductController::class, 'update']
    );

Route::patch(
    '/products/{id}', 
    [ProductController::class, 'update']
    );

Route::delete(
    '/products/{id}', 
    [ProductController::class, 'destroy']
    );

Route::post(
    '/login', 
    [AuthController::class, 'login']
);
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get( 
    '/products', 
    [ProductController::class, 'index'] 
)-> middleware('request.logger');

Route::post(
    '/products',
    [ProductController::class, 'store']
)-> middleware('request.logger');


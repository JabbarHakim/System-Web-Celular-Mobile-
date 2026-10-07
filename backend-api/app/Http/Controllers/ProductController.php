<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    private ProductService $productService;

    public function __construct(
        ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getProducts();
        return response()->json([
            'message' => 'List of products',
            'data' => $products,
        ]);
    }


    public function store(Request $request)
    {
        try{
            $validated = $request->validate([
                'name' => 'required|string|max:100',
                'price' => 'required|numeric|min:0.00',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], 422);
        

        Log::info('Request', $validated);

        return response()->json([
            'message' => 'Product created successfully',
            'data' => $validated,
        ], 201);
    } catch (\Exception $e) {
        Log::error('Error creating product: ' . $e->getMessage());
        return response()->json([
            'message' => 'An error occurred while creating the product',
            'error' => $e->getMessage(),
        ], 500);
    }
}
}

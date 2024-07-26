<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get()->map(function ($product) {
            $product->image = url($product->image);
            $product->category->image = url($product->category->image);
            return $product;
        });

        return $products;
    }

    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->validated());
        $product->image = url($product->image);
        $product->category->image = url($product->category->image);

        return response()->json($product, 201);
    }

    public function show(Product $product)
    {
        $product->image = url($product->image);
        $product->category->image = url($product->category->image);

        return $product->load('category');
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        $product->image = url($product->image);
        $product->category->image = url($product->category->image);

        return response()->json($product);
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return response()->noContent();
    }
}

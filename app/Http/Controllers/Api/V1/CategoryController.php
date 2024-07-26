<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all()->map(function ($category) {
            $category->image = url($category->image);
            return $category;
        });

        return $categories;
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create($request->validated());
        $category->image = url($category->image);

        return response()->json($category, 201);
    }

    public function show(Category $category)
    {
        $category->image = url($category->image);
        return $category;
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        $category->image = url($category->image);

        return $category;
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->noContent();
    }
}

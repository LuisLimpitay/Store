<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequests;
use App\Http\Requests\Category\UpdateCategoryRequests;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(StoreCategoryRequests $request)
    {
        Category::create($request->all());
        return redirect()->route('admin.categories.index');
    }


    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }


    public function update(UpdateCategoryRequests $request, Category $category)
    {
        Category::create($request->all());
        return redirect()->route('admin.categories.index');
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index');
    }
}
